<?php

namespace ContainerM6scLhY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TdDUAwmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TdDUAwm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TdDUAwm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\AdRepository', 'getAdRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\AdRepository',
        ]);
    }
}