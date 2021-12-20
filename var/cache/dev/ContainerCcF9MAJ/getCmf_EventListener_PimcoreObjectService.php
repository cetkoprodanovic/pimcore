<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCmf_EventListener_PimcoreObjectService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cmf.event_listener.pimcore_object' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Event\PimcoreObjectEventListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Event/PimcoreObjectEventListener.php';

        return $container->services['cmf.event_listener.pimcore_object'] = new \CustomerManagementFrameworkBundle\Event\PimcoreObjectEventListener(($container->services['CustomerManagementFrameworkBundle\\CustomerSaveManager\\CustomerSaveManagerInterface'] ?? $container->getCustomerSaveManagerInterfaceService()));
    }
}
