<?php

namespace App\Form;

use App\Entity\User;

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

class UserSettingsType extends AbstractType
{


	public function buildForm(FormBuilderInterface $builder, array $options)
	{


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


		$builder
			->add('username', TextType::class, [
				'label' => 'użytkownik',
				'required' => false,
			])
			#->add('email', EmailType::class, [
			#	'label' => 'Adres e-mail',
			#	'required' => false,
			#])
			->add('firstname', TextType::class, [
				'label' => 'Imię',
				'required' => true,
			])
			->add('lastname', TextType::class, [
				'label' => 'Nazwisko',
				'required' => true,
			])
			->add('about', TextareaType::class, [
				'label' => 'O sobie',
				'data' => $about,
				'required' => false,
			])
			->add('sig', TextareaType::class, [
				'label' => 'Sygnaturka',
				'data' => $sig,
				'required' => false,
			])
		;

		
	}

	public function getBlockPrefix()
	{
		return 'app_user_settings';
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => User::class,
		]);
	 }
}

?>
