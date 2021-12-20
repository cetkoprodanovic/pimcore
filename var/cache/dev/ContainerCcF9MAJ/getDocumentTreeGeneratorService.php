<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDocumentTreeGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Sitemap\Document\DocumentTreeGenerator' shared autowired service.
     *
     * @return \Pimcore\Sitemap\Document\DocumentTreeGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Sitemap/GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Sitemap/Element/AbstractElementGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Sitemap/Document/DocumentTreeGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Sitemap/UrlGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Sitemap/Document/DocumentUrlGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Sitemap/Document/DocumentUrlGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Sitemap/UrlGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Sitemap/Element/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Sitemap/Element/Filter/PublishedFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Sitemap/Element/Filter/PropertiesFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Sitemap/Document/Filter/DocumentTypeFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Sitemap/Document/Filter/SiteRootFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Sitemap/Element/ProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Sitemap/Element/Processor/ModificationDateProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Sitemap/Element/Processor/PropertiesProcessor.php';

        return $container->privates['Pimcore\\Sitemap\\Document\\DocumentTreeGenerator'] = new \Pimcore\Sitemap\Document\DocumentTreeGenerator(new \Pimcore\Sitemap\Document\DocumentUrlGenerator(new \Pimcore\Sitemap\UrlGenerator(($container->services['pimcore.routing.router.request_context'] ?? $container->getPimcore_Routing_Router_RequestContextService()))), [0 => new \Pimcore\Sitemap\Element\Filter\PublishedFilter(), 1 => new \Pimcore\Sitemap\Element\Filter\PropertiesFilter(), 2 => new \Pimcore\Sitemap\Document\Filter\DocumentTypeFilter(), 3 => new \Pimcore\Sitemap\Document\Filter\SiteRootFilter()], [0 => new \Pimcore\Sitemap\Element\Processor\ModificationDateProcessor(), 1 => new \Pimcore\Sitemap\Element\Processor\PropertiesProcessor()]);
    }
}
