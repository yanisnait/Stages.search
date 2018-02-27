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
        $__internal_d3604670ea53196c8e227a7a4e3ba7cf9afb0d36f8b32865508d734851a1fe5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3604670ea53196c8e227a7a4e3ba7cf9afb0d36f8b32865508d734851a1fe5a->enter($__internal_d3604670ea53196c8e227a7a4e3ba7cf9afb0d36f8b32865508d734851a1fe5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:add.html.twig"));

        $__internal_4418c209292c2ca9f68766eb09c183fc9c3ba65366316d02b9ab67cd381fc317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4418c209292c2ca9f68766eb09c183fc9c3ba65366316d02b9ab67cd381fc317->enter($__internal_4418c209292c2ca9f68766eb09c183fc9c3ba65366316d02b9ab67cd381fc317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3604670ea53196c8e227a7a4e3ba7cf9afb0d36f8b32865508d734851a1fe5a->leave($__internal_d3604670ea53196c8e227a7a4e3ba7cf9afb0d36f8b32865508d734851a1fe5a_prof);

        
        $__internal_4418c209292c2ca9f68766eb09c183fc9c3ba65366316d02b9ab67cd381fc317->leave($__internal_4418c209292c2ca9f68766eb09c183fc9c3ba65366316d02b9ab67cd381fc317_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_afb6c7f847081eecb056274f784bb50376efcbc681c5632ee90ea1fde738d13e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb6c7f847081eecb056274f784bb50376efcbc681c5632ee90ea1fde738d13e->enter($__internal_afb6c7f847081eecb056274f784bb50376efcbc681c5632ee90ea1fde738d13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_141839a1759d0bed8f29256241ebd5168e86ed512991faee12011ebd5fbce8fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141839a1759d0bed8f29256241ebd5168e86ed512991faee12011ebd5fbce8fd->enter($__internal_141839a1759d0bed8f29256241ebd5168e86ed512991faee12011ebd5fbce8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_141839a1759d0bed8f29256241ebd5168e86ed512991faee12011ebd5fbce8fd->leave($__internal_141839a1759d0bed8f29256241ebd5168e86ed512991faee12011ebd5fbce8fd_prof);

        
        $__internal_afb6c7f847081eecb056274f784bb50376efcbc681c5632ee90ea1fde738d13e->leave($__internal_afb6c7f847081eecb056274f784bb50376efcbc681c5632ee90ea1fde738d13e_prof);

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
