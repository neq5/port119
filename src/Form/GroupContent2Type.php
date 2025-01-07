<?php

namespace App\Form;

#use App\Entity\User;

use App\Entity\Content2;


use App\Form\GroupContent2Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Symfony\Component\DependencyInjection\Definition;

use Vich\UploaderBundle\Form\Type\VichImageType;



use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\FormBuilderInterface;

class GroupContent2Type extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$cid = $options['data']->getId();

		$contentfile = "/var/www/port119/groupdata/content/$cid";

		if(file_exists($contentfile))
		{
			$contentdata = file_get_contents($contentfile);
		} else
		{
			$contentdata = null;
		}



		$builder
			->add('title', TextType::class, [
				'label' => 'Tytuł',
				'required' => true,
			])
			->add('content', TextareaType::class, [
				'label' => 'Wpisz treść posta',
				'required' => true,
				'data' => $contentdata,
			])
			->add('image', FileType::class, array('data_class' => null, 'label' => 'Obrazek', 'required' => false))

		;	
	}

}

?>
