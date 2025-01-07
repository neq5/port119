<?php

namespace App\Form;

use App\Entity\GalleryComment;

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

class GalleryCommentEditType extends AbstractType
{


	public function buildForm(FormBuilderInterface $builder, array $options)
	{

		#$fname = $options['data']->getFilename();#['data']->getId();

		
		$img_id = $options['data']['img_id'];
		$gcid = $options['data']['gcid']->getFilename(); #getId()->getFilename();

		$fname = "/var/www/port119/gallery_comments/" . $img_id . "/$gcid";

		#$fname = $fname["id"];#->getFilename();

		#echo "<pre>"; var_dump($fname); die;

		

		#$content = "/var/www/port119/gallery_comments/$fname";

		$content = $fname;


		#echo "NEQ $content"; die;

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
