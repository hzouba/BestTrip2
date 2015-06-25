<?php

/* SonataUserBundle:Security:base_login.html.twig */
class __TwigTemplate_2897f289b53382ba3d1e49f82b3caa9e62d951a83d4784fc1e1c48f52ee54684 extends Twig_Template
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
        echo "    
    <div class=\"col-md-4\">
        <h3 class=\"mb15\">Login</h3>
        ";
        // line 18
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 19
            echo "            <div class=\"alert alert-danger alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
        ";
        }
        // line 21
        echo "        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"form\">
            <div class=\"form-group form-group-ghost form-group-icon-left\"><i class=\"fa fa-user input-icon input-icon-show\"></i>
                <label>Username</label>
                <input type=\"text\" class=\"form-control\" id=\"username\"
                                                                  name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\"  placeholder=\"best.tripper\" type=\"text\"
                                                                  required=\"required\"/>
            </div>
            <div class=\"form-group form-group-ghost form-group-icon-left\"><i class=\"fa fa-lock input-icon input-icon-show\"></i>
                <label>Password</label>
                
                <input type=\"password\" class=\"form-control\" id=\"password\"
                                                                  name=\"_password\" placeholder=\"my secret password\" required=\"required\"/>
            </div>
            <div class=\"form-group\">
                    <div class=\"checkbox control-group\">
                        <label for=\"remember_me\">
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                            ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                        </label>
                    </div>
            </div>

            <div class=\"form-group control-group\">
                    <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
            </div>
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\"
                                       value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
        </form>
    </div>
    <div class=\"col-md-4\">
        ";
        // line 51
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Registration:register"), array());
        // line 52
        echo "    </div>

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
        return array (  94 => 52,  92 => 51,  85 => 47,  77 => 44,  68 => 38,  52 => 25,  44 => 21,  38 => 19,  36 => 18,  31 => 15,  28 => 14,  11 => 12,);
    }
}
