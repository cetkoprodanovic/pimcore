<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2PVHApOService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.2PVHApO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2PVHApO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'actionRenderer' => ['privates', 'Pimcore\\Templating\\Renderer\\ActionRenderer', 'getActionRendererService', false],
            'editableHandler' => ['services', 'Pimcore\\Document\\Editable\\EditableHandler', 'getEditableHandlerService', true],
            'localeService' => ['services', 'Pimcore\\Localization\\LocaleServiceInterface', 'getLocaleServiceInterfaceService', false],
        ], [
            'actionRenderer' => 'Pimcore\\Templating\\Renderer\\ActionRenderer',
            'editableHandler' => 'Pimcore\\Document\\Editable\\EditableHandler',
            'localeService' => 'Pimcore\\Localization\\LocaleServiceInterface',
        ]);
    }
}
