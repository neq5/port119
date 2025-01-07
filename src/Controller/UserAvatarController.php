<?php

namespace App\Controller;

#neq

use App\Entity\User;

use App\Form\UserSettingsType;

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
use App\Form\Gallery2Type;

use GD;

class UserAvatarController extends Controller
{
	public function index(Request $request)
	{
		$avatarform = $this->createForm(Gallery2Type::class);
		$avatarform->handleRequest($request);

		$img = new Gallery2();

		$username = $this->getUser();

		$user_id = $this->getUser()->getId();

		if($avatarform->isSubmitted() && $avatarform->isValid())
		{
			/** @var \Symfony\Component\HttpFoundation\File\UploadedFile $file */
			$file = $img->getBrochure();
			$file = $avatarform->get('image')->getData();

			$todelete = $avatarform->get('todelete')->getData();


			if($todelete)
			{
				$defaultFile = "/var/www/port119/default_user.jpg";



				$fileName = $user_id.".jpeg";

				$avatarfile = $this->getParameter('avatardir');

				$targetfile = "$avatarfile/$fileName";

				unlink($targetfile);

				if(!copy($defaultFile, $targetfile)) { echo "błąd"; die; }

				$this->get('session')->getFlashBag()->add('success', 'Avatar usunięty.');

				return $this->redirectToRoute('user_avatar');


			}



			if($file) 
			{
			$ext = $file->guessExtension();


			if($ext) 
			{

				if($ext == "png")
				{
					$fileName = $user_id.".".$file->guessExtension();
					$avatarfile = $this->getParameter('avatardir');

					unlink("$avatarfile" . "/" . $fileName);
					$file->move($avatarfile, $fileName);

					$imfile = "$avatarfile" . "/" . "$fileName";

					$image = imagecreatefrompng($imfile);

					$fileName = preg_replace("/png/", "jpeg", $fileName);

					imagejpeg($image, $avatarfile . "/". "$fileName");

					$imfile = "$avatarfile" . "/" . "$fileName";
					$thumb = imagecreatetruecolor(50, 50);
					$source = imagecreatefromjpeg($imfile);

					list($width, $height) = getimagesize($imfile);

#TODO
					if($width < 50 || $height < 50)
					{
						imagecopyresized($thumb, $source, 0, 0, 0, 0, $width, $height, $width, $height);
						imagejpeg($thumb, $imfile);		

					}
					#imagecopyresized($thumb, $source, 0, 0, 75, 80, 75, 80, $width, $height);
					#imagecopyresized($thumb, $source, 0, 0, 75, 80, 98, 107, $width, $height);
					imagecopyresized($thumb, $source, 0, 0, 0, 0, 50, 50, $width, $height);

					imagejpeg($thumb, $imfile);		

	
				} elseif($ext == "gif") {
					$fileName = $user_id.".".$file->guessExtension();
					$avatarfile = $this->getParameter('avatardir');

					#unlink("$avatarfile" . "/" . $fileName);

					$file->move($avatarfile, $fileName);

					$imfile = "$avatarfile" . "/" . "$fileName";

					$image = imagecreatefromgif($imfile);

					$fileName = preg_replace("/gif/", "jpeg", $fileName);

					imagejpeg($image, $avatarfile . "/" . "$fileName");

					$imfile = "$avatarfile" . "/" . "$fileName";
					$thumb = imagecreatetruecolor(50, 50);
					$source = imagecreatefromjpeg($imfile);

					list($width, $height) = getimagesize($imfile);

					imagecopyresized($thumb, $source, 0, 0, 0, 0, 50, 50, $width, $height);
					imagejpeg($thumb, $imfile);		

				} elseif ($ext == "jpeg")
				{

					$fileName = $user_id.".".$file->guessExtension();

					$avatarfile = $this->getParameter('avatardir');

					#echo "$fileName, $avatarfile"; die;

					#unlink("$avatarfile" . "/" . $fileName);

					$file->move($avatarfile . "/", $fileName);
					#$file->move("/tmp/chuj");

					#$name = $file->getFileName();
					#$target = $avatarfile . "/" . $fileName;

					#echo "$name $target"; die;

					#copy("/tmp/chuj/$name", "$avatarfile" . "/". "$fileName");

					$imfile = "$avatarfile" . "/" . "$fileName";

					$im = imagecreatefromjpeg($imfile);

					$thumb = imagecreatetruecolor(50, 50);
					$source = imagecreatefromjpeg($avatarfile . "/" . $fileName);

					list($width, $height) = getimagesize($avatarfile . "/" . $fileName);

					imagecopyresized($thumb, $source, 0, 0, 0, 0, 50, 50, $width, $height);
			#	imagecopyresized($thumb, $source, 0, 0, 75, 80, 75, 80, $width, $height);



					imagejpeg($thumb, $avatarfile . "/" . $fileName);

					return $this->redirectToRoute('user_avatar');
				} else 
				{
					$this->get('session')->getFlashBag()->add('failure', 'Nieznany format pliku.');

					return $this->redirectToRoute('user_avatar');
		
				}
			} 
			}
/*
			if($todelete)
			{
				$defaultFile = "/var/www/port119/default_user.jpg";

				$fileName = $user_id.".jpeg";

				#echo $fileName; die;

				$avatarfile = $this->getParameter('avatardir');

				$targetfile = "$avatarfile/$fileName";

	#			unlink($targetfile);

	#			copy($defaultFile, $targetfile);
				
				#echo "$defaultFile $targetfile"; die;
				



				$this->get('session')->getFlashBag()->add('success', 'Avatar usunięty.');

				return $this->redirectToRoute('user_avatar');
			}

*/

# imagepng
			
			$this->get('session')->getFlashBag()->add('success', 'Avatar zaktualizowany.');


			return $this->redirectToRoute('user_avatar');
		}

		$avataruri = "/avatar/$user_id.jpeg";

		if(file_exists("/var/www/port119/public" . $avataruri))
		{
			$avatar = $avataruri;
		} else
		{
			$avatar = "brak";
		}

		return $this->render('port119/useravatar.html.twig', [ 'avatar' => $avatar, 'username' => $username, 'avatarform' => $avatarform->createView(), ]);
	}
	


}


?>

