<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;

use Symfony\Component\Form\FormTypeInterface;

use App\Entity\Wall;
use App\Entity\Comment;
use App\Entity\Group;
use App\Entity\Subscriptions;
use App\Entity\Content2;


use App\Form\WallType;
use App\Form\CommentType;
use App\Form\CommentEditType;
use App\Form\WallEditType;

class WallController extends Controller
{
	public function index(Request $request)
	{

		$user_id = $this->getUser()->getId();
		$username = $this->getUser();

		$em = $this->getDoctrine()->getManager();

		$wallusercontent = $this->getDoctrine()->getRepository(Wall::class);

		$usercontent = $wallusercontent->findBy(['accounts' => $user_id]);

		
		$tcontent = array();
		$content = array();

		$ccnt = array();

		$cnt = count($usercontent);

		$walldir = $this->getParameter('walldir');

                if(!file_exists($walldir))
                {
                        mkdir("$walldir");
                        mkdir("$walldir/title");
                        mkdir("$walldir/content");
                }

		$avataruri = "/avatar/$user_id.jpeg";
		
		if(file_exists("/var/www/port119/public" . $avataruri))
		{
			$avatar = $avataruri;
		} else
		{
			$avatar = "brak";
		}



		$ucdn = new Wall();

#neq here

		$wallform = $this->createForm(WallType::class, array("id" => $user_id));
		$wallform->handleRequest($request);

		if($wallform->isSubmitted())# && $wallform->isValid())
		{

			$groups = $wallform->get('groups')->getData();

			$groups = $request->request->get('wall');

			if(isset($groups['groups']))
			{
				$groups = $groups['groups'];
			} else
			{
				$groups=null;
			}



			if($groups)
			{
				while(list($k, $v) = each($groups))
				{


		#			while(list($k2, $v2) = each($v))
		#			{


						$groupid = $this->getDoctrine()->getRepository(Group::class)->findBy(['id' => "$v"]);
						$groupid = $groupid[0];#->getId();

						#$groupid = $v;
						
						$title = $wallform->get('title')->getData();
						$content = $wallform->get('content')->getData();

						$contentobj = new Content2();




						$contentobj->setTitle($title);
						$contentobj->setGroups($groupid);
						$contentobj->setAccounts($this->getUser());
						$contentobj->setCreatedAt(new \DateTime());

						$em = $this->getDoctrine()->getManager();

						$em->persist($contentobj);
						$em->flush();

						file_put_contents($this->getParameter('contentdatadir') . "/" . $contentobj->getId(), $content);#$wallform->get('content'));

						

					#}
				}
			}


			$fname = md5(uniqid());

			$title = $wallform->get('title')->getData();
			$content = $wallform->get('content')->getData();

			$ucdn->setAccounts($username);
			$ucdn->setFilename($fname);
			$ucdn->setCreatedAt(new \DateTime());

			$em->persist($ucdn);
			$em->flush();

			$content = preg_replace("/\n/", "<br />", $content);

			file_put_contents("$walldir/title/$fname", $title);
			file_put_contents("$walldir/content/$fname", $content);

			$this->get('session')->getFlashbag()->add('wallsuccess', 'Wpis dodany.');

			return $this->redirectToRoute('wall');
		}

		$ccntvar = 0;


		while(list($k, $v) = each($usercontent))
		{
			$fname = $v->getFilename();
			$tcontent[$fname] = file_get_contents("$walldir/title/$fname");
			$content[$fname] = file_get_contents("$walldir/content/$fname");

			$widvar = $v->getId();

			$commentusercontent = $this->getDoctrine()->getRepository(Comment::class)->findBy(['wid' => $widvar]);

			$ccnt[$fname] = count($commentusercontent);
			$ccntvar += count($commentusercontent);

		}




		$subscriptions = $this->getDoctrine()->getRepository(Subscriptions::class)->findBy(['accounts' => $user_id]);

		$subs = count($subscriptions); 


		return $this->render('port119/wall.html.twig', ['username' => $username, 'cnt' => $cnt, 'form' => $wallform->createView(), 'usercontent' => $usercontent, 'tcontent' => $tcontent, 'content' => $content, 'avatar' => $avatar, 'uid' => $user_id, 'ccnt' => $ccnt, 'subs' => $subs, 'ccntvar' => $ccntvar]);


	}

