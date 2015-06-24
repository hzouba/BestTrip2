<?php

/* BTFrontBundle:Default:index.html.twig */
class __TwigTemplate_1cfdf2da32c93297d44c4ad655d328ba8125c43fdf0ffb6f0e37a9259886bc99 extends Twig_Template
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
            <h2 class=\"text-center\">Top Experiences</h2>
            <div class=\"gap\">
                <div class=\"row row-wrap\">
                    <div class=\"col-md-3\">
                        <div class=\"thumb\">
                            <header class=\"thumb-header\">
                                <a class=\"hover-img curved\" href=\"#\">
                                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"196_365\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/flags/32/fr.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                            </div>
                            <div class=\"thumb-caption\">
                                <h4 class=\"thumb-title\"><a class=\"text-darken\" href=\"#\">Paris</a></h4>
                                <div class=\"thumb-caption\">
                                    <p class=\"thumb-desc\">Nullam potenti ac sagittis iaculis justo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"thumb\">
                            <header class=\"thumb-header\">
                                <a class=\"hover-img curved\" href=\"#\">
                                    <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"El inevitable paso del tiempo\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/flags/32/hu.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                            </div>
                            <div class=\"thumb-caption\">
                                <h4 class=\"thumb-title\"><a class=\"text-darken\" href=\"#\">Budapest</a></h4>
                                <div class=\"thumb-caption\">
                                    <p class=\"thumb-desc\">Sociis interdum sed a senectus porta</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"thumb\">
                            <header class=\"thumb-header\">
                                <a class=\"hover-img curved\" href=\"#\">
                                    <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Upper Lake in New York Central Park\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/flags/32/us.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                            </div>
                            <div class=\"thumb-caption\">
                                <h4 class=\"thumb-title\"><a class=\"text-darken\" href=\"#\">New York</a></h4>
                                <div class=\"thumb-caption\">
                                    <p class=\"thumb-desc\">Erat ultricies auctor tellus natoque cursus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"thumb\">
                            <header class=\"thumb-header\">
                                <a class=\"hover-img curved\" href=\"#\">
                                    <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"196_365\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/flags/32/fr.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                            </div>
                            <div class=\"thumb-caption\">
                                <h4 class=\"thumb-title\"><a class=\"text-darken\" href=\"#\">Paris</a></h4>
                                <div class=\"thumb-caption\">
                                    <p class=\"thumb-desc\">Nullam potenti ac sagittis iaculis justo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"thumb\">
                            <header class=\"thumb-header\">
                                <a class=\"hover-img curved\" href=\"#\">
                                    <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"El inevitable paso del tiempo\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/flags/32/hu.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                            </div>
                            <div class=\"thumb-caption\">
                                <h4 class=\"thumb-title\"><a class=\"text-darken\" href=\"#\">Budapest</a></h4>
                                <div class=\"thumb-caption\">
                                    <p class=\"thumb-desc\">Sociis interdum sed a senectus porta</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"thumb\">
                            <header class=\"thumb-header\">
                                <a class=\"hover-img curved\" href=\"#\">
                                    <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Upper Lake in New York Central Park\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/flags/32/us.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                            </div>
                            <div class=\"thumb-caption\">
                                <h4 class=\"thumb-title\"><a class=\"text-darken\" href=\"#\">New York</a></h4>
                                <div class=\"thumb-caption\">
                                    <p class=\"thumb-desc\">Erat ultricies auctor tellus natoque cursus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"thumb\">
                            <header class=\"thumb-header\">
                                <a class=\"hover-img curved\" href=\"#\">
                                    <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"people on the beach\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/flags/32/gr.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                            </div>
                            <div class=\"thumb-caption\">
                                <h4 class=\"thumb-title\"><a class=\"text-darken\" href=\"#\">Crete</a></h4>
                                <div class=\"thumb-caption\">
                                    <p class=\"thumb-desc\">Cursus parturient commodo diam donec est</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

";
    }

    // line 144
    public function block_bt_slider($context, array $blocks = array())
    {
        // line 145
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
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/2048x1365.png"), "html", null, true);
        echo ");\"></div>
                        
                    </div>
                    <div class=\"bg-holder full\">
                        <div class=\"bg-mask\"></div>
                        <div class=\"bg-img\" style=\"background-image:url(";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/2048x2048.png"), "html", null, true);
        echo ");\"></div>
                    </div>
                    <div class=\"bg-holder full\">
                        <div class=\"bg-mask\"></div>
                        <div class=\"bg-img\" style=\"background-image:url(";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/2048x1365.png"), "html", null, true);
        echo ");\"></div>
                    </div>
                </div>
                <div class=\"bg-img hidden-lg\" style=\"background-image:url(";
        // line 209
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
        return array (  294 => 209,  288 => 206,  281 => 202,  273 => 197,  219 => 145,  216 => 144,  195 => 126,  188 => 122,  171 => 108,  164 => 104,  147 => 90,  140 => 86,  123 => 72,  116 => 68,  99 => 54,  92 => 50,  75 => 36,  68 => 32,  51 => 18,  44 => 14,  32 => 4,  29 => 3,  11 => 1,);
    }
}
