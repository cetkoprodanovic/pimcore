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

/* areas/standard-teaser/view.html.twig */
class __TwigTemplate_e2fa7809c0280ad8f33560cf998bf363d7bec179ce092e17f7d7ae6c93fa7aab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/standard-teaser/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/standard-teaser/view.html.twig"));

        // line 1
        echo "<section class=\"area-standard-teaser bg-light text-center\">
    <div class=\"container\">
        <h2>";
        // line 3
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "standardTeaserHeading");
        echo "</h2>
        <div class=\"card-deck mb-3 text-center ";
        // line 4
        echo (((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 4, $this->source); })())) ? ("no-gutters") : (""));
        echo " \">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 2));
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
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 6
            echo "                ";
            // line 7
            $context["select"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "select", ("type_" . $context["t"]), ["width" => 110, "reload" => true, "store" => [0 => [0 => "direct", 1 => "direct"], 1 => [0 => "snippet", 1 => "snippet"], 2 => [0 => "news", 1 => "news"]], "class" => "align-middle"]);
            // line 18
            echo "
                ";
            // line 19
            if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 19, $this->source); })())) {
                // line 20
                echo "                    <div class=\"col-md-4\">
                        <div class=\"mb-3\">
                            <span class=\"editmode-label align-middle\">Type:</span>
                            ";
                // line 23
                echo (isset($context["select"]) || array_key_exists("select", $context) ? $context["select"] : (function () { throw new RuntimeError('Variable "select" does not exist.', 23, $this->source); })());
                echo "
                        </div>
                ";
            }
            // line 26
            echo "
                ";
            // line 27
            $context["type"] = twig_get_attribute($this->env, $this->source, (isset($context["select"]) || array_key_exists("select", $context) ? $context["select"] : (function () { throw new RuntimeError('Variable "select" does not exist.', 27, $this->source); })()), "getData", [], "method", false, false, false, 27);
            // line 28
            echo "                ";
            if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 28, $this->source); })()) == "direct")) {
                // line 29
                echo "                    ";
                echo twig_include($this->env, $context, "snippets/standard-teaser.html.twig", ["suffix" => (                // line 31
$context["t"] + 1)]);
                // line 33
                echo "
                ";
            } elseif ((            // line 34
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 34, $this->source); })()) == "news")) {
                // line 35
                echo "                    ";
                echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "renderlet", ("newsteaser_" .                 // line 36
$context["t"]), ["type" => "object", "editmode" =>                 // line 38
(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 38, $this->source); })()), "controller" => "App\\Controller\\NewsController::newsTeaserAction", "title" => "Drag a news object here", "height" => "auto", "width" => "100%"]);
                // line 44
                echo "
                ";
            } else {
                // line 46
                echo "                    ";
                echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", ("teaser_" . $context["t"]));
                echo "
                ";
            }
            // line 48
            echo "
                ";
            // line 49
            if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 49, $this->source); })())) {
                // line 50
                echo "                    </div>
                ";
            }
            // line 52
            echo "

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </div>
    </div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "areas/standard-teaser/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 55,  133 => 52,  129 => 50,  127 => 49,  124 => 48,  118 => 46,  114 => 44,  112 => 38,  111 => 36,  109 => 35,  107 => 34,  104 => 33,  102 => 31,  100 => 29,  97 => 28,  95 => 27,  92 => 26,  86 => 23,  81 => 20,  79 => 19,  76 => 18,  74 => 7,  72 => 6,  55 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"area-standard-teaser bg-light text-center\">
    <div class=\"container\">
        <h2>{{ pimcore_input('standardTeaserHeading') }}</h2>
        <div class=\"card-deck mb-3 text-center {{ editmode ? 'no-gutters' : '' }} \">
            {% for t in 0..2 %}
                {%
                    set select = pimcore_select('type_' ~ t, {
                        width: 110,
                        reload: true,
                        store: [
                            ['direct','direct'],
                            ['snippet','snippet'],
                            ['news','news']
                        ],
                        class: 'align-middle'
                    })
                %}

                {% if editmode %}
                    <div class=\"col-md-4\">
                        <div class=\"mb-3\">
                            <span class=\"editmode-label align-middle\">Type:</span>
                            {{ select|raw }}
                        </div>
                {% endif %}

                {% set type = select.getData() %}
                {% if type == \"direct\" %}
                    {{
                        include('snippets/standard-teaser.html.twig', {
                            suffix: (t+1)
                        })
                    }}
                {% elseif type == \"news\" %}
                    {{
                        pimcore_renderlet('newsteaser_' ~ t, {
                            type: 'object',
                            editmode: editmode,
                            controller: 'App\\\\Controller\\\\NewsController::newsTeaserAction',
                            title: 'Drag a news object here',
                            height : 'auto',
                            width: '100%'
                        })
                    }}
                {% else %}
                    {{ pimcore_snippet('teaser_' ~ t) }}
                {% endif %}

                {% if editmode %}
                    </div>
                {% endif %}


            {% endfor %}
        </div>
    </div>
</section>
", "areas/standard-teaser/view.html.twig", "/opt/bitnami/pimcore/templates/areas/standard-teaser/view.html.twig");
    }
}
