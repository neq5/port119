<?php

namespace App\Form;

#use App\Entity\Wall;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Symfony\Component\DependencyInjection\Definition;


use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\FormTypeInterface;

class WallEditType extends AbstractType
{


	public function buildForm(FormBuilderInterface $builder, array $options)
	{

		$fname = $options['data'][0]; 

		$tcontent = "/var/www/port119/wall/title/$fname";
		$content = "/var/www/port119/wall/content/$fname";

		if(file_exists($tcontent))
		{
			if(filesize($tcontent) == 0)
			{
				$tcontent = null;
			} else
			{
				$tcontent = file_get_contents($tcontent);
			}
			
		} else
		{
			$tcontent = null;
		}

		if(file_exists($content))
		{
			if(filesize($content) == 0)
			{
				$content = null;
			} else
			{
				$content = file_get_contents($content);
			}
		} else
		{
			$content = null;
		}

		$content = preg_replace("/<br \/>/", "\n", $content);
/*
		$user_id = $options['data']->getId();

                $aboutfile = "/var/www/port119/userdata/about/$user_id";
                $sigfile = "/var/www/port119/userdata/sig/$user_id";


		if(file_exists($aboutfile))
		{
			if(filesize($aboutfile) == 0)
			{
				$about = null;
			} else
			{
				$about = file_get_contents($aboutfile);
			}
		} else
		{
			$about = null;
		}

		if(file_exists($sigfile))
		{
			if(filesize($sigfile) == 0)
			{
				$sig = null;
			} else
			{
				$sig = file_get_contents($sigfile);
			}

		} else
		{
			$sig = null;
		}
*/

		$about = "";
		$sig = "";

		$builder
			->add('title', TextType::class, [
				'label' => 'Tytuł',
				'required' => true,
				'data' => $tcontent,
			])
			->add('content', TextareaType::class, [
				'label' => 'Treść',
				'required' => true,
				'data' => $content
			])
		;

		
	}


}

?>
