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

# groups gcdn abouts


class GroupUserOwn extends Controller
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

		$last = array();
		$ccnt = array();

		$t_items = $this->getParameter('threads_page_items');


		$groups = $this->getDoctrine()->getRepository(Group::class)->findBy(array('owner' => $userid));
		$thread_groups = $this->paginator->paginate($groups, $page, $t_items);

		$grcnt = count($groups);
		$navipages = ceil($grcnt/$t_items);
	
		$navi = "";

		#$hurl = "http://port119.tld";
		$hurl = $this->getParameter('host') . "/top/group_own";

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


		$em = $this->getDoctrine()->getManager();

		while(list($k, $v) = each($groups))
		{
			$gid = $v->getId();

			$gcnt = $this->getDoctrine()->getRepository(Content2::class)->findBy(array('groups' => $gid));
			$ccnt["$gid"] = count($gcnt);

			$query = $em->createQuery('select max(p.created_at) from App\Entity\Content2 p where p.groups = :gid')->setParameter('gid', $gid);
			$lastcr = $query->getArrayResult();

			$last["$gid"] = $lastcr[0][1];
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

		$subscriptions = $this->getDoctrine()->getRepository(Subscriptions::class)->findBy(['accounts' => $userid]);

		return $this->render('port119/usergroup.html.twig', [ 'thread_groups' => $thread_groups, 'navi' => $navi, 'username' => $username, 'groups' => $groups, 'abouts' => $abouts, 'gcdn' => $gcdn, 'subscriptions' => $subscriptions, 'ccnt' => $ccnt, 'last' => $last]);
	}
}


?>
