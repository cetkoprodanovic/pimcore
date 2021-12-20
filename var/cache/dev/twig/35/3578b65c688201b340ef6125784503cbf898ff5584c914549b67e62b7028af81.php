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
class __TwigTemplate_639eb2daf466c9dd77f3cc4f2f9b77194798f8ac035e03f29170ee1c4ef72d87 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "snippets/standard-teaser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "snippets/standard-teaser.html.twig"));

        // line 1
        $context["suffix"] = (($context["suffix"]) ?? (""));
        // line 2
        echo "
";
        // line 3
        if ((twig_test_empty((isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 3, $this->source); })())) && (isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 3, $this->source); })()))) {
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
(isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 17, $this->source); })())), ["thumbnail" => "standardTeaser", "imgAttributes" => ["class" => "img-fluid w-100"]]);
        // line 21
        echo "

    <div class=\"card-body\">
        <h4 class=\"card-title pricing-card-title text-uppercase\">";
        // line 24
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", ("title" . (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 24, $this->source); })())));
        echo "</h4>
        <p class=\"card-text\">
            ";
        // line 26
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", ("text" .         // line 27
(isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 27, $this->source); })())), ["height" => 100, "enterMode" => 2]);
        // line 31
        echo "
        </p>
        <p>
            ";
        // line 34
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", ("link" .         // line 35
(isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 35, $this->source); })())), ["class" => "btn btn-lg btn-secondary"]);
        // line 38
        echo "
        </p>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  90 => 38,  88 => 35,  87 => 34,  82 => 31,  80 => 27,  79 => 26,  74 => 24,  69 => 21,  67 => 17,  66 => 16,  62 => 14,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set suffix = suffix ?? '' %}

{% if suffix is empty and editmode %}
    <style type=\"text/css\">
        .teaser {
            max-width: 250px;
        }

        .teaser img {
            max-width: 100%;
        }
    </style>
{% endif %}

<div class=\"teaser card custom-standard-card mb-4 shadow-sm\">
    {{
        pimcore_image('image' ~ suffix, {
            thumbnail: 'standardTeaser',
            imgAttributes: {class: 'img-fluid w-100'}
        })
    }}

    <div class=\"card-body\">
        <h4 class=\"card-title pricing-card-title text-uppercase\">{{ pimcore_input('title' ~ suffix) }}</h4>
        <p class=\"card-text\">
            {{
                    pimcore_wysiwyg('text' ~ suffix, {
                    height: 100,
                    enterMode: 2,
                })
            }}
        </p>
        <p>
            {{
                pimcore_link('link' ~ suffix, {
                    class: 'btn btn-lg btn-secondary'
                })
            }}
        </p>
    </div>
</div>
", "snippets/standard-teaser.html.twig", "/opt/bitnami/pimcore/templates/snippets/standard-teaser.html.twig");
    }
}
