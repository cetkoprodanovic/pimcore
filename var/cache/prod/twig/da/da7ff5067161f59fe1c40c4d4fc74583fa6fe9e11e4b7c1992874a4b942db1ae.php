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

/* areas/print-product-table/view.html.twig */
class __TwigTemplate_c0de1cb30fc472f946cdcfc7232929bf0c66d9dd0c7b63707569ab757215e4a7 extends Template
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
        if (($context["editmode"] ?? null)) {
            // line 2
            echo "
    <h3>";
            // line 3
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline");
            echo "</h3>
    <p>";
            // line 4
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "textarea", "headtext");
            echo "</p>

    ";
            // line 6
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "outputchanneltable", "tableconfig", ["disableClassSelection" => false, "disableFavoriteOutputChannel" => true]);
            // line 11
            echo "

";
        } else {
            // line 14
            echo "
    <div class=\"headline\">
        <h2>";
            // line 16
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline");
            echo "</h2>
    </div>

    <p>";
            // line 19
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "textarea", "headtext");
            echo "</p>


    ";
            // line 22
            $context["configArray"] = $this->extensions['Web2PrintToolsBundle\Twig\OutputChannelExtension']->buildOutputDataConfig(twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "outputchanneltable", "tableconfig"), "getOutputChannel", [], "method", false, false, false, 22));
            // line 23
            echo "    <table class=\"outputchannel\">
        ";
            // line 25
            $this->loadTemplate("areas/print-product-table/spec_attribute/column-attribute-table.html.twig", "areas/print-product-table/view.html.twig", 25)->display(twig_array_merge($context, ["configArray" =>             // line 26
($context["configArray"] ?? null), "classname" => ("Pimcore\\Model\\DataObject\\" . twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "outputchanneltable", "tableconfig"), "selectedClass", [], "any", false, false, false, 27)), "elements" => $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "outputchanneltable", "tableconfig"), "thumbnailName" => "print_image_small"]));
            // line 32
            echo "    </table>

";
        }
    }

    public function getTemplateName()
    {
        return "areas/print-product-table/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 32,  80 => 26,  79 => 25,  76 => 23,  74 => 22,  68 => 19,  62 => 16,  58 => 14,  53 => 11,  51 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "areas/print-product-table/view.html.twig", "/opt/bitnami/pimcore/templates/areas/print-product-table/view.html.twig");
    }
}
