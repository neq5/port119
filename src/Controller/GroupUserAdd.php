<?php

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

use App\Entity\Group;

use App\Entity\Gallery2;

use App\Entity\Album;

#neq

class GroupUserAdd extends Controller
{
	public function index(Request $request)
	{
		$group = new Group;
		$username = $this->getUser();
		$user_id = $this->getUser()->getId();
		$img = new Gallery2();
		$em = $this->getDoctrine()->getManager();

		$groupform = $this->createForm(GroupType::class);

		$groupform->handleRequest($request);

		if($groupform->isSubmitted() && $groupform->isValid())
		{
			$plik = $groupform->get('image')->getData();

			if(isset($plik))
			{
				$ekst = $plik->guessExtension();

				if($ekst != "png" && $ekst != "gif" && $ekst != "jpeg")
				{
                               	        $this->get('session')->getFlashBag()->add('failure', 'Nieznany format pliku.');

                                        return $this->redirectToRoute('group_own');

				}
			}

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
				if($groupid)
				{
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

			}


			/** @var \Symfony\Component\HttpFoundation\File\UploadedFile $file */
			#$file = $img->getBrochure();
			$file = $groupform->get('image')->getData();




			if(isset($file))
			{	

				$albumfile = $this->getParameter('gallerydir') . "/" . $user_id;



				if(!file_exists($albumfile))
				{
					mkdir("$albumfile");
				}

				if(!file_exists($albumfile . "/" . "wątek - $username"))
				{
					mkdir("$albumfile/wątek - $username");
					mkdir("$albumfile/wątek - $username/min");
					mkdir("$albumfile/wątek - $username/orig");
					mkdir("$albumfile/wątek - $username/desc");

        	                      	$defaultFile = "/var/www/port119/default.jpg";
	
                	                copy("$defaultFile", "$albumfile/wątek - $username/cover.jpeg"); 


				}



				$ext = $file->guessExtension();


				if($ext == "png")
				{

                        $albm = new Album();
                        $albm->setFilename("wątek - $username");
                        $albm->setAccounts($user_id);
                        $em->persist($albm);
                        $em->flush();



					$fileName = $group->getId().".".$file->guessExtension();

					$avatarfile = $this->getParameter('groupavatardir');

					$fileName = preg_replace("/png/", "jpeg", $fileName);

					$file->move($avatarfile, $fileName);


					$imfile = "$avatarfile" . "/" . "$fileName";


					copy($imfile, "$albumfile/wątek - $username/orig/$fileName");

					$im = imagecreatefrompng($imfile);

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
					imagejpeg($thumb, $albumfile . "/wątek - $username/min/" . $fileName);
					


				} elseif($ext == "gif")
				{
                        $albm = new Album();
                        $albm->setFilename("wątek - $username");
                        $albm->setAccounts($user_id);
                        $em->persist($albm);
                        $em->flush();




				        $fileName = $group->getId().".".$file->guessExtension();

       					 $avatarfile = $this->getParameter('groupavatardir');

					$fileName = preg_replace("/gif/", "jpeg", $fileName);

      					 $file->move($avatarfile, $fileName);

					$imfile = "$avatarfile" . "/" ."$fileName";

					copy($imfile, "$albumfile/wątek - $username/orig/$fileName");

					$im = imagecreatefromgif($imfile);

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
						$thumb_w = $old_x*($new_width/$old_y);
						$thumb_h = $new_height;
					}

					if($old_x == $old_y)
					{
						$thumb_w = $new_width;
						$thumb_h = $new_height;
					}
	
					$thumb = imagecreatetruecolor($thumb_w, $thumb_h);

					$big1 = $avatarfile . "/" . $fileName;
					$small1 = $avatarfile . "/" . $fileName .".gif";
					$watek = $albumfile . "/wątek - $username/min/" . $fileName;
			
					$size1 = $thumb_w . "x" . $thumb_h;

					system("/usr/bin/convert $big1 -coalesce -repage 0x0 -resize " . $size1 . " -layers Optimize $small1");
					system("/bin/mv $small1 $big1");

					system("/bin/cp $big1 \"" . $watek . "\"");
					#system("/bin/cp $big1 \'" . $watek . "\"");	


					imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y);

					#imagejpeg($thumb, $avatarfile . "/" . $fileName);
					#imagejpeg($thumb, $albumfile . "/wątek - $username/min/" . $fileName);


				}  elseif($ext == "jpeg")
				{
                        $albm = new Album();
                        $albm->setFilename("wątek - $username");
                        $albm->setAccounts($user_id);
                        $em->persist($albm);
                        $em->flush();




					$fileName = $group->getId().".".$file->guessExtension();

					$avatarfile = $this->getParameter('groupavatardir');

					$file->move($avatarfile, $fileName);

					$imfile = "$avatarfile" . "/" . "$fileName";

					copy($imfile, "$albumfile/wątek - $username/orig/$fileName");

					$im = imagecreatefromjpeg($imfile);


			  		#$thumb = imagecreatetruecolor(150, 150);
					$source = imagecreatefromjpeg($avatarfile . "/" . $fileName);

					$new_width = "150";
					$new_height="150";

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
      #imagecopyresized($thumb, $source, 0, 0, 70, 75, 250, 260, $width, $height);


      					imagejpeg($thumb, $avatarfile . "/" . $fileName);
      					imagejpeg($thumb, $albumfile . "/wątek - $username/min/" . $fileName);

				} else
				{
					$this->get('session')->getFlashBag()->add('failure', 'Nieznany format pliku.');
			
					return $this->redirectToRoute('group_own');
			
				}
			} else {



				$fileName = $group->getId().".jpeg";
				$avatarfile = $this->getParameter('groupavatardir');
				$targetfile = "$avatarfile/$fileName";

				$defaultFile = "/var/www/port119/default.jpg";

				copy("$defaultFile", "$targetfile"); 


			}

			$groupscd = new GroupCredentials();
			$groupscd->setAccounts($this->getUser());
			$groupscd->setGroups($group);

			$em->persist($groupscd);
			$em ->flush();

			$subs = new Subscriptions();
			$subs->setAccounts($this->getUser());
			$subs->setGroups($group);

			$em->persist($subs);
			$em->flush();

		        $this->get('session')->getFlashBag()->add('success', 'Dodano grupę.');

			return $this->redirectToRoute('group_own');

		}

		$username = $this->getUser();

		return $this->render('port119/groups_mng_add.html.twig', [ 'groupform' => $groupform->createView(), 'username' => $username, ]);
	}
}


?>
