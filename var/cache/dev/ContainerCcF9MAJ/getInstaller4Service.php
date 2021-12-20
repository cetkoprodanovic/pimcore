<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInstaller4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Bundle\EcommerceFrameworkBundle\Unzer\Installer' shared autowired service.
     *
     * @return \Pimcore\Bundle\EcommerceFrameworkBundle\Unzer\Installer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Extension/Bundle/Installer/InstallerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Extension/Bundle/Installer/AbstractInstaller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Tools/PaymentProviderInstaller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/payment-provider-unzer/src/Unzer/Installer.php';

        return $container->services['Pimcore\\Bundle\\EcommerceFrameworkBundle\\Unzer\\Installer'] = new \Pimcore\Bundle\EcommerceFrameworkBundle\Unzer\Installer();
    }
}
