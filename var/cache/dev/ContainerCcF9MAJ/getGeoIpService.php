<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGeoIpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Targeting\DataProvider\GeoIp' shared autowired service.
     *
     * @return \Pimcore\Targeting\DataProvider\GeoIp
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/DataProvider/DataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/DataProvider/GeoIp.php';
        include_once \dirname(__DIR__, 4).'/vendor/geoip2/geoip2/src/ProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/geoip2/geoip2/src/Database/Reader.php';

        $container->privates['Pimcore\\Targeting\\DataProvider\\GeoIp'] = $instance = new \Pimcore\Targeting\DataProvider\GeoIp(new \GeoIp2\Database\Reader(''), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));

        $instance->setCache(($container->services['Pimcore\\Cache\\Core\\CoreCacheHandler'] ?? $container->getCoreCacheHandlerService()));

        return $instance;
    }
}
