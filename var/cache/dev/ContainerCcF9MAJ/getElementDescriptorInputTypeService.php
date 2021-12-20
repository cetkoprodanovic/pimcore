<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getElementDescriptorInputTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\DataHubBundle\GraphQL\DataObjectType\ElementDescriptorInputType' shared autowired service.
     *
     * @return \Pimcore\Bundle\DataHubBundle\GraphQL\DataObjectType\ElementDescriptorInputType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Type/Definition/Type.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Type/Definition/InputType.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Type/Definition/NullableType.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Type/Definition/NamedType.php';
        include_once \dirname(__DIR__, 4).'/vendor/webonyx/graphql-php/src/Type/Definition/InputObjectType.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/Traits/ServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/DataObjectType/ElementDescriptorInputType.php';

        return $container->privates['Pimcore\\Bundle\\DataHubBundle\\GraphQL\\DataObjectType\\ElementDescriptorInputType'] = new \Pimcore\Bundle\DataHubBundle\GraphQL\DataObjectType\ElementDescriptorInputType(($container->services['Pimcore\\Bundle\\DataHubBundle\\GraphQL\\Service'] ?? $container->load('getService2Service')));
    }
}
