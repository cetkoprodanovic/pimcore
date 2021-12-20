<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCmf_Rest_CustomersHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'cmf.rest.customers_handler' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\RESTApi\CustomersHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/RESTApi/HandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/RESTApi/AbstractHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/RESTApi/CrudHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/RESTApi/Traits/ResponseGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/RESTApi/Traits/ResourceUrlGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/RESTApi/CustomersHandler.php';

        $container->services['cmf.rest.customers_handler'] = $instance = new \CustomerManagementFrameworkBundle\RESTApi\CustomersHandler(($container->services['Knp\\Component\\Pager\\PaginatorInterface'] ?? $container->getPaginatorInterfaceService()), ($container->services['CustomerManagementFrameworkBundle\\CustomerProvider\\CustomerProviderInterface'] ?? $container->getCustomerProviderInterfaceService()));

        $instance->setApiResourceRoute('customermanagementframework_rest_api_customers_readrecord');

        return $instance;
    }
}