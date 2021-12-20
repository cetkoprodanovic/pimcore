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

/* @PimcoreAdmin/Admin/Login/login.html.twig */
class __TwigTemplate_e9b321e56cdcbcccaab6bc2941aa7648c9026ab615215de0f665785a1049555c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'below_footer' => [$this, 'block_below_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@PimcoreAdmin/Admin/Login/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreAdmin/Admin/Login/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreAdmin/Admin/Login/login.html.twig"));

        $this->parent = $this->loadTemplate("@PimcoreAdmin/Admin/Login/layout.html.twig", "@PimcoreAdmin/Admin/Login/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div id=\"loginform\">
    <form id=\"form-element\" method=\"post\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_admin_login_check", ["perspective" => strip_tags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "get", [0 => "perspective"], "method", false, false, false, 5))]), "html", null, true);
        echo "\">

        ";
        // line 7
        if (array_key_exists("error", $context)) {
            // line 8
            echo "        <div class=\"text error\">
            ";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })()), [], "admin");
            echo "
        </div>
        ";
        }
        // line 12
        echo "
        <input type=\"text\" name=\"username\" autocomplete=\"username\" placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("username", [], "admin"), "html", null, true);
        echo "\" required autofocus>
        <input type=\"password\" name=\"password\" autocomplete=\"current-password\" placeholder=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("password", [], "admin"), "html", null, true);
        echo "\" required>
        <input type=\"hidden\" name=\"csrfToken\" id=\"csrfToken\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csrf"]) || array_key_exists("pimcore_csrf", $context) ? $context["pimcore_csrf"] : (function () { throw new RuntimeError('Variable "pimcore_csrf" does not exist.', 15, $this->source); })()), "getCsrfToken", [], "method", false, false, false, 15), "html", null, true);
        echo "\">

        <button type=\"submit\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login", [], "admin"), "html", null, true);
        echo "</button>
    </form>

    <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_admin_login_lostpassword");
        echo "\" class=\"lostpassword\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forgot your password", [], "admin"), "html", null, true);
        echo "?</a>
</div>

