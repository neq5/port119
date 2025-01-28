<?php

namespace App\Controller;

#neq

use Symfony\Component\HttpFoundation\Response;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Validator\Constraints\DateTime;

use App\Entity\Content2;
use App\Entity\Group;
use App\Entity\GroupCredentials;
use App\Entity\Album;
use App\Entity\User;
use App\Entity\Hits;
use App\Entity\GroupVists;

use App\Form\GroupContent2Type;
use App\Form\GroupContent2EditType;
use App\Form\GroupContent2ReplyType;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;

use Gedmo\Tree\Entity\Repository\NestedTreeRepository;
use Gedmo\Tree\Entity\Repository\AbstractTreeRepository;
use Gedmo\Tree\Entity\Repository\MaterializedPathRepository;

use Gedmo\Tree\TreeListener;

use Knp\Component\Pager\PaginatorInterface;




class GroupContent2Controller extends Controller
{
	/**
	* @var PaginatorInterface
	*/

	private $paginator;

	/**
	* @param PaginatorInterface $paginator
	*/

	public function __construct(PaginatorInterface $paginator)
	{
		$this->paginator = $paginator;
	}


	public function index(Request $request, $name, int $page, PaginatorInterface $paginator)
	{

    $user = $this->getUser();
    $gid = $this->getDoctrine()->getRepository(Group::class)->findOneBy(['name' => "$name"]);

	$userid = $this->getUser()->getId();

    $groupid = $gid->getId();
    $em = $this->getDoctrine()->getManager();



	$repo = $em->getRepository('App\Entity\Content2');

	$hits = $this->getDoctrine()->getRepository(Hits::class)->findBy(['gid' => $groupid]);
	$whits = $this->getDoctrine()->getRepository(GroupVists::class)->findBy(['visited' => $groupid]);

	$chits = count($hits);
	$cwhits = count($whits);


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

	$owhits = new GroupVists();
	$owhits->setVisited($gid);
	$owhits->setVisitor($user);
	$owhits->setCreatedAt(new \DateTime());

	$em->persist($owhits);
	$em->flush();

	$whits = $em->getRepository('App\Entity\GroupVists');



	$query = $em
		->createQueryBuilder()
		->select('node')
		->from('App\Entity\Content2', 'node')
		->orderBy('node.root', 'DESC')
		->addOrderBy('node.lft')
		->addOrderBy('node.created_at')
#		->orderBy('node.root, node.lft, node.id, node.created_at', 'ASC')
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
					$return = $return . "<a href=/top/d2/" . $node['id'] . "/1/edit>edytuj</a> <a href=/top/d2/" . $node['id'] . "/1/delete>skasuj</a>"; 
					$r[] = "<a href=/top/d2/" . $node['id'] . "/edit>edytuj</a> <a href=/top/d2/" . $node['id'] . "/1/delete>skasuj</a>";
				}

				if($postimg)
				{
					$return .= " | TREŚĆ: <img src=/content/$imguri> " . $contentdata . "<br />";
				} else
				{
			 		$return .= " | TREŚĆ: " . $contentdata . "<br />";
				}
			} else 
			{
				$return = "data: " . $caobj->format('Y-m-d H:i:s') . " | " . "autor: " . $uid . " POST SKASOWANY";
				$r[] = "data: " . $caobj->format('Y-m-d H:i:s') . " | " . "autor: " . $uid . " POST SKASOWANY";
			}

		while(list($k, $v) = each($r)) {
			$rr .= $v;
		}

			#echo $rr; die;

		#return $rr . "<br />";

		return $return;

    }

	);


