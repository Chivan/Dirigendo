<?php

/* DirigendoFrontEndBundle:Default:contact.html.twig */
class __TwigTemplate_a69ba40420c5dcf1102aeed89cd9d111 extends Twig_Template
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
<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bazingaexposetranslation/js/translator.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("bazinga_exposetranslation_js", array("domain_name" => "validators", "_locale" => "nl")), "html", null, true);
        echo "\"></script>
";
        // line 10
        echo $this->env->getExtension('JsFormValidation')->JsFormValidationFunction((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
";
    }

    // line 12
    public function block_white_content($context, array $blocks = array())
    {
        // line 13
        echo "<div style=\"width: 960px;\">
    <div id=\"left-content-box\" style=\"width: 470px; margin-top: 10px; margin-bottom: 20px;\">
               ";
        // line 15
        $template = $this->env->resolveTemplate(twig_template_from_string($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "ContentLeft")));
        $template->display($context);
        // line 16
        echo "        </div>
        <div id=\"right-content-box\" style=\"width: 470px; margin-top: 10px;\">

            <form novalidate=\"true\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_contact"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

                    <input type=\"submit\" value=\"Verzenden\" />
                </form>
            </div>
            <div class=\"clear\"></div>
        </div>
";
    }

    // line 28
    public function block_gray_content($context, array $blocks = array())
    {
        // line 29
        echo $this->env->getExtension('actions')->renderAction("DirigendoFrontEndBundle.ServiceTilesController:serviceTilesAction", array(), array());
    }

    public function getTemplateName()
    {
        return "DirigendoFrontEndBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 29,  77 => 13,  56 => 7,  53 => 6,  69 => 26,  62 => 25,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 28,  38 => 6,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 37,  67 => 15,  61 => 13,  47 => 5,  105 => 24,  93 => 28,  76 => 16,  72 => 14,  68 => 10,  27 => 4,  91 => 20,  84 => 16,  94 => 39,  88 => 6,  79 => 30,  59 => 24,  21 => 2,  44 => 12,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 34,  78 => 21,  75 => 29,  71 => 19,  58 => 9,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 7,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 40,  115 => 39,  106 => 36,  101 => 32,  96 => 36,  83 => 31,  80 => 24,  74 => 12,  66 => 15,  55 => 23,  52 => 15,  50 => 10,  43 => 17,  41 => 4,  37 => 8,  35 => 3,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 30,  98 => 31,  95 => 20,  92 => 33,  89 => 19,  85 => 25,  81 => 15,  73 => 19,  64 => 9,  60 => 8,  57 => 11,  54 => 10,  51 => 14,  48 => 19,  45 => 8,  42 => 7,  39 => 9,  36 => 13,  33 => 4,  30 => 2,);
    }
}
