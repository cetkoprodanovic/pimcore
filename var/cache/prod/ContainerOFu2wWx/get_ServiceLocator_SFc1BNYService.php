<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SFc1BNYService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.SFc1BNY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SFc1BNY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'blockStateStack' => ['services', 'Pimcore\\Document\\Editable\\Block\\BlockStateStack', 'getBlockStateStackService', false],
            'definitionCollector' => ['privates', 'Pimcore\\Document\\Editable\\EditmodeEditableDefinitionCollector', 'getEditmodeEditableDefinitionCollectorService', false],
            'editableRenderer' => ['services', 'Pimcore\\Templating\\Renderer\\EditableRenderer', 'getEditableRendererService', false],
            'twig' => ['services', '.container.private.twig', 'get_Container_Private_TwigService', false],
        ], [
            'blockStateStack' => 'Pimcore\\Document\\Editable\\Block\\BlockStateStack',
            'definitionCollector' => 'Pimcore\\Document\\Editable\\EditmodeEditableDefinitionCollector',
            'editableRenderer' => 'Pimcore\\Templating\\Renderer\\EditableRenderer',
            'twig' => '?',
        ]);
    }
}
