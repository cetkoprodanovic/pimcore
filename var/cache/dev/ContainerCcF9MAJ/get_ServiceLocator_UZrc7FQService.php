<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UZrc7FQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UZrc7FQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UZrc7FQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'event' => ['privates', '.errored..service_locator.UZrc7FQ.Symfony\\Component\\HttpKernel\\Event\\ControllerEvent', NULL, 'Cannot autowire service ".service_locator.UZrc7FQ": it references class "Symfony\\Component\\HttpKernel\\Event\\ControllerEvent" but no such service exists.'],
        ], [
            'event' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent',
        ]);
    }
}
