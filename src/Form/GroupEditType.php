<?php

namespace App\Form;

#use App\Entity\User;

use App\Entity\Group;

use App\Form\GroupType;


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

class GroupEditType extends AbstractType
{


	public function buildForm(FormBuilderInterface $builder, array $options)
	{

		#var_dump($options); die;

		$group_id = $options['data']->getId();

		$groupfile = "/var/www/port119/groupdata/about/$group_id";

		if(file_exists($groupfile))
		{
			$groupdata = file_get_contents($groupfile);
		} else
		{
			$groupdata = null;
		}

		$builder
			->add('name', TextType::class,  [
				'label' => 'Nazwa wątku',
				'required' => true,
			])
			->add('active', CheckboxType::class, [
				'label' => 'Wątek aktywny?',
				'required' => false,
			])
			->add('open', CheckboxType::class, [
				'label' => 'Wątek otwarty?',
				'required' => false,
			])
			->add('about', TextareaType::class, [
				'label' => 'Opis',
				'required' => true,
				'data' => $groupdata,
			])
		;

		
	}

	public function getBlockPrefix()
	{
		return 'app_group_settings';

	}


        public function configureOptions(OptionsResolver $resolver)
        {
                $resolver->setDefaults([
                        'data_class' => Group::class,
                ]);
         }

}

?>
