<?php

/* DirigendoFrontEndBundle::layout.html.twig */
class __TwigTemplate_810e7623c0ba9ac4111f393706280d7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'javascripts' => array($this, 'block_javascripts'),
            'white_content' => array($this, 'block_white_content'),
            'gray_content' => array($this, 'block_gray_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 37
        echo "    </head>
    <body>
        <div id=\"main_container\">
            <table id=\"header\">
                <tr>
                    <td style=\"text-align: left; width: 700px;\">
                    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_home"), "html", null, true);
        echo "\">
                    <img style=\"float: left;\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"dirigendo.nl\">
                    </a>
                    <div style=\"font-size:30px; color: #a6a6a6; margin-top: -1px; margin-left:212px;\">
                    </div></td>
                    <td><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_over"), "html", null, true);
        echo "\">Over Dirigendo.nl</a> | 
                        <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_deelnemen"), "html", null, true);
        echo "\">Bedrijf aanmelden</a></td>
                </tr>
            </table> 
            <div id=\"nav\">
                <div  id =\"nav_container\">
                   ";
        // line 54
        echo $this->env->getExtension('actions')->renderAction("DirigendoFrontEndBundle.MainMenuController:menuAction", array(), array());
        // line 55
        echo "                </div>
            </div>
            ";
        // line 57
        $this->displayBlock('white_content', $context, $blocks);
        echo "    
  
            <div id=\"graydiv\">
                <div id=\"content_box\">
                    ";
        // line 61
        $this->displayBlock('gray_content', $context, $blocks);
        // line 62
        echo "                </div>
            </div>
            <div id=\"footer\">
                           <div style=\"width: 960px;\">
                    <div>
                        <ul>
                            <li><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_over"), "html", null, true);
        echo "\">Over Dirigendo.nl</a> |</li>
                            <li><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_deelnemen"), "html", null, true);
        echo "\">Bedrijf aanmelden</a> |</li>
                            <li><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_over"), "html", null, true);
        echo "#Privacy\">Privacy</a> |</li>
                            <li><a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_contact"), "html", null, true);
        echo "\">Contact</a></li>
                        </ul>
                        <br>
                        Copyright © Dirigendo.nl - Alle rechten voorbehouden. 
                    </div>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
        <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
        <meta name=\"keywords\" content=\"";
        // line 8
        $this->displayBlock('keywords', $context, $blocks);
        echo "\" />
        <link rel=\"shortcut icon\" href=\"/favicon.ico\">
        ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4691440_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4691440_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4691440_part_1_jquery-ui-1.10.2.custom_1.css");
            // line 11
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        ";
            // asset "4691440_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4691440_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4691440_part_1_main_style_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        ";
            // asset "4691440_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4691440_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4691440_part_1_wt-rotator_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        ";
        } else {
            // asset "4691440"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4691440") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4691440.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "        <script type=\"text/javascript\">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-37655566-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Dirigendo.nl";
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        echo "Description";
    }

    // line 8
    public function block_keywords($context, array $blocks = array())
    {
        echo "Dirigendo";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "
    ";
        // line 26
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "68f669d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68f669d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68f669d_jquery_1.js");
            // line 32
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "68f669d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68f669d_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68f669d_Jquery-ui_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "68f669d_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68f669d_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68f669d_autocomplete_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "68f669d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68f669d") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68f669d.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 34
        echo "
";
    }

    // line 57
    public function block_white_content($context, array $blocks = array())
    {
    }

    // line 61
    public function block_gray_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "DirigendoFrontEndBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 61,  239 => 57,  234 => 34,  208 => 32,  204 => 26,  201 => 25,  198 => 24,  186 => 7,  180 => 5,  176 => 24,  163 => 13,  137 => 11,  133 => 10,  128 => 8,  124 => 7,  118 => 5,  99 => 71,  95 => 70,  91 => 69,  87 => 68,  79 => 62,  77 => 61,  70 => 57,  66 => 55,  64 => 54,  56 => 49,  52 => 48,  41 => 43,  31 => 4,  26 => 1,  192 => 8,  185 => 54,  168 => 52,  161 => 48,  156 => 46,  150 => 43,  146 => 42,  142 => 41,  138 => 39,  135 => 38,  130 => 36,  126 => 34,  115 => 4,  111 => 29,  106 => 27,  98 => 24,  93 => 22,  90 => 21,  88 => 20,  85 => 19,  78 => 15,  69 => 11,  63 => 9,  60 => 8,  54 => 6,  51 => 5,  45 => 44,  39 => 3,  33 => 37,);
    }
}
