<?php

namespace App\Controller;


use App\Entity\User;
use App\Entity\Group;

use App\Form\UserSettingsType;

use App\Form\GalleryMultiUploadType;

use App\Form\GalleryCommentEditType;


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

use Symfony\Component\Form\FormTypeInterface;

use App\Entity\Gallery2;
use App\Entity\GalleryComment;
use App\Entity\Album;
use App\Form\UserGalleryType;
use App\Form\Gallery2Type;
use App\Form\GalleryTitleSetType;
use App\Form\GalleryCommentType;

use GD;

use ErikvdVen\Gif\GIFGenerator;

class UserGalleryController extends Controller
{
	public function index(Request $request)
	{

		$albumsform = $this->createForm(UserGalleryType::class);
		$albumsform->handleRequest($request);



		$repository = $this->getDoctrine()->getRepository(Album::class);

		$pics = array();

		$allpicscnt = 0;
		$ccnt = 0;

		#to ma być array
		$accnt = array();

		$username = $this->getUser();
		$user_id = $this->getUser()->getId();

		$gallerydir = $this->getParameter('gallerydir');
		
		$img = new Gallery2();

		$em = $this->getDoctrine()->getManager();

		$albm = new Album();

		if($albumsform->isSubmitted() && $albumsform->isValid())
		{

			$albumfile = $this->getParameter('gallerydir') . "/" . $user_id;

			/** @var \Symfony\Component\HttpFoundation\File\UploadedFile $file */

			$file = $img->getBrochure();

			$file = $albumsform->get('image')->getData();

			$ext = $file->guessExtension();

			$about = $albumsform->get('id')->getData();

			#echo "{$about}"; die;

			#echo "<pre>"; var_dump($about);
			#die;

			#$about = preg_replace("/;/", "", $about);

			if(!file_exists($albumfile . "/" . $about))
			{
				#system("/bin/mkdir \"$albumfile/$about\"");
				#system("/bin/mkdir \"$albumfile/$about/min\"");
				#system("/bin/mkdir \"$albumfile/$about/orig\"");
				#system("/bin/mkdir \"$albumfile/$about/desc\"");

				if(!file_exists($albumfile))
				{
					mkdir("$albumfile");
				}

				mkdir("$albumfile/$about");
				mkdir("$albumfile/$about/min");
				mkdir("$albumfile/$about/orig");
				mkdir("$albumfile/$about/desc");
			} else
			{
				$this->get('session')->getFlashbag()->add('success', 'Album już istnieje.');
				return $this->redirectToRoute('user_gallery');
			}


			if($ext == "png")
			{
				$fileName = "cover.jpeg";

				$avatarfile = $this->getParameter('gallerydir');
				$avatarfile .= "/$user_id/$about/";

				$file->move($avatarfile, $fileName);

				$imfile = "$avatarfile" . "/" . "$fileName";

				$im = imagecreatefrompng($imfile);

				$new_width = "150";
				$new_height = "150";

				list($old_x, $old_y) = getimagesize($imfile);

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

				$source = imagecreatefrompng($avatarfile . "/" . $fileName);

				list($width, $height) = getimagesize($avatarfile . "/" . $fileName);

				imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y);


				imagejpeg($thumb, $avatarfile . "/" . $fileName);

				$albm->setFilename($about);
				$albm->setAccounts($user_id);
				$em->persist($albm);
				$em->flush();

				$this->get('session')->getFlashBag()->add('success', 'Album dodany.');

				return $this->redirectToRoute('user_gallery');

			} elseif($ext == "gif") {

				$fileName = "cover.jpeg";# $user_id.".".$file->guessExtension();
				$avatarfile = $this->getParameter('gallerydir');
				$avatarfile .= "/$user_id/$about/";

				$file->move($avatarfile, $fileName);

				



				#$imfile = "$albumdirmin" . "/". $fileName;
				$imfile = "$avatarfile" . "/". $fileName;

				$im = imagecreatefromgif($imfile);

				$new_width = "150";
				$new_height = "150";

				list($old_x, $old_y) = getimagesize($imfile);

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

				$source= imagecreatefromgif($avatarfile . "/" . $fileName);

				imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y);

				#imagejpeg($thumb, $avatarfile . "/" . $fileName);

				$big = $avatarfile . $fileName;
				$small = $avatarfile . "small.gif";

				$size = $thumb_w . "x" . $thumb_h;	

				system("/usr/bin/convert $big -coalesce -repage 0x0 -resize " . $size . " -layers Optimize $small");

				system("/bin/mv $small $avatarfile/cover.jpeg");

				$albm->setFilename($about);
				$albm->setAccounts($user_id);
				$em->persist($albm);
				$em->flush();

				$this->get('session')->getFlashBag()->add('success', 'Album dodany.');

				return $this->redirectToRoute('user_gallery');



			} elseif($ext == "jpeg")
                        {


				$fileName = "cover.jpeg";# $user_id.".".$file->guessExtension();

				$avatarfile = $this->getParameter('gallerydir');
				$avatarfile .= "/$user_id/$about/";


				$file->move($avatarfile, $fileName);

				$imfile = "$avatarfile" . "/" . "$fileName";
				#echo "$avatarfile"; die;


				#$imfile = "$avatarfile" . "/" . "$fileName";

				$im = imagecreatefromjpeg($imfile);

				$new_width = "150";
				$new_height = "150";

				list($old_x, $old_y) = getimagesize($imfile);

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
					$thumb_h =  $new_height;
				}


