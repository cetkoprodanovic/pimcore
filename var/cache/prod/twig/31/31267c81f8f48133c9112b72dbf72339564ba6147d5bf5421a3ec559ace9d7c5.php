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

/* @PimcoreCore/Areabrick/wrapper.html.twig */
class __TwigTemplate_b7775668ab066f68f540939ec388bf26bbacc129fd93affc12536e315b85b925 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'areabrickWrapper' => [$this, 'block_areabrickWrapper'],
            'areabrickOpenTag' => [$this, 'block_areabrickOpenTag'],
            'areabrickFrontend' => [$this, 'block_areabrickFrontend'],
            'areabrickCloseTag' => [$this, 'block_areabrickCloseTag'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
";
        // line 6
        echo "
";
        // line 10
        echo "
";
        // line 11
        if ((($context["editmode"] ?? null) && ($context["isAreaBlock"] ?? null))) {
            // line 12
            echo "    <div class=\"pimcore_area_entry pimcore_block_entry\" ";
            echo ($context["editmodeOuterAttributes"] ?? null);
            echo " ";
            echo ($context["editmodeGenericAttributes"] ?? null);
            echo ">
        <div class=\"pimcore_area_buttons\" ";
            // line 13
            echo ($context["editmodeGenericAttributes"] ?? null);
            echo ">
            <div class=\"pimcore_area_buttons_inner\">
                <div class=\"pimcore_block_plus_up\" ";
            // line 15
            echo ($context["editmodeGenericAttributes"] ?? null);
            echo "></div>
                <div class=\"pimcore_block_plus\" ";
            // line 16
            echo ($context["editmodeGenericAttributes"] ?? null);
            echo "></div>
                <div class=\"pimcore_block_minus\" ";
            // line 17
            echo ($context["editmodeGenericAttributes"] ?? null);
            echo "></div>
                <div class=\"pimcore_block_up\" ";
            // line 18
            echo ($context["editmodeGenericAttributes"] ?? null);
            echo "></div>
                <div class=\"pimcore_block_down\" ";
            // line 19
            echo ($context["editmodeGenericAttributes"] ?? null);
            echo "></div>

                <div class=\"pimcore_block_type\" ";
            // line 21
            echo ($context["editmodeGenericAttributes"] ?? null);
            echo "></div>
                <div class=\"pimcore_block_options\" ";
            // line 22
            echo ($context["editmodeGenericAttributes"] ?? null);
            echo "></div>
                <div class=\"pimcore_block_visibility\" ";
            // line 23
            echo ($context["editmodeGenericAttributes"] ?? null);
            echo "></div>

                ";
            // line 25
            if (($context["editableDialog"] ?? null)) {
                // line 26
                echo "                    <div class=\"pimcore_block_dialog\" ";
                echo ($context["editmodeGenericAttributes"] ?? null);
                echo " ";
                echo ($context["editableDialogAttributes"] ?? null);
                echo "></div>
                ";
            }
            // line 28
            echo "
                <div class=\"pimcore_block_label\" ";
            // line 29
            echo ($context["editmodeGenericAttributes"] ?? null);
            echo "></div>
                <div class=\"pimcore_block_clear\" ";
            // line 30
            echo ($context["editmodeGenericAttributes"] ?? null);
            echo "></div>
            </div>
        </div>
        ";
            // line 33
            if (($context["editableDialog"] ?? null)) {
                // line 34
                echo "            <template id=\"dialogBoxConfig-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["editableDialog"] ?? null), "id", [], "any", false, false, false, 34), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, json_encode(($context["editableDialog"] ?? null)), "html", null, true);
                echo "</template>
            ";
                // line 35
                echo ($context["dialogHtml"] ?? null);
                echo "
        ";
            }
        }
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('areabrickWrapper', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        if ((($context["editmode"] ?? null) && ($context["isAreaBlock"] ?? null))) {
            // line 54
            echo "    </div>
";
        }
    }

    // line 39
    public function block_areabrickWrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "            ";
        $this->displayBlock('areabrickOpenTag', $context, $blocks);
        // line 43
        echo "
                ";
        // line 44
        $this->displayBlock('areabrickFrontend', $context, $blocks);
        // line 47
        echo "
            ";
        // line 48
        $this->displayBlock('areabrickCloseTag', $context, $blocks);
        // line 51
        echo "        ";
    }

    // line 40
    public function block_areabrickOpenTag($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                ";
        echo twig_get_attribute($this->env, $this->source, ($context["brick"] ?? null), "htmlTagOpen", [0 => ($context["info"] ?? null)], "method", false, false, false, 41);
        echo "
            ";
    }

    // line 44
    public function block_areabrickFrontend($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, ($context["templating"] ?? null), "render", [0 => ($context["viewTemplate"] ?? null), 1 => ($context["viewParameters"] ?? null)], "method", false, false, false, 45);
        echo "
                ";
    }

    // line 48
    public function block_areabrickCloseTag($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "                ";
        echo twig_get_attribute($this->env, $this->source, ($context["brick"] ?? null), "htmlTagClose", [0 => ($context["info"] ?? null)], "method", false, false, false, 49);
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "@PimcoreCore/Areabrick/wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 49,  195 => 48,  188 => 45,  184 => 44,  177 => 41,  173 => 40,  169 => 51,  167 => 48,  164 => 47,  162 => 44,  159 => 43,  156 => 40,  152 => 39,  146 => 54,  144 => 53,  141 => 52,  139 => 39,  136 => 38,  130 => 35,  123 => 34,  121 => 33,  115 => 30,  111 => 29,  108 => 28,  100 => 26,  98 => 25,  93 => 23,  89 => 22,  85 => 21,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  59 => 13,  52 => 12,  50 => 11,  47 => 10,  44 => 6,  41 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PimcoreCore/Areabrick/wrapper.html.twig", "/opt/bitnami/pimcore/vendor/pimcore/pimcore/bundles/CoreBundle/Resources/views/Areabrick/wrapper.html.twig");
    }
}
