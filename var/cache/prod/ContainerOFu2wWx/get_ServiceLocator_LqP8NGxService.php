<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LqP8NGxService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.LqP8NGx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LqP8NGx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'breadcrumbHelperService' => ['privates', 'App\\Website\\Navigation\\BreadcrumbHelperService', 'getBreadcrumbHelperServiceService', true],
            'ecommerceFactory' => ['services', 'pimcore_ecommerce.factory', 'getPimcoreEcommerce_FactoryService', true],
            'headTitleHelper' => ['privates', 'Pimcore\\Twig\\Extension\\Templating\\HeadTitle', 'getHeadTitleService', false],
            'listHelper' => ['privates', 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\FilterService\\ListHelper', 'getListHelperService', true],
            'paginator' => ['services', 'Knp\\Component\\Pager\\PaginatorInterface', 'getPaginatorInterfaceService', false],
            'segmentTrackingHelperService' => ['privates', 'App\\Services\\SegmentTrackingHelperService', 'getSegmentTrackingHelperServiceService', true],
        ], [
            'breadcrumbHelperService' => 'App\\Website\\Navigation\\BreadcrumbHelperService',
            'ecommerceFactory' => '?',
            'headTitleHelper' => 'Pimcore\\Twig\\Extension\\Templating\\HeadTitle',
            'listHelper' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\FilterService\\ListHelper',
            'paginator' => 'Knp\\Component\\Pager\\PaginatorInterface',
            'segmentTrackingHelperService' => 'App\\Services\\SegmentTrackingHelperService',
        ]);
    }
}
