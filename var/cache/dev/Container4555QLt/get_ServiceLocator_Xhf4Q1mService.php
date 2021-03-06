<?php

namespace Container4555QLt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Xhf4Q1mService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Xhf4Q1m' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Xhf4Q1m'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'sortieRepository' => ['privates', 'App\\Repository\\SortieRepository', 'getSortieRepositoryService', true],
        ], [
            'manager' => '?',
            'sortieRepository' => 'App\\Repository\\SortieRepository',
        ]);
    }
}
