<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_LXCgBJtService extends App_KernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.lXCgBJt' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Messenger/Handler/SendNewsletterHandler.php';

        return $container->privates['.messenger.handler_descriptor.lXCgBJt'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Pimcore\Messenger\Handler\SendNewsletterHandler($container->parameters['pimcore.config'], ($container->services['pimcore.newsletter.address_source_adapter.factories'] ?? $container->load('getPimcore_Newsletter_AddressSourceAdapter_FactoriesService'))), []);
    }
}
