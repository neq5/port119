<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Friends;
use App\Entity\Album;
use App\Entity\Wall;
use App\Entity\ProfileVisits;
use App\Entity\Comment;
use App\Entity\GalleryComment;

use App\Entity\Group;
use App\Entity\GroupVists;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


use App\Form\CommentType;

use App\Form\CommentEditType;
use App\Form\GalleryCommentEditType;

use App\Form\UserSpaceGalleryCommentType;

class UserSpaceController extends Controller
{
	/*
	public function remove(Request $request, $uid, $pid)
	{
		$em = $this->getDoctrine()->getManager();

		$repository = $this->getDoctrine()->getRepository(Friends::class);

		$fremove = $repository->findBy(['party' => $pid, 'user' => $uid]);

		$em->remove($fremove[0]);
		$em->flush();

		$fremove2 = $repository->findBy(['party' => $uid, 'user' => $pid]);

		$em->remove($fremove2[0]);
		$em->flush();

		$this->get('session')->getFlashbag()->add('success', 'Znajomość usunięta.');
		return $this->redirectToRoute('userspace', ['uid' => $pid]);


	}
	 */

	public function add(Request $request, User $uid, User $pid)
	{
		$em = $this->getDoctrine()->getManager();

		#$uid = $uid->getId();
		#$pid = $pid->getId();
		
		$party_id = $pid->getId();

		$friends = new Friends();

		$friends->setUser($uid);
		$friends->setParty($pid);

		$friends->setCreatedat(new \DateTime());
		$friends->setConfirmed(false);

		$em->persist($friends);
		$em->flush();

		/*
		$friends = new Friends();

		$friends->setUser($pid);
		$friends->setParty($pid);

		$friends->setCreatedat(new \DateTime());
		$friends->setConfirmed(false);

		$em->persist($friends);
		$em->flush();
		 */

		$this->get('session')->getFlashbag()->add('success', 'Wysłano zaproszenie.');
		return $this->redirectToRoute('userspace', ['uid' => $party_id]);
	}


	public function remove(Request $request, $uid, $pid)
	{
		$em = $this->getDoctrine()->getManager();

		$repository = $this->getDoctrine()->getRepository(Friends::class);

		$fremove = $repository->findBy(['party' => $pid, 'user' => $uid]);

		$em->remove($fremove[0]);
		$em->flush();

		$fremove2 = $repository->findBy(['party' => $uid, 'user' => $pid]);

		$em->remove($fremove2[0]);
		$em->flush();

		$this->get('session', 'Znajomość usunięta.');

		$party_id = $pid;

		return $this->redirectToRoute('userspace', ['uid' => $party_id]);
	}
	public function confirm(Request $request, Friends $fid, User $uid, User $pid)
	{
		#return new Response($fid->getId() . " " . $uid->getId() . " " . $pid->getId());

		$em = $this->getDoctrine()->getManager();

		$friendrecord = $this->getDoctrine()->getRepository(Friends::class)->find($fid);

		$friendrecord->setConfirmed(true);


		$em->persist($friendrecord);
		$em->flush();

		$friends = new Friends();

		$friends->setUser($uid);
		$friends->setParty($pid);

		$friends->setCreatedAt(new \DateTime());

		$friends->setConfirmed(true);

		$em->persist($friends);
		$em->flush();

		$this->get('session')->getFlashbag()->add('success', 'Potwierdzono zaproszenie.');

		$party_id = $pid->getId();

		return $this->redirectToRoute('userspace', ['uid' => $party_id]);



		#return new Response("fid: $fid $uid $pid");
	}

	public function userspacecomment_edit(Request $request, Comment $cid, Wall $wid)
	{
		$cdir = $this->getParameter('cdir');

		$username = $this->getUser();

		$em = $this->getDoctrine()->getManager();

		$uid = $cid->getUid()->getId();
		$uid2 = $this->getUser()->getId();

		if($uid != $uid2)
		{
			return new Response("Don't hack me yo");
		}

		$filename = $cid->getFilename();

		#echo "<pre>"; var_dump($filename); die;

		$comment = $em->find("App\Entity\Comment", $cid);

		$commentform = $this->createForm(CommentEditType::class, array("fname" => $filename));
		$commentform->handleRequest($request);


		if($commentform->isSubmitted() && $commentform->isValid())
		{
			$content = $commentform->get('content')->getData();
			if(file_exists("$cdir/$filename"))
			{
				unlink("$cdir/$filename");
			}

			file_put_contents("$cdir/$filename", $content);

			return $this->redirectToRoute('userspacewall_comment', ['uid' => $wid->getId()]);
			
		}

		return $this->render('port119/userspace_wall_comment_edit.html.twig', [ 'username' => $username, 'commentform' => $commentform->createView()]);
		#return new Response("2blah");
	}

