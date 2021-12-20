<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApplyTargetGroupsFromSegmentsService extends App_KernelProdContainer
{
    /*
     * Gets the private 'CustomerManagementFrameworkBundle\Targeting\ActionHandler\ApplyTargetGroupsFromSegments' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Targeting\ActionHandler\ApplyTargetGroupsFromSegments
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/DataProviderDependentInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Targeting/ActionHandler/ApplyTargetGroupsFromSegments.php';

        return $container->privates['CustomerManagementFrameworkBundle\\Targeting\\ActionHandler\\ApplyTargetGroupsFromSegments'] = new \CustomerManagementFrameworkBundle\Targeting\ActionHandler\ApplyTargetGroupsFromSegments(($container->privates['Pimcore\\Targeting\\ConditionMatcher'] ?? $container->getConditionMatcherService()), ($container->privates['Pimcore\\Targeting\\Storage\\CookieStorage'] ?? $container->getCookieStorageService()), ($container->services['CustomerManagementFrameworkBundle\\SegmentManager\\SegmentManagerInterface'] ?? $container->getSegmentManagerInterfaceService()), ($container->privates['CustomerManagementFrameworkBundle\\Targeting\\SegmentTracker'] ?? $container->load('getSegmentTrackerService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['Pimcore\\Targeting\\DataLoader'] ?? $container->getDataLoaderService()));
    }
}
