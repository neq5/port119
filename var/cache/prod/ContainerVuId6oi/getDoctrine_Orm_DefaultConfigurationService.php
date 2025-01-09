<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.orm.default_configuration' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/PruneableInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/ResettableInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/DoctrineProvider.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriverChain.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/FileDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/XmlDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/FileLocator.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/SymfonyFileLocator.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';

$this->privates['doctrine.orm.default_configuration'] = $instance = new \Doctrine\ORM\Configuration();

$a = new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.system_cache_pool'] ?? $this->load('getDoctrine_SystemCachePoolService.php')));
$b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
$b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => ($this->targetDirs[3].'/src/Entity')]), 'App\\Entity');
$b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/doctrine-mapping') => 'FOS\\UserBundle\\Model'], '.orm.xml')), 'FOS\\UserBundle\\Model');

$instance->setEntityNamespaces(['App' => 'App\\Entity']);
$instance->setMetadataCacheImpl($a);
$instance->setQueryCacheImpl($a);
$instance->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.result_cache_pool'] ?? $this->load('getDoctrine_ResultCachePoolService.php'))));
$instance->setMetadataDriverImpl($b);
$instance->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$instance->setProxyNamespace('Proxies');
$instance->setAutoGenerateProxyClasses(false);
$instance->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$instance->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$instance->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
$instance->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
$instance->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
$instance->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(['App\\Repository\\AlbumARepository' => function () {
    return ($this->privates['App\\Repository\\AlbumARepository'] ?? $this->load('getAlbumARepositoryService.php'));
}, 'App\\Repository\\AlbumRepository' => function () {
    return ($this->privates['App\\Repository\\AlbumRepository'] ?? $this->load('getAlbumRepositoryService.php'));
}, 'App\\Repository\\CommentRepository' => function () {
    return ($this->privates['App\\Repository\\CommentRepository'] ?? $this->load('getCommentRepositoryService.php'));
}, 'App\\Repository\\Content2Repository' => function () {
    return ($this->privates['App\\Repository\\Content2Repository'] ?? $this->load('getContent2RepositoryService.php'));
}, 'App\\Repository\\ContentRepository' => function () {
    return ($this->privates['App\\Repository\\ContentRepository'] ?? $this->load('getContentRepositoryService.php'));
}, 'App\\Repository\\FriendsRepository' => function () {
    return ($this->privates['App\\Repository\\FriendsRepository'] ?? $this->load('getFriendsRepositoryService.php'));
}, 'App\\Repository\\Gallery2Repository' => function () {
    return ($this->privates['App\\Repository\\Gallery2Repository'] ?? $this->load('getGallery2RepositoryService.php'));
}, 'App\\Repository\\GalleryCommentRepository' => function () {
    return ($this->privates['App\\Repository\\GalleryCommentRepository'] ?? $this->load('getGalleryCommentRepositoryService.php'));
}, 'App\\Repository\\GroupCredentialsRepository' => function () {
    return ($this->privates['App\\Repository\\GroupCredentialsRepository'] ?? $this->load('getGroupCredentialsRepositoryService.php'));
}, 'App\\Repository\\GroupRepository' => function () {
    return ($this->privates['App\\Repository\\GroupRepository'] ?? $this->load('getGroupRepositoryService.php'));
}, 'App\\Repository\\GroupVisitsRepository' => function () {
    return ($this->privates['App\\Repository\\GroupVisitsRepository'] ?? $this->load('getGroupVisitsRepositoryService.php'));
}, 'App\\Repository\\GroupVistsRepository' => function () {
    return ($this->privates['App\\Repository\\GroupVistsRepository'] ?? $this->load('getGroupVistsRepositoryService.php'));
}, 'App\\Repository\\HitsRepository' => function () {
    return ($this->privates['App\\Repository\\HitsRepository'] ?? $this->load('getHitsRepositoryService.php'));
}, 'App\\Repository\\ImgRepository' => function () {
    return ($this->privates['App\\Repository\\ImgRepository'] ?? $this->load('getImgRepositoryService.php'));
}, 'App\\Repository\\ProfileVisitsRepository' => function () {
    return ($this->privates['App\\Repository\\ProfileVisitsRepository'] ?? $this->load('getProfileVisitsRepositoryService.php'));
}, 'App\\Repository\\SubscriptionsRepository' => function () {
    return ($this->privates['App\\Repository\\SubscriptionsRepository'] ?? $this->load('getSubscriptionsRepositoryService.php'));
}, 'App\\Repository\\UserDataRepository' => function () {
    return ($this->privates['App\\Repository\\UserDataRepository'] ?? $this->load('getUserDataRepositoryService.php'));
}, 'App\\Repository\\WallRepository' => function () {
    return ($this->privates['App\\Repository\\WallRepository'] ?? $this->load('getWallRepositoryService.php'));
}, 'App\\Repository\\WhitsRepository' => function () {
    return ($this->privates['App\\Repository\\WhitsRepository'] ?? $this->load('getWhitsRepositoryService.php'));
}])));

return $instance;
