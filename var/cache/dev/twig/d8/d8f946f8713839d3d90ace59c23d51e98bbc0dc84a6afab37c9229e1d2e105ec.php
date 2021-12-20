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

/* areas/hero-grid/view.html.twig */
class __TwigTemplate_0505376627024862034768f6ffa05165bf78212c61c2c53aaa45093f91698150 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/hero-grid/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/hero-grid/view.html.twig"));

        // line 1
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "<div class=\"alert alert-secondary\">
    ";
            // line 3
            echo "Please use same aspect ratio images for best result.";
            echo "
</div>
";
        }
        // line 6
        $context["id"] = call_user_func_array($this->env->getFunction('uniqid')->getCallable(), ["heroGrid-"]);
        // line 7
        echo "<section id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\" class=\"section grid-gallery no-gutters ";
        echo (( !(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 7, $this->source); })())) ? ("row") : (""));
        echo "\">

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->getBlockIterator($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "block", "heroGridBlock", ["class" => "row m-0"])));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 10
            echo "    <div class=\"grid-gallery-item grid-gallery-item-";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo " ";
            echo (( !(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 10, $this->source); })())) ? ("col-md-6") : (""));
            echo " zoom-outer\">

        ";
            // line 12
            if ( !(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 12, $this->source); })())) {
                // line 13
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", ("heroGridLink" . $context["i"])), "href", [], "any", false, false, false, 13), "html", null, true);
                echo "\">
        ";
            }
            // line 15
            echo "            <span  class=\"tint ";
            echo (( !(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 15, $this->source); })())) ? ("zoom-inner") : (""));
            echo "\">
                ";
            // line 16
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", ("heroGridImage" .             // line 17
$context["i"]), ["dropClass" => ((("grid-gallery-item-" .             // line 18
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 18, $this->source); })())) . "-") . $context["i"]), "reload" => true, "hidetext" => true, "thumbnail" => "heroGrid", "imgAttributes" => ["class" => "img-fluid"], "title" => "Drag background image here"]);
            // line 25
            echo "
            </span>
             <span class=\"grid-gallery-item-text\">
                <h2 class=\"text-uppercase\">";
            // line 28
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", ("heroGridHeadline" . $context["i"]), ["placeholder" => "Headline"]);
            echo "</h2>
                <h5>";
            // line 29
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", ("heroGridSubheadline" . $context["i"]), ["placeholder" => "Sub Headline"]);
            echo "</h5>
                ";
            // line 30
            if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 30, $this->source); })())) {
                // line 31
                echo "                    <div class=\"mx-auto\">";
                echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", ("heroGridLink" . $context["i"]));
                echo "</div>
                ";
            }
            // line 33
            echo "            </span>
        ";
            // line 34
            if ( !(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 34, $this->source); })())) {
                // line 35
                echo "            </a>
        ";
            }
            // line 37
            echo "
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "areas/hero-grid/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 41,  125 => 37,  121 => 35,  119 => 34,  116 => 33,  110 => 31,  108 => 30,  104 => 29,  100 => 28,  95 => 25,  93 => 18,  92 => 17,  91 => 16,  86 => 15,  80 => 13,  78 => 12,  68 => 10,  64 => 9,  56 => 7,  54 => 6,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if  editmode %}
<div class=\"alert alert-secondary\">
    {{ 'Please use same aspect ratio images for best result.' }}
</div>
{% endif %}
{% set id = uniqid('heroGrid-') %}
<section id=\"{{ id }}\" class=\"section grid-gallery no-gutters {{ (not editmode?'row':'') }}\">

{% for i in pimcore_iterate_block(pimcore_block('heroGridBlock', {class:'row m-0'})) %}
    <div class=\"grid-gallery-item grid-gallery-item-{{ id }}-{{ i }} {{ (not editmode?'col-md-6':'') }} zoom-outer\">

        {% if not editmode %}
            <a href=\"{{ pimcore_link('heroGridLink' ~ i).href }}\">
        {% endif %}
            <span  class=\"tint {{ (not editmode?'zoom-inner':'') }}\">
                {{
                    pimcore_image('heroGridImage' ~ i, {
                        dropClass: 'grid-gallery-item-' ~ id ~ '-' ~ i,
                        reload: true,
                        hidetext: true,
                        thumbnail: 'heroGrid',
                        imgAttributes: {class: 'img-fluid'},
                        title: 'Drag background image here'
                    })
                }}
            </span>
             <span class=\"grid-gallery-item-text\">
                <h2 class=\"text-uppercase\">{{ pimcore_input('heroGridHeadline' ~ i,{placeholder: 'Headline'}) }}</h2>
                <h5>{{ pimcore_input('heroGridSubheadline' ~ i,{placeholder: 'Sub Headline'}) }}</h5>
                {% if editmode %}
                    <div class=\"mx-auto\">{{ pimcore_link('heroGridLink' ~ i) }}</div>
                {% endif %}
            </span>
        {% if not editmode %}
            </a>
        {% endif %}

    </div>

{% endfor %}

</section>
", "areas/hero-grid/view.html.twig", "/opt/bitnami/pimcore/templates/areas/hero-grid/view.html.twig");
    }
}
