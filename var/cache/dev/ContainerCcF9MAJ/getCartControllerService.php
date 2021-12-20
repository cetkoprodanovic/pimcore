<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CartController' shared autowired service.
     *
     * @return \App\Controller\CartController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/FrontendController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CartController.php';

        $container->services['App\\Controller\\CartController'] = $instance = new \App\Controller\CartController(($container->services['pimcore_ecommerce.factory'] ?? $container->load('getPimcoreEcommerce_FactoryService')));

        $instance->setContainer(($container->privates['.service_locator..NCYVle'] ?? $container->load('get_ServiceLocator__NCYVleService'))->withContext('App\\Controller\\CartController', $container));

        return $instance;
    }
}
