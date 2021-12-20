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

/* areas/print-toc/view.html.twig */
class __TwigTemplate_620d791c6f6f6e5e1dff77c4b1fbf56c8fe70df4f7340f4d030e11dbc5a603bb extends Template
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
        twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('pimcore_head_script')->getCallable(), []), "appendFile", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/web2printtools/vendor/js/awesomizr.js")], "method", false, false, false, 1);
        // line 2
        echo "
";
        // line 3
        if ( !($context["editmode"] ?? null)) {
            // line 4
            echo "    <script type=\"text/javascript\">

        \$(document).ready(function() {
            Awesomizr.createTableOfContents({
                /* toc container */
                insertiontarget: '#toc-wrapper',
                insertiontype: 'beforeend',
                /* levels to look for and link to in toc*/
                elements: ['h1','h2'],
                /* container element for the toc */
                container: {tag: 'ul', addClass: 'toc'},
                /* container element for one line in the toc */
                line: {tag: 'li'},
                disabledocumenttitle: true,
                toctitle: ' ',

                /* method of getting the text for the toc lines */
                text: function (elem) {
                    return elem.textContent;
                }
            });

        });

    </script>
";
        }
        // line 30
        echo "

<div id=\"toc-wrapper\">
    <h1>";
        // line 33
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "heading");
        echo "</h1>

    <p>";
        // line 35
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", "introtext");
        echo "</p>

    ";
        // line 37
        if (($context["editmode"] ?? null)) {
            // line 38
            echo "        TABLE OF CONTENTS IS GENERATED ON PDF-EXPORT
    ";
        }
        // line 40
        echo "</div>


";
        // line 43
        if ( !($context["editmode"] ?? null)) {
            // line 44
            echo "    <div class=\"toc-footer-text-placeholder-left\">";
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "heading");
            echo "</div>
    <div class=\"toc-footer-text-placeholder-right\">";
            // line 45
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "heading");
            echo "</div>
";
        }
        // line 47
        echo "


";
    }

    public function getTemplateName()
    {
        return "areas/print-toc/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 47,  105 => 45,  100 => 44,  98 => 43,  93 => 40,  89 => 38,  87 => 37,  82 => 35,  77 => 33,  72 => 30,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "areas/print-toc/view.html.twig", "/opt/bitnami/pimcore/templates/areas/print-toc/view.html.twig");
    }
}
