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

/* areas/print-product-row/view.html.twig */
class __TwigTemplate_ca6de4da8612646a40146daaa651a34357672a9ae65ae79a16aafc87b3d9f790 extends Template
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
        $context["leftMode"] = (twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "select", "mode"), "value", [], "any", false, false, false, 1) == "left");
        // line 2
        echo "
";
        // line 3
        if (($context["editmode"] ?? null)) {
            // line 4
            echo "
    <div class=\"displaymode\">
        <div>Display Mode:</div>
        ";
            // line 7
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "select", "mode", ["reload" => true, "store" => [0 => [0 => "left", 1 => "Left wide"], 1 => [0 => "right", 1 => "Right wide"]]]);
            // line 15
            echo "
    </div>

";
        }
        // line 19
        echo "

<div class=\"productrow\">

    <div class=\"element first ";
        // line 23
        echo ((($context["leftMode"] ?? null)) ? ("wide") : ("small"));
        echo " \">
        ";
        // line 24
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "renderlet", "productteaser1", ["controller" => "App\\Controller\\Web2printController::productCellAction", "type" => "object", "className" => [0 => "Car", 1 => "AccessoryPart"], "editmode" =>         // line 29
($context["editmode"] ?? null), "title" => "Drag a product here", "height" => 400, "mode" => ((        // line 32
($context["leftMode"] ?? null)) ? ("") : ("small"))]);
        // line 34
        echo "

    </div>

    <div class=\"element ";
        // line 38
        echo ((($context["leftMode"] ?? null)) ? ("small") : ("wide"));
        echo "\">
        ";
        // line 39
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "renderlet", "productteaser2", ["controller" => "App\\Controller\\Web2printController::productCellAction", "type" => "object", "className" => [0 => "Car", 1 => "AccessoryPart"], "editmode" =>         // line 44
($context["editmode"] ?? null), "title" => "Drag a product here", "height" => 400, "mode" => ((        // line 47
($context["leftMode"] ?? null)) ? ("small") : ("wide"))]);
        // line 49
        echo "
    </div>

    <div class=\"clear\"></div>

</div>
";
    }

    public function getTemplateName()
    {
        return "areas/print-product-row/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 49,  83 => 47,  82 => 44,  81 => 39,  77 => 38,  71 => 34,  69 => 32,  68 => 29,  67 => 24,  63 => 23,  57 => 19,  51 => 15,  49 => 7,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "areas/print-product-row/view.html.twig", "/opt/bitnami/pimcore/templates/areas/print-product-row/view.html.twig");
    }
}
