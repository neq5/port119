<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Validator\Constraints\DateTime;

use App\Entity\Group;
use App\Form\GroupType;
use App\Form\GroupEditType;

use App\Entity\User;

use App\Form\GroupCredentialsType;

use App\Entity\GroupCredentials;


class GroupAdminController extends Controller
{
	public function index(Request $request)
	{
		if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
		{
			$group = new Group();
			$username = $this->getUser();


			$groupform = $this->createForm(GroupType::class);

			$groupform->handleRequest($request);

			if($groupform->isSubmitted() && $groupform->isValid())
			{
				$em = $this->getDoctrine()->getManager();
				$owner_id = $this->getUser()->getId();
				$group_exists = 0;


				if($groupform->get('name')->getData())
				{
					$groupname = $groupform->get('name')->getData();
					$groupexists = $em->createQuery('select COUNT(g.name) from App:Group g where g.name = LOWER(:groupname)')->setParameter(':groupname', $groupname)->getResult();

					if($groupexists[0][1])
					{
						return $this->render('port119/group_exists.html.twig', [ 'groupname' => $groupform->get('name')->getData()]);
					} 

					$group->setName($groupform->get('name')->getData());
				}

				if($groupform->get('active')->getData())
				{
					$group->setActive($groupform->get('active')->getData());
				}
				if($groupform->get('open')->getData())
				{
					$group->setOpen($groupform->get('open')->getData());
				}

				$group->setOwner($this->getUser());

				$group->setCreatedAt(new \DateTime());

				$em->persist($group);
				$em->flush();
				$this->get('session')->getFlashBag()->add('success', 'Grupa zapisana');

				$groupid = $em->createQuery('select g.id from App:Group g where g.name = LOWER(:groupname)')->setParameter(':groupname', $groupname)->getResult();

				if($groupform->get('about')->getData())
				{
					$groupid = $groupid[0]['id'];


					$groupfile = $this->getParameter('aboutgroupdir') . "/$groupid";

					if(file_exists($groupfile))
					{
						unlink($groupfile);
					}
					else 
					{
						file_put_contents($groupfile, $groupform->get('about')->getData());
					}

				}

				$userid = $this->getUser()->getId();

				$groupscd = new GroupCredentials();

				$groupscd->setAccounts($this->getUser());
				$groupscd->setGroups($group);


				$em->persist($groupscd);
				$em->flush();

				
			}	

			$groups = $this->getDoctrine()->getRepository(Group::class)->findBy(array(), array('name' => 'DESC'));  #findAll();
			$groupscnt = count($groups);

			$aboutfiles = scandir($this->getParameter('aboutgroupdir') . "/");

			$abouts = array();

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

			$groupscdn = $this->getDoctrine()->getRepository(GroupCredentials::class)->findAll();

			$gcdn = array();

			while(list($k, $v) = each($groupscdn))
			{
				$group = $v->getGroups()->getName();
				$user = $v->getAccounts();

				$gcdn["$group"]["$user"] = true;
			}

			return $this->render('port119/groups_mng.html.twig', [ 'username' => $username, 'groupscnt' => $groupscnt, 'gcdn' => $gcdn, 'groups' => $groups, 'abouts' => $abouts, 'groupform' => $groupform->createView(), ]);

		} 
	}


