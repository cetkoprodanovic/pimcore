<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_Datahub_Graphql_DataobjectmutationtypegeneratorDatatypeFirstnameService extends App_KernelProdContainer
{
    /*
     * Gets the private 'pimcore.datahub.graphql.dataobjectmutationtypegenerator_datatype_firstname' shared autowired service.
     *
     * @return \Pimcore\Bundle\DataHubBundle\GraphQL\DataObjectMutationFieldConfigGenerator\Base
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/DataObjectMutationFieldConfigGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/Traits/ServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/DataObjectMutationFieldConfigGenerator/Base.php';

        return $container->privates['pimcore.datahub.graphql.dataobjectmutationtypegenerator_datatype_firstname'] = new \Pimcore\Bundle\DataHubBundle\GraphQL\DataObjectMutationFieldConfigGenerator\Base(($container->services['Pimcore\\Bundle\\DataHubBundle\\GraphQL\\Service'] ?? $container->load('getService2Service')));
    }
}
