<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\User;


use Symfony\Component\HttpFoundation\Request;


use App\Entity\Img;
use App\Form\ImgType;


class GalleryController extends Controller
{
	public function index(Request $request)
	{
		$form = $this->createForm(ImgType::class);
		$form->handleRequest($request);

		$username = $this->getUser();

		if($form->isSubmitted() && $form->isValid())
		{
			echo 'ldkf';
		}

		return $this->render('port119/gallery.html.twig', array('imgform' => $form->createView(), 'username' => $username));

	}

}
