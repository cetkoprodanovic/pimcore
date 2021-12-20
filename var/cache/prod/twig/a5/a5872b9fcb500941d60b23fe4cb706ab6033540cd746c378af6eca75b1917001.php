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

/* content/portal.html.twig */
class __TwigTemplate_333f9aae1ef5112507a726275d5eea723debe0b68c9d5ce2ce78a76b8a84bd90 extends Template
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
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "content/portal.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "includes/hero-carousel.html.twig");
        echo "
    <div id=\"portal\" class=\"portal-page\">
        ";
        // line 7
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "areablock", "content", ["allowed" => [0 => "hero-teaser", 1 => "standard-teaser", 2 => "hero-grid", 3 => "product-teaser", 4 => "gallery-carousel", 5 => "horizontal-line", 6 => "image", 7 => "image-hotspot-marker", 8 => "video", 9 => "personalized-product-teaser"]]);
        // line 9
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "content/portal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 9,  58 => 7,  52 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "content/portal.html.twig", "/opt/bitnami/pimcore/templates/content/portal.html.twig");
    }
}
