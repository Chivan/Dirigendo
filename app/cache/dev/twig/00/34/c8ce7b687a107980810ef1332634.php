<?php

/* BazingaExposeTranslationBundle::exposeTranslation.json.twig */
class __TwigTemplate_0034c8ce7b687a107980810ef1332634 extends Twig_Template
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
        echo "{
  \"locale\": \"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "\",
  \"defaultDomains\": [";
        // line 3
        if ((isset($context["defaultDomains"]) ? $context["defaultDomains"] : $this->getContext($context, "defaultDomains"))) {
            echo "\"";
            echo twig_join_filter((isset($context["defaultDomains"]) ? $context["defaultDomains"] : $this->getContext($context, "defaultDomains")), "\", \"");
            echo "\"";
        }
        echo "],
  \"messages\": {
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["domain"] => $context["translations"]) {
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["translations"]) ? $context["translations"] : $this->getContext($context, "translations")));
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
            foreach ($context['_seq'] as $context["key"] => $context["message"]) {
                // line 7
                echo "    ";
                echo twig_jsonencode_filter((((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")) . ":") . (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))));
                echo ": ";
                echo twig_jsonencode_filter((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")));
                echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) ? ("") : (","));
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['domain'], $context['translations'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 10
        echo "  }
}
";
    }

    public function getTemplateName()
    {
        return "BazingaExposeTranslationBundle::exposeTranslation.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  489 => 170,  484 => 167,  481 => 166,  475 => 143,  465 => 118,  440 => 115,  431 => 113,  427 => 112,  425 => 111,  417 => 99,  414 => 98,  394 => 79,  376 => 66,  369 => 40,  353 => 31,  348 => 10,  344 => 170,  339 => 166,  333 => 162,  317 => 158,  314 => 157,  312 => 156,  309 => 155,  288 => 149,  285 => 148,  265 => 140,  261 => 139,  241 => 127,  218 => 110,  203 => 107,  175 => 102,  160 => 66,  23 => 3,  185 => 54,  90 => 21,  1732 => 644,  1723 => 642,  1719 => 641,  1715 => 640,  1711 => 639,  1705 => 638,  1702 => 637,  1700 => 636,  1697 => 635,  1689 => 629,  1680 => 626,  1675 => 624,  1668 => 623,  1664 => 622,  1660 => 621,  1656 => 620,  1652 => 619,  1648 => 617,  1646 => 616,  1638 => 611,  1634 => 610,  1628 => 607,  1622 => 606,  1619 => 605,  1617 => 604,  1614 => 603,  1604 => 596,  1600 => 595,  1591 => 591,  1580 => 583,  1573 => 579,  1563 => 572,  1554 => 566,  1547 => 562,  1543 => 560,  1532 => 555,  1528 => 554,  1521 => 550,  1516 => 549,  1512 => 548,  1508 => 547,  1499 => 541,  1495 => 540,  1491 => 539,  1482 => 537,  1477 => 535,  1464 => 525,  1460 => 524,  1453 => 520,  1449 => 518,  1447 => 517,  1444 => 516,  1436 => 511,  1431 => 510,  1426 => 508,  1421 => 507,  1418 => 506,  1413 => 504,  1405 => 503,  1400 => 502,  1398 => 501,  1394 => 500,  1390 => 499,  1387 => 498,  1385 => 497,  1382 => 496,  1372 => 489,  1368 => 488,  1360 => 483,  1356 => 482,  1347 => 480,  1343 => 478,  1341 => 477,  1332 => 475,  1327 => 473,  1319 => 468,  1314 => 466,  1307 => 462,  1302 => 460,  1294 => 455,  1282 => 446,  1278 => 445,  1272 => 442,  1266 => 439,  1262 => 438,  1259 => 437,  1257 => 436,  1254 => 435,  1245 => 429,  1241 => 428,  1237 => 427,  1228 => 423,  1217 => 415,  1210 => 411,  1200 => 404,  1196 => 402,  1185 => 399,  1181 => 398,  1177 => 397,  1172 => 396,  1168 => 395,  1164 => 394,  1156 => 389,  1152 => 388,  1148 => 387,  1139 => 385,  1134 => 383,  1122 => 374,  1118 => 373,  1110 => 368,  1106 => 366,  1104 => 365,  1101 => 364,  1092 => 357,  1090 => 356,  1086 => 355,  1079 => 351,  1076 => 350,  1074 => 349,  1070 => 348,  1063 => 344,  1060 => 343,  1058 => 342,  1054 => 341,  1047 => 337,  1044 => 336,  1042 => 335,  1038 => 334,  1033 => 332,  1028 => 331,  1026 => 330,  1023 => 329,  1014 => 323,  1010 => 322,  1006 => 321,  1002 => 320,  997 => 318,  993 => 317,  989 => 316,  985 => 315,  979 => 312,  974 => 310,  969 => 309,  967 => 308,  964 => 307,  956 => 302,  952 => 301,  949 => 300,  944 => 299,  939 => 298,  936 => 297,  931 => 295,  926 => 294,  924 => 293,  921 => 292,  916 => 291,  911 => 290,  908 => 289,  903 => 287,  898 => 286,  895 => 285,  890 => 283,  885 => 282,  882 => 281,  877 => 279,  869 => 278,  864 => 277,  862 => 276,  858 => 275,  854 => 274,  851 => 273,  849 => 272,  846 => 271,  837 => 265,  829 => 262,  820 => 256,  815 => 254,  808 => 250,  803 => 248,  795 => 243,  783 => 234,  779 => 233,  772 => 230,  770 => 229,  767 => 228,  759 => 223,  753 => 220,  749 => 219,  745 => 218,  740 => 216,  737 => 215,  735 => 214,  732 => 213,  724 => 208,  720 => 207,  717 => 206,  715 => 205,  712 => 204,  707 => 201,  701 => 199,  697 => 198,  693 => 197,  688 => 195,  683 => 194,  678 => 191,  671 => 188,  667 => 187,  664 => 186,  662 => 182,  660 => 181,  655 => 180,  647 => 175,  637 => 170,  631 => 167,  628 => 166,  626 => 165,  623 => 164,  615 => 159,  611 => 158,  607 => 157,  604 => 156,  602 => 155,  599 => 154,  591 => 149,  587 => 148,  584 => 147,  582 => 142,  580 => 141,  577 => 140,  569 => 135,  565 => 134,  561 => 133,  557 => 131,  555 => 130,  552 => 129,  547 => 126,  541 => 124,  537 => 123,  533 => 122,  528 => 120,  523 => 119,  518 => 116,  512 => 114,  508 => 113,  503 => 111,  498 => 110,  493 => 107,  487 => 105,  483 => 104,  478 => 102,  462 => 96,  458 => 95,  454 => 94,  449 => 92,  444 => 116,  433 => 86,  424 => 83,  419 => 82,  411 => 77,  407 => 75,  382 => 71,  379 => 67,  377 => 69,  374 => 68,  366 => 39,  362 => 61,  356 => 60,  347 => 59,  341 => 169,  337 => 57,  332 => 55,  327 => 54,  322 => 51,  316 => 49,  306 => 46,  301 => 43,  294 => 40,  290 => 150,  286 => 37,  281 => 31,  279 => 144,  274 => 142,  269 => 26,  262 => 23,  258 => 22,  255 => 21,  253 => 134,  248 => 19,  236 => 125,  233 => 12,  231 => 11,  220 => 122,  211 => 2,  199 => 106,  179 => 364,  169 => 307,  166 => 306,  164 => 94,  156 => 46,  129 => 163,  117 => 129,  49 => 11,  140 => 29,  134 => 55,  86 => 42,  65 => 23,  14 => 1,  183 => 66,  174 => 329,  161 => 48,  150 => 43,  113 => 51,  82 => 68,  244 => 128,  239 => 126,  208 => 1,  204 => 635,  192 => 103,  137 => 56,  124 => 153,  99 => 101,  87 => 82,  110 => 29,  77 => 36,  56 => 7,  53 => 18,  69 => 11,  62 => 22,  479 => 162,  473 => 101,  468 => 98,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 88,  436 => 114,  434 => 146,  429 => 85,  426 => 143,  422 => 110,  412 => 134,  408 => 132,  406 => 131,  401 => 74,  397 => 80,  392 => 73,  386 => 72,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 36,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 159,  313 => 99,  311 => 47,  308 => 97,  304 => 95,  297 => 152,  293 => 151,  284 => 32,  282 => 88,  277 => 143,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 14,  234 => 34,  228 => 10,  223 => 71,  219 => 70,  213 => 3,  207 => 68,  198 => 24,  181 => 434,  176 => 363,  170 => 98,  168 => 52,  146 => 42,  142 => 41,  128 => 25,  125 => 24,  107 => 117,  38 => 6,  144 => 58,  141 => 57,  135 => 38,  126 => 34,  109 => 41,  103 => 37,  67 => 23,  61 => 27,  47 => 5,  105 => 110,  93 => 22,  76 => 12,  72 => 26,  68 => 28,  27 => 4,  91 => 69,  84 => 39,  94 => 39,  88 => 20,  79 => 67,  59 => 21,  21 => 1,  44 => 8,  31 => 4,  28 => 3,  225 => 96,  216 => 109,  212 => 88,  205 => 84,  201 => 634,  196 => 602,  194 => 516,  191 => 515,  189 => 496,  186 => 495,  180 => 5,  172 => 101,  159 => 228,  154 => 213,  147 => 55,  132 => 164,  127 => 154,  121 => 45,  118 => 35,  114 => 42,  104 => 36,  100 => 34,  78 => 15,  75 => 27,  71 => 31,  58 => 9,  34 => 5,  26 => 3,  24 => 2,  25 => 3,  19 => 1,  70 => 37,  63 => 9,  46 => 7,  22 => 2,  163 => 13,  155 => 58,  152 => 49,  149 => 204,  145 => 202,  139 => 192,  131 => 51,  123 => 41,  120 => 22,  115 => 30,  106 => 27,  101 => 108,  96 => 50,  83 => 31,  80 => 10,  74 => 38,  66 => 26,  55 => 9,  52 => 12,  50 => 17,  43 => 9,  41 => 7,  37 => 3,  35 => 5,  32 => 3,  29 => 3,  184 => 435,  178 => 71,  171 => 328,  165 => 58,  162 => 79,  157 => 38,  153 => 61,  151 => 212,  143 => 194,  138 => 39,  136 => 50,  133 => 43,  130 => 36,  122 => 140,  119 => 53,  116 => 52,  111 => 29,  108 => 37,  102 => 30,  98 => 24,  95 => 99,  92 => 17,  89 => 89,  85 => 19,  81 => 29,  73 => 32,  64 => 22,  60 => 8,  57 => 19,  54 => 18,  51 => 5,  48 => 14,  45 => 4,  42 => 8,  39 => 6,  36 => 4,  33 => 3,  30 => 1,);
    }
}
