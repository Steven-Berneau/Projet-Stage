<?php

namespace ContainerWlUnYtd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SMofYe0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sMofYe0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sMofYe0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'evenement' => ['privates', '.errored..service_locator.sMofYe0.App\\Entity\\Evenement', NULL, 'Cannot autowire service ".service_locator.sMofYe0": it needs an instance of "App\\Entity\\Evenement" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'evenement' => 'App\\Entity\\Evenement',
        ]);
    }
}