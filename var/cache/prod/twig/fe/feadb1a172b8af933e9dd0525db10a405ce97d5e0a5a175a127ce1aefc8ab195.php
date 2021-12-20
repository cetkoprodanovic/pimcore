<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* content/default.html.twig */
class __TwigTemplate_c3de2b014c0805f74813ddaad179f5c73a22cb2c4966abeb39fbb31dcd39f253 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "content/default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div id=\"main-content\" class=\"main-content\" >
        ";
        // line 5
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "getTitle", [], "method", false, false, false, 5))) {
            // line 6
            echo "            ";
            call_user_func_array($this->env->getFunction('pimcore_head_title')->getCallable(), [twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline"), "getData", [], "method", false, false, false, 6), "PREPEND"]);
            // line 7
            echo "        ";
        }
        // line 8
        echo "
        <div class=\"page-header\">
            <h1>";
        // line 10
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline", ["placeholder" => "Headline"]);
        echo "</h1>
        </div>

        ";
        // line 13
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "areablock", "content", ["allowed" => [0 => "blockquote", 1 => "embed", 2 => "featurette", 3 => "gallery-carousel", 4 => "gallery-folder", 5 => "gallery-single-images", 6 => "headlines", 7 => "horizontal-line", 8 => "icon-teaser-row", 9 => "image", 10 => "image-hotspot-marker", 11 => "image-metadata", 12 => "pdf", 13 => "product-grid", 14 => "product-teaser", 15 => "standard-teaser", 16 => "text-accordion", 17 => "time-slider-featurette", 18 => "video", 19 => "wysiwyg", 20 => "wysiwyg-with-images", 21 => "personalized-product-teaser"]]);
        // line 18
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "content/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  71 => 13,  65 => 10,  61 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "content/default.html.twig", "/opt/bitnami/pimcore/templates/content/default.html.twig");
    }
}
