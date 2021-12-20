<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestaSitemap_ControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'presta_sitemap.controller' shared service.
     *
     * @return \Presta\SitemapBundle\Controller\SitemapController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/presta/sitemap-bundle/Controller/SitemapController.php';

        return $container->services['presta_sitemap.controller'] = new \Presta\SitemapBundle\Controller\SitemapController(($container->services['presta_sitemap.generator'] ?? $container->load('getPrestaSitemap_GeneratorService')), 3600);
    }
}