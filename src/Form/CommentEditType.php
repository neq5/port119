<?php

namespace App\Form;

use App\Entity\Comment;

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

class CommentEditType extends AbstractType
{


	public function buildForm(FormBuilderInterface $builder, array $options)
	{

		#$fname = $options['data']->getFilename();#['data']->getId();
		$fname = $options['data']['fname'];#->getFilename();#['data']->getId();

		
		#$fname = $fname["id"];#->getFilename();

		#echo "<pre>"; var_dump($fname); die;

		

		$content = "/var/www/port119/comments/$fname";


		if(file_exists($content))
		{
			if(filesize($content) == 0)
			{
				$content = null;
			} else
			{
				$content = file_get_contents($content);
				$content = preg_replace("/<br \/>/", "\n", $content);

			}
		} else
		{
			$content = null;
		}

		$builder
		#	->add('title', TextType::class, [
		#		'label' => 'Tytuł',
		#		'required' => true,
		#	])
			->add('content', TextareaType::class, [
				'label' => 'Treść',
				'required' => true,
				'data' => $content
			])
		;

		
	}


}

?>