#	$cnt = count($query->getArrayResult());

	$tree = $repo->buildTree($query->getArrayResult(), $options);

	$navipages = ceil($cnt/$items);

        $hurl = $this->getParameter('host');

		#echo $hurl; die;


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


			#$uid = $this->getDoctrine()->getRepository(Content2::class)->findOneBy(['id' => $node['id']]);
			#$userid = $uid->getId();


	$avataruri = "/groupavatar/" . $groupid . ".jpeg";


	$gid = $this->getDoctrine()->getRepository(Group::class)->findOneBy(['name' => "$name"]);
	$groupid = $gid->getId();
	$g_owner = $gid->getOwner();

	$em = $this->getDoctrine()->getManager();

	$repo = $em->getRepository('App\Entity\Content2')->findBy(['groups' => $groupid, 'deleted' => null], array('created_at' => 'DESC'));

	$ccnt = count($repo);

	#echo "$g_owner $user"; die;

	$editmarkgroup = 0;

	if($g_owner == $user)
	{
		$editmarkgroup = 1;
	} else
	{

		$emuid = $user->getId();

		$emcdn = $this->getDoctrine()->getRepository(GroupCredentials::class)->findBy(['groups' => $groupid, 'accounts' => $user->getId()]);

		if($emcdn) 
		{
			$editmarkgroup = 1;
		}
	}


	$uids = array();
	$authors = array();
	$titles = array();
	$imgz = array();

	$menus = array();

	$cnnt = array();

	$dates = array();

	$editmark = 0;

	$edits = array();

	$uids_iterations = array();

	while(list($k, $v) = each($repo))
	{
		$uid_id = $v->getAccounts()->getId();

		$c_id = $v->getId();

		if($uid_id == $this->getUser()->getId())
		{
			$editmark = 1;
		}
		$menu = "";

		$uid_name = $v->getAccounts();
		$post_id = $v->getId();
		$title = $v->getTitle();
		$gid_id = $v->getGroups()->getId();
		$gname = $v->getGRoups();


		$date = $v->getCreatedAt();

		$dates[$post_id] = $date;

		$contentdata = file_get_contents($this->getParameter('contentdatadir') . "/" . $post_id);

		$menu .= "<a href=/top/d2/$post_id/1/$gid_id/reply>odpowiedz</a>";

		if($editmark)
		{
			$menu .= " | <a href=/top/d2/$post_id/1/edit> edytuj </a> |" . " <a href=/top/d2/" . $post_id . "/1/delete>skasuj</a>";
			$editmark = 0;
		}

		$menus[$post_id] = $menu;

		$uids[$uid_id] = $uid_name;

		$uids_iterations[$post_id] = $uid_id;
		$authors[$post_id] = $uid_name;
		$titles[$post_id] = $title;
		$cnnt[$post_id] = $contentdata;

		$edits[$post_id] = $editmark;

		if(file_exists($this->getParameter('contentimgdir') . "/" . $c_id . ".jpeg"))
			$imgz[$post_id] = $c_id . ".jpeg"; #$this->getParameter('contentimgdir') . "/" . $c_id . ".jpeg";

	}

	$items = $this->getParameter('page_items');

	$navi = "";

	$navipages = ceil($ccnt/$items);


#	$uids_iterations = $this->paginator->paginate($uids_iterations, $page, $items); #neq
	$uids_iterations = $this->paginator->paginate($uids_iterations, $page, $items);

	$forpagi = preg_replace("/ /", "%20", $gid);

	



	#$hurl = "https://port119.pl/top/d2/$forpagi";

