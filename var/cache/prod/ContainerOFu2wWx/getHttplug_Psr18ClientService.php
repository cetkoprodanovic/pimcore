<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHttplug_Psr18ClientService extends App_KernelProdContainer
{
    /*
     * Gets the public 'httplug.psr18_client' shared service.
     *
     * @return \Psr\Http\Client\ClientInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-client/src/ClientInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-http/discovery/src/ClassDiscovery.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-http/discovery/src/Psr18ClientDiscovery.php';

        return $container->services['httplug.psr18_client'] = \Http\Discovery\Psr18ClientDiscovery::find();
    }
}
