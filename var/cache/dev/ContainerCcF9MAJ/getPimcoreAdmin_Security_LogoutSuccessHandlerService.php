<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcoreAdmin_Security_LogoutSuccessHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'pimcore_admin.security.logout_success_handler' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Security\LogoutSuccessHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Security/LogoutSuccessHandler.php';

        $container->services['pimcore_admin.security.logout_success_handler'] = $instance = new \Pimcore\Bundle\AdminBundle\Security\LogoutSuccessHandler(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->services['router'] ?? $container->getRouterService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));

        $a = ($container->services['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService());

        $instance->setLogger($a);
        $instance->setLogger($a);

        return $instance;
    }
}
