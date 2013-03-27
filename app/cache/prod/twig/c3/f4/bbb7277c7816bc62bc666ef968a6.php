<?php

/* DirigendoFrontEndBundle:Form:dirigendo_form.html.twig */
class __TwigTemplate_c3f4bbb7277c7816bc62bc666ef968a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("NeutronFormBundle:Form:fields.html.twig");
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."NeutronFormBundle:Form:fields.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'field_errors' => array($this, 'block_field_errors'),
                'form_label' => array($this, 'block_form_label'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('field_errors', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('form_label', $context, $blocks);
        // line 32
        echo "

";
        // line 34
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 43
        echo "
";
    }

    // line 3
    public function block_field_errors($context, array $blocks = array())
    {
    }

    // line 6
    public function block_form_label($context, array $blocks = array())
    {
        // line 7
        ob_start();
        // line 8
        echo "    ";
        if ((!(isset($context["compound"]) ? $context["compound"] : null))) {
            // line 9
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        if ((isset($context["required"]) ? $context["required"] : null)) {
            // line 12
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
            // line 13
            echo "    ";
        }
        // line 14
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 15
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->renderer->humanize((isset($context["name"]) ? $context["name"] : null));
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 18
            echo "    ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => "validationerror"));
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <label";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo "    
    originalTitle=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "\"
    ";
        }
        // line 24
        echo "    >
    ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "
    ";
        // line 26
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 27
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), 0, array(), "array"), "messageTemplate"), $this->getAttribute($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), 0, array(), "array"), "messageParameters"), "validators"), "html", null, true);
            echo "
    ";
        }
        // line 29
        echo "    </label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 34
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 35
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 36
            $context["attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => "validationerror"));
        }
        // line 37
        echo "    
";
        // line 38
        ob_start();
        // line 39
        echo "    id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\"";
        if ((isset($context["read_only"]) ? $context["read_only"] : null)) {
            echo " readonly=\"readonly\"";
        }
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled=\"disabled\"";
        }
        if ((isset($context["required"]) ? $context["required"] : null)) {
            echo " required=\"required\"";
        }
        if ((isset($context["max_length"]) ? $context["max_length"] : null)) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["max_length"]) ? $context["max_length"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["pattern"]) ? $context["pattern"] : null)) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, (isset($context["pattern"]) ? $context["pattern"] : null), "html", null, true);
            echo "\"";
        }
        // line 40
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (twig_in_filter((isset($context["attrname"]) ? $context["attrname"] : null), array(0 => "placeholder", 1 => "title"))) {
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["attrvalue"]) ? $context["attrvalue"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "\" ";
            } else {
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
                echo "\" ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "DirigendoFrontEndBundle:Form:dirigendo_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  184 => 40,  159 => 39,  157 => 38,  154 => 37,  151 => 36,  149 => 35,  140 => 29,  134 => 27,  132 => 26,  120 => 22,  101 => 20,  98 => 19,  92 => 17,  89 => 16,  86 => 15,  83 => 14,  80 => 13,  74 => 11,  71 => 10,  65 => 8,  63 => 7,  50 => 43,  48 => 34,  44 => 32,  42 => 6,  39 => 5,  37 => 3,  14 => 1,  55 => 3,  51 => 7,  38 => 6,  34 => 2,  22 => 2,  19 => 1,  244 => 61,  239 => 57,  234 => 34,  208 => 32,  204 => 26,  201 => 25,  198 => 24,  192 => 8,  186 => 7,  180 => 5,  176 => 24,  163 => 13,  137 => 11,  124 => 7,  95 => 18,  91 => 69,  87 => 68,  79 => 62,  77 => 12,  70 => 57,  66 => 55,  52 => 48,  45 => 44,  33 => 37,  31 => 4,  26 => 3,  183 => 66,  181 => 65,  174 => 61,  168 => 58,  161 => 53,  150 => 49,  146 => 34,  141 => 46,  133 => 10,  128 => 25,  125 => 24,  118 => 5,  115 => 21,  113 => 33,  105 => 28,  99 => 71,  85 => 15,  82 => 14,  76 => 12,  72 => 11,  68 => 9,  64 => 12,  60 => 6,  56 => 49,  53 => 6,  47 => 5,  41 => 43,  35 => 3,  30 => 2,);
    }
}
