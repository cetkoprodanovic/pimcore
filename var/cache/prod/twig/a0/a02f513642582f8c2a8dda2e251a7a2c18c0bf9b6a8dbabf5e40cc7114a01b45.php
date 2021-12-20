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

/* areas/print-key-visual/view.html.twig */
class __TwigTemplate_40862cd29361acd02ebfc9f92d2b66d526f40d0b68c9ef5466a8307d2e37e154 extends Template
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
        // line 1
        echo "
<div class=\"keyvisual\">
    <div class=\"image-container\">
        ";
        // line 4
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "keyvisual", ["thumbnail" => "print_keyvisual"]);
        echo "
    </div>

    <h1 class=\"headline\">
        ";
        // line 8
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline");
        echo "
    </h1>

</div>

";
        // line 13
        if ( !($context["editmode"] ?? null)) {
            // line 14
            echo "    <div class=\"footer-text-placeholder-left\">";
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline");
            echo "</div>
    <div class=\"footer-text-placeholder-right\">";
            // line 15
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline");
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "areas/print-key-visual/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  59 => 14,  57 => 13,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "areas/print-key-visual/view.html.twig", "/opt/bitnami/pimcore/templates/areas/print-key-visual/view.html.twig");
    }
}
