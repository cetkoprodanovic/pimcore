<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTargetingToolbarListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'CustomerManagementFrameworkBundle\Targeting\EventListener\TargetingToolbarListener' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Targeting\EventListener\TargetingToolbarListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Targeting/EventListener/TargetingToolbarListener.php';

        return $container->privates['CustomerManagementFrameworkBundle\\Targeting\\EventListener\\TargetingToolbarListener'] = new \CustomerManagementFrameworkBundle\Targeting\EventListener\TargetingToolbarListener(($container->privates['Pimcore\\Targeting\\VisitorInfoStorage'] ?? ($container->privates['Pimcore\\Targeting\\VisitorInfoStorage'] = new \Pimcore\Targeting\VisitorInfoStorage())), ($container->privates['CustomerManagementFrameworkBundle\\Targeting\\SegmentTracker'] ?? $container->load('getSegmentTrackerService')), ($container->services['CustomerManagementFrameworkBundle\\SegmentManager\\SegmentManagerInterface'] ?? $container->getSegmentManagerInterfaceService()));
    }
}
