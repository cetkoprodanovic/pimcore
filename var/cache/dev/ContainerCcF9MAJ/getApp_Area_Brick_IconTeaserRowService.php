<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApp_Area_Brick_IconTeaserRowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'app.area.brick.icon_teaser_row' shared autowired service.
     *
     * @return \App\Document\Areabrick\IconTeaserRow
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Extension/Document/Areabrick/AreabrickInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Extension/Document/Areabrick/TemplateAreabrickInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Extension/Document/Areabrick/AbstractAreabrick.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Extension/Document/Areabrick/AbstractTemplateAreabrick.php';
        include_once \dirname(__DIR__, 4).'/src/Document/Areabrick/AbstractAreabrick.php';
        include_once \dirname(__DIR__, 4).'/src/Document/Areabrick/IconTeaserRow.php';

        $container->privates['app.area.brick.icon_teaser_row'] = $instance = new \App\Document\Areabrick\IconTeaserRow();

        $instance->setContainer($container);
        $instance->setEditableRenderer(($container->services['Pimcore\\Templating\\Renderer\\EditableRenderer'] ?? $container->getEditableRendererService()));

        return $instance;
    }
}
