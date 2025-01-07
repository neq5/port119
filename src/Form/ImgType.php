<?php

namespace App\Form;

use App\Entity\User;

use App\Entity\Img;

use App\Form\ImgType;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Symfony\Component\DependencyInjection\Definition;

use Vich\UploaderBundle\Form\Type\VichImageType;



use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


use Symfony\Component\Form\FormTypeInterface;

class ImgType extends AbstractType
{


	public function buildForm(FormBuilderInterface $builder, array $options)
	{

		$builder
#			->add('imageFile', VichImageType::class,  [
			->add('imageFile', FileType::class,  [

				'label' => 'Avatar',
				'required' => false,
			])
		;

		
	}

}

?>
