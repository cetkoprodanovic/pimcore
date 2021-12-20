<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHwiOauth_HttpClientService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'hwi_oauth.http_client' shared service.
     *
     * @return \Http\Client\Common\HttpMethodsClient
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-client/src/ClientInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-http/httplug/src/HttpClient.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-http/client-common/src/HttpMethodsClientInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-http/client-common/src/HttpMethodsClient.php';

        return $container->privates['hwi_oauth.http_client'] = new \Http\Client\Common\HttpMethodsClient(($container->services['httplug.client'] ?? $container->load('getHttplug_ClientService')), ($container->services['httplug.message_factory'] ?? $container->load('getHttplug_MessageFactoryService')));
    }
}
