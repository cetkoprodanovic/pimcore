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

/* default/generic_mail.html.twig */
class __TwigTemplate_a7783eb351b2e4285c9358f92f71ca889464628498121d0d601974ef5bd3b253 extends Template
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
        return "layouts/email.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/email.html.twig", "default/generic_mail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <table class=\"spacer\">
        <tbody>
        <tr>
            <td height=\"16px\" style=\"font-size:16px;line-height:16px;\">&#xA0;</td>
        </tr>
        </tbody>
    </table>
    <table class=\"row\">
        <tbody>
        <tr>
            <th class=\"small-12 large-12 columns first last\">
                <table>
                    <tr>
                        <th>

                            <h3>";
        // line 20
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "greeting");
        echo "</h3>
                            <p>";
        // line 21
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", "greeting_text");
        echo "</p>
                        </th>
                    </tr>
                </table>
            </th>
        </tr>
        </tbody>
    </table>

    ";
        // line 30
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "areablock", "content", ["allowed" => [0 => "email-image", 1 => "email-wysiwyg", 2 => "email-teaser", 3 => "email-news"]]);
        // line 39
        echo "

";
    }

    public function getTemplateName()
    {
        return "default/generic_mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 39,  84 => 30,  72 => 21,  68 => 20,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/generic_mail.html.twig", "/opt/bitnami/pimcore/templates/default/generic_mail.html.twig");
    }
}
