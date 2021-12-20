<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQueryServiceInterfaceService extends App_KernelProdContainer
{
    /*
     * Gets the public 'CustomerManagementFrameworkBundle\SegmentAssignment\QueryService\QueryServiceInterface' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\SegmentAssignment\QueryService\DefaultQueryService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/SegmentAssignment/QueryService/QueryServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/SegmentAssignment/QueryService/DefaultQueryService.php';

        return $container->services['CustomerManagementFrameworkBundle\\SegmentAssignment\\QueryService\\QueryServiceInterface'] = new \CustomerManagementFrameworkBundle\SegmentAssignment\QueryService\DefaultQueryService('plugin_cmf_segment_assignment_index', ($container->services['CustomerManagementFrameworkBundle\\SegmentAssignment\\TypeMapper\\TypeMapperInterface'] ?? ($container->services['CustomerManagementFrameworkBundle\\SegmentAssignment\\TypeMapper\\TypeMapperInterface'] = new \CustomerManagementFrameworkBundle\SegmentAssignment\TypeMapper\TypeMapper())));
    }
}
