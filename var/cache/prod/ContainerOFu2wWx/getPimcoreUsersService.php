<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcoreUsersService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Pimcore\Bundle\AdminBundle\GDPR\DataProvider\PimcoreUsers' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\GDPR\DataProvider\PimcoreUsers
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/GDPR/DataProvider/DataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/GDPR/DataProvider/PimcoreUsers.php';

        return $container->privates['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\PimcoreUsers'] = new \Pimcore\Bundle\AdminBundle\GDPR\DataProvider\PimcoreUsers(($container->services['Pimcore\\Bundle\\AdminBundle\\Security\\User\\TokenStorageUserResolver'] ?? $container->getTokenStorageUserResolverService()));
    }
}