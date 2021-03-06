<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KdvGBCzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KdvGBCz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KdvGBCz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ecommerceFactory' => ['services', 'pimcore_ecommerce.factory', 'getPimcoreEcommerce_FactoryService', true],
        ], [
            'ecommerceFactory' => '?',
        ]);
    }
}
