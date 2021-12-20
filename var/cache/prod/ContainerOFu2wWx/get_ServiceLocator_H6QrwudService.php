<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H6QrwudService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.h6Qrwud' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.h6Qrwud'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'oAuthHandler' => ['privates', 'CustomerManagementFrameworkBundle\\Security\\OAuth\\OAuthRegistrationHandler', 'getOAuthRegistrationHandlerService', true],
            'user' => ['privates', '.errored..service_locator.h6Qrwud.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.h6Qrwud": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'oAuthHandler' => 'CustomerManagementFrameworkBundle\\Security\\OAuth\\OAuthRegistrationHandler',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
