<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSessionService extends App_KernelProdContainer
{
    /*
     * Gets the public 'session' shared autowired service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     *
     * @deprecated Since symfony/framework-bundle 5.3: The "session" service and "SessionInterface" alias are deprecated, use "$requestStack->getSession()" instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/framework-bundle', '5.3', 'The "session" service and "SessionInterface" alias are deprecated, use "$requestStack->getSession()" instead.');

        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Attribute/AttributeBagInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Attribute/AttributeBag.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Attribute/NamespacedAttributeBag.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Session/SessionConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Session/SessionConfigurator.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Session/AdminSessionBagConfigurator.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Tools/SessionConfigurator.php';

        $container->services['session'] = $instance = new \Symfony\Component\HttpFoundation\Session\Session(($container->privates['session.storage.native'] ?? $container->load('getSession_Storage_NativeService')), new \Symfony\Component\HttpFoundation\Session\Attribute\NamespacedAttributeBag(), $container->load('getSession_FlashBagService'));

        $a = new \Pimcore\Session\SessionConfigurator();
        $a->addConfigurator(new \Pimcore\Bundle\AdminBundle\Session\AdminSessionBagConfigurator($container->parameters['pimcore.admin.session.attribute_bags']));
        $a->addConfigurator(($container->privates['Pimcore\\Bundle\\EcommerceFrameworkBundle\\Tools\\SessionConfigurator'] ?? ($container->privates['Pimcore\\Bundle\\EcommerceFrameworkBundle\\Tools\\SessionConfigurator'] = new \Pimcore\Bundle\EcommerceFrameworkBundle\Tools\SessionConfigurator())));

        $a->configure($instance);

        return $instance;
    }
}