<?php

/* BazingaExposeTranslationBundle::exposeTranslation.js.twig */
class __TwigTemplate_193de118040ccc84572a6d469f7035a8 extends Twig_Template
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
        echo "Translator.locale = '";
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : null), "js", null, true);
        echo "';
Translator.defaultDomains = [";
        // line 2
        if ((isset($context["defaultDomains"]) ? $context["defaultDomains"] : null)) {
            echo "\"";
            echo twig_join_filter((isset($context["defaultDomains"]) ? $context["defaultDomains"] : null), "\", \"");
            echo "\"";
        }
        echo "];
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
        foreach ($context['_seq'] as $context["domain"] => $context["translations"]) {
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["translations"]) ? $context["translations"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["message"]) {
                // line 5
                echo "Translator.add(";
                echo twig_jsonencode_filter((((isset($context["domain"]) ? $context["domain"] : null) . ":") . (isset($context["key"]) ? $context["key"] : null)));
                echo ", ";
                echo twig_jsonencode_filter((isset($context["message"]) ? $context["message"] : null));
                echo ");
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['domain'], $context['translations'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "BazingaExposeTranslationBundle::exposeTranslation.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  36 => 4,  32 => 3,  24 => 2,  19 => 1,);
    }
}
