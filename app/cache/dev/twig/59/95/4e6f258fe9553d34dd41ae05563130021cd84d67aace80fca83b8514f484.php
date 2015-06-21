<?php

/* BTFrontBundle::layout.html.twig */
class __TwigTemplate_59954e6f258fe9553d34dd41ae05563130021cd84d67aace80fca83b8514f484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>

<head>
    <title>Best Trip</title>


    <meta content=\"text/html;charset=utf-8\" http-equiv=\"Content-Type\">
    <meta name=\"author\" content=\"Zoubair Hfaidh, Moslem Zueb\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/css/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/css/icomoon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/css/styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/css/mystyles.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/modernizr.js"), "html", null, true);
        echo "\"></script>

 
</head>

<body>

    <!-- FACEBOOK WIDGET -->
    <div id=\"fb-root\"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class=\"global-wrap\">
        <header id=\"main-header\">
            <div class=\"header-top\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-8\">
                            <a class=\"logo\" href=\"index.html\">
                                <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/logo-invert.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                            </a>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"top-user-area clearfix\">
                                <ul class=\"top-user-area-list list list-horizontal list-border\">
                                    <li class=\"top-user-area-avatar\">
                                        <a href=\"user-profile.html\">
                                            <img class=\"origin round\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/40x40.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"AMaze\" />Hi, Zoubair</a>
                                    </li>
                                    <li><a href=\"#\">Sign Out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"nav\">
                    <ul class=\"slimmenu\" id=\"slimmenu\">
                        <li class=\"active\"><a href=\"index.html\">Home</a></li>
                        <li><a href=\"success-payment.html\">Countries</a></li>
                        <li><a href=\"feature-typography.html\">Places</a></li>
                        <li><a href=\"feature-typography.html\">Flights</a></li>
                        <li><a href=\"feature-typography.html\">Travel guide</a></li>
                    </ul>
                </div>
            </div>
        </header>

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
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/2048x1365.png"), "html", null, true);
        echo ");\"></div>
                        
                    </div>
                    <div class=\"bg-holder full\">
                        <div class=\"bg-mask\"></div>
                        <div class=\"bg-img\" style=\"background-image:url(";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/2048x2048.png"), "html", null, true);
        echo ");\"></div>
                    </div>
                    <div class=\"bg-holder full\">
                        <div class=\"bg-mask\"></div>
                        <div class=\"bg-img\" style=\"background-image:url(";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/2048x1365.png"), "html", null, true);
        echo ");\"></div>
                    </div>
                </div>
                <div class=\"bg-img hidden-lg\" style=\"background-image:url(";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/2048x1365.png"), "html", null, true);
        echo ");\"></div>
                <div class=\"bg-mask hidden-lg\"></div>
            </div>
        </div>
        <!-- END TOP AREA  -->

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
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"196_365\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 161
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
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"El inevitable paso del tiempo\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 179
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
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Upper Lake in New York Central Park\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 197
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
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"196_365\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 215
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
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"El inevitable paso del tiempo\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 233
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
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Upper Lake in New York Central Park\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 251
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
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"people on the beach\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 269
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



        <footer id=\"main-footer\">
            <div class=\"container\">
                <div class=\"row row-wrap\">
                    <div class=\"col-md-3\">
                        <h4>Team</h4>
                        <h4 class=\"text-color\">Zoubair Hfaidh<br>Moslem Zgueb<br>Chafik Bari<br>Abdelslam Manai<br>Aymen Zitoun</h4>
                        <p>3Cinfo3, ESPRIT</p>
                    </div>
                    <div class=\"col-md-4\">
                        <a class=\"logo\" href=\"index.html\">
                            <img src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/logo-invert.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                        </a>
                        <p class=\"mb20\">Reviews and advices on hotels, resorts, flights, vacation rentals, travel packages, and lots more!</p>
                        <ul class=\"list list-horizontal list-space\">
                            <li>
                                <a class=\"fa fa-facebook box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                            </li>
                            <li>
                                <a class=\"fa fa-twitter box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                            </li>
                            <li>
                                <a class=\"fa fa-google-plus box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                            </li>
                            <li>
                                <a class=\"fa fa-linkedin box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                            </li>
                            <li>
                                <a class=\"fa fa-pinterest box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-md-3\">
                        <h4>Newsletter</h4>
                        <form>
                            <label>Enter your E-mail Address</label>
                            <input type=\"text\" class=\"form-control\">
                            <p class=\"mt5\"><small>*We Never Send Spam</small>
                            </p>
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"Subscribe\">
                        </form>
                    </div>
                    <div class=\"col-md-2\">
                        <ul class=\"list list-footer\">
                            <li><a href=\"#\">Experience</a>
                            </li>
                            <li><a href=\"#\">Places</a>
                            </li>
                            <li><a href=\"#\">Flight</a>
                            </li>
                            <li><a href=\"#\">Travel guide</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>

       <script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/bootstrap-timepicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/dropit.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/ionrangeslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/icheck.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/fotorama.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script>
        <script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/typeahead.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/card-payment.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/magnific.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/fitvids.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/tweet.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/countdown.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/gridrotator.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/custom.js"), "html", null, true);
        echo "\"></script>
    </div>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "BTFrontBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 363,  508 => 362,  504 => 361,  500 => 360,  496 => 359,  492 => 358,  488 => 357,  484 => 356,  480 => 355,  475 => 353,  471 => 352,  467 => 351,  463 => 350,  459 => 349,  455 => 348,  451 => 347,  447 => 346,  395 => 297,  364 => 269,  357 => 265,  340 => 251,  333 => 247,  316 => 233,  309 => 229,  292 => 215,  285 => 211,  268 => 197,  261 => 193,  244 => 179,  237 => 175,  220 => 161,  213 => 157,  195 => 142,  189 => 139,  182 => 135,  174 => 130,  97 => 56,  86 => 48,  56 => 21,  52 => 20,  48 => 19,  44 => 18,  40 => 17,  36 => 16,  19 => 1,);
    }
}
