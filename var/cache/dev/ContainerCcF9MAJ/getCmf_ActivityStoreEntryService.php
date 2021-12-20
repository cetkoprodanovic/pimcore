<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCmf_ActivityStoreEntryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cmf.activity_store_entry' autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Model\ActivityStoreEntry\DefaultActivityStoreEntry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Model/ActivityStoreEntry/ActivityStoreEntryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Model/ActivityStoreEntry/DefaultActivityStoreEntry.php';

        $container->factories['cmf.activity_store_entry'] = function () use ($container) {
            return new \CustomerManagementFrameworkBundle\Model\ActivityStoreEntry\DefaultActivityStoreEntry();
        };

        return $container->factories['cmf.activity_store_entry']();
    }
}
