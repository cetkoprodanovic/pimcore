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

/* areas/email-image/view.html.twig */
class __TwigTemplate_bc74dc9b1b4daca5154125a64276026f21d01c3efc89d4de68b00c04dd178d32 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/email-image/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/email-image/view.html.twig"));

        // line 1
        echo "<table class=\"row\">
    <tbody>
    <tr>
        <th class=\"small-12 large-12 columns first last\">
            <table>
                <tbody><tr>
                    <th>
                        <center data-parsed=\"\">

                            ";
        // line 10
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "
                                ";
            // line 12
            echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "image", ["thumbnail" => "mail_title", "class" => "float-center"]);
            echo "

                            ";
        } else {
            // line 15
            echo "
                                <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "image"), "getThumbnail", [0 => "mail_title"], "method", false, false, false, 16), "html", null, true);
            echo "\" align=\"center\" class=\"float-center\">

                            ";
        }
        // line 19
        echo "
                        </center>
                    </th>
                    <th class=\"expander\"></th>
                </tr>
                </tbody></table>
        </th>
    </tr>
    </tbody>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "areas/email-image/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  68 => 16,  65 => 15,  59 => 12,  56 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"row\">
    <tbody>
    <tr>
        <th class=\"small-12 large-12 columns first last\">
            <table>
                <tbody><tr>
                    <th>
                        <center data-parsed=\"\">

                            {% if editmode %}

                                {{ pimcore_image('image', {'thumbnail': 'mail_title', 'class': 'float-center'}) }}

                            {% else %}

                                <img src=\"{{ pimcore_image('image').getThumbnail('mail_title') }}\" align=\"center\" class=\"float-center\">

                            {% endif %}

                        </center>
                    </th>
                    <th class=\"expander\"></th>
                </tr>
                </tbody></table>
        </th>
    </tr>
    </tbody>
</table>", "areas/email-image/view.html.twig", "/opt/bitnami/pimcore/templates/areas/email-image/view.html.twig");
    }
}
