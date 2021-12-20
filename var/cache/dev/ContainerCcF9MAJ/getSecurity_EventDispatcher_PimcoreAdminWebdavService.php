<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_EventDispatcher_PimcoreAdminWebdavService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.event_dispatcher.pimcore_admin_webdav' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['security.event_dispatcher.pimcore_admin_webdav'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('security.authentication.success', [0 => function () use ($container) {
            return ($container->privates['security.authentication.provider_preparation_listener.two_factor.pimcore_admin'] ?? $container->getSecurity_Authentication_ProviderPreparationListener_TwoFactor_PimcoreAdminService());
        }, 1 => 'onLogin'], 9223372036854775807);
        $instance->addListener('security.authentication.success', [0 => function () use ($container) {
            return ($container->privates['scheb_two_factor.security.authentication_success_event_suppressor'] ?? ($container->privates['scheb_two_factor.security.authentication_success_event_suppressor'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Event\AuthenticationSuccessEventSuppressor()));
        }, 1 => 'onLogin'], 9223372036854775806);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\CheckPassportEvent', [0 => function () use ($container) {
            return ($container->privates['scheb_two_factor.security.listener.check_two_factor_code'] ?? $container->load('getSchebTwoFactor_Security_Listener_CheckTwoFactorCodeService'));
        }, 1 => 'checkPassport'], 0);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\LoginSuccessEvent', [0 => function () use ($container) {
            return ($container->privates['scheb_two_factor.security.listener.suppress_remember_me'] ?? ($container->privates['scheb_two_factor.security.listener.suppress_remember_me'] = new \Scheb\TwoFactorBundle\Security\Http\EventListener\SuppressRememberMeListener()));
        }, 1 => 'onSuccessfulLogin'], -63);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\LogoutEvent', [0 => function () use ($container) {
            return ($container->privates['security.logout.listener.csrf_token_clearing'] ?? $container->load('getSecurity_Logout_Listener_CsrfTokenClearingService'));
        }, 1 => 'onLogout'], 0);

        return $instance;
    }
}
