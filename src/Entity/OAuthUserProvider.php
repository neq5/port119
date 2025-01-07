<?php
#namespace AppBundle\Security\Core\User;
namespace App\Entity;

use HWI\Bundle\OAuthBundle\Security\Core\User\FOSUBUserProvider as BaseClass;

#use HWI\Bundle\OAuthBundle\Security\Core\User\OAuthUserProvider;
use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use AppBundle\Entity\SimpleUserInfo;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;


/**
 * Class OAuthUserProvider
 * @package AppBundle\OAuthUserProvider
 *
 **/

class OAuthUserProvider extends BaseClass
{

	/**
	 * @var Session
	 *
	 **/

	protected $session;

	/**
	 * @var Request
	 *
	 **/

	protected $request;

	/**
	 * @var Doctrine
	 *
	 **/

	protected $doctrine;

	/**
	 * @param Session $session
	 * @param Doctrine $doctrine
	 * @param RequestStack $requestStack
	 *
	 **/

	#public function __construct($userManager, $resourceOwner, Doctrine $doctrine, RequestStack $requestStack)
	#{
#		$this->userManager = $userManager;
#		$this->resourceOwner = $resourceOwner;
#		$this->doctrine = $doctrine;
#		$this->request = $requestStack->getCurrentRequest();
#	}

	public function loadUserByOAuthUserResponse(UserResponseInterface $response)
	{
		$social_id = $response->getUsername();
		$nickname = $response->getNickname();
		$realName = $response->getRealName();
		$email = $response->getEmail();
		$avatar   = $response->getProfilePicture();

		$user = $this->userManager->findUserBy(array($this->getProperty($response)=>$social_id));
		#$user = $this->userManager->findUserByFacebookId($social_id);

		if($user === null)
		{
			$user = $this->userManager->findUserByEmail($email);

			if($user === null || !$user instanceof UserInterface)
			{
				$user = $this->userManager->createUser();
				$user->setUsername($email);
				$user->setEmail($email);
				$user->setPlainPassword(md5(uniqid()));
				$user->setEnabled(true);

				$user_id = $user->getId();

				#$sui = new SimpleUserInfo();

				#$sui->setUserId($user_id);
				#$sui->setName($realName);

				#$em = $this->doctrine->getManager();
				#$em->persist($sui);
				#$em->flush();

			}
			$service = $response->getResourceOWner()->getName();
			switch ($service)
			{
				case 'facebook':
					$user->setFacebookID($social_id);
					break;
			}
			$this->userManager->updateUser($user);
		}

		return $user;
	}
}
