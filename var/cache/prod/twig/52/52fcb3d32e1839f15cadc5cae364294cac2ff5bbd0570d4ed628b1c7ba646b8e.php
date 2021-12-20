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

/* snippets/standard-teaser.html.twig */
class __TwigTemplate_731eb471cbd4e43b9503ea1e647685908fe35b1a0ad75482ab26ce7d0d040010 extends Template
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
        $context["suffix"] = (($context["suffix"]) ?? (""));
        // line 2
        echo "
";
        // line 3
        if ((twig_test_empty(($context["suffix"] ?? null)) && ($context["editmode"] ?? null))) {
            // line 4
            echo "    <style type=\"text/css\">
        .teaser {
            max-width: 250px;
        }

        .teaser img {
            max-width: 100%;
        }
    </style>
";
        }
        // line 14
        echo "
<div class=\"teaser card custom-standard-card mb-4 shadow-sm\">
    ";
        // line 16
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", ("image" .         // line 17
($context["suffix"] ?? null)), ["thumbnail" => "standardTeaser", "imgAttributes" => ["class" => "img-fluid w-100"]]);
        // line 21
        echo "

    <div class=\"card-body\">
        <h4 class=\"card-title pricing-card-title text-uppercase\">";
        // line 24
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", ("title" . ($context["suffix"] ?? null)));
        echo "</h4>
        <p class=\"card-text\">
            ";
        // line 26
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", ("text" .         // line 27
($context["suffix"] ?? null)), ["height" => 100, "enterMode" => 2]);
        // line 31
        echo "
        </p>
        <p>
            ";
        // line 34
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", ("link" .         // line 35
($context["suffix"] ?? null)), ["class" => "btn btn-lg btn-secondary"]);
        // line 38
        echo "
        </p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "snippets/standard-teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 38,  82 => 35,  81 => 34,  76 => 31,  74 => 27,  73 => 26,  68 => 24,  63 => 21,  61 => 17,  60 => 16,  56 => 14,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "snippets/standard-teaser.html.twig", "/opt/bitnami/pimcore/templates/snippets/standard-teaser.html.twig");
    }
}
