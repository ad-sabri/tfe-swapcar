<?php

namespace ContainerDEKVIrA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KPSkuZIService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.KPSkuZI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KPSkuZI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'adRepository' => ['privates', 'App\\Repository\\AdRepository', 'getAdRepositoryService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'adRepository' => 'App\\Repository\\AdRepository',
            'em' => '?',
        ]);
    }
}
