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
        $context['_seq'] = twig_ensure_traversable((isset($context["librairyCalls"]) ? $context["librairyCalls"] : $this->getContext($context, "librairyCalls")));
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
            $template = $this->env->resolveTemplate((isset($context["librairyCall"]) ? $context["librairyCall"] : $this->getContext($context, "librairyCall")));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["getterHandlers"]) ? $context["getterHandlers"] : $this->getContext($context, "getterHandlers")));
        foreach ($context['_seq'] as $context["_key"] => $context["handler"]) {
            // line 57
            echo "
";
            // line 58
            echo (isset($context["handler"]) ? $context["handler"] : $this->getContext($context, "handler"));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["fieldConstraints"]) ? $context["fieldConstraints"] : $this->getContext($context, "fieldConstraints")));
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
            echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), "html", null, true);
            echo ": function() {
            var gv;
            result = true;
";
            // line 106
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["constraints"]) ? $context["constraints"] : $this->getContext($context, "constraints")));
            foreach ($context['_seq'] as $context["_key"] => $context["constraint"]) {
                // line 107
                echo "            result = result && checkError('";
                echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), "html", null, true);
                echo "', ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["constraint"]) ? $context["constraint"] : $this->getContext($context, "constraint")), "name"), "html", null, true);
                echo ", ";
                echo $this->getAttribute((isset($context["constraint"]) ? $context["constraint"] : $this->getContext($context, "constraint")), "parameters");
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
        if ($this->getAttribute((isset($context["check_modes"]) ? $context["check_modes"] : $this->getContext($context, "check_modes")), "submit")) {
            // line 127
            echo "            // On submit checks
            var form = jsfv.id('";
            // line 128
            echo twig_escape_filter($this->env, (isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), "html", null, true);
            echo "');

            // Form exists ?
            if (form) {
                // Get the form
                if ( form.nodeName.toLowerCase() != 'form') {
                    form = jsfv.id('";
            // line 134
            echo twig_escape_filter($this->env, (isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), "html", null, true);
            echo "__token').form;
                }

                jsfv.onEvent(form, 'submit', function() {
                    var gv, submitForm = true;
";
            // line 139
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fieldConstraints"]) ? $context["fieldConstraints"] : $this->getContext($context, "fieldConstraints")));
            foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
                // line 140
                echo "                    submitForm = jsfv.check_";
                echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), "html", null, true);
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
        if ($this->getAttribute((isset($context["check_modes"]) ? $context["check_modes"] : $this->getContext($context, "check_modes")), "blur")) {
            // line 150
            echo "            // On blur checks
";
            // line 151
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fieldConstraints"]) ? $context["fieldConstraints"] : $this->getContext($context, "fieldConstraints")));
            foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
                // line 152
                echo "            jsfv.onEvent('";
                echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), "html", null, true);
                echo "', 'blur', jsfv.check_";
                echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), "html", null, true);
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
        if ($this->getAttribute((isset($context["check_modes"]) ? $context["check_modes"] : $this->getContext($context, "check_modes")), "change")) {
            // line 157
            echo "            // On change checks
";
            // line 158
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fieldConstraints"]) ? $context["fieldConstraints"] : $this->getContext($context, "fieldConstraints")));
            foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
                // line 159
                echo "            jsfv.onEvent('";
                echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), "html", null, true);
                echo "', 'change', jsfv.check_";
                echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), "html", null, true);
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
        if ($this->getAttribute((isset($context["gettersConstraints"]) ? $context["gettersConstraints"] : null), (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), array(), "array", true, true)) {
            // line 112
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gettersConstraints"]) ? $context["gettersConstraints"] : $this->getContext($context, "gettersConstraints")), (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), array(), "array"));
            foreach ($context['_seq'] as $context["getterHandler"] => $context["getterConstraints"]) {
                // line 113
                echo "            if (";
                echo twig_escape_filter($this->env, (isset($context["resultvar"]) ? $context["resultvar"] : $this->getContext($context, "resultvar")), "html", null, true);
                echo ") {
                gv = ";
                // line 114
                echo (isset($context["getterHandler"]) ? $context["getterHandler"] : $this->getContext($context, "getterHandler"));
                echo "();
";
                // line 115
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["getterConstraints"]) ? $context["getterConstraints"] : $this->getContext($context, "getterConstraints")));
                foreach ($context['_seq'] as $context["_key"] => $context["constraint"]) {
                    // line 116
                    echo "                ";
                    echo twig_escape_filter($this->env, (isset($context["resultvar"]) ? $context["resultvar"] : $this->getContext($context, "resultvar")), "html", null, true);
                    echo " = checkError(";
                    if (((isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")) == ".")) {
                        echo "form.id";
                    } else {
                        echo "'";
                        echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), "html", null, true);
                        echo "'";
                    }
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["constraint"]) ? $context["constraint"] : $this->getContext($context, "constraint")), "name"), "html", null, true);
                    echo ", ";
                    echo $this->getAttribute((isset($context["constraint"]) ? $context["constraint"] : $this->getContext($context, "constraint")), "parameters");
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
        return array (  489 => 170,  484 => 167,  481 => 166,  475 => 143,  465 => 118,  440 => 115,  431 => 113,  427 => 112,  425 => 111,  417 => 99,  414 => 98,  394 => 79,  376 => 66,  369 => 40,  353 => 31,  348 => 10,  344 => 170,  339 => 166,  333 => 162,  317 => 158,  314 => 157,  312 => 156,  309 => 155,  288 => 149,  285 => 148,  265 => 140,  261 => 139,  241 => 127,  218 => 110,  203 => 107,  175 => 102,  160 => 66,  23 => 3,  185 => 54,  90 => 21,  1732 => 644,  1723 => 642,  1719 => 641,  1715 => 640,  1711 => 639,  1705 => 638,  1702 => 637,  1700 => 636,  1697 => 635,  1689 => 629,  1680 => 626,  1675 => 624,  1668 => 623,  1664 => 622,  1660 => 621,  1656 => 620,  1652 => 619,  1648 => 617,  1646 => 616,  1638 => 611,  1634 => 610,  1628 => 607,  1622 => 606,  1619 => 605,  1617 => 604,  1614 => 603,  1604 => 596,  1600 => 595,  1591 => 591,  1580 => 583,  1573 => 579,  1563 => 572,  1554 => 566,  1547 => 562,  1543 => 560,  1532 => 555,  1528 => 554,  1521 => 550,  1516 => 549,  1512 => 548,  1508 => 547,  1499 => 541,  1495 => 540,  1491 => 539,  1482 => 537,  1477 => 535,  1464 => 525,  1460 => 524,  1453 => 520,  1449 => 518,  1447 => 517,  1444 => 516,  1436 => 511,  1431 => 510,  1426 => 508,  1421 => 507,  1418 => 506,  1413 => 504,  1405 => 503,  1400 => 502,  1398 => 501,  1394 => 500,  1390 => 499,  1387 => 498,  1385 => 497,  1382 => 496,  1372 => 489,  1368 => 488,  1360 => 483,  1356 => 482,  1347 => 480,  1343 => 478,  1341 => 477,  1332 => 475,  1327 => 473,  1319 => 468,  1314 => 466,  1307 => 462,  1302 => 460,  1294 => 455,  1282 => 446,  1278 => 445,  1272 => 442,  1266 => 439,  1262 => 438,  1259 => 437,  1257 => 436,  1254 => 435,  1245 => 429,  1241 => 428,  1237 => 427,  1228 => 423,  1217 => 415,  1210 => 411,  1200 => 404,  1196 => 402,  1185 => 399,  1181 => 398,  1177 => 397,  1172 => 396,  1168 => 395,  1164 => 394,  1156 => 389,  1152 => 388,  1148 => 387,  1139 => 385,  1134 => 383,  1122 => 374,  1118 => 373,  1110 => 368,  1106 => 366,  1104 => 365,  1101 => 364,  1092 => 357,  1090 => 356,  1086 => 355,  1079 => 351,  1076 => 350,  1074 => 349,  1070 => 348,  1063 => 344,  1060 => 343,  1058 => 342,  1054 => 341,  1047 => 337,  1044 => 336,  1042 => 335,  1038 => 334,  1033 => 332,  1028 => 331,  1026 => 330,  1023 => 329,  1014 => 323,  1010 => 322,  1006 => 321,  1002 => 320,  997 => 318,  993 => 317,  989 => 316,  985 => 315,  979 => 312,  974 => 310,  969 => 309,  967 => 308,  964 => 307,  956 => 302,  952 => 301,  949 => 300,  944 => 299,  939 => 298,  936 => 297,  931 => 295,  926 => 294,  924 => 293,  921 => 292,  916 => 291,  911 => 290,  908 => 289,  903 => 287,  898 => 286,  895 => 285,  890 => 283,  885 => 282,  882 => 281,  877 => 279,  869 => 278,  864 => 277,  862 => 276,  858 => 275,  854 => 274,  851 => 273,  849 => 272,  846 => 271,  837 => 265,  829 => 262,  820 => 256,  815 => 254,  808 => 250,  803 => 248,  795 => 243,  783 => 234,  779 => 233,  772 => 230,  770 => 229,  767 => 228,  759 => 223,  753 => 220,  749 => 219,  745 => 218,  740 => 216,  737 => 215,  735 => 214,  732 => 213,  724 => 208,  720 => 207,  717 => 206,  715 => 205,  712 => 204,  707 => 201,  701 => 199,  697 => 198,  693 => 197,  688 => 195,  683 => 194,  678 => 191,  671 => 188,  667 => 187,  664 => 186,  662 => 182,  660 => 181,  655 => 180,  647 => 175,  637 => 170,  631 => 167,  628 => 166,  626 => 165,  623 => 164,  615 => 159,  611 => 158,  607 => 157,  604 => 156,  602 => 155,  599 => 154,  591 => 149,  587 => 148,  584 => 147,  582 => 142,  580 => 141,  577 => 140,  569 => 135,  565 => 134,  561 => 133,  557 => 131,  555 => 130,  552 => 129,  547 => 126,  541 => 124,  537 => 123,  533 => 122,  528 => 120,  523 => 119,  518 => 116,  512 => 114,  508 => 113,  503 => 111,  498 => 110,  493 => 107,  487 => 105,  483 => 104,  478 => 102,  462 => 96,  458 => 95,  454 => 94,  449 => 92,  444 => 116,  433 => 86,  424 => 83,  419 => 82,  411 => 77,  407 => 75,  382 => 71,  379 => 67,  377 => 69,  374 => 68,  366 => 39,  362 => 61,  356 => 60,  347 => 59,  341 => 169,  337 => 57,  332 => 55,  327 => 54,  322 => 51,  316 => 49,  306 => 46,  301 => 43,  294 => 40,  290 => 150,  286 => 37,  281 => 31,  279 => 144,  274 => 142,  269 => 26,  262 => 23,  258 => 22,  255 => 21,  253 => 134,  248 => 19,  236 => 125,  233 => 12,  231 => 11,  220 => 122,  211 => 2,  199 => 106,  179 => 364,  169 => 307,  166 => 306,  164 => 94,  156 => 46,  129 => 163,  117 => 129,  49 => 12,  140 => 29,  134 => 55,  86 => 42,  65 => 29,  14 => 1,  183 => 66,  174 => 329,  161 => 48,  150 => 43,  113 => 51,  82 => 68,  244 => 128,  239 => 126,  208 => 1,  204 => 635,  192 => 103,  137 => 56,  124 => 153,  99 => 101,  87 => 82,  110 => 29,  77 => 36,  56 => 18,  53 => 18,  69 => 11,  62 => 24,  479 => 162,  473 => 101,  468 => 98,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 88,  436 => 114,  434 => 146,  429 => 85,  426 => 143,  422 => 110,  412 => 134,  408 => 132,  406 => 131,  401 => 74,  397 => 80,  392 => 73,  386 => 72,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 36,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 159,  313 => 99,  311 => 47,  308 => 97,  304 => 95,  297 => 152,  293 => 151,  284 => 32,  282 => 88,  277 => 143,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 14,  234 => 34,  228 => 10,  223 => 71,  219 => 70,  213 => 3,  207 => 68,  198 => 24,  181 => 434,  176 => 363,  170 => 98,  168 => 52,  146 => 42,  142 => 41,  128 => 25,  125 => 24,  107 => 117,  38 => 6,  144 => 58,  141 => 57,  135 => 38,  126 => 34,  109 => 41,  103 => 37,  67 => 24,  61 => 27,  47 => 5,  105 => 110,  93 => 22,  76 => 12,  72 => 27,  68 => 28,  27 => 4,  91 => 69,  84 => 39,  94 => 39,  88 => 20,  79 => 67,  59 => 23,  21 => 1,  44 => 9,  31 => 4,  28 => 6,  225 => 96,  216 => 109,  212 => 88,  205 => 84,  201 => 634,  196 => 602,  194 => 516,  191 => 515,  189 => 496,  186 => 495,  180 => 5,  172 => 101,  159 => 228,  154 => 213,  147 => 55,  132 => 164,  127 => 154,  121 => 45,  118 => 35,  114 => 42,  104 => 36,  100 => 34,  78 => 15,  75 => 28,  71 => 31,  58 => 9,  34 => 11,  26 => 3,  24 => 3,  25 => 3,  19 => 1,  70 => 37,  63 => 9,  46 => 7,  22 => 2,  163 => 13,  155 => 58,  152 => 49,  149 => 204,  145 => 202,  139 => 192,  131 => 51,  123 => 41,  120 => 22,  115 => 30,  106 => 27,  101 => 108,  96 => 50,  83 => 14,  80 => 29,  74 => 38,  66 => 26,  55 => 9,  52 => 15,  50 => 17,  43 => 11,  41 => 10,  37 => 3,  35 => 4,  32 => 3,  29 => 3,  184 => 435,  178 => 71,  171 => 328,  165 => 58,  162 => 79,  157 => 38,  153 => 61,  151 => 212,  143 => 194,  138 => 39,  136 => 50,  133 => 43,  130 => 36,  122 => 140,  119 => 53,  116 => 52,  111 => 29,  108 => 37,  102 => 30,  98 => 24,  95 => 99,  92 => 17,  89 => 89,  85 => 19,  81 => 29,  73 => 32,  64 => 23,  60 => 8,  57 => 20,  54 => 6,  51 => 5,  48 => 14,  45 => 4,  42 => 17,  39 => 3,  36 => 15,  33 => 2,  30 => 1,);
    }
}
