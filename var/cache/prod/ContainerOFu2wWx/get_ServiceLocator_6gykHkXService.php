<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6gykHkXService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.6gykHkX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6gykHkX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticationLoginListener' => ['privates', 'App\\EventListener\\AuthenticationLoginListener', 'getAuthenticationLoginListenerService', true],
            'consentService' => ['services', 'Pimcore\\DataObject\\Consent\\Service', 'getService3Service', true],
            'customerProvider' => ['services', 'CustomerManagementFrameworkBundle\\CustomerProvider\\CustomerProviderInterface', 'getCustomerProviderInterfaceService', false],
            'loginManager' => ['privates', 'CustomerManagementFrameworkBundle\\Security\\Authentication\\LoginManager', 'getLoginManagerService', true],
            'newsletterDoubleOptInService' => ['privates', 'App\\Services\\NewsletterDoubleOptInService', 'getNewsletterDoubleOptInServiceService', true],
            'oAuthHandler' => ['privates', 'CustomerManagementFrameworkBundle\\Security\\OAuth\\OAuthRegistrationHandler', 'getOAuthRegistrationHandlerService', true],
            'registrationFormHandler' => ['privates', 'App\\Form\\RegistrationFormHandler', 'getRegistrationFormHandlerService', true],
            'translator' => ['services', 'Symfony\\Contracts\\Translation\\TranslatorInterface', 'getTranslatorInterfaceService', false],
            'urlGenerator' => ['services', 'router', 'getRouterService', false],
        ], [
            'authenticationLoginListener' => 'App\\EventListener\\AuthenticationLoginListener',
            'consentService' => 'Pimcore\\DataObject\\Consent\\Service',
            'customerProvider' => 'CustomerManagementFrameworkBundle\\CustomerProvider\\CustomerProviderInterface',
            'loginManager' => '?',
            'newsletterDoubleOptInService' => 'App\\Services\\NewsletterDoubleOptInService',
            'oAuthHandler' => 'CustomerManagementFrameworkBundle\\Security\\OAuth\\OAuthRegistrationHandler',
            'registrationFormHandler' => 'App\\Form\\RegistrationFormHandler',
            'translator' => '?',
            'urlGenerator' => '?',
        ]);
    }
}