	public function userspacecomment_delete(Request $request, Comment $cid, Wall $wid)
	{
		$cdir = $this->getParameter('cdir');

		$uid = $cid->getUid()->getId();
		$uid2 = $this->getUser()->getId();

		$wid = $wid->getId();

		$fname = $cid->getFilename();

		$username = $this->getUser();

		$em = $this->getDoctrine()->getManager();
		$comment = $em->find("App\Entity\Comment", $cid);


		if($uid != $uid2)
		{
			return new Response("Don't hack me yo");
		}

		if(file_exists("$cdir/$fname"))
		{
			unlink("$cdir/$fname");
		}

		$em->remove($comment);
		$em->flush();

		$this->get('session')->getFlashbag()->add('success', 'Wpis usunięty.');

		return $this->redirectToRoute('userspacewall_comment', ['uid' => $wid]);#$cid->getUid()->getId()]);
		#return new Response("blah");
	}
	public function cancel(Request $request, $id, $pid)
	{
		#return new Response("anuluj $id<br>$pid");
		$em = $this->getDoctrine()->getManager();
		$friend = $this->getDoctrine()->getRepository(Friends::class)->find($id);

		$em->remove($friend);
		$em->flush();

		$this->get('session')->getFlashbag()->add('success', 'Zaproszenie anulowano.');

		return $this->redirectToRoute('userspace', ['uid' => $pid]);
	}

	public function fromuserspacewall(Request $request, User $uid)
	{
		$username = $this->getUser();
		$uname = $uid->getUsername();
		$user_id = $uid->getId();	

		$tcontent = array();
		$ccnt = array();
		$content = array();

		$walldir = $this->getParameter('walldir');

		$em = $this->getDoctrine()->getManager();

		$wallusercontent = $this->getDoctrine()->getRepository(Wall::class);

		$usercontent = $wallusercontent->findBy(['accounts' => $user_id]);

		$cnt = count($usercontent);

		#$avataruri = "port119.pl/avatar/$user_id.jpeg";
		$avataruri = "/avatar/$user_id.jpeg";

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

		return $this->render('port119/userspacewall.html.twig', ['username' => $username, 'cnt' => $cnt, 'usercontent' => $usercontent, 'tcontent' => $tcontent, 'content' => $content, 'avatar' => $avataruri, 'uid' => $user_id, 'ccnt'=> $ccnt, 'uname' => $uname, 'ccntvar' => $ccntvar]);

		return new Response("$username -- $uname -- $user_id -- $cnt <img src=http://".$avataruri.">");

	}

	public function fromuserspacegallery(Request $request, User $uid)
	{
		$username = $this->getUser();

		$uname = $uid->getUsername();
		$user_id = $uid->getId();

		$uid = $uid->getId();

		$pics = array();
		$filenames = array();

		$repository = $this->getDoctrine()->getRepository(Album::class);

		$albums = scandir($this->getParameter('gallerydir') . "/". $user_id);

		array_shift($albums);
		array_shift($albums);

		$fnames = scandir($this->getParameter('gallerydir') . "/". $user_id);


		array_shift($fnames);
		array_shift($fnames);

		while(list($k, $v) = each($fnames))
		{
			$filename = $repository->findBy(['filename' => $v]);
			while(list($k2, $v2) = each($filename))
			{
				$id = $v2->getId();
				$filenames[$v2->getFilename()] = $id;
			}
		}

		$albumscnt = count($albums);

		while(list($k, $v)= each($albums))
		{
			$picscnt = scandir($this->getParameter('gallerydir') . "/" . $user_id . "/$v/min/");

			array_shift($picscnt);
			array_shift($picscnt);

			$picscnt = count($picscnt);

			$pics[$v] = $picscnt;
		}

		$accnt = 0;
		$vaccnt = array();
		$acntcontent = array();
		$aacntcontent = array();

		$apicscnt = 0;

		$acntcontent = $this->getDoctrine()->getRepository(GalleryComment::class);

		while(list($k,$v) = each($pics))
		{
			$gallerydir = $this->getParameter('gallerydir');
			$albumdir = $gallerydir . "/" . $uid . "/$k/min/";

			$vaccnt[$k]  = 0;

			if(file_exists($albumdir))
			{
				$apics = scandir($albumdir);

				array_shift($apics);
				array_shift($apics);

				foreach($apics as $filename)
				{
					$apicscnt++;
					$filename = preg_replace("/.jpeg/", "", $filename);
					$filename = preg_replace("/.gif/", "", $filename);
					$filename = preg_replace("/.png/", "", $filename);
					$aacntcontent = $acntcontent->findBy(['img_id' =>$filename]);
					$accnt += count($aacntcontent);
					$vaccnt[$k] += count($aacntcontent);
				}
			}
		}


		#return new Response("galeria $uname");
		return $this->render('port119/fromuserspacegallery.html.twig', ['username' => $username, 'userid' => $user_id, 'albumscnt' => $albumscnt, 'albums' => $albums, 'uid' => $user_id, 'picsnt' => $pics, 'fnames' => $filenames, 'uname' => $uname, 'accnt' => $accnt, 'vaccnt' => $vaccnt, 'apicscnt' => $apicscnt]);
	}


