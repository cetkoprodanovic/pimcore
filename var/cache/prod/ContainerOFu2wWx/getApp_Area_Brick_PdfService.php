<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApp_Area_Brick_PdfService extends App_KernelProdContainer
{
    /*
     * Gets the private 'app.area.brick.pdf' shared autowired service.
     *
     * @return \App\Document\Areabrick\Pdf
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Extension/Document/Areabrick/AreabrickInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Extension/Document/Areabrick/TemplateAreabrickInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Extension/Document/Areabrick/AbstractAreabrick.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Extension/Document/Areabrick/AbstractTemplateAreabrick.php';
        include_once \dirname(__DIR__, 4).'/src/Document/Areabrick/AbstractAreabrick.php';
        include_once \dirname(__DIR__, 4).'/src/Document/Areabrick/Pdf.php';

        $container->privates['app.area.brick.pdf'] = $instance = new \App\Document\Areabrick\Pdf();

        $instance->setContainer($container);
        $instance->setEditableRenderer(($container->services['Pimcore\\Templating\\Renderer\\EditableRenderer'] ?? $container->getEditableRendererService()));

        return $instance;
    }
}
