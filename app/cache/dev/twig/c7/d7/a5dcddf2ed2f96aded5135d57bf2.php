<?php

/* DirigendoFrontEndBundle:Service:service.html.twig */
class __TwigTemplate_c7d7a5dcddf2ed2f96aded5135d57bf2 extends Twig_Template
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
    public function block_javascripts($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " 
";
    }

    // line 8
    public function block_white_content($context, array $blocks = array())
    {
        // line 9
        echo "        <div id=\"banner\" style=\"background-repeat: no-repeat; background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/dirigendofrontend" . $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "HeaderImage"))), "html", null, true);
        echo "); position:relative;\" alt=\"<? echo \$keyword ?>\">
            <div id=\"tagline\"></div>
            <div id=\"taglineText\"><h1 style=\"font-size:";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "TagLineTextSize"), "html", null, true);
        echo "px; display: table-cell; height: 65px;  width: 940px;  vertical-align: middle;\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "TagLine"), "html", null, true);
        echo "</h1>
            </div> 
        </div>
            <div style=\"width: 960px; text-align: center; margin-top: 15px; margin-bottom: 10px;\">
                <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/images/123.png"), "html", null, true);
        echo "\" alt=\"dirigendo 123\">
            </div> 
";
    }

    // line 19
    public function block_gray_content($context, array $blocks = array())
    {
        // line 20
        $context["formWidthCalculated"] = (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "formWidth") + $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "FormPaddingLeft")) + $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "FormPaddingRight"));
        // line 21
        echo "            <div id=\"content_box\">
                <div id=\"left-content-box\" style=\"width: ";
        // line 22
        echo twig_escape_filter($this->env, (940 - (isset($context["formWidthCalculated"]) ? $context["formWidthCalculated"] : $this->getContext($context, "formWidthCalculated"))), "html", null, true);
        echo "px;\">

                               ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["benefits"]) ? $context["benefits"] : $this->getContext($context, "benefits")));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            echo "    

            <div  class=\"benefit\">
                <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/images/icons/arrow.png"), "html", null, true);
            echo "\" alt=\"checkbox\"></div>
            <div class=\"benefitdesc\">
                <h2>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "header"), "html", null, true);
            echo "</h2>
                            ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "text"), "html", null, true);
            echo "
            </div>
            <div style=\"clear: both\"></div>

                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "    
                    <div style=\"clear: both; height: 20px;\"></div>
                    <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/Images/hrsmall.png"), "html", null, true);
        echo "\" alt=\"hrsmall\">
                    <div id=\"content_box1\" style=\"width: 100%;\">
                   ";
        // line 38
        $template = $this->env->resolveTemplate(twig_template_from_string($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "ContentBox1")));
        $template->display($context);
        // line 39
        echo "                    </div>
                </div>
                <div id=\"right-content-box\" style=\"position: relative; width: ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["formWidthCalculated"]) ? $context["formWidthCalculated"] : $this->getContext($context, "formWidthCalculated")), "html", null, true);
        echo "px; margin-bottom: 15px;\">
                    <div id=\"formheader\" style=\" width: ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["formWidthCalculated"]) ? $context["formWidthCalculated"] : $this->getContext($context, "formWidthCalculated")), "html", null, true);
        echo "px;\">
                        <table style=\"height: 95px; width: ";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["formWidthCalculated"]) ? $context["formWidthCalculated"] : $this->getContext($context, "formWidthCalculated")), "html", null, true);
        echo "px;\">
                            <tr>
                                <td>
                                    <div style=\"padding-left:25px; padding-right: 90px;\"> ";
        // line 46
        echo $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "FormHeader");
        echo "</div>
                                </td>
                                <td><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/Images/form-header.png"), "html", null, true);
        echo "\" alt=\"formheader\" id=\"formheaderimage\"></td>
                            </tr>
                        </table>
                    </div>
                    <iframe class=\"contentIframe\" id=\"iframe\" style=\"width: ";
        // line 52
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "formWidth") - 2), "html", null, true);
        echo "px; height:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "FormHeight"), "html", null, true);
        echo "px; padding-top:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "FormPaddingTop"), "html", null, true);
        echo "px; padding-left:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "FormPaddingLeft"), "html", null, true);
        echo "px; padding-right:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "FormPaddingRight"), "html", null, true);
        echo "px; padding-bottom:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "FormPaddingBottom"), "html", null, true);
        echo "px;\" frameborder=\"0\" allowtransparency=\"true\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "FormURL"), "html", null, true);
        echo "\">
                    </iframe>
                    <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/Images/freelabel.png"), "html", null, true);
        echo "\" style=\"z-index: 100;    height: 81px;  right: -3px; position: absolute; top: -3px; width: 81px;\" alt=\"gratis\">
                </div>
                <div class=\"clear\"></div>
                <div style=\"width: 960px;\">
                    <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/Images/endhr.png"), "html", null, true);
        echo "\" style=\"margin: 0 auto; display: block;\" alt=\"hr\">  
                </div>
                <div id=\"reviews\">

                </div>
            </div>
";
    }

    public function getTemplateName()
    {
        return "DirigendoFrontEndBundle:Service:service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 58,  185 => 54,  168 => 52,  161 => 48,  156 => 46,  150 => 43,  146 => 42,  142 => 41,  138 => 39,  135 => 38,  130 => 36,  126 => 34,  115 => 30,  111 => 29,  106 => 27,  98 => 24,  93 => 22,  90 => 21,  88 => 20,  85 => 19,  78 => 15,  69 => 11,  63 => 9,  60 => 8,  54 => 6,  51 => 5,  45 => 4,  39 => 3,  33 => 2,);
    }
}