	public function userspacegallerycontent(Request $request, User $uid, $gid)
	{
		$uid = $uid->getId();
		$user_id = $this->getUser()->getId();
		$username = $this->getUser();#->getId();

		$pics = array();
		$titles = array();
		$titles2 = array();

		$gallerydir = $this->getParameter('gallerydir');

		$albumdir = $gallerydir . "/" . $uid . "/" . $gid . "/min/";

		$em = $this->getDoctrine()->getManager();

		$galleryusercontent = $this->getDoctrine()->getRepository(GalleryComment::class);

		$ccnt = array();

		$accnt = 0;
		if(file_exists($albumdir))
		{
			$pics = scandir($albumdir);

			$dircontent = scandir($albumdir);

			$arr = array();

			foreach($dircontent as $filename)
			{
				if($filename != '.' && $filename != '..')
				{
					$f2 = preg_replace("/.jpeg/", "", $filename);

					$usercontent = $galleryusercontent->findBy(['img_id' => $f2]);
					

					$dat = date("YmdHiss", filemtime($albumdir.$filename));
					$arr[$dat] = $filename;
					$ccnt[$dat] = count($usercontent);
					$accnt += count($usercontent);
				}
			}
			ksort($arr);
		}

		$titledir = $gallerydir . "/" . $uid . "/" . $gid . "/desc/";

		if(file_exists($titledir))
		{
			$titles = scandir($titledir);
		}

		array_shift($titles);
		array_shift($titles);

		while(list($k, $v) = each($titles))
		{
			$content = file_get_contents($titledir . "/$v");
			$titles2[$v] = $content;
		}

		$pics = $arr;

		$picscnt = count($pics);

	#	echo "<pre>"; var_dump($pics); die;
		return $this->render('port119/userspacegallerycontent.html.twig', ['username' => $username, 'picscnt' => $picscnt, 'pics' => $pics, 'uid' => $uid, 'gid' => $gid, 'titles2' => $titles2, 'ccnt' => $ccnt, 'accnt' => $accnt, 'userid' => $user_id]);
	}

	public function fromuserspacegallerycomment_delete(Request $request, $imgid, $fname)
	{
		$uid =$this->getUser()->getId();

		$em = $this->getDoctrine()->getManager();
		#$query = $em->createQuery('select p from App\Entity\GalleryComment p where p.uid =: id and p.img_id = :imgid and p.filename = :fname')->setParameter('id',$uid)->setParameter('imgid', $imgid)->setParameter('fname', $fname);
		$query = $em->createQuery('select p from App\Entity\GalleryComment p where p.uid = :id and p.img_id = :imgid and p.filename =:fname')->setParameter('id', $uid)->setParameter('imgid', $imgid)->setParameter('fname', $fname);
		$gcs = $query->getResult();

		$gcs = count($gcs);

		if($gcs == 1)
		{
			$em = $this->getDoctrine()->getManager();

			#$query = $em->createQuery('delete from App\Entity\GalleryComment p where p.img_id = : img_id and p.filename = :fname')->setParameters(array('img_id' => $imgid, 'fname' => $fname));
			$query = $em->createQuery('delete from App\Entity\GalleryComment p where p.img_id = :img_id and p.filename = :fname')->setParameters(array('img_id' => $imgid, 'fname' => $fname));
			$query->execute();

			$gcdir = $this->getParameter('gcdir');

			unlink("$gcdir/$imgid/$fname");

			$this->get('session')->getFlashbag()->add('success', 'Komentarz usunięty.');

			return $this->redirectToRoute('fromuserspacegallerycomment', ['uid' => $uid, 'imgid' => $imgid]);
		} else {
			return new Response("don't hackme yo");
		}
	}


