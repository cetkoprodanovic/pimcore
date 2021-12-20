<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Aa5vmgHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aa5vmgH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aa5vmgH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'identityService' => ['privates', 'CustomerManagementFrameworkBundle\\Security\\SsoIdentity\\DefaultSsoIdentityService', 'getDefaultSsoIdentityServiceService', true],
        ], [
            'identityService' => '?',
        ]);
    }
}
