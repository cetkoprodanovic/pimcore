<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9OP9eRaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9OP9eRa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9OP9eRa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'workflowManager' => ['services', 'Pimcore\\Workflow\\Manager', 'getManagerService', true],
            'workflowRegistry' => ['privates', 'workflow.registry', 'getWorkflow_RegistryService', true],
        ], [
            'workflowManager' => 'Pimcore\\Workflow\\Manager',
            'workflowRegistry' => '?',
        ]);
    }
}