	public function fromuserspacegallerycomment_edit(Request $request, GalleryComment $gcid, $imgid)
	{
		$user_id = $this->getUser()->getId();
		$gc_uid = $gcid->getUid()->getId();

		if($user_id != $gc_uid)
		{
			return new Response("don't hack me yo");
		}

		$editform = $this->createForm(GalleryCommentEditType::class, array("img_id" => $imgid, "gcid" => $gcid));
		$editform->handleRequest($request);

		if($editform->isSubmitted() && $editform->isValid())
		{
			$content = $editform->get('content')->getData();

			$content = preg_replace("/\n/", "<br />", $content);

			$fname = $this->getParameter("gcdir");
			$fname .= "/$imgid" ."/" . $gcid->getFilename();

			file_put_contents("$fname", $content);

			$this->get('session')->getFlashbag()->add('success', 'Komentarz zapisany.');
			return $this->redirectToRoute('fromuserspacegallerycomment', [ 'uid' => $this->getUser()->getId(), 'imgid' => $imgid ]);

		}

		return $this->render("port119/fromuserspacegallerycomment_edit.html.twig", [ 'username' => $this->getUser(), 'editform' => $editform->createView() ]);
	}

	public function fromuserspacegallerycomment(Request $request, User $uid, $imgid)
	{
		$username = $uid->getUsername();
		#$user_id = $uid->getId();
		$user_id = $this->getUser()->getId();


		$fname = md5(uniqid());
		$imgid = preg_replace("/.jpeg/", "", $imgid);

		$gcommentcontent = $this->getDoctrine()->getRepository(GalleryComment::class);
		$content= $gcommentcontent->findBy(['img_id' => $imgid]);

		$gcdir = $this->getParameter('gcdir');

		$ucnt = count($content);

		$gcnt = array();

		$editmark = array();

		while(list($k, $v) = each($content))
		{
			$key = $content[$k]->getfileName();
			$gcnt[$key] = file_get_contents("$gcdir/$imgid/$key");

			$umark = $content[$k]->getUid()->getId();

			if($umark == $user_id)
			{
				$editmark[$umark] = 1;
			}
		}



		$gcform = $this->createForm(UserSpaceGalleryCommentType::class);
		$gcform->handleRequest($request);

		$em = $this->getDoctrine()->getmanager();

		$gcobj= new GalleryComment();

		if($gcform->isSubmitted() && $gcform->isValid())
		{
			$content = $gcform->get('content')->getData();
			$content = preg_replace("/\n/", "<br />", $content);

			$gcobj->setFilename($fname);
			$gcobj->setUid($uid);
			$gcobj->setImgId($imgid);
			$gcobj->setCreatedAt(new \DateTime());

			$em->persist($gcobj);
			$em->flush();

			if(!file_exists($gcdir))
			{
				mkdir("$gcdir");
			}

			if(!file_exists("$gcdir/$imgid"))
			{
				mkdir("$gcdir/$imgid");
			}

			file_put_contents("$gcdir/$imgid/$fname", $content);

			$this->get('session')->getFlashbag()->add('success', 'Komentarz dodany.');

			return $this->redirectToRoute('fromuserspacegallerycomment', ['uid' => $user_id, 'imgid' => $imgid]);
		}

		return $this->render('port119/fromuserspacegallerycomment.html.twig', ['username' => $username, 'gcnt' => $gcnt, 'content' => $content, 'imgid' => $imgid, 'uid' => $user_id, 'gcform' => $gcform->createView(), 'editmark' => $editmark]);

	}

