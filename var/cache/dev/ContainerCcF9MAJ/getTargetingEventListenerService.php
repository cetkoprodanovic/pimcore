<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTargetingEventListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'CustomerManagementFrameworkBundle\Event\TargetingEventListener' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Event\TargetingEventListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Event/TargetingEventListener.php';

        return $container->services['CustomerManagementFrameworkBundle\\Event\\TargetingEventListener'] = new \CustomerManagementFrameworkBundle\Event\TargetingEventListener(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['Pimcore\\Targeting\\DataLoader'] ?? $container->getDataLoaderService()));
    }
}
