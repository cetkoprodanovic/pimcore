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

/* includes/macros.html.twig */
class __TwigTemplate_7e48b1fcf6a3d934794353505fb183b6c742e0d7027fb4caf1bc7084806f4750 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/macros.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/macros.html.twig"));

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_image_link($__image__ = null, $__editmode__ = false, $__linkThumbnail__ = "galleryLightbox", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "image" => $__image__,
            "editmode" => $__editmode__,
            "linkThumbnail" => $__linkThumbnail__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "image_link"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "image_link"));

            // line 2
            echo "
    ";
            // line 4
            echo "    ";
            $context["hasLink"] = ( !(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 4, $this->source); })()) &&  !twig_test_empty((isset($context["linkThumbnail"]) || array_key_exists("linkThumbnail", $context) ? $context["linkThumbnail"] : (function () { throw new RuntimeError('Variable "linkThumbnail" does not exist.', 4, $this->source); })())));
            // line 5
            echo "
    ";
            // line 6
            if ((isset($context["hasLink"]) || array_key_exists("hasLink", $context) ? $context["hasLink"] : (function () { throw new RuntimeError('Variable "hasLink" does not exist.', 6, $this->source); })())) {
                // line 7
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 7, $this->source); })()), "getThumbnail", [0 => (isset($context["linkThumbnail"]) || array_key_exists("linkThumbnail", $context) ? $context["linkThumbnail"] : (function () { throw new RuntimeError('Variable "linkThumbnail" does not exist.', 7, $this->source); })())], "method", false, false, false, 7), "html", null, true);
                echo "\" class=\"thumbnail\">
    ";
            }
            // line 9
            echo "
    ";
            // line 10
            echo (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 10, $this->source); })());
            echo "

    ";
            // line 12
            if ((isset($context["hasLink"]) || array_key_exists("hasLink", $context) ? $context["hasLink"] : (function () { throw new RuntimeError('Variable "hasLink" does not exist.', 12, $this->source); })())) {
                // line 13
                echo "        </a>
    ";
            }
            // line 15
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "includes/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 15,  99 => 13,  97 => 12,  92 => 10,  89 => 9,  83 => 7,  81 => 6,  78 => 5,  75 => 4,  72 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro image_link(image, editmode = false, linkThumbnail = 'galleryLightbox') %}

    {# @var image \\Pimcore\\Model\\Document\\Tag\\Image #}
    {% set hasLink = not editmode and linkThumbnail is not empty %}

    {% if hasLink %}
        <a href=\"{{ image.getThumbnail(linkThumbnail) }}\" class=\"thumbnail\">
    {% endif %}

    {{ image|raw }}

    {% if hasLink %}
        </a>
    {% endif %}

{% endmacro %}
", "includes/macros.html.twig", "/opt/bitnami/pimcore/templates/includes/macros.html.twig");
    }
}
