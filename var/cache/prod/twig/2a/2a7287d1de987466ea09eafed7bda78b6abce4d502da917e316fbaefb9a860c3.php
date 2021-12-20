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

/* default/events.html.twig */
class __TwigTemplate_a5cb7c0c04f56997d55f02f8e3e08cf9eb602f2a916289045d059c270036151e extends Template
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
        // line 3
        twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('pimcore_head_script')->getCallable(), []), "appendFile", [0 => "https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"], "method", false, false, false, 3);
        // line 4
        twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('pimcore_head_script')->getCallable(), []), "appendFile", [0 => "https://cdn.jsdelivr.net/npm/vuejs-datepicker@1.6.2/dist/vuejs-datepicker.js"], "method", false, false, false, 4);
        // line 5
        twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('pimcore_head_script')->getCallable(), []), "appendFile", [0 => "https://cdn.jsdelivr.net/npm/apollo-client-browser@1.9.0/dist/apollo-client.min.js"], "method", false, false, false, 5);
        // line 6
        twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('pimcore_head_script')->getCallable(), []), "appendFile", [0 => "https://cdn.jsdelivr.net/npm/vue-apollo@2.1.0-rc.7/dist/vue-apollo.min.js"], "method", false, false, false, 6);
        // line 7
        twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('pimcore_head_script')->getCallable(), []), "appendFile", [0 => "https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"], "method", false, false, false, 7);
        // line 8
        twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('pimcore_head_script')->getCallable(), []), "appendFile", [0 => "https://unpkg.com/vue2-leaflet"], "method", false, false, false, 8);
        // line 9
        twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('pimcore_head_link')->getCallable(), []), "appendStylesheet", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/leaflet/dist/leaflet.css")], "method", false, false, false, 9);
        // line 10
        twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('pimcore_head_script')->getCallable(), []), "appendFile", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/js/vue-app.js")], "method", false, false, false, 10);
        // line 1
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "default/events.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "areablock", "content", ["allowed" => [0 => "blockquote", 1 => "embed", 2 => "featurette", 3 => "gallery-carousel", 4 => "gallery-folder", 5 => "gallery-single-images", 6 => "headlines", 7 => "horizontal-line", 8 => "icon-teaser-row", 9 => "image", 10 => "image-hotspot-marker", 11 => "pdf", 12 => "product-grid", 13 => "product-teaser", 14 => "standard-teaser", 15 => "text-accordion", 16 => "time-slider-featurette", 17 => "video", 18 => "wysiwyg", 19 => "wysiwyg-with-images"]]);
        // line 18
        echo "
    <div  id=\"vueapp\" class=\"row\">
        <div class=\"col-md-12\">
            <section v-if=\"activePanel === 1\"  v-cloak >
                <div class=\"header row mb-4\">
                    <div class=\"col-md-3 mb-2\">
                        <vuejs-datepicker id=\"fromDate\" input-class=\"form-control\" typeable v-model=\"filters.fromDate\" @input=\"filterListing\"  placeholder=\"From Date\"></vuejs-datepicker>
                    </div>
                    <div class=\"col-md-3 mb-2\">
                        <vuejs-datepicker id=\"fromDate\" input-class=\"form-control\" typeable  v-model=\"filters.toDate\" @input=\"filterListing\" placeholder=\"To Date\"></vuejs-datepicker>
                    </div>

                    <div class=\"col-md-3 mb-2 float-right\">
                        <select id=\"fromDate\" class=\"form-control\"  v-model=\"filters.tag\">
                            <option value=\"All\" >Filter By Tag</option>
                            <option value=\"Trade Show\" >Trade Show</option>
                            <option value=\"Retro\" > Retro</option>
                            <option value=\"International\" > International</option>
                            <option  value=\"1950\" > 1950</option>
                            <option value=\"1960\" > 1960</option>
                            <option value=\"1970\" > 1970</option>
                            <option value=\"Salzburg\" >Salzburg</option>
                            <option value=\"Vienna\" >Vienna</option>
                            <option value=\"Wels\" >Wels</option>
                        </select>
                    </div>

                    <div class=\"col-md-3 mb-2\">
                        <button @click=\"clearFilters\" class=\"btn btn-outline-primary btn-sm d-block form-control\">CLEAR FILTERS</button>
                    </div>
                </div>
                <div class=\"row mb-3 text-center\">
                    <div class=\"col-sm-12\" v-if=\"loading\">
                        <div class=\"d-flex justify-content-center\">
                            <div class=\"spinner-border\" role=\"status\">
                                <span class=\"sr-only\">Loading...</span>
                            </div>
                        </div>
                    </div>
                    <div v-if=\"errored\" class=\"col-md-12 text-center\">
                        <h5>Sorry, something went wrong. Please try back later!</h5>
                    </div>
                    <div v-else v-for=\"(event, index) in filterResult\" class=\"col-sm-4\">
                        <div class=\"teaser card custom-standard-card mb-4 shadow-sm\">
                            <img v-if=\"event.details.mainImage\" contain width=\"350\" height=\"235\" class=\"img-fluid w-100\" alt=\"\" title=\"\" :src=\"event.details.mainImage.fullpath\">
                            <div class=\"card-body text-center\">
                                <h4 class=\"card-title pricing-card-title text-uppercase\" v-text=\"event.details.title\"></h4>
                                <p><b>Location:</b> [[ event.details.locationAddress ]]</p>
                                <p class=\"mb-0\"><span>[[ event.details.fromDate ]]</span><span v-if=\"compareDates(event.details.fromDate, event.details.toDate)\"> - [[ event.details.toDate ]]</span>
                                    <span class=\"d-block mb-4\"><b>Timings:</b> [[ event.details.fromTime ]] - [[ event.details.toTime ]]</span>

                                    <a href=\"javascript:void(0);\" class=\"btn btn-secondary btn-sm\" id=\"show-modal\" @click=\"openDetailPanel(event.details.id)\">More Details</a>
                            </div>
                            <div class=\"card-footer\">
                                <!--Event Tags Footer-->
                                <span v-for=\"tag in event.details.tags\" class=\"badge badge-secondary mr-1\">[[ tag ]]</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section v-if=\"activePanel === 2\" v-cloak >
                <div class=\"row header\">
                    <a href=\"javascript:void(0);\" @click=\"changePanel(1)\" class=\"btn btn-secondary form-control back-button\" >Back to Events</a>
                    <div class=\"col-md-12 text-center\">
                        <h3 class=\"\">[[ eventDetails.title ]]</h3>
                    </div>

                </div>
                <div class=\"row mb-3 bg-white p-2\">
                    <div id=\"header\" class=\"col-md-12 text-center\">

                    </div>
                    <div id=\"gallery\" class=\"col-md-8 mx-auto\">
                        <div class=\"iframe-container mx-auto\" v-if=\"eventDetails.video\" id=\"video-gallery\">
                            <iframe id=\"ytplayer\" type=\"text/html\"
                                    :src=\"'https://www.youtube.com/embed/' + eventDetails.video.data.id\"
                                    frameborder=\"0\" class=\"iframe-responsive\"></iframe>
                        </div>
                        <div v-else id=\"image\">
                            <img class=\"d-block mx-auto\" v-if=\"eventDetails.mainImage\" :src=\"eventDetails.mainImage.fullpath\">
                        </div>
                        <div id=\"image-gallery\" v-for=\"image in eventDetails.images\" class=\"col-sm-6 col-md-4\">
                            <img contain width=\"350\" height=\"235\" class=\"img-fluid w-100 img-thumbnail\" alt=\"\" title=\"\" :src=\"image.image.fullpath\">
                        </div>
                    </div>
                    <div id=\"info\" class=\"col-md-12 p-5\">
                        <p v-html=\"eventDetails.description\"></p>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <p><span class=\"font-weight-bold\">Location: </span> [[ eventDetails.locationAddress ]]</p>

                                <p>
                                    <span class=\"font-weight-bold\">Date: </span>
                                    [[ eventDetails.fromDate ]] <span v-if=\"compareDates(eventDetails.fromDate, eventDetails.toDate)\">- [[ eventDetails.toDate ]]</span>
                                </p>
                                <p>
                                    <span class=\"font-weight-bold\">Timings: </span>
                                    [[ eventDetails.fromTime ]] - [[ eventDetails.toTime ]]
                                </p>
                                <p v-if=\"eventDetails.cars\" >
                                    <span class=\"font-weight-bold\">Showcasing Cars: </span>
                                <ul>
                                    <li v-for=\"car in eventDetails.cars\">
                                        <span v-if=\"car.manufacturer\">[[ car.manufacturer.name ]]</span> [[ car.carName ]], [[ car.productionYear ]]
                                    </li>
                                </ul>
                                </p>
                            </div>
                            <div class=\"col-sm-6\">
                                <div v-if=\"eventDetails.locationMap\" class=\"col-md-12 mb-4\" style=\"height: 250px\">
                                    <v-map :zoom=15 :center=\"mapCoordinates\">
                                        <v-tilelayer url=\"http://{s}.tile.osm.org/{z}/{x}/{y}.png\"></v-tilelayer>
                                        <v-marker :lat-lng=\"mapCoordinates\"></v-marker>
                                    </v-map>
                                </div>
                            </div>
                        </div>

                        <div v-if=\"eventDetails.contactName\" class=\"card\">
                            <div class=\"card-header\">Organizer:</div>
                            <div class=\"card-body\">
                                <p v-if=\"eventDetails.contactName\" ><span class=\"font-weight-bold\">Name: </span> [[ eventDetails.contactName ]]</p>
                                <p v-if=\"eventDetails.contactPhone\" ><span class=\"font-weight-bold\">Phone: </span> [[ eventDetails.contactPhone ]]</p>
                                <p v-if=\"eventDetails.contactEmail\" ><span class=\"font-weight-bold\">Email: </span> [[ eventDetails.contactEmail ]]</p>
                                <p v-if=\"eventDetails.contactAddress\" ><span class=\"font-weight-bold\">Address: </span> [[ eventDetails.contactAddress ]]</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "default/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  67 => 13,  63 => 12,  58 => 1,  56 => 10,  54 => 9,  52 => 8,  50 => 7,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/events.html.twig", "/opt/bitnami/pimcore/templates/default/events.html.twig");
    }
}
