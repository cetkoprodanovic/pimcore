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

/* layouts/layout.html.twig */
class __TwigTemplate_4e4b297995b434fe4e0b8378ad2831fe926db312de37cbd1e3f907fde602987d extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
<title>asioso test template</title>
<link rel=\"stylesheet\" href=\"/static/css/layout.css\" type=\"text/css\">
<!--[if lt IE 9]><script src=\"/static/js/html5shiv.js\"></script><![endif]-->
</head>
<body>
<div class=\"wrapper row1\">
  <header id=\"header\" class=\"clear\">
    <div id=\"hgroup\">
      <h1><a href=\"#\">Company Logo</a></h1>
      <h2>HTML5 Website Template</h2>
    </div>
    <nav>
    ";
        // line 16
        $context["navStartNode"] = twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "getProperty", [0 => "navigation_root"], "method", false, false, false, 16);
        // line 17
        echo "    ";
        $context["mainNavigation"] = $this->extensions['App\Twig\Extension\NavigationExtension']->getDataLinks(($context["document"] ?? null), ($context["navStartNode"] ?? null));
        // line 18
        echo "        ";
        // line 19
        echo "        <ul>
           ";
        // line 21
        echo "             ";
        echo $this->extensions['Pimcore\Twig\Extension\NavigationExtension']->render(($context["mainNavigation"] ?? null), "menu", "renderMenu", ["maxDepth" => 1, "ulClass" => "nav navbar-nav"]);
        // line 25
        echo "
          </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class=\"wrapper row2\">
  <div id=\"container\" class=\"clear\">
    <!-- Slider -->
    <section id=\"slider\"><a href=\"#\"><img src=\"/static/images/demo/960x360.gif\" alt=\"\"></a></section>
    <!-- main content -->
    <div id=\"homepage\">
      <!-- Services -->
      <section id=\"services\" class=\"clear\">
        <article class=\"one_third\">
          <figure><img src=\"/static/images/demo/290x180.gif\" width=\"290\" height=\"180\" alt=\"\">
            <figcaption>
              <h2>Indonectetus facilis</h2>
              <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna.</p>
              <footer class=\"more\"><a href=\"#\">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
        <article class=\"one_third\">
          <figure><img src=\"/static/images/demo/290x180.gif\" width=\"290\" height=\"180\" alt=\"\">
            <figcaption>
              <h2>Indonectetus facilis</h2>
              <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna.</p>
              <footer class=\"more\"><a href=\"#\">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
        <article class=\"one_third lastbox\">
          <figure><img src=\"/static/images/demo/290x180.gif\" width=\"290\" height=\"180\" alt=\"\">
            <figcaption>
              <h2>Indonectetus facilis</h2>
              <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna.</p>
              <footer class=\"more\"><a href=\"#\">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
      </section>
      <!-- / Services -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <!-- Introduction -->
      <section id=\"intro\" class=\"last clear\">
        <article>
          <figure><img src=\"/static/images/demo/450x250.gif\" width=\"450\" height=\"250\" alt=\"\">
            <figcaption>
              <h2>Indonectetus facilis leo nibh</h2>
              <p>This is a W3C compliant free website template from <a href=\"http://www.os-templates.com/\" title=\"Free Website Templates\">OS Templates</a>. For full terms of use of this template please read our <a href=\"http://www.os-templates.com/template-terms\">website template licence</a>.</p>
              <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more HTML5 templates visit <a href=\"http://www.os-templates.com/\">free website templates</a>.</p>
              <footer class=\"more\"><a href=\"#\">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
      </section>
      <!-- / Introduction -->
    </div>
    <!-- / content body -->
  </div>
</div>
<!-- Footer -->
<div class=\"wrapper row3\">
  <div id=\"footer\" class=\"clear\">
    <!-- Section One -->
    <section class=\"one_quarter\">
      <h2 class=\"title\">Link Block</h2>
      <nav>
        <ul>
          <li><a href=\"#\">Lorem ipsum dolor sit</a></li>
          <li><a href=\"#\">Amet consectetur</a></li>
          <li><a href=\"#\">Praesent vel sem id</a></li>
          <li><a href=\"#\">Curabitur hendrerit est</a></li>
          <li class=\"last\"><a href=\"#\">Sed a nulla urna</a></li>
        </ul>
      </nav>
    </section>
    <!-- Section Two -->
    <section class=\"one_quarter\">
      <h2 class=\"title\">Link Block</h2>
      <nav>
        <ul>
          <li><a href=\"#\">Lorem ipsum dolor sit</a></li>
          <li><a href=\"#\">Amet consectetur</a></li>
          <li><a href=\"#\">Praesent vel sem id</a></li>
          <li><a href=\"#\">Curabitur hendrerit est</a></li>
          <li class=\"last\"><a href=\"#\">Sed a nulla urna</a></li>
        </ul>
      </nav>
    </section>
    <!-- Section Three -->
    <section class=\"one_quarter\">
      <h2 class=\"title\">Link Block</h2>
      <nav>
        <ul>
          <li><a href=\"#\">Lorem ipsum dolor sit</a></li>
          <li><a href=\"#\">Amet consectetur</a></li>
          <li><a href=\"#\">Praesent vel sem id</a></li>
          <li><a href=\"#\">Curabitur hendrerit est</a></li>
          <li class=\"last\"><a href=\"#\">Sed a nulla urna</a></li>
        </ul>
      </nav>
    </section>
    <!-- Section Four -->
    <section class=\"one_quarter lastbox\">
      <h2 class=\"title\">Link Block</h2>
      <nav>
        <ul>
          <li><a href=\"#\">Lorem ipsum dolor sit</a></li>
          <li><a href=\"#\">Amet consectetur</a></li>
          <li><a href=\"#\">Praesent vel sem id</a></li>
          <li><a href=\"#\">Curabitur hendrerit est</a></li>
          <li class=\"last\"><a href=\"#\">Sed a nulla urna</a></li>
        </ul>
      </nav>
    </section>
    <!-- / Section -->
  </div>
</div>
<!-- Copyright -->
<div class=\"wrapper row4\">
  <footer id=\"copyright\" class=\"clear\">
    <p class=\"fl_left\">Copyright &copy; 2018 - All Rights Reserved - <a href=\"#\">Domain Name</a></p>
    <p class=\"fl_right\">Posao kod <a href=\"https://www.asioso.com/ba/posao-kod-asioso\" title=\"Zaposlite se kod nas\">asioso</a></p>
  </footer>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "layouts/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 25,  64 => 21,  61 => 19,  59 => 18,  56 => 17,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layouts/layout.html.twig", "/opt/bitnami/pimcore/templates/layouts/layout.html.twig");
    }
}
