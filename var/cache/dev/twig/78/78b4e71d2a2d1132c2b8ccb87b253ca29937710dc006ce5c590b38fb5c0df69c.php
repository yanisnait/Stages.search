<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_71256662afe82fe8e0ae2643d96a40a0b9d667db60f6db4f64202ce52600c26d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_929ebfe9cc33085c031b0e52fc9b3a392f9e94dfa0f43a0ea11f80fc325fc86a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_929ebfe9cc33085c031b0e52fc9b3a392f9e94dfa0f43a0ea11f80fc325fc86a->enter($__internal_929ebfe9cc33085c031b0e52fc9b3a392f9e94dfa0f43a0ea11f80fc325fc86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1cdc0d56f9a596242b2cc560581dd3f517b2ec8d545c828543dbec3c4cd56d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cdc0d56f9a596242b2cc560581dd3f517b2ec8d545c828543dbec3c4cd56d81->enter($__internal_1cdc0d56f9a596242b2cc560581dd3f517b2ec8d545c828543dbec3c4cd56d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_929ebfe9cc33085c031b0e52fc9b3a392f9e94dfa0f43a0ea11f80fc325fc86a->leave($__internal_929ebfe9cc33085c031b0e52fc9b3a392f9e94dfa0f43a0ea11f80fc325fc86a_prof);

        
        $__internal_1cdc0d56f9a596242b2cc560581dd3f517b2ec8d545c828543dbec3c4cd56d81->leave($__internal_1cdc0d56f9a596242b2cc560581dd3f517b2ec8d545c828543dbec3c4cd56d81_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_adf309a68b0bdf8521a28cbc12e1ea170330a4e57c72508eab68c00060607e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adf309a68b0bdf8521a28cbc12e1ea170330a4e57c72508eab68c00060607e13->enter($__internal_adf309a68b0bdf8521a28cbc12e1ea170330a4e57c72508eab68c00060607e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fce2a855af9113c236872129c186608fb4e09a997d3248f77d11fe37844f8292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce2a855af9113c236872129c186608fb4e09a997d3248f77d11fe37844f8292->enter($__internal_fce2a855af9113c236872129c186608fb4e09a997d3248f77d11fe37844f8292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fce2a855af9113c236872129c186608fb4e09a997d3248f77d11fe37844f8292->leave($__internal_fce2a855af9113c236872129c186608fb4e09a997d3248f77d11fe37844f8292_prof);

        
        $__internal_adf309a68b0bdf8521a28cbc12e1ea170330a4e57c72508eab68c00060607e13->leave($__internal_adf309a68b0bdf8521a28cbc12e1ea170330a4e57c72508eab68c00060607e13_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_133b04b31bc704cda95c7fa68d221cfccd21b8f3f43273d8db6d653ea97c0d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133b04b31bc704cda95c7fa68d221cfccd21b8f3f43273d8db6d653ea97c0d3b->enter($__internal_133b04b31bc704cda95c7fa68d221cfccd21b8f3f43273d8db6d653ea97c0d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d4a4492f41dbea4c1c78a1541d5ced3d082787423af082c396b4408e4afc03b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a4492f41dbea4c1c78a1541d5ced3d082787423af082c396b4408e4afc03b7->enter($__internal_d4a4492f41dbea4c1c78a1541d5ced3d082787423af082c396b4408e4afc03b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d4a4492f41dbea4c1c78a1541d5ced3d082787423af082c396b4408e4afc03b7->leave($__internal_d4a4492f41dbea4c1c78a1541d5ced3d082787423af082c396b4408e4afc03b7_prof);

        
        $__internal_133b04b31bc704cda95c7fa68d221cfccd21b8f3f43273d8db6d653ea97c0d3b->leave($__internal_133b04b31bc704cda95c7fa68d221cfccd21b8f3f43273d8db6d653ea97c0d3b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf380cfce3436872faa60ac93e7429c142a49c6cd31516deea51517df57eb711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf380cfce3436872faa60ac93e7429c142a49c6cd31516deea51517df57eb711->enter($__internal_bf380cfce3436872faa60ac93e7429c142a49c6cd31516deea51517df57eb711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f009a1c92922ca3cb7eebcd2b216d292dc9bfcece1fdc77c7cf76c305bdbd3aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f009a1c92922ca3cb7eebcd2b216d292dc9bfcece1fdc77c7cf76c305bdbd3aa->enter($__internal_f009a1c92922ca3cb7eebcd2b216d292dc9bfcece1fdc77c7cf76c305bdbd3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_f009a1c92922ca3cb7eebcd2b216d292dc9bfcece1fdc77c7cf76c305bdbd3aa->leave($__internal_f009a1c92922ca3cb7eebcd2b216d292dc9bfcece1fdc77c7cf76c305bdbd3aa_prof);

        
        $__internal_bf380cfce3436872faa60ac93e7429c142a49c6cd31516deea51517df57eb711->leave($__internal_bf380cfce3436872faa60ac93e7429c142a49c6cd31516deea51517df57eb711_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
