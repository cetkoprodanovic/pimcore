<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotesSubscriberService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Pimcore\Workflow\EventSubscriber\NotesSubscriber' shared autowired service.
     *
     * @return \Pimcore\Workflow\EventSubscriber\NotesSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Workflow/EventSubscriber/NotesSubscriber.php';

        return $container->privates['Pimcore\\Workflow\\EventSubscriber\\NotesSubscriber'] = new \Pimcore\Workflow\EventSubscriber\NotesSubscriber(($container->services['Symfony\\Contracts\\Translation\\TranslatorInterface'] ?? $container->getTranslatorInterfaceService()));
    }
}
