<?php

namespace App\Form;

use App\Entity\GroupCredentials;

use App\Entity\User;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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

class GroupCredentials2Type extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{

		#$opt = $options['data']->getGroups()->getId();

/*
		$builder
			->add('accounts', ChoiceType::class, [
				'label' => 'Admini',
				'multiple' => true,
				'required' => false,
				'choices' => [ 'raz' => 'raz', 'dwa' => 'dwa' ]

			])

		;
*/

/*
		$builder
			->add('accounts', EntityType::class, [
				'label' => 'Wybierz konto do administracji grupą (zaznacz kilka opcji przytrzymując ctrl)',
				'class' => User::class,
				'query_builder' => function (EntityRepository $er) use($opt) {
					return $er->createQueryBuilder('u')->leftJoin('App:GroupCredentials', 'e', 'WITH', 'e.accounts = u.id and e.groups = :g')->where('e.accounts is null')->setParameter('g', $opt);
					# or with?
					#return $er->createQueryBuilder('u')->leftJoin('App:GroupCredentials', 'e', 'WITH', 'e.accounts = u.id')->where('e.groups = :g')->setParameter('g', $opt)->andWhere('e.accounts is null');
				},



				'multiple' => true,
			]);
*/

		$builder
			->add('accounts', TextType::class, [
				'label' => 'search',
				'required' => true
				]
			)
			->add('selekt', ChoiceType::class);
	}

	public function getBlockPrefix()
	{
		return 'gcdn_neq';
	}
}
