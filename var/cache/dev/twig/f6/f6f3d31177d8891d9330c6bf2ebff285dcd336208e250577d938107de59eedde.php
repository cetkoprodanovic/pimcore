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

/* news/listing.html.twig */
class __TwigTemplate_3c3f346594cfb56e91497813c03541f64fe951d58c2b9ac719a119522fa991c0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news/listing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news/listing.html.twig"));

        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "news/listing.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <div id=\"main-content\" class=\"main-content\">

        ";
        // line 8
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 8, $this->source); })()), "getTitle", [], "method", false, false, false, 8))) {
            // line 9
            echo "            ";
            call_user_func_array($this->env->getFunction('pimcore_head_title')->getCallable(), [twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline"), "getData", [], "method", false, false, false, 9), "PREPEND"]);
            // line 10
            echo "        ";
        }
        // line 11
        echo "
        <div class=\"page-header\">
            <h1>";
        // line 13
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline", ["placeholder" => "Headline"]);
        echo "</h1>
        </div>

        ";
        // line 16
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "areablock", "content", ["allowed" => [0 => "headlines", 1 => "hero-teaser", 2 => "horizontal-line", 3 => "wysiwyg"]]);
        // line 25
        echo "

        <div class=\"row\">
            <ul class=\"list-unstyled\">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["news"]);
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 30
            echo "                    ";
            // line 31
            echo "                    ";
            $context["detailLink"] = $this->extensions['App\Twig\Extension\NewsExtension']->generateLink($context["news"]);
            // line 32
            echo "
                    <li class=\"media my-3\">
                        ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["news"], "gallery", [], "any", false, false, false, 34), "items", [], "any", false, false, false, 34)) {
                // line 35
                echo "                            ";
                $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["news"], "gallery", [], "any", false, false, false, 35), "current", [], "any", false, false, false, 35);
                // line 36
                echo "
                            ";
                // line 37
                if (twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 37, $this->source); })()), "image", [], "any", false, false, false, 37)) {
                    // line 38
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["detailLink"]) || array_key_exists("detailLink", $context) ? $context["detailLink"] : (function () { throw new RuntimeError('Variable "detailLink" does not exist.', 38, $this->source); })()), "html", null, true);
                    echo "\">
                                    ";
                    // line 39
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 39, $this->source); })()), "image", [], "any", false, false, false, 39), "thumbnail", [0 => "newsList"], "method", false, false, false, 39), "html", [0 => ["imgAttributes" => ["class" => "mr-3"]]], "method", false, false, false, 39);
                    echo "
                                </a>
                            ";
                }
                // line 42
                echo "                        ";
            }
            // line 43
            echo "
                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">
                                <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["detailLink"]) || array_key_exists("detailLink", $context) ? $context["detailLink"] : (function () { throw new RuntimeError('Variable "detailLink" does not exist.', 46, $this->source); })()), "html", null, true);
            echo "\" class=\"text-decoration-none text-dark\">
                                    ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "title", [], "any", false, false, false, 47), "html", null, true);
            echo "
                                </a>
                            </h5>
                            ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "shortText", [], "any", false, false, false, 50), "html", null, true);
            echo "
                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </ul>
        </div>

        <div class=\"pt-5\">

            ";
        // line 59
        $this->loadTemplate("includes/pagination.html.twig", "news/listing.html.twig", 59)->display($context);
        // line 60
        echo "
        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "news/listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 60,  168 => 59,  161 => 54,  151 => 50,  145 => 47,  141 => 46,  136 => 43,  133 => 42,  127 => 39,  122 => 38,  120 => 37,  117 => 36,  114 => 35,  112 => 34,  108 => 32,  105 => 31,  103 => 30,  99 => 29,  93 => 25,  91 => 16,  85 => 13,  81 => 11,  78 => 10,  75 => 9,  73 => 8,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/layout.html.twig' %}


{% block content %}

    <div id=\"main-content\" class=\"main-content\">

        {% if document.getTitle() is empty %}
            {% do pimcore_head_title(pimcore_input('headline').getData(), 'PREPEND') %}
        {% endif %}

        <div class=\"page-header\">
            <h1>{{ pimcore_input('headline', {'placeholder':'Headline'}) }}</h1>
        </div>

        {{
            pimcore_areablock('content', {
                'allowed': [
                    'headlines',
                    'hero-teaser',
                    'horizontal-line',
                    'wysiwyg'
                ]
            })
        }}

        <div class=\"row\">
            <ul class=\"list-unstyled\">
                {%  for news in news %}
                    {# @var news \\Pimcore\\Model\\DataObject\\News #}
                    {% set detailLink = app_news_detaillink(news) %}

                    <li class=\"media my-3\">
                        {% if news.gallery.items %}
                            {% set image = news.gallery.current %}

                            {% if image.image %}
                                <a href=\"{{ detailLink }}\">
                                    {{ image.image.thumbnail('newsList').html({imgAttributes: {class: 'mr-3'}}) | raw }}
                                </a>
                            {% endif %}
                        {% endif %}

                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">
                                <a href=\"{{ detailLink }}\" class=\"text-decoration-none text-dark\">
                                    {{ news.title }}
                                </a>
                            </h5>
                            {{ news.shortText }}
                        </div>
                    </li>
                {% endfor %}
            </ul>
        </div>

        <div class=\"pt-5\">

            {% include 'includes/pagination.html.twig' %}

        </div>

    </div>

{%  endblock %}
", "news/listing.html.twig", "/opt/bitnami/pimcore/templates/news/listing.html.twig");
    }
}
