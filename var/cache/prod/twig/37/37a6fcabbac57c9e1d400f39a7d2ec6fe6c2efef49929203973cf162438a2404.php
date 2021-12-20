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

/* web2print/default_no_layout.html.twig */
class __TwigTemplate_e06e1a8240e570c4121764d1c7c3b2e2a6aebf7509969ce91c245884cad2b8cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "

    ";
        // line 4
        $this->extensions['App\Twig\Extension\PrintCatalogExtension']->createRegisterTitleStyling(twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "getProperty", [0 => "print_register_title"], "method", false, false, false, 4), twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "getProperty", [0 => "print_register_type"], "method", false, false, false, 4));
        // line 5
        echo "
    <div class=\"page ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\PrintCatalogExtension']->getRegisterName(twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "getProperty", [0 => "print_register_title"], "method", false, false, false, 6)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "getProperty", [0 => "print_register_type"], "method", false, false, false, 6), "html", null, true);
        echo "\" id=\"documentpage-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "\">

        <div>

            ";
        // line 10
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "areablock", "content", ["allowed" => [0 => "print-wysiwyg", 1 => "print-page-break", 2 => "print-title-page", 3 => "print-key-visual", 4 => "print-product-row", 5 => "print-product-table", 6 => "print-toc"]]);
        // line 22
        echo "

        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "web2print/default_no_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 22,  65 => 10,  54 => 6,  51 => 5,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "web2print/default_no_layout.html.twig", "/opt/bitnami/pimcore/templates/web2print/default_no_layout.html.twig");
    }
}
