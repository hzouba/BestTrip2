<?php

/* BTFrontBundle:Experience:addFeedback.html.twig */
class __TwigTemplate_78104187d089081152788ac567486945d99f947beb97485d32a591c50433d796 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BTFrontBundle::layout.html.twig", "BTFrontBundle:Experience:addFeedback.html.twig", 1);
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
        <h1 class=\"page-title\">Add Feedback</h1>
            <div class=\"row\">
                <div class=\"col-md-7\">
                    <form class=\"mt30\" method=\"post\">
                                <div class=\"form-group\">
                                    <label>Comment</label>
                                    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label>Raiting</label>
                                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "raiting", array()), 'widget');
        echo "
                                </div>
                          
                                <div class=\"form-group\">
                                    <label>Experience</label>
                                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idExperience", array()), 'widget');
        echo "
                                </div>
                            
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"Add Experience Feedback\" />
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
        return "BTFrontBundle:Experience:addFeedback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 24,  56 => 21,  48 => 16,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
