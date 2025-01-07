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

class JQDemoController extends Controller
{
	public function index(Request $request)
	{
		$f = $request->query->get('arg');

		$f = mb_strtolower($f);

		$user_id = $this->getUser()->getId();

#TODO:
#policz 2 zmienne połączone spacją (explode)
#zrób query na firstname / lastname z policzonych zmiennych

		preg_match('/ /', $f, $matches);
		if($matches) {
			$cnt = count($matches);
			echo $cnt;	
		}

		#die;
### 

		$em = $this->getDoctrine()->getManager();

		$repository = $this->getDoctrine()->getRepository(User::class);

#OK neq
		$repo = $em->createQuery("select u.id, u.username, u.firstname, u.lastname from App:User u where (LOWER(u.username) LIKE :param1 or LOWER(u.firstname) LIKE :param2 or LOWER(u.lastname) LIKE :param3) and u.id <> :param4")->setParameter('param1', '%'.$f.'%')->setParameter('param2', '%'.$f.'%')->setParameter('param3', '%'.$f.'%')->setParameter('param4', "$user_id")->getResult();
#/OK

		$json = array();

	
		while(list($k,$v) = each($repo))
		{
			$id = $v['id'];
			$username = $v['username'];
			$firstname = $v['firstname'];
			$lastname = $v['lastname'];


			$repo2 = $em->createQuery("select count(f.id) from App:Friends f where (f.user = :param1 or f.party = :param1) and (f.user = :param2 or f.party = :param2)")->setParameter('param1', "$user_id")->setParameter('param2', "$id")->getResult();

			
			$int = (int) $repo2[0][1];

			if($int == 0)
			{
				$json[$id] = "$firstname $lastname $username";
			}

		}


		$response = new Response(json_encode($json, JSON_UNESCAPED_UNICODE));


		$hurl = $this->getParameter('host');


		$response->headers->set('Access-Control-Allow-Headers', '*');
		$response->headers->set('Access-Control-Allow-Credentials', 'true');
 		$response->headers->set('Access-Control-Allow-Origin', $hurl);
		$response->headers->set('Content-Type', 'application/json');

		return $response;
	}

}




?>
