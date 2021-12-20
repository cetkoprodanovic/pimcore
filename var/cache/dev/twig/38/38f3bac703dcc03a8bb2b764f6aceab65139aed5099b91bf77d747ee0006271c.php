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

/* product/product_teaser.html.twig */
class __TwigTemplate_b592eeabd72e0814da9ef8bd997c438b9c9e10d477834520373b0532c7a1e879 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/product_teaser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/product_teaser.html.twig"));

        // line 1
        echo "<div class=\"card custom-product-card mb-4 shadow-sm flex-fill\" data-productid=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
    ";
        // line 2
        $context["detailLink"] = $this->extensions['App\Twig\Extension\ProductPageExtension']->generateLink((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()));
        // line 3
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["detailLink"]) || array_key_exists("detailLink", $context) ? $context["detailLink"] : (function () { throw new RuntimeError('Variable "detailLink" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\" class=\"text-decoration-none text-dark\">
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "mainImage", [], "any", false, false, false, 4)) {
            // line 5
            echo "        <div class=\"product-img\">
            ";
            // line 6
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })()), "mainImage", [], "any", false, false, false, 6), "thumbnail", [0 => "grid"], "method", false, false, false, 6), "html", [0 => ["imgAttributes" => ["class" => "img-fluid w-100"]]], "method", false, false, false, 6);
            echo "
        </div>
        ";
        }
        // line 9
        echo "

        <div class=\"card-body pricing\">
            <div class=\"card-body-top pb-3\">
                <h4 class=\"card-title pricing-card-title text-uppercase\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "oSName", [], "any", false, false, false, 13), "html", null, true);
        echo "</h4>
                ";
        // line 14
        if (call_user_func_array($this->env->getTest('instanceof')->getCallable(), [(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "App\\Model\\Product\\Car"])) {
            // line 15
            echo "                    <p class=\"card-text\">";
            echo twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "subText", [], "any", false, false, false, 15);
            echo "</p>
                ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "saleInformation", [], "any", false, false, false, 16), "saleInformation", [], "any", false, false, false, 16)) {
            // line 17
            echo "                    <p class=\"card-text\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.condition"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("attribute." . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "saleInformation", [], "any", false, false, false, 17), "saleInformation", [], "any", false, false, false, 17), "condition", [], "any", false, false, false, 17))), "html", null, true);
            echo "</p>
                ";
        }
        // line 19
        echo "            </div>
            <div class=\"card-body-bottom\">

                ";
        // line 22
        $context["priceInfo"] = twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "oSPriceInfo", [], "any", false, false, false, 22);
        // line 23
        echo "
                ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["priceInfo"]) || array_key_exists("priceInfo", $context) ? $context["priceInfo"] : (function () { throw new RuntimeError('Variable "priceInfo" does not exist.', 24, $this->source); })()), "hasDiscount", [], "any", false, false, false, 24)) {
            // line 25
            echo "                    <p class=\"card-price original mb-1\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["priceInfo"]) || array_key_exists("priceInfo", $context) ? $context["priceInfo"] : (function () { throw new RuntimeError('Variable "priceInfo" does not exist.', 25, $this->source); })()), "originalPrice", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
                ";
        }
        // line 27
        echo "
                <p class=\"card-price\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "oSPrice", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
                <div class=\"row button-row\">
                    <div class=\"col p-1\">
                        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["detailLink"]) || array_key_exists("detailLink", $context) ? $context["detailLink"] : (function () { throw new RuntimeError('Variable "detailLink" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-block btn-secondary\">
                            ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.details"), "html", null, true);
        echo "
                        </a>
                    </div>
                    <div class=\"col p-1\">
                        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop-add-to-cart", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\" class=\"btn btn-block btn-primary\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.buy"), "html", null, true);
        echo " <i class=\" ml-2\"><img src=\"/static/images/icons/cart.svg\" height=\"20\" width=\"auto\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/product_teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 36,  124 => 32,  120 => 31,  114 => 28,  111 => 27,  105 => 25,  103 => 24,  100 => 23,  98 => 22,  93 => 19,  85 => 17,  83 => 16,  78 => 15,  76 => 14,  72 => 13,  66 => 9,  60 => 6,  57 => 5,  55 => 4,  50 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card custom-product-card mb-4 shadow-sm flex-fill\" data-productid=\"{{ product.id }}\">
    {% set detailLink = app_product_detaillink(product) %}
    <a href=\"{{ detailLink }}\" class=\"text-decoration-none text-dark\">
        {% if(product.mainImage) %}
        <div class=\"product-img\">
            {{ product.mainImage.thumbnail('grid').html({imgAttributes: {class: 'img-fluid w-100'}}) | raw }}
        </div>
        {% endif %}


        <div class=\"card-body pricing\">
            <div class=\"card-body-top pb-3\">
                <h4 class=\"card-title pricing-card-title text-uppercase\">{{ product.oSName }}</h4>
                {% if( product is instanceof('App\\\\Model\\\\Product\\\\Car')) %}
                    <p class=\"card-text\">{{ product.subText | raw }}</p>
                {% elseif(product.saleInformation.saleInformation)  %}
                    <p class=\"card-text\">{{ 'general.condition' | trans }}: {{ ('attribute.' ~ product.saleInformation.saleInformation.condition) | trans }}</p>
                {% endif %}
            </div>
            <div class=\"card-body-bottom\">

                {% set priceInfo = product.oSPriceInfo %}

                {% if(priceInfo.hasDiscount) %}
                    <p class=\"card-price original mb-1\">{{ priceInfo.originalPrice }}</p>
                {% endif %}

                <p class=\"card-price\">{{ product.oSPrice }}</p>
                <div class=\"row button-row\">
                    <div class=\"col p-1\">
                        <a href=\"{{ detailLink }}\" class=\"btn btn-block btn-secondary\">
                            {{ 'general.details' | trans }}
                        </a>
                    </div>
                    <div class=\"col p-1\">
                        <a href=\"{{ path('shop-add-to-cart', { id: product.id }) }}\" class=\"btn btn-block btn-primary\">{{ 'general.buy' | trans }} <i class=\" ml-2\"><img src=\"/static/images/icons/cart.svg\" height=\"20\" width=\"auto\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
", "product/product_teaser.html.twig", "/opt/bitnami/pimcore/templates/product/product_teaser.html.twig");
    }
}
