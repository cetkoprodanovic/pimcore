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

/* account/partial/social_buttons.html.twig */
class __TwigTemplate_999b0bbbc6bd92dd4f2312344957a3c84453d6e2c25fbf0ea8c4c53642759fde extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/partial/social_buttons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/partial/social_buttons.html.twig"));

        // line 1
        $context["providers"] = [0 => "google", 1 => "twitter"];
        // line 2
        $context["blacklist"] = ((array_key_exists("blacklist", $context)) ? ((isset($context["blacklist"]) || array_key_exists("blacklist", $context) ? $context["blacklist"] : (function () { throw new RuntimeError('Variable "blacklist" does not exist.', 2, $this->source); })())) : ([]));
        // line 3
        $context["route"] = ((array_key_exists("route", $context)) ? ((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 3, $this->source); })())) : ("hwi_oauth_service_redirect"));
        // line 4
        $context["connect"] = ((array_key_exists("connect", $context)) ? ((isset($context["connect"]) || array_key_exists("connect", $context) ? $context["connect"] : (function () { throw new RuntimeError('Variable "connect" does not exist.', 4, $this->source); })())) : (false));
        // line 5
        echo "
";
        // line 6
        $context["translationKey"] = (((isset($context["connect"]) || array_key_exists("connect", $context) ? $context["connect"] : (function () { throw new RuntimeError('Variable "connect" does not exist.', 6, $this->source); })())) ? ("general.connect-to") : ("general.sign-in-with"));
        // line 7
        echo "

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["providers"]) || array_key_exists("providers", $context) ? $context["providers"] : (function () { throw new RuntimeError('Variable "providers" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 10
            echo "
    ";
            // line 11
            if ( !twig_in_filter($context["provider"], (isset($context["blacklist"]) || array_key_exists("blacklist", $context) ? $context["blacklist"] : (function () { throw new RuntimeError('Variable "blacklist" does not exist.', 11, $this->source); })()))) {
                // line 12
                echo "
        <a class=\"btn btn-secondary btn-sm\" href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 13, $this->source); })()), ["service" => $context["provider"]]), "html", null, true);
                echo "\">
            <i class=\"fab fa-";
                // line 14
                echo twig_escape_filter($this->env, $context["provider"], "html", null, true);
                echo "\" aria-hidden=\"true\"></i>
            ";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["translationKey"]) || array_key_exists("translationKey", $context) ? $context["translationKey"] : (function () { throw new RuntimeError('Variable "translationKey" does not exist.', 15, $this->source); })()), [0 => $context["provider"]]), "html", null, true);
                echo "
        </a>

    ";
            }
            // line 19
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "account/partial/social_buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 19,  80 => 15,  76 => 14,  72 => 13,  69 => 12,  67 => 11,  64 => 10,  60 => 9,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set providers = ['google', 'twitter'] %}
{% set blacklist = blacklist is defined ? blacklist : [] %}
{% set route = route is defined ? route : 'hwi_oauth_service_redirect' %}
{% set connect = connect is defined ? connect : false %}

{% set translationKey = connect ? 'general.connect-to' : 'general.sign-in-with' %}


{% for provider in providers %}

    {% if(not (provider in blacklist)) %}

        <a class=\"btn btn-secondary btn-sm\" href=\"{{ path(route, {service: provider}) }}\">
            <i class=\"fab fa-{{ provider }}\" aria-hidden=\"true\"></i>
            {{ translationKey | trans([provider]) }}
        </a>

    {% endif %}

{% endfor %}
", "account/partial/social_buttons.html.twig", "/opt/bitnami/pimcore/templates/account/partial/social_buttons.html.twig");
    }
}
