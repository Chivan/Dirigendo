<?php

/* DirigendoFrontEndBundle:Caroussel:caroussel.html.twig */
class __TwigTemplate_1a6b5c687ce36540fab0fa611bbb9a5e extends Twig_Template
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
        echo "<div class=\"container\" style=\" border: 1px solid #333333; width:960px;\">
    <div class=\"wt-rotator\">
        <div class=\"screen\">
            <noscript>
            <!-- placeholder 1st image when javascript is off -->
            <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/Images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"/>
            </noscript>
        </div>
        <div class=\"c-panel\">
            <div class=\"thumbnails\">
                <ul>
                    <li>
                        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/images/carrousel/mainbanner.png"), "html", null, true);
        echo "\" title=\"Dirigendo.nl\"></a>
                    <!--    <a href=\"#services\"></a>                        
                        <div style=\"left:595px; width:365px; top:20px; height:160px; background-color:#1f334b; color:#FFF; text-align=right;\">
                            <div style=\"text-align: right; width:365px; height:160px;\">
                                <div style=\"font-size:46px; margin-right:50px; padding-top:10px; text-shadow: 1px 1px 10px #333333;\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/Images/logowit.png"), "html", null, true);
        echo "\"></div>
                                <div style=\"margin-right: 50px; margin-top: 5px; font-size:12px; text-shadow: 1px 1px 10px #333333;\">Offertes vergelijken voor klusopdrachten <br> in en om het huis.</div>
                                <a href=\"#services\" style=\"display: block; margin-right: 45px; margin-top: 15px;\" ><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/Images/kiesopdracht.png"), "html", null, true);
        echo "\" alt=\"Meer info\"></a>
                            </div>
                        </div> -->
                    </li>     
";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 24
            echo "                    <li>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/Images/carrousel/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "Image"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "Title"), "html", null, true);
            echo "\"></a>
            <!--            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_service", array("serviceName" => $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "serviceid"), "Name"))), "html", null, true);
            echo "\"></a>                        
                        <div style=\"left:595px; width:365px; top:20px; height:160px; background-color:#1f334b; color:#FFF; text-align:right;\">
                            <div style=\"text-align: right; width:365px; height:160px;\">
                                <div style=\"font-size:46px; margin-right:50px; padding-top:10px; text-shadow: 1px 1px 10px #333333;\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "Title"), "html", null, true);
            echo "</div>
                                <div style=\"margin-right: 50px; margin-top: 5px; font-size:12px; text-shadow: 1px 1px 10px #333333;\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "Text"), "html", null, true);
            echo "</div>
                                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_service", array("serviceName" => $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "serviceid"), "Name"))), "html", null, true);
            echo "\" style=\"display: block; margin-right: 45px; margin-top: 15px;\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dirigendofrontend/Images/meerinfo.png"), "html", null, true);
            echo "\" alt=\"Meer info\"></a>
                            </div>
                        </div> -->
                    </li> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "                </ul>
            </div>     
            <div class=\"buttons\">
                <div class=\"prev-btn\"></div>
                <div class=\"play-btn\"></div>    
                <div class=\"next-btn\"></div>               
            </div>
        </div>
    </div>\t
