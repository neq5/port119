<?php

namespace App\Form;

use App\Entity\Wall;
use App\Entity\Subscriptions;

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

use App\Entity\Comment;
use App\Entity\Group;

class WallType extends AbstractType
{


	public function buildForm(FormBuilderInterface $builder, array $options)
	{

		$user_id = $options['data']['id'];



		$builder
			->add('title', TextType::class, [
				'label' => 'Tytuł',
				'required' => true,
			])
			->add('content', TextareaType::class, [
				'label' => 'Treść',
				'required' => true,
			])
			->add('groups', EntityType::class, [
				'label' => 'Wybierz wątki, w których chcesz opublikować',
				'class' => Group::class,
                                'query_builder' => function (EntityRepository $er) use($user_id) {
					return $er->createQueryBuilder('g')->leftJoin('App:Subscriptions', 's', 'WITH', 's.groups = g.id and s.accounts = :u')->where('s.accounts is not null')->setParameter('u', $user_id);;

				},
				'multiple' => true,
				'required' => false
			]);

		
	}


}

?>
