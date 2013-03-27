<?php

/* DirigendoFrontEndBundle:Default:index.html.twig */
class __TwigTemplate_7d5ced5781e9909b2efc7a1f7a4fd60d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DirigendoFrontEndBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'javascripts' => array($this, 'block_javascripts'),
            'white_content' => array($this, 'block_white_content'),
            'gray_content' => array($this, 'block_gray_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DirigendoFrontEndBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "DirigendoFrontEndBundle:Form:dirigendo_form.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "Title"), "html", null, true);
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "Description"), "html", null, true);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "Keywords"), "html", null, true);
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " 
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/js/Carousel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>        
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/js/Jquery.wt-rotator.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bazingaexposetranslation/js/translator.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("bazinga_exposetranslation_js", array("domain_name" => "validators", "_locale" => "nl")), "html", null, true);
        echo "\"></script>
";
        // line 12
        echo $this->env->getExtension('JsFormValidation')->JsFormValidationFunction((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
";
    }

    // line 14
    public function block_white_content($context, array $blocks = array())
    {
        // line 15
        echo "<div style=\"width: 960px; position: relative\">
    <div style=\"  background-color: #FFFFFF;
    display: block;
    height: 190px;
    opacity: 0.7;
    position: absolute;
    right: 20px;
    top: 20px;
    visibility: visible;
    width: 280px;
    z-index: 150;\">        </div>

    <form novalidate=\"true\" action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_home"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " style=\"position: absolute; z-index: 151; right: 35px; top: 35px;\">
    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            <input type=\"submit\" value=\"Zoeken\" style=\"float: right\" />
                </form>
        </div>
";
        // line 33
        echo $this->env->getExtension('actions')->renderAction("DirigendoFrontEndBundle.CarousselController:carousselAction", array(), array());
        // line 34
        echo "            <div style=\"width: 960px; text-align: center; margin-top: 15px; margin-bottom: 10px;\">
                <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/images/123.png"), "html", null, true);
        echo "\" alt=\"dirigendo 123\">
            </div>  
";
    }

    // line 39
    public function block_gray_content($context, array $blocks = array())
    {
        // line 40
        echo "                <div id=\"content_box\">

                    <div id=\"left-content-box\" style=\"width: 480px;\">
                   ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["benefits"]) ? $context["benefits"] : $this->getContext($context, "benefits")));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            echo "    
                        
                     <div  class=\"benefit\">
                            <img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/images/icons/arrow.png"), "html", null, true);
            echo "\" alt=\"checkbox\"></div>
                        <div class=\"benefitdesc\">
                            <h2>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "header"), "html", null, true);
            echo "</h2>
                            ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "text"), "html", null, true);
            echo "
                         </div>
                        <div style=\"clear: both\"></div>
                        
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 53
        echo "    
                    </div>
                    

                    <div id=\"right-content-box\" style=\"margin-top: 15px; vertical-align: bottom;\">
                        <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/images/welkom.jpg"), "html", null, true);
        echo "\" style=\"margin-top: 25px; vertical-align: bottom; position: relative; bottom: 0px;\" alt=\"Welkom\">
                    </div>
                    <div style=\"text-align: center; margin-bottom: -20px;\">
                        <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/images/hrbig2.png"), "html", null, true);
        echo "\" alt=\"hr\">
                    </div>
                    <div class=\"clear\"></div>
                    <a id=\"services\"></a>
";
        // line 65
        echo $this->env->getExtension('actions')->renderAction("DirigendoFrontEndBundle.ServiceTilesController:serviceTilesAction", array(), array());
        // line 66
        echo "                    <div class=\"clear\"></div>
                </div>
";
    }

    public function getTemplateName()
    {
        return "DirigendoFrontEndBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 66,  181 => 65,  174 => 61,  168 => 58,  161 => 53,  150 => 49,  146 => 48,  141 => 46,  133 => 43,  128 => 40,  125 => 39,  118 => 35,  115 => 34,  113 => 33,  105 => 28,  99 => 27,  85 => 15,  82 => 14,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  41 => 4,  35 => 3,  30 => 2,);
    }
}
