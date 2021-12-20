<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Listener_Guard_PimcoreAdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.listener.guard.pimcore_admin' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener
     *
     * @deprecated Since symfony/security-bundle 5.3: The "security.authentication.listener.guard.pimcore_admin" service is deprecated, use the new authenticator system instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The "security.authentication.listener.guard.pimcore_admin" service is deprecated, use the new authenticator system instead.');

        return $container->privates['security.authentication.listener.guard.pimcore_admin'] = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener($container->load('getSecurity_Authentication_GuardHandlerService'), ($container->privates['security.authentication.manager'] ?? $container->load('getSecurity_Authentication_ManagerService')), 'pimcore_admin', new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->services['pimcore_admin.security.admin_authenticator'] ?? $container->load('getPimcoreAdmin_Security_AdminAuthenticatorService'));
        }, 1), ($container->services['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService()), true);
    }
}
