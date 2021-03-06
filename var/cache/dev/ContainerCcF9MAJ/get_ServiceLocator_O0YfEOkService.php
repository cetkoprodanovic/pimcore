<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O0YfEOkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o0YfEOk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o0YfEOk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'object' => ['privates', '.errored..service_locator.o0YfEOk.Pimcore\\Model\\DataObject\\AbstractObject', NULL, 'Cannot autowire service ".service_locator.o0YfEOk": it references class "Pimcore\\Model\\DataObject\\AbstractObject" but no such service exists.'],
            'urlSlug' => ['privates', '.errored..service_locator.o0YfEOk.Pimcore\\Model\\DataObject\\Data\\UrlSlug', NULL, 'Cannot autowire service ".service_locator.o0YfEOk": it references class "Pimcore\\Model\\DataObject\\Data\\UrlSlug" but no such service exists.'],
        ], [
            'object' => 'Pimcore\\Model\\DataObject\\AbstractObject',
            'urlSlug' => 'Pimcore\\Model\\DataObject\\Data\\UrlSlug',
        ]);
    }
}
