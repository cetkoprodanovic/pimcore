<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomerSaveValidatorInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'CustomerManagementFrameworkBundle\CustomerSaveValidator\CustomerSaveValidatorInterface' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\CustomerSaveValidator\DefaultCustomerSaveValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/CustomerSaveValidator/CustomerSaveValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/CustomerSaveValidator/DefaultCustomerSaveValidator.php';

        return $container->services['CustomerManagementFrameworkBundle\\CustomerSaveValidator\\CustomerSaveValidatorInterface'] = new \CustomerManagementFrameworkBundle\CustomerSaveValidator\DefaultCustomerSaveValidator($container->parameters['pimcore_customer_management_framework.customer_save_validator.requiredFields'], true);
    }
}