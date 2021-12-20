<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSegmentAssignmentControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'CustomerManagementFrameworkBundle\Controller\Admin\SegmentAssignmentController' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Controller\Admin\SegmentAssignmentController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/DoubleAuthenticationControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/AdminControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/AdminController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Controller/Admin/SegmentAssignmentController.php';

        $container->services['CustomerManagementFrameworkBundle\\Controller\\Admin\\SegmentAssignmentController'] = $instance = new \CustomerManagementFrameworkBundle\Controller\Admin\SegmentAssignmentController();

        $instance->setContainer(($container->privates['.service_locator.487RsJm'] ?? $container->load('get_ServiceLocator_487RsJmService'))->withContext('CustomerManagementFrameworkBundle\\Controller\\Admin\\SegmentAssignmentController', $container));

        return $instance;
    }
}