	public function comment(Request $request, Wall $id)
	{
		$username = $this->getUser();
		$user_id = $this->getUser()->getId();

		$fname = md5(uniqid());

		$cnt = array();
		$editmark = array();

		$commentusercontent = $this->getDoctrine()->getRepository(Comment::class);
		$content = $commentusercontent->findBy(['wid' => $id]);

		$ucnt = count($content);

		$cdir = $this->getParameter('cdir');

		while(list($k, $v) = each($content))
		{
			$key = $content[$k]->getFilename();
			$cnt[$key] = file_get_contents("$cdir/$key");

			$uid_id = $content[$k]->getUid()->getId();

			if($user_id == $uid_id)
			{
				$editmark[$user_id] = 1;
			}
		}



		$avataruri = "/avatar/$user_id.jpeg";

		if(file_exists("/var/www/port119/public" . $avataruri))
		{
			$avatar = $avataruri;
		} else
		{
			$avatar = "brak";
		}


		$em = $this->getDoctrine()->getManager();

		$cform = $this->createForm(CommentType::class);
		$cform->handleRequest($request);

		$cdir = $this->getParameter('cdir');

		$cobj = new Comment();

		if($cform->isSubmitted() && $cform->isValid())
		{
			$content = $cform->get('content')->getData();
			$content = preg_replace("/\n/", "<br />", $content);

			$cobj->setFilename($fname);
			$cobj->setWid($id);
			$cobj->setUid($username);
			$cobj->setCreatedAt(new \DateTime());

			$em->persist($cobj);
			$em->flush();

			if(!file_exists($cdir))
			{
                        	mkdir("$cdir");
			}

			file_put_contents("$cdir/$fname", $content);

			$this->get('session')->getFlashbag()->add('success', 'Komentarz dodany.');
			return $this->redirectToRoute('wall_comment', ['id' => $id->getId()]);

		}

		$subs = "SUBSCRIPTIONS";



		return $this->render('port119/wall_comment.html.twig', ['subs' => $subs, 'username' => $username, 'cform' => $cform->createView(), 'cnt' => $cnt, 'content' => $content, 'ucnt' => $ucnt, 'avatar' => $avatar, 'editmark' => $editmark]);

	}

	public function comment_edit(Request $request, Comment $cid, Wall $wid)
	{

		$username = $this->getUser();

		$cdir = $this->getParameter('cdir');

		$uid = $cid->getUid()->getId();
                $uid2 = $this->getUser()->getId();

		if($uid != $uid2)
		{
			return new Response("don't hack me yo");
		}

		$fname = $cid->getFilename();


		$editform = $this->createForm(CommentEditType::class, array("fname" => $fname));
		$editform->handleRequest($request);

		if($editform->isSubmitted() && $editform->isValid())
		{

			$content = $editform->get('content')->getData();
			
			$content = preg_replace("/\n/", "<br />", $content);

			file_put_contents("$cdir/$fname", $content);
					
			$this->get('session')->getFlashbag()->add('success', 'Komentarz zapisany.');
			return $this->redirectToRoute('wall_comment', ['id' => $wid->getId()]);

		}

		return $this->render('port119/wall_edit.html.twig', [ 'username' => $username, 'editform' => $editform->createView(), ]);

	}

