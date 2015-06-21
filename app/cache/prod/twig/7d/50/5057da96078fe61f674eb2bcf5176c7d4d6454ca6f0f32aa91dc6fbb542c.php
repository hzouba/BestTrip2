<?php

/* SonataUserBundle:Security:base_login.html.twig */
class __TwigTemplate_7d505057da96078fe61f674eb2bcf5176c7d4d6454ca6f0f32aa91dc6fbb542c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "SonataUserBundle:Security:base_login.html.twig", 12);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"panel panel-info\">

                

                <div class=\"panel-body\">

                    ";
        // line 23
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 24
            echo "                        <div class=\"alert alert-danger alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 26
        echo "
                    <form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"form\"
                          class=\"form-horizontal\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\"/>

                        <div class=\"form-group\">
                            <label for=\"username\"
                                   class=\"col-lg-3 col-sm-3 control-label\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                            <div class=\"col-lg-9 col-sm-9\"><input type=\"text\" class=\"form-control\" id=\"username\"
                                                                  name=\"_username\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\"
                                                                  required=\"required\"/></div>
                        </div>


                        <div class=\"form-group control-group\">
                            <label for=\"password\"
                                   class=\"col-lg-3 col-sm-3 control-label\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                            <div class=\"col-lg-9 col-sm-9\"><input type=\"password\" class=\"form-control\" id=\"password\"
                                                                  name=\"_password\" required=\"required\"/></div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-3 col-sm-9\">
                                <div class=\"checkbox control-group\">
                                    <label for=\"remember_me\">
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                        ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group control-group\">
                            <div class=\"controls col-sm-offset-3 col-sm-9\">
                                <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-3 col-sm-9\">
                                <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\"
                                       value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            ";
        // line 78
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Registration:register"), array());
        // line 79
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 79,  129 => 78,  117 => 69,  105 => 62,  94 => 54,  80 => 43,  70 => 36,  64 => 33,  57 => 29,  52 => 27,  49 => 26,  43 => 24,  41 => 23,  31 => 15,  28 => 14,  11 => 12,);
    }
}
