<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_3cb1dc72528738318d2bef411effa0fb3857f8b9b9d30e57150cfc2affd104ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_81d1fc161964ae8c007e753d20dad11a1ceec16bd6770ee39e543cb1f83cfecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81d1fc161964ae8c007e753d20dad11a1ceec16bd6770ee39e543cb1f83cfecf->enter($__internal_81d1fc161964ae8c007e753d20dad11a1ceec16bd6770ee39e543cb1f83cfecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_30393de0374bfd50b8478a6585f7001d891ad8841e094eacc7c539fba679c00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30393de0374bfd50b8478a6585f7001d891ad8841e094eacc7c539fba679c00e->enter($__internal_30393de0374bfd50b8478a6585f7001d891ad8841e094eacc7c539fba679c00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81d1fc161964ae8c007e753d20dad11a1ceec16bd6770ee39e543cb1f83cfecf->leave($__internal_81d1fc161964ae8c007e753d20dad11a1ceec16bd6770ee39e543cb1f83cfecf_prof);

        
        $__internal_30393de0374bfd50b8478a6585f7001d891ad8841e094eacc7c539fba679c00e->leave($__internal_30393de0374bfd50b8478a6585f7001d891ad8841e094eacc7c539fba679c00e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_95246959108306e4114f649af497da3ab98241ffb47dc48e2311383c6dbbe60f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95246959108306e4114f649af497da3ab98241ffb47dc48e2311383c6dbbe60f->enter($__internal_95246959108306e4114f649af497da3ab98241ffb47dc48e2311383c6dbbe60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_479e6944898fa043da4ed17658f21d16ac0558aed8a4b45a114244126aaaad0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479e6944898fa043da4ed17658f21d16ac0558aed8a4b45a114244126aaaad0f->enter($__internal_479e6944898fa043da4ed17658f21d16ac0558aed8a4b45a114244126aaaad0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_479e6944898fa043da4ed17658f21d16ac0558aed8a4b45a114244126aaaad0f->leave($__internal_479e6944898fa043da4ed17658f21d16ac0558aed8a4b45a114244126aaaad0f_prof);

        
        $__internal_95246959108306e4114f649af497da3ab98241ffb47dc48e2311383c6dbbe60f->leave($__internal_95246959108306e4114f649af497da3ab98241ffb47dc48e2311383c6dbbe60f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_39e88ef5ef1aa5273e0b48e4e63b3a2d5bec5e04078ec59301e348ed3c8230d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e88ef5ef1aa5273e0b48e4e63b3a2d5bec5e04078ec59301e348ed3c8230d0->enter($__internal_39e88ef5ef1aa5273e0b48e4e63b3a2d5bec5e04078ec59301e348ed3c8230d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a08b451b8c7708639fd8fd43b056755238e20d35bdfefc86cf8ac22da4d666d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08b451b8c7708639fd8fd43b056755238e20d35bdfefc86cf8ac22da4d666d9->enter($__internal_a08b451b8c7708639fd8fd43b056755238e20d35bdfefc86cf8ac22da4d666d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a08b451b8c7708639fd8fd43b056755238e20d35bdfefc86cf8ac22da4d666d9->leave($__internal_a08b451b8c7708639fd8fd43b056755238e20d35bdfefc86cf8ac22da4d666d9_prof);

        
        $__internal_39e88ef5ef1aa5273e0b48e4e63b3a2d5bec5e04078ec59301e348ed3c8230d0->leave($__internal_39e88ef5ef1aa5273e0b48e4e63b3a2d5bec5e04078ec59301e348ed3c8230d0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c60496240fbf2d7a17f21c5c7275bf79d902ae78e8710fd1ef0d60830f497cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c60496240fbf2d7a17f21c5c7275bf79d902ae78e8710fd1ef0d60830f497cce->enter($__internal_c60496240fbf2d7a17f21c5c7275bf79d902ae78e8710fd1ef0d60830f497cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cfb667b842973dd7af25a9f1bcf58bf0d9024403ce27554c5de122843bd97431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb667b842973dd7af25a9f1bcf58bf0d9024403ce27554c5de122843bd97431->enter($__internal_cfb667b842973dd7af25a9f1bcf58bf0d9024403ce27554c5de122843bd97431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_cfb667b842973dd7af25a9f1bcf58bf0d9024403ce27554c5de122843bd97431->leave($__internal_cfb667b842973dd7af25a9f1bcf58bf0d9024403ce27554c5de122843bd97431_prof);

        
        $__internal_c60496240fbf2d7a17f21c5c7275bf79d902ae78e8710fd1ef0d60830f497cce->leave($__internal_c60496240fbf2d7a17f21c5c7275bf79d902ae78e8710fd1ef0d60830f497cce_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
