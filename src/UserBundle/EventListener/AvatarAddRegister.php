<?php

namespace App\UserBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityManagerInterface;


use Doctrine\ORM\Events;

use App\Entity\User;


class AvatarAddRegister implements EventSubscriberInterface
{

	/**
	 * @var EntityManagerInterface
	 */

	private $entityManager;

	public function __construct(EntityManagerInterface $entityManager)
	{
		$this->entityManager = $entityManager;

	}

	public static function getSubscribedEvents()
	{
		return array(FOSUserEvents::REGISTRATION_COMPLETED => [['onRegistrationSuccess']]); #, 10]]);

	}

	public function onRegistrationSuccess(\FOS\UserBundle\Event\FilterUserResponseEvent $event)
	{
		$e = $event->getUser();

		$id =$e->getId();

		copy("/var/www/port119/default_user.jpg", "/var/www/port119/public/avatar/$id.jpeg");


		$gdir = "/var/www/port119/public/gallery";

		if(!file_exists("$gdir/$id"))
		{
			mkdir("$gdir/$id");
						
		}

	}
	
}

?>
