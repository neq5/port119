<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Group;
use App\Entity\Hits;
use App\Entity\GroupCredentials;
use App\Entity\Content2;
use Knp\Component\Pager\PaginatorInterface;

class HelloWorldController extends Controller
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


	public function hello($page, PaginatorInterface $paginator)
	{
		$username = $this->getUser();
		$uid = $this->getUser()->getId();





		$em = $this->getDoctrine()->getManager();

		$t_items = $this->getParameter('threads_page_items');

		$allgroups = $this->getDoctrine()->getRepository(Group::class)->findBy(array(), array('created_at' => 'DESC'));
		$thread_allgroups = $this->paginator->paginate($allgroups, $page, $t_items);


		$grcnt = count($allgroups);

		$navipages = ceil($grcnt/$t_items);

		$navi = "";

		#$hurl = "http://port119.pl/top/cnt";

		$hurl = $this->getParameter('host') . "/top/cnt";

		for($i=1;$i<=$navipages;$i++)
		{
			if($navipages == 1) 
			{ 
				$navi = "";
			}
			elseif($i == $page)
			{
				$navi .= "| $i";
			} else
			{
				$navi .= "| <a href=$hurl/$i>$i</a>";
			}
		}

		if($page != $navipages)
		{
			$follow = $page+1;
			$navi .= " || <a href=$hurl/$follow>następna</a>";
		}

		$ccnt = array();
		$last = array();

		$gcdn = array();


		$abouts = array();

		while(list($k, $v) = each($allgroups))
		{
			$gid = $v->getId();
			$gcnt = $this->getDoctrine()->getRepository(Content2::class)->findBy(array('groups' => $gid));
			$ccnt["$gid"] = count($gcnt);

			$query = $em->createQuery("select MAX(p.created_at) from App\Entity\Content2 p where p.groups = :gid")->setParameter('gid', $gid);
			$lastcr = $query->getArrayResult();

			$last["$gid"] = $lastcr[0][1];

		}

		$groupscdn = $this->getDoctrine()->getRepository(GroupCredentials::class)->findAll();

		while(list($k, $v) = each($groupscdn))
		{
			$group = $v->getGroups()->getName();
			$groupid = $v->GetGroups()->getId();

			$user = $v->getAccounts();

			$id = $v->getAccounts()->getId();


			$gcdn["$group"]["$user"] = $id;
		}

		$aboutfiles = scandir($this->getParameter('aboutgroupdir') . "/");

		while(list($k, $v) = each($aboutfiles))
		{
			$aboutcontent = file_get_contents($this->getParameter('aboutgroupdir') . "/$v");
			$aboutcontent = substr($aboutcontent, 0, 100);

			if(strlen($aboutcontent) > 96)
			{
				$abouts[$v] = $aboutcontent . "...";
			} else
			{
				$abouts[$v] = $aboutcontent;
			}

		}


		$gids = $this->getDoctrine()->getRepository(Group::class)->findAll();

		$commcontent = array();
		$commcreatedat = array();
		$commaccounts = array();
		$commaccounts2 = array();
		$commtitles = array();
		$commids = array();
		$commgids = array();

		while(list($k, $v) = each($gids))
		{
			$query = $em->createQuery("select p.title, p.id, p.created_at FROM App\Entity\Content2 p where p.groups =:gid and p.created_at = (select max(pp.created_at) from App\Entity\Content2 pp where pp.groups = :gid) order by p.created_at")->setParameter('gid', $v->getId());
			#$query = $em->createQuery("select p.title, p.id, p.created_at FROM App\Entity\Content2 p"); # where p.groups =:gid and p.created_at = (select max(pp.created_at) from App\Entity\Content2 pp where pp.groups = :gid) order by p.created_at")->setParameter('gid', $v->getId());

			$lastcommented = $query->getArrayResult();
			
			if(isset($lastcommented[0]["id"]))
			{
				$commid = $lastcommented[0]["id"];

				$acc = $this->getDoctrine()->getRepository(Content2::class)->findBy(array('id' => $commid));

				$comacc = $acc[0]->getAccounts();
				$comacc2 = $acc[0]->getAccounts()->getId();

				$commca = $lastcommented[0]["created_at"];
				$commtitle = $lastcommented[0]["title"];

				$commids[$commid] = $commid;

                        	$commcontent[$commid] = substr(file_get_contents($this->getParameter('contentdatadir') . "/$commid"), 0, 15) . "...";
                        	$commcreatedat[$commid] = $commca;
                       		$commaccounts[$commid] = $comacc;
                      		$commaccounts2[$commid] = $comacc2;
                      		$commtitles[$commid] = substr($commtitle, 0, 10) . "...";
                       		$commgids[$commid] = $v->getName();
			} 
			#else
			#{
			#	echo "nie ma"; die;
			#}

		}

		asort($commcreatedat);
		$commcreatedat = array_reverse($commcreatedat);

		$ghits = $this->getDoctrine()->getRepository(Hits::class)->findBy(array(), array('hits' => 'DESC'));

		$ghitsarr = array();

		$hits = array();

		while(list($k, $v) = each ($ghits))
		{
			$gid = $v->getGid();
			$ghitsarr["$gid"] = $v->getHits();

			$hits["$gid"] = $v->getHits();
		}

        $cg = $this->getDoctrine()->getRepository(Content2::class)->findBy(array());

        $cntg = array();

        while(list($k, $v) = each($cg))
        {
                $gname = $v->getGroups();

                if(!isset($cntg["$gname"]))
                {
                        $cntg["$gname"] = 1;
                } else
                {
                        $cntg["$gname"]++;
                }
        }

        arsort($cntg);


		return $this->render('port119/index.html.twig', [ 'cntg' => $cntg, 'ghitsarr' => $ghitsarr, 'username' => $username, 'allgroups' => $allgroups, 'ccnt' => $ccnt, 'last' => $last, 'gcdn' => $gcdn, 'abouts' => $abouts, 'grcnt' => $grcnt, 'commids' => $commids, 'commcontent' => $commcontent, 'commcreatedat' => $commcreatedat, 'commaccounts2' => $commaccounts2, 'commaccounts' => $commaccounts, 'commtitles' => $commtitles, 'commgids' => $commgids, 'thread_allgroups' => $thread_allgroups, 'navi' => $navi, 'uid' => $uid]);
	}
}

?>
