<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Group;
use App\Entity\Hits;
use App\Entity\GroupCredentials;
use App\Entity\Content2;
use App\Entity\Subscriptions;
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


		public  function getMinutes($minut)
        {
    // j.pol
         switch($minut)
         {
                case 0: return 0; break;
                case 1: return 1; break;
                case ($minut >= 2 && $minut <= 4):
                case ($minut >= 22 && $minut <= 24):
                case ($minut >= 32 && $minut <= 34):
                case ($minut >= 42 && $minut <= 44):
                case ($minut >= 52 && $minut <= 54): return "$minut minuty temu"; break;
                default: return "$minut minut temu"; break;
        }
        return -1;

        }
public function formatujDate($data_wejsciowa){

    $timestamp = strtotime($data_wejsciowa);

    $now = time();

    if ($timestamp > $now) {
      return 'Podana data nie może być większa od obecnej.';
    }

    $diff = $now - $timestamp;

    $minut = floor($diff/60);
    $godzin = floor($minut/60);
    $dni = floor($godzin/24);

    if ($minut <= 60) {
      $res = $this->getMinutes($minut);
      switch($res)
      { 
        case 0: return "przed chwilą";
        case 1: return "minutę temu";
        default: return $res;
      }
    }

    $timestamp_wczoraj = $now-(60*60*24);
    $timestamp_przedwczoraj = $now-(60*60*24*2);

    if ($godzin > 0 && $godzin <= 6) {

      $restMinutes = ($minut-(60*$godzin));
      $res = $this->getMinutes($restMinutes);
      if ($godzin == 1) {
        return "Godzinę temu ";//.$res
      } else {
      if ($godzin >1 && $godzin<5)return "$godzin godziny temu ";
      if ($godzin >4)return "$godzin godzin temu";
      }

    } else if (date("Y-m-d", $timestamp) == date("Y-m-d", $now)) {//jesli dzisiaj
      return "Dzisiaj ".date("H:i", $timestamp);
    } else if (date("Y-m-d", $timestamp_wczoraj) == date("Y-m-d", $timestamp)) {//jesli wczoraj
      return "Wczoraj ".date("H:i", $timestamp);
    } else if (date("Y-m-d", $timestamp_przedwczoraj) == date("Y-m-d", $timestamp)) {//jesli wczoraj
      return "Przedwczoraj ".date("H:i", $timestamp);
    }

    switch($dni)
    { 
      case ($dni < 7): return "$dni dni temu, ".date("Y-m-d", $timestamp); break;
      case 7: return "Tydzień temu, ".date("Y-m-d", $timestamp); break;
      case ($dni > 7 && $dni < 14): return "Ponad tydzień temu, ".date("Y-m-d", $timestamp); break;
      case 14: return "Dwa tygodznie temu, ".date("Y-m-d", $timestamp); break;
      case ($dni > 14 && $dni < 30): return "Ponad 2 tygodnie temu, ".date("Y-m-d", $timestamp); break;
      case 30: case 31: return "Miesiąc temu"; break;
      case ($dni > 31): return date("Y-m-d H:i", $timestamp); break;
    }
    return date("Y-m-d", $timestamp);
}

	public function hello($page, PaginatorInterface $paginator)
	{
		$username = $this->getUser();
		$uid = $this->getUser()->getId();



		$em = $this->getDoctrine()->getManager();

		$t_items = $this->getParameter('threads_page_items');

		$allgroups = $this->getDoctrine()->getRepository(Group::class)->findBy(array(), array('created_at' => 'DESC'));
		$thread_allgroups = $this->paginator->paginate($allgroups, $page, $t_items);

		
		$userid = $this->getUser()->getId();


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

		$luty = array();
		$lastcr = array();
		$lastf = array();

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
			$lastf["$gid"] = $this->formatujDate($lastcr[0][1]);
		


			#echo $last[$gid];

			$query2 = $em->createQuery('select p.created_at from App\Entity\Group p where p.id = :gid')->setParameter('gid', $gid);
			$lastcr2 = $query2->getArrayResult();

			#echo "<pre>"; var_dump($lastcr2[0]["created_at"]); echo "</pre>";

			$lastcr["$gid"] = $lastcr2[0]["created_at"];

			#NEQ
			$query2 = $em->createQuery('select p.created_at from App\Entity\Group p where p.id = :gid')->setParameter('gid', $gid);
			$lastcr2 = $query2->getArrayResult();

			#echo "<pre>"; var_dump($lastcr2[0]["created_at"]); echo "</pre>";

			$toiter = $lastcr2[0]["created_at"];

			while(list($k, $v) = each($toiter))
			{
				if($k == "date")
				{
					$luty["$gid"] = $this->formatujDate($v);
				}
			}

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


				while(list($kk, $vv) = each($commca))
				{
					if($kk == "date")
					{
						$neq[$gid] = $this->formatujDate($vv);
					}
				}

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
#neq

		$subscriptions = $this->getDoctrine()->getRepository(Subscriptions::class)->findBy(['accounts' => $userid]);

		$ts = time();

		return $this->render('port119/index.html.twig', [ 'ts' => $ts, 'subscriptions' => $subscriptions, 'luty' => $luty, 'lastcr' => $lastcr, 'lastf' => $lastf, 'cntg' => $cntg, 'ghitsarr' => $ghitsarr, 'username' => $username, 'allgroups' => $allgroups, 'ccnt' => $ccnt, 'last' => $last, 'gcdn' => $gcdn, 'abouts' => $abouts, 'grcnt' => $grcnt, 'commids' => $commids, 'commcontent' => $commcontent, 'commcreatedat' => $commcreatedat, 'commaccounts2' => $commaccounts2, 'commaccounts' => $commaccounts, 'commtitles' => $commtitles, 'commgids' => $commgids, 'thread_allgroups' => $thread_allgroups, 'navi' => $navi, 'uid' => $uid]);
	}
}

?>
