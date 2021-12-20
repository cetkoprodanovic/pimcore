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

/* layouts/email.html.twig */
class __TwigTemplate_b48abcbcb4e823948d5766fc6518216ee9595ef711fd0a2e5d8bece0f07291c7 extends Template
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
        echo "<!-- Emails use the XHTML Strict doctype -->
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <!-- The character set should be utf-8 -->
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width\"/>
    <!-- Link to the email's CSS, which will be inlined into the email -->
    <link rel=\"stylesheet\" href=\"/static/email/css/foundation-emails.css\">
    <style>
        .header {
            background: #000;
        }
        .header .columns {
            padding-bottom: 0;
        }
        .header p {
            color: #fff;
            margin-bottom: 0;
        }
        .header .container .text-right.text-light {
            color: #fff;
            text-align: right;
        }
        .header .wrapper-inner {
            padding: 20px; /*controls the height of the header*/
        }
        .header .container {
            background: #000;
        }
    </style>
</head>

<body>
<!-- Wrapper for the body of the email -->
<table class=\"body\" data-made-with-foundation>
    <tr>
        <!-- The class, align, and <center> tag center the container -->
        <td class=\"float-center\" align=\"center\" valign=\"top\">
            <center>
                <table align=\"center\" class=\"wrapper header float-center\">
                    <tbody>
                    <tr>
                        <td class=\"wrapper-inner\">
                            <table align=\"center\" class=\"container\">
                                <tbody>
                                <tr>
                                    <td>
                                        <table class=\"row collapse\">
                                            <tbody>
                                            <tr>
                                                <th class=\"small-6 large-6 columns first\" valign=\"middle\">
                                                    <table>
                                                        <tbody>
                                                        <tr>
                                                            <th>
                                                                <img id=\"logo\" src=\"/static/images/logo.jpg\" alt=\"Oldtimer Cars - Pimcore Demo\">
                                                            </th>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </th>
                                                <th class=\"small-6 large-6 columns last\" valign=\"middle\">
                                                    <table>
                                                        <tbody>
                                                        <tr>
                                                            <th>
                                                                <div class=\"text-right text-light\">";
        // line 68
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "title");
        echo "</div>
                                                            </th>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </th>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class=\"container\">
                    <tr>
                        <td>
                            ";
        // line 88
        $this->displayBlock("content", $context, $blocks);
        echo "
                        </td>
                    </tr>
                </table>
            </center>
        </td>
    </tr>
</table>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "layouts/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 88,  106 => 68,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layouts/email.html.twig", "/opt/bitnami/pimcore/templates/layouts/email.html.twig");
    }
}
