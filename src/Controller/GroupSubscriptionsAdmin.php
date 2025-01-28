<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Validator\Constraints\DateTime;

use App\Form\GroupType;
use App\Form\GroupEditType;

use App\Entity\GroupCredentials;

use App\Entity\User;

use App\Entity\Subscriptions;

use App\Entity\Content;
use App\Entity\Content2;

use App\Form\GroupCredentialsType;

use App\Entity\Group;

use App\Entity\Gallery2;

use Knp\Component\Pager\PaginatorInterface;

# subscriptions abouts 

class GroupSubscriptionsAdmin extends Controller
{

	/**
	* @var PaginatorInterface
	*/

	private $paginator;


	/**
	* @param PaginatorInterface $paginator
	*/

	public function __construct(
		PaginatorInterface $paginator
	) {
		$this->paginator = $paginator;
	}



	public function index($page, PaginatorInterface $paginator)
	{

		$username = $this->getUser();
		$userid = $this->getUser()->getId();

		$t_items = $this->getParameter('threads_page_items');


		$subscriptions = $this->getDoctrine()->getRepository(Subscriptions::class)->findBy(['accounts' => $userid]);

		$thraed_subscriptions = $this->paginator->paginate($subscriptions, $page, $t_items);

		$grcnt = count($subscriptions);

		$navipages = ceil($grcnt/$t_items);

		$navi = "";

		#$hurl = "http://port119.tld";

#		$hurl = "http://port119.pl/top/group_admin";

		$hurl = $this->getParameter('host') . "/top/group_sub";

		for($i=1;$i<=$navipages;$i++)
		{
			if($navipages == 1)
			{
				$navi = "";
			}
			elseif($i == $page)
			{
				$navi .= "| $i";
			}
			else
			{
				$navi .= "| <a href=$hurl/$i>$i</a>";
			}
		}
		
		if($page != $navipages)
		{
			$follow = $page+1;
			$navi .= " || <a href=$hurl/$follow>następna</a>";
		}
		
		$abouts = array();

		$ccnt = array();

		$last = array();

		$em = $this->getDoctrine()->getManager();

		while(list($k, $v) = each($subscriptions))
		{
			$gid = $v->getGroups()->getId();
			$gcnt = $this->getDoctrine()->getRepository(Content2::class)->findBy(array('groups' => $gid));
			$ccnt["$gid"] = count($gcnt);

			$query = $em->createQuery('select max(p.created_at) from App\Entity\Content2 p where p.groups = :gid')->setParameter('gid', $gid);
			$lastcr = $query->getArrayResult();

			$last["$gid"] = $lastcr[0][1];

		}

		$aboutfiles = scandir($this->getParameter('aboutgroupdir') . "/");

		while(list($k, $v) = each($aboutfiles))
    		{
      			$aboutcontent = file_get_contents($this->getParameter('aboutgroupdir') . "/$v");
      			$aboutcontent = substr($aboutcontent, 0, 100);

      			if(strlen($aboutcontent) > 96)
      			{
       				 $abouts[$v] = $aboutcontent . "...";
     			}
     			else
      			{
       				 $abouts[$v] = $aboutcontent;
      			}
    		}


   		$gcdn = array();

		$groupscdn = $this->getDoctrine()->getRepository(GroupCredentials::class)->findAll();

    		while(list($k, $v) = each($groupscdn))
    		{ 
    			$group = $v->getGroups()->getName();
      			$user = $v->getAccounts();
			$id = $v->getAccounts()->getId();
  
     			#$gcdn["$group"]["$user"] = true;
     			$gcdn["$group"]["$user"] = $id;

    		}


		return $this->render('port119/subscriptions.html.twig', [ 'thread_subscriptions' => $thraed_subscriptions,  'navi' => $navi, 'username' => $username, 'abouts' => $abouts, 'subscriptions' => $subscriptions, 'gcdn' => $gcdn, 'ccnt' => $ccnt, 'last' => $last]);

		#return new Response("tu");

	}
}

?>
