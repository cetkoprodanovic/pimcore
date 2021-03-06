<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VOcvNsdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vOcvNsd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vOcvNsd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'config' => ['services', 'Pimcore\\Config', 'getConfigService', false],
            'csrfProtection' => ['services', 'Pimcore\\Bundle\\AdminBundle\\Security\\CsrfProtectionHandler', 'getCsrfProtectionHandlerService', false],
        ], [
            'config' => 'Pimcore\\Config',
            'csrfProtection' => 'Pimcore\\Bundle\\AdminBundle\\Security\\CsrfProtectionHandler',
        ]);
    }
}
