<?php

#neq
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Validator\Constraints\DateTime;

use App\Form\GroupType;
use App\Form\GroupEditType;

use App\Entity\GroupCredentials;

use App\Entity\User;

use App\Entity\Subscriptions;

use App\Entity\Content;
use App\Entity\Content2;

use App\Form\GroupCredentialsType;
use App\Form\GroupCredentials2Type;

use App\Entity\Group;
use App\Entity\Gallery2;
use App\Form\Gallery2Type;

use App\Entity\Hits;
use App\Entity\GroupVists;

class GroupUserController extends Controller
{

	public function index(Request $request)
	{

		$group = new Group();
		$username = $this->getUser();
		$img = new Gallery2();

		$groupform = $this->createForm(GroupType::class);

		$groupform->handleRequest($request);

		if($groupform->isSubmitted() && $groupform->isValid())
		{
			$groupname = $groupform->get('name')->getData();

			$em = $this->getDoctrine()->getManager();
			$groupexists = $em->createQuery('select COUNT(g.name) from App:Group g where g.name = LOWER(:groupname)')->setParameter(':groupname', $groupname)->getResult();

			if($groupexists[0][1])
			{
				return $this->render('port119/group_exists.html.twig', [ 'groupname' => $groupform->get('name')->getData(), 'username' => $username ]);
			}

			$group->setName($groupform->get('name')->getData());

			if($groupform->get('active')->getData())
			{
				$group->setActive($groupform->get('active')->getData());
			}

			if($groupform->get('open')->getData())
			{
				$group->setOpen($groupform->get('open')->getData());
			}

			$group->setOwner($this->getUser());

			$group->setCreatedAt(new \DateTime());

			$em->persist($group);
			$em->flush();

			if($groupform->get('about')->getData())
			{
				$groupid = $em->createQuery('select g.id from App:Group g where g.name = LOWER(:groupname)')->setParameter(':groupname', $groupname)->getResult();
				$groupid = $groupid[0]['id'];

				$groupfile = $this->getParameter('aboutgroupdir') . "/$groupid";

				if(file_exists($groupfile))
				{
					unlink($groupfile);
					file_put_contents($groupfile, $groupform->get('about')->getData());
				} else {
					file_put_contents($groupfile, $groupform->get('about')->getData());
				}
			}

			/** @var \Symfony\Component\HttpFoundation\File\UploadedFile $file */
			$file = $img->getBrochure();


			$file = $groupform->get('image')->getData();

			$fileName = $group->getId().".".$file->guessExtension();

			$avatarfile = $this->getParameter('groupavatardir');

			$file->move($avatarfile, $fileName);

			$imfile = "$avatarfile" . "/" . "$fileName";

			$im = imagecreatefromjpeg($imfile);


#			echo $avatarfile; die;

		        $thumb = imagecreatetruecolor(140, 150);
      $source = imagecreatefromjpeg($avatarfile . "/" . $fileName);

      list($width, $height) = getimagesize($avatarfile . "/" . $fileName);


      imagecopyresized($thumb, $source, 0, 0, 140, 150, 160, 165, $width, $height);
      #imagecopyresized($thumb, $source, 0, 0, 70, 75, 80, 82, $width, $height);


      imagejpeg($thumb, $avatarfile . "/" . $fileName);

#      return $this->redirectToRoute('group_user');


			$groupscd = new GroupCredentials();

			$groupscd->setAccounts($this->getUser());
			$groupscd->setGroups($group);

			$em->persist($groupscd);
			$em->flush();

			$subs = new Subscriptions();
			$subs->setAccounts($this->getUser());
			$subs->setGroups($group);

			$em->persist($subs);
			$em->flush();


		}

		$abouts = array();
		$aboutfiles = scandir($this->getParameter('aboutgroupdir') . "/");



		while(list($k, $v) = each($aboutfiles))
		{
			$aboutcontent = file_get_contents($this->getParameter('aboutgroupdir') . "/$v");

			$aboutcontent = substr($aboutcontent, 0, 100);

			if(strlen($aboutcontent) > 96)
			{
				$abouts[$v] = $aboutcontent . "...";
			}
			else
			{
				$abouts[$v] = $aboutcontent;
			}
		}


		$userid = $this->getUser()->getId();

		$groups = $this->getDoctrine()->getRepository(Group::class)->findBy(array('owner' => $userid));

		$groupscnt = count($groups);

		$gcdn = array();


		$groupscdn = $this->getDoctrine()->getRepository(GroupCredentials::class)->findAll();

		while(list($k, $v) = each($groupscdn))
		{
			$group = $v->getGroups()->getName();
			$user = $v->getAccounts();

			$gcdn["$group"]["$user"] = true;

		}


		$admin = $this->getDoctrine()->getRepository(GroupCredentials::class)->findBy(['accounts' => $userid]);
		
		$allgroups = $this->getDoctrine()->getRepository(Group::class)->findAll();


		$subs = array();

		$subscriptions = $this->getDoctrine()->getRepository(Subscriptions::class)->findBy(['accounts' => $userid]);

		while(list($k, $v) = each($subscriptions))
		{
			$sub = $v->getGroups();
			$sub = $sub->getName();
			$subs["$sub"] = $sub;
		}


		return $this->render('port119/groups_user_mng.html.twig', [ 'username' => $username, 'groupscnt' => $groupscnt, 'groups' => $groups, 'abouts' => $abouts, 'groupform' => $groupform->createView(), 'gcdn' => $gcdn, 'admin' => $admin, 'subscriptions' => $subscriptions, 'subs' => $subs, 'allgroups' => $allgroups]);

	}

