<?php

/* BTFrontBundle:Experience:experienceBycoutries.html.twig */
class __TwigTemplate_445f7f92f60efd44c7fbbd5c31cf1c776a886a46185cbb791b221c42091d1b57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BTFrontBundle::layout.html.twig", "BTFrontBundle:Experience:experienceBycoutries.html.twig", 1);
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
        <h1 class=\"page-title\">Find Experience by Country</h1>
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
                            
                               
                            
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"Find Experiences\" />
                    </form>
                </div>
                <div class=\"col-md-4\">
                  ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_objet"]) ? $context["liste_objet"] : $this->getContext($context, "liste_objet")));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 23
            echo "    
           
           <div class=\"col-md-3\">
                        <div class=\"thumb\">
                            <header class=\"thumb-header\">
                                <a class=\"hover-img curved\" href=\"#\">
                                  
                                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("./uploads/" . $this->getAttribute($context["obj"], "picture", array())) . "")), "html", null, true);
            echo "\" alt=\"Image Alternative text\" title=\"196_365\" />
                                </a>
                            </header>
                           
                            <div class=\"thumb-caption\">
                                <h4 class=\"thumb-title\"><a class=\"text-darken\" href=\"#\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["obj"], "name", array()), "html", null, true);
            echo "</a></h4>
                                <div class=\"thumb-caption\">
                                    <p class=\"thumb-desc\">";
            // line 37
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
        // line 42
        echo "  
                </div>
            </div>
            <div class=\"gap\"></div>
        </div>
     
";
    }

    public function getTemplateName()
    {
        return "BTFrontBundle:Experience:experienceBycoutries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 42,  83 => 37,  78 => 35,  70 => 30,  61 => 23,  57 => 22,  49 => 17,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
