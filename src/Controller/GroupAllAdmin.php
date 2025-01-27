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

use Knp\Component\Pager\PaginatorInterface;

use App\Entity\Gallery2;



class GroupAllAdmin extends Controller
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


		$allgroups = $this->getDoctrine()->getRepository(Group::class)->findAll();
		$thread_allgroups = $this->paginator->paginate($allgroups, $page, $t_items);

		
		$grcnt = count($allgroups);

		$navipages = ceil($grcnt/$t_items);
	
		$navi = "";

		#$hurl = "http://port119.tld";
		$hurl = $this->getParameter('host') . "/top/group_all";

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

		
    		$gcdn = array();

		$ccnt = array();

		$last = array();

		$em = $this->getDoctrine()->getManager();


    		$groupscdn = $this->getDoctrine()->getRepository(GroupCredentials::class)->findAll();

	
		while(list($k, $v) = each($allgroups))
		{
			$gid = $v->getId();
			$gcnt = $this->getDoctrine()->getRepository(Content2::class)->findBy(array('groups' => $gid));
			$ccnt["$gid"] = count($gcnt);

			$query = $em->createQuery('select MAX(p.created_at) from App\Entity\Content2 p where p.groups = :gid')->setParameter('gid', $gid);
			$lastcr = $query->getArrayResult();
			
			$last["$gid"] = $lastcr[0][1];


			#echo "<pre>", var_dump($lastcr), "</pre><br />";
			#
			
			#echo $lastcr[0][1];


			
		}

    		while(list($k, $v) = each($groupscdn))
    		{		 
      			$group = $v->getGroups()->getName();
			$groupid = $v->getGroups()->getId();

     			$user = $v->getAccounts();
			$id = $v->getAccounts()->getId();

      			#$gcdn["$group"]["$user"] = true;
      			$gcdn["$group"]["$user"] = $id;

    		}

		$abouts = array();
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

		$subscriptions = $this->getDoctrine()->getRepository(Subscriptions::class)->findBy(['accounts' => $userid]);

		return $this->render('port119/groupall.html.twig', [ 'grcnt' => $grcnt, 'thread_allgroups' => $thread_allgroups, 'navi' => $navi, 'username' => $username, 'abouts' => $abouts, 'allgroups' => $allgroups, 'gcdn' => $gcdn, 'subscriptions' => $subscriptions, 'ccnt' =>$ccnt, 'last' => $last]);
	}
}

?>
