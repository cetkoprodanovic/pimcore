<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Jmc0395Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jmc0395' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jmc0395'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'consentService' => ['services', 'Pimcore\\DataObject\\Consent\\Service', 'getService3Service', true],
            'newsletterDoubleOptInService' => ['privates', 'App\\Services\\NewsletterDoubleOptInService', 'getNewsletterDoubleOptInServiceService', true],
            'translator' => ['services', 'Symfony\\Contracts\\Translation\\TranslatorInterface', 'getTranslatorInterfaceService', false],
        ], [
            'consentService' => 'Pimcore\\DataObject\\Consent\\Service',
            'newsletterDoubleOptInService' => 'App\\Services\\NewsletterDoubleOptInService',
            'translator' => '?',
        ]);
    }
}
