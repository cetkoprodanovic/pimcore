<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_AuthenticatedTokenHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'scheb_two_factor.authenticated_token_handler' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->privates['scheb_two_factor.authenticated_token_handler'] = $container->createProxy('AuthenticatedTokenHandler_e3677d3', function () use ($container) {
                return \AuthenticatedTokenHandler_e3677d3::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = self::do($container, false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/AuthenticationHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/AuthenticatedTokenHandler.php';

        return new \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler(($container->privates['scheb_two_factor.ip_whitelist_handler'] ?? $container->load('getSchebTwoFactor_IpWhitelistHandlerService')), $container->parameters['scheb_two_factor.security_tokens']);
    }
}
