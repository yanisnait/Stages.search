<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0e59a3048157c489b9c2759277ad4e50e7a05b826b1e195ec7fd37c789154d57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_b99b3e272932c335b25b83b1508b42f708db923ec557dcd9b60c49650f322c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b99b3e272932c335b25b83b1508b42f708db923ec557dcd9b60c49650f322c2a->enter($__internal_b99b3e272932c335b25b83b1508b42f708db923ec557dcd9b60c49650f322c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c90a5390e77a06d7dbecb1309b2af7bb2e793676e31bdd0dcadc6015ac5702bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90a5390e77a06d7dbecb1309b2af7bb2e793676e31bdd0dcadc6015ac5702bc->enter($__internal_c90a5390e77a06d7dbecb1309b2af7bb2e793676e31bdd0dcadc6015ac5702bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b99b3e272932c335b25b83b1508b42f708db923ec557dcd9b60c49650f322c2a->leave($__internal_b99b3e272932c335b25b83b1508b42f708db923ec557dcd9b60c49650f322c2a_prof);

        
        $__internal_c90a5390e77a06d7dbecb1309b2af7bb2e793676e31bdd0dcadc6015ac5702bc->leave($__internal_c90a5390e77a06d7dbecb1309b2af7bb2e793676e31bdd0dcadc6015ac5702bc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f7afc121aed850deee443929a121bab8dbc1b6c806d0fc352247c09b1d2bdf47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7afc121aed850deee443929a121bab8dbc1b6c806d0fc352247c09b1d2bdf47->enter($__internal_f7afc121aed850deee443929a121bab8dbc1b6c806d0fc352247c09b1d2bdf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d72a7ec52f29bcc337923a0d9aaa5de7e219e9602db4b5481dc165a90caf11cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72a7ec52f29bcc337923a0d9aaa5de7e219e9602db4b5481dc165a90caf11cf->enter($__internal_d72a7ec52f29bcc337923a0d9aaa5de7e219e9602db4b5481dc165a90caf11cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d72a7ec52f29bcc337923a0d9aaa5de7e219e9602db4b5481dc165a90caf11cf->leave($__internal_d72a7ec52f29bcc337923a0d9aaa5de7e219e9602db4b5481dc165a90caf11cf_prof);

        
        $__internal_f7afc121aed850deee443929a121bab8dbc1b6c806d0fc352247c09b1d2bdf47->leave($__internal_f7afc121aed850deee443929a121bab8dbc1b6c806d0fc352247c09b1d2bdf47_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1501a40679f6bbec9cbe670c8b488109d9f3e2a427aab978028c526e95606a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1501a40679f6bbec9cbe670c8b488109d9f3e2a427aab978028c526e95606a88->enter($__internal_1501a40679f6bbec9cbe670c8b488109d9f3e2a427aab978028c526e95606a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b39326db1b1e38c893c088da1b8ab9b1b49b4fccba8b1c052f8cf6ecf4285c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39326db1b1e38c893c088da1b8ab9b1b49b4fccba8b1c052f8cf6ecf4285c57->enter($__internal_b39326db1b1e38c893c088da1b8ab9b1b49b4fccba8b1c052f8cf6ecf4285c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b39326db1b1e38c893c088da1b8ab9b1b49b4fccba8b1c052f8cf6ecf4285c57->leave($__internal_b39326db1b1e38c893c088da1b8ab9b1b49b4fccba8b1c052f8cf6ecf4285c57_prof);

        
        $__internal_1501a40679f6bbec9cbe670c8b488109d9f3e2a427aab978028c526e95606a88->leave($__internal_1501a40679f6bbec9cbe670c8b488109d9f3e2a427aab978028c526e95606a88_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6c45286dd196a0ef2b2f89be35d848d8117b748080d4daba4e29d5db807c095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c45286dd196a0ef2b2f89be35d848d8117b748080d4daba4e29d5db807c095->enter($__internal_e6c45286dd196a0ef2b2f89be35d848d8117b748080d4daba4e29d5db807c095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5a966fd79e19d50bb62c7eae1832ebcc7920c7357aa8ffe9fb51162ed4e49af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a966fd79e19d50bb62c7eae1832ebcc7920c7357aa8ffe9fb51162ed4e49af6->enter($__internal_5a966fd79e19d50bb62c7eae1832ebcc7920c7357aa8ffe9fb51162ed4e49af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_5a966fd79e19d50bb62c7eae1832ebcc7920c7357aa8ffe9fb51162ed4e49af6->leave($__internal_5a966fd79e19d50bb62c7eae1832ebcc7920c7357aa8ffe9fb51162ed4e49af6_prof);

        
        $__internal_e6c45286dd196a0ef2b2f89be35d848d8117b748080d4daba4e29d5db807c095->leave($__internal_e6c45286dd196a0ef2b2f89be35d848d8117b748080d4daba4e29d5db807c095_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
