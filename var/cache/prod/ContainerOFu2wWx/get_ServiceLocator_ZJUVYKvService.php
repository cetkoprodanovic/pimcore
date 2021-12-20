<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZJUVYKvService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.ZJUVYKv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZJUVYKv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'breadcrumbHelperService' => ['privates', 'App\\Website\\Navigation\\BreadcrumbHelperService', 'getBreadcrumbHelperServiceService', true],
            'ecommerceFactory' => ['services', 'pimcore_ecommerce.factory', 'getPimcoreEcommerce_FactoryService', true],
            'factory' => ['services', 'pimcore_ecommerce.factory', 'getPimcoreEcommerce_FactoryService', true],
        ], [
            'breadcrumbHelperService' => 'App\\Website\\Navigation\\BreadcrumbHelperService',
            'ecommerceFactory' => '?',
            'factory' => '?',
        ]);
    }
}
