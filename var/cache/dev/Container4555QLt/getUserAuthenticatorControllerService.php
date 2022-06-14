<?php

namespace Container4555QLt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserAuthenticatorControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\UserAuthenticatorController' shared autowired service.
     *
     * @return \App\Controller\UserAuthenticatorController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'UserAuthenticatorController.php';

        $container->services['App\\Controller\\UserAuthenticatorController'] = $instance = new \App\Controller\UserAuthenticatorController();

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\UserAuthenticatorController', $container));

        return $instance;
    }
}