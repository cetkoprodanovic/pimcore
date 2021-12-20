<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcoreEcommerce_PaymentManagerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'pimcore_ecommerce.payment_manager' shared autowired service.
     *
     * @return \Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\PaymentManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/PaymentManager/PaymentManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/PaymentManager/PaymentManager.php';

        return $container->services['pimcore_ecommerce.payment_manager'] = new \Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\PaymentManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'unzer' => ['privates', 'pimcore_ecommerce.payment_manager.provider.unzer', 'getPimcoreEcommerce_PaymentManager_Provider_UnzerService', true],
        ], [
            'unzer' => '?',
        ]), ['unzer' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\PaymentManager\\Payment\\Unzer']);
    }
}
