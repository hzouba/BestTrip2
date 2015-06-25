<?php

/* BTFrontBundle:Default:index.html.twig */
class __TwigTemplate_a3f3fecd0a8efffa1cfb6db1dccd185b8b43ea6747344255cda7ba8efb0a5991 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BTFrontBundle::layout.html.twig", "BTFrontBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'bt_container' => array($this, 'block_bt_container'),
            'bt_slider' => array($this, 'block_bt_slider'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BTFrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_bt_container($context, array $blocks = array())
    {
        // line 4
        echo "
     <div class=\"container\">
            <div class=\"gap\"></div>
            <h2 class=\"text-center\">Top Experiences 22</h2>
            <div class=\"gap\">
                <div class=\"row row-wrap\">
                    
                    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_objet"]) ? $context["liste_objet"] : $this->getContext($context, "liste_objet")));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 12
            echo "    
           
           <div class=\"col-md-3\">
                        <div class=\"thumb\">
                            <header class=\"thumb-header\">
                                <a class=\"hover-img curved\" href=\"#\">
                                  
                                    <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("./uploads/" . $this->getAttribute($context["obj"], "picture", array())) . "")), "html", null, true);
            echo "\" alt=\"Image Alternative text\" title=\"196_365\" />
                                </a>
                            </header>
                           
                            <div class=\"thumb-caption\">
                                <h4 class=\"thumb-title\"><a class=\"text-darken\" href=\"#\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["obj"], "name", array()), "html", null, true);
            echo "</a></h4>
                                <div class=\"thumb-caption\">
                                    <p class=\"thumb-desc\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["obj"], "description", array()), "html", null, true);
            echo "</p>
                                </div>
                            </div>
                        </div>
                    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                    
                    

        </div>

";
    }

    // line 39
    public function block_bt_slider($context, array $blocks = array())
    {
        // line 40
        echo "    
    <!-- TOP AREA -->
        <div class=\"top-area show-onload\">
            <div class=\"bg-holder full\">
                <div class=\"bg-front full-height bg-front-mob-rel\">
                    <div class=\"container full-height\">
                        <div class=\"rel full-height\">
                            <div class=\"tagline visible-lg\" id=\"tagline\"><span>It's time to</span>
                                <ul>
                                    <li>live</li>
                                    <li>have fun</li>
                                    <li>relax</li>
                                    <li>meet</li>
                                    <li>being lost</li>
                                    <li>run away</li>
                                    <li>go</li>
                                    <li>explore</li>
                                    <li>find new friends</li>
                                    <li class=\"active\">discover</li>
                                    <li>play</li>
                                </ul>
                            </div>
                            <div class=\"search-tabs search-tabs-bg search-tabs-bottom mb50\">
                                <div class=\"tabbable\">
                                    <ul class=\"nav nav-tabs\" id=\"myTab\">
                                        <li class=\"active\"><a href=\"#tab-1\" data-toggle=\"tab\"><i class=\"fa fa-building-o\"></i> <span >Best trip finder</span></a>
                                        </li>
                                    </ul>
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane fade in active\" id=\"tab-1\">
                                            <h2>Search a country, a city, a restaurant, a flgiht, a place ...</h2>
                                            <form>
                                                <div class=\"row\">
                                                    <div class=\"col-md-4\">
                                                        <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                            <label>What are you looking for?</label>
                                                            <input class=\"typeahead form-control\" placeholder=\"Country, City, Restaurant, Flight...\" type=\"text\" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class=\"btn btn-primary btn-lg\" type=\"submit\">Search</button>
                                            </form>
                                        </div>
                                     </div>
                                   </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"owl-carousel owl-slider owl-carousel-area visible-lg\" id=\"owl-carousel-slider\" data-nav=\"false\">
                    <div class=\"bg-holder full\">
                        <div class=\"bg-mask\"></div>
                        <div class=\"bg-img\" style=\"background-image:url(";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/2048x1365.png"), "html", null, true);
        echo ");\"></div>
                        
                    </div>
                    <div class=\"bg-holder full\">
                        <div class=\"bg-mask\"></div>
                        <div class=\"bg-img\" style=\"background-image:url(";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/2048x2048.png"), "html", null, true);
        echo ");\"></div>
                    </div>
                    <div class=\"bg-holder full\">
                        <div class=\"bg-mask\"></div>
                        <div class=\"bg-img\" style=\"background-image:url(";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/2048x1365.png"), "html", null, true);
        echo ");\"></div>
                    </div>
                </div>
                <div class=\"bg-img hidden-lg\" style=\"background-image:url(";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/2048x1365.png"), "html", null, true);
        echo ");\"></div>
                <div class=\"bg-mask hidden-lg\"></div>
            </div>
        </div>
        <!-- END TOP AREA  -->
    
";
    }

    public function getTemplateName()
    {
        return "BTFrontBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 104,  160 => 101,  153 => 97,  145 => 92,  91 => 40,  88 => 39,  79 => 32,  67 => 26,  62 => 24,  54 => 19,  45 => 12,  41 => 11,  32 => 4,  29 => 3,  11 => 1,);
    }
}
