<?php

namespace App\Controller;

use App\Entity\User;


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


use App\Entity\Wall;
use App\Entity\Comment;
use App\Entity\GalleryComment;
use App\Entity\Group;
use App\Entity\GroupCredentials;
use App\Entity\Subscriptions;
use App\Entity\Content2;
use App\Entity\Friends;



class UserDeleteController extends Controller
{
	public function index(Request $request)
	{
		$uid = $this->getUser()->getId();
		$username = $this->getUser();


		return $this->render('port119/userdel_confirm.html.twig', [ 'username' => $username, 'uid' => $uid]);

	}

	/*
	public function confirm(Request $request, User $uid)
	{
		$user_id = $this->getUser()->getId();
		$uid = $uid->getId();

		

		#WallController.php:350:         $q = $em->createQuery('delete from App\Entity\Comment c where c.wid = :wid and c.uid = :uid and c.filename = :fname')->setParameters(array('wid' => $wid, 'uid' => $uid, 'fname' => $fname));

		$em = $this->getDoctrine()->getManager();

		$q = $em->createQuery('delete from App\Entity\Content2 c where c.accounts = :id')->setParameter('id', $user_id);
		$q->execute();

		$q = $em->createQuery('delete from App\Entity\Friends f where f.user = :id')->setParameter('id', $user_id);
		$q->execute();

		$q = $em->createQuery('delete from App\Entity\Friends f where f.party = :id')->setParameter('id', $user_id);
		$q->execute();

		$q = $em->createQuery('delete from App\Entity\GalleryComment g where g.uid = :id')->setParameter('id', $user_id);
		$q->execute();

		$q = $em->createQuery('delete from App\Entity\GroupCredentials g where g.accounts = :id')->setParameter('id', $user_id);
		$q->execute();

		

		return new Response("$user_id -- $uid");
	}
	 */

	public function confirm(Request $request, User $uid)
	{
		return new Response("W celu usunięcia konta skontaktuj się z nami <a href=mailto:neq@port119.pl>mailowo</a>");
	}
}

?>
