<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotificationEmailServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Workflow\Notification\NotificationEmailService' shared autowired service.
     *
     * @return \Pimcore\Workflow\Notification\NotificationEmailService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Workflow/Notification/AbstractNotificationService.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Workflow/Notification/NotificationEmailService.php';

        return $container->services['Pimcore\\Workflow\\Notification\\NotificationEmailService'] = new \Pimcore\Workflow\Notification\NotificationEmailService(($container->services['pimcore.templating.engine.delegating'] ?? $container->getPimcore_Templating_Engine_DelegatingService()), ($container->services['router'] ?? $container->getRouterService()), ($container->services['Symfony\\Contracts\\Translation\\TranslatorInterface'] ?? $container->getTranslatorInterfaceService()));
    }
}
