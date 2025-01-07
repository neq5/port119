<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class RegistrationType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('firstname', TextType::class, [
				'label' => 'Imię',
				'required' => true,
		]);
		$builder
			->add('lastname', TextType::class, [
				'label' => 'Nazwisko',
				'required' => true,
		]);


	}

	public function getParent()
	{
		return 'FOS\UserBundle\Form\Type\RegistrationFormType';
	}

	public function getBlockPrefix()
	{
		return 'app_user_registration';
	}

	public function getName()
	{
		return $this->getBlockPrefix();
	}
}

