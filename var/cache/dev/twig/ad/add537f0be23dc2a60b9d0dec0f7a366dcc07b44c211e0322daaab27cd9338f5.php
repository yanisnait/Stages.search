<?php

/* SSPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_778cdcb7280ba2c861a83db3c70126e6c27292115900b11bb7b113310c42d1fb extends Twig_Template
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
        $__internal_585eacf91335054e423c6dc9d80cc50918e3dd0e9e313f3a7ea0eb3738b53acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585eacf91335054e423c6dc9d80cc50918e3dd0e9e313f3a7ea0eb3738b53acd->enter($__internal_585eacf91335054e423c6dc9d80cc50918e3dd0e9e313f3a7ea0eb3738b53acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:add.html.twig"));

        $__internal_452ddaeebe2d0a2fe65e84371f9d74bc549fa6238958a0d7bb9690973184e6d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452ddaeebe2d0a2fe65e84371f9d74bc549fa6238958a0d7bb9690973184e6d6->enter($__internal_452ddaeebe2d0a2fe65e84371f9d74bc549fa6238958a0d7bb9690973184e6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_585eacf91335054e423c6dc9d80cc50918e3dd0e9e313f3a7ea0eb3738b53acd->leave($__internal_585eacf91335054e423c6dc9d80cc50918e3dd0e9e313f3a7ea0eb3738b53acd_prof);

        
        $__internal_452ddaeebe2d0a2fe65e84371f9d74bc549fa6238958a0d7bb9690973184e6d6->leave($__internal_452ddaeebe2d0a2fe65e84371f9d74bc549fa6238958a0d7bb9690973184e6d6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7b8071ff8146d3e2ae43e20b8457582c43806bf7cf023a4a9ef90387fe38934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7b8071ff8146d3e2ae43e20b8457582c43806bf7cf023a4a9ef90387fe38934->enter($__internal_e7b8071ff8146d3e2ae43e20b8457582c43806bf7cf023a4a9ef90387fe38934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42aba25a0334fe5cde5d5079914f732409f0f87d316f15e92b40a99c5b5069d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42aba25a0334fe5cde5d5079914f732409f0f87d316f15e92b40a99c5b5069d6->enter($__internal_42aba25a0334fe5cde5d5079914f732409f0f87d316f15e92b40a99c5b5069d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h2>Ajouter une annonce</h2>

    ";
        // line 9
        echo twig_include($this->env, $context, "SSPlatformBundle:Advert:formOffre.html.twig");
        echo "

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

";
        
        $__internal_42aba25a0334fe5cde5d5079914f732409f0f87d316f15e92b40a99c5b5069d6->leave($__internal_42aba25a0334fe5cde5d5079914f732409f0f87d316f15e92b40a99c5b5069d6_prof);

        
        $__internal_e7b8071ff8146d3e2ae43e20b8457582c43806bf7cf023a4a9ef90387fe38934->leave($__internal_e7b8071ff8146d3e2ae43e20b8457582c43806bf7cf023a4a9ef90387fe38934_prof);

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
        return array (  54 => 9,  49 => 6,  40 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SS/PlatformBundle/Resources/views/Advert/add.html.twig #}

{% extends \"SSPlatformBundle::layout.html.twig\" %}

{% block body %}

    <h2>Ajouter une annonce</h2>

    {{ include(\"SSPlatformBundle:Advert:formOffre.html.twig\") }}

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

{% endblock %}", "SSPlatformBundle:Advert:add.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
