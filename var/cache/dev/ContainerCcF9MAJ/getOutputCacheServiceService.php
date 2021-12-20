<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOutputCacheServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Bundle\DataHubBundle\Service\OutputCacheService' shared autowired service.
     *
     * @return \Pimcore\Bundle\DataHubBundle\Service\OutputCacheService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/Service/OutputCacheService.php';

        return $container->services['Pimcore\\Bundle\\DataHubBundle\\Service\\OutputCacheService'] = new \Pimcore\Bundle\DataHubBundle\Service\OutputCacheService($container, ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
