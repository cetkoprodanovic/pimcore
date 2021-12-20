<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Og4psncService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.og4psnc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.og4psnc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'bruteforceProtectionHandler' => ['services', 'pimcore_admin.security.bruteforce_protection_handler', 'getPimcoreAdmin_Security_BruteforceProtectionHandlerService', false],
            'config' => ['services', 'Pimcore\\Config', 'getConfigService', false],
        ], [
            'bruteforceProtectionHandler' => '?',
            'config' => 'Pimcore\\Config',
        ]);
    }
}