#	$hurl = "https://port119.pl";
	$hurl = $this->getParameter('host');



	for($i=1; $i<=$navipages;$i++)
	{
		if($i == $page)
		{
			$navi .= "| $i";
		} else
		{
			$navi .= "| <a href=$hurl/top/d2/$name/$i>$i</a>";
		}
	}

	
	if($page != $navipages)
	{
					if($navipages != 0)
					{
						$follow = $page+1;
						$navi .= " || <a href=$hurl/top/d2/$name/$follow>następna</a>";
					}
	}

     

	$gcdn = array();

	$groupscdn = $this->getDoctrine()->getRepository(GroupCredentials::class)->findAll();

	while(list($k, $v) = each($groupscdn))
	{
		$group = $v->getGroups()->getName();
		$user_name = $v->getAccounts();
		$usr = $v->getAccounts()->getId();

		$gcdn["$group"]["$user_name"] = $user_name->getId();
	}	

	$uid = $user->getId();

	$avataruri = "/groupavatar/" . $gid->getId() . ".jpeg";

	$abouts = array();

	$aboutfiles = scandir($this->getParameter('aboutgroupdir') . "/");

	while(list($k, $v) = each($aboutfiles))
	{
		$aboutcontent = file_get_contents($this->getParameter('aboutgroupdir') . "/$v");

		$abouts[$v] = $aboutcontent;
	}



	#return $this->render('port119/content2.html.twig', [ 'username' => $user, 'cnt' => $cnt, 'groupname' => $name, 'groupid' => $gid->getId() , 'tree' => $tree, 'avataruri' => $avataruri, 'gcdn' => $gcdn, 'abouts' => $abouts]);
        return $this->render('port119/content3.html.twig', [ 'imgz' => $imgz, 'username' => $user, 'dates' => $dates, 'cnnt' => $cnnt, 'navi' => $navi, 'menus' => $menus, 'uids_iterations' => $uids_iterations, 'authors' => $authors, 'titles' => $titles, 'uids' => $uids, 'avataruri' => $avataruri, 'tree' => $tree, 'groupname' => $name, 'groupid' => $groupid, 'cnt' => $cnt, 'gcdn' => $gcdn, 'abouts' => $abouts, 'edits' => $edits, 'editmarkgroup' => $editmarkgroup]);
	}

	public function reply(Request $request, Content2 $cid, Group $gid)
	{
#NEQ
		$group_id = $gid->getId();
		$parent_id = $cid->getId();
		$userid = $this->getUser()->getId();

		$username = $this->getUser();
	
		$user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['id' => $userid]);

		$email = $user->getEmail();

		$imgdir = $this->getParameter('contentimgdir');

		$contentobj = new Content2();

		#echo $cid->getTitle(); die;

		$ctitle = $cid->getTitle();
		

		#$contentform = $this->createForm(GroupContent2Type::class, $contentobj);
		$contentform = $this->createForm(GroupContent2ReplyType::class, array('title' => $ctitle));
		$contentform->handleRequest($request);

		if($contentform->isSubmitted() && $contentform->isValid())
		{


                        $albumfile = $this->getParameter('gallerydir') . "/" . $userid;


                        if(!file_exists($albumfile))
                        {
                                mkdir("$albumfile");
                        }

                        if(!file_exists($albumfile . "/" . "wątek - $username"))
                        {
                                mkdir("$albumfile/wątek - $username");
                                mkdir("$albumfile/wątek - $username/min");
                                mkdir("$albumfile/wątek - $username/orig");
                                mkdir("$albumfile/wątek - $username/desc");

                        }


			$title = $contentform->get('title')->getData();
			$content = $contentform->get('content')->getData();

			$contentobj->setTitle($title);
			$contentobj->setGroups($gid);
			$contentobj->setAccounts($this->getUser());
			$contentobj->setCreatedAt(new \DateTime());

			$contentobj->setParent($cid);

			$em = $this->getDoctrine()->getManager();
			$em->persist($contentobj);
			$em->flush();
		
			if($contentform->get('content')->getData())
			{
				$contentfile = $this->getParameter('contentdatadir') . "/" . $contentobj->getId();

				if(file_exists($contentfile))
				{
					unlink($contentfile);
					file_put_contents($contentfile, $contentform->get('content')->getData());
				} else
				{
					file_put_contents($contentfile, $contentform->get('content')->getData());
				}
			}

			$file = $contentform->get('image')->getData();


			if(isset($file))
			{
				$ext = $file->guessExtension();
				if($ext == "png")
				{
                                    $albm = new Album();
                                        $albm->setFilename("wątek - $username");
                                        $albm->setAccounts($userid);
                                        $em->persist($albm);
                                        $em->flush();


					/*
					$fileName =$contentobj->getId().".".$file->guessExtension();

					$fileName = preg_replace("/png/", "jpeg", $fileName);

					$file->move($imgdir,$fileName);

					$imfile = "$imgdir" ."/" . "$fileName";

					$image = imagecreatefrompng($imfile);
					$imagejpeg($image,$imgdir ."/" . $fileName);

					$thumb =imagecreatetruecolor(150, 150);
					$source = $imagecreatefromjpeg($imgdir . "/" . $fileName);
					list($width,$height) = getimagesize($imgdir . "/" .$fileName);

					imagecopyresized($thumb, $source, 0, 0, 0, 0, 150, 150, $width, $height);
					imagejpeg($thumb,$imfile);
					 */

                                    $fileName = $contentobj->getId().".".$file->guessExtension();

                                        $fileName = preg_replace("/png/", "jpeg", $fileName);


                                        $file->move($imgdir, $fileName);
					copy("$imgdir/$fileName", $this->getParameter('gallerydir') . "/" . $userid . "/wątek - $username/$fileName");

#neq
                                        $imfile = "$imgdir" . "/" . "$fileName";

                                        $im = imagecreatefrompng($imfile);


                                        $source= imagecreatefrompng($imfile);


                                        $new_width = "150";
                                        $new_height = "150";

                                        list($old_x, $old_y) = getimagesize($imfile);

                                        if($old_x > $old_y)
                                        {
                                                $thumb_w = $new_width;
                                                $thumb_h = $old_y*($new_height/$old_x);
                                        }

                                        if($old_x < $old_y)
                                        {
                                                $thumb_w = $old_x*($new_width/$old_y);
                                                $thumb_h = $new_height;
                                        }

                                        if($old_x == $old_y)
                                        {
                                                $thumb_w = $new_width;
                                                $thumb_h = $new_height;
                                        }

                                        $thumb = imagecreatetruecolor($thumb_w, $thumb_h);


                                        imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y);
                                        
					$orig = $albumfile . "/wątek - $username/orig/";
					$inorig = $imgdir . "/" . $fileName;

					system("/usr/bin/cp $inorig \"$orig\"");


		
					#$echo = $albumfile . "/wątek - " . $username . "/min/" . $fileName;

					#system("echo \"$echo\" >> wawa");

                                        imagejpeg($thumb, $imfile);
                                        imagejpeg($thumb, $albumfile . "/wątek - $username/min/" . $fileName);

					$incover = $albumfile . "/wątek - $username/min/" . $fileName;
					$outcover = $albumfile . "/wątek - $username/cover.jpeg";

					system("/usr/bin/cp \"$incover\" \"$outcover\"");


                                } elseif($ext == "gif")
                                {
					/*
                                        $fileName = $contentobj->getId().".".$file->guessExtension();
                                        $fileName = preg_replace("/gif/", "jpeg", $fileName);

                                        $file->move($imgdir, $fileName);

                                        system("cd /var/www/port119/public/content/img/ ; magick convert -resize 150x150 $fileName $fileName");
					 */

                                        $fileName = $contentobj->getId().".".$file->guessExtension();
                                        $fileName = preg_replace("/gif/", "jpeg", $fileName);

                                        $file->move($imgdir, $fileName);
                                        copy("$imgdir/$fileName", $this->getParameter('gallerydir') . "/" . $userid . "/wątek - $username/$fileName");


                                        $imfile = "$imgdir" . "/" . $fileName;


                                        $im = imagecreatefromgif($imfile);

                                        $source = imagecreatefromgif($imgdir . "/" . $fileName);

                                        $new_width = "150";
                                        $new_height = "150";

                                        list($old_x, $old_y) = getimagesize($imfile);

                                        if($old_x > $old_y)
                                        {
                                                $thumb_w = $new_width;
                                                $thumb_h = $old_y*($new_height/$old_x);
                                        }

                                        if($old_x < $old_y)
                                        {
                                                $thumb_w = $old_x*($new_width/$old_y);
                                                $thumb_h = $new_height;
                                        }

                                        if($old_x == $old_y)
                                        {
                                                $thumb_w = $new_width;
                                                $thumb_h = $new_height;
                                        }

                                        $thumb = imagecreatetruecolor($thumb_w, $thumb_h);

                                        imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y);


                                        $big1 = $imgdir . "/" . $fileName;
                                        $small1 = $imgdir . "/" . $fileName . ".gif";

                                        $watek = $albumfile . "/wątek - $username/min/" . $fileName;
                                        $watekc = $albumfile . "/wątek - $username/cover.jpeg";

                                        $watek2 = $albumfile . "/wątek - $username/orig/" . $fileName;


                                        $size1 = $thumb_w . "x" . $thumb_h;

                                        system("/bin/cp $big1 \"" . $watek2 . "\"");

                                        system("/usr/bin/convert $big1 -coalesce -repage 0x0 -resize " . $size1 . " -layers Optimize $small1");
                                        system("/bin/mv $small1 $big1");

                                        system("/bin/cp $big1 \"" . $watek . "\"");
                                        system("/bin/cp $big1 \"" . $watekc . "\"");




#                                        imagejpeg($thumb, $imgdir . "/" . $fileName);
#                                        imagejpeg($thumb, $albumfile . "/wątek - $username/min/" . $fileName);



                                } elseif($ext == "jpeg")
				{

/*
                                        $fileName = $contentobj->getId().".".$file->guessExtension();
                                        $file->move($imgdir, $fileName);
                                        $imfile ="$imgdir" . "/" . "$fileName";

                                        $im = imagecreatefromjpeg($imfile);

                                        $thumb = imagecreatetruecolor(150, 150);
                                        $source = imagecreatefromjpeg($imgdir . "/" . $fileName);

                                        list($width, $height) = getimagesize($imgdir . "/" . $fileName);

                                        imagecopyresized($thumb, $source, 0, 0, 0, 0, 150, 150, $width, $height);
  					imagejpeg($thumb, $imgdir . "/" . $fileName);
*/
                               # {
                                        $fileName = $contentobj->getId().".".$file->guessExtension();
                                        $file->move($imgdir, $fileName);
                                        copy("$imgdir/$fileName", $this->getParameter('gallerydir') . "/" . $userid . "/wątek - $username/$fileName");


                                        $imfile ="$imgdir" . "/" . "$fileName";


                                        $origfile = $albumfile . "/wątek - $username/orig/" . $fileName;

                                        #echo $origfile; die;

                                        copy($imfile, $origfile);


                                        $im = imagecreatefromjpeg($imfile);

                                        $source = imagecreatefromjpeg($imgdir . "/" . $fileName);

                                        $new_width = "150";
                                        $new_height = "150";

                                        list($old_x, $old_y) = getimagesize($imfile);

                                        if($old_x > $old_y)
                                        {
                                                $thumb_w = $new_width;
                                                $thumb_h = $old_y*($new_height/$old_x);
                                        }

                                        if($old_x < $old_y)
                                        {
                                                $thumb_w = $old_x*($new_width/$old_y);
                                                $thumb_h = $new_height;
                                        }

                                        if($old_x == $old_y)
                                        {
                                                $thumb_w = $new_width;
                                                $thumb_h = $new_height;
                                        }



                                        $thumb = imagecreatetruecolor($thumb_w, $thumb_h);

                                        imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y);
                                        imagejpeg($thumb, $imgdir . "/" . $fileName);
                                        imagejpeg($thumb, $albumfile . "/wątek - $username/min/" . $fileName);

                                        copy($albumfile . "/wątek - $username/min/" . $fileName, $albumfile . "/wątek - $username/cover.jpeg");



				} else
                                {
                                        $this->get('session')->getFlashBag()->add('failure', 'Nieznany format pliku.');

                                        return $this->redirectToRoute('discuss2', ['name' => $gid->getName(), 'page' => 1]);
                                }

			}

      $this->get('session')->getFlashBag()->add('success', 'Dodano odpowiedź do posta.');

			return $this->redirectToRoute('discuss2', ['name' => $gid->getName(), 'page' => 1]);
		}

	#NEQ



		return $this->render('port119/content2_reply.html.twig', [ 'username' => $username, 'contentform' => $contentform->createView()]);
	}

	public function new(Request $request, Group $id)
	{


		$groupid = $id->getId();
		$userid = $this->getUser()->getId();

		$imgdir = $this->getParameter('contentimgdir');

		$username = $this->getUser();

		$contentobj = new Content2();

		$contentform = $this->createForm(GroupContent2Type::class, $contentobj);
		$contentform->handleRequest($request);

		$em = $this->getDoctrine()->getManager();

		if($contentform->isSubmitted() && $contentform->isValid())
		{

			$albumfile = $this->getParameter('gallerydir') . "/" . $userid;

			#echo $userid?


			if(!file_exists($albumfile))
			{
				mkdir("$albumfile");
			}

			if(!file_exists($albumfile . "/" . "wątek - $username"))
			{
				mkdir("$albumfile/wątek - $username");
				mkdir("$albumfile/wątek - $username/min");
				mkdir("$albumfile/wątek - $username/orig");
				mkdir("$albumfile/wątek - $username/desc");

			}

			$title = $contentform->get('title')->getData();
			$content = $contentform->get('content')->getData();

			#$content = preg_replace("/\n/", "<br />", $content);
			$content = preg_replace("/\n/", "<br />", $content);

			#echo $content; die;

			$contentobj->setTitle($title);
			$contentobj->setGroups($id);
			$contentobj->setAccounts($this->getUser());
			$contentobj->setCreatedAt(new \DateTime());

			$em = $this->getDoctrine()->getManager();

			$em->persist($contentobj);
			$em->flush();

			if($contentform->get('content')->getData())
			{
				$contentfile = $this->getParameter('contentdatadir') . "/" . $contentobj->getId();

				if(file_exists($contentfile))
				{
					unlink($contentfile);
					#file_put_contents($contentfile, $contentform->get('content')->getData());
					file_put_contents($contentfile, $content);
				} else
				{
					#file_put_contents($contentfile, $contentform->get('content')->getData());
					file_put_contents($contentfile, $content);
				}
			}
			

			$file = $contentform->get('image')->getData();

			if(isset($file))
			{
				$ext = $file->guessExtension();

				if($ext == "png")
				{
					$albm = new Album();
					$albm->setFilename("wątek - $username");
					$albm->setAccounts($userid);
					$em->persist($albm);
					$em->flush();

					$fileName = $contentobj->getId().".".$file->guessExtension();

					$fileName = preg_replace("/png/", "jpeg", $fileName);
					$filedest = "cover.jpeg";


					$file->move($imgdir, $fileName);
					copy($imgdir . "/" . $fileName, "$albumfile/wątek - $username/orig/$fileName");

					$imfile = "$imgdir" . "/" . "$fileName";

					$im = imagecreatefrompng($imfile);


					$source= imagecreatefrompng($imfile);


					$new_width = "150";
					$new_height = "150";

					list($old_x, $old_y) = getimagesize($imfile);

					if($old_x > $old_y)
					{
						$thumb_w = $new_width;
						$thumb_h = $old_y*($new_height/$old_x);
					}

					if($old_x < $old_y)
					{
						$thumb_w = $old_x*($new_width/$old_y);
						$thumb_h = $new_height;
					}

					if($old_x == $old_y)
					{
						$thumb_w = $new_width;
						$thumb_h = $new_height;
					}

					$thumb = imagecreatetruecolor($thumb_w, $thumb_h);


					imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y);

					imagejpeg($thumb, $imfile);
      					imagejpeg($thumb, $albumfile . "/wątek - $username/min/" . $fileName);

					copy($albumfile . "/wątek - $username/min/" . $fileName, $albumfile . "/wątek - $username/cover.jpeg");

					#TODO png new here	

				} elseif($ext == "gif")
				{
					                                        $albm = new Album();
                                        $albm->setFilename("wątek - $username");
                                        $albm->setAccounts($userid);
                                        $em->persist($albm);
                                        $em->flush();


					$fileName = $contentobj->getId().".".$file->guessExtension();
					$fileName = preg_replace("/gif/", "jpeg", $fileName);

					$file->move($imgdir, $fileName);

					$imfile = "$imgdir" . "/" . $fileName;


					$im = imagecreatefromgif($imfile);

					$source = imagecreatefromgif($imgdir . "/" . $fileName);

					$new_width = "150";
					$new_height = "150";

					list($old_x, $old_y) = getimagesize($imfile);

					if($old_x > $old_y)
					{
						$thumb_w = $new_width;
						$thumb_h = $old_y*($new_height/$old_x);
					}

					if($old_x < $old_y)
					{
						$thumb_w = $old_x*($new_width/$old_y);
						$thumb_h = $new_height;
					}

					if($old_x == $old_y)
					{
						$thumb_w = $new_width;
						$thumb_h = $new_height;
					}

					$thumb = imagecreatetruecolor($thumb_w, $thumb_h);

					$big1 = $imgdir . "/" . $fileName;
					$small1 = $imgdir . "/" . $fileName . ".gif";

                                        $watek = $albumfile . "/wątek - $username/min/" . $fileName;
					$watekc = $albumfile . "/wątek - $username/cover.jpeg";

					$watek2 = $albumfile . "/wątek - $username/orig/" . $fileName;


					$size1 = $thumb_w . "x" . $thumb_h;

					system("/bin/cp $big1 \"" . $watek2 . "\"");

					system("/usr/bin/convert $big1 -coalesce -repage 0x0 -resize " . $size1 . " -layers Optimize $small1");
					system("/bin/mv $small1 $big1");

					system("/bin/cp $big1 \"" . $watek . "\"");
					system("/bin/cp $big1 \"" . $watekc . "\"");

#					copy($big1, $albumfile . "/wątek - $username/cover.jpeg");

					#system("echo \"$watek\" >> piatek");

					imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y);

			#		imagejpeg($thumb, $imgdir . "/" . $fileName);
      			#		imagejpeg($thumb, $albumfile . "/wątek - $username/min/" . $fileName);

			#		copy($albumfile . "/wątek - $username/min/" . $fileName, $albumfile . "/wątek - $username/cover.jpeg");

					#system("cd /var/www/port119/public/content/img/ ; magick convert -resize 150x150 $fileName $fileName");
				} elseif($ext == "jpeg")
				{
                                        $albm = new Album();
                                        $albm->setFilename("wątek - $username");
                                        $albm->setAccounts($userid);
                                        $em->persist($albm);
                                        $em->flush();




					$fileName = $contentobj->getId().".".$file->guessExtension();



					$file->move($imgdir, $fileName);
					
					$imfile ="$imgdir" . "/" . "$fileName";

					$origfile = "$albumfile" . "/wątek - $username/orig/$fileName";

					copy($imfile, $origfile);

					$im = imagecreatefromjpeg($imfile);

					$source = imagecreatefromjpeg($imgdir . "/" . $fileName);

					$new_width = "150";
					$new_height = "150";

					list($old_x, $old_y) = getimagesize($imfile);

					if($old_x > $old_y)
					{
						$thumb_w = $new_width;
						$thumb_h = $old_y*($new_height/$old_x);
					}

					if($old_x < $old_y)
					{
						$thumb_w = $old_x*($new_width/$old_y);
						$thumb_h = $new_height;
					}

					if($old_x == $old_y)
					{
						$thumb_w = $new_width;
						$thumb_h = $new_height;
					}



					$thumb = imagecreatetruecolor($thumb_w, $thumb_h);

			 	   	imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y);
      					imagejpeg($thumb, $imgdir . "/" . $fileName);
      					imagejpeg($thumb, $albumfile . "/wątek - $username/min/" . $fileName);


					copy($albumfile . "/wątek - $username/min/" . $fileName, $albumfile . "/wątek - $username/cover.jpeg");

					#echo "$albumfile -- $username --- $fileName"; die;

				} else
				{
					$this->get('session')->getFlashBag()->add('failure', 'Nieznany format pliku.');

					return $this->redirectToRoute('discuss2', ['name' => $id->getName(), 'page' => 1]);
				}
			}

      			$this->get('session')->getFlashBag()->add('success', 'Post dodany.');

			#$file = $contentform->get('image')->getData();

			return $this->redirectToRoute('discuss2', ['name' => $id->getName(), 'page' => 1]);

		}

		return $this->render('port119/content2_new.html.twig', [ 'username' => $username, 'contentform' => $contentform->createView()]);

	}


	public function edit(Request $request, int $page, Content2 $id)
	{
		$cid = $id->getId();
		$gname = $id->getGroups();



		$username = $this->getUser();


    		$content = $this->getDoctrine()->getRepository(Content2::class)->find($id);

		$imgdir = $this->getParameter('contentimgdir');

		$cntowner = $content->getAccounts();
		$userid = $this->getUser();

		$avfile = null;

		$file = "$imgdir/$cid.jpeg";

		if(file_exists($file))
		{
			$avfile = $cid . ".jpeg";
		}



		if($cntowner != $userid)
		{
			return new Response("don't hack me yo");
		}
		$contentform = $this->createForm(GroupContent2EditType::class, $id);
		$contentform->handleRequest($request);

		$contentfile = $this->getParameter('contentdatadir') . "/" . $cid;

		$em = $this->getDoctrine()->getManager();

		if($contentform->isSubmitted() && $contentform->isValid())
		{	
			$content = $this->getDoctrine()->getRepository(Content2::class)->find($id);

			if($contentform->get('title')->getData())
			{
				$content->setTitle($contentform->get('title')->getData());
			}

			if($contentform->get('content')->getData())
			{
				if(file_exists($contentfile))
				{
					unlink($contentfile);
				}

				file_put_contents($contentfile, $contentform->get('content')->getData());
			}

			$em->persist($content);
			$em->flush();


			$todelete = $contentform->get('todelete')->getData();

			if($todelete)
			{
				$fileName = $id->getId() . "." . "jpeg";

				if(file_exists("$imgdir" . "/" . $fileName))
				{
					unlink("$imgdir" . "/" . $fileName);
      					$this->get('session')->getFlashBag()->add('success', 'Post zaktualizowany.');
                                        return $this->redirectToRoute('discuss2', ['name' => $gname, 'page' => 1]);
				}
			}

                        $file = $contentform->get('image')->getData();

                        if(isset($file))
                        {
                                $ext = $file->guessExtension();

                                if($ext == "png")
                                {
					$fileName = $content->getId().".".$file->guessExtension();
					$fileName = preg_replace("/png/", "jpeg", $fileName);

					$file->move($imgdir, $fileName);

					$imfile = "$imgdir" ."/" . $fileName;

					$im = imagecreatefrompng($imfile);
					$source = imagecreatefrompng($imfile);

					$new_width = "150";
					$new_height = "150";

					list($old_x, $old_y) = getimagesize($imfile);

					if($old_x > $old_y)
					{
						$thumb_w = $new_width;
						$thumb_h = $old_y*($new_height/$old_x);
					}

					if($old_x < $old_y)
					{
						$thumb_w = $old_x*($new_width/$old_y);
						$thumb_h = $new_height;
					}

					if($old_x == $old_y)
					{
						$thumb_w = $new_width;
						$thumb_h = $new_height;
					}

					$thumb = imagecreatetruecolor($thumb_w, $thumb_h);

					imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y);

					imagejpeg($thumb, $imfile);

                                } elseif($ext == "gif")
                                {
                                        $fileName = $content->getId().".".$file->guessExtension();
                                        $fileName = preg_replace("/gif/", "jpeg", $fileName);

                                        $file->move($imgdir, $fileName);

					$imfile = "$imgdir" . "/" . $fileName;

					$source = imagecreatefromgif($imfile);

					$new_width = "150";
					$new_height = "150";

					list($old_x, $old_y) = getimagesize($imfile);

					if($old_x > $old_y)
					{
						$thumb_w = $new_width;
						$thumb_h = $old_y*($new_height/$old_x);
					}

					if($old_x < $old_y)
					{
						$thumb_w = $old_x*($new_width/$old_y);
						$thumb_h = $new_height;
					}

					if($old_x == $old_y)
					{
						$thumb_w = $new_width;
						$thumb_h = $new_height;
					}

					$thumb = imagecreatetruecolor($thumb_w, $thumb_h);

					imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y);
					imagejpeg($thumb, $imgdir . "/" . $fileName);

                                        #system("cd /var/www/port119/public/content/img/ ; magick convert -resize 150x150 $fileName $fileName");
                                } elseif($ext == "jpeg")
                                {
                                        $fileName = $id->getId().".".$file->guessExtension();
                                        $file->move($imgdir, $fileName);
                                        $imfile ="$imgdir" . "/" . "$fileName";

                                        $im = imagecreatefromjpeg($imfile);

                                        $source = imagecreatefromjpeg($imgdir . "/" . $fileName);

					$new_width = "150";
					$new_height = "150";

					list($old_x, $old_y) = getimagesize($imfile);


                                        if($old_x > $old_y)
                                        {
                                                $thumb_w = $new_width;
                                                $thumb_h = $old_y*($new_height/$old_x);
                                        }

                                        if($old_x < $old_y)
                                        {
                                                $thumb_w = $old_x*($new_width/$old_y);
                                                $thumb_h = $new_height;
                                        }

                                        if($old_x == $old_y)
                                        {
                                                $thumb_w = $new_width;
                                                $thumb_h = $new_height;
                                        }

                                        $thumb = imagecreatetruecolor($thumb_w, $thumb_h);

                                        imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y);
                                        imagejpeg($thumb, $imgdir . "/" . $fileName);


                                } else
                                {
                                        $this->get('session')->getFlashBag()->add('failure', 'Nieznany format pliku.');

                                        return $this->redirectToRoute('discuss2', ['name' => $id->getName(), 'page' => 1]);
                                }
                        }



      $this->get('session')->getFlashBag()->add('success', 'Post zaktualizowany.');


			return $this->redirectToRoute('discuss2', ['name' => "$gname", 'page' => 1]);
		}

		return $this->render('port119/content2_edit.html.twig', [ 'username' => $username, 'contentform' => $contentform->createView(), 'avfile' => $avfile]);

	}

	public function delete(Request $request, Content2 $id)
	{
		$em = $this->getDoctrine()->getManager();
		$userid = $this->getUser();

		$content = $this->getDoctrine()->getRepository(Content2::class)->find($id);

		if($userid != $content->getAccounts())
		{
			return new Response("don't hack me yo");
		}


		$content->setDeleted(true);

		$em->persist($content);
		$em->flush();

    $this->get('session')->getFlashBag()->add('success', 'Post skasowany.');

		return $this->redirectToRoute('discuss2', ['name' => $id->getGroups()->getName(), 'page' => 1]);
	}
}
