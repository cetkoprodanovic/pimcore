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

/* includes/editmode-layout.html.twig */
class __TwigTemplate_b486d847a355724cf7f4e6950ab28e99d93bfba6df4fa6745a5f0d6dcc457697 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'editmode_header' => [$this, 'block_editmode_header'],
            'editmode_footer' => [$this, 'block_editmode_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('editmode_header', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('editmode_footer', $context, $blocks);
        // line 28
        echo "


";
    }

    // line 1
    public function block_editmode_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if (($context["editmode"] ?? null)) {
            // line 4
            echo "<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\">
    <link href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/css/global.css"), "html", null, true);
            echo "\" rel=\"stylesheet\">
    <link href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/css/editmode.css"), "html", null, true);
            echo "\" rel=\"stylesheet\">
</head>
<body>
<div style=\"max-width: 300px;\">
    <div class=\"sidebar\">
    ";
        }
    }

    // line 20
    public function block_editmode_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        if (($context["editmode"] ?? null)) {
            // line 22
            echo "    </div>
</div>
</body>
</html>
    ";
        }
    }

    public function getTemplateName()
    {
        return "includes/editmode-layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  91 => 21,  87 => 20,  76 => 12,  72 => 11,  68 => 10,  60 => 4,  57 => 2,  53 => 1,  46 => 28,  44 => 20,  41 => 19,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/editmode-layout.html.twig", "/opt/bitnami/pimcore/templates/includes/editmode-layout.html.twig");
    }
}
