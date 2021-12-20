<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z4vVS_DService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.z4vVS.d' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.z4vVS.d'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'Knp\\Component\\Pager\\PaginatorInterface', 'getPaginatorInterfaceService', false],
        ], [
            'paginator' => 'Knp\\Component\\Pager\\PaginatorInterface',
        ]);
    }
}
