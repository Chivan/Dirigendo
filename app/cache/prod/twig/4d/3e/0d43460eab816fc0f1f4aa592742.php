<?php

/* APYJsFormValidationBundle:Frameworks:JsFormValidation.js.jquery.twig */
class __TwigTemplate_4d3e0d43460eab816fc0f1f4aa592742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("APYJsFormValidationBundle::JsFormValidation.js.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "APYJsFormValidationBundle::JsFormValidation.js.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Frameworks:JsFormValidation.js.jquery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array ();
    }
}
