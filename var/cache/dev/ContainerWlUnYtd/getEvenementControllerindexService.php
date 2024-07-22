<?php

namespace ContainerWlUnYtd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEvenementControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.l6hZplE.App\Controller\EvenementController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.l6hZplE.App\\Controller\\EvenementController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'evenementRepository' => ['privates', 'App\\Repository\\EvenementRepository', 'getEvenementRepositoryService', true],
        ], [
            'evenementRepository' => 'App\\Repository\\EvenementRepository',
        ]))->withContext('App\\Controller\\EvenementController::index()', $container);
    }
}
