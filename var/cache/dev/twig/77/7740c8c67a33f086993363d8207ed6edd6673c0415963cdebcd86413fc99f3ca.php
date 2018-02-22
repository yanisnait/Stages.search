<?php

/* @SSPlatform/Advert/add.html.twig */
class __TwigTemplate_3d7a87801be0f24e1e1f1c4a0521cc44a5df4572c45dee6900eaff4e9b40e3b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("SSPlatformBundle::layout.html.twig", "@SSPlatform/Advert/add.html.twig", 3);
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
        $__internal_3f93de82fd9184c92e887a697d858834b8896ae0b097091edfdeabf04eeec151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f93de82fd9184c92e887a697d858834b8896ae0b097091edfdeabf04eeec151->enter($__internal_3f93de82fd9184c92e887a697d858834b8896ae0b097091edfdeabf04eeec151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SSPlatform/Advert/add.html.twig"));

        $__internal_afdb3da5de4669fd4aaeb9f4a4d1b17f5f56a8dcc58eb939974aa4dee27bb043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afdb3da5de4669fd4aaeb9f4a4d1b17f5f56a8dcc58eb939974aa4dee27bb043->enter($__internal_afdb3da5de4669fd4aaeb9f4a4d1b17f5f56a8dcc58eb939974aa4dee27bb043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SSPlatform/Advert/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f93de82fd9184c92e887a697d858834b8896ae0b097091edfdeabf04eeec151->leave($__internal_3f93de82fd9184c92e887a697d858834b8896ae0b097091edfdeabf04eeec151_prof);

        
        $__internal_afdb3da5de4669fd4aaeb9f4a4d1b17f5f56a8dcc58eb939974aa4dee27bb043->leave($__internal_afdb3da5de4669fd4aaeb9f4a4d1b17f5f56a8dcc58eb939974aa4dee27bb043_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_95bac1cfb097c44e43ead207b93df7145eedf92bf8eb42a1b4ad5cba2dbf75fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95bac1cfb097c44e43ead207b93df7145eedf92bf8eb42a1b4ad5cba2dbf75fd->enter($__internal_95bac1cfb097c44e43ead207b93df7145eedf92bf8eb42a1b4ad5cba2dbf75fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df204ef0a4355a4960ae07490f45f3720d20000d0e17ab12e8a705b58533db26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df204ef0a4355a4960ae07490f45f3720d20000d0e17ab12e8a705b58533db26->enter($__internal_df204ef0a4355a4960ae07490f45f3720d20000d0e17ab12e8a705b58533db26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h2>Ajouter une annonce</h2>

    ";
        // line 9
        echo twig_include($this->env, $context, "SSPlatformBundle:Advert:form.html.twig");
        echo "

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

";
        
        $__internal_df204ef0a4355a4960ae07490f45f3720d20000d0e17ab12e8a705b58533db26->leave($__internal_df204ef0a4355a4960ae07490f45f3720d20000d0e17ab12e8a705b58533db26_prof);

        
        $__internal_95bac1cfb097c44e43ead207b93df7145eedf92bf8eb42a1b4ad5cba2dbf75fd->leave($__internal_95bac1cfb097c44e43ead207b93df7145eedf92bf8eb42a1b4ad5cba2dbf75fd_prof);

    }

    public function getTemplateName()
    {
        return "@SSPlatform/Advert/add.html.twig";
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

    {{ include(\"SSPlatformBundle:Advert:form.html.twig\") }}

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

{% endblock %}", "@SSPlatform/Advert/add.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\Advert\\add.html.twig");
    }
}
