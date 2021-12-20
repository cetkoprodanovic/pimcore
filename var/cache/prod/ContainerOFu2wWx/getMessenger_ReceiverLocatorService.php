<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_ReceiverLocatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'messenger.receiver_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['messenger.receiver_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'messenger.transport.pimcore_core' => ['privates', 'messenger.transport.pimcore_core', 'getMessenger_Transport_PimcoreCoreService', true],
            'messenger.transport.pimcore_maintenance' => ['privates', 'messenger.transport.pimcore_maintenance', 'getMessenger_Transport_PimcoreMaintenanceService', true],
            'pimcore_core' => ['privates', 'messenger.transport.pimcore_core', 'getMessenger_Transport_PimcoreCoreService', true],
            'pimcore_maintenance' => ['privates', 'messenger.transport.pimcore_maintenance', 'getMessenger_Transport_PimcoreMaintenanceService', true],
        ], [
            'messenger.transport.pimcore_core' => '?',
            'messenger.transport.pimcore_maintenance' => '?',
            'pimcore_core' => '?',
            'pimcore_maintenance' => '?',
        ]);
    }
}