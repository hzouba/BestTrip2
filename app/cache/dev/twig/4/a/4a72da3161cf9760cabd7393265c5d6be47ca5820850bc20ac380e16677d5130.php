<?php

/* SonataUserBundle::layout.html.twig */
class __TwigTemplate_4a72da3161cf9760cabd7393265c5d6be47ca5820850bc20ac380e16677d5130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html class=\"full\">

<head>
    <title>Best Trip - Login</title>


    <meta content=\"text/html;charset=utf-8\" http-equiv=\"Content-Type\">
    <meta name=\"keywords\" content=\"Template, html, premium, themeforest\" />
    <meta name=\"description\" content=\"Traveler - Premium template for travel companies\">
    <meta name=\"author\" content=\"Tsoy\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/css/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/css/icomoon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/css/styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/css/mystyles.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/modernizr.js"), "html", null, true);
        echo "\"></script>


</head>

<body class=\"full\">

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

        <div class=\"full-page\">
            <div class=\"bg-holder full\">
                <div class=\"bg-mask\"></div>
                <div class=\"bg-img\" style=\"background-image:url(";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/1280x852.png"), "html", null, true);
        echo ");\"></div>
                <div class=\"bg-holder-content full text-white\">
                    <a class=\"logo-holder\" href=\"index.html\">
                        <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/img/logo-white.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                    </a>
                    <div class=\"full-center\">
                        <div class=\"container\">
                            <div class=\"row row-wrap\" data-gutter=\"60\">
                                <div class=\"col-md-2\">
                                    
                                </div>
                                ";
        // line 59
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 61
        echo "                                <div class=\"col-md-2\">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class=\"footer-links\">
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



        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/bootstrap-timepicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/dropit.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/ionrangeslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/icheck.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/fotorama.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script>
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/typeahead.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/card-payment.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/magnific.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/fitvids.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/tweet.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/countdown.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/gridrotator.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/btfront/js/custom.js"), "html", null, true);
        echo "\"></script>
    </div>
</body>

</html>


";
    }

    // line 59
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 60
        echo "                                ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 60,  207 => 59,  195 => 100,  191 => 99,  187 => 98,  183 => 97,  179 => 96,  175 => 95,  171 => 94,  167 => 93,  163 => 92,  158 => 90,  154 => 89,  150 => 88,  146 => 87,  142 => 86,  138 => 85,  134 => 84,  130 => 83,  106 => 61,  104 => 59,  93 => 51,  87 => 48,  59 => 23,  55 => 22,  51 => 21,  47 => 20,  43 => 19,  39 => 18,  20 => 1,);
    }
}
