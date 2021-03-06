<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PNZRCEService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator._pNZRCE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._pNZRCE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pimcoreUsers' => ['privates', 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\PimcoreUsers', 'getPimcoreUsersService', true],
        ], [
            'pimcoreUsers' => 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\PimcoreUsers',
        ]);
    }
}
