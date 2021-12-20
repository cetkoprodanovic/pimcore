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

/* areas/email-news/view.html.twig */
class __TwigTemplate_cb760bc3dde9443a3d24fca4ebb8bfe3115f646ac58a0cda57dbcf4d2a85662f extends Template
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
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "renderlet", "newsteaser", ["type" => "object", "editmode" =>         // line 4
($context["editmode"] ?? null), "controller" => "App\\Controller\\NewsController::emailNewsTeaserAction", "title" => "Drag a news object here", "height" => "400px", "width" => "100%"]);
    }

    public function getTemplateName()
    {
        return "areas/email-news/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "areas/email-news/view.html.twig", "/opt/bitnami/pimcore/templates/areas/email-news/view.html.twig");
    }
}
