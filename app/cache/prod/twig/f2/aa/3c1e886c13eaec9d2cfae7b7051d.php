<?php

/* APYJsFormValidationBundle::JsFormValidation.js.twig */
class __TwigTemplate_f2aa3c1e886c13eaec9d2cfae7b7051d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'before' => array($this, 'block_before'),
            'removeErrors' => array($this, 'block_removeErrors'),
            'getVal' => array($this, 'block_getVal'),
            'addError' => array($this, 'block_addError'),
            'removeErrors_method' => array($this, 'block_removeErrors_method'),
            'addError_method' => array($this, 'block_addError_method'),
            'onEvent' => array($this, 'block_onEvent'),
            'getters_constraints_field' => array($this, 'block_getters_constraints_field'),
            'getters_constraints_submit' => array($this, 'block_getters_constraints_submit'),
            'onReady' => array($this, 'block_onReady'),
            'after' => array($this, 'block_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/**
 * This file is part of the JsFormValidationBundle.
 *
 * (c) Abhoryo <abhoryo@free.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

";
        // line 10
        $this->displayBlock('before', $context, $blocks);
        // line 11
        echo "
var jsfv = new function () {
    function getComputeMessage(key, placeholders, number) {
        Translator.placeHolderPrefix = '";
        // line 14
        echo "{{";
        echo " ';
        Translator.placeHolderSuffix = ' ";
        // line 15
        echo "}}";
        echo "';
        // Default translations
        if (!Translator.has('validators:'+key)) {
            Translator.add('validators:'+key, key);
        }

        return Translator.get('validators:'+key, placeholders, number);
    }

    function isNotDefined(value) {
        return (typeof(value) == 'undefined' || null === value || '' === value);
    }

    function checkError(field, checkFunction, parameters, value) {
        field = jsfv.id(field);
        // Remove old errors of the field
        ";
        // line 31
        $this->displayBlock('removeErrors', $context, $blocks);
        // line 32
        echo "        // Check the value
        errorMessage = checkFunction((value === undefined ? field : value), parameters);
        ";
        // line 36
        echo "/*// ";
        $this->displayBlock('getVal', $context, $blocks);
        echo " */

        if (errorMessage != true) {
";
        // line 39
        $this->displayBlock('addError', $context, $blocks);
        // line 42
        echo "
            return false;
        }

        return true;
    }


";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["librairyCalls"]) ? $context["librairyCalls"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["librairyCall"]) {
            // line 51
            echo "
";
            // line 52
            $template = $this->env->resolveTemplate((isset($context["librairyCall"]) ? $context["librairyCall"] : null));
            $template->display($context);
            // line 53
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['librairyCall'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 55
        echo "
";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["getterHandlers"]) ? $context["getterHandlers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["handler"]) {
            // line 57
            echo "
";
            // line 58
            echo (isset($context["handler"]) ? $context["handler"] : null);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['handler'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 61
        echo "
    return {
        id: function (id) {
            return document.getElementById(id);
        },
";
        // line 66
        $this->displayBlock('removeErrors_method', $context, $blocks);
        // line 79
        $this->displayBlock('addError_method', $context, $blocks);
        // line 94
        echo "        onEvent: function (field, eventType, handler) {
            if (typeof(field) == 'string') {
                field = jsfv.id(field);
            }
";
        // line 98
        $this->displayBlock('onEvent', $context, $blocks);
        // line 101
        echo "        },
";
        // line 102
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fieldConstraints"]) ? $context["fieldConstraints"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
            // line 103
            echo "        check_";
            echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : null), "js", null, true);
            echo ": function() {
            var gv;
            result = true;
";
            // line 106
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["constraints"]) ? $context["constraints"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["constraint"]) {
                // line 107
                echo "            result = result && checkError('";
                echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : null), "js", null, true);
                echo "', ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["constraint"]) ? $context["constraint"] : null), "name"), "js", null, true);
                echo ", ";
                echo $this->getAttribute((isset($context["constraint"]) ? $context["constraint"] : null), "parameters");
                echo " );
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constraint'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 109
            $context["resultvar"] = "result";
            // line 110
            $this->displayBlock('getters_constraints_field', $context, $blocks);
            // line 122
            echo "            return result;
        },
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['constraints'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 125
        echo "        onReady: function() {
";
        // line 126
        if ($this->getAttribute((isset($context["check_modes"]) ? $context["check_modes"] : null), "submit")) {
            // line 127
            echo "            // On submit checks
            var form = jsfv.id('";
            // line 128
            echo twig_escape_filter($this->env, (isset($context["formName"]) ? $context["formName"] : null), "js", null, true);
            echo "');

            // Form exists ?
            if (form) {
                // Get the form
                if ( form.nodeName.toLowerCase() != 'form') {
                    form = jsfv.id('";
            // line 134
            echo twig_escape_filter($this->env, (isset($context["formName"]) ? $context["formName"] : null), "js", null, true);
            echo "__token').form;
                }

                jsfv.onEvent(form, 'submit', function() {
                    var gv, submitForm = true;
";
            // line 139
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fieldConstraints"]) ? $context["fieldConstraints"] : null));
            foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
                // line 140
                echo "                    submitForm = jsfv.check_";
                echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : null), "js", null, true);
                echo "() && submitForm;
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['constraints'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 142
            $context["resultvar"] = "submitForm";
            $context["fieldName"] = ".";
            // line 143
            $this->displayBlock('getters_constraints_submit', $context, $blocks);
            // line 144
            echo "                    return submitForm;
                });
            }
";
        }
        // line 148
        echo "
";
        // line 149
        if ($this->getAttribute((isset($context["check_modes"]) ? $context["check_modes"] : null), "blur")) {
            // line 150
            echo "            // On blur checks
";
            // line 151
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fieldConstraints"]) ? $context["fieldConstraints"] : null));
            foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
                // line 152
                echo "            jsfv.onEvent('";
                echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : null), "js", null, true);
                echo "', 'blur', jsfv.check_";
                echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : null), "js", null, true);
                echo ");
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['constraints'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        // line 155
        echo "
";
        // line 156
        if ($this->getAttribute((isset($context["check_modes"]) ? $context["check_modes"] : null), "change")) {
            // line 157
            echo "            // On change checks
";
            // line 158
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fieldConstraints"]) ? $context["fieldConstraints"] : null));
            foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
                // line 159
                echo "            jsfv.onEvent('";
                echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : null), "js", null, true);
                echo "', 'change', jsfv.check_";
                echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : null), "js", null, true);
                echo ");
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['constraints'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        // line 162
        echo "        }
    };
}