	public function edit(Request $request, Group $id)
 	{ 

		$groupform = $this->createForm(GroupEditType::class, $id);
		$groupform->handleRequest($request);

		$group_id = $id->getId();

		$aboutgroupfile = "/var/www/port119/groupdata/about" . "/$group_id";

		if($groupform->isSubmitted() && $groupform->isValid())
		{
			$group = $this->getDoctrine()->getRepository(Group::class)->find($id);

			if($groupform->get('name')->getData())
			{
				$group->setName($groupform->get('name')->getData());
			}
			if($groupform->get('active')->getData())
			{
				$group->setActive($groupform->get('active')->getData());
			}
			if($groupform->get('open')->getData())
			{
				$group->setOpen($groupform->get('open')->getData());
			}
			if($groupform->get('about')->getData())
			{
				if(file_exists($aboutgroupfile))
				{
					unlink($aboutgroupfile);
				}
			
				file_put_contents($aboutgroupfile, $groupform->get('about')->getData());
			}

		}
		
		$adminform = $this->createForm(GroupCredentialsType::class);
		$adminform->handleRequest($request);

		$group_id = $id->getId();

    $groupscdn = $this->getDoctrine()->getRepository(GroupCredentials::class)->findBy(['groups' => $group_id]);;

		$groupowner = $this->getDoctrine()->getRepository(Group::class)->find($group_id);

		$groupowner = $groupowner->getOwner();




    $gcdn = array();

    while(list($k, $v) = each($groupscdn))
    {
      $groupcdn = $v->getGroups()->getName();
      $usercdn = $v->getAccounts();

      $gcdn["$groupcdn"]["$usercdn"] = $group_id;
    }

		$em = $this->getDoctrine()->getManager();

		if($adminform->isSubmitted() && $adminform->isValid())
		{
			$gcdn2 = $this->getDoctrine()->getRepository(GroupCredentials::class)->findBy(['groups' => $group_id]);

			while(list($k, $v) = each($gcdn2))
			{
				$groupcdn = $v->getGroups()->getName();
				$usercdn = $v->getAccounts();

				$gcdn["$groupcdn"]["$usercdn"] = $group_id;
			}

			if($adminform->get('accounts')->getData())
			{
				$user_id = $adminform->get('accounts')->getData();
				
				while(list($k, $v) = each($user_id))
				{
						while(list($k2, $v2) = each($v))
						{
							$gcdnexists = $this->getDoctrine()->getRepository(GroupCredentials::class)->findBy(['groups' => $group_id, 'accounts' => $v2->getId()]);

							if(!count($gcdnexists))
							{

								$userid = $v2->getId();
								
								$groupscdn = new GroupCredentials();

								$groupscdn->setAccounts($v2);
								$groupscdn->setGroups($id);

								$em->persist($groupscdn);
								$em->flush();

							}
						}
				}

				return $this->redirectToRoute('group_edit', ['id' => $group_id]);
			}
		}



		return $this->render('port119/group_edit.html.twig', [ 'groupform' => $groupform->createView(), 'adminform' => $adminform->createView(), 'gcdn' => $gcdn, 'groupowner' => $groupowner, 'group_id' => $group_id, ]);

  }

	public function admindelete(Request $request, Group $groupid, $userid)
	{
		$user = $this->getDoctrine()->getRepository(User::class)->findBy(['username' => $userid]);


		$user_id = $user[0]->getId();
		$group_id = $groupid->getId();

		$gcdn = $this->getDoctrine()->getRepository(GroupCredentials::class)->findOneBy(['groups' => $group_id, 'accounts' => $user_id]);	

		#var_dump($gcdn); die;

		$em = $this->getDoctrine()->getManager();
		$em->remove($gcdn);
		$em->flush();

		return $this->redirectToRoute('group_edit', ['id' => $group_id]);
	}


	public function show(Request $reguest, Group $id)
	{
		$group = $this->getDoctrine()->getRepository(Group::class)->find($id);

		$groupscdn = $this->getDoctrine()->getRepository(GroupCredentials::class)->findAll();

 		$gcdn = array();

		while(list($k, $v) = each($groupscdn))
		{
			$groupcdn = $v->getGroups()->getName();
			$usercdn = $v->getAccounts();

			$gcdn["$groupcdn"]["$usercdn"] = true;
		}

		$a = $group->getId();

		$about = file_get_contents($this->getParameter('aboutgroupdir') . "/$a");	

		return $this->render('port119/groups_show.html.twig', [ 'group' => $group, 'gcdn' => $gcdn, 'about' => $about ]);

	}

	public function delete(Request $request, Group $id)
	{
		$em = $this->getDoctrine()->getManager();
		$group = $em->find("\App\Entity\Group", $id);

		$gcdn = $this->getDoctrine()->getRepository(GroupCredentials::class)->findBy(['groups' => $id]);

		while(list($k, $v) = each($gcdn))
		{
			$em->remove($v);
		}

		$em->remove($group);
		$em->flush();	

		$this->get('session')->getFlashBag()->add('success', 'Grupa skasowana');

		return $this->redirectToRoute('groups_mng');


	}

}
