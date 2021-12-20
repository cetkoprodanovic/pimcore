<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchHelperService extends App_KernelProdContainer
{
    /*
     * Gets the public 'CustomerManagementFrameworkBundle\CustomerList\SearchHelper' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\CustomerList\SearchHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/CustomerList/SearchHelper.php';

        return $container->services['CustomerManagementFrameworkBundle\\CustomerList\\SearchHelper'] = new \CustomerManagementFrameworkBundle\CustomerList\SearchHelper(($container->services['CustomerManagementFrameworkBundle\\SegmentManager\\SegmentManagerInterface'] ?? $container->getSegmentManagerInterfaceService()), ($container->services['CustomerManagementFrameworkBundle\\CustomerProvider\\CustomerProviderInterface'] ?? $container->getCustomerProviderInterfaceService()));
    }
}