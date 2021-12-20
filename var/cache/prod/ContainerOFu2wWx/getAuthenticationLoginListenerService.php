<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthenticationLoginListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\EventListener\AuthenticationLoginListener' shared autowired service.
     *
     * @return \App\EventListener\AuthenticationLoginListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/src/EventListener/AuthenticationLoginListener.php';

        return $container->privates['App\\EventListener\\AuthenticationLoginListener'] = new \App\EventListener\AuthenticationLoginListener(($container->privates['security.http_utils'] ?? $container->getSecurity_HttpUtilsService()), ($container->services['pimcore_ecommerce.environment'] ?? $container->getPimcoreEcommerce_EnvironmentService()), ($container->services['CustomerManagementFrameworkBundle\\ActivityManager\\DefaultActivityManager'] ?? $container->load('getDefaultActivityManagerService')), ($container->services['pimcore_ecommerce.factory'] ?? $container->load('getPimcoreEcommerce_FactoryService')));
    }
}