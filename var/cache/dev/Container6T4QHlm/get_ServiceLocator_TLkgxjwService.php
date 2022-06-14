<?php

namespace Container6T4QHlm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TLkgxjwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tLkgxjw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tLkgxjw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entreeRepository' => ['privates', 'App\\Repository\\EntreeRepository', 'getEntreeRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'entreeRepository' => 'App\\Repository\\EntreeRepository',
            'manager' => '?',
        ]);
    }
}
