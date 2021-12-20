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

/* includes/navigation-icons.html.twig */
class __TwigTemplate_209c3da76f6775b02a46a3856da62322b0bb68a7ea116b36949ae73230a36310 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/navigation-icons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/navigation-icons.html.twig"));

        // line 1
        echo "<ul class=\"navbar-nav menu-icons flex-row justify-content-center\">
    <li class=\"search-button nav-item dropdown\">
        <a class=\"search-toggle dropdown-toggle py-2 d-none d-md-inline-block menu-icon ml-4\" href=\"#\"  data-selector=\"#navbarCollapse\">
        </a>
    </li>
    <li class=\"nav-item dropdown\">
        <a class=\"dropdown-toggle py-2 d-none d-md-inline-block menu-icon ml-4\" data-toggle=\"dropdown\" href=\"#\">
            <img src=\"/static/images/icons/profile.svg\" /></a>

        <ul class=\"dropdown-menu\">
            ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 12
            echo "
                <span class=\"dropdown-menu-arrow search arrow\"></span>

                <div class=\"dropdown-item\">";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.logged-in-as", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "username", [], "any", false, false, false, 15)]), "html", null, true);
            echo "</div>
                <div class=\"dropdown-divider\"></div>
                <a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account-index");
            echo "\" class=\"dropdown-item\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.profile"), "html", null, true);
            echo "</a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account-logout");
            echo "\"class=\"dropdown-item\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.logout"), "html", null, true);
            echo "</a>

            ";
        } else {
            // line 22
            echo "
                <span class=\"dropdown-menu-arrow search arrow\"></span>
                <a href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account-login");
            echo "\"class=\"dropdown-item\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.login"), "html", null, true);
            echo "</a>

            ";
        }
        // line 27
        echo "
        </ul>
    </li>
    <li class=\"nav-item\">
        <a class=\"py-2 d-none d-md-inline-block menu-icon ml-4\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop-cart-detail");
        echo "\">
            <img src=\"/static/images/icons/cart.svg\" /></a>
    </li>
    ";
        // line 34
        echo twig_include($this->env, $context, "includes/language.html.twig");
        echo "
</ul>
<form action=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" class=\"search-box mx-auto\">
    <input id=\"autoComplete\" name=\"term\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "get", [0 => "term"], "method", false, false, false, 37), "html", null, true);
        echo "\" type=\"text\" class=\"text search-input\" placeholder=\"Type here to search...\" autocomplete=\"off\" />
</form>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/navigation-icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 37,  111 => 36,  106 => 34,  100 => 31,  94 => 27,  86 => 24,  82 => 22,  74 => 19,  67 => 17,  62 => 15,  57 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"navbar-nav menu-icons flex-row justify-content-center\">
    <li class=\"search-button nav-item dropdown\">
        <a class=\"search-toggle dropdown-toggle py-2 d-none d-md-inline-block menu-icon ml-4\" href=\"#\"  data-selector=\"#navbarCollapse\">
        </a>
    </li>
    <li class=\"nav-item dropdown\">
        <a class=\"dropdown-toggle py-2 d-none d-md-inline-block menu-icon ml-4\" data-toggle=\"dropdown\" href=\"#\">
            <img src=\"/static/images/icons/profile.svg\" /></a>

        <ul class=\"dropdown-menu\">
            {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}

                <span class=\"dropdown-menu-arrow search arrow\"></span>

                <div class=\"dropdown-item\">{{ 'general.logged-in-as' | trans([app.user.username]) }}</div>
                <div class=\"dropdown-divider\"></div>
                <a href=\"{{ path('account-index') }}\" class=\"dropdown-item\">{{ 'general.profile' | trans }}</a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"{{ path('account-logout') }}\"class=\"dropdown-item\">{{ 'general.logout' | trans }}</a>

            {%  else %}

                <span class=\"dropdown-menu-arrow search arrow\"></span>
                <a href=\"{{ path('account-login') }}\"class=\"dropdown-item\">{{ 'general.login' | trans }}</a>

            {% endif %}

        </ul>
    </li>
    <li class=\"nav-item\">
        <a class=\"py-2 d-none d-md-inline-block menu-icon ml-4\" href=\"{{ path('shop-cart-detail') }}\">
            <img src=\"/static/images/icons/cart.svg\" /></a>
    </li>
    {{ include('includes/language.html.twig') }}
</ul>
<form action=\"{{ path('search') }}\" class=\"search-box mx-auto\">
    <input id=\"autoComplete\" name=\"term\" value=\"{{ app.request.get(\"term\") }}\" type=\"text\" class=\"text search-input\" placeholder=\"Type here to search...\" autocomplete=\"off\" />
</form>", "includes/navigation-icons.html.twig", "/opt/bitnami/pimcore/templates/includes/navigation-icons.html.twig");
    }
}
