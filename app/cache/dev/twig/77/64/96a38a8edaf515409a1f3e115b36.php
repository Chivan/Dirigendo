<?php

/* DirigendoFrontEndBundle:Default:contactThanks.html.twig */
class __TwigTemplate_776496a38a8edaf515409a1f3e115b36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DirigendoFrontEndBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "Title"), "html", null, true);
    }

    // line 3
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "Description"), "html", null, true);
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "Keywords"), "html", null, true);
    }

    // line 5
    public function block_white_content($context, array $blocks = array())
    {
        // line 6
        echo "            <div style=\"width: 960px;\">
            <div id=\"left-content-box\" style=\"width: 470px; margin-top: 10px; margin-bottom: 20px;\">
               ";
        // line 8
        $template = $this->env->resolveTemplate(twig_template_from_string($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "ContentLeft")));
        $template->display($context);
        // line 9
        echo "            </div>
            <div id=\"right-content-box\" style=\"width: 470px; margin-top: 10px;\">
               <h2>Bericht verzonden</h2>
               Uw bericht is succesvol verzonden.
            </div>
                <div class=\"clear\"></div>
            </div>
";
    }

    // line 17
    public function block_gray_content($context, array $blocks = array())
    {
        // line 18
        echo $this->env->getExtension('actions')->renderAction("DirigendoFrontEndBundle.ServiceTilesController:serviceTilesAction", array(), array());
    }

    public function getTemplateName()
    {
        return "DirigendoFrontEndBundle:Default:contactThanks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 61,  239 => 57,  208 => 32,  204 => 26,  192 => 8,  137 => 11,  124 => 7,  99 => 71,  87 => 68,  110 => 29,  77 => 61,  56 => 49,  53 => 6,  69 => 26,  62 => 25,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 34,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 24,  181 => 66,  176 => 24,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 8,  125 => 44,  107 => 28,  38 => 3,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 37,  67 => 15,  61 => 13,  47 => 5,  105 => 24,  93 => 28,  76 => 16,  72 => 14,  68 => 10,  27 => 4,  91 => 69,  84 => 16,  94 => 39,  88 => 6,  79 => 62,  59 => 24,  21 => 2,  44 => 4,  31 => 4,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 25,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 7,  180 => 5,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 5,  114 => 42,  104 => 36,  100 => 34,  78 => 21,  75 => 29,  71 => 17,  58 => 9,  34 => 11,  26 => 1,  24 => 3,  25 => 3,  19 => 1,  70 => 57,  63 => 24,  46 => 7,  22 => 2,  163 => 13,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 40,  115 => 4,  106 => 36,  101 => 32,  96 => 36,  83 => 31,  80 => 24,  74 => 18,  66 => 55,  55 => 23,  52 => 48,  50 => 5,  43 => 17,  41 => 43,  37 => 8,  35 => 3,  32 => 2,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 10,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 30,  98 => 31,  95 => 70,  92 => 33,  89 => 19,  85 => 25,  81 => 15,  73 => 19,  64 => 54,  60 => 9,  57 => 8,  54 => 10,  51 => 14,  48 => 19,  45 => 44,  42 => 7,  39 => 9,  36 => 13,  33 => 37,  30 => 2,);
    }
}
