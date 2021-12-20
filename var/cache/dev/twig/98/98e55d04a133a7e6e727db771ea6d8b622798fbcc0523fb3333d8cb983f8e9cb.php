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
class __TwigTemplate_5460647b2309c33b2217b7e3e095f097790a7237c4433fe1ec6b229ad6778b85 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/default.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/default.html.twig"));

        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "content/default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div id=\"main-content\" class=\"main-content\" >
        ";
        // line 5
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 5, $this->source); })()), "getTitle", [], "method", false, false, false, 5))) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  91 => 18,  89 => 13,  83 => 10,  79 => 8,  76 => 7,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/layout.html.twig' %}

{% block content %}
    <div id=\"main-content\" class=\"main-content\" >
        {% if document.getTitle() is empty %}
            {% do pimcore_head_title(pimcore_input('headline').getData(), 'PREPEND') %}
        {% endif %}

        <div class=\"page-header\">
            <h1>{{ pimcore_input('headline', {'placeholder':'Headline'}) }}</h1>
        </div>

        {{ pimcore_areablock('content', {
            'allowed': ['blockquote', 'embed', 'featurette', 'gallery-carousel', 'gallery-folder',
                'gallery-single-images', 'headlines', 'horizontal-line', 'icon-teaser-row', 'image',
                'image-hotspot-marker', 'image-metadata', 'pdf', 'product-grid', 'product-teaser', 'standard-teaser', 'text-accordion',
                'time-slider-featurette', 'video', 'wysiwyg', 'wysiwyg-with-images', 'personalized-product-teaser']
        }) }}
    </div>
{% endblock %}", "content/default.html.twig", "/opt/bitnami/pimcore/templates/content/default.html.twig");
    }
}
