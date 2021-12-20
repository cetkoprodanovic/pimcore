<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Q83GuyeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Q83Guye' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Q83Guye'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'importDataExtractor' => ['privates', 'Pimcore\\Translation\\ImportDataExtractor\\ImportDataExtractorInterface', 'getImportDataExtractorInterfaceService', true],
            'importerService' => ['privates', 'Pimcore\\Translation\\ImporterService\\ImporterServiceInterface', 'getImporterServiceInterfaceService', true],
        ], [
            'importDataExtractor' => 'Pimcore\\Translation\\ImportDataExtractor\\ImportDataExtractorInterface',
            'importerService' => 'Pimcore\\Translation\\ImporterService\\ImporterServiceInterface',
        ]);
    }
}
