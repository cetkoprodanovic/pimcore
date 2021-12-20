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

/* areas/personalized-product-teaser/view.html.twig */
class __TwigTemplate_f7a3aed10204050f96678358c014ad49aa54581ff36f5edc1323c1bf1b74ec78 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/personalized-product-teaser/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/personalized-product-teaser/view.html.twig"));

        // line 1
        echo "<section class=\"teaser-row-container pt-5 pb-3 bg-light text-center\">
    <div class=\"container\">
        <h2>";
        // line 3
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "productTeaserTitle", ["placeholder" => "Enter Title"]);
        echo "</h2>


        ";
        // line 6
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "
            <div class=\"alert alert-info\">

                <div class=\"text-left\">
                    <strong>Teaser with personalized content:</strong>
                    <br/>
                    Content of this teaser will be personalized for visitor if possible. Personalization parameters
                    are <strong>manufactures</strong> and <strong>car classes</strong> of visited car detail pages.
                    <br/>
                    Manually assigned cars are fallback and will be displayed when no personalization is possible.
                </div>
            </div>

        ";
        }
        // line 21
        echo "
        <div class=\"row mb-3 text-left\">
            ";
        // line 23
        if (((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 23, $this->source); })()) ||  !(isset($context["usePersonalizedData"]) || array_key_exists("usePersonalizedData", $context) ? $context["usePersonalizedData"] : (function () { throw new RuntimeError('Variable "usePersonalizedData" does not exist.', 23, $this->source); })()))) {
            // line 24
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 25
                echo "                    <div class=\"";
                echo (((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 25, $this->source); })())) ? ("teaser-col") : ("col-md-4 d-flex align-items-stretch flex-column"));
                echo "\">
                        ";
                // line 26
                echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "renderlet", ("productTeaser" .                 // line 27
$context["i"]), ["type" => "object", "editmode" =>                 // line 29
(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 29, $this->source); })()), "controller" => "App\\Controller\\ProductController::productTeaserAction", "title" => "Drag a product here", "height" => "auto", "width" => "100%"]);
                // line 35
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            ";
        } else {
            // line 39
            echo "
                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productList"]) || array_key_exists("productList", $context) ? $context["productList"] : (function () { throw new RuntimeError('Variable "productList" does not exist.', 40, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 41
                echo "                    <div class=\"col-md-4 d-flex align-items-stretch flex-column\">
                        ";
                // line 42
                $this->loadTemplate("product/product_teaser.html.twig", "areas/personalized-product-teaser/view.html.twig", 42)->display(twig_array_merge($context, ["product" => $context["product"]]));
                // line 43
                echo "                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
            ";
        }
        // line 47
        echo "        </div>

    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "areas/personalized-product-teaser/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 47,  142 => 45,  127 => 43,  125 => 42,  122 => 41,  105 => 40,  102 => 39,  99 => 38,  91 => 35,  89 => 29,  88 => 27,  87 => 26,  82 => 25,  77 => 24,  75 => 23,  71 => 21,  55 => 7,  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"teaser-row-container pt-5 pb-3 bg-light text-center\">
    <div class=\"container\">
        <h2>{{ pimcore_input('productTeaserTitle', {'placeholder':'Enter Title'}) }}</h2>


        {% if editmode %}

            <div class=\"alert alert-info\">

                <div class=\"text-left\">
                    <strong>Teaser with personalized content:</strong>
                    <br/>
                    Content of this teaser will be personalized for visitor if possible. Personalization parameters
                    are <strong>manufactures</strong> and <strong>car classes</strong> of visited car detail pages.
                    <br/>
                    Manually assigned cars are fallback and will be displayed when no personalization is possible.
                </div>
            </div>

        {% endif %}

        <div class=\"row mb-3 text-left\">
            {% if editmode or not usePersonalizedData %}
                {% for i in 0..2 %}
                    <div class=\"{{ editmode ? 'teaser-col' : 'col-md-4 d-flex align-items-stretch flex-column' }}\">
                        {{
                            pimcore_renderlet(('productTeaser'~i), {
                                type: 'object',
                                editmode: editmode,
                                controller: 'App\\\\Controller\\\\ProductController::productTeaserAction',
                                title: 'Drag a product here',
                                height : 'auto',
                                width: '100%'
                            })
                        }}
                    </div>
                {% endfor %}
            {% else %}

                {% for product in productList %}
                    <div class=\"col-md-4 d-flex align-items-stretch flex-column\">
                        {% include 'product/product_teaser.html.twig' with {'product': product} %}
                    </div>
                {% endfor %}

            {% endif %}
        </div>

    </div>
</section>", "areas/personalized-product-teaser/view.html.twig", "/opt/bitnami/pimcore/templates/areas/personalized-product-teaser/view.html.twig");
    }
}
