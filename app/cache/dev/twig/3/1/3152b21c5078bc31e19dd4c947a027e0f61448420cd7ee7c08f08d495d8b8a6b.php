<?php

/* BTFrontBundle::layout.html.twig */
class __TwigTemplate_3152b21c5078bc31e19dd4c947a027e0f61448420cd7ee7c08f08d495d8b8a6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'bt_slider' => array($this, 'block_bt_slider'),
            'bt_container' => array($this, 'block_bt_container'),
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
        echo "\" alt=\"Image Alternative text\" title=\"AMaze\" />
                                            ";
        // line 57
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 58
            echo "                                                Hi, ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo "
                                            ";
        }
        // line 60
        echo "                                        </a>
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

       ";
        // line 83
        $this->displayBlock('bt_slider', $context, $blocks);
        // line 85
        echo "
       ";
        // line 86
        $this->displayBlock('bt_container', $context, $blocks);
        // line 88
        echo "
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
        // line 99
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
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/bootstrap-timepicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/dropit.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/ionrangeslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/icheck.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/fotorama.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script>
        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/typeahead.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/card-payment.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/magnific.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/fitvids.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/tweet.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/countdown.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/gridrotator.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/custom.js"), "html", null, true);
        echo "\"></script>
    </div>
</body>

</html>";
    }

    // line 83
    public function block_bt_slider($context, array $blocks = array())
    {
        // line 84
        echo "       ";
    }

    // line 86
    public function block_bt_container($context, array $blocks = array())
    {
        // line 87
        echo "       ";
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
        return array (  292 => 87,  289 => 86,  285 => 84,  282 => 83,  273 => 165,  269 => 164,  265 => 163,  261 => 162,  257 => 161,  253 => 160,  249 => 159,  245 => 158,  241 => 157,  236 => 155,  232 => 154,  228 => 153,  224 => 152,  220 => 151,  216 => 150,  212 => 149,  208 => 148,  156 => 99,  143 => 88,  141 => 86,  138 => 85,  136 => 83,  111 => 60,  105 => 58,  103 => 57,  99 => 56,  88 => 48,  58 => 21,  54 => 20,  50 => 19,  46 => 18,  42 => 17,  38 => 16,  21 => 1,);
    }
}