	public function comment_delete(Request $request, Comment $cid, Wall $wid)
	{
		$cdir = $this->getParameter('cdir');

		$uid = $cid->getUid()->getId();
		$uid2 = $this->getUser()->getId();

		$w_id = $wid->getId();
		$wid2 = $wid->getAccounts()->getId();

		$fname = $cid->getFilename();

		$username = $this->getUser();

		$em = $this->getDoctrine()->getManager();

#		$comment = $em->find("\App\Entity\Comment", $cid);


		if($uid2 != $wid2) 
		{
			return new Response("don't hack me yo");
		}

                if(file_exists("$cdir/$fname"))
                {
                        unlink("$cdir/$fname");
                }

#		$em->remove($comment);

#		$em->flush();

		$q = $em->createQuery('delete from App\Entity\Comment c where c.wid = :wid and c.uid = :uid and c.filename = :fname')->setParameters(array('wid' => $wid, 'uid' => $uid, 'fname' => $fname));
		$q->execute();

                $this->get('session')->getFlashbag()->add('success', 'Wpis usunięty.');


		return $this->redirectToRoute('wall_comment', ['id' => $w_id]);



	}

        public function mass_delete(Request $request, $uid)
	{
		$em = $this->getDoctrine()->getManager();

		$uid2 = $this->getUser()->getId();

		if($uid != $uid2) {
			return new Response("don't hack me yo");
		}

		$walldir = $this->getParameter('walldir');

		$data = $request->request;

		while(list($k, $v) = each($data))
		{
			while(list($k2, $v2) = each($v))
			{
				$filename = $this->getDoctrine()->getRepository(Wall::class)->findBy(['id' => $k2]);



				$fname = $filename[0]->getFilename();




				$q = $em->createQuery('delete from App\Entity\Wall p where p.id = :id')->setParameters(array('id' => $k2));
				$q->execute();				

				unlink("$walldir/content/$fname");
				unlink("$walldir/title/$fname");




			}
		}

		$this->get('session')->getFlashbag()->add('success', 'Wpisy usunięte.');

		return $this->redirectToRoute('wall');

	}

	public function post_delete(Request $request,  Wall $id)
	{
		$walldir = $this->getParameter('walldir');

                $em = $this->getDoctrine()->getManager();

		$user_id = $this->getUser()->getId();

		$username = $this->getUser();
		
		$wallusercontent = $this->getDoctrine()->getRepository(Wall::class);

		$usercontent = $wallusercontent->findBy(['id' => $id]);

		$checkid = $usercontent[0]->getAccounts()->getId();


		if($checkid != $user_id)
		{
			return new Response("don't hack me yo");
		}	

		$filename = $this->getDoctrine()->getRepository(Wall::class)->findBy(['id' => $id]);

                $q = $em->createQuery('delete from App\Entity\Comment p where p.wid = :id')->setParameters(array('id' => $id));
                $q->execute();



		$fname = $filename[0]->getFilename();

		$em->remove($id);

		$em->flush();	


		unlink("$walldir/content/$fname");
		unlink("$walldir/title/$fname");
		#neqecho "$fname"; die;


		$this->get('session')->getFlashbag()->add('success', 'Wpis usunięty.');
		
		return $this->redirectToRoute('wall');

	}

	public function edit(Request $request, Wall $id)
	{
		$em = $this->getDoctrine()->getManager();

		$user_id = $this->getUser()->getId();

		$username = $this->getUser();

		$wallusercontent = $this->getDoctrine()->getRepository(Wall::class);

		$usercontent = $wallusercontent->findBy(['accounts' => $user_id, 'id' => $id]);

		$checkid = $usercontent[0]->getAccounts()->getId();

		if($checkid != $user_id)
		{
			return new Response("dont hack me yo");
		}

		$fname = $id->getFilename();

		$editform = $this->createForm(WallEditType::class, array($fname));
		$editform->handleRequest($request);
	
		if($editform->isSubmitted() && $editform->isValid())
		{
			$walldir = $this->getParameter('walldir');

			$title = $editform->get('title')->getData();
			$content = $editform->get('content')->getData();

			$content = preg_replace("/\n/", "<br />", $content);

			file_put_contents("$walldir/title/$fname", $title);
			file_put_contents("$walldir/content/$fname", $content);
			
			return $this->redirectToRoute('wall');

		}


		return $this->render('port119/wall_edit.html.twig', [ 'username' => $username, 'editform' => $editform->createView(), ]);
	}

}
