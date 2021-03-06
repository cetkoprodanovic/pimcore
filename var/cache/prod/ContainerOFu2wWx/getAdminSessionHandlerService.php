<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminSessionHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Session\Handler\AdminSessionHandler' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Session\Handler\AdminSessionHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Session/Handler/AdminSessionHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Session/Handler/AdminSessionHandler.php';

        $container->services['Pimcore\\Bundle\\AdminBundle\\Session\\Handler\\AdminSessionHandler'] = $instance = new \Pimcore\Bundle\AdminBundle\Session\Handler\AdminSessionHandler(($container->services['session'] ?? $container->load('getSessionService')));

        $a = ($container->services['monolog.logger.pimcore_admin.session'] ?? $container->load('getMonolog_Logger_PimcoreAdmin_SessionService'));

        $instance->setLogger($a);
        $instance->setLogger($a);

        return $instance;
    }
}
