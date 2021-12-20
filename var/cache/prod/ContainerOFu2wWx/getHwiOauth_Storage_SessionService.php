<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHwiOauth_Storage_SessionService extends App_KernelProdContainer
{
    /*
     * Gets the private 'hwi_oauth.storage.session' shared service.
     *
     * @return \HWI\Bundle\OAuthBundle\OAuth\RequestDataStorage\SessionStorage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/OAuth/RequestDataStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/OAuth/RequestDataStorage/SessionStorage.php';

        return $container->privates['hwi_oauth.storage.session'] = new \HWI\Bundle\OAuthBundle\OAuth\RequestDataStorage\SessionStorage(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
