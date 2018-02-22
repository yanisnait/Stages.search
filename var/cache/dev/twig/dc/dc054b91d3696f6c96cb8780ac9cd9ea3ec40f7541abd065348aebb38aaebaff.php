<?php

/* form_table_layout.html.twig */
class __TwigTemplate_75052a3f2b44829dfe4545d1384aefd617a0a7dda8201993512cd73578d3382f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b103ef8393fa96f994fde88d2f90029ed5244e5ddd8b9aef8ea7a83982707be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b103ef8393fa96f994fde88d2f90029ed5244e5ddd8b9aef8ea7a83982707be->enter($__internal_7b103ef8393fa96f994fde88d2f90029ed5244e5ddd8b9aef8ea7a83982707be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_3bb6f6d58db87e2881321217e93de34e3dd634f076d8109fc7b64ccd68b3ee40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb6f6d58db87e2881321217e93de34e3dd634f076d8109fc7b64ccd68b3ee40->enter($__internal_3bb6f6d58db87e2881321217e93de34e3dd634f076d8109fc7b64ccd68b3ee40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_7b103ef8393fa96f994fde88d2f90029ed5244e5ddd8b9aef8ea7a83982707be->leave($__internal_7b103ef8393fa96f994fde88d2f90029ed5244e5ddd8b9aef8ea7a83982707be_prof);

        
        $__internal_3bb6f6d58db87e2881321217e93de34e3dd634f076d8109fc7b64ccd68b3ee40->leave($__internal_3bb6f6d58db87e2881321217e93de34e3dd634f076d8109fc7b64ccd68b3ee40_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0d0285ab614e784662556e558bc58fb2419c7c25b237c0ae0fcc157b0bdb808a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d0285ab614e784662556e558bc58fb2419c7c25b237c0ae0fcc157b0bdb808a->enter($__internal_0d0285ab614e784662556e558bc58fb2419c7c25b237c0ae0fcc157b0bdb808a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0247a7f77867bb3cc766e42d9090557d379077fc407156d2e43cec81318718cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0247a7f77867bb3cc766e42d9090557d379077fc407156d2e43cec81318718cb->enter($__internal_0247a7f77867bb3cc766e42d9090557d379077fc407156d2e43cec81318718cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_0247a7f77867bb3cc766e42d9090557d379077fc407156d2e43cec81318718cb->leave($__internal_0247a7f77867bb3cc766e42d9090557d379077fc407156d2e43cec81318718cb_prof);

        
        $__internal_0d0285ab614e784662556e558bc58fb2419c7c25b237c0ae0fcc157b0bdb808a->leave($__internal_0d0285ab614e784662556e558bc58fb2419c7c25b237c0ae0fcc157b0bdb808a_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_8cc9d6ba7cb181d5a7f621a3ff5f50a2edf3f8ab959ecf2120edb4fb348f2e0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc9d6ba7cb181d5a7f621a3ff5f50a2edf3f8ab959ecf2120edb4fb348f2e0f->enter($__internal_8cc9d6ba7cb181d5a7f621a3ff5f50a2edf3f8ab959ecf2120edb4fb348f2e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_931516c086cbabde500674535493350b5b0e9577f634874bce8ea9ae1551b254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931516c086cbabde500674535493350b5b0e9577f634874bce8ea9ae1551b254->enter($__internal_931516c086cbabde500674535493350b5b0e9577f634874bce8ea9ae1551b254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_931516c086cbabde500674535493350b5b0e9577f634874bce8ea9ae1551b254->leave($__internal_931516c086cbabde500674535493350b5b0e9577f634874bce8ea9ae1551b254_prof);

        
        $__internal_8cc9d6ba7cb181d5a7f621a3ff5f50a2edf3f8ab959ecf2120edb4fb348f2e0f->leave($__internal_8cc9d6ba7cb181d5a7f621a3ff5f50a2edf3f8ab959ecf2120edb4fb348f2e0f_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_c91811533d7e93825b7e4619c194022baabe89f6076edb6c77abb19dd430e939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c91811533d7e93825b7e4619c194022baabe89f6076edb6c77abb19dd430e939->enter($__internal_c91811533d7e93825b7e4619c194022baabe89f6076edb6c77abb19dd430e939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_77221258d351ecc4a57be35ccc4618d12a79a2ceaed40ed3fa4c6fb0298f12b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77221258d351ecc4a57be35ccc4618d12a79a2ceaed40ed3fa4c6fb0298f12b8->enter($__internal_77221258d351ecc4a57be35ccc4618d12a79a2ceaed40ed3fa4c6fb0298f12b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_77221258d351ecc4a57be35ccc4618d12a79a2ceaed40ed3fa4c6fb0298f12b8->leave($__internal_77221258d351ecc4a57be35ccc4618d12a79a2ceaed40ed3fa4c6fb0298f12b8_prof);

        
        $__internal_c91811533d7e93825b7e4619c194022baabe89f6076edb6c77abb19dd430e939->leave($__internal_c91811533d7e93825b7e4619c194022baabe89f6076edb6c77abb19dd430e939_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_17c63ee37b3bad769b14e9d9bbe1970865908c688d625fac789b736ca6d2e576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c63ee37b3bad769b14e9d9bbe1970865908c688d625fac789b736ca6d2e576->enter($__internal_17c63ee37b3bad769b14e9d9bbe1970865908c688d625fac789b736ca6d2e576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_a5083737052580fc393aa37dc0e1de9338916a5d48f562c993d737cc2adf7fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5083737052580fc393aa37dc0e1de9338916a5d48f562c993d737cc2adf7fa4->enter($__internal_a5083737052580fc393aa37dc0e1de9338916a5d48f562c993d737cc2adf7fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_a5083737052580fc393aa37dc0e1de9338916a5d48f562c993d737cc2adf7fa4->leave($__internal_a5083737052580fc393aa37dc0e1de9338916a5d48f562c993d737cc2adf7fa4_prof);

        
        $__internal_17c63ee37b3bad769b14e9d9bbe1970865908c688d625fac789b736ca6d2e576->leave($__internal_17c63ee37b3bad769b14e9d9bbe1970865908c688d625fac789b736ca6d2e576_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
