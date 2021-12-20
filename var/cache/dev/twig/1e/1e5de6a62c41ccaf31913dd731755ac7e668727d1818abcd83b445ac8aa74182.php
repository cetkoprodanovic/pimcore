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

/* areas/hero-teaser/view.html.twig */
class __TwigTemplate_315313ff767ede96145f29607455e13b5b56a6aad1da637f6705eecef8f25a88 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/hero-teaser/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/hero-teaser/view.html.twig"));

        // line 1
        echo "<section class=\"jumbotron bg-white text-center\">
    <div class=\"container\">
        <h2 class=\"jumbotron-heading\">";
        // line 3
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "infoHeading", ["placeholder" => "Heading"]);
        echo "</h2>
        <p>";
        // line 4
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "infoSummary", ["placeholder" => "Summary"]);
        echo "</p>
        <div class=\"row\">
            <div class=\"col-sm-12 text-center\">
                <div class=\"jumbotron-btn d-inline\">
                    ";
        // line 8
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", "infoLinkPrimary", ["class" => "btn btn-primary my-2"]);
        echo "
                </div>
                <div class=\"jumbotron-btn d-inline\">
                    ";
        // line 11
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", "infoLinkSecondary", ["class" => "btn btn-secondary my-2 ml-3"]);
        echo "
                </div>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "areas/hero-teaser/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  58 => 8,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"jumbotron bg-white text-center\">
    <div class=\"container\">
        <h2 class=\"jumbotron-heading\">{{ pimcore_input('infoHeading',{'placeholder': 'Heading'}) }}</h2>
        <p>{{ pimcore_input('infoSummary',{'placeholder': 'Summary'}) }}</p>
        <div class=\"row\">
            <div class=\"col-sm-12 text-center\">
                <div class=\"jumbotron-btn d-inline\">
                    {{  pimcore_link('infoLinkPrimary', {'class': \"btn btn-primary my-2\"}) }}
                </div>
                <div class=\"jumbotron-btn d-inline\">
                    {{  pimcore_link('infoLinkSecondary', {'class': \"btn btn-secondary my-2 ml-3\"}) }}
                </div>
            </div>
        </div>
    </div>
</section>", "areas/hero-teaser/view.html.twig", "/opt/bitnami/pimcore/templates/areas/hero-teaser/view.html.twig");
    }
}
