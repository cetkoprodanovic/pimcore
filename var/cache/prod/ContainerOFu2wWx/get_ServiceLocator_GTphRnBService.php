<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GTphRnBService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.GTphRnB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GTphRnB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'importDataExtractor' => ['privates', 'Pimcore\\Translation\\ImportDataExtractor\\ImportDataExtractorInterface', 'getImportDataExtractorInterfaceService', true],
        ], [
            'importDataExtractor' => 'Pimcore\\Translation\\ImportDataExtractor\\ImportDataExtractorInterface',
        ]);
    }
}
