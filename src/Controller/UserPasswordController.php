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





class UserPasswordController extends Controller
{
	public function index(Request $request, TokenStorageInterface $tokenStorage, EncoderFactoryInterface $encoderFactory)
	{
		$username = $this->getUser()->getUsername();

		$pwempty = $this->getDoctrine()->getRepository(User::class)->findBy(['username' => $username, 'password' => "brak"]);
		if($pwempty) {
			$passform = $this->createPasswordFormEmpty($tokenStorage, $encoderFactory);
			$passform->handleRequest($request);

			if($passform->isSubmitted() && $passform->isValid())
			{
				$user = $this->getUser();
				$user->setPassword($encoderFactory->getEncoder($user)->encodePassword($passform->get('new_pass')->getData(), $user->getSalt()));

				$em = $this->getDoctrine()->getManager();
				$em->persist($user);
				$em->flush();

				$this->get('session')->getFlashBag()->add('success', 'Hasło zostało zmienione.');
				return $this->redirectToRoute('user_password');
			}

		} else
		{

			$passform = $this->createPasswordForm($tokenStorage, $encoderFactory);
			$passform->handleRequest($request);

			$user = $this->getUser();



		

			if($passform->isSubmitted() && $passform->isValid())
			{
				$user = $this->getUser();
				$user->setPassword($encoderFactory->getEncoder($user)->encodePassword($passform->get('new_pass')->getData(), $user->getSalt()));


				$em = $this->getDoctrine()->getManager();
				$em->persist($user);
				$em->flush();

				$this->get('session')->getFlashBag()->add('success', 'Hasło zostało zmienione.');
				return $this->redirectToRoute('user_password');
			}	
		}

		$username = $this->getUser();


		return $this->render('port119/userpassword.html.twig', [ 'username' => $username, 'passform' => $passform->createView(), ]);

	}

  protected function createPasswordForm(TokenStorageInterface $tokenStorage, EncoderFactoryInterface $encoderFactory)
  {
    return $this->createFormBuilder()
      ->add('current', PasswordType::class, [
        'label' => 'Aktualne hasło',
        'required' => true,
        'data' => '',
	'always_empty' => true,
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

  protected function createPasswordFormEmpty(TokenStorageInterface $tokenStorage, EncoderFactoryInterface $encoderFactory)
  {
	return $this->createFormBuilder()
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

