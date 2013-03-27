<?php

/* DirigendoFrontEndBundle:MainMenu:menu.html.twig */
class __TwigTemplate_c9aa65d3b2148901f2c06e15d28dd329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["m"]) {
            // line 3
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_service", array("serviceName" => (isset($context["key"]) ? $context["key"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "</a>
    <ul>
        ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["m"]) ? $context["m"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 6
                echo "            <li><img style=\"margin-left:4px; margin-top:16px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/images/puntje2.png"), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_service", array("serviceName" => $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "Name"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "Name"), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 7
            echo "    
    </ul>
        <img style=\"margin-left:4px;\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/images/puntje.png"), "html", null, true);
            echo "\">
</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "DirigendoFrontEndBundle:MainMenu:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  51 => 7,  38 => 6,  34 => 5,  22 => 2,  19 => 1,  244 => 61,  239 => 57,  234 => 34,  208 => 32,  204 => 26,  201 => 25,  198 => 24,  192 => 8,  186 => 7,  180 => 5,  176 => 24,  163 => 13,  137 => 11,  124 => 7,  95 => 70,  91 => 69,  87 => 68,  79 => 62,  77 => 61,  70 => 57,  66 => 55,  52 => 48,  45 => 44,  33 => 37,  31 => 4,  26 => 3,  183 => 66,  181 => 65,  174 => 61,  168 => 58,  161 => 53,  150 => 49,  146 => 48,  141 => 46,  133 => 10,  128 => 8,  125 => 39,  118 => 5,  115 => 4,  113 => 33,  105 => 28,  99 => 71,  85 => 15,  82 => 14,  76 => 12,  72 => 11,  68 => 10,  64 => 12,  60 => 8,  56 => 49,  53 => 6,  47 => 5,  41 => 43,  35 => 3,  30 => 2,);
    }
}
