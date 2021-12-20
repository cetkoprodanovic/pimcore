<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssignTargetGroupAndSegmentService extends App_KernelProdContainer
{
    /*
     * Gets the private 'CustomerManagementFrameworkBundle\Targeting\ActionHandler\AssignTargetGroupAndSegment' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Targeting\ActionHandler\AssignTargetGroupAndSegment
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/ActionHandler/AssignTargetGroup.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Targeting/ActionHandler/AssignTargetGroupAndSegment.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/GDPR/Consent/ConsentCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/GDPR/Consent/ConsentChecker.php';

        return $container->privates['CustomerManagementFrameworkBundle\\Targeting\\ActionHandler\\AssignTargetGroupAndSegment'] = new \CustomerManagementFrameworkBundle\Targeting\ActionHandler\AssignTargetGroupAndSegment(($container->privates['Pimcore\\Targeting\\ConditionMatcher'] ?? $container->getConditionMatcherService()), ($container->privates['Pimcore\\Targeting\\Storage\\CookieStorage'] ?? $container->getCookieStorageService()), ($container->services['CustomerManagementFrameworkBundle\\SegmentManager\\SegmentManagerInterface'] ?? $container->getSegmentManagerInterfaceService()), ($container->services['CustomerManagementFrameworkBundle\\ActivityManager\\DefaultActivityManager'] ?? $container->load('getDefaultActivityManagerService')), ($container->privates['Pimcore\\Targeting\\DataLoader'] ?? $container->getDataLoaderService()), ($container->privates['CustomerManagementFrameworkBundle\\GDPR\\Consent\\ConsentCheckerInterface'] ?? ($container->privates['CustomerManagementFrameworkBundle\\GDPR\\Consent\\ConsentCheckerInterface'] = new \CustomerManagementFrameworkBundle\GDPR\Consent\ConsentChecker())));
    }
}