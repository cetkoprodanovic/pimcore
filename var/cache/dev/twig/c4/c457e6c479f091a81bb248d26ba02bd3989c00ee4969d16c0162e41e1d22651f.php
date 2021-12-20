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

/* checkout/checkout_address.html.twig */
class __TwigTemplate_3f4bb0113160cde78ea56dcdccd9df138ca7e2737dfe497ebe85a6a905354e87 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/checkout_address.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/checkout_address.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "checkout/checkout_address.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <div class=\"py-5 bg-light\">
        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-md-8\">
                    <h4 class=\"mb-3\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.billing-address"), "html", null, true);
        echo "</h4>

                    ";
        // line 15
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) {
            // line 16
            echo "                        <div class=\"mb-5\">
                            ";
            // line 17
            $this->loadTemplate("account/partial/social_buttons.html.twig", "checkout/checkout_address.html.twig", 17)->display(twig_array_merge($context, ["connect" => false]));
            // line 18
            echo "                        </div>
                    ";
        }
        // line 20
        echo "
                    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start');
        echo "

                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "firstname", [], "any", false, false, false, 25), 'row');
        echo "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "lastname", [], "any", false, false, false, 28), 'row');
        echo "
                            </div>
                        </div>
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "company", [], "any", false, false, false, 32), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "street", [], "any", false, false, false, 33), 'row');
        echo "

                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "zip", [], "any", false, false, false, 37), 'row');
        echo "
                            </div>
                            <div class=\"col-md-8\">
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "city", [], "any", false, false, false, 40), 'row');
        echo "
                            </div>
                        </div>
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "countryCode", [], "any", false, false, false, 43), 'row');
        echo "

                        <hr/>

                    <div class=\"form-group\">
                        ";
        // line 48
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "terms", [], "any", false, false, false, 48), "setRendered", [], "any", false, false, false, 48);
        // line 49
        echo "                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" id=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "terms", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "terms", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
        echo "\" ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "terms", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "required", [], "any", false, false, false, 50)) ? ("required=\"required\"") : (""));
        echo " class=\"custom-control-input\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "terms", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "value", [], "any", false, false, false, 50), "html", null, true);
        echo "\">
                            <label class=\"checkbox-custom custom-control-label ";
        // line 51
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "terms", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "required", [], "any", false, false, false, 51)) ? ("required") : (""));
        echo "\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "terms", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
        echo "\">
                                ";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.terms", [0 => twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 52, $this->source); })()), "getProperty", [0 => "terms_and_conditions"], "method", false, false, false, 52)]);
        echo "
                            </label>
                        </div>
                    </div>

";
        // line 58
        echo "
";
        // line 60
        echo "
                        <hr/>

                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "_submit", [], "any", false, false, false, 63), 'row', ["attr" => ["class" => "btn-success btn-lg btn-block"]]);
        echo "

                    ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
        echo "

                </div>
                <div class=\"col-md-4 mb-4 mt-5 mt-md-0\">
                    ";
        // line 69
        $this->loadTemplate("cart/shared/order_summary.html.twig", "checkout/checkout_address.html.twig", 69)->display($context);
        // line 70
        echo "                </div>
            </div>

        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "checkout/checkout_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 70,  202 => 69,  195 => 65,  190 => 63,  185 => 60,  182 => 58,  174 => 52,  168 => 51,  158 => 50,  155 => 49,  153 => 48,  145 => 43,  139 => 40,  133 => 37,  126 => 33,  122 => 32,  118 => 31,  112 => 28,  106 => 25,  99 => 21,  96 => 20,  92 => 18,  90 => 17,  87 => 16,  85 => 15,  80 => 13,  71 => 6,  61 => 5,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/layout.html.twig' %}
{% form_theme form 'bootstrap_4_layout.html.twig' %}


{% block content %}

    <div class=\"py-5 bg-light\">
        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-md-8\">
                    <h4 class=\"mb-3\">{{ 'checkout.billing-address' | trans }}</h4>

                    {% if(not app.user) %}
                        <div class=\"mb-5\">
                            {% include 'account/partial/social_buttons.html.twig' with {'connect': false} %}
                        </div>
                    {% endif %}

                    {{ form_start(form) }}

                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                {{ form_row(form.firstname) }}
                            </div>
                            <div class=\"col-md-6\">
                                {{ form_row(form.lastname) }}
                            </div>
                        </div>
                        {{ form_row(form.email) }}
                        {{ form_row(form.company) }}
                        {{ form_row(form.street) }}

                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                {{ form_row(form.zip) }}
                            </div>
                            <div class=\"col-md-8\">
                                {{ form_row(form.city) }}
                            </div>
                        </div>
                        {{ form_row(form.countryCode) }}

                        <hr/>

                    <div class=\"form-group\">
                        {% do form.terms.setRendered %}
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" id=\"{{ form.terms.vars.id }}\" name=\"{{ form.terms.vars.name }}\" {{ form.terms.vars.required ? 'required=\"required\"' : '' }} class=\"custom-control-input\" value=\"{{ form.terms.vars.value }}\">
                            <label class=\"checkbox-custom custom-control-label {{ form.terms.vars.required ? 'required' : '' }}\" for=\"{{ form.terms.vars.id }}\">
                                {{ 'checkout.terms' | trans([document.getProperty('terms_and_conditions')]) | raw }}
                            </label>
                        </div>
                    </div>

{#                    {{ form_widget(form.terms) }}#}

{#                        {{ form_row(form.terms, {'label': ( 'checkout.terms' | trans([document.getProperty('terms_and_conditions')]) | raw ), label_attr: {class: 'checkbox-custom'} }) }}#}

                        <hr/>

                    {{ form_row(form._submit, {'attr': {'class': 'btn-success btn-lg btn-block'}}) }}

                    {{ form_end(form) }}

                </div>
                <div class=\"col-md-4 mb-4 mt-5 mt-md-0\">
                    {% include 'cart/shared/order_summary.html.twig' %}
                </div>
            </div>

        </div>
    </div>

{% endblock %}


", "checkout/checkout_address.html.twig", "/opt/bitnami/pimcore/templates/checkout/checkout_address.html.twig");
    }
}
