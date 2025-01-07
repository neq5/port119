<?php

// src/AppBundle/Controller/ProductController.php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Gallery2;
use App\Form\Gallery2Type;

class Gallery2Controller extends Controller
{
    public function index(Request $request)
    {   
        $product = new Gallery2();
        $form = $this->createForm(Gallery2Type::class, $product);
        $form->handleRequest($request);

	var_dump($request->files);

	while(list($k, $v) = each($request->files))
	{
		while(list($k2, $v2) = each($v))
		{
			var_dump($v2);
		}
	}

	#die;

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $product->getBrochure();

	$file = $form->get('image')->getData();

#TODO
#		print_r($file); die;


            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

		echo $fileName;

            // Move the file to the directory where brochures are stored
            $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/brochures';
	$brochuresDir = "/var/www/port119/images/products/";
            $file->move($brochuresDir, $fileName);

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $product->setBrochure($fileName);

            // ... persist the $product variable or any other work

            return $this->redirect($this->generateUrl('app_product_list'));
        }

	$username = $this->getUser();

        return $this->render('port119/gallery2.html.twig', array(
            'form' => $form->createView(),
	'username' => $username,
        ));
    }
}

