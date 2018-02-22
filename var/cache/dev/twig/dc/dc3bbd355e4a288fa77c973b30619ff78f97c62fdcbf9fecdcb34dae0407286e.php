<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_bb59921f0f28b4e8dcdd50dc28c7724cf393a680eedf42152ade09b5112e73e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_34dbd7269d537aeb217da780ae7e9bfd82c094f6a920a4c2c9e73ce219bfd94b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34dbd7269d537aeb217da780ae7e9bfd82c094f6a920a4c2c9e73ce219bfd94b->enter($__internal_34dbd7269d537aeb217da780ae7e9bfd82c094f6a920a4c2c9e73ce219bfd94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_528ad46a442b1d102470a920afde7e9b7a2c801a93ba44c13e53765a97868669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528ad46a442b1d102470a920afde7e9b7a2c801a93ba44c13e53765a97868669->enter($__internal_528ad46a442b1d102470a920afde7e9b7a2c801a93ba44c13e53765a97868669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34dbd7269d537aeb217da780ae7e9bfd82c094f6a920a4c2c9e73ce219bfd94b->leave($__internal_34dbd7269d537aeb217da780ae7e9bfd82c094f6a920a4c2c9e73ce219bfd94b_prof);

        
        $__internal_528ad46a442b1d102470a920afde7e9b7a2c801a93ba44c13e53765a97868669->leave($__internal_528ad46a442b1d102470a920afde7e9b7a2c801a93ba44c13e53765a97868669_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3397ea76addcd7b30cd2764e6603994b42c9a2a2f3659c9a325c485cee26758d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3397ea76addcd7b30cd2764e6603994b42c9a2a2f3659c9a325c485cee26758d->enter($__internal_3397ea76addcd7b30cd2764e6603994b42c9a2a2f3659c9a325c485cee26758d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b43992680e27f5e4e610fda1d10dad074cfebdb5aa5ee08b8be65f7e1483f28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43992680e27f5e4e610fda1d10dad074cfebdb5aa5ee08b8be65f7e1483f28f->enter($__internal_b43992680e27f5e4e610fda1d10dad074cfebdb5aa5ee08b8be65f7e1483f28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b43992680e27f5e4e610fda1d10dad074cfebdb5aa5ee08b8be65f7e1483f28f->leave($__internal_b43992680e27f5e4e610fda1d10dad074cfebdb5aa5ee08b8be65f7e1483f28f_prof);

        
        $__internal_3397ea76addcd7b30cd2764e6603994b42c9a2a2f3659c9a325c485cee26758d->leave($__internal_3397ea76addcd7b30cd2764e6603994b42c9a2a2f3659c9a325c485cee26758d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_77fa3203a11bd1ad7df43d69e603ed07b72035957bd4640131f867d9de8dea9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77fa3203a11bd1ad7df43d69e603ed07b72035957bd4640131f867d9de8dea9a->enter($__internal_77fa3203a11bd1ad7df43d69e603ed07b72035957bd4640131f867d9de8dea9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e24134a9f410e4869a73c37773a6ca2fd1c6003149c76f8828a0328d3413f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e24134a9f410e4869a73c37773a6ca2fd1c6003149c76f8828a0328d3413f59->enter($__internal_3e24134a9f410e4869a73c37773a6ca2fd1c6003149c76f8828a0328d3413f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3e24134a9f410e4869a73c37773a6ca2fd1c6003149c76f8828a0328d3413f59->leave($__internal_3e24134a9f410e4869a73c37773a6ca2fd1c6003149c76f8828a0328d3413f59_prof);

        
        $__internal_77fa3203a11bd1ad7df43d69e603ed07b72035957bd4640131f867d9de8dea9a->leave($__internal_77fa3203a11bd1ad7df43d69e603ed07b72035957bd4640131f867d9de8dea9a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
