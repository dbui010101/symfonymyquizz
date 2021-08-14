<?php

namespace ContainerMvAU4LG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H9bDyFtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.h9bDyFt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.h9bDyFt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]);
    }
}
