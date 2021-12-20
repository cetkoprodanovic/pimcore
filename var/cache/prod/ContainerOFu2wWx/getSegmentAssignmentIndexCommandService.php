<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSegmentAssignmentIndexCommandService extends App_KernelProdContainer
{
    /*
     * Gets the public 'console.command.public_alias.CustomerManagementFrameworkBundle\Command\SegmentAssignmentIndexCommand' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Command\SegmentAssignmentIndexCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Command/SegmentAssignmentIndexCommand.php';

        $container->services['console.command.public_alias.CustomerManagementFrameworkBundle\\Command\\SegmentAssignmentIndexCommand'] = $instance = new \CustomerManagementFrameworkBundle\Command\SegmentAssignmentIndexCommand();

        $instance->setLogger(($container->services['monolog.logger.cmf'] ?? $container->load('getMonolog_Logger_CmfService')));
        $instance->setIndexer(($container->services['CustomerManagementFrameworkBundle\\SegmentAssignment\\Indexer\\IndexerInterface'] ?? $container->load('getIndexerInterfaceService')));

        return $instance;
    }
}
