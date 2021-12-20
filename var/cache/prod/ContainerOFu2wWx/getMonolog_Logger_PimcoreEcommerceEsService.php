<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Logger_PimcoreEcommerceEsService extends App_KernelProdContainer
{
    /*
     * Gets the public 'monolog.logger.pimcore_ecommerce_es' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['monolog.logger.pimcore_ecommerce_es'] = $instance = new \Symfony\Bridge\Monolog\Logger('pimcore_ecommerce_es');

        $instance->pushHandler(($container->privates['monolog.handler.console'] ?? $container->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($container->privates['monolog.handler.main'] ?? $container->getMonolog_Handler_MainService()));

        return $instance;
    }
}
