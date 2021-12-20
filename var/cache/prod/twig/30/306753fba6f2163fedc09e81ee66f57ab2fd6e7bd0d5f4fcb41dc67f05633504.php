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

/* includes/footer.html.twig */
class __TwigTemplate_a352f1e9de26d1b72a3b5a595d4471481a06f15b603e89d3bd6fd7a841c438d1 extends Template
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
            echo "    ";
            twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('pimcore_head_link')->getCallable(), []), "appendStylesheet", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/css/editmode.css")], "method", false, false, false, 2);
            // line 3
            echo "    ";
            echo call_user_func_array($this->env->getFunction('pimcore_head_link')->getCallable(), []);
            echo "
";
        }
        // line 6
        echo "<footer class=\"container py-5\">
    <div class=\"row\">
        <div class=\"col-12 col-md\">
            <a class=\"text-dark text-decoration-none\" href=\"/\" >
                <img id=\"logo-footer\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/static/images/logo-dark.svg"), "html", null, true);
        echo "\" >
                <small class=\"d-block mb-3  p-3\">&copy; ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " pimcore GmbH</small>
            </a>
        </div>
        ";
        // line 14
        if (($context["editmode"] ?? null)) {
            // line 15
            echo "            <h3 class=\"float-left\">";
            echo "Footer Column(s):";
            echo "</h3>
        ";
        }
        // line 17
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->getBlockIterator($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "block", "mainlinkblock")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 18
            echo "            <div class=\"col-6 col-md\">
                <h5>";
            // line 19
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "mainBlockTitle", ["placeholder" => "Footer Title"]);
            echo "</h5>
                <ul class=\"list-unstyled text-small\">
                    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->getBlockIterator($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "block", "linkblock")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 22
                echo "                        <li>";
                echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", "myLink", ["class" => "text-muted"]);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                </ul>
            </div>
            ";
            // line 26
            if (($context["editmode"] ?? null)) {
                // line 27
                echo "                <hr />
            ";
            }
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "includes/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 30,  108 => 29,  104 => 27,  102 => 26,  98 => 24,  89 => 22,  85 => 21,  80 => 19,  77 => 18,  72 => 17,  66 => 15,  64 => 14,  58 => 11,  54 => 10,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/footer.html.twig", "/opt/bitnami/pimcore/templates/includes/footer.html.twig");
    }
}
