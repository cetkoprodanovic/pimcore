<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AhkfP6HService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.AhkfP6H' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AhkfP6H'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'factory' => ['services', 'pimcore_ecommerce.factory', 'getPimcoreEcommerce_FactoryService', true],
            'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
        ], [
            'factory' => '?',
            'logger' => '?',
        ]);
    }
}
