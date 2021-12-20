<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSegmentGroupsControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'CustomerManagementFrameworkBundle\Controller\Rest\Api\SegmentGroupsController' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Controller\Rest\Api\SegmentGroupsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/DoubleAuthenticationControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/AdminControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/AdminController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Controller/Rest/AbstractRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Controller/Rest/RestHandlerController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Controller/Rest/CrudHandlerController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Controller/Rest/Api/SegmentGroupsController.php';

        $container->services['CustomerManagementFrameworkBundle\\Controller\\Rest\\Api\\SegmentGroupsController'] = $instance = new \CustomerManagementFrameworkBundle\Controller\Rest\Api\SegmentGroupsController();

        $instance->setContainer(($container->privates['.service_locator.487RsJm'] ?? $container->load('get_ServiceLocator_487RsJmService'))->withContext('CustomerManagementFrameworkBundle\\Controller\\Rest\\Api\\SegmentGroupsController', $container));

        return $instance;
    }
}
