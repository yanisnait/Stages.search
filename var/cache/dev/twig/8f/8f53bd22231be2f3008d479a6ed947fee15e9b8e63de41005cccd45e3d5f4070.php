<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_b0172d1c0eae664f10f3b5e020c8f269839eb968d5cef8f9d288d668948fd73d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02e7388fc9b6e8c88d54baf627036de40a39b3d854a0510543295d80b3a4373b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02e7388fc9b6e8c88d54baf627036de40a39b3d854a0510543295d80b3a4373b->enter($__internal_02e7388fc9b6e8c88d54baf627036de40a39b3d854a0510543295d80b3a4373b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_be60e7d7cf37a1a54d8f9e8c0007a90585b8a992c4afd71aaca037423431d324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be60e7d7cf37a1a54d8f9e8c0007a90585b8a992c4afd71aaca037423431d324->enter($__internal_be60e7d7cf37a1a54d8f9e8c0007a90585b8a992c4afd71aaca037423431d324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_02e7388fc9b6e8c88d54baf627036de40a39b3d854a0510543295d80b3a4373b->leave($__internal_02e7388fc9b6e8c88d54baf627036de40a39b3d854a0510543295d80b3a4373b_prof);

        
        $__internal_be60e7d7cf37a1a54d8f9e8c0007a90585b8a992c4afd71aaca037423431d324->leave($__internal_be60e7d7cf37a1a54d8f9e8c0007a90585b8a992c4afd71aaca037423431d324_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf1650f4a62948aeb15ec10cf3baad0cab8c48a630d47f252c38f8c416282721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1650f4a62948aeb15ec10cf3baad0cab8c48a630d47f252c38f8c416282721->enter($__internal_cf1650f4a62948aeb15ec10cf3baad0cab8c48a630d47f252c38f8c416282721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_62d46cd6d0fcdb27f3eb84be17536eaa2f81b2ee99cccc4814daeb882890b506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d46cd6d0fcdb27f3eb84be17536eaa2f81b2ee99cccc4814daeb882890b506->enter($__internal_62d46cd6d0fcdb27f3eb84be17536eaa2f81b2ee99cccc4814daeb882890b506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_62d46cd6d0fcdb27f3eb84be17536eaa2f81b2ee99cccc4814daeb882890b506->leave($__internal_62d46cd6d0fcdb27f3eb84be17536eaa2f81b2ee99cccc4814daeb882890b506_prof);

        
        $__internal_cf1650f4a62948aeb15ec10cf3baad0cab8c48a630d47f252c38f8c416282721->leave($__internal_cf1650f4a62948aeb15ec10cf3baad0cab8c48a630d47f252c38f8c416282721_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
