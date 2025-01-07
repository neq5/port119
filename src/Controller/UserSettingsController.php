<?php

namespace App\Controller;

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

use Imagick;
use ImagickPixel;

use GD;


class UserSettingsController extends Controller
{
	public function index(Request $request, TokenStorageInterface $tokenStorage, EncoderFactoryInterface $encoderFactory)
	{
		$passform = $this->createPasswordForm($tokenStorage, $encoderFactory);


		$settingsform = $this->createForm(UserSettingsType::class, $this->getUser());

		$avatarform = $this->createForm(Gallery2Type::class);
		$avatarform->handleRequest($request);
		$img = new Gallery2();


		$passform->handleRequest($request);
		$settingsform->handleRequest($request);

		$user_id = $this->getUser()->getId();


		
#		$imgform->handleRequest($request);

#TODO: conver gifs and pngs to jpeg


		if($avatarform->isSubmitted() && $avatarform->isValid())
		{
			/** @var \Symfony\Component\HttpFoundation\File\UploadedFile $file */
			$file = $img->getBrochure();
			$file = $avatarform->get('image')->getData();

			$fileName = $user_id.".".$file->guessExtension();

			$avatarfile = $this->getParameter('avatardir');

			$file->move($avatarfile, $fileName);

			$imfile = "$avatarfile" . "/" . "$fileName";

			$im = imagecreatefromjpeg($imfile);

			#$thumb = imagecreatetruecolor(140, 150);
			$thumb = imagecreatetruecolor(70, 75);
			$source = imagecreatefromjpeg($avatarfile . "/" . $fileName);

			list($width, $height) = getimagesize($avatarfile . "/" . $fileName);


 			#imagecopyresized($thumb, $source, 0, 0, 140, 150, 160, 165, $width, $height);
 			imagecopyresized($thumb, $source, 0, 0, 70, 75, 80, 82, $width, $height);


			imagejpeg($thumb, $avatarfile . "/" . $fileName);

			return $this->redirectToRoute('user_settings');
		}


		if($passform->isSubmitted() && $passform->isValid())
		{
			$user = $this->getUser();
			$user->setPassword($encoderFactory->getEncoder($user)->encodePassword($passform->get('new_pass')->getData(), $user->getSalt()));

			$em = $this->getDoctrine()->getManager();
			$em->persist($user);
			$em->flush();
			$this->get('session')->getFlashBag()->add('success', 'Hasło zostało zmienione!');
		}




		if($settingsform->isSubmitted() && $settingsform->isValid())
		{
			$user = $this->getUser();
			$em = $this->getDoctrine()->getManager();

			$user_id = $this->getUser()->getId();

			$aboutfile = $this->getParameter('aboutdir') . "/$user_id";
			$sigfile = $this->getParameter('sigdir') . "/$user_id";


			if($settingsform->get('email')->getData())
			{
				$user->setEmail($settingsform->get('email')->getData());
			}

			if($settingsform->get('firstname')->getData())
			{
				$user->setFirstname($settingsform->get('firstname')->getData());
			}

			if($settingsform->get('lastname')->getData())
			{
				$user->setLastname($settingsform->get('lastname')->getData());
			}

			if($settingsform->get('about')->getData())
			{
				file_put_contents($aboutfile, $settingsform->get('about')->getData());
			} 
			elseif(file_exists($aboutfile))
			{
				unlink($aboutfile);
			}


			if($settingsform->get('sig')->getData())
			{
				file_put_contents($sigfile, $settingsform->get('sig')->getData());
			}
			elseif(file_exists($sigfile))
			{
				unlink($sigfile);
			}
			
			$em->persist($user);
			$em->flush();
			$this->get('session')->getFlashBag()->add('success', 'Ustawienia zostały zmienione');

		}

		$username = $this->getUser();

		$avataruri = "/avatar/$user_id.jpeg";
	
		if(file_exists("/var/www/port119/public" . $avataruri))
		{
			$avatar = $avataruri;
		} else
		{
			$avatar = "brak";
		}

		return $this->render('port119/settings.html.twig', [
			'avatar' => $avatar,
			'avatarform' => $avatarform->createView(),
			'passform' => $passform->createView(),
			'settingsform' => $settingsform->createView(),
			'username' => $username 
		]);


	}

	protected function createPasswordForm(TokenStorageInterface $tokenStorage, EncoderFactoryInterface $encoderFactory)
	{
		return $this->createFormBuilder()
			->add('current', PasswordType::class, [
				'label' => 'Aktualne hasło',
				'required' => true,
				'data' => '',
				'constraints' => [
					new UserPassword()
				]
			])
			->add('new_pass', RepeatedType::class, [
				'type' => PasswordType::class,
				'required' => true,
				'first_options' => [
					'label' => 'Nowe hasło',
					'constraints' => [
						new Length(['min' => 6])
					]
				],
				'second_options' => [
					'label' => 'Powtórz hasło',
				]
			])
			->getForm();
	}
}


?>
