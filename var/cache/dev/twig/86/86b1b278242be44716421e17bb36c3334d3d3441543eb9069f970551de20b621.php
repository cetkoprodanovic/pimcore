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

/* cart/shared/order_summary.html.twig */
class __TwigTemplate_a4e4f3cd4ede8f478397a7496566574b29187f532fb31f9bf26c3b8edd815702 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/shared/order_summary.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/shared/order_summary.html.twig"));

        // line 1
        echo "<h4 class=\"d-flex justify-content-between align-items-center mb-3\">
    <span class=\"\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.summary"), "html", null, true);
        echo "</span>
    <span class=\"badge badge-secondary badge-pill\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 3, $this->source); })()), "itemAmount", [], "any", false, false, false, 3), "html", null, true);
        echo "</span>
</h4>
<ul class=\"list-group mb-3\">
    <li class=\"list-group-item d-flex justify-content-between\">
        <div>
            <p class=\"mb-0\"><strong class=\"my-0\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.products"), "html", null, true);
        echo "</strong></p>
            <small class=\"text-muted\">

                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 11, $this->source); })()), "items", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["cartItem"]) {
            // line 12
            echo "
                    <div>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cartItem"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
            </small>
        </div>
        <span class=\"text-muted text-nowrap text-right\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 19, $this->source); })()), "priceCalculator", [], "any", false, false, false, 19), "subTotal", [], "any", false, false, false, 19), "html", null, true);
        echo "</span>
    </li>

    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 22, $this->source); })()), "priceCalculator", [], "any", false, false, false, 22), "priceModifications", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["name"] => $context["modification"]) {
            // line 23
            echo "
        <li class=\"list-group-item d-flex justify-content-between\">
            <div>
                <strong class=\"my-0\">
                    ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["modification"], "description", [], "any", false, false, false, 27)) {
                // line 28
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["modification"], "description", [], "any", false, false, false, 28), "html", null, true);
                echo "
                    ";
            } else {
                // line 30
                echo "                        ";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "
                    ";
            }
            // line 32
            echo "                </strong>
            </div>
            <span class=\"text-muted text-nowrap text-right\">";
            // line 34
            echo twig_escape_filter($this->env, $context["modification"], "html", null, true);
            echo "</span>
        </li>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['modification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
    <li class=\"list-group-item d-flex justify-content-between\" style=\"border-top: 2px solid\">
        <h6><span>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.totalprice"), "html", null, true);
        echo "</span></h6>
        <h6 class=\"text-nowrap text-right\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 42, $this->source); })()), "priceCalculator", [], "any", false, false, false, 42), "grandTotal", [], "any", false, false, false, 42), "html", null, true);
        echo "</h6>
    </li>
</ul>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cart/shared/order_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 42,  134 => 41,  130 => 39,  119 => 34,  115 => 32,  109 => 30,  103 => 28,  101 => 27,  95 => 23,  91 => 22,  85 => 19,  80 => 16,  71 => 13,  68 => 12,  64 => 11,  58 => 8,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h4 class=\"d-flex justify-content-between align-items-center mb-3\">
    <span class=\"\">{{ 'checkout.summary' | trans }}</span>
    <span class=\"badge badge-secondary badge-pill\">{{ cart.itemAmount }}</span>
</h4>
<ul class=\"list-group mb-3\">
    <li class=\"list-group-item d-flex justify-content-between\">
        <div>
            <p class=\"mb-0\"><strong class=\"my-0\">{{ 'checkout.products' | trans }}</strong></p>
            <small class=\"text-muted\">

                {% for cartItem in cart.items %}

                    <div>{{ cartItem.name }}</div>

                {% endfor %}

            </small>
        </div>
        <span class=\"text-muted text-nowrap text-right\">{{ cart.priceCalculator.subTotal }}</span>
    </li>

    {% for name, modification in cart.priceCalculator.priceModifications %}

        <li class=\"list-group-item d-flex justify-content-between\">
            <div>
                <strong class=\"my-0\">
                    {% if(modification.description) %}
                        {{ modification.description }}
                    {% else %}
                        {{ name }}
                    {% endif %}
                </strong>
            </div>
            <span class=\"text-muted text-nowrap text-right\">{{ modification }}</span>
        </li>


    {% endfor %}

    <li class=\"list-group-item d-flex justify-content-between\" style=\"border-top: 2px solid\">
        <h6><span>{{ 'checkout.totalprice' | trans }}</span></h6>
        <h6 class=\"text-nowrap text-right\">{{ cart.priceCalculator.grandTotal }}</h6>
    </li>
</ul>", "cart/shared/order_summary.html.twig", "/opt/bitnami/pimcore/templates/cart/shared/order_summary.html.twig");
    }
}
