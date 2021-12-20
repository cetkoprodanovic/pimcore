<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCmf_EventListener_MaintenanceService extends App_KernelProdContainer
{
    /*
     * Gets the public 'cmf.event_listener.maintenance' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Event\MaintenanceEventListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Event/MaintenanceEventListener.php';

        return $container->services['cmf.event_listener.maintenance'] = new \CustomerManagementFrameworkBundle\Event\MaintenanceEventListener();
    }
}
