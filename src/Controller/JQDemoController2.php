<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use App\Entity\User;
use App\Entity\Friends;
use App\Entity\GroupCredentials;
use App\Entity\Group;

class JQDemoController2 extends Controller
{
	public function index(Request $request, Group $gid)
	{

		$f = $request->query->get('arg');


		$f = mb_strtolower($f);

		$user_id = $this->getUser()->getId();


		$em = $this->getDoctrine()->getManager();

		$repository = $this->getDoctrine()->getRepository(User::class);

		$repo = $em->createQuery("select u.id, u.username, u.firstname, u.lastname from App:User u where (LOWER(u.username) LIKE :param1 or LOWER(u.firstname) LIKE :param2 or LOWER(u.lastname) LIKE :param3) and u.id <> :param4")->setParameter('param1', '%'.$f.'%')->setParameter('param2', '%'.$f.'%')->setParameter('param3', '%'.$f.'%')->setParameter('param4', "$user_id")->getResult();


		$repo2 = $em->createQuery("select IDENTITY(g.accounts) from App:GroupCredentials g where g.groups = :grupa")->setParameter('grupa', $gid)->getResult();



		$in_gcdn = array();
		$json = array();

	
		while(list($k, $v) = each($repo2))
		{
			while(list($k2, $v2) = each($v))
			{
				#echo $v2 . "<br>";
				$in_gcdn[$v2] = 1;
			}
		}

		while(list($k,$v) = each($repo))
		{
			$id = $v['id'];
			$username = $v['username'];
			$firstname = $v['firstname'];
			$lastname = $v['lastname'];


			if(!isset($in_gcdn[$id]))
			{
				$json[$id] = "$firstname $lastname $username";
			}

		}


		$response = new Response(json_encode($json, JSON_UNESCAPED_UNICODE));

		$hurl = $this->getParameter('host');


		$response->headers->set('Access-Control-Allow-Headers', '*');
		$response->headers->set('Access-Control-Allow-Credentials', 'true');
 		#$response->headers->set('Access-Control-Allow-Origin', 'https://port119.pl');
 		$response->headers->set('Access-Control-Allow-Origin', $hurl);
		$response->headers->set('Content-Type', 'application/json');

		return $response;
	}

}




?>
