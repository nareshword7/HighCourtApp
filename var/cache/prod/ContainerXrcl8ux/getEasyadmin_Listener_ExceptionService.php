<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'easyadmin.listener.exception' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ExceptionListener.php';
include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/EventListener/ExceptionListener.php';

return $this->services['easyadmin.listener.exception'] = new \EasyCorp\Bundle\EasyAdminBundle\EventListener\ExceptionListener(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, $this->parameters['easyadmin.config'], 'easyadmin.listener.exception:showExceptionPageAction', ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'});
