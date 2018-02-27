<?php

/* SSPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_3d7a87801be0f24e1e1f1c4a0521cc44a5df4572c45dee6900eaff4e9b40e3b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("SSPlatformBundle::layout.html.twig", "SSPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SSPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a98adcdeaf75e52dbe37cb35ad656cc70cc7497f0b19b686d0f65cc32930138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a98adcdeaf75e52dbe37cb35ad656cc70cc7497f0b19b686d0f65cc32930138->enter($__internal_6a98adcdeaf75e52dbe37cb35ad656cc70cc7497f0b19b686d0f65cc32930138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:add.html.twig"));

        $__internal_751498ec9e269592243b254530e0597099b937ae8ad1820445cc06e64546aab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_751498ec9e269592243b254530e0597099b937ae8ad1820445cc06e64546aab9->enter($__internal_751498ec9e269592243b254530e0597099b937ae8ad1820445cc06e64546aab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a98adcdeaf75e52dbe37cb35ad656cc70cc7497f0b19b686d0f65cc32930138->leave($__internal_6a98adcdeaf75e52dbe37cb35ad656cc70cc7497f0b19b686d0f65cc32930138_prof);

        
        $__internal_751498ec9e269592243b254530e0597099b937ae8ad1820445cc06e64546aab9->leave($__internal_751498ec9e269592243b254530e0597099b937ae8ad1820445cc06e64546aab9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_01f79693b96ebe76e0badee67a859bff0f0ce3b93485be1085d045dc997b4e92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f79693b96ebe76e0badee67a859bff0f0ce3b93485be1085d045dc997b4e92->enter($__internal_01f79693b96ebe76e0badee67a859bff0f0ce3b93485be1085d045dc997b4e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad88fd9205e2ca876212287465fa68d898d9ae320df3d231b121728a87ea3fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad88fd9205e2ca876212287465fa68d898d9ae320df3d231b121728a87ea3fa9->enter($__internal_ad88fd9205e2ca876212287465fa68d898d9ae320df3d231b121728a87ea3fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        if (((isset($context["vue"]) || array_key_exists("vue", $context) ? $context["vue"] : (function () { throw new Twig_Error_Runtime('Variable "vue" does not exist.', 7, $this->getSourceContext()); })()) == "O")) {
            // line 8
            echo "    <h2>Ajouter une annonce</h2>

    ";
            // line 10
            echo twig_include($this->env, $context, "SSPlatformBundle:Advert:formOffre.html.twig");
            echo "

    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (((isset($context["vue"]) || array_key_exists("vue", $context) ? $context["vue"] : (function () { throw new Twig_Error_Runtime('Variable "vue" does not exist.', 14, $this->getSourceContext()); })()) == "E")) {
            // line 15
            echo "        <h2>Ajouter une entreprise</h2>

        ";
            // line 17
            echo twig_include($this->env, $context, "SSPlatformBundle:Advert:formEntreprise.html.twig");
            echo "

    ";
        }
        // line 20
        echo "

";
        
        $__internal_ad88fd9205e2ca876212287465fa68d898d9ae320df3d231b121728a87ea3fa9->leave($__internal_ad88fd9205e2ca876212287465fa68d898d9ae320df3d231b121728a87ea3fa9_prof);

        
        $__internal_01f79693b96ebe76e0badee67a859bff0f0ce3b93485be1085d045dc997b4e92->leave($__internal_01f79693b96ebe76e0badee67a859bff0f0ce3b93485be1085d045dc997b4e92_prof);

    }

    public function getTemplateName()
    {
        return "SSPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  73 => 17,  69 => 15,  67 => 14,  64 => 13,  58 => 10,  54 => 8,  52 => 7,  49 => 6,  40 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SS/PlatformBundle/Resources/views/Advert/add.html.twig #}

{% extends \"SSPlatformBundle::layout.html.twig\" %}

{% block body %}

    {% if vue=='O'%}
    <h2>Ajouter une annonce</h2>

    {{ include(\"SSPlatformBundle:Advert:formOffre.html.twig\") }}

    {% endif %}

    {% if  vue=='E' %}
        <h2>Ajouter une entreprise</h2>

        {{ include(\"SSPlatformBundle:Advert:formEntreprise.html.twig\") }}

    {% endif %}


{% endblock %}", "SSPlatformBundle:Advert:add.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\Advert\\add.html.twig");
    }
}