";
        // line 23
        if ( !(isset($context["browserSupported"]) || array_key_exists("browserSupported", $context) ? $context["browserSupported"] : (function () { throw new RuntimeError('Variable "browserSupported" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "<div id=\"browserinfo\">
    <div class=\"text\">
        ";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your browser is not supported. Please install the latest version of one of the following browsers.", [], "admin"), "html", null, true);
            echo "
    </div>

    <div class=\"text browserinfo\">
        <a href=\"https://www.google.com/chrome\" target=\"_blank\" rel=\"noopener noreferrer\" title=\"Chrome\"><img src=\"/bundles/pimcoreadmin/img/login/chrome.svg\" alt=\"Chrome\"/></a>
        <a href=\"https://www.mozilla.org/firefox\" target=\"_blank\" rel=\"noopener noreferrer\" title=\"Firefox\"><img src=\"/bundles/pimcoreadmin/img/login/firefox.svg\" alt=\"Firefox\"/></a>
        <a href=\"https://www.apple.com/safari\" target=\"_blank\" rel=\"noopener noreferrer\" title=\"Safari\"><img src=\"/bundles/pimcoreadmin/img/login/safari.svg\" alt=\"Safari\"/></a>
        <a href=\"https://www.microsoft.com/edge\" target=\"_blank\" rel=\"noopener noreferrer\" title=\"Edge\"><img src=\"/bundles/pimcoreadmin/img/login/edge.svg\" alt=\"Edge\"/></a>
    </div>

    <a href=\"#\" onclick=\"showLogin();\">";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Click here to proceed", [], "admin"), "html", null, true);
            echo "</a>
</div>

<script type=\"text/javascript\">
    function showLogin() {
        document.getElementById('loginform').style.display = 'block';
        document.getElementById('browserinfo').style.display = 'none';
    }
</script>
<style type=\"text/css\">
    #loginform {
        display: none;
    }
</style>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_below_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "below_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "below_footer"));

        // line 54
        echo "<script>
    ";
        // line 55
        if ( !array_key_exists("deeplink", $context)) {
            // line 56
            echo "    // clear opened tabs store
    localStorage.removeItem(\"pimcore_opentabs\");
    ";
        }
        // line 59
        echo "
    // hide symfony toolbar by default
    var symfonyToolbarKey = 'symfony/profiler/toolbar/displayState';
    if(!window.localStorage.getItem(symfonyToolbarKey)) {
        window.localStorage.setItem(symfonyToolbarKey, 'none');
    }


    // CSRF token refresh
    var formElement = document.getElementById('form-element');
    var csrfRefreshInProgress = false;
    function refreshCsrfToken() {
        csrfRefreshInProgress = true;
        formElement.style.opacity = '0.3';
        var request = new XMLHttpRequest();
        request.open('GET', '";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_admin_login_csrf_token");
        echo "');
        request.onload = function () {
            if (this.status >= 200 && this.status < 400) {
                var res = JSON.parse(this.response);
                document.getElementById('csrfToken').setAttribute('value', res['csrfToken']);
                formElement.style.opacity = '1';
                csrfRefreshInProgress = false;
            }
        };
        request.send();
    }
    document.addEventListener('visibilitychange', function(ev) {
        if(document.visibilityState === 'visible') {
            refreshCsrfToken();
        }
    });
    window.setInterval(refreshCsrfToken, ";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["csrfTokenRefreshInterval"]) || array_key_exists("csrfTokenRefreshInterval", $context) ? $context["csrfTokenRefreshInterval"] : (function () { throw new RuntimeError('Variable "csrfTokenRefreshInterval" does not exist.', 90, $this->source); })()), "html", null, true);
        echo ");
    formElement.addEventListener(\"submit\", function(evt) {
        if(csrfRefreshInProgress) {
            evt.preventDefault();
        }
    }, true);

</script>

";
        // line 99
        echo $this->extensions['Pimcore\Twig\Extension\HelpersExtension']->breachAttackRandomContent();
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreAdmin/Admin/Login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 99,  219 => 90,  200 => 74,  183 => 59,  178 => 56,  176 => 55,  173 => 54,  163 => 53,  137 => 36,  124 => 26,  120 => 24,  118 => 23,  110 => 20,  104 => 17,  99 => 15,  95 => 14,  91 => 13,  88 => 12,  82 => 9,  79 => 8,  77 => 7,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@PimcoreAdmin/Admin/Login/layout.html.twig' %}

{% block content %}
<div id=\"loginform\">
    <form id=\"form-element\" method=\"post\" action=\"{{ path('pimcore_admin_login_check', {'perspective' : app.request.get('perspective')|striptags}) }}\">

        {% if error is defined %}
        <div class=\"text error\">
            {{ error|trans([],'admin')|raw }}
        </div>
        {% endif %}

        <input type=\"text\" name=\"username\" autocomplete=\"username\" placeholder=\"{{ 'username'|trans([], 'admin') }}\" required autofocus>
        <input type=\"password\" name=\"password\" autocomplete=\"current-password\" placeholder=\"{{ 'password'|trans([], 'admin') }}\" required>
        <input type=\"hidden\" name=\"csrfToken\" id=\"csrfToken\" value=\"{{ pimcore_csrf.getCsrfToken() }}\">

        <button type=\"submit\">{{ 'login'|trans([], 'admin') }}</button>
    </form>

    <a href=\"{{ path('pimcore_admin_login_lostpassword') }}\" class=\"lostpassword\">{{ 'Forgot your password'|trans([], 'admin') }}?</a>
</div>

{% if not browserSupported %}
<div id=\"browserinfo\">
    <div class=\"text\">
        {{ 'Your browser is not supported. Please install the latest version of one of the following browsers.'|trans([], 'admin') }}
    </div>

    <div class=\"text browserinfo\">
        <a href=\"https://www.google.com/chrome\" target=\"_blank\" rel=\"noopener noreferrer\" title=\"Chrome\"><img src=\"/bundles/pimcoreadmin/img/login/chrome.svg\" alt=\"Chrome\"/></a>
        <a href=\"https://www.mozilla.org/firefox\" target=\"_blank\" rel=\"noopener noreferrer\" title=\"Firefox\"><img src=\"/bundles/pimcoreadmin/img/login/firefox.svg\" alt=\"Firefox\"/></a>
        <a href=\"https://www.apple.com/safari\" target=\"_blank\" rel=\"noopener noreferrer\" title=\"Safari\"><img src=\"/bundles/pimcoreadmin/img/login/safari.svg\" alt=\"Safari\"/></a>
        <a href=\"https://www.microsoft.com/edge\" target=\"_blank\" rel=\"noopener noreferrer\" title=\"Edge\"><img src=\"/bundles/pimcoreadmin/img/login/edge.svg\" alt=\"Edge\"/></a>
    </div>

    <a href=\"#\" onclick=\"showLogin();\">{{ 'Click here to proceed'|trans([], 'admin') }}</a>
</div>

<script type=\"text/javascript\">
    function showLogin() {
        document.getElementById('loginform').style.display = 'block';
        document.getElementById('browserinfo').style.display = 'none';
    }
</script>
<style type=\"text/css\">
    #loginform {
        display: none;
    }
</style>
{% endif %}
{% endblock %}

{% block below_footer %}
<script>
    {% if deeplink is not defined %}
    // clear opened tabs store
    localStorage.removeItem(\"pimcore_opentabs\");
    {% endif %}

    // hide symfony toolbar by default
    var symfonyToolbarKey = 'symfony/profiler/toolbar/displayState';
    if(!window.localStorage.getItem(symfonyToolbarKey)) {
        window.localStorage.setItem(symfonyToolbarKey, 'none');
    }


    // CSRF token refresh
    var formElement = document.getElementById('form-element');
    var csrfRefreshInProgress = false;
    function refreshCsrfToken() {
        csrfRefreshInProgress = true;
        formElement.style.opacity = '0.3';
        var request = new XMLHttpRequest();
        request.open('GET', '{{ path(\"pimcore_admin_login_csrf_token\") }}');
        request.onload = function () {
            if (this.status >= 200 && this.status < 400) {
                var res = JSON.parse(this.response);
                document.getElementById('csrfToken').setAttribute('value', res['csrfToken']);
                formElement.style.opacity = '1';
                csrfRefreshInProgress = false;
            }
        };
        request.send();
    }
    document.addEventListener('visibilitychange', function(ev) {
        if(document.visibilityState === 'visible') {
            refreshCsrfToken();
        }
    });
    window.setInterval(refreshCsrfToken, {{ csrfTokenRefreshInterval }});
    formElement.addEventListener(\"submit\", function(evt) {
        if(csrfRefreshInProgress) {
            evt.preventDefault();
        }
    }, true);

</script>

{{ pimcore_breach_attack_random_content() }}

{% endblock %}
", "@PimcoreAdmin/Admin/Login/login.html.twig", "/opt/bitnami/pimcore/vendor/pimcore/pimcore/bundles/AdminBundle/Resources/views/Admin/Login/login.html.twig");
    }
}
