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

/* checkout/confirmation_mail.html.twig */
class __TwigTemplate_f49aa4d4a23aa6915317451563c7fd7c105ab99f2bb12f1acb51ec0672543b35 extends Template
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
        // line 5
        return "layouts/email.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/email.html.twig", "checkout/confirmation_mail.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
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
        // line 24
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "greeting");
        echo "</h3>
                            <p>";
        // line 25
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", "greeting_text");
        echo "</p>
                            <table class=\"spacer\">
                                <tbody>
                                <tr>
                                    <td height=\"16px\" style=\"font-size:16px;line-height:16px;\">&#xA0;</td>
                                </tr>
                                </tbody>
                            </table>
                            ";
        // line 33
        if (($context["order"] ?? null)) {
            // line 34
            echo "                                <table class=\"callout\">
                                    <tr>
                                        <th class=\"callout-inner secondary\">
                                            <table class=\"row\">
                                                <tbody>
                                                    <tr>
                                                        <th class=\"small-12 large-6 columns first\">
                                                            <table>
                                                                <tr>
                                                                    <th>
                                                                        <p> <strong>";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.orderNumber"), "html", null, true);
            echo "</strong><br> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "ordernumber", [], "any", false, false, false, 44), "html", null, true);
            echo " </p>
                                                                        <p> <strong>";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.email"), "html", null, true);
            echo "</strong><br> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customerEmail", [], "any", false, false, false, 45), "html", null, true);
            echo "</p>
                                                                    </th>
                                                                </tr>
                                                            </table>
                                                        </th>
                                                        <th class=\"small-12 large-6 columns last\">
                                                            <table>
                                                                <tr>
                                                                    <th>
                                                                        <p>
                                                                            <strong>";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.address"), "html", null, true);
            echo "</strong><br>
                                                                            ";
            // line 56
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customerCompany", [], "any", false, false, false, 56)) {
                // line 57
                echo "                                                                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customerCompany", [], "any", false, false, false, 57), "html", null, true);
                echo "
                                                                            ";
            }
            // line 59
            echo "                                                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customerFirstname", [], "any", false, false, false, 59), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customerLastname", [], "any", false, false, false, 59), "html", null, true);
            echo " <br/>
                                                                            ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customerStreet", [], "any", false, false, false, 60), "html", null, true);
            echo " <br/>
                                                                            ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customerZip", [], "any", false, false, false, 61), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customerCity", [], "any", false, false, false, 61), "html", null, true);
            echo " <br/>
                                                                            ";
            // line 62
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('country')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customerCountry", [], "any", false, false, false, 62)]), "html", null, true);
            echo "
                                                                        </p>
                                                                    </th>
                                                                </tr>
                                                            </table>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </th>
                                        <th class=\"expander\"></th>
                                    </tr>
                                </table>

                                <table class=\"spacer\">
                                    <tbody>
                                    <tr>
                                        <td height=\"30px\" style=\"font-size:30px;line-height:30px;\">&#xA0;</td>
                                    </tr>
                                    </tbody>
                                </table>

                                <h4>";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.summary"), "html", null, true);
            echo "</h4>
                                <table>
                                    <tr>
                                        <th><strong>";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.products"), "html", null, true);
            echo "</strong></th>
                                        <th></th>
                                        <th></th>
                                    </tr>

                                    ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "items", [], "any", false, false, false, 92));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                // line 93
                echo "                                        <tr>
                                            <td>";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, false, 94), "html", null, true);
                echo "</td>
                                            <td>";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "amount", [], "any", false, false, false, 95), "html", null, true);
                echo "</td>
                                            <td class=\"text-right\">";
                // line 96
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\Currency']->format(twig_get_attribute($this->env, $this->source, $context["orderItem"], "totalPrice", [], "any", false, false, false, 96)), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "
                                    ";
            // line 100
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "giftItems", [], "any", false, false, false, 100)) {
                // line 101
                echo "
                                        <tr>
                                            <td colspan=\"3\">
                                                <table class=\"spacer\">
                                                    <tbody>
                                                    <tr>
                                                        <td height=\"15px\" style=\"font-size:15px;line-height:15px;\">&#xA0;</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>

                                        <tr class=\"mt-5\">
                                            <td><strong>";
                // line 115
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.giftItems"), "html", null, true);
                echo "</strong></td>
                                            <td></td>
                                            <td></td>
                                        </tr>


                                        ";
                // line 121
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "giftItems", [], "any", false, false, false, 121));
                foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                    // line 122
                    echo "                                            <tr>
                                                <td>";
                    // line 123
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, false, 123), "html", null, true);
                    echo "</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "
                                    ";
            }
            // line 130
            echo "
                                    ";
            // line 131
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "priceModifications", [], "any", false, false, false, 131)) {
                // line 132
                echo "
                                        <tr>
                                            <td colspan=\"3\">
                                                <table class=\"spacer\">
                                                    <tbody>
                                                    <tr>
                                                        <td height=\"15px\" style=\"font-size:15px;line-height:15px;\">&#xA0;</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><strong>";
                // line 146
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.priceModifications"), "html", null, true);
                echo "</strong></td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                        ";
                // line 151
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "priceModifications", [], "any", false, false, false, 151));
                foreach ($context['_seq'] as $context["_key"] => $context["priceModification"]) {
                    // line 152
                    echo "                                            <tr>
                                                <td>";
                    // line 153
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["priceModification"], "name", [], "any", false, false, false, 153), "html", null, true);
                    echo "</td>
                                                <td></td>
                                                <td class=\"text-right\">";
                    // line 155
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\Currency']->format(twig_get_attribute($this->env, $this->source, $context["priceModification"], "amount", [], "any", false, false, false, 155)), "html", null, true);
                    echo "</td>
                                            </tr>

                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priceModification'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "
                                    ";
            }
            // line 161
            echo "
                                    <tr>
                                        <td colspan=\"3\">
                                            <table class=\"spacer\">
                                                <tbody>
                                                <tr>
                                                    <td height=\"15px\" style=\"font-size:15px;line-height:15px;\">&#xA0;</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr class=\"mt-5\">
                                        <td colspan=\"2\"><h5>";
            // line 175
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.totalPrice"), "html", null, true);
            echo "</h5></td>
                                        <td><h5 class=\"text-right\">";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\Currency']->format(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "totalPrice", [], "any", false, false, false, 176)), "html", null, true);
            echo "</h5></td>
                                    </tr>
                                </table>
                            ";
        } else {
            // line 180
            echo "                                <table>
                                    <tr>
                                        <td>
                                            HERE GOES SOME ORDER DATA
                                        </td>
                                    </tr>
                                </table>
                            ";
        }
        // line 188
        echo "                            <hr>
                        </th>
                    </tr>
                </table>
            </th>
        </tr>
        </tbody>
    </table>
    <table class=\"row footer text-center\">

";
    }

    public function getTemplateName()
    {
        return "checkout/confirmation_mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 188,  344 => 180,  337 => 176,  333 => 175,  317 => 161,  313 => 159,  303 => 155,  298 => 153,  295 => 152,  291 => 151,  283 => 146,  267 => 132,  265 => 131,  262 => 130,  258 => 128,  247 => 123,  244 => 122,  240 => 121,  231 => 115,  215 => 101,  213 => 100,  210 => 99,  201 => 96,  197 => 95,  193 => 94,  190 => 93,  186 => 92,  178 => 87,  172 => 84,  147 => 62,  141 => 61,  137 => 60,  130 => 59,  124 => 57,  122 => 56,  118 => 55,  103 => 45,  97 => 44,  85 => 34,  83 => 33,  72 => 25,  68 => 24,  50 => 8,  46 => 7,  35 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "checkout/confirmation_mail.html.twig", "/opt/bitnami/pimcore/templates/checkout/confirmation_mail.html.twig");
    }
}