";
        // line 166
        $this->displayBlock('onReady', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('after', $context, $blocks);
    }

    // line 10
    public function block_before($context, array $blocks = array())
    {
    }

    // line 31
    public function block_removeErrors($context, array $blocks = array())
    {
        ob_start();
        echo "jsfv.removeErrors(field);";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 36
    public function block_getVal($context, array $blocks = array())
    {
    }

    // line 39
    public function block_addError($context, array $blocks = array())
    {
        // line 40
        echo "        ";
        ob_start();
        echo "jsfv.addError(field, errorMessage);";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 66
    public function block_removeErrors_method($context, array $blocks = array())
    {
        // line 67
        echo "        removeErrors: function (field) {
           var label = \$(\"label[for='\" + field.id + \"']\"); 
           if (label.attr(\"originalTitle\") != undefined)
           {
           var originalTitle = label.attr(\"originalTitle\");
           label.text(originalTitle);
           }
           label.removeClass(\"validationerror\");
           \$(field).removeClass(\"validationerror\");
           \$(field).addClass(\"validated\");
        },
";
    }

    // line 79
    public function block_addError_method($context, array $blocks = array())
    {
        // line 80
        echo "        addError: function (field, errorMessage) {
         var label = \$(\"label[for='\" + field.id + \"']\"); 
           if (label.text().indexOf(errorMessage) == -1)
           {
               
           label.attr(\"originalTitle\", label.text());
           label.append(' ' + errorMessage);
           label.addClass(\"validationerror\");
           }
           \$(field).removeClass(\"validated\");
           \$(field).addClass(\"validationerror\");

        },
";
    }

    // line 98
    public function block_onEvent($context, array $blocks = array())
    {
        // line 99
        echo "            \$(field).bind(eventType, handler);
";
    }

    // line 110
    public function block_getters_constraints_field($context, array $blocks = array())
    {
        // line 111
        if ($this->getAttribute((isset($context["gettersConstraints"]) ? $context["gettersConstraints"] : null), (isset($context["fieldName"]) ? $context["fieldName"] : null), array(), "array", true, true)) {
            // line 112
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gettersConstraints"]) ? $context["gettersConstraints"] : null), (isset($context["fieldName"]) ? $context["fieldName"] : null), array(), "array"));
            foreach ($context['_seq'] as $context["getterHandler"] => $context["getterConstraints"]) {
                // line 113
                echo "            if (";
                echo twig_escape_filter($this->env, (isset($context["resultvar"]) ? $context["resultvar"] : null), "js", null, true);
                echo ") {
                gv = ";
                // line 114
                echo (isset($context["getterHandler"]) ? $context["getterHandler"] : null);
                echo "();
";
                // line 115
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["getterConstraints"]) ? $context["getterConstraints"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["constraint"]) {
                    // line 116
                    echo "                ";
                    echo twig_escape_filter($this->env, (isset($context["resultvar"]) ? $context["resultvar"] : null), "js", null, true);
                    echo " = checkError(";
                    if (((isset($context["fieldName"]) ? $context["fieldName"] : null) == ".")) {
                        echo "form.id";
                    } else {
                        echo "'";
                        echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : null), "js", null, true);
                        echo "'";
                    }
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["constraint"]) ? $context["constraint"] : null), "name"), "js", null, true);
                    echo ", ";
                    echo $this->getAttribute((isset($context["constraint"]) ? $context["constraint"] : null), "parameters");
                    echo ", gv);
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constraint'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 118
                echo "            }
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['getterHandler'], $context['getterConstraints'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
    }

    // line 143
    public function block_getters_constraints_submit($context, array $blocks = array())
    {
        $this->displayBlock("getters_constraints_field", $context, $blocks);
    }

    // line 166
    public function block_onReady($context, array $blocks = array())
    {
        // line 167
        echo "\$(jsfv.onReady);
";
    }

    // line 170
    public function block_after($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle::JsFormValidation.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 170,  484 => 167,  481 => 166,  475 => 143,  465 => 118,  444 => 116,  440 => 115,  436 => 114,  431 => 113,  427 => 112,  425 => 111,  422 => 110,  417 => 99,  414 => 98,  397 => 80,  394 => 79,  379 => 67,  376 => 66,  369 => 40,  366 => 39,  361 => 36,  353 => 31,  348 => 10,  344 => 170,  341 => 169,  339 => 166,  333 => 162,  321 => 159,  317 => 158,  314 => 157,  312 => 156,  309 => 155,  297 => 152,  293 => 151,  290 => 150,  288 => 149,  285 => 148,  279 => 144,  277 => 143,  274 => 142,  265 => 140,  261 => 139,  253 => 134,  244 => 128,  241 => 127,  239 => 126,  236 => 125,  220 => 122,  218 => 110,  216 => 109,  203 => 107,  199 => 106,  192 => 103,  175 => 102,  172 => 101,  170 => 98,  164 => 94,  162 => 79,  160 => 66,  153 => 61,  144 => 58,  141 => 57,  137 => 56,  134 => 55,  119 => 53,  116 => 52,  113 => 51,  96 => 50,  86 => 42,  84 => 39,  77 => 36,  73 => 32,  71 => 31,  52 => 15,  48 => 14,  43 => 11,  41 => 10,  30 => 1,);
    }
}
