<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_Datahub_Graphql_DocumentelementmutationtypegeneratorDatatypeInputService extends App_KernelProdContainer
{
    /*
     * Gets the private 'pimcore.datahub.graphql.documentelementmutationtypegenerator_datatype_input' shared autowired service.
     *
     * @return \Pimcore\Bundle\DataHubBundle\GraphQL\DocumentElementMutationFieldConfigGenerator\Input
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/Traits/ServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/DocumentElementMutationFieldConfigGenerator/Base.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/DocumentElementMutationFieldConfigGenerator/Input.php';

        return $container->privates['pimcore.datahub.graphql.documentelementmutationtypegenerator_datatype_input'] = new \Pimcore\Bundle\DataHubBundle\GraphQL\DocumentElementMutationFieldConfigGenerator\Input(($container->services['Pimcore\\Bundle\\DataHubBundle\\GraphQL\\Service'] ?? $container->load('getService2Service')), ($container->privates['Pimcore\\Bundle\\DataHubBundle\\GraphQL\\DocumentElementInputProcessor\\Input'] ?? $container->load('getInputService')));
    }
}
