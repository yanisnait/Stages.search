<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_71e14446ee0c43f5029250365a6c9955d3baa174610f7097dd0a2c3aeb8e1bb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9e4030b89d56fe6ff999bdfaf95f289fe79c7990a59aacb0f5fdcfb799f023c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e4030b89d56fe6ff999bdfaf95f289fe79c7990a59aacb0f5fdcfb799f023c->enter($__internal_f9e4030b89d56fe6ff999bdfaf95f289fe79c7990a59aacb0f5fdcfb799f023c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_61cdd4cffbfa958b00ee2bfeaca4a8245e6f709de12892fbdf37453d3a54e3b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61cdd4cffbfa958b00ee2bfeaca4a8245e6f709de12892fbdf37453d3a54e3b9->enter($__internal_61cdd4cffbfa958b00ee2bfeaca4a8245e6f709de12892fbdf37453d3a54e3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_f9e4030b89d56fe6ff999bdfaf95f289fe79c7990a59aacb0f5fdcfb799f023c->leave($__internal_f9e4030b89d56fe6ff999bdfaf95f289fe79c7990a59aacb0f5fdcfb799f023c_prof);

        
        $__internal_61cdd4cffbfa958b00ee2bfeaca4a8245e6f709de12892fbdf37453d3a54e3b9->leave($__internal_61cdd4cffbfa958b00ee2bfeaca4a8245e6f709de12892fbdf37453d3a54e3b9_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_e50bf2dc6f569c85b7570ff1b805fb3db4087d363224010eea47bbe63f6bdcd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e50bf2dc6f569c85b7570ff1b805fb3db4087d363224010eea47bbe63f6bdcd8->enter($__internal_e50bf2dc6f569c85b7570ff1b805fb3db4087d363224010eea47bbe63f6bdcd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_697b869b7d1c4608262a82054d96a8affd4280819bf7ad015a539fedf9081539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697b869b7d1c4608262a82054d96a8affd4280819bf7ad015a539fedf9081539->enter($__internal_697b869b7d1c4608262a82054d96a8affd4280819bf7ad015a539fedf9081539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_697b869b7d1c4608262a82054d96a8affd4280819bf7ad015a539fedf9081539->leave($__internal_697b869b7d1c4608262a82054d96a8affd4280819bf7ad015a539fedf9081539_prof);

        
        $__internal_e50bf2dc6f569c85b7570ff1b805fb3db4087d363224010eea47bbe63f6bdcd8->leave($__internal_e50bf2dc6f569c85b7570ff1b805fb3db4087d363224010eea47bbe63f6bdcd8_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_1af12d2a99d04c8be5c9edd8fe1612cb50e4f561b5bfb874821c5fcdcf23f31c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1af12d2a99d04c8be5c9edd8fe1612cb50e4f561b5bfb874821c5fcdcf23f31c->enter($__internal_1af12d2a99d04c8be5c9edd8fe1612cb50e4f561b5bfb874821c5fcdcf23f31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7d8fbeffa4e614a1c59c870471aa8f70f59dae0bac7f1610f49ff9ed68f04662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8fbeffa4e614a1c59c870471aa8f70f59dae0bac7f1610f49ff9ed68f04662->enter($__internal_7d8fbeffa4e614a1c59c870471aa8f70f59dae0bac7f1610f49ff9ed68f04662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->getSourceContext()); })()) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7d8fbeffa4e614a1c59c870471aa8f70f59dae0bac7f1610f49ff9ed68f04662->leave($__internal_7d8fbeffa4e614a1c59c870471aa8f70f59dae0bac7f1610f49ff9ed68f04662_prof);

        
        $__internal_1af12d2a99d04c8be5c9edd8fe1612cb50e4f561b5bfb874821c5fcdcf23f31c->leave($__internal_1af12d2a99d04c8be5c9edd8fe1612cb50e4f561b5bfb874821c5fcdcf23f31c_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_d00ef4c078fd42ef93313e056809a34c9f430236094e1ebb9a32415781d39902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d00ef4c078fd42ef93313e056809a34c9f430236094e1ebb9a32415781d39902->enter($__internal_d00ef4c078fd42ef93313e056809a34c9f430236094e1ebb9a32415781d39902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_e054a4e49f9ed25f59fb5bc09e6b03ec485a0480f008c2d04bc16cdb32081908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e054a4e49f9ed25f59fb5bc09e6b03ec485a0480f008c2d04bc16cdb32081908->enter($__internal_e054a4e49f9ed25f59fb5bc09e6b03ec485a0480f008c2d04bc16cdb32081908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_e054a4e49f9ed25f59fb5bc09e6b03ec485a0480f008c2d04bc16cdb32081908->leave($__internal_e054a4e49f9ed25f59fb5bc09e6b03ec485a0480f008c2d04bc16cdb32081908_prof);

        
        $__internal_d00ef4c078fd42ef93313e056809a34c9f430236094e1ebb9a32415781d39902->leave($__internal_d00ef4c078fd42ef93313e056809a34c9f430236094e1ebb9a32415781d39902_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8b4174b031d10e712d9b02143de64bfac31f45720bbd4bcae6eb7a2f8c89b02a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b4174b031d10e712d9b02143de64bfac31f45720bbd4bcae6eb7a2f8c89b02a->enter($__internal_8b4174b031d10e712d9b02143de64bfac31f45720bbd4bcae6eb7a2f8c89b02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4609c7dc1f98cb5503baebdd51d8b1880abb2c832e329fac2b806e1064b611c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4609c7dc1f98cb5503baebdd51d8b1880abb2c832e329fac2b806e1064b611c2->enter($__internal_4609c7dc1f98cb5503baebdd51d8b1880abb2c832e329fac2b806e1064b611c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_4609c7dc1f98cb5503baebdd51d8b1880abb2c832e329fac2b806e1064b611c2->leave($__internal_4609c7dc1f98cb5503baebdd51d8b1880abb2c832e329fac2b806e1064b611c2_prof);

        
        $__internal_8b4174b031d10e712d9b02143de64bfac31f45720bbd4bcae6eb7a2f8c89b02a->leave($__internal_8b4174b031d10e712d9b02143de64bfac31f45720bbd4bcae6eb7a2f8c89b02a_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_af6265c1af3ae1d6dee6222041e4dd82820445c4eb1a5e6de836a80682881060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af6265c1af3ae1d6dee6222041e4dd82820445c4eb1a5e6de836a80682881060->enter($__internal_af6265c1af3ae1d6dee6222041e4dd82820445c4eb1a5e6de836a80682881060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_17a78c589a41bfcf16a939d8aa1b5fbce39861770938e859a49822b936dda0f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a78c589a41bfcf16a939d8aa1b5fbce39861770938e859a49822b936dda0f4->enter($__internal_17a78c589a41bfcf16a939d8aa1b5fbce39861770938e859a49822b936dda0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_17a78c589a41bfcf16a939d8aa1b5fbce39861770938e859a49822b936dda0f4->leave($__internal_17a78c589a41bfcf16a939d8aa1b5fbce39861770938e859a49822b936dda0f4_prof);

        
        $__internal_af6265c1af3ae1d6dee6222041e4dd82820445c4eb1a5e6de836a80682881060->leave($__internal_af6265c1af3ae1d6dee6222041e4dd82820445c4eb1a5e6de836a80682881060_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_7a342e7d52f8b8aaf4c84c43f457c6824455cc87ef28998ea8aa02a4cf61dafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a342e7d52f8b8aaf4c84c43f457c6824455cc87ef28998ea8aa02a4cf61dafb->enter($__internal_7a342e7d52f8b8aaf4c84c43f457c6824455cc87ef28998ea8aa02a4cf61dafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_ca3933522a765a7be615e45482329a523b6f22dda166a1f20482f999a1657907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3933522a765a7be615e45482329a523b6f22dda166a1f20482f999a1657907->enter($__internal_ca3933522a765a7be615e45482329a523b6f22dda166a1f20482f999a1657907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_ca3933522a765a7be615e45482329a523b6f22dda166a1f20482f999a1657907->leave($__internal_ca3933522a765a7be615e45482329a523b6f22dda166a1f20482f999a1657907_prof);

        
        $__internal_7a342e7d52f8b8aaf4c84c43f457c6824455cc87ef28998ea8aa02a4cf61dafb->leave($__internal_7a342e7d52f8b8aaf4c84c43f457c6824455cc87ef28998ea8aa02a4cf61dafb_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_31be8eb2eaadf92d49e5f725196f5138ff388bd4c871efa5170b29f53e6421d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31be8eb2eaadf92d49e5f725196f5138ff388bd4c871efa5170b29f53e6421d5->enter($__internal_31be8eb2eaadf92d49e5f725196f5138ff388bd4c871efa5170b29f53e6421d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_e625825cd85e204e64cb4081d901773acac6720d50e4b66a9c130dbd0fad27ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e625825cd85e204e64cb4081d901773acac6720d50e4b66a9c130dbd0fad27ce->enter($__internal_e625825cd85e204e64cb4081d901773acac6720d50e4b66a9c130dbd0fad27ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 47, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e625825cd85e204e64cb4081d901773acac6720d50e4b66a9c130dbd0fad27ce->leave($__internal_e625825cd85e204e64cb4081d901773acac6720d50e4b66a9c130dbd0fad27ce_prof);

        
        $__internal_31be8eb2eaadf92d49e5f725196f5138ff388bd4c871efa5170b29f53e6421d5->leave($__internal_31be8eb2eaadf92d49e5f725196f5138ff388bd4c871efa5170b29f53e6421d5_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_b4f5794489f2d80bc767737ffbbe1bec165911ea61a20ae2aace62a68fbcf99b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f5794489f2d80bc767737ffbbe1bec165911ea61a20ae2aace62a68fbcf99b->enter($__internal_b4f5794489f2d80bc767737ffbbe1bec165911ea61a20ae2aace62a68fbcf99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_68981ad73fd313bd955da6937b7be5f66a476d6fd3859e2c8903fd8875f3d562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68981ad73fd313bd955da6937b7be5f66a476d6fd3859e2c8903fd8875f3d562->enter($__internal_68981ad73fd313bd955da6937b7be5f66a476d6fd3859e2c8903fd8875f3d562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_68981ad73fd313bd955da6937b7be5f66a476d6fd3859e2c8903fd8875f3d562->leave($__internal_68981ad73fd313bd955da6937b7be5f66a476d6fd3859e2c8903fd8875f3d562_prof);

        
        $__internal_b4f5794489f2d80bc767737ffbbe1bec165911ea61a20ae2aace62a68fbcf99b->leave($__internal_b4f5794489f2d80bc767737ffbbe1bec165911ea61a20ae2aace62a68fbcf99b_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_0aa79ef676d9039dc796f77abd6876ed1c5194a8bf68fa3e3492003adabe74c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa79ef676d9039dc796f77abd6876ed1c5194a8bf68fa3e3492003adabe74c2->enter($__internal_0aa79ef676d9039dc796f77abd6876ed1c5194a8bf68fa3e3492003adabe74c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_5a4bd55a6d3ae21ed04257922408c4d1a6cda5c336cb571cc22b4748fc75c212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4bd55a6d3ae21ed04257922408c4d1a6cda5c336cb571cc22b4748fc75c212->enter($__internal_5a4bd55a6d3ae21ed04257922408c4d1a6cda5c336cb571cc22b4748fc75c212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5a4bd55a6d3ae21ed04257922408c4d1a6cda5c336cb571cc22b4748fc75c212->leave($__internal_5a4bd55a6d3ae21ed04257922408c4d1a6cda5c336cb571cc22b4748fc75c212_prof);

        
        $__internal_0aa79ef676d9039dc796f77abd6876ed1c5194a8bf68fa3e3492003adabe74c2->leave($__internal_0aa79ef676d9039dc796f77abd6876ed1c5194a8bf68fa3e3492003adabe74c2_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_98cc1ab515b6118f7e90b73f7de0361e799f14b61a3b2a11d9e8c32c40bebec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98cc1ab515b6118f7e90b73f7de0361e799f14b61a3b2a11d9e8c32c40bebec0->enter($__internal_98cc1ab515b6118f7e90b73f7de0361e799f14b61a3b2a11d9e8c32c40bebec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_2acec33d73ea963a2099983d180431b693a13833a4adcaa3afbb6db19213dd98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2acec33d73ea963a2099983d180431b693a13833a4adcaa3afbb6db19213dd98->enter($__internal_2acec33d73ea963a2099983d180431b693a13833a4adcaa3afbb6db19213dd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_2acec33d73ea963a2099983d180431b693a13833a4adcaa3afbb6db19213dd98->leave($__internal_2acec33d73ea963a2099983d180431b693a13833a4adcaa3afbb6db19213dd98_prof);

        
        $__internal_98cc1ab515b6118f7e90b73f7de0361e799f14b61a3b2a11d9e8c32c40bebec0->leave($__internal_98cc1ab515b6118f7e90b73f7de0361e799f14b61a3b2a11d9e8c32c40bebec0_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