	public function userspacewall_comment(Request $request, Wall $uid)
	{
		$uname = $uid->getId();
		$username = $this->getUser();
		$user_id = $this->getUser()->getId();

		$fname = md5(uniqid());

		$cnt = array();

		$commentusercontent = $this->getDoctrine()->getRepository(Comment::class);
		$content = $commentusercontent->findBy(['wid' => $uid]);

		$ucnt = count($content);

		$cdir = $this->getParameter('cdir');

		while(list($k, $v) = each($content))
		{
			$key = $content[$k]->getFilename();
			$cnt[$key] = file_get_contents("$cdir/$key");
		}
		#echo "<pre>"; var_dump($ucnt); die;
		#
		
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
			$cobj->setWid($uid);
			$cobj->setUid($username);
			$cobj->setCreatedAt(new \DateTime());

			$em->persist($cobj);
			$em->flush();

			if(!file_exists($cdir))
			{
				mkdir($cidr);
			}

			file_put_contents("$cdir/$fname", $content);

			$this->get('session')->getFlashbag()->add('success', 'Komentarz dodany');
			return $this->redirectToRoute('userspacewall_comment', ['uid' => $uid->getId()]);
		}	

		return $this->render('port119/userspace_wall_comment.html.twig', ['username' => $username, 'content' => $content, 'ucnt' => $ucnt, 'cnt' => $cnt, 'avatar' => $avatar, 'cform' => $cform->createView()]);

