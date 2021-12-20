<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNewsletterControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\Document\NewsletterController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\Document\NewsletterController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/DoubleAuthenticationControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/AdminControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/AdminController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/KernelControllerEventInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/Traits/ApplySchedulerDataTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/Traits/AdminStyleTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/Traits/DocumentTreeConfigTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/Admin/Document/DocumentControllerBase.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Traits/ElementEditLockHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/Admin/Document/NewsletterController.php';

        $container->services['Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\Document\\NewsletterController'] = $instance = new \Pimcore\Bundle\AdminBundle\Controller\Admin\Document\NewsletterController();

        $instance->setContainer(($container->privates['.service_locator.487RsJm'] ?? $container->load('get_ServiceLocator_487RsJmService'))->withContext('Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\Document\\NewsletterController', $container));

        return $instance;
    }
}
