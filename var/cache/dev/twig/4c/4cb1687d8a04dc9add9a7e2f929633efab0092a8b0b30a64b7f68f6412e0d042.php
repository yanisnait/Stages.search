<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_ceaa1247b67fffbdd17b46c983ac869eb68d59c09a1d85c588b896d291140e28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec1d8230555327124abcd85e2fac33dc493fbb653643b3e3cf390a1eaa058f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1d8230555327124abcd85e2fac33dc493fbb653643b3e3cf390a1eaa058f90->enter($__internal_ec1d8230555327124abcd85e2fac33dc493fbb653643b3e3cf390a1eaa058f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_aa555765a495dae2e19226a044f553499b16811db80840b12605e3e6ff913179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa555765a495dae2e19226a044f553499b16811db80840b12605e3e6ff913179->enter($__internal_aa555765a495dae2e19226a044f553499b16811db80840b12605e3e6ff913179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec1d8230555327124abcd85e2fac33dc493fbb653643b3e3cf390a1eaa058f90->leave($__internal_ec1d8230555327124abcd85e2fac33dc493fbb653643b3e3cf390a1eaa058f90_prof);

        
        $__internal_aa555765a495dae2e19226a044f553499b16811db80840b12605e3e6ff913179->leave($__internal_aa555765a495dae2e19226a044f553499b16811db80840b12605e3e6ff913179_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_15ff67cea40859caa2e9fb9517d314d96d719062da64465748262dffa0879ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15ff67cea40859caa2e9fb9517d314d96d719062da64465748262dffa0879ae6->enter($__internal_15ff67cea40859caa2e9fb9517d314d96d719062da64465748262dffa0879ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_438f6b8cde92692b9aa300940ce9f9da9ec31653cda65aa3dab087cb88abf3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438f6b8cde92692b9aa300940ce9f9da9ec31653cda65aa3dab087cb88abf3e6->enter($__internal_438f6b8cde92692b9aa300940ce9f9da9ec31653cda65aa3dab087cb88abf3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_438f6b8cde92692b9aa300940ce9f9da9ec31653cda65aa3dab087cb88abf3e6->leave($__internal_438f6b8cde92692b9aa300940ce9f9da9ec31653cda65aa3dab087cb88abf3e6_prof);

        
        $__internal_15ff67cea40859caa2e9fb9517d314d96d719062da64465748262dffa0879ae6->leave($__internal_15ff67cea40859caa2e9fb9517d314d96d719062da64465748262dffa0879ae6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f30725218d086488fe7faf5bf21fc2cd0da537294c9ab4c60f91dc0f020bf695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f30725218d086488fe7faf5bf21fc2cd0da537294c9ab4c60f91dc0f020bf695->enter($__internal_f30725218d086488fe7faf5bf21fc2cd0da537294c9ab4c60f91dc0f020bf695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e91e4e99ad4316a6b9ab415e808647d1d227dab5783896533f29f5745097f862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91e4e99ad4316a6b9ab415e808647d1d227dab5783896533f29f5745097f862->enter($__internal_e91e4e99ad4316a6b9ab415e808647d1d227dab5783896533f29f5745097f862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
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
        
        $__internal_e91e4e99ad4316a6b9ab415e808647d1d227dab5783896533f29f5745097f862->leave($__internal_e91e4e99ad4316a6b9ab415e808647d1d227dab5783896533f29f5745097f862_prof);

        
        $__internal_f30725218d086488fe7faf5bf21fc2cd0da537294c9ab4c60f91dc0f020bf695->leave($__internal_f30725218d086488fe7faf5bf21fc2cd0da537294c9ab4c60f91dc0f020bf695_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
