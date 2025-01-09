<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.registry' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/FormRegistry.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/FormExtensionInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';

return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(['App\\Form\\CommentEditType' => function () {
    return ($this->privates['App\\Form\\CommentEditType'] ?? ($this->privates['App\\Form\\CommentEditType'] = new \App\Form\CommentEditType()));
}, 'App\\Form\\CommentType' => function () {
    return ($this->privates['App\\Form\\CommentType'] ?? ($this->privates['App\\Form\\CommentType'] = new \App\Form\CommentType()));
}, 'App\\Form\\Friends2Type' => function () {
    return ($this->privates['App\\Form\\Friends2Type'] ?? ($this->privates['App\\Form\\Friends2Type'] = new \App\Form\Friends2Type()));
}, 'App\\Form\\FriendsType' => function () {
    return ($this->privates['App\\Form\\FriendsType'] ?? ($this->privates['App\\Form\\FriendsType'] = new \App\Form\FriendsType()));
}, 'App\\Form\\Gallery2Type' => function () {
    return ($this->privates['App\\Form\\Gallery2Type'] ?? ($this->privates['App\\Form\\Gallery2Type'] = new \App\Form\Gallery2Type()));
}, 'App\\Form\\GalleryCommentEditType' => function () {
    return ($this->privates['App\\Form\\GalleryCommentEditType'] ?? ($this->privates['App\\Form\\GalleryCommentEditType'] = new \App\Form\GalleryCommentEditType()));
}, 'App\\Form\\GalleryCommentType' => function () {
    return ($this->privates['App\\Form\\GalleryCommentType'] ?? ($this->privates['App\\Form\\GalleryCommentType'] = new \App\Form\GalleryCommentType()));
}, 'App\\Form\\GalleryDescSetType' => function () {
    return ($this->privates['App\\Form\\GalleryDescSetType'] ?? ($this->privates['App\\Form\\GalleryDescSetType'] = new \App\Form\GalleryDescSetType()));
}, 'App\\Form\\GalleryMultiUploadType' => function () {
    return ($this->privates['App\\Form\\GalleryMultiUploadType'] ?? ($this->privates['App\\Form\\GalleryMultiUploadType'] = new \App\Form\GalleryMultiUploadType()));
}, 'App\\Form\\GalleryTitleSetType' => function () {
    return ($this->privates['App\\Form\\GalleryTitleSetType'] ?? ($this->privates['App\\Form\\GalleryTitleSetType'] = new \App\Form\GalleryTitleSetType()));
}, 'App\\Form\\GroupContent2EditType' => function () {
    return ($this->privates['App\\Form\\GroupContent2EditType'] ?? ($this->privates['App\\Form\\GroupContent2EditType'] = new \App\Form\GroupContent2EditType()));
}, 'App\\Form\\GroupContent2ReplyType' => function () {
    return ($this->privates['App\\Form\\GroupContent2ReplyType'] ?? ($this->privates['App\\Form\\GroupContent2ReplyType'] = new \App\Form\GroupContent2ReplyType()));
}, 'App\\Form\\GroupContent2Type' => function () {
    return ($this->privates['App\\Form\\GroupContent2Type'] ?? ($this->privates['App\\Form\\GroupContent2Type'] = new \App\Form\GroupContent2Type()));
}, 'App\\Form\\GroupContentType' => function () {
    return ($this->privates['App\\Form\\GroupContentType'] ?? ($this->privates['App\\Form\\GroupContentType'] = new \App\Form\GroupContentType()));
}, 'App\\Form\\GroupCredentials2Type' => function () {
    return ($this->privates['App\\Form\\GroupCredentials2Type'] ?? ($this->privates['App\\Form\\GroupCredentials2Type'] = new \App\Form\GroupCredentials2Type()));
}, 'App\\Form\\GroupCredentialsType' => function () {
    return ($this->privates['App\\Form\\GroupCredentialsType'] ?? ($this->privates['App\\Form\\GroupCredentialsType'] = new \App\Form\GroupCredentialsType()));
}, 'App\\Form\\GroupEditType' => function () {
    return ($this->privates['App\\Form\\GroupEditType'] ?? ($this->privates['App\\Form\\GroupEditType'] = new \App\Form\GroupEditType()));
}, 'App\\Form\\GroupType' => function () {
    return ($this->privates['App\\Form\\GroupType'] ?? ($this->privates['App\\Form\\GroupType'] = new \App\Form\GroupType()));
}, 'App\\Form\\ImgType' => function () {
    return ($this->privates['App\\Form\\ImgType'] ?? ($this->privates['App\\Form\\ImgType'] = new \App\Form\ImgType()));
}, 'App\\Form\\RegistrationType' => function () {
    return ($this->privates['App\\Form\\RegistrationType'] ?? ($this->privates['App\\Form\\RegistrationType'] = new \App\Form\RegistrationType()));
}, 'App\\Form\\UserGalleryType' => function () {
    return ($this->privates['App\\Form\\UserGalleryType'] ?? ($this->privates['App\\Form\\UserGalleryType'] = new \App\Form\UserGalleryType()));
}, 'App\\Form\\UserSettingsType' => function () {
    return ($this->privates['App\\Form\\UserSettingsType'] ?? ($this->privates['App\\Form\\UserSettingsType'] = new \App\Form\UserSettingsType()));
}, 'App\\Form\\UserSpaceGalleryCommentType' => function () {
    return ($this->privates['App\\Form\\UserSpaceGalleryCommentType'] ?? ($this->privates['App\\Form\\UserSpaceGalleryCommentType'] = new \App\Form\UserSpaceGalleryCommentType()));
}, 'App\\Form\\WallEditType' => function () {
    return ($this->privates['App\\Form\\WallEditType'] ?? ($this->privates['App\\Form\\WallEditType'] = new \App\Form\WallEditType()));
}, 'App\\Form\\WallType' => function () {
    return ($this->privates['App\\Form\\WallType'] ?? ($this->privates['App\\Form\\WallType'] = new \App\Form\WallType()));
}, 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => function () {
    return ($this->privates['fos_user.change_password.form.type'] ?? ($this->privates['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('App\\Entity\\User')));
}, 'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => function () {
    return ($this->privates['fos_user.profile.form.type'] ?? ($this->privates['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('App\\Entity\\User')));
}, 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => function () {
    return ($this->privates['fos_user.registration.form.type'] ?? ($this->privates['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('App\\Entity\\User')));
}, 'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => function () {
    return ($this->privates['fos_user.resetting.form.type'] ?? ($this->privates['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('App\\Entity\\User')));
}, 'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => function () {
    return ($this->privates['fos_user.username_form_type'] ?? $this->load('getFosUser_UsernameFormTypeService.php'));
}, 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => function () {
    return ($this->privates['form.type.entity'] ?? $this->load('getForm_Type_EntityService.php'));
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
    return ($this->privates['form.type.choice'] ?? $this->load('getForm_Type_ChoiceService.php'));
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
    return ($this->privates['form.type.form'] ?? $this->load('getForm_Type_FormService.php'));
}]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? $this->load('getForm_TypeExtension_Form_TransformationFailureHandlingService.php'));
    yield 1 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->load('getForm_TypeExtension_Form_HttpFoundationService.php'));
    yield 2 => ($this->privates['form.type_extension.form.validator'] ?? $this->load('getForm_TypeExtension_Form_ValidatorService.php'));
    yield 3 => ($this->privates['form.type_extension.upload.validator'] ?? $this->load('getForm_TypeExtension_Upload_ValidatorService.php'));
    yield 4 => ($this->privates['form.type_extension.csrf'] ?? $this->load('getForm_TypeExtension_CsrfService.php'));
    yield 5 => ($this->privates['form.type_extension.form.data_collector'] ?? $this->load('getForm_TypeExtension_Form_DataCollectorService.php'));
}, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
}, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
}, 1)], new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->load('getForm_TypeGuesser_ValidatorService.php'));
    yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->load('getForm_TypeGuesser_DoctrineService.php'));
}, 2))], ($this->privates['form.resolved_type_factory'] ?? $this->load('getForm_ResolvedTypeFactoryService.php')));
