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

/* news/listing.html.twig */
class __TwigTemplate_0943525211553f99fb5c6ed3bf3be50b9cd074f46d3adc7db6f4a16c49d368fa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "news/listing.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div id=\"main-content\" class=\"main-content\">

        ";
        // line 8
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "getTitle", [], "method", false, false, false, 8))) {
            // line 9
            echo "            ";
            call_user_func_array($this->env->getFunction('pimcore_head_title')->getCallable(), [twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline"), "getData", [], "method", false, false, false, 9), "PREPEND"]);
            // line 10
            echo "        ";
        }
        // line 11
        echo "
        <div class=\"page-header\">
            <h1>";
        // line 13
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline", ["placeholder" => "Headline"]);
        echo "</h1>
        </div>

        ";
        // line 16
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "areablock", "content", ["allowed" => [0 => "headlines", 1 => "hero-teaser", 2 => "horizontal-line", 3 => "wysiwyg"]]);
        // line 25
        echo "

        <div class=\"row\">
            <ul class=\"list-unstyled\">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["news"]);
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 30
            echo "                    ";
            // line 31
            echo "                    ";
            $context["detailLink"] = $this->extensions['App\Twig\Extension\NewsExtension']->generateLink($context["news"]);
            // line 32
            echo "
                    <li class=\"media my-3\">
                        ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["news"], "gallery", [], "any", false, false, false, 34), "items", [], "any", false, false, false, 34)) {
                // line 35
                echo "                            ";
                $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["news"], "gallery", [], "any", false, false, false, 35), "current", [], "any", false, false, false, 35);
                // line 36
                echo "
                            ";
                // line 37
                if (twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "image", [], "any", false, false, false, 37)) {
                    // line 38
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, ($context["detailLink"] ?? null), "html", null, true);
                    echo "\">
                                    ";
                    // line 39
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "image", [], "any", false, false, false, 39), "thumbnail", [0 => "newsList"], "method", false, false, false, 39), "html", [0 => ["imgAttributes" => ["class" => "mr-3"]]], "method", false, false, false, 39);
                    echo "
                                </a>
                            ";
                }
                // line 42
                echo "                        ";
            }
            // line 43
            echo "
                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">
                                <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, ($context["detailLink"] ?? null), "html", null, true);
            echo "\" class=\"text-decoration-none text-dark\">
                                    ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "title", [], "any", false, false, false, 47), "html", null, true);
            echo "
                                </a>
                            </h5>
                            ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "shortText", [], "any", false, false, false, 50), "html", null, true);
            echo "
                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </ul>
        </div>

        <div class=\"pt-5\">

            ";
        // line 59
        $this->loadTemplate("includes/pagination.html.twig", "news/listing.html.twig", 59)->display($context);
        // line 60
        echo "
        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "news/listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 60,  150 => 59,  143 => 54,  133 => 50,  127 => 47,  123 => 46,  118 => 43,  115 => 42,  109 => 39,  104 => 38,  102 => 37,  99 => 36,  96 => 35,  94 => 34,  90 => 32,  87 => 31,  85 => 30,  81 => 29,  75 => 25,  73 => 16,  67 => 13,  63 => 11,  60 => 10,  57 => 9,  55 => 8,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "news/listing.html.twig", "/opt/bitnami/pimcore/templates/news/listing.html.twig");
    }
}
