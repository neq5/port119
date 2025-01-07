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

class UserProfileController extends Controller
{
	public function index(Request $request)
	{
		$settingsform = $this->createForm(UserSettingsType::class, $this->getUser());
		$settingsform->handleRequest($request);

		$user_id = $this->getUser()->getId();
		$username = $this->getUser();

		$user = $this->getUser();
		$em = $this->getDoctrine()->getManager();

		if($settingsform->isSubmitted() && $settingsform->isValid())
		{

			$aboutfile = $this->getParameter('aboutdir') . "/$user_id";
			$sigfile = $this->getParameter('sigdir') . "/$user_id";

			#if($settingsform->get('email')->getData())
			#{
			#	$user->setEmail($settingsform->get('email')->getData());
			#}
			if($settingsform->get('username')->getData())
			{
				$uname = $settingsform->get('username')->getData();
				$userexists = $em->createQuery('select COUNT(u.username) from App:User u where u.id != :id and u.username = :uname')->setParameter(':id', $user_id)->setParameter(':uname', $uname)->getResult();

				if($userexists[0][1])
				{
					return $this->render('port119/user_exists.html.twig', ['uname' => $settingsform->get('username')->getData(), 'username' => $username  ]);
				}
				$user->setUsername($settingsform->get('username')->getData());
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
			} elseif(file_exists($aboutfile))
			{
				unlink($aboutfile);
			}
			if($settingsform->get('sig')->getData())
			{
				file_put_contents($sigfile, $settingsform->get('sig')->getData());
			} elseif(file_exists($sigfile))
			{
				unlink($sigfile);
			}
				
			$em->persist($user);
			$em->flush();

      $this->get('session')->getFlashBag()->add('success', 'Dane zaktualizowane.');


			return $this->redirectToRoute('user_profile');

			
		}

		return $this->render('port119/userprofile.html.twig', [ 'username' => $username, 'settingsform' => $settingsform->createView()]);
	}
}

?>
