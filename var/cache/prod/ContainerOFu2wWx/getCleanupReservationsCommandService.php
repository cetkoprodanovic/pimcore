<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCleanupReservationsCommandService extends App_KernelProdContainer
{
    /*
     * Gets the public 'console.command.public_alias.Pimcore\Bundle\EcommerceFrameworkBundle\Command\Voucher\CleanupReservationsCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\EcommerceFrameworkBundle\Command\Voucher\CleanupReservationsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Command/Voucher/CleanupReservationsCommand.php';

        return $container->services['console.command.public_alias.Pimcore\\Bundle\\EcommerceFrameworkBundle\\Command\\Voucher\\CleanupReservationsCommand'] = new \Pimcore\Bundle\EcommerceFrameworkBundle\Command\Voucher\CleanupReservationsCommand();
    }
}
