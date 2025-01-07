<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Validator\Constraints\DateTime;

use App\Entity\Content;
use App\Entity\Group;
use App\Entity\User;

use App\Entity\GroupContentAdd;

use App\Form\GroupContentType;


class GroupContentController extends Controller
{
	public function index(Request $request, $name)
	{
		$user = $this->getUser();


		$gid = $this->getDoctrine()->getRepository(Group::class)->findOneBy(['name' => $name]);


		$groupid = $gid->getId();

		
		$cid = $this->getDoctrine()->getRepository(Content::class)->findBy(['groups' => $groupid]);

		$cnts = array();
		$cntfiles = scandir($this->getParameter('contentdatadir') . "/");
		
		while(list($k, $v) = each($cntfiles))
		{
			$content = file_get_contents($this->getParameter('contentdatadir') . "/$v");

			$cnts[$v] = $content;
 
		}

		$cnt = count($cid);


#POBIERZ CID, POBIERZ WSZYSTKIE REKORDY Z CONTENT PO REFERENCES, UŁÓŻ W TABLICĘ I VOILA

		$cidrecords = array();

		while(list($k, $v) = each($cid))
		{
			$cidrecords[$v->getId()][$v->getRefs()] = true; #$v->getId();
		}



		return $this->render('port119/content.html.twig', [ 'username' => $user,	'cnt' => $cnt, 'groupname' => $name, 'groupid' => $groupid, 'cid' => $cid, 'cnts' => $cnts]);
	}

	public function edit(Request $request, Content $id)
	{
		$username = $this->getUser();
		$contentform = $this->createForm(GroupContentType::class, $id);
		$contentform->handleRequest($request);

		$contentfile = $this->getParameter('contentdatadir') . "/" . $id->getId();

		$em = $this->getDoctrine()->getManager();

		if($contentform->isSubmitted() && $contentform->isValid())
		{

			$content = $this->getDoctrine()->getRepository(Content::class)->find($id);

			if($contentform->get('subject')->getData())
			{
				$content->setSubject($contentform->get('subject')->getData());
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

			return $this->redirectToRoute('discuss', ['name' => $id->getGroups()->getName()]);
		}

		return $this->render('port119/content_edit.html.twig', [ 'username' => $username, 'contentform' => $contentform->createView()]);

	}

	public function reply(Request $request, Content $cid, Group $gid)
	{
		$group_id = $gid->getId();
		$ref_id = $cid->getId();
		$userid = $this->getUser()->getId();

		$username = $this->getUser();

		$user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['id' => $userid]);

		$email = $user->getEmail();

		$contentobj = new Content();

		$contentform = $this->createForm(GroupContentType::class, $contentobj);
		$contentform->handleRequest($request);

		if($contentform->isSubmitted() && $contentform->isValid())
		{
			$subject = $contentform->get('subject')->getData();
			$content = $contentform->get('content')->getData();

			$contentobj->setSubject($subject);
			$contentobj->setGroups($gid);
			$contentobj->setAccounts($this->getUser());
			$contentobj->setCreatedAt(new \DateTime());

			$contentobj->setRefs($cid->getId());

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
			
			return $this->redirectToRoute('discuss', ['name' => $gid->getName()]);

		}	
	
		return $this->render('port119/content_reply.html.twig', [ 'username' => $username, 'contentform' => $contentform->createView()]);

	}

	public function new(Request $request, Group $id)
	{
		$groupid = $id->getId();
		$userid = $this->getUser()->getId();
		
		$username = $this->getUser();

		$user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['id' => $userid]);

		$email = $user->getEmail();

		$contentobj = new Content();

		$cid = $contentobj->getId();

		$contentform = $this->createForm(GroupContentType::class, $contentobj);

		$contentform->handleRequest($request);

		if($contentform->isSubmitted() && $contentform->isValid())
		{
			$subject = $contentform->get('subject')->getData();
			$content = $contentform->get('content')->getData();

			$contentobj->setSubject($subject);
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
					file_put_contents($contentfile, $contentform->get('content')->getData());
				} else
				{
					file_put_contents($contentfile, $contentform->get('content')->getData());
				}
			}

			return $this->redirectToRoute('discuss', ['name' => $id->getName()]);

		}


		return $this->render('port119/content_new.html.twig', [ 'username' => $username, 'contentform' => $contentform->createView()]);


	}
}