				$thumb = imagecreatetruecolor($thumb_w, $thumb_h);
				$source = imagecreatefromjpeg($avatarfile . "/" . $fileName);


				imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y);

				#echo "$avatarfile $fileName"; die;

				imagejpeg($thumb, $avatarfile . "/" . $fileName);


				$albm->setFilename($about);
				$albm->setAccounts($user_id);
				$em->persist($albm);
				$em->flush();

				$this->get('session')->getFlashBag()->add('success', 'Album dodany.');

				return $this->redirectToRoute('user_gallery');
			} else 
			{
				$this->get('session')->getFlashBag()->add('error', 'Nieznany format pliku.');
				return $this->redirectToRoute('user_gallery');
			}


			

		}


		if(!file_exists($gallerydir . "/" . $user_id))
		{
			mkdir($gallerydir . "/" . $user_id);
		}

		$albums = scandir($this->getParameter('gallerydir') . "/" . $user_id);
#neq


# GALERIE Z BAZY
		array_shift($albums);
		array_shift($albums);

		$fnames = scandir($this->getParameter('gallerydir') . "/" . $user_id);

/*
		while(list($k, $v) = each($fnames))
		{
			echo "$k - $v<br />";
		}


		die;
*/

		$filenames = array();

		array_shift($fnames);
		array_shift($fnames);

		while(list($k, $v) = each($fnames))
		{
			$filename = $repository->findBy(['filename' => $v]);

			#echo "<pre>" . var_dump($filename); echo "</pre>";

			while(list($k2, $v2) = each($filename))
			{
				$id = $v2->getId();
				$filenames[$v2->getFilename()] = $id;

			}
		}


		$albumscnt = count($albums);

		
		
		while(list($k, $v) = each($albums))
		{

                	$picscnt = scandir($this->getParameter('gallerydir') . "/" . $user_id . "/$v/min/");

			array_shift($picscnt);
			array_shift($picscnt);

			$picscnt = count($picscnt);

			$pics[$v] = $picscnt;

			$allpicscnt += $picscnt;

		}


		$galleryusercontent = $this->getDoctrine()->getRepository(GalleryComment::class)->findBy(['uid' => $user_id]);
		$ccnt = count($galleryusercontent);

		$albccnt = array();

		$albumcntcontent = $this->getDoctrine()->getRepository(GalleryComment::class);

		while(list($k, $v) = each($pics))
		{
			$gallerydir = $this->getParameter('gallerydir');
			$albumdir = $gallerydir . "/" . $user_id . "/$k/min/";
			$albccnt[$k] = 0;

			if(file_exists($albumdir))
			{
				$apics = scandir($albumdir);

				array_shift($apics);
				array_shift($apics);

				foreach($apics as $filename)
				{
					$filename = preg_replace("/.jpeg/", "", $filename); 
					$filename = preg_replace("/.png/", "", $filename); 
					$filename = preg_replace("/.gif/", "", $filename); 
					$acntcontent = $albumcntcontent->findBy(['img_id' => $filename]);
					$albccnt[$k] += count($acntcontent);
				}
			}
		}


		$ts = time();


		return $this->render('port119/usergallery.html.twig',  ['ts' => $ts, 'username' => $username,  'userid' => $user_id, 'albumscnt' => $albumscnt, 'albums' => $albums, 'uid' => $user_id, 'picscnt' => $pics, 'ccnt' => $ccnt, 'allpicscnt' => $allpicscnt, 'albccnt' => $albccnt, 'fnames' => $filenames, 'albumsform' => $albumsform->createView()]);
	}

	public function gallerytitleset(Request $request, User $uid, $gid, $file)
	{
		$form = $this->createForm(GalleryTitleSetType::class);
		$form->handleRequest($request);

		$uid = $uid->getId();
		$uid2 = $this->getUser()->getId();

		$username = $this->getUser();

		if($uid != $uid2) {
			return new Response("don't hack me yo");
		}

		$titlefile = $this->getParameter('gallerydir') . "/$uid/$gid/desc/$file";


	        if($form->isSubmitted() && $form->isValid())
                {
			$title = $form->get('title')->getData();

			file_put_contents($titlefile, $title);

			$this->get('session')->getFlashBag()->add('success', 'Tytuł dodany');

	                return $this->redirectToRoute('user_gallery_content', ['uid' => $uid, 'gid' => $gid]);

		}


		return $this->render('port119/gallerytitle.html.twig', [ 'username' => $username, 'form' => $form->createView(), ]);
	
	}

	public function contentmassdelete(Request $request, User $uid, $gid)
	{
		$uid = $uid->getId();
		$uid2 = $this->getUser()->getId();

		$username = $this->getUser();
		$gallerydir = $this->getParameter('gallerydir');

		$del = 0;

		if($uid != $uid2) {
			return new Reponse("don't hack me yo");
		}

		$data = $request->request;

		while(list($k, $v) = each($data)) 
		{
			while(list($k2, $v2) = each($v))
			{
				#REGEXP

				#$k2 = preg_replace('/(_)[^_]+$/', '.', $k2);

				$k2 = preg_replace('/(_)([^_]+$)/', '.${2}', $k2);

				unlink("$gallerydir/$uid/$gid/min/$k2");
				unlink("$gallerydir/$uid/$gid/orig/$k2");

				if(file_exists("$gallerydir/$uid/$gid/desc/$k2"))
				{
					unlink("$gallerydir/$uid/$gid/desc/$k2");
				}

				$del = 1;
				
			}
		}

		if($del) 
		{
			$this->get('session')->getFlashBag()->add('success', 'Pliki usunięte.');
		}

                return $this->redirectToRoute('user_gallery_content', ['uid' => $uid, 'gid' => $gid]);


	}

	public function gallerydelete(Request $request, User $uid, $gid)
	{
		$uid = $uid->getId();
		$uid2 = $this->getUser()->getId();

		if($uid != $uid2) {
			return new Response("don't hack me yo");
		}

		$gallerydir = $this->getParameter('gallerydir');

		$rms = scandir("$gallerydir/$uid/$gid/min/");

		array_shift($rms);		
		array_shift($rms);

		while(list($k, $v) = each($rms)) 
		{
			unlink("$gallerydir/$uid/$gid/min/$v");
		}

		rmdir("$gallerydir/$uid/$gid/min");


		$rms = scandir("$gallerydir/$uid/$gid/orig/");

		array_shift($rms);
		array_shift($rms);

		while(list($k, $v) = each($rms))
		{
			unlink("$gallerydir/$uid/$gid/orig/$v");
		}

		rmdir("$gallerydir/$uid/$gid/orig");

		if(file_exists("$gallerydir/$uid/$gid/cover.jpeg"))
		{
			unlink("$gallerydir/$uid/$gid/cover.jpeg");
		}


		$rms = scandir("$gallerydir/$uid/$gid/desc/");

		array_shift($rms);
		array_shift($rms);
		
		while(list($k, $v) = each($rms))
		{
			unlink("$gallerydir/$uid/$gid/desc/$v");
		}

		rmdir("$gallerydir/$uid/$gid/desc");

		rmdir("$gallerydir/$uid/$gid");

		#array_map('rmdir', glob("$gallerydir/$uid/$gid/*"));


		$em = $this->getDoctrine()->getManager();
	
		$repo = $this->getDoctrine()->getRepository(Album::class)->findBy(['accounts' => $uid2, 'filename' => $gid]);


		while(list($k, $v) = each($repo))
		{
			$em->remove($v);
		}

		$em->flush();

		$this->get('session')->getFlashBag()->add('success', 'Album usunięty');

		return $this->redirectToRoute('user_gallery');
	}

