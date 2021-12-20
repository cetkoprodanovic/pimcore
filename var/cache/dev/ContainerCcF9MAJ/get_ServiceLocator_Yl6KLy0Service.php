<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Yl6KLy0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Yl6KLy0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Yl6KLy0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'duplicatesIndex' => ['services', 'CustomerManagementFrameworkBundle\\DuplicatesIndex\\DuplicatesIndexInterface', 'getDuplicatesIndexInterfaceService', true],
        ], [
            'duplicatesIndex' => 'CustomerManagementFrameworkBundle\\DuplicatesIndex\\DuplicatesIndexInterface',
        ]);
    }
}
