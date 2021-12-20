<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUninstallCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\Command\Bundle\UninstallCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\Command\Bundle\UninstallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/Command/Bundle/AbstractBundleCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/Command/Bundle/UninstallCommand.php';

        $container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\UninstallCommand'] = $instance = new \Pimcore\Bundle\CoreBundle\Command\Bundle\UninstallCommand(($container->services['Pimcore\\Extension\\Bundle\\PimcoreBundleManager'] ?? $container->getPimcoreBundleManagerService()), ($container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\Helper\\PostStateChange'] ?? $container->load('getPostStateChangeService')));

        $instance->setName('pimcore:bundle:uninstall');

        return $instance;
    }
}
