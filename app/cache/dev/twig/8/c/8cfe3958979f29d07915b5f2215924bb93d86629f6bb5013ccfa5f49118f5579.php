<?php

/* BTFrontBundle:Experience:addExperience.html.twig */
class __TwigTemplate_8cfe3958979f29d07915b5f2215924bb93d86629f6bb5013ccfa5f49118f5579 extends Twig_Template
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
                    <form class=\"mt30\" method=\"post\">
                                <div class=\"form-group\">
                                    <label>Name</label>
                                    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
                                </div>
                            
                                <div class=\"form-group\">
                                    <label>Date</label>
                                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAdd", array()), 'widget');
        echo "
                                </div>
                            
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
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
        return array (  55 => 20,  49 => 17,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
