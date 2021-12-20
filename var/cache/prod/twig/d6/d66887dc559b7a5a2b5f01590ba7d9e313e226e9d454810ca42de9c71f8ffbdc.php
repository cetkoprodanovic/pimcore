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

/* areas/print-title-page/view.html.twig */
class __TwigTemplate_d606675afd29f34125a50b9e41d949f6f71542674e983a2e01435374d7da24d9 extends Template
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
        echo "<div class=\"title-page-container\">

    ";
        // line 3
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "backgroundimage", ["thumbnail" => ((($context["editmode"] ?? null)) ? ("print_backgroundimage_small") : ("print_backgroundimage")), "class" => "background"]);
        echo "

    <div class=\"img-container\">
        ";
        // line 6
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "titleimage", ["thumbnail" => "print_titleimage", "class" => "title"]);
        echo "

    </div>

    <div class=\"heading\">";
        // line 10
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "heading");
        echo "</div>
    <div class=\"subheading\">";
        // line 11
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "subheading");
        echo "</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "areas/print-title-page/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  54 => 10,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "areas/print-title-page/view.html.twig", "/opt/bitnami/pimcore/templates/areas/print-title-page/view.html.twig");
    }
}
