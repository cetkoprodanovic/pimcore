<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeliveryAddressFormTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\DeliveryAddressFormType' shared autowired service.
     *
     * @return \App\Form\DeliveryAddressFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/DeliveryAddressFormType.php';

        return $container->privates['App\\Form\\DeliveryAddressFormType'] = new \App\Form\DeliveryAddressFormType(($container->services['Pimcore\\Localization\\LocaleServiceInterface'] ?? $container->getLocaleServiceInterfaceService()));
    }
}