#USUWANIE WIELU CZEMU CHECKBOX UNLINK

	public function albummassdelete(Request $request, User $uid)
	{
		$uid = $uid->getId();
		$uid2 = $this->getUser()->getId();

		if($uid != $uid2)
		{
			return new Response("don't hack me yo");
		}

		$request = Request::createFromGlobals();

		$data = $request->request;

		$em = $this->getDoctrine()->getManager();


		$repository = $this->getDoctrine()->getRepository(Album::class);

		 

               while(list($k, $v) = each($data))
                {
                        while(list($k2, $v2) = each($v))
			{

				$filename = $repository->findBy(['id' => $k2]);
				while(list($k3, $v3) = each($filename))
				{
					$gallerydir = $this->getParameter('gallerydir');


					$fname = $v3->getFilename();

					$rms = scandir("$gallerydir/$uid/$fname/min");

					array_shift($rms);
					array_shift($rms);

					while(list($k4, $v4) = each($rms))
					{
						if(file_exists("$gallerydir/$uid/$fname/min/$v4"))
						{
							unlink("$gallerydir/$uid/$fname/min/$v4");
						}

					}

					if(file_exists("$gallerydir/$uid/$fname/min"))
					{
						rmdir("$gallerydir/$uid/$fname/min");
					}

					$rms = scandir("$gallerydir/$uid/$fname/orig");

					array_shift($rms);
					array_shift($rms);

					while(list($k4, $v4) = each($rms))
					{
						if(file_exists("$gallerydir/$uid/$fname/orig/$v4"))
						{
							unlink("$gallerydir/$uid/$fname/orig/$v4");
						}
					}

					if(file_exists("$gallerydir/$uid/$fname/orig"))
					{
						rmdir("$gallerydir/$uid/$fname/orig");
					}
	
					$rms = scandir("$gallerydir/$uid/$fname/desc/$v4");

					array_shift($rms);
					array_shift($rms);

					while(list($k4, $v4) = each($rms))
					{
						if(file_exists("$gallerydir/$uid/$fname/desc/$v4"))
						{
							unlink("$gallerydir/$uid/$fname/desc/$v4");
						}

					}

					if(file_exists("$gallerydir/$uid/$fname/desc"))
					{
						rmdir("$gallerydir/$uid/$fname/desc");
					}

					if(file_exists("$gallerydir/$uid/$fname/cover.jpeg"))
					{
						unlink("$gallerydir/$uid/$fname/cover.jpeg");
					}
	
					if(file_exists("$gallerydir/$uid/$fname"))
					{
						rmdir("$gallerydir/$uid/$fname");
					}
				}
				
			}
		}

		
		$this->get('session')->getFlashBag()->add('success', 'Albumy usunięte');

		return $this->redirectToRoute('user_gallery');
	}


	public function contentdelete(Request $request, User $uid, $gid, $file)
	{
		$uid = $uid->getId();
		$uid2 = $this->getUser()->getId();

		if($uid != $uid2) {
			return new Response("don't hack me yo");
		}

		$gallerydir = $this->getParameter('gallerydir');

		unlink("$gallerydir/$uid/$gid/min/$file");
		unlink("$gallerydir/$uid/$gid/orig/$file");
		if(file_exists("$gallerydir/$uid/$gid/desc/$file"))
		{
			unlink("$gallerydir/$uid/$gid/desc/$file");
		}

                return $this->redirectToRoute('user_gallery_content', ['uid' => $uid, 'gid' => $gid]);


	}

	public function contentupload(Request $request, User $uid, $gid)
	{
		$uid = $uid->getId();
		$uid2 = $this->getUser()->getId();

		$username = $this->getUser();

		$unknown = array();
		$failure = "";

		if($uid != $uid2)
		{
			return new Response("don't hack me yo");
		}

		$form = $this->createForm(GalleryMultiUploadType::class);
		$form->handleRequest($request);

		$files = array();

		if($form->isSubmitted() && $form->isValid())
		{
			$fbsent = null;

			$files = $form['file']->getData();

			foreach($files as $file)
			{
				sleep(1);
	                	$gallerydir = $this->getParameter('gallerydir');
        	        	$albumdirorig = $gallerydir . "/" . $uid . "/" . $gid . "/orig/";
										$albumdirmin = $gallerydir . "/" . $uid . "/" . $gid . "/min/";
		

				$ext = $file->guessExtension();


				if($ext == "jpeg")
				{
					$pre = md5(uniqid());

					$fileName = $pre . "." . $file->guessExtension();


#					$fileName = $pre . "-" .$file->getClientOriginalName();
#					$fileName = preg_replace('/^\s+/', '', $fileName);

					$file->move($albumdirmin, $fileName);

	
					$imfile = "$albumdirmin" . "/" . "$fileName";

					$im = imagecreatefromjpeg($imfile);

					$thumb = imagecreatetruecolor(150, 150);
					$source = imagecreatefromjpeg($albumdirmin . "/" . $fileName);

					list($width, $height) = getimagesize($albumdirmin . "/" . $fileName);

					list($width2, $height2) = getimagesize($albumdirmin . "/" . $fileName);

					$thumb2 = imagecreatetruecolor($width2, $height2);

					imagecopyresized($thumb2, $source, 0, 0, 0, 0, $width2, $height2, $width, $height);
					
					imagejpeg($thumb2, $albumdirorig . "/" . $fileName);

					imagecopyresized($thumb, $source, 0, 0, 0, 0, 150, 150, $width, $height);

					imagejpeg($thumb, $albumdirmin . "/" . $fileName);


					if(!$fbsent) {
						$this->get('session')->getFlashBag()->add('success', 'Obrazki wrzucone');
						$fbsent = 1;
					}
						

				} elseif($ext == "gif")
				{

					$pre = md5(uniqid());
					$fileName = $pre . "." . $file->guessExtension();


#          $fileName = $pre . "-" . $file->getClientOriginalName();
#	$fileName = preg_replace('/^\s+/', '', $fileName);

# IMAGEGIF
	#$fileName = preg_replace("/gif/", "jpeg", $fileName);

          $file->move($albumdirmin, $fileName);

	

          $imfile = "$albumdirmin" . "/" . "$fileName";

          $im = imagecreatefromgif($imfile);

          $thumb = imagecreatetruecolor(150, 150);
          $source = imagecreatefromgif($albumdirmin . "/" . $fileName);

          list($width, $height) = getimagesize($albumdirmin . "/" . $fileName);

          list($width2, $height2) = getimagesize($albumdirmin . "/" . $fileName);

          $thumb2 = imagecreatetruecolor($width2, $height2);


          imagecopyresized($thumb2, $source, 0, 0, 0, 0, $width2, $height2, $width, $height);

          #imagejpeg($thumb2, $albumdirorig . "/" . $fileName);

          imagegif($thumb2, $albumdirorig . "/" . $fileName);


	
          imagecopyresized($thumb, $source, 0, 0, 0, 0, 150, 150, $width, $height);

        #  imagejpeg($thumb, $albumdirmin . "/" . $fileName);
          imagegif($thumb, $albumdirmin . "/" . $fileName);

#neq

	$gif = new GIFGenerator();

		if(!$fbsent) {
          		$this->get('session')->getFlashBag()->add('success', 'Obrazki wrzucone');
			$fbsent = 1;
		}

	}	elseif($ext == "png")
        {


		$pre = md5(uniqid());
		$fileName = $pre . "." . $file->guessExtension();

        #  $fileName = $pre . "-" . $file->getClientOriginalName();
# IMAGEPNG
	 # $fileName = preg_replace('/^\s+/', '', $fileName);

#	  $fileName = preg_replace("/png/", "jpeg", $fileName);


          $file->move($albumdirmin, $fileName);


          $imfile = "$albumdirmin" . "/" . "$fileName";

          $im = imagecreatefrompng($imfile);

          $thumb = imagecreatetruecolor(150, 150);
          $source = imagecreatefrompng($albumdirmin . "/" . $fileName);

          list($width, $height) = getimagesize($albumdirmin . "/" . $fileName);

          list($width2, $height2) = getimagesize($albumdirmin . "/" . $fileName);

          $thumb2 = imagecreatetruecolor($width2, $height2);


          imagecopyresized($thumb2, $source, 0, 0, 0, 0, $width2, $height2, $width, $height);

          #imagejpeg($thumb2, $albumdirorig . "/" . $fileName);
          imagepng($thumb2, $albumdirorig . "/" . $fileName);

          imagecopyresized($thumb, $source, 0, 0, 0, 0, 150, 150, $width, $height);

#          imagejpeg($thumb, $albumdirmin . "/" . $fileName);
          imagepng($thumb, $albumdirmin . "/" . $fileName);


	  if(!$fbsent) {
          	$this->get('session')->getFlashBag()->add('success', 'Obrazki wrzucone');
		$fbsent = 1;
	  }

        } 

	else {
		$clientname = $file->getClientOriginalName();

		$unknown[$clientname] = 1;


		#$this->get('session')->getFlashBag()->add('failure', 'Nieznany format.');
	}


	

	}

#	echo count($unknown); die;

	if($unknown)
	{
		while(list($k, $v) = each($unknown))
		{
			$failure .= "$k<br>";
		}

		return $this->redirectToRoute('user_gallery_content_failure', ['unknown' => $failure]);

	}




	return $this->redirectToRoute('user_gallery_content', ['uid' => $uid, 'gid' => $gid]);


	}

		return $this->render('port119/gallerymultiupload.html.twig', ['username' => $username, 'files' => $files, 'form' => $form->createView(), ]);

		#return new Response('plik dodamy');

	}

	public function contentfailure(Request $request, $unknown)
	{
		$username = $this->getUser();
		return $this->render('port119/usergalleryfailure.html.twig', ['username' => $username, 'unknown' => $unknown]);
	}

	public function comment(Request $request, User $uid, $imgid)
	{

		#$username = $uid->getUsername();

		$username = $this->getUser();
		$userid = $this->getUser()->getId();

		$user_id = $uid->getId();



		$fname = md5(uniqid());

		$imgid = preg_replace("/.jpeg/", "", $imgid);

		$gcommentcontent = $this->getDoctrine()->getRepository(GalleryComment::class);
		$content = $gcommentcontent->findBy(['img_id' => $imgid]);

		$gcdir = $this->getParameter('gcdir');

		$ucnt = count($content);

		$gcnt = array();

		$editmark = array();

		while(list($k, $v) = each($content))
		{
			$key = $content[$k]->getfileName();
			$gcnt[$key] = file_get_contents("$gcdir/$imgid/$key");

			$uid_id = $content[$k]->getUid()->getId();

			if($userid == $uid_id)
			{
				$editmark[$uid_id] = 1;

			}


		}

		$gcform = $this->createForm(GalleryCommentType::class);
		$gcform->handleRequest($request);

		$em = $this->getDoctrine()->getManager();

		$gcobj = new GalleryComment();


		if($gcform->isSubmitted() && $gcform->isValid())
		{
			$content = $gcform->get('content')->getData();
			$content = preg_replace("/\n/", "<br> /", $content);

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

			return $this->redirectToRoute('user_gallery_comment', ['uid' => $user_id, 'imgid' => $imgid]);
		}
		
		return $this->render('port119/gallery_comment.html.twig', ['username' => $username, 'gcform' => $gcform->createView(), 'gcnt' => $gcnt, 'content' => $content, 'imgid' => $imgid, 'uid' => $uid, 'editmark' => $editmark]);


		#return new Response("comment $username $uid - $imgid");
	}


	public function comment_delete(Request $request, $uid, $imgid, $fname)
	{
		$user_id = $this->getUser()->getId();


		$em = $this->getDoctrine()->getManager();
		#$query = $em->createQuery('select p from App\Entity\GalleryComment p where p.uid = :id and p.img_id = :imgid and p.filename =:fname')->setParameter('id', $user_id)->setParameter('imgid', $imgid)->setParameter('fname', $fname);
		$query = $em->createQuery('select p from App\Entity\GalleryComment p where p.uid = :id and p.img_id = :imgid and p.filename =:fname')->setParameter('id', $uid)->setParameter('imgid', $imgid)->setParameter('fname', $fname);
		$gcs = $query->getResult();

		$gcs = count($gcs);

		if($gcs == 1)
		{
			$em = $this->getDoctrine()->getManager();

		
			$q = $em->createQuery('delete from App\Entity\GalleryComment p where p.img_id = :img_id and p.filename = :fname')->setParameters(array('img_id' => $imgid, 'fname' => $fname));
			$q->execute();

			$gcdir = $this->getParameter('gcdir');

			unlink("$gcdir/$imgid/$fname");

			$this->get('session')->getFlashbag()->add('success', 'Komentarz usunięty.');

			return $this->redirectToRoute('user_gallery_comment', ['uid' => $user_id, 'imgid' => $imgid]);
		} else {
			return new Response("don't hack me yo");
		}
	}

	public function comment_edit(Request $request, GalleryComment $gcid, $imgid)
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
			$fname .= "/$imgid" . "/". $gcid->getFilename();

			file_put_contents("$fname", $content);

			$this->get('session')->getFlashbag()->add('success', 'Komentarz zapisany.');
			return $this->redirectToRoute('user_gallery_comment', [ 'uid' => $this->getUser()->getId() , 'imgid' => $imgid ]);

		}


		return $this->render("port119/gallery_comment_edit.html.twig", [ 'editform' => $editform->createView(), 'username' => $this->getUser() ]);


	}

	public function content(Request $request, User $uid, $gid)
	{
		$uid = $uid->getId();
		$username = $this->getUser();

		$user_id = $this->getUser()->getId();

		if($uid != $user_id)
		{
			return new Reponse("don't hack me yo");
		}

                $form = $this->createForm(GalleryMultiUploadType::class);
                $form->handleRequest($request);



			$pics = array();

		$accnt = 0;

			$titles = array();
	
			$titles2 = array();


			$gallerydir = $this->getParameter('gallerydir');
#2020
			$albumdir = $gallerydir . "/" . $uid . "/" . $gid . "/min/";

			if(file_exists($albumdir))
			{
				$pics = scandir($albumdir);

				$dircontent = scandir($albumdir);
				$arr = array();

				foreach($dircontent as $filename) 
				{
					if ($filename != '.' && $filename != '..') 
					{
						$dat = date("YmdHiss", filemtime($albumdir.$filename));
						$arr[$dat] = $filename;
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


#tutej

                $files = array();
		$failure = "";

		$unknown = array();

		$fbsent = 0;

                if($form->isSubmitted() && $form->isValid())
                {
			$fbsent = null;

			$files = $form['file']->getData();

			foreach($files as $file)
			{
				sleep(1);
				$gallerydir = $this->getParameter('gallerydir');
				$albumdirorig = $gallerydir . "/" . $uid . "/" . $gid . "/orig/";
				$albumdirmin = $gallerydir . "/"  . $uid . "/" . $gid . "/min";

				$about = $gid;

				$ext = $file->guessExtension();

				if($ext == "jpeg")
				{
					$pre = md5(uniqid());
					$fileName = $pre . "." . $file->guessExtension();

					$file->move($albumdirmin, $fileName);

					$imfile = "$albumdirmin" . "/" . "$fileName";

					$im = imagecreatefromjpeg($imfile);

					$source = imagecreatefromjpeg($albumdirmin . "/" . $fileName);
					
					$new_width = "150";
					$new_height = "150";

					list($old_x, $old_y) = getimagesize($albumdirmin . "/" . $fileName);

					#$old_x = oldSX($source);
					#$old_y = oldSY($source);

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


					list($width, $height) = getimagesize($albumdirmin . "/" . $fileName);

					list($width2, $height2) = getimagesize($albumdirmin . "/" . $fileName);

					$thumb2 = imagecreatetruecolor($width2, $height2);
					imagecopyresized($thumb2, $source, 0, 0, 0, 0, $width2, $height2, $width, $height);


					imagejpeg($thumb2, $albumdirorig . "/" . $fileName);

					#imagecopyresized($thumb, $source, 0, 0, 0, 0, 150, 150, $width, $height);
					imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumb_w, $thumb_h, $width, $height);

					imagejpeg($thumb, $albumdirmin . "/" . $fileName);
#TODO

					if(!$fbsent) {
						$this->get('session')->getFlashBag()->add('success', 'Obrazki wrzucone');
						$fbsent = 1;
					}
				} elseif($ext == "gif")
				{
					$pre = md5(uniqid());
					$fileName = $pre . "." . $file->guessExtension();

					$file->move($albumdirmin, $fileName);

					$imfile = "$albumdirmin" . "/". "$fileName";

					$im = imagecreatefromgif($imfile);

					$source = imagecreatefromgif($albumdirmin . "/" . $fileName);

					$new_width = "150";
					$new_height = "150";

					list($old_x, $old_y) = getimagesize($albumdirmin . "/" . $fileName);

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
					$thumb2 = imagecreatetruecolor(500, 500);

					imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y);

					#imagejpeg($thumb, $albumdirmin . "/" . $fileName);
					#imagejpeg($thumb2, $albumdirorig . "/" . $fileName);


                                        $big1 = $albumdirmin . "/" . $fileName;
					$big2 = $albumdirorig . "/" . $fileName;
                                        $small1 = $albumdirmin . "/" . "small.gif";


                                        $size1 = $thumb_w . "x" . $thumb_h;

					system("/usr/bin/cp $big1 $big2");

                                        system("/usr/bin/convert $big1 -coalesce -repage 0x0 -resize " . $size1 . " -layers Optimize $small1");

					system("/bin/mv $small1 $big1");


					#system("cp $fileName /var/www/port119/public/gallery/$user_id/$about/orig"); #q
					#system("cp $albumdirmin/$fileName $albumdirorig"); #q


					#system("cd /var/www/port119/public/gallery/$user_id/$about/min ; magick convert -resize 150x150 $fileName $fileName");
/*
					$imfile = "$albumdirmin" . "/" . "$fileName";



					$im = imagecreatefromgif($imfile);

					$thumb = imagecreatetruecolor(150, 150);
					$source = imagecreatefromgif($albumdirmin . "/" . $fileName);

					list($width, $height) = getimagesize($albumdirmin . "/" . $fileName);

					list($width2, $height2) = getimagesize($albumdirmin . "/" . $fileName);

					$thumb2 = imagecreatetruecolor($width2, $height2);

					imagecopyresized($thumb2, $source, 0, 0, 0, 0, $width2, $height2, $width, $height);

					imagegif($thumb2, $albumdirorig . "/" . $fileName);

					imagecopyresized($thumb, $source, 0, 0, 0, 0, 150, 150, $width, $height);

					imagegif($thumb, $albumdirmin . "/" . $fileName);
*/
					if(!$fbsent) 
					{
						$this->get('session')->getFlashBag()->add('success', 'Obrazki wrzucone');
						$fbsent = 1;

					}
				} elseif($ext == "png")
				{
					$pre = md5(uniqid());
					$fileName = $pre . "." . $file->guessExtension();


					$file->move($albumdirmin, $fileName);

					$imfile = "$albumdirmin" . "/" . "$fileName";

					$im = imagecreatefrompng($imfile);

					$source = $im;

					$new_width = "150";
					$new_height = "150";

					list($old_x, $old_y)= getimagesize($albumdirmin . "/" . $fileName);

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
				

					#$thumb = imagecreatetruecolor(150, 150);
					$thumb = imagecreatetruecolor($thumb_w, $thumb_h);
					$source = imagecreatefrompng($albumdirmin . "/" . $fileName);

					list($width, $height) = getimagesize($albumdirmin . "/" . $fileName);

					list($width2, $height2) = getimagesize($albumdirmin . "/" . $fileName);

					$thumb2 = imagecreatetruecolor($width2, $height2);


					imagecopyresized($thumb2, $source, 0, 0, 0, 0, $width2, $height2, $width, $height);

					imagepng($thumb2, $albumdirorig . "/" . $fileName);


					imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y);

					imagepng($thumb, $albumdirmin . "/" . $fileName);


					if(!$fbsent) {
						$this->get('session')->getFlashBag()->add('success', 'Obrazki wrzucone');
						$fbsent = 1;
					}





				} else
				{

					$clientname = $file->getClientORiginalName();

					$unknown[$clientname] = 1;

				}

			}

	 		if($unknown)
			{

				while(list($k, $v) = each($unknown))
				{
					$failure .= "$k<br>";
				}

				return $this->redirectToRoute('user_gallery_content_failure', ['unknown' => $failure]);
			}

			return $this->redirectToRoute('user_gallery_content', ['uid' => $uid, 'gid' => $gid]);
  		}


		$em = $this->getDoctrine()->getManager();

		$galleryusercontent = $this->getDoctrine()->getRepository(GalleryComment::class);

		$ccnt = array();

		while(list($k, $v)=each($pics))
		{
			#echo $v . "<br />";
			$v2 = preg_replace("/.jpeg/", "", $v);
			$v2 = preg_replace("/.png/", "", $v2);
			$v2 = preg_replace("/.gif/", "", $v2);
			$usercontent = $galleryusercontent->findBy(['img_id' => $v2]);
			$ccnt[$v] = count($usercontent);
			$accnt += count($usercontent);
		}

		$ts = time();


		return $this->render('port119/usergallerycontent.html.twig', ['ts' => $ts, 'username' => $username, 'uid' => $user_id, 'gid' => $gid, 'ccnt' => $ccnt, 'pics' => $pics, 'picscnt' => $picscnt, 'form' => $form->createView(), 'titles2' => $titles2, 'uid' =>$uid, 'gid' => $gid, 'accnt' => $accnt]);

		
	}

	public function setavatar(Request $request, User $uid, $gid, $id)
	{
		$user_id = $uid->getId();

		$user = $this->getUser()->getId();

		#preg_match("/.jpeg$/", $id, $matches);

		#$matches = count($matches);

		if(preg_match("/.gif$/", $id))
		{
			$fileName = $id;
			$avatarfile = $this->getParameter('avatardir');

			copy("/var/www/port119/public/gallery/$user_id/$gid/orig/$id", $avatarfile . "/$user_id.gif");

			$imfile = "$avatarfile/$user_id.gif";

			$im = imagecreatefromgif($imfile);

			$thumb = imagecreatetruecolor(50, 50);
			$source = imagecreatefromgif($avatarfile . "/" . "$user_id.gif");

			list($width, $height) = getimagesize($avatarfile . "/" . "$user_id.gif");

			imagecopyresized($thumb, $source, 0, 0, 0, 0, 50, 50, $width, $height);
			imagejpeg($thumb, $avatarfile . "/" . "$user_id.jpeg");
		}
		elseif(preg_match("/.png$/", $id))
		{
			$fileName = $id;
			$avatarfile = $this->getParameter('avatardir');

			copy("/var/www/port119/public/gallery/$user_id/$gid/orig/$id", $avatarfile . "/$user_id.png");

			$imfile = "$avatarfile/$user_id.png";

			$im = imagecreatefrompng($imfile);

			$thumb = imagecreatetruecolor(50, 50);
			$source = imagecreatefrompng($avatarfile . "/" . "$user_id.png");

			list($width, $height) = getimagesize($avatarfile . "/" . "$user_id.png");

			imagecopyresized($thumb, $source, 0 ,0 ,0,0, 50, 50, $width, $height);
			imagejpeg($thumb, $avatarfile . "/" . "$user_id.jpeg");

		}
		elseif(preg_match("/.jpeg$/", $id))
		{
			#PNG
			$fileName = $id;
			$avatarfile = $this->getParameter('avatardir');	

			copy("/var/www/port119/public/gallery/$user_id/$gid/orig/$id", $avatarfile . "/$user_id.jpeg");

			$imfile = "$avatarfile/$user_id.jpeg";


			$im = imagecreatefromjpeg($imfile);

			$thumb = imagecreatetruecolor(50, 50);
			$source = imagecreatefromjpeg($avatarfile . "/" . "$user_id.jpeg");

			list($width, $height) = getimagesize($avatarfile . "/" . "$user_id.jpeg");

			imagecopyresized($thumb, $source, 0, 0, 0, 0, 50, 50, $width, $height);
			imagejpeg($thumb, $avatarfile . "/" . "$user_id.jpeg");
		}
		
		$this->get('session')->getFlashBag()->add('success', 'Avatar ustawiony');
		return $this->redirectToRoute('user_gallery_content', ['uid' => $user, 'gid' => $gid]);
	}



	public function add(Request $request)
	{
		$albumsform = $this->createForm(UserGalleryType::class);
		$albumsform->handleRequest($request);

		$user_id = $this->getUser()->getId();
		$username = $this->getUser();
		
		$img = new Gallery2();


 		$em = $this->getDoctrine()->getManager();

		$albm = new Album();

		if($albumsform->isSubmitted() && $albumsform->isValid())
		{

			$albumfile = $this->getParameter('gallerydir') . "/" . $user_id;
		#	var_dump($albumfile); die;
			/** @var \Symfony\Component\HttpFoundation\File\UploadedFile $file */
			$file = $img->getBrochure();
			$file = $albumsform->get('image')->getData();
			

			$ext = $file->guessExtension();

			$about = $albumsform->get('id')->getData();

			if(!file_exists($albumfile . "/" . $about))
			{
				mkdir("$albumfile/$about");
				mkdir("$albumfile/$about/min");
				mkdir("$albumfile/$about/orig");
				mkdir("$albumfile/$about/desc");

			} else 
			{
				$this->get('session')->getFlashBag()->add('success', 'Grupa już istnieje.');
                                return $this->redirectToRoute('user_gallery');
			}

			$albm->setFilename($about);
			$albm->setAccounts($user_id);
			$em->persist($albm);
			$em->flush();


			if($ext == "png")
			{
                                $fileName = "cover.jpeg";# $user_id.".".$file->guessExtension();

                                $avatarfile = $this->getParameter('gallerydir'); 
                                $avatarfile .= "/$user_id/$about/";


                                $file->move($avatarfile, $fileName);

                                $imfile = "$avatarfile" . "/" . "$fileName";

                                $im = imagecreatefrompng($imfile);

                                $thumb = imagecreatetruecolor(150, 150);
                                $source = imagecreatefrompng($avatarfile . "/" . $fileName);

                                list($width, $height) = getimagesize($avatarfile . "/" . $fileName);

                                imagecopyresized($thumb, $source, 0, 0, 0, 0, 150, 150, $width, $height);

                                imagejpeg($thumb, $avatarfile . "/" . $fileName);

#galeria w bazie
#				$albm->setFilename($fileName);
#				$em->persist($albm);
#				$em->flush();

				$this->get('session')->getFlashBag()->add('success', 'Album dodany.');

                                
                                return $this->redirectToRoute('user_gallery');


			} elseif($ext == "gif") {


                                $fileName = "cover.jpeg";# $user_id.".".$file->guessExtension();
                                $avatarfile = $this->getParameter('gallerydir');
                                $avatarfile .= "/$user_id/$about/";

                                #echo $avatarfile; die;


                                $file->move($avatarfile, $fileName);

                                $imfile = "$avatarfile" . "/" . "$fileName";

                                $im = imagecreatefromgif($imfile);

                                $thumb = imagecreatetruecolor(150, 150);
                                $source = imagecreatefromgif($avatarfile . "/" . $fileName);

                                list($width, $height) = getimagesize($avatarfile . "/" . $fileName);

                                imagecopyresized($thumb, $source, 0, 0, 0, 0, 150, 150, $width, $height);

                                imagejpeg($thumb, $avatarfile . "/" . $fileName);

				$this->get('session')->getFlashBag()->add('success', 'Grupa dodana.');

                                return $this->redirectToRoute('user_gallery');
			


			} 



			elseif($ext == "jpeg")
			{

                                $fileName = "cover.jpeg";# $user_id.".".$file->guessExtension();


                                $avatarfile = $this->getParameter('gallerydir');
				$avatarfile .= "/$user_id/$about/";

				#echo $avatarfile; die;


                                $file->move($avatarfile, $fileName);

                                $imfile = "$avatarfile" . "/" . "$fileName";

                                $im = imagecreatefromjpeg($imfile);

                                $thumb = imagecreatetruecolor(150, 150);
                                $source = imagecreatefromjpeg($avatarfile . "/" . $fileName);

                                list($width, $height) = getimagesize($avatarfile . "/" . $fileName);

                                imagecopyresized($thumb, $source, 0, 0, 0, 0, 150, 150, $width, $height);

                                imagejpeg($thumb, $avatarfile . "/" . $fileName);

				$this->get('session')->getFlashBag()->add('success', 'Grupa dodana.');
				
				return $this->redirectToRoute('user_gallery');


			}
			

		
		}

		return $this->render('port119/usergalleryadd.html.twig', ['username' => $username, 'userid' => $user_id, 'albumsform' => $albumsform->createView()]);


	}
}

?>
