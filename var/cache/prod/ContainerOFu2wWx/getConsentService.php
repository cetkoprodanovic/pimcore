<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsentService extends App_KernelProdContainer
{
    /*
     * Gets the public 'Pimcore\DataObject\BlockDataMarshaller\Consent' shared autowired service.
     *
     * @return \Pimcore\DataObject\BlockDataMarshaller\Consent
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/BlockDataMarshaller/Consent.php';

        return $container->services['Pimcore\\DataObject\\BlockDataMarshaller\\Consent'] = new \Pimcore\DataObject\BlockDataMarshaller\Consent();
    }
}
