<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_52136ce17a917682c8526380e83a8731 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Redirection Intercepted";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"sf-exceptionreset\">
        <div class=\"block_exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  790 => 469,  787 => 468,  776 => 466,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  690 => 453,  686 => 451,  682 => 450,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  590 => 431,  558 => 401,  540 => 398,  520 => 396,  513 => 393,  173 => 85,  112 => 52,  388 => 160,  385 => 159,  370 => 156,  360 => 152,  357 => 151,  352 => 149,  342 => 146,  330 => 140,  320 => 135,  292 => 120,  289 => 119,  287 => 118,  280 => 114,  275 => 111,  273 => 110,  268 => 107,  264 => 105,  254 => 101,  247 => 97,  226 => 86,  221 => 83,  215 => 79,  202 => 73,  193 => 68,  190 => 89,  177 => 59,  97 => 23,  209 => 77,  188 => 66,  167 => 64,  343 => 159,  335 => 157,  325 => 138,  323 => 149,  302 => 137,  295 => 121,  259 => 109,  252 => 138,  245 => 96,  238 => 97,  217 => 83,  214 => 82,  206 => 78,  182 => 64,  158 => 56,  148 => 74,  40 => 8,  489 => 170,  484 => 167,  481 => 166,  475 => 143,  465 => 118,  440 => 115,  431 => 113,  427 => 112,  425 => 111,  417 => 99,  414 => 98,  394 => 79,  376 => 66,  369 => 40,  353 => 31,  348 => 10,  344 => 147,  339 => 145,  333 => 141,  317 => 158,  314 => 131,  312 => 156,  309 => 141,  288 => 129,  285 => 148,  265 => 140,  261 => 139,  241 => 127,  218 => 110,  203 => 77,  175 => 102,  160 => 59,  23 => 3,  185 => 68,  90 => 41,  1732 => 644,  1723 => 642,  1719 => 641,  1715 => 640,  1711 => 639,  1705 => 638,  1702 => 637,  1700 => 636,  1697 => 635,  1689 => 629,  1680 => 626,  1675 => 624,  1668 => 623,  1664 => 622,  1660 => 621,  1656 => 620,  1652 => 619,  1648 => 617,  1646 => 616,  1638 => 611,  1634 => 610,  1628 => 607,  1622 => 606,  1619 => 605,  1617 => 604,  1614 => 603,  1604 => 596,  1600 => 595,  1591 => 591,  1580 => 583,  1573 => 579,  1563 => 572,  1554 => 566,  1547 => 562,  1543 => 560,  1532 => 555,  1528 => 554,  1521 => 550,  1516 => 549,  1512 => 548,  1508 => 547,  1499 => 541,  1495 => 540,  1491 => 539,  1482 => 537,  1477 => 535,  1464 => 525,  1460 => 524,  1453 => 520,  1449 => 518,  1447 => 517,  1444 => 516,  1436 => 511,  1431 => 510,  1426 => 508,  1421 => 507,  1418 => 506,  1413 => 504,  1405 => 503,  1400 => 502,  1398 => 501,  1394 => 500,  1390 => 499,  1387 => 498,  1385 => 497,  1382 => 496,  1372 => 489,  1368 => 488,  1360 => 483,  1356 => 482,  1347 => 480,  1343 => 478,  1341 => 477,  1332 => 475,  1327 => 473,  1319 => 468,  1314 => 466,  1307 => 462,  1302 => 460,  1294 => 455,  1282 => 446,  1278 => 445,  1272 => 442,  1266 => 439,  1262 => 438,  1259 => 437,  1257 => 436,  1254 => 435,  1245 => 429,  1241 => 428,  1237 => 427,  1228 => 423,  1217 => 415,  1210 => 411,  1200 => 404,  1196 => 402,  1185 => 399,  1181 => 398,  1177 => 397,  1172 => 396,  1168 => 395,  1164 => 394,  1156 => 389,  1152 => 388,  1148 => 387,  1139 => 385,  1134 => 383,  1122 => 374,  1118 => 373,  1110 => 368,  1106 => 366,  1104 => 365,  1101 => 364,  1092 => 357,  1090 => 356,  1086 => 355,  1079 => 351,  1076 => 350,  1074 => 349,  1070 => 348,  1063 => 344,  1060 => 343,  1058 => 342,  1054 => 341,  1047 => 337,  1044 => 336,  1042 => 335,  1038 => 334,  1033 => 332,  1028 => 331,  1026 => 330,  1023 => 329,  1014 => 323,  1010 => 322,  1006 => 321,  1002 => 320,  997 => 318,  993 => 317,  989 => 316,  985 => 315,  979 => 312,  974 => 310,  969 => 309,  967 => 308,  964 => 307,  956 => 302,  952 => 301,  949 => 300,  944 => 299,  939 => 298,  936 => 297,  931 => 295,  926 => 294,  924 => 293,  921 => 292,  916 => 291,  911 => 290,  908 => 289,  903 => 287,  898 => 286,  895 => 285,  890 => 283,  885 => 282,  882 => 281,  877 => 279,  869 => 278,  864 => 277,  862 => 276,  858 => 275,  854 => 274,  851 => 273,  849 => 272,  846 => 271,  837 => 265,  829 => 262,  820 => 256,  815 => 254,  808 => 250,  803 => 248,  795 => 243,  783 => 234,  779 => 233,  772 => 465,  770 => 229,  767 => 228,  759 => 223,  753 => 220,  749 => 219,  745 => 218,  740 => 216,  737 => 215,  735 => 214,  732 => 213,  724 => 208,  720 => 207,  717 => 206,  715 => 205,  712 => 204,  707 => 454,  701 => 199,  697 => 198,  693 => 197,  688 => 195,  683 => 194,  678 => 449,  671 => 188,  667 => 187,  664 => 186,  662 => 182,  660 => 181,  655 => 180,  647 => 175,  637 => 170,  631 => 167,  628 => 166,  626 => 165,  623 => 164,  615 => 159,  611 => 158,  607 => 157,  604 => 432,  602 => 155,  599 => 154,  591 => 149,  587 => 148,  584 => 147,  582 => 142,  580 => 141,  577 => 140,  569 => 135,  565 => 134,  561 => 133,  557 => 131,  555 => 130,  552 => 129,  547 => 126,  541 => 124,  537 => 123,  533 => 122,  528 => 120,  523 => 397,  518 => 395,  512 => 114,  508 => 391,  503 => 111,  498 => 110,  493 => 107,  487 => 105,  483 => 104,  478 => 102,  462 => 96,  458 => 95,  454 => 94,  449 => 92,  444 => 116,  433 => 86,  424 => 83,  419 => 82,  411 => 77,  407 => 75,  382 => 71,  379 => 158,  377 => 157,  374 => 68,  366 => 155,  362 => 153,  356 => 163,  347 => 160,  341 => 169,  337 => 57,  332 => 55,  327 => 139,  322 => 51,  316 => 145,  306 => 128,  301 => 125,  294 => 40,  290 => 150,  286 => 37,  281 => 125,  279 => 144,  274 => 121,  269 => 26,  262 => 23,  258 => 103,  255 => 21,  253 => 134,  248 => 19,  236 => 125,  233 => 12,  231 => 88,  220 => 122,  211 => 81,  199 => 106,  179 => 364,  169 => 56,  166 => 82,  164 => 63,  156 => 77,  129 => 163,  117 => 129,  49 => 17,  140 => 42,  134 => 54,  86 => 29,  65 => 23,  14 => 1,  183 => 63,  174 => 58,  161 => 80,  150 => 75,  113 => 40,  82 => 19,  244 => 128,  239 => 126,  208 => 1,  204 => 94,  192 => 72,  137 => 56,  124 => 153,  99 => 101,  87 => 40,  110 => 42,  77 => 18,  56 => 15,  53 => 38,  69 => 20,  62 => 25,  479 => 162,  473 => 101,  468 => 98,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 88,  436 => 114,  434 => 146,  429 => 85,  426 => 143,  422 => 110,  412 => 134,  408 => 132,  406 => 131,  401 => 74,  397 => 80,  392 => 73,  386 => 72,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 36,  359 => 109,  354 => 150,  340 => 158,  336 => 103,  321 => 159,  313 => 99,  311 => 130,  308 => 129,  304 => 95,  297 => 152,  293 => 151,  284 => 32,  282 => 115,  277 => 143,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 93,  234 => 89,  228 => 87,  223 => 71,  219 => 70,  213 => 3,  207 => 95,  198 => 69,  181 => 87,  176 => 61,  170 => 60,  168 => 52,  146 => 42,  142 => 41,  128 => 45,  125 => 44,  107 => 27,  38 => 6,  144 => 73,  141 => 57,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 21,  61 => 18,  47 => 21,  105 => 110,  93 => 42,  76 => 34,  72 => 22,  68 => 30,  27 => 4,  91 => 28,  84 => 27,  94 => 39,  88 => 20,  79 => 35,  59 => 21,  21 => 2,  44 => 11,  31 => 6,  28 => 3,  225 => 88,  216 => 109,  212 => 78,  205 => 71,  201 => 634,  196 => 92,  194 => 516,  191 => 70,  189 => 496,  186 => 495,  180 => 5,  172 => 64,  159 => 228,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 35,  114 => 42,  104 => 35,  100 => 24,  78 => 26,  75 => 24,  71 => 23,  58 => 25,  34 => 8,  26 => 3,  24 => 2,  25 => 3,  19 => 1,  70 => 13,  63 => 21,  46 => 14,  22 => 2,  163 => 81,  155 => 58,  152 => 49,  149 => 204,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 27,  101 => 33,  96 => 50,  83 => 28,  80 => 32,  74 => 25,  66 => 19,  55 => 15,  52 => 18,  50 => 15,  43 => 9,  41 => 12,  37 => 7,  35 => 5,  32 => 6,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 54,  162 => 53,  157 => 38,  153 => 62,  151 => 47,  143 => 43,  138 => 55,  136 => 50,  133 => 43,  130 => 39,  122 => 51,  119 => 57,  116 => 31,  111 => 29,  108 => 41,  102 => 34,  98 => 32,  95 => 34,  92 => 21,  89 => 28,  85 => 19,  81 => 24,  73 => 33,  64 => 11,  60 => 15,  57 => 20,  54 => 19,  51 => 37,  48 => 11,  45 => 13,  42 => 8,  39 => 9,  36 => 7,  33 => 6,  30 => 5,);
    }
}
