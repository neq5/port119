<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Validator\Constraints\DateTime;

use App\Entity\Content2;
use App\Entity\Group;
use App\Entity\GroupCredentials;
use App\Entity\User;
use App\Entity\Hits;

use App\Form\GroupContent2Type;
use App\Form\GroupContent2EditType;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;

use Gedmo\Tree\Entity\Repository\NestedTreeRepository;
use Gedmo\Tree\Entity\Repository\AbstractTreeRepository;
use Gedmo\Tree\Entity\Repository\MaterializedPathRepository;

use Symfony\Component\HttpFoundation\Response;


use Gedmo\Tree\TreeListener;

use Knp\Component\Pager\PaginatorInterface;

class ShowDiscussController extends Controller
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

	public function index(Request $request, $name, int $page, PaginatorInterface $paginator)
	{
		$gid = $this->getDoctrine()->getRepository(Group::class)->findOneBy(['name' => "$name"]);
		$groupid = $gid->getId();
    		$em = $this->getDoctrine()->getManager();

		$repo = $em->getRepository('App\Entity\Content2')->findBy(['groups' => $groupid]);



		#$hits = $em->getRepository('App\Entity\Hits')->findBy(['gid' => $groupid]);
		$hits = $this->getDoctrine()->getRepository(Hits::class)->findBy(['gid' => $groupid]);

		$chits = count($hits);

		if(!$chits)
		{
			$ohits = new Hits();
			$ohits->setGid($gid);
			$ohits->setHits("1");

			$em->persist($ohits);
			$em->flush();
		} else
		{
			$int = $hits[0]->getHits();
			$int++;
		
			$hits[0]->setHits($int);

			$em->persist($hits[0]);
			$em->flush();
		}


		$cnt = count($repo);

        $repo = $em->getRepository('App\Entity\Content2');

        $query = $em
                ->createQueryBuilder()
                ->select('node')
                ->from('App\Entity\Content2', 'node')
                ->orderBy('node.root', 'DESC')
                ->addOrderBy('node.lft')
                ->addOrderBy('node.created_at')
#               ->orderBy('node.root, node.lft, node.id, node.created_at', 'ASC')
                #->orderBy('node.root, node.lft, node.created_at', 'ASC')
                #->orderBy('node.id, node.root, node.lft', 'ASC')
                #->orderBy('node.created_at, node.root', 'ASC')
                ->andwhere('node.groups = :group')
                ->setParameter('group', $groupid)
                ->getQuery();
                 
        $cnt = count($query->getArrayResult());

        # $page z urla, $items z urla routes.yaml

        $items = $this->getParameter('page_items');

        $paginator->paginate($query, $page, $items);
         
                        
        $options = array(
                'decorate' => true,
                'rootOpen' => '<ul class="lista">',
    'rootClose' => '</ul>',
    #'childOpen' => '<li>',
    #'childClose' => '</li>',
    'childOpen' => '<li><br /><table border=1><tr><td>',
    'childClose' => '</td></tr></table><br /></li>',
    'nodeDecorator' => function($node) {

       $caobj = $node['created_at'];
       $contentdata = file_get_contents($this->getParameter('contentdatadir') . "/" . $node['id']);

                        $uid = $this->getDoctrine()->getRepository(Content2::class)->findOneBy(['id' => $node['id']]);

                        $isdeleted = $uid->getDeleted();

                        $uid = $uid->getAccounts();
                        #$useruid = $uid->getAccounts();

                        $uid = $this->getDoctrine()->getRepository(User::class)->findOneBy(['id' => $uid]);

                        $userid = $uid->getId();

                        $uid = $uid->getUsername();


                        $editmark = 0;

                        if($uid == $this->getUser())
                        {
                                $editmark = 1;
                        }


                        #$avatarfile = $this->getParameter('avatardir') . "/" . $userid . ".jpeg";


                        $gid = $this->getDoctrine()->getRepository(Content2::class)->findOneBy(['id' => $node['id']]);
                        $gid = $gid->getGroups();

                        $gid = $this->getDoctrine()->getRepository(Group::class)->findOneBy(['id' => $gid]);

                        $gid = $gid->getId();


                        #$avataruri = "/groupavatar/" . $gid . ".jpeg";

                        #var_dump($userid); die;


                        $avataruri = "/avatar/" . $userid . ".jpeg";


                        if(file_exists("/var/www/port119/public" . $avataruri))
                        {
                                $avatar = $avataruri;
                        } else
                        {
                                $avatar = null;
                        }


                        $imguri = "/img/" . $node['id'] . ".jpeg";

                        if(file_exists("/var/www/port119/public/content" . $imguri))
                        {
                                $postimg =$imguri;
                        } else
                        {
                                $postimg = null;
                        }

                        $r = array();
                        $rr = "";

                        if(!$isdeleted)
                        {
                                if($avatar)
                                {
                                        $return = "<img src=" . $avatar . ">" . " | data: " . $caobj->format('Y-m-d H:i:s') . " | " . "autor: <a href=\"/top/userspace/$userid\">" . $uid . "</a> | tytuł: " . $node['title'] . " | <a href=/top/d2/" . $node['id'] . "/1/" . $gid . "/reply>odpowiedz</a> ";
                                        $r[] = $return;
                                } else
                                {
                                        $return = "data: " . $caobj->format('Y-m-d H:i:s') . " | " . "autor: <a href=\"/top/userspace/$userid\">" . $uid .  "</a> | tytuł: " . $node['title'] . " | <a href=/top/d2/" . $node['id'] . "/1/" . $gid . "/reply>odpowiedz</a> ";

                                        $r[] = $return;
                                }

                                if($editmark) {
                                        $return = $return . "<a href=/top/d2/" . $node['id'] . "/top/1/edit>edytuj</a> <a href=/top/d2/" . $node['id'] . "/1/delete>skasuj</a>";
                                        $r[] = "<a href=/top/d2/" . $node['id'] . "/edit>edytuj</a> <a href=/top/d2/" . $node['id'] . "/1/delete>skasuj</a>";
                                }

                                if($postimg)
                                {
                                        $return .= " | TREŚĆ: <img src=/content/$imguri> " . $contentdata . "<br />";
                                } else
                                {
                                        $return .= " | TREŚĆ: " . $contentdata . "<br />";
                                }


                 } else {
			$return = "data: " . $caobj->format('Y-m-d H:i:s') . " | " . "autor: " . $uid . " POST SKASOWANY"; #neq
			$r[] = "data: " . $caobj->format('Y-m-d H:i:s') . " | " . "autor: " . $uid . " POST SKASOWANY";
		}

                while(list($k, $v) = each($r)) {
                        $rr .= $v;
                }

                        #echo $rr; die;

#                return $rr . "<br />"; die;

                return $return;

    }
);


        $tree = $repo->buildTree($query->getArrayResult(), $options);

        $navipages = ceil($cnt/$items);

        $hurl = $this->getParameter('host');



        for($i=1;$i<=$navipages;$i++)
        {
                if($i == $page)
                {
                        $tree.= "| $i";
                } else
                {
                        $namepreg = preg_replace("/ /", "%20", $name);
                        #$tree .= "| <a href=https://port119.pl/d2/$name/$i>$i</a>";
                        $tree .= "| <a href=$hurl/top/d2/$namepreg/$i>$i</a>";
                }
        }

        if($page != $navipages)
        {
                $namepreg = preg_replace("/ /", "%20", $name);
                $follow = $page+1;
                #$tree .= " || <a href=https://port119.pl/d2/$name/$follow>następna</a>";
                $tree .= " || <a href=$hurl/top/d2/$namepreg/$follow>następna</a>";
        }

	$avataruri = "/groupavatar/" . $groupid . ".jpeg";

	$gcdn = array();

	$groupscdn = $this->getDoctrine()->getRepository(GroupCredentials::class)->findAll();

	while(list($k, $v) = each($groupscdn))
	{
		$group = $v->getGroups()->getName();
		$user_name = $v->getAccounts();
		$usr = $v->getAccounts()->getId();

		$gcdn["$group"]["$user_name"] = $user_name->getId();
	}

	$abouts = array();

	$aboutfiles = scandir($this->getParameter('aboutgroupdir') . "/");

	while(list($k, $v) = each($aboutfiles))
	{
		$aboutcontent = file_get_contents($this->getParameter('aboutgroupdir') . "/$v");

		$abouts[$v] = $aboutcontent;

	}

        	$gid = $this->getDoctrine()->getRepository(Group::class)->findOneBy(['name' => "$name"]);
                $groupid = $gid->getId();
                $em = $this->getDoctrine()->getManager();

                $repo = $em->getRepository('App\Entity\Content2')->findBy(['groups' => $groupid], array('created_at' => 'DESC'));


                $ccnt = count($repo);

		#$name = preg_replace("/ /", "%20", $name);

		$uids = array();
		$authors = array();
		$titles = array();
		$imgz = array();

		$dates = array();

		$menus = array();

		$cnnt = array();

                $editmark = 0;

		$uids_iterations = array();
		
		while(list($k, $v) = each ($repo))
		{

			$uid_id = $v->getAccounts()->getId();

			$c_id = $v->getId();

			if($uid_id == $this->getUser())
			{
				$editmark = 1;
			}

			$menu = "";

			$uid_name = $v->getAccounts();
			$post_id = $v->getId();
			$title = $v->getTitle();
			$gid_id = $v->getGroups()->getId();
			$gname = $v->getGroups();

			$date = $v->getCreatedAt();

			$dates[$post_id] = $date;

	

/*
                                if($editmark) {
                                        $return = $return . "<a href=/top/d2/" . $node['id'] . "/top/1/edit>edytuj</a> <a href=/top/d2/" . $node['id'] . "/1/delete>skasuj</a>";
                                        $r[] = "<a href=/top/d2/" . $node['id'] . "/edit>edytuj</a> <a href=/top/d2/" . $node['id'] . "/1/delete>skasuj</a>";
                                }
*/
			$contentdata = file_get_contents($this->getParameter('contentdatadir') . "/" . $post_id);



			$menu .= "<a href=/top/d2/$post_id/1/$gid_id/reply>odpowiedz</a>";

			if($editmark)
			{
				$menu .= " | <a href=/top/d2/$post_id/edit> edytuj </a> |" . " <a href=/top/d2/" . $post_id . "/1/delete>skasuj</a>";
			}

			$menus[$post_id] = $menu;

			$uids[$uid_id] = $uid_name;

			$uids_iterations[$post_id] = $uid_id;
			$authors[$post_id] = $uid_name; 
			$titles[$post_id] = $title;
			$cnnt[$post_id] = $contentdata;

			if(file_exists($this->getParameter('contentimgdir') . "/" . $c_id . ".jpeg"))
			{
                        	$imgz[$post_id] = $c_id . ".jpeg"; #$this->getParameter('contentimgdir') . "/" . $c_id . ".jpeg";
                       		
			}



		}

		#die;

		$items = $this->getParameter('page_items');

		$navi = "";


		$navipages = ceil($ccnt/$items);

/*
		for($i=1; $i<=$navipages;$i++)
		{
			if($i == $page)
			{
				$navi .= "| $i";
			} else
			{
				$navi .= "| <a href=$hurl/$i>$i</a>";
			}
		}
*/
		$uids_iterations = $this->paginator->paginate($uids_iterations, $page, $items);


		#echo "$gid"; die;

		$forpagi = preg_replace("/ /", "%20", $gid);

		$hurl = "https://port119.pl/show_d/$forpagi";
		#echo $forpagi; die;


                for($i=1; $i<=$navipages;$i++)
                {
                        if($i == $page)
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
			$navi .= "|| <a href=$hurl/$follow>następna</a>";
		}


	#odpowiedz edytuj skasuj

        #return $this->render('port119/content2.html.twig', [ 'username' => $user, 'cnt' => $cnt, 'groupname' => $name, 'groupid' => $gid->getId() , 'tree' => $tree]);
        return $this->render('port119/root_d.html.twig', [ 'dates' => $dates, 'cnnt' => $cnnt, 'navi' => $navi, 'menus' => $menus, 'uids_iterations' => $uids_iterations, 'authors' => $authors, 'titles' => $titles, 'uids' => $uids, 'avataruri' => $avataruri, 'tree' => $tree, 'groupname' => $name, 'groupid' => $groupid, 'cnt' => $cnt, 'gcdn' => $gcdn, 'abouts' => $abouts, 'imgz' => $imgz]);
        }

	}
