<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcoreEcommerce_PricingManager_DefaultService extends App_KernelProdContainer
{
    /*
     * Gets the private 'pimcore_ecommerce.pricing_manager.default' shared autowired service.
     *
     * @return \Pimcore\Bundle\EcommerceFrameworkBundle\PricingManager\PricingManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/PricingManager/PricingManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/PricingManager/PricingManager.php';

        $container->privates['pimcore_ecommerce.pricing_manager.default'] = $instance = new \Pimcore\Bundle\EcommerceFrameworkBundle\PricingManager\PricingManager($container->parameters['pimcore_ecommerce.pricing_manager.condition_mapping'], $container->parameters['pimcore_ecommerce.pricing_manager.action_mapping'], ($container->services['session'] ?? $container->load('getSessionService')), ['rule_class' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\Rule', 'price_info_class' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\PriceInfo', 'environment_class' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\Environment'], ($container->privates['Pimcore\\Targeting\\VisitorInfoStorage'] ?? ($container->privates['Pimcore\\Targeting\\VisitorInfoStorage'] = new \Pimcore\Targeting\VisitorInfoStorage())));

        $instance->setEnabled(true);

        return $instance;
    }
}
