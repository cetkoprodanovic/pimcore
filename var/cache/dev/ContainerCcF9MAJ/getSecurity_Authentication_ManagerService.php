<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_ManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     *
     * @deprecated Since symfony/security-bundle 5.3: The "security.authentication.manager" service is deprecated, use the new authenticator system instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The "security.authentication.manager" service is deprecated, use the new authenticator system instead.');

        $container->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.authentication.provider.dao.pimcore_admin_webdav.two_factor_decorator'] ?? $container->load('getSecurity_Authentication_Provider_Dao_PimcoreAdminWebdav_TwoFactorDecoratorService'));
            yield 1 => ($container->privates['security.authentication.provider.guard.pimcore_admin.two_factor_decorator'] ?? $container->load('getSecurity_Authentication_Provider_Guard_PimcoreAdmin_TwoFactorDecoratorService'));
            yield 2 => ($container->privates['security.authentication.provider.two_factor.pimcore_admin'] ?? $container->load('getSecurity_Authentication_Provider_TwoFactor_PimcoreAdminService'));
            yield 3 => ($container->privates['security.authentication.provider.anonymous.pimcore_admin.two_factor_decorator'] ?? $container->load('getSecurity_Authentication_Provider_Anonymous_PimcoreAdmin_TwoFactorDecoratorService'));
            yield 4 => ($container->privates['security.authentication.provider.dao.demo_frontend.two_factor_decorator'] ?? $container->load('getSecurity_Authentication_Provider_Dao_DemoFrontend_TwoFactorDecoratorService'));
            yield 5 => ($container->privates['hwi_oauth.authentication.provider.oauth.demo_frontend.two_factor_decorator'] ?? $container->load('getHwiOauth_Authentication_Provider_Oauth_DemoFrontend_TwoFactorDecoratorService'));
            yield 6 => ($container->privates['security.authentication.provider.rememberme.demo_frontend.two_factor_decorator'] ?? $container->load('getSecurity_Authentication_Provider_Rememberme_DemoFrontend_TwoFactorDecoratorService'));
            yield 7 => ($container->privates['security.authentication.provider.anonymous.demo_frontend.two_factor_decorator'] ?? $container->load('getSecurity_Authentication_Provider_Anonymous_DemoFrontend_TwoFactorDecoratorService'));
        }, 8), true);

        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));

        return $instance;
    }
}