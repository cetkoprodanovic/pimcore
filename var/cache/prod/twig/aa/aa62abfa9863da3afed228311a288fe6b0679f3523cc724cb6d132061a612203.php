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

/* layouts/print_catalog.html.twig */
class __TwigTemplate_e3bbca0d5aa38f002ec0bd050a3726a5a909bfa055ec42126d046c4ba775df1c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'headscripts' => [$this, 'block_headscripts'],
            'register_definition' => [$this, 'block_register_definition'],
            'inlinescripts' => [$this, 'block_inlinescripts'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"\">
<head>

    ";
        // line 6
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 9
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/print/css/print-style.css\"/>

    <link href=\"https://fonts.googleapis.com/css?family=Hind+Guntur:300,400,500,600,700&display=swap\" rel=\"stylesheet\">
    ";
        // line 13
        if (($context["editmode"] ?? null)) {
            // line 14
            echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/print/css/print-edit.css\" media=\"screen\" />
    ";
        }
        // line 16
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/print/css/print-preview.css\" media=\"screen\" />

    ";
        // line 18
        if ((array_key_exists("printermarks", $context) && (($context["printermarks"] ?? null) == true))) {
            // line 19
            echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/pimcoreadmin/css/print/print-printermarks.css\" media=\"print\" />
    ";
        }
        // line 21
        echo "

    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>



    ";
        // line 27
        $this->displayBlock('headscripts', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('register_definition', $context, $blocks);
        // line 36
        echo "
</head>

<body>
<div class=\"site\">
    ";
        // line 41
        $this->displayBlock("content", $context, $blocks);
        echo "
</div>



";
        // line 46
        $this->displayBlock('inlinescripts', $context, $blocks);
        // line 49
        echo "
</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_head_stylesheets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'head_stylesheets');
    }

    // line 6
    public function block_head_stylesheets_deferred($context, array $blocks = [])
    {
        // line 7
        echo "        ";
        echo call_user_func_array($this->env->getFunction('pimcore_head_link')->getCallable(), []);
        echo "
    ";
        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_headscripts($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'headscripts');
    }

    // line 27
    public function block_headscripts_deferred($context, array $blocks = [])
    {
        // line 28
        echo "        ";
        echo call_user_func_array($this->env->getFunction('pimcore_head_script')->getCallable(), []);
        echo "
    ";
        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_register_definition($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'register_definition');
    }

    // line 31
    public function block_register_definition_deferred($context, array $blocks = [])
    {
        // line 32
        echo "        <style type=\"text/css\">
            ";
        // line 33
        echo call_user_func_array($this->env->getFunction('pimcore_placeholder')->getCallable(), ["register-title-definition"]);
        echo "
        </style>
    ";
        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_inlinescripts($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'inlinescripts');
    }

    // line 46
    public function block_inlinescripts_deferred($context, array $blocks = [])
    {
        // line 47
        echo "    ";
        echo call_user_func_array($this->env->getFunction('pimcore_inline_script')->getCallable(), []);
        echo "
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    public function getTemplateName()
    {
        return "layouts/print_catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 47,  169 => 46,  156 => 33,  153 => 32,  150 => 31,  137 => 28,  134 => 27,  121 => 7,  118 => 6,  105 => 49,  103 => 46,  95 => 41,  88 => 36,  86 => 31,  83 => 30,  81 => 27,  73 => 21,  69 => 19,  67 => 18,  63 => 16,  59 => 14,  57 => 13,  51 => 9,  49 => 6,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layouts/print_catalog.html.twig", "/opt/bitnami/pimcore/templates/layouts/print_catalog.html.twig");
    }
}
