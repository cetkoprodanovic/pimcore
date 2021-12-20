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
class __TwigTemplate_451217a2738f9c05a7d8fe050c2b828955ad351a5de5069d6693b25276b79205 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/layout.html.twig"));

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
        $context["navStartNode"] = twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 16, $this->source); })()), "getProperty", [0 => "navigation_root"], "method", false, false, false, 16);
        // line 17
        echo "    ";
        $context["mainNavigation"] = $this->extensions['App\Twig\Extension\NavigationExtension']->getDataLinks((isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 17, $this->source); })()), (isset($context["navStartNode"]) || array_key_exists("navStartNode", $context) ? $context["navStartNode"] : (function () { throw new RuntimeError('Variable "navStartNode" does not exist.', 17, $this->source); })()));
        // line 18
        echo "        ";
        // line 19
        echo "        <ul>
           ";
        // line 21
        echo "             ";
        echo $this->extensions['Pimcore\Twig\Extension\NavigationExtension']->render((isset($context["mainNavigation"]) || array_key_exists("mainNavigation", $context) ? $context["mainNavigation"] : (function () { throw new RuntimeError('Variable "mainNavigation" does not exist.', 21, $this->source); })()), "menu", "renderMenu", ["maxDepth" => 1, "ulClass" => "nav navbar-nav"]);
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
\t<p>";
        // line 151
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "testSnippet1", ["width" => 250, "height" => 100]);
        echo "</p>
    <p class=\"fl_left\">Copyright &copy; 2018 - All Rights Reserved - <a href=\"#\">Domain Name</a></p>
    <p class=\"fl_right\">Posao kod <a href=\"https://www.asioso.com/ba/posao-kod-asioso\" title=\"Zaposlite se kod nas\">asioso</a></p>
  </footer>
</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  201 => 151,  73 => 25,  70 => 21,  67 => 19,  65 => 18,  62 => 17,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
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
    {% set navStartNode = document.getProperty('navigation_root') %}
    {% set mainNavigation =  app_navigation_data_links(document, navStartNode) %}
        {#main header#}
        <ul>
           {#header - generate pimcore navigation #}
             {{ pimcore_render_nav(mainNavigation, 'menu', 'renderMenu', {
                maxDepth: 1,
                ulClass: 'nav navbar-nav'
                }) 
             }}
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
\t<p>{{ pimcore_snippet(\"testSnippet1\", {\"width\": 250, \"height\": 100}) }}</p>
    <p class=\"fl_left\">Copyright &copy; 2018 - All Rights Reserved - <a href=\"#\">Domain Name</a></p>
    <p class=\"fl_right\">Posao kod <a href=\"https://www.asioso.com/ba/posao-kod-asioso\" title=\"Zaposlite se kod nas\">asioso</a></p>
  </footer>
</div>
</body>
</html>
", "layouts/layout.html.twig", "/opt/bitnami/pimcore/templates/layouts/layout.html.twig");
    }
}
