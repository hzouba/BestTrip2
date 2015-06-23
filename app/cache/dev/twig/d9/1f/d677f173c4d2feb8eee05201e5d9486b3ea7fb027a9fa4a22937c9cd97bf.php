<?php

/* BTFrontBundle:Experience:addExperience.html.twig */
class __TwigTemplate_d91fd677f173c4d2feb8eee05201e5d9486b3ea7fb027a9fa4a22937c9cd97bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BTFrontBundle::layout.html.twig", "BTFrontBundle:Experience:addExperience.html.twig", 1);
        $this->blocks = array(
            'bt_container' => array($this, 'block_bt_container'),
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
        <h1 class=\"page-title\">Add Experience</h1>
            <div class=\"row\">
                <div class=\"col-md-7\">
                    <form class=\"mt30\">
                                <div class=\"form-group\">
                                    <label>Description</label>
                                    <input class=\"form-control\" type=\"text\" />
                                </div>
                            
                                <div class=\"form-group\">
                                    <label>Picture</label>
                                    <input class=\"form-control\" type=\"text\" />
                                </div>
                            
                                <div class=\"form-group\">
                                    <label>Video</label>
                                    <input class=\"form-control\" type=\"text\" />
                                </div>
                            
                        
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"Add Experience\" />
                    </form>
                </div>
                <div class=\"col-md-4\">
                    
                </div>
            </div>
            <div class=\"gap\"></div>
        </div>
    
";
    }

    public function getTemplateName()
    {
        return "BTFrontBundle:Experience:addExperience.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