	public function subscribe(Request $request, Group $groupid)
	{
		$userid = $this->getUser();


		$subscribe = new Subscriptions();

		$subexists = $this->getDoctrine()->getRepository(Subscriptions::class)->findBy(['groups' => $groupid, 'accounts' => $userid]);

		if(!count($subexists))
		{
			$subscribe->setAccounts($userid);
    	$subscribe->setGroups($groupid);

			$em = $this->getDoctrine()->getManager();
			$em->persist($subscribe);
			$em->flush();

		}

    $this->get('session')->getFlashBag()->add('success', 'Grupa zasubskrybowana.');


		return $this->redirectToRoute('group_all');
	}

	public function show(Request $request, Group $id)
	{

		$group = $this->getDoctrine()->getRepository(Group::class)->find($id);
		$groupscdn = $this->getDoctrine()->getRepository(GroupCredentials::class)->findAll();

		$username = $this->getUser();

		$gcdn = array();

		while(list($k, $v) = each($groupscdn))
		{
			$groupcdn = $v->getGroups()->getName();
			$usercdn = $v->getAccounts();
			$id = $v->getAccounts()->getId();

			#$gcdn["$groupcdn"]["$usercdn"] = true;
			$gcdn["$groupcdn"]["$usercdn"] = $id;
		}

		$a = $group->getId();

		$about = file_get_contents($this->getParameter('aboutgroupdir') . "/$a");

		$avataruri = "/groupavatar/" . $a . ".jpeg";


		return $this->render('port119/groups_user_show.html.twig', [ 'group' => $group, 'gcdn' => $gcdn, 'about' => $about, 'username' => $username, 'avatar' => $avataruri ]);

	}	

