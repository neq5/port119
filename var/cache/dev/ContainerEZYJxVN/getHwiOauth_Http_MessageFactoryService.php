<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'hwi_oauth.http.message_factory' shared service.

include_once $this->targetDirs[3].'/vendor/php-http/discovery/src/MessageFactoryDiscovery.php';

return $this->services['hwi_oauth.http.message_factory'] = \Http\Discovery\MessageFactoryDiscovery::find();
