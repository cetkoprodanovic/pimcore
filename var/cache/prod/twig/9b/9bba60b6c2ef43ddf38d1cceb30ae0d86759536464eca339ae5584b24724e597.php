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

/* areas/print-page-break/view.html.twig */
class __TwigTemplate_c432f61b57f116c618f6baccc6bbc9bafdcc7af6ccc18cc8de3ec7f46ffa295b extends Template
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
        echo "<div class=\"pagebreak-bottom\"></div>
<div class=\"pagebreak-force-page-break\"></div>
";
    }

    public function getTemplateName()
    {
        return "areas/print-page-break/view.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "areas/print-page-break/view.html.twig", "/opt/bitnami/pimcore/templates/areas/print-page-break/view.html.twig");
    }
}
