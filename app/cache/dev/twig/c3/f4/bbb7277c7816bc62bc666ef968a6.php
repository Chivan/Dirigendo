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
        if ((!(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")))) {
            // line 9
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 12
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
            // line 13
            echo "    ";
        }
        // line 14
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 15
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->renderer->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 18
            echo "    ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => "validationerror"));
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <label";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo "    
    originalTitle=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "\"
    ";
        }
        // line 24
        echo "    >
    ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "
    ";
        // line 26
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 27
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")), 0, array(), "array"), "messageTemplate"), $this->getAttribute($this->getAttribute((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")), 0, array(), "array"), "messageParameters"), "validators"), "html", null, true);
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
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 36
            $context["attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => "validationerror"));
        }
        // line 37
        echo "    
";
        // line 38
        ob_start();
        // line 39
        echo "    id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) {
            echo " readonly=\"readonly\"";
        }
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        if ((isset($context["max_length"]) ? $context["max_length"] : $this->getContext($context, "max_length"))) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["max_length"]) ? $context["max_length"] : $this->getContext($context, "max_length")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["pattern"]) ? $context["pattern"] : $this->getContext($context, "pattern"))) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, (isset($context["pattern"]) ? $context["pattern"] : $this->getContext($context, "pattern")), "html", null, true);
            echo "\"";
        }
        // line 40
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (twig_in_filter((isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), array(0 => "placeholder", 1 => "title"))) {
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\" ";
            } else {
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
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
        return array (  184 => 40,  159 => 39,  157 => 38,  154 => 37,  151 => 36,  149 => 35,  140 => 29,  134 => 27,  132 => 26,  120 => 22,  101 => 20,  98 => 19,  95 => 18,  92 => 17,  89 => 16,  86 => 15,  83 => 14,  80 => 13,  77 => 12,  74 => 11,  71 => 10,  65 => 8,  63 => 7,  55 => 3,  50 => 43,  48 => 34,  44 => 32,  42 => 6,  39 => 5,  37 => 3,  34 => 2,  14 => 1,  183 => 66,  181 => 65,  174 => 61,  168 => 58,  161 => 53,  150 => 49,  146 => 34,  141 => 46,  133 => 43,  128 => 25,  125 => 24,  118 => 35,  115 => 21,  113 => 33,  105 => 28,  99 => 27,  85 => 15,  82 => 14,  76 => 12,  72 => 11,  68 => 9,  64 => 9,  60 => 6,  56 => 7,  53 => 6,  47 => 5,  41 => 4,  35 => 3,  30 => 2,);
    }
}
