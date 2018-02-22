<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_a2d778ed352a1d9f1eba24d96c4aeeb13055881b7db83f20c33c51a6b651305b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e02d636a4e2b2002924dd37c61ef5c0067351d8b08366d626dd85e0792b51b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e02d636a4e2b2002924dd37c61ef5c0067351d8b08366d626dd85e0792b51b5e->enter($__internal_e02d636a4e2b2002924dd37c61ef5c0067351d8b08366d626dd85e0792b51b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_48a2ed3c553c483f54984e92dcbf9369bf42a27c473d04abea73d281c3cb5239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a2ed3c553c483f54984e92dcbf9369bf42a27c473d04abea73d281c3cb5239->enter($__internal_48a2ed3c553c483f54984e92dcbf9369bf42a27c473d04abea73d281c3cb5239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e02d636a4e2b2002924dd37c61ef5c0067351d8b08366d626dd85e0792b51b5e->leave($__internal_e02d636a4e2b2002924dd37c61ef5c0067351d8b08366d626dd85e0792b51b5e_prof);

        
        $__internal_48a2ed3c553c483f54984e92dcbf9369bf42a27c473d04abea73d281c3cb5239->leave($__internal_48a2ed3c553c483f54984e92dcbf9369bf42a27c473d04abea73d281c3cb5239_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_45d1560c5d450ff4c131dbc491118cc69414a98b1341f5b42009fdec9db5a5c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d1560c5d450ff4c131dbc491118cc69414a98b1341f5b42009fdec9db5a5c7->enter($__internal_45d1560c5d450ff4c131dbc491118cc69414a98b1341f5b42009fdec9db5a5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2ea148ca32ea515520b8aecad50373454b9ca9c3bade955be020293a13a4ef0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea148ca32ea515520b8aecad50373454b9ca9c3bade955be020293a13a4ef0e->enter($__internal_2ea148ca32ea515520b8aecad50373454b9ca9c3bade955be020293a13a4ef0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2ea148ca32ea515520b8aecad50373454b9ca9c3bade955be020293a13a4ef0e->leave($__internal_2ea148ca32ea515520b8aecad50373454b9ca9c3bade955be020293a13a4ef0e_prof);

        
        $__internal_45d1560c5d450ff4c131dbc491118cc69414a98b1341f5b42009fdec9db5a5c7->leave($__internal_45d1560c5d450ff4c131dbc491118cc69414a98b1341f5b42009fdec9db5a5c7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d66dad600c2c98a840b197023a36ccb195ae7302848bc2bbba1ba8e4103c2527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66dad600c2c98a840b197023a36ccb195ae7302848bc2bbba1ba8e4103c2527->enter($__internal_d66dad600c2c98a840b197023a36ccb195ae7302848bc2bbba1ba8e4103c2527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8241e464ed3465d61a13707fbb380a379e399f884cbe573c98e40b699659e270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8241e464ed3465d61a13707fbb380a379e399f884cbe573c98e40b699659e270->enter($__internal_8241e464ed3465d61a13707fbb380a379e399f884cbe573c98e40b699659e270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_8241e464ed3465d61a13707fbb380a379e399f884cbe573c98e40b699659e270->leave($__internal_8241e464ed3465d61a13707fbb380a379e399f884cbe573c98e40b699659e270_prof);

        
        $__internal_d66dad600c2c98a840b197023a36ccb195ae7302848bc2bbba1ba8e4103c2527->leave($__internal_d66dad600c2c98a840b197023a36ccb195ae7302848bc2bbba1ba8e4103c2527_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
