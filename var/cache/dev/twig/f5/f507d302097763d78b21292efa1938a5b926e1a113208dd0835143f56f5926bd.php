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

/* includes/language.html.twig */
class __TwigTemplate_175506ef7029bb7f0527ed1c1b2d0f193aeef1e25202f924414350cc2afea160 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/language.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/language.html.twig"));

        // line 1
        echo "<li class=\"nav-item dropdown\">
    <a class=\"dropdown-toggle py-2 d-none d-md-inline-block menu-icon ml-4\" data-toggle=\"dropdown\" href=\"#\">
        <img src=\"/static/images/icons/language.svg\" />
    </a>
    <ul class=\"dropdown-menu\">
        <span class=\"dropdown-menu-arrow search arrow\"></span>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['App\Twig\Extension\LanguageSwitcherExtension']->getLocalizedLinks((isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 7, $this->source); })())));
        foreach ($context['_seq'] as $context["key"] => $context["lang"]) {
            // line 8
            echo "            <li>
                <a class=\"dropdown-item\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "link", [], "any", false, false, false, 9), "html", null, true);
            echo "\">
                    <img class=\"language-switcher-img\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\LanguageSwitcherExtension']->getLanguageFlag($context["key"]), "html", null, true);
            echo "\" height=\"20\" width=\"25\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "text", [], "any", false, false, false, 11), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul>
</li>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/language.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 14,  66 => 11,  62 => 10,  58 => 9,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"nav-item dropdown\">
    <a class=\"dropdown-toggle py-2 d-none d-md-inline-block menu-icon ml-4\" data-toggle=\"dropdown\" href=\"#\">
        <img src=\"/static/images/icons/language.svg\" />
    </a>
    <ul class=\"dropdown-menu\">
        <span class=\"dropdown-menu-arrow search arrow\"></span>
        {% for key, lang in get_localized_links(document) %}
            <li>
                <a class=\"dropdown-item\" href=\"{{ lang.link }}\">
                    <img class=\"language-switcher-img\" src=\"{{ get_language_flag(key) }}\" height=\"20\" width=\"25\">
                    {{ lang.text }}</a>
            </li>
        {% endfor %}
    </ul>
</li>", "includes/language.html.twig", "/opt/bitnami/pimcore/templates/includes/language.html.twig");
    }
}
