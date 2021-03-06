<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_AppService extends App_KernelProdContainer
{
    /*
     * Gets the public 'cache.app' shared autowired service.
     *
     * @return \Symfony\Component\Cache\Adapter\ProxyAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/ProxyAdapter.php';

        return $container->services['cache.app'] = new \Symfony\Component\Cache\Adapter\ProxyAdapter(($container->services['pimcore.cache.pool'] ?? $container->getPimcore_Cache_PoolService()), 'app');
    }
}
