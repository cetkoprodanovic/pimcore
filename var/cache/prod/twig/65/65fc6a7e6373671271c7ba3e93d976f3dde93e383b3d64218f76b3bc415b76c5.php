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
class __TwigTemplate_34293325a8879e919c75142aa8eebeec0cfe204a72ee40eab2606b8857001afa extends Template
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
        if (($context["editmode"] ?? null)) {
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
        return array (  68 => 19,  62 => 16,  59 => 15,  53 => 12,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "areas/email-image/view.html.twig", "/opt/bitnami/pimcore/templates/areas/email-image/view.html.twig");
    }
}
