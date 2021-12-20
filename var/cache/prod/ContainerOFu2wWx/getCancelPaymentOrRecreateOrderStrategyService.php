<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCancelPaymentOrRecreateOrderStrategyService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Pimcore\Bundle\EcommerceFrameworkBundle\CheckoutManager\V7\HandlePendingPayments\CancelPaymentOrRecreateOrderStrategy' shared autowired service.
     *
     * @return \Pimcore\Bundle\EcommerceFrameworkBundle\CheckoutManager\V7\HandlePendingPayments\CancelPaymentOrRecreateOrderStrategy
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/CheckoutManager/V7/HandlePendingPayments/HandlePendingPaymentsStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/CheckoutManager/V7/HandlePendingPayments/CancelPaymentOrRecreateOrderStrategy.php';

        return $container->privates['Pimcore\\Bundle\\EcommerceFrameworkBundle\\CheckoutManager\\V7\\HandlePendingPayments\\CancelPaymentOrRecreateOrderStrategy'] = new \Pimcore\Bundle\EcommerceFrameworkBundle\CheckoutManager\V7\HandlePendingPayments\CancelPaymentOrRecreateOrderStrategy();
    }
}