	public function edit(Request $request, Group $id)
	{
		$username = $this->getUser();

		$user_id = $this->getUser()->getId();

		$groupform = $this->createForm(GroupEditType::class, $id);
		$groupform->handleRequest($request);

		$adminobj = new GroupCredentials();

		$adminobj->setGroups($id);


		$adminform = $this->createForm(GroupCredentialsType::class, $adminobj);
		$adminform->handleRequest($request);

		$adminform2 = $this->createForm(GroupCredentials2Type::class);
		$adminform2->handleRequest($request);

		$avatarform = $this->createForm(Gallery2Type::class);
		$avatarform->handleRequest($request);


		$group_id = $id->getId();

		$avataruri = "/groupavatar/$group_id.jpeg";

		if(file_exists("/var/www/port119/public" . $avataruri))
		{
			$avatar = $avataruri;
		} else
		{
			$avatar = "brak";
		}

		$groupscdn = $this->getDoctrine()->getRepository(GroupCredentials::class)->findBy(['groups' => $group_id]);
		$groupowner = $this->getDoctrine()->getRepository(Group::class)->find($group_id);

		$groupowner = $groupowner->getOwner();


		$gid = $id->getId();
		$uid = $this->getUser()->getId();

#TODO sprawdź czy user nie jest ownerem
		#$allowed = $this->getDoctrine()->getRepository(GroupCredentials::class)->findOneBy(['groups' => $gid, 'accounts' => $uid]);
		$allowed = $this->getDoctrine()->getRepository(GroupCredentials::class)->findBy(array('groups' => $group_id, 'accounts' => $user_id));#, 'accounts' => $uid));

		#echo "<pre>"; var_dump($allowed); die;

/*
		$allowed2 = $this->getDoctrine()->getRepository(Group::class)->findOneBy(['id' => $gid, 'owner' => $uid]);

		if(!$allowed2) 
		{
			return new Reponse("nie ma");
		}
		else
		{
			return new Response("jest");
		}

*/
		if(!$allowed)
		{
			return new Response("don't hack me yo");
		}

		$allowed = $allowed[0]->getAccounts()->getId();

		if($allowed != $uid)
    		{ 
		      return new Response("don't hack me yo");
		    }


		$aboutgroupfile = "/var/www/port119/groupdata/about" . "/$group_id";

		$em = $this->getDoctrine()->getManager();

		$gcdn = array();

		while(list($k, $v) = each($groupscdn))
		{
			$groupcdn = $v->getGroups()->getName();
			$usercdn = $v->getAccounts();

			if(!empty($usercdn) && !empty($groupcdn))
			{	
				$gcdn["$groupcdn"]["$usercdn"] = $group_id;
			}
		}


		#var_dump($gcdn); die;


		if($avatarform->isSubmitted() && $avatarform->isValid())
		{
			$img = new Gallery2();

			/** @var \Symfony\Component\HttpFoundation\File\UploadedFile $file */

			$file = $img->getBrochure();
			$file = $avatarform->get('image')->getData();

			$ext = $file->guessExtension();

			if($ext == "jpeg")
			{
				$fileName = $id->getId().".".$file->guessExtension();

				$avatarfile = $this->getParameter('groupavatardir');

				$file->move($avatarfile, $fileName);

				$imfile = "$avatarfile" . "/" . "$fileName";

				$im = imagecreatefromjpeg($imfile);

				$source = imagecreatefromjpeg($avatarfile . "/" . $fileName);


				$new_width = "150";
				$new_height = "150";

                                list($old_x, $old_y) = getimagesize($avatarfile . "/" . $fileName);

                                if($old_x > $old_y)
                                {
                                        $thumb_w = $new_width;
                                        $thumb_h = $old_y*($new_height/$old_x);
                                }

                                if($old_x < $old_y)
                                {
                                        $thumb_w = $old_x*($new_width/$old_y);
                                        $thumb_h = $new_height;
                                }

                                if($old_x == $old_y)
                                {
                                        $thumb_w = $new_width;
                                        $thumb_h = $new_height;
                                }

                              $thumb = imagecreatetruecolor($thumb_w, $thumb_h);


                                        imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y);


                                        imagejpeg($thumb, $avatarfile . "/" . $fileName);

/*

				$thumb = imagecreatetruecolor(150, 150);
				$source = imagecreatefromjpeg($avatarfile . "/" . $fileName);

				list($width, $height) = getimagesize($avatarfile . "/" . $fileName);

				imagecopyresized($thumb, $source, 0, 0, 0, 0, 150, 150, $width, $height);


      				imagejpeg($thumb, $avatarfile . "/" . $fileName);
*/

			} elseif($ext == "png")
			{
			        $avatarfile = $this->getParameter('groupavatardir');

     				$fileName = $id->getId().".".$file->guessExtension();

				$fileName = preg_replace("/png/", "jpeg", $fileName);


			        $file->move($avatarfile, $fileName);

                		 
			        $imfile = "$avatarfile" . "/" . "$fileName";

				#copy($imfile, $avatarfile);

				$im = imagecreatefrompng($avatarfile . "/" . $fileName);

				$source = imagecreatefrompng($avatarfile . "/" . $fileName);

				$new_width = "150";
				$new_height = "150";

				list($old_x, $old_y) = getimagesize($avatarfile . "/" . $fileName);

				if($old_x > $old_y)
				{
					$thumb_w = $new_width;
					$thumb_h = $old_y*($new_height/$old_x);
				}

				if($old_x < $old_y)
				{
					$thumb_w = $old_x($new_width/$old_y);
					$thumb_h = $new_height;
				}

				if($old_x == $old_y)
				{
					$thumb_w = $new_width;
					$thumb_h = $new_height;
				}

				$thumb = imagecreatetruecolor($thumb_w, $thumb_h);


                                        imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y);


                                        imagejpeg($thumb, $avatarfile . "/" . $fileName);


/*
			        $image = imagecreatefrompng($imfile);

			        $fileName = preg_replace("/png/", "jpeg", $fileName);

			        imagejpeg($image, $avatarfile . "/" . "$fileName");

			        $imfile = "$avatarfile" . "/" . "$fileName";

			        $thumb = imagecreatetruecolor(150, 150);
			        $source = imagecreatefromjpeg($avatarfile . "/" . $fileName);

       				list($width, $height) = getimagesize($avatarfile . "/" . $fileName);

			        imagecopyresized($thumb, $source, 0, 0, 0, 0, 150, 150, $width, $height);

			        imagejpeg($thumb, $imfile);
*/
			} elseif($ext == "gif")
			{

                                $avatarfile = $this->getParameter('groupavatardir');

                                $fileName = $id->getId().".".$file->guessExtension();

                                $fileName = preg_replace("/gif/", "jpeg", $fileName);


                                $file->move($avatarfile, $fileName);


                                $imfile = "$avatarfile" . "/" . "$fileName";

                                #copy($imfile, $avatarfile);

                                $im = imagecreatefromgif($avatarfile . "/" . $fileName);

                                $source = imagecreatefromgif($avatarfile . "/" . $fileName);

                                $new_width = "150";
                                $new_height = "150";

                                list($old_x, $old_y) = getimagesize($avatarfile . "/" . $fileName);

                                if($old_x > $old_y) 
                                {
                                        $thumb_w = $new_width;
                                        $thumb_h = $old_y*($new_height/$old_x);
                                }

                                if($old_x < $old_y)
                                {
                                        $thumb_w = $old_x($new_width/$old_y);
                                        $thumb_h = $new_height;
                                }

                                if($old_x == $old_y)
                                {
                                        $thumb_w = $new_width;
                                        $thumb_h = $new_height;
                                }

                                $thumb = imagecreatetruecolor($thumb_w, $thumb_h);


                                        imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y);


