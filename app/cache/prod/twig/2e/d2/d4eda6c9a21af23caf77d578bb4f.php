<?php

/* APYJsFormValidationBundle:Constraints:LocationValidator.js.twig */
class __TwigTemplate_2ed2d4eda6c9a21af23caf77d578bb4f extends Twig_Template
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
        echo "function Location(field, params)
{
var fieldValue = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

if (isNotDefined(fieldValue)) {
return true;
}

fieldValue = String(fieldValue);

\$.ajax({
url: '";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_validateLocation"), "js", null, true);
        echo "?value=' + fieldValue,
async: false,
dataType: 'json',
success: function (response) {
   locationValid = Boolean(response);
}
});


if(locationValid == true )
{
return true;
}

return getComputeMessage(params.message);

}";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:LocationValidator.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  23 => 3,  19 => 1,  489 => 170,  484 => 167,  481 => 166,  475 => 143,  465 => 118,  444 => 116,  440 => 115,  436 => 114,  431 => 113,  427 => 112,  425 => 111,  422 => 110,  417 => 99,  414 => 98,  397 => 80,  394 => 79,  379 => 67,  376 => 66,  369 => 40,  366 => 39,  361 => 36,  353 => 31,  348 => 10,  344 => 170,  341 => 169,  339 => 166,  333 => 162,  321 => 159,  317 => 158,  314 => 157,  312 => 156,  309 => 155,  297 => 152,  293 => 151,  290 => 150,  288 => 149,  285 => 148,  279 => 144,  277 => 143,  274 => 142,  265 => 140,  261 => 139,  253 => 134,  244 => 128,  241 => 127,  239 => 126,  236 => 125,  220 => 122,  218 => 110,  216 => 109,  203 => 107,  199 => 106,  192 => 103,  175 => 102,  172 => 101,  170 => 98,  164 => 94,  162 => 79,  160 => 66,  153 => 61,  144 => 58,  141 => 57,  137 => 56,  134 => 55,  119 => 53,  116 => 52,  113 => 51,  96 => 50,  86 => 42,  84 => 39,  77 => 36,  73 => 32,  71 => 31,  52 => 15,  48 => 14,  43 => 11,  41 => 10,  30 => 1,);
    }
}
