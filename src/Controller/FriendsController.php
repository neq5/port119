<?php

namespace App\Controller;

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

use Symfony\Component\Validator\Constraints\DateTime;

use Symfony\Component\Form\FormTypeInterface;

use App\Entity\Friends;
use App\Entity\User;

use App\Form\FriendsType;

class FriendsController extends Controller
{
	public function index(Request $request)
	{
		$em = $this->getDoctrine()->getManager();

		$user_id = $this->getUser()->getId();
		$username = $this->getUser();

		$content = $this->getDoctrine()->getRepository(Friends::class);


		$users = $this->getDoctrine()->getRepository(User::class)->findAll();

		while(list($k, $v) = each($users))
		{
			$u = $v->getId();
		}

		$form = $this->createForm(FriendsType::class);
		$form->handleRequest($request);

		$friends = new Friends();

		if($form->isSubmitted() && $form->isValid())
		{
	
			$party = $form->get('accounts')->getData();
			

			#$party = $party[0];

			$friends->setUser($username);
			$friends->setParty($party);

			$friends->setCreatedAt(new \DateTime());

			$friends->setConfirmed(false);

			$em->persist($friends);
			$em->flush();

			$this->get('session')->getFlashbag()->add('success', 'Wysłano zaproszenie.');


			return $this->redirectToRoute('friends');

		}

		$repository = $this->getDoctrine()->getRepository(Friends::class);

		$frepotoconfirm = $repository->findBy(['party' => $username, 'confirmed' => 'false']);

		$freporequested = $repository->findBy(['user' => $username, 'confirmed' => 'false']);

		$frepo = $repository->findBy(['party' => $username, 'confirmed' => 'true']);

		$av = array();

		$cav = array();

		$rav = array();

		while(list($k, $v) = each($frepo))
		{
#getuser?
			$avid = $v->getUser()->getId();

			$avdir = $this->getParameter('avatardir');

			$fname = "/$avdir/$avid.jpeg";

			if(file_exists($fname))
			{
				$av[$k] = "/avatar/$avid.jpeg";	
			} else
			{
				$av[$k] = "BRAK";
			}


		}

		while(list($k, $v) = each($frepotoconfirm))
		{
#getuser?
			$avid = $v->getUser()->getId();
			$avdir = $this->getParameter('avatardir');

			$fname = "/$avdir/$avid.jpeg";

			if(file_exists($fname))
			{
				$cav[$k] = "/avatar/$avid.jpeg";
			} else
			{
				$cav[$k] = "BRAK";
			}
		}

		while(list($k, $v) = each($freporequested))
		{
			$avid = $v->getParty()->getId();
			$avdir = $this->getParameter('avatardir');

			$fname = "/$avdir/$avid.jpeg";

			if(file_exists($fname))
			{
				$rav[$k] = "/avatar/$avid.jpeg";
			} else
			{
				$rav[$k] = "BRAK";
			}
		}


		return $this->render('port119/friends.html.twig', [ 'username' => $username, 'form' => $form->createView(), 'frepotoconfirm' => $frepotoconfirm, 'freporequested' => $freporequested, 'frepo' => $frepo, 'av' => $av, 'cav' => $cav, 'rav' => $rav ]);

	}

	public function confirm(Request $request, Friends $fid, User $uid, User $pid)
	{

		$em = $this->getDoctrine()->getManager();

		$friendrecord = $this->getDoctrine()->getRepository(Friends::class)->find($fid);

		$friendrecord->setConfirmed(true);

		$em->persist($friendrecord);
		$em->flush();

		$friends = new Friends();

		$friends->setUser($pid);
		$friends->setParty($uid);

		$friends->setCreatedAt(new \DateTime());

		$friends->setConfirmed(true);

		$em->persist($friends);
		$em->flush();

		$this->get('session')->getFlashbag()->add('success', 'Potwierdzono zaproszenie.');

		return $this->redirectToRoute('friends');

	}

	public function cancel(Request $request, $fid)
	{
		$em = $this->getDoctrine()->getManager();
		$friend = $this->getDoctrine()->getRepository(Friends::class)->find($fid);


		$em->remove($friend);
		$em->flush();

                $this->get('session')->getFlashbag()->add('success', 'Zaproszenie anulowano.');

		return $this->redirectToRoute('friends');

	}

	public function remove(Request $request, $uid, $pid)
	{
		$em = $this->getDoctrine()->getManager();

                $repository = $this->getDoctrine()->getRepository(Friends::class);

		$fremove = $repository->findBy(['party' => $pid, 'user' => $uid]);

		#var_dump($fremove[0]);

		$em->remove($fremove[0]);
		$em->flush();

		$fremove2 = $repository->findBy(['party' => $uid, 'user' => $pid]);

		$em->remove($fremove2[0]);
		$em->flush();

                $this->get('session')->getFlashbag()->add('success', 'Zaproszenie anulowano.');
		return $this->redirectToRoute('friends');

	}
}



?>
