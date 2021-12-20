<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHwiOauth_Authentication_Listener_Oauth_DemoFrontendService extends App_KernelProdContainer
{
    /*
     * Gets the private 'hwi_oauth.authentication.listener.oauth.demo_frontend' shared service.
     *
     * @return \HWI\Bundle\OAuthBundle\Security\Http\Firewall\OAuthListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/FirewallListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Security/Http/Firewall/OAuthListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/CustomAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

        $a = ($container->privates['security.http_utils'] ?? $container->getSecurity_HttpUtilsService());
        $b = ($container->services['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService());

        $c = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler(($container->services['http_kernel'] ?? $container->getHttpKernelService()), $a, [], $b);
        $c->setOptions(['login_path' => 'account-login', 'failure_path' => 'account-login', 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        $container->privates['hwi_oauth.authentication.listener.oauth.demo_frontend'] = $instance = new \HWI\Bundle\OAuthBundle\Security\Http\Firewall\OAuthListener(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['security.authentication.manager'] ?? $container->load('getSecurity_Authentication_ManagerService')), ($container->privates['security.authentication.session_strategy'] ?? ($container->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))), $a, 'demo_frontend', new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler(($container->privates['App\\EventListener\\AuthenticationLoginListener'] ?? $container->load('getAuthenticationLoginListenerService')), ['login_path' => 'account-login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false], 'demo_frontend'), $c, ['login_path' => 'account-login', 'check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => false], $b, ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));

        $instance->setResourceOwnerMap(($container->services['hwi_oauth.resource_ownermap.demo_frontend'] ?? $container->getHwiOauth_ResourceOwnermap_DemoFrontendService()));
        $instance->setCheckPaths($container->parameters['hwi_oauth.resource_ownermap.configured.demo_frontend']);
        $instance->setRememberMeServices(($container->privates['security.authentication.rememberme.services.simplehash.demo_frontend.two_factor_decorator'] ?? $container->load('getSecurity_Authentication_Rememberme_Services_Simplehash_DemoFrontend_TwoFactorDecoratorService')));

        return $instance;
    }
}
