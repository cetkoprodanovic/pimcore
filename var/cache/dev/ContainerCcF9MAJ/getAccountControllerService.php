<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAccountControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AccountController' shared autowired service.
     *
     * @return \App\Controller\AccountController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/FrontendController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AccountController.php';

        $container->services['App\\Controller\\AccountController'] = $instance = new \App\Controller\AccountController();

        $instance->setContainer(($container->privates['.service_locator..NCYVle'] ?? $container->load('get_ServiceLocator__NCYVleService'))->withContext('App\\Controller\\AccountController', $container));

        return $instance;
    }
}