                                        imagejpeg($thumb, $avatarfile . "/" . $fileName);

/*
			        $fileName = $id->getId().".".$file->guessExtension();

			        $avatarfile = $this->getParameter('groupavatardir');

			        $file->move($avatarfile, $fileName);

			        $imfile = "$avatarfile" . "/" . "$fileName";

			        $image = imagecreatefromgif($imfile);

			        $fileName = preg_replace("/gif/", "jpeg", $fileName);

			        imagejpeg($image, $avatarfile . "/" . "$fileName");

			        $imfile = "$avatarfile" . "/" . "$fileName";

				$thumb = imagecreatetruecolor(150, 150);
			        $source = imagecreatefromjpeg($avatarfile . "/" . $fileName);

			        list($width, $height) = getimagesize($avatarfile . "/" . $fileName);

			        imagecopyresized($thumb, $source, 0, 0, 0, 0, 150, 150, $width, $height);


			        imagejpeg($thumb, $imfile);
*/
			} else 
			{
				$this->get('session')->getFlashBag()->add('failure', 'Nieznany format pliku.');
				return $this->redirectToRoute('group_user_edit', ['id' => $group_id]);
			}

     			$this->get('session')->getFlashBag()->add('success', 'Avatar zaktualizowany.');
		}

		if($adminform->isSubmitted() && $adminform->isValid())
		{
			$user_id = $adminform->get('accounts')->getData();
			while(list($k, $v) = each($user_id))
			{
				while(list($k2, $v2) = each($v))
				{
					$gcdnexists = $this->getDoctrine()->getRepository(GroupCredentials::class)->findBy(['groups' => $group_id, 'accounts' => $v2->getId()]);

					if(!count($gcdnexists))
					{
						$userid = $v2->getId();
						$groupscdn = new GroupCredentials();

						$groupscdn->setAccounts($v2);
						$groupscdn->setGroups($id);

						$em->persist($groupscdn);
						$em->flush();

					}
				}
			}

		        $this->get('session')->getFlashBag()->add('success', 'Lista adminów zaktualizowana.');

			return $this->redirectToRoute('group_user_edit', ['id' => $group_id]);

		}

              if($adminform2->isSubmitted())
                {
                        #$user_id = $adminform2->get('select')->getData();

			$user_id = $request->request->all()['gcdn_neq']['selekt'];

			$uid = $this->getDoctrine()->getRepository(User::class)->find($user_id);

                        #$group_id = $adminform2->get('selekt')->getData();


                        $gcdn2 = new GroupCredentials();

                        $gcdn2->setAccounts($uid);
                        $gcdn2->setGroups($id);



                        $em->persist($gcdn2);
                        $em->flush();

                        $this->get('session')->getFlashBag()->add('success', 'Lista adminów zaktualizowana.');

                        return $this->redirectToRoute('group_user_edit', ['id' => $group_id]);

                }



		if($groupform->isSubmitted() && $groupform->isValid())
		{
			$group = $this->getDoctrine()->getRepository(Group::class)->find($id);

			if($groupform->get('name')->getData())
			{
				$group->setName($groupform->get('name')->getData());
			}
			if($groupform->get('active')->getData())
			{
				$group->setActive($groupform->get('active')->getData());
			}
			if($groupform->get('open')->getData())
			{
				$group->setOpen($groupform->get('open')->getData());
			}
			if($groupform->get('about')->getData())
			{
				if(file_exists($aboutgroupfile))
				{
					unlink($aboutgroupfile);
				}
				
				file_put_contents($aboutgroupfile, $groupform->get('about')->getData());
			}
		
			$em->persist($group);
			$em->flush();

      			$this->get('session')->getFlashBag()->add('success', 'Dane zaktualizowane.');


		}


		$hurl = $this->getParameter('host');



		return $this->render('port119/group_user_edit.html.twig', [ 'group_id' => $group_id, 'groupform' => $groupform->createView(), 'username' => $username, 'gcdn' => $gcdn, 'groupowner' => $groupowner, 'group_id' => $group_id, 'adminform' => $adminform->createView(), 'avatarform' => $avatarform->createView(), 'avatar' => $avatar, 'adminform2' => $adminform2->createView(), 'host' => $hurl]);

	}

	public function unsubscribe(Request $request, Group $groupid)
	{
		$user_id = $this->getUser()->getId();
		$group_id = $groupid->getId();

		$sub = $this->getDoctrine()->getRepository(Subscriptions::class)->findOneBy(['accounts' => $user_id, 'groups' => $group_id]);

		$em = $this->getDoctrine()->getManager();

		$em->remove($sub);

		$em->flush();

    $this->get('session')->getFlashBag()->add('success', 'Grupa zdesubskrybowana.');


		return $this->redirectToRoute('group_all');
	

	}
	public function admindelete(Request $reguest, Group $groupid, $userid)
	{
		$user = $this->getDoctrine()->getRepository(User::class)->findBy(['username' => $userid]);

		$user_id = $user[0]->getId();
		$group_id = $groupid->getId();


		# select owner

		$allowed = $this->getDoctrine()->getRepository(Group::class)->find($group_id);
		#$allowed = $this->getDoctrine()->getRepository(Group::class)->findBy(['id' => $group_id]);

		$allowed = $allowed->getOwner()->getId();

	#	echo $allowed; die;

		#echo $allowed[0]->getId(); die;


		if($allowed != $user_id)
		{

			$gcdn = $this->getDoctrine()->getRepository(GroupCredentials::class)->findOneBy(['groups' => $group_id, 'accounts' => $user_id]);

			$em = $this->getDoctrine()->getManager();
			$em->remove($gcdn);
			$em->flush();  


	    		$this->get('session')->getFlashBag()->add('success', 'Lista adminów zaktualizowana.');

	
			return $this->redirectToRoute('group_user_edit', ['id' => $group_id]);
		} else
		{
			return new Response("Don't hack me yo");
		}
	}

	public function delete(Request $request, Group $id)
	{

		$em = $this->getDoctrine()->getManager();
		$group = $em->find("\App\Entity\Group", $id);

		$gid = $id->getId();
		$user_id = $this->getUser()->getId();

		$allowed = $this->getDoctrine()->getRepository(GroupCredentials::class)->findOneBy(['groups' => $gid, 'accounts' => $user_id]);
		$allowed = $allowed->getAccounts()->getId();



		if($allowed != $user_id)
		{
			return new Response("don't hack me yo");
		}


		$contents = $this->getDoctrine()->getRepository(Content2::class)->findBy(['groups' => $id]);
		
		while(list($k, $v) = each($contents))
		{
			$em->remove($v);
		}

		$gcdn = $this->getDoctrine()->getRepository(GroupCredentials::class)->findBy(['groups' => $id]);

		while(list($k, $v) = each($gcdn))
		{
			$em->remove($v);
		}

		$hits = $this->getDoctrine()->getRepository(Hits::class)->findBy(['gid' => $id]);

		while(list($k, $v) = each($hits))
		{
			$em->remove($v);
		}

		$visits = $this->getDoctrine()->getRepository(GroupVists::class)->findBy(['visited' => $id]);

		while(list($k, $v) = each($visits))
		{
			$em->remove($v);
		}

		
	
		

		$userid = $this->getUser()->getId();

    $subscriptions = $this->getDoctrine()->getRepository(Subscriptions::class)->findBy(['accounts' => $user_id, 'groups' => $id]);

		while(list($k, $v) = each($subscriptions))
		{
			$em->remove($v);
		}

		$em->remove($group);
	

		$em->flush();

		$abouts = ($this->getParameter('aboutgroupdir') . "/$gid");

		unlink($abouts);

		$gav = $this->getParameter('groupavatardir') . "/" . $gid . ".jpeg";


		unlink($gav);

                $this->get('session')->getFlashBag()->add('success', 'Grupa usunięta.');


		return $this->redirectToRoute('group_own');

	}
}

?>
