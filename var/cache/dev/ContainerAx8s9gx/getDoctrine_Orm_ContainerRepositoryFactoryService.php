<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.orm.container_repository_factory' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';

return $this->services['doctrine.orm.container_repository_factory'] = new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Repository\\DraftCaseFileRepository' => function () {
    return ${($_ = isset($this->services['App\Repository\DraftCaseFileRepository']) ? $this->services['App\Repository\DraftCaseFileRepository'] : $this->load('getDraftCaseFileRepositoryService.php')) && false ?: '_'};
})));