		#return new Response("userspacewall_comment $uname");
	}

	public function whits(Request $request, User $uid)
	{
		$username = $this->getUser();
		$userid = $this->getUser()->getId();

		$uuid = $uid;
		$uid = $uid->getId();

		
#echo "blah"; die;

		#TODO:
		#select do bazy group_visits
		# 1 przeiteruj grupy wg selecta do groups owner - account_id 
		# 2 przeiteruj grupy wg groups_credentials 
		#policz - 1 i wyświetl
		#policz - 2 i wyświetl
		
		#wysietl: baza [] ilość

		$whitscnt = array();


		$em = $this->getDoctrine()->getManager();
		
		#$groupsrepo = $this->getDoctrine()->getRepository(Group::class)->findBy(array());
		$groupsrepo = $this->getDoctrine()->getRepository(Group::class)->findBy(['owner' => $userid]);

		while(list($k, $v) = each($groupsrepo))
		{
			$gid = $v->getId();
			$nname = $v->getName();

			$gvrepo = $this->getDoctrine()->getRepository(GroupVists::class)->findOneBy(['visited' => $gid]);
			
			$visitor = $gvrepo->getVisitor();
			
			#echo "$visitor";

			$whitscnt[$nname] = $visitor;
		}

		while(list($k, $v) = each($whitscnt))
		{
			echo $k . " " . $v . "<br />";
		}

		return new Response("vlah");
	}


	public function index(Request $request, User $uid)
	{
		$uname = $uid->getUsername();

		$firstname = $uid->getFirstname();
		$lastname = $uid->getLastname();


		$username= $this->getUser();
		$userid = $this->getUser()->getId();
		$uuid = $uid;
		$uid = $uid->getId();


		$vccnt = 0;
		$vcntcontent = array();
		$vvcntcontent = array();

		$em = $this->getDoctrine()->getManager();

		$pics = array();

		if($uid == $userid)
		{
			#select do bazy o odwiedziny na profilu
			#neq
			$repository = $this->getDoctrine()->getRepository(ProfileVisits::class)->findBy(['visited' => $uuid]);

			

/*
                        while(list($k, $v) = each($repository))
			{
				$visited = $v->getVisited();
				$visitor = $v->getVisitor();
				$date = $v->getCreatedAt();

				echo "$k - $visited<br />";
			}
*/
			#var_dump($repository);

			#die;

			return $this->render('port119/userspaceown.html.twig', ['repo' => $repository,'uid' => $userid, 'username' => $username]);
		} else
		{
			#insert do bazy o odwiedzinach na profilu

			$vobj = new ProfileVisits();

			$vobj->setVisited($uuid);
			$vobj->setVisitor($username);
			$vobj->setCreatedAt(new \DateTime());

			$em->persist($vobj);
			$em->flush();	
			

			$avataruri = "/avatar/" . $uid . ".jpeg";

			if(file_exists("/var/www/port119/public" . $avataruri))
			{
				$avatar = $avataruri;
			} else
			{
				$avatar = null;
			}
			


			$aboutfile = $this->getParameter('aboutdir') . "/$uid";

			if(file_exists($aboutfile))
			{
				$aboutcontent = file_get_contents($aboutfile);
			} else
			{
				$aboutcontent = null;
			}

			$em = $this->getDoctrine()->getManager();

			$postcount = $em->createQuery('select COUNT(c.id) from App:Content2 c where c.accounts = :uid')->setParameter(':uid', $uid)->getResult();
			if($postcount[0][1])
			{
				$postcnt = $postcount[0][1];
			} else
			{
				$postcnt = 0;
			}
			

			$groupcount = $em->createQuery('select COUNT(DISTINCT(c.groups)) from App:Content2 c where c.accounts = :uid')->setParameter(':uid', $uid)->getResult();
			#$groupcount = $em->createQuery('select DISTINCT(c.groups) from App:Content2 c where c.accounts = :uid')->setParameter(':uid', $uid)->getResult();

			#var_dump(count($groupcount)); die;

			if($groupcount[0][1])
			{ 
				$groupcnt = $groupcount[0][1];
			} else
			{
				$groupcnt = 0;
			}


			$repository = $this->getDoctrine()->getRepository(Friends::class);

			$frepo = $repository->findBy(['party' => $uid, 'user' => $userid, 'confirmed' => 'true']);

			$freporequested = $repository->findBy(['user' => $userid, 'party' => $uid, 'confirmed' => 'false']);
			
			$frepotoconfirm = $repository->findBy(['user' => $uid, 'party' => $userid, 'confirmed' => 'false']);	

			#return new Response("ilość postów: $postcnt w $groupcnt wątkach");
			
			#echo "<pre>"; var_dump($frepotoconfirm); die;

                	$albums = scandir($this->getParameter('gallerydir') . "/". $uid);

			array_shift($albums);
			array_shift($albums);

			#echo "<pre>"; var_dump($albums); die;

			$albumscnt = count($albums);

			$dirs = array();

			$indircnt = 0;

			$wallcnt = 0;

			$ccnt = 0;

	                $wallcontent = $this->getDoctrine()->getRepository(Wall::class)->findBy(['accounts' => $uid]);

			while(list($k, $v) = each($wallcontent))
			{
				$wid = $v->getId();
				$ccntcontent = $this->getDoctrine()->getRepository(Comment::class)->findBy(['wid' => $wid]);
				$ccnt += count($ccntcontent);
			}



			$wallcnt = count($wallcontent);

			#$ccntcontent = $this->getDoctrine()->getRepository(Comment::class)->findBy(['uid' => $uid]);

			#$ccnt = count($ccntcontent);
	

			while(list($k, $v) = each($albums))
			{
				#$v = preg_replace("/ /", "%20", $v);

				$picscnt = scandir($this->getParameter('gallerydir') . "/" . $uid . "/$v/min/");

				$dir = $this->getParameter('gallerydir') . "/" . $uid . "/$v/min";

				

				array_shift($picscnt);
				array_shift($picscnt);

				$picscnt = count($picscnt);

				$pics[$v] = $picscnt;

				$dirs[] = $dir;
			}

			while(list($k, $v) = each($dirs))
			{
				#echo $v . "<br>"; 
				$dircontent = scandir($v);

				array_shift($dircontent);
				array_shift($dircontent);

				while(list($k2, $v2) = each($dircontent))
				{
					$indircnt += 1;
					#echo "$v2<br>";

				}
			}

			#echo "$indircnt";

			#die;

			$vcntcontent = $this->getDoctrine()->getRepository(GalleryComment::class);

			while(list($k, $v) = each($pics))
			{
				$gallerydir = $this->getParameter('gallerydir');
				$albumdir = $gallerydir . "/" . $uid . "/$k/min/";

				if(file_exists($albumdir))
				{
					$apics = scandir($albumdir);

					array_shift($apics);
					array_shift($apics);

					foreach($apics as $filename)
					{
						$filename = preg_replace("/.jpeg/", "", $filename);
						$filename = preg_replace("/.gif/", "", $filename);
						$filename = preg_replace("/.png/", "", $filename);
						$vvcntcontent = $vcntcontent->findBy(['img_id' => $filename]);
						$vccnt += count($vvcntcontent);

					}
				}
			}


			return $this->render('port119/userspaceforeign.html.twig', ['user_id' => $userid, 'username' => $username, 'avatar' => $avatar, 'uname' => $uname, 'firstname' => $firstname, 'lastname' => $lastname, 'aboutcontent' => $aboutcontent, 'postcnt' => $postcnt, 'groupcnt' => $groupcnt, 'frepo' => $frepo, 'freporequested' => $freporequested, 'frepotoconfirm' => $frepotoconfirm, 'uid' => $uid, 'userid' => $userid, 'uname' => $uname, 'albumscnt' => $albumscnt, 'indircnt' => $indircnt, 'wallcnt' => $wallcnt, 'ccnt' => $ccnt, 'vccnt' => $vccnt]);

		}

	}
}






?>
