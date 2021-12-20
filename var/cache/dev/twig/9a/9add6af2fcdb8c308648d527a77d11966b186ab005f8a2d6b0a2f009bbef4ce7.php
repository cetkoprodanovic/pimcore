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

/* includes/hero-carousel.html.twig */
class __TwigTemplate_2a36586d435a56381845888c459f7883ea02deccc76f1539e358c45acb0991f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/hero-carousel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/hero-carousel.html.twig"));

        // line 1
        $context["carouselSlides"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "select", "carouselSlides", ["width" => 70, "reload" => true, "store" => [0 => [0 => 1, 1 => 1], 1 => [0 => 2, 1 => 2], 2 => [0 => 3, 1 => 3], 3 => [0 => 4, 1 => 4], 4 => [0 => 5, 1 => 5]], "class" => "align-middle"]);
        // line 7
        $context["count"] = twig_get_attribute($this->env, $this->source, (isset($context["carouselSlides"]) || array_key_exists("carouselSlides", $context) ? $context["carouselSlides"] : (function () { throw new RuntimeError('Variable "carouselSlides" does not exist.', 7, $this->source); })()), "getData", [], "method", false, false, false, 7);
        // line 8
        if ((twig_test_empty((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 8, $this->source); })())) || ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 8, $this->source); })()) == 0))) {
            // line 9
            echo "    ";
            $context["count"] = 1;
        }
        // line 11
        echo "<section id=\"heroCarousel\" class=\"carousel slide\" data-ride=\"carousel\" ";
        echo (((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 11, $this->source); })())) ? ("data-interval=\"false\"") : (""));
        echo ">
    ";
        // line 12
        if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 12, $this->source); })()) > 1)) {
            // line 13
            echo "        <ol class=\"carousel-indicators\">
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 14, $this->source); })()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 15
                echo "                <li data-target=\"#heroCarousel\" data-slide-to=\"";
                echo twig_escape_filter($this->env, $context["j"], "html", null, true);
                echo "\" class=\"";
                echo ((($context["j"] == 0)) ? ("active") : (""));
                echo "\"></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </ol>
    ";
        }
        // line 19
        echo "
    <div class=\"carousel-inner\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 21, $this->source); })()) - 1)));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 22
            echo "        <div class=\"carousel-item position-relative ";
            echo twig_escape_filter($this->env, ("heroCarousel-" . $context["i"]), "html", null, true);
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 22)) ? ("active") : (""));
            echo "\">
            ";
            // line 23
            $context["cImage"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", ("cImage_" . $context["i"]), ["thumbnail" => "portalCarousel", "hidetext" => true, "title" => "Drag Image Here", "imgAttributes" => ["class" => "d-block w-100"], "dropClass" => ("portal-slide-" . (            // line 28
$context["i"] + 1))]);
            // line 30
            echo "
            ";
            // line 31
            echo (isset($context["cImage"]) || array_key_exists("cImage", $context) ? $context["cImage"] : (function () { throw new RuntimeError('Variable "cImage" does not exist.', 31, $this->source); })());
            echo "
            <div class=\"carousel-caption d-block\">
                ";
            // line 33
            if (($context["i"] == 0)) {
                // line 34
                echo "                    <h1>";
                echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", ("cHeadline_" . $context["i"]), ["placeholder" => "Headline"]);
                echo "</h1>
                ";
            } else {
                // line 36
                echo "                    <div class=\"display-1\">";
                echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", ("cHeadline_" . $context["i"]), ["placeholder" => "Headline"]);
                echo "</div>
                ";
            }
            // line 38
            echo "
                <p class=\"hero-text\">";
            // line 39
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "textarea", ("cText_" . $context["i"]), ["placeholder" => "Summary"]);
            echo "</p>
                <p>";
            // line 40
            $context["cLink"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", ("cLink_" . $context["i"]), ["class" => "btn btn-lg btn-primary"]);
            // line 43
            echo "                    ";
            echo (isset($context["cLink"]) || array_key_exists("cLink", $context) ? $context["cLink"] : (function () { throw new RuntimeError('Variable "cLink" does not exist.', 43, $this->source); })());
            echo "
                </p>
            </div>
        </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </div>
    ";
        // line 49
        if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 49, $this->source); })()) > 1)) {
            // line 50
            echo "        <a class=\"carousel-control carousel-control-prev\" href=\"#heroCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control carousel-control-next\" href=\"#heroCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    ";
        }
        // line 59
        echo "    ";
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 59, $this->source); })())) {
            // line 60
            echo "
        <div class=\"container pt-2 pb-5\">
            <span class=\"editmode-label align-middle d-inline-block\">Number of Slides:</span> ";
            // line 62
            echo (isset($context["carouselSlides"]) || array_key_exists("carouselSlides", $context) ? $context["carouselSlides"] : (function () { throw new RuntimeError('Variable "carouselSlides" does not exist.', 62, $this->source); })());
            echo "
        </div>

    ";
        }
        // line 66
        echo "</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/hero-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 66,  187 => 62,  183 => 60,  180 => 59,  169 => 50,  167 => 49,  164 => 48,  144 => 43,  142 => 40,  138 => 39,  135 => 38,  129 => 36,  123 => 34,  121 => 33,  116 => 31,  113 => 30,  111 => 28,  110 => 23,  103 => 22,  86 => 21,  82 => 19,  78 => 17,  67 => 15,  63 => 14,  60 => 13,  58 => 12,  53 => 11,  49 => 9,  47 => 8,  45 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set carouselSlides = pimcore_select('carouselSlides', {
    width: 70,
    reload: true,
    store: [[1, 1], [2, 2], [3, 3], [4, 4], [5, 5]],
    class: 'align-middle'
}) %}
{% set count = carouselSlides.getData() %}
{% if count is empty or count == 0 %}
    {% set count = 1 %}
{% endif %}
<section id=\"heroCarousel\" class=\"carousel slide\" data-ride=\"carousel\" {{ editmode ? 'data-interval=\"false\"' }}>
    {% if count > 1 %}
        <ol class=\"carousel-indicators\">
            {% for j in 0..(count - 1) %}
                <li data-target=\"#heroCarousel\" data-slide-to=\"{{ j }}\" class=\"{{ j == 0 ? 'active':'' }}\"></li>
            {% endfor %}
        </ol>
    {% endif %}

    <div class=\"carousel-inner\">
        {% for i in 0..(count - 1) %}
        <div class=\"carousel-item position-relative {{ 'heroCarousel-' ~ i }} {{ loop.first ? 'active' }}\">
            {% set cImage = pimcore_image('cImage_' ~ i, {
                thumbnail: 'portalCarousel',
                hidetext: true,
                title: 'Drag Image Here',
                imgAttributes: {class: 'd-block w-100'},
                dropClass: 'portal-slide-' ~ (i + 1)
            }) %}

            {{ cImage|raw }}
            <div class=\"carousel-caption d-block\">
                {% if(i == 0) %}
                    <h1>{{ pimcore_input('cHeadline_' ~ i,{'placeholder':'Headline'}) }}</h1>
                {% else %}
                    <div class=\"display-1\">{{ pimcore_input('cHeadline_' ~ i,{'placeholder':'Headline'}) }}</div>
                {% endif %}

                <p class=\"hero-text\">{{ pimcore_textarea('cText_' ~ i,{'placeholder':'Summary'}) }}</p>
                <p>{% set cLink = pimcore_link('cLink_' ~ i, {
                        'class': 'btn btn-lg btn-primary'
                    }) %}
                    {{ cLink|raw }}
                </p>
            </div>
        </div>
        {% endfor %}
    </div>
    {% if count > 1 %}
        <a class=\"carousel-control carousel-control-prev\" href=\"#heroCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control carousel-control-next\" href=\"#heroCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    {% endif %}
    {% if editmode %}

        <div class=\"container pt-2 pb-5\">
            <span class=\"editmode-label align-middle d-inline-block\">Number of Slides:</span> {{ carouselSlides|raw }}
        </div>

    {% endif %}
</section>", "includes/hero-carousel.html.twig", "/opt/bitnami/pimcore/templates/includes/hero-carousel.html.twig");
    }
}