</div>";
    }

    public function getTemplateName()
    {
        return "DirigendoFrontEndBundle:Caroussel:caroussel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 29,  62 => 25,  43 => 17,  36 => 13,  26 => 6,  19 => 1,  1179 => 332,  1173 => 331,  1167 => 330,  1161 => 329,  1155 => 328,  1149 => 327,  1143 => 326,  1137 => 325,  1131 => 324,  1115 => 318,  1108 => 317,  1103 => 315,  1080 => 311,  1055 => 310,  1053 => 309,  1050 => 308,  1031 => 301,  1019 => 294,  1013 => 292,  1005 => 290,  1003 => 289,  1000 => 288,  986 => 281,  983 => 277,  976 => 275,  973 => 274,  971 => 273,  968 => 272,  960 => 268,  958 => 267,  955 => 266,  948 => 261,  945 => 260,  937 => 255,  933 => 254,  929 => 253,  913 => 246,  909 => 241,  906 => 240,  879 => 232,  876 => 231,  873 => 230,  870 => 229,  867 => 228,  861 => 226,  856 => 224,  853 => 223,  845 => 217,  842 => 216,  840 => 215,  826 => 209,  824 => 208,  821 => 207,  813 => 203,  810 => 202,  805 => 200,  797 => 196,  794 => 195,  792 => 194,  789 => 193,  781 => 189,  778 => 188,  776 => 187,  773 => 186,  765 => 182,  762 => 181,  760 => 180,  757 => 179,  747 => 174,  744 => 173,  736 => 169,  733 => 168,  731 => 167,  728 => 166,  713 => 159,  710 => 158,  703 => 153,  695 => 152,  690 => 151,  687 => 150,  681 => 148,  676 => 146,  673 => 145,  665 => 139,  663 => 138,  661 => 136,  649 => 132,  646 => 131,  644 => 130,  641 => 129,  632 => 123,  624 => 121,  620 => 120,  609 => 117,  606 => 116,  601 => 114,  585 => 110,  583 => 109,  564 => 104,  562 => 103,  559 => 102,  542 => 98,  530 => 96,  521 => 92,  516 => 91,  513 => 90,  495 => 89,  490 => 87,  481 => 82,  475 => 80,  469 => 78,  467 => 77,  459 => 75,  456 => 74,  450 => 72,  448 => 71,  440 => 70,  438 => 69,  435 => 68,  421 => 62,  416 => 61,  412 => 60,  405 => 58,  402 => 57,  393 => 52,  387 => 50,  384 => 49,  369 => 43,  367 => 42,  364 => 41,  353 => 36,  350 => 35,  345 => 33,  342 => 32,  334 => 27,  329 => 26,  323 => 24,  321 => 23,  314 => 21,  295 => 16,  292 => 15,  287 => 13,  278 => 8,  272 => 6,  267 => 4,  264 => 3,  260 => 332,  256 => 330,  254 => 329,  252 => 328,  250 => 327,  246 => 325,  244 => 324,  241 => 323,  238 => 321,  226 => 300,  223 => 299,  218 => 288,  215 => 287,  210 => 271,  205 => 265,  202 => 263,  200 => 260,  197 => 259,  195 => 250,  192 => 249,  190 => 240,  187 => 239,  182 => 223,  144 => 173,  136 => 165,  131 => 157,  126 => 144,  121 => 128,  116 => 113,  114 => 108,  109 => 102,  106 => 101,  104 => 87,  96 => 36,  94 => 57,  91 => 56,  81 => 40,  69 => 26,  66 => 12,  1732 => 644,  1723 => 642,  1719 => 641,  1715 => 640,  1711 => 639,  1705 => 638,  1702 => 637,  1700 => 636,  1697 => 635,  1689 => 629,  1680 => 626,  1675 => 624,  1668 => 623,  1664 => 622,  1660 => 621,  1656 => 620,  1652 => 619,  1648 => 617,  1646 => 616,  1638 => 611,  1634 => 610,  1628 => 607,  1622 => 606,  1619 => 605,  1617 => 604,  1614 => 603,  1604 => 596,  1600 => 595,  1591 => 591,  1580 => 583,  1573 => 579,  1563 => 572,  1554 => 566,  1547 => 562,  1543 => 560,  1532 => 555,  1528 => 554,  1521 => 550,  1516 => 549,  1512 => 548,  1508 => 547,  1499 => 541,  1495 => 540,  1491 => 539,  1482 => 537,  1477 => 535,  1464 => 525,  1460 => 524,  1453 => 520,  1449 => 518,  1447 => 517,  1444 => 516,  1436 => 511,  1431 => 510,  1426 => 508,  1421 => 507,  1418 => 506,  1413 => 504,  1405 => 503,  1400 => 502,  1398 => 501,  1394 => 500,  1390 => 499,  1387 => 498,  1385 => 497,  1382 => 496,  1372 => 489,  1368 => 488,  1360 => 483,  1356 => 482,  1347 => 480,  1343 => 478,  1341 => 477,  1332 => 475,  1327 => 473,  1319 => 468,  1314 => 466,  1307 => 462,  1302 => 460,  1294 => 455,  1282 => 446,  1278 => 445,  1272 => 442,  1266 => 439,  1262 => 438,  1259 => 437,  1257 => 436,  1254 => 435,  1245 => 429,  1241 => 428,  1237 => 427,  1228 => 423,  1217 => 415,  1210 => 411,  1200 => 404,  1196 => 402,  1185 => 399,  1181 => 398,  1177 => 397,  1172 => 396,  1168 => 395,  1164 => 394,  1156 => 389,  1152 => 388,  1148 => 387,  1139 => 385,  1134 => 383,  1122 => 374,  1118 => 373,  1110 => 368,  1106 => 316,  1104 => 365,  1101 => 364,  1092 => 357,  1090 => 356,  1086 => 355,  1079 => 351,  1076 => 350,  1074 => 349,  1070 => 348,  1063 => 344,  1060 => 343,  1058 => 342,  1054 => 341,  1047 => 337,  1044 => 336,  1042 => 335,  1038 => 303,  1033 => 302,  1028 => 300,  1026 => 330,  1023 => 329,  1014 => 323,  1010 => 291,  1006 => 321,  1002 => 320,  997 => 318,  993 => 283,  989 => 316,  985 => 315,  979 => 276,  974 => 310,  969 => 309,  967 => 308,  964 => 307,  956 => 302,  952 => 301,  949 => 300,  944 => 299,  939 => 298,  936 => 297,  931 => 295,  926 => 252,  924 => 251,  921 => 250,  916 => 291,  911 => 242,  908 => 289,  903 => 287,  898 => 286,  895 => 285,  890 => 283,  885 => 234,  882 => 233,  877 => 279,  869 => 278,  864 => 227,  862 => 276,  858 => 225,  854 => 274,  851 => 273,  849 => 272,  846 => 271,  837 => 214,  829 => 210,  820 => 256,  815 => 254,  808 => 201,  803 => 248,  795 => 243,  783 => 234,  779 => 233,  772 => 230,  770 => 229,  767 => 228,  759 => 223,  753 => 220,  749 => 175,  745 => 218,  740 => 216,  737 => 215,  735 => 214,  732 => 213,  724 => 208,  720 => 162,  717 => 161,  715 => 160,  712 => 204,  707 => 201,  701 => 199,  697 => 198,  693 => 197,  688 => 195,  683 => 194,  678 => 147,  671 => 188,  667 => 187,  664 => 186,  662 => 137,  660 => 135,  655 => 134,  647 => 175,  637 => 170,  631 => 167,  628 => 122,  626 => 165,  623 => 164,  615 => 119,  611 => 158,  607 => 157,  604 => 115,  602 => 155,  599 => 154,  591 => 149,  587 => 148,  584 => 147,  582 => 142,  580 => 108,  577 => 140,  569 => 135,  565 => 134,  561 => 133,  557 => 131,  555 => 130,  552 => 129,  547 => 126,  541 => 124,  537 => 123,  533 => 122,  528 => 120,  523 => 93,  518 => 116,  512 => 114,  508 => 113,  503 => 111,  498 => 110,  493 => 88,  487 => 105,  483 => 104,  478 => 81,  473 => 101,  468 => 98,  462 => 76,  458 => 95,  454 => 94,  449 => 92,  444 => 91,  439 => 88,  433 => 86,  429 => 64,  424 => 83,  419 => 82,  411 => 77,  407 => 59,  401 => 74,  392 => 73,  386 => 72,  382 => 48,  379 => 47,  377 => 69,  374 => 68,  366 => 63,  362 => 61,  356 => 37,  347 => 34,  341 => 58,  337 => 57,  332 => 55,  327 => 54,  322 => 51,  316 => 22,  311 => 20,  306 => 46,  301 => 43,  294 => 40,  290 => 14,  286 => 37,  284 => 32,  281 => 31,  279 => 30,  274 => 29,  269 => 5,  262 => 23,  258 => 331,  255 => 21,  253 => 20,  248 => 326,  240 => 14,  236 => 315,  233 => 314,  231 => 308,  228 => 307,  220 => 297,  216 => 4,  213 => 272,  211 => 2,  208 => 266,  204 => 635,  201 => 634,  199 => 603,  196 => 602,  194 => 516,  191 => 515,  189 => 496,  186 => 495,  179 => 222,  176 => 220,  171 => 213,  169 => 207,  166 => 206,  164 => 200,  156 => 192,  145 => 202,  143 => 194,  139 => 166,  137 => 180,  129 => 145,  127 => 154,  124 => 129,  122 => 140,  119 => 114,  117 => 129,  111 => 107,  107 => 117,  93 => 91,  87 => 82,  84 => 41,  79 => 30,  73 => 52,  67 => 44,  61 => 2,  59 => 24,  54 => 10,  51 => 9,  49 => 1,  184 => 237,  159 => 193,  157 => 38,  154 => 186,  151 => 185,  149 => 179,  140 => 29,  134 => 158,  132 => 164,  120 => 22,  101 => 86,  98 => 19,  95 => 99,  92 => 17,  89 => 47,  86 => 46,  83 => 31,  80 => 13,  77 => 54,  74 => 20,  71 => 19,  65 => 29,  63 => 7,  55 => 23,  50 => 43,  48 => 19,  44 => 32,  42 => 6,  39 => 5,  37 => 3,  34 => 2,  14 => 1,  183 => 66,  181 => 434,  174 => 214,  168 => 58,  161 => 199,  150 => 49,  146 => 178,  141 => 172,  133 => 43,  128 => 25,  125 => 24,  118 => 35,  115 => 21,  113 => 127,  105 => 110,  99 => 68,  85 => 15,  82 => 68,  76 => 31,  72 => 11,  68 => 9,  64 => 3,  60 => 6,  56 => 18,  53 => 6,  47 => 5,  41 => 4,  35 => 3,  30 => 2,);
    }
}
