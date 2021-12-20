<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPricingManagerLocatorInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\EcommerceFrameworkBundle\PricingManager\PricingManagerLocatorInterface' shared service.
     *
     * @return \Pimcore\Bundle\EcommerceFrameworkBundle\PricingManager\PricingManagerLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/DependencyInjection/ServiceLocator/TenantAwareServiceLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/DependencyInjection/ServiceLocator/CheckoutTenantAwareServiceLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/PricingManager/PricingManagerLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/PricingManager/PricingManagerLocator.php';

        return $container->privates['Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\PricingManagerLocatorInterface'] = new \Pimcore\Bundle\EcommerceFrameworkBundle\PricingManager\PricingManagerLocator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'default' => ['privates', 'pimcore_ecommerce.pricing_manager.default', 'getPimcoreEcommerce_PricingManager_DefaultService', true],
        ], [
            'default' => '?',
        ]), ($container->services['pimcore_ecommerce.environment'] ?? $container->getPimcoreEcommerce_EnvironmentService()), false);
    }
}
