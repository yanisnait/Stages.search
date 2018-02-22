<?php

/* SSPlatformBundle::layout.html.twig */
class __TwigTemplate_471dc7c058157a2ff656fd25ccdab676af48a0be1acf82d6247e0ef24c229782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "SSPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ssplatform_body' => array($this, 'block_ssplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_387e0dd607196dff47d4fcbd1af12c561b812c9fec647d3c6c1fb74bfaf7fd5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_387e0dd607196dff47d4fcbd1af12c561b812c9fec647d3c6c1fb74bfaf7fd5f->enter($__internal_387e0dd607196dff47d4fcbd1af12c561b812c9fec647d3c6c1fb74bfaf7fd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle::layout.html.twig"));

        $__internal_2f615801da3f8834e36df5de31b8deb6cd114880da29e899de41c5173f331dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f615801da3f8834e36df5de31b8deb6cd114880da29e899de41c5173f331dad->enter($__internal_2f615801da3f8834e36df5de31b8deb6cd114880da29e899de41c5173f331dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_387e0dd607196dff47d4fcbd1af12c561b812c9fec647d3c6c1fb74bfaf7fd5f->leave($__internal_387e0dd607196dff47d4fcbd1af12c561b812c9fec647d3c6c1fb74bfaf7fd5f_prof);

        
        $__internal_2f615801da3f8834e36df5de31b8deb6cd114880da29e899de41c5173f331dad->leave($__internal_2f615801da3f8834e36df5de31b8deb6cd114880da29e899de41c5173f331dad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6bbe1606639bdba4921d851740bdbaed8ef0c75541cdd180ca03fb3fbbe093f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bbe1606639bdba4921d851740bdbaed8ef0c75541cdd180ca03fb3fbbe093f2->enter($__internal_6bbe1606639bdba4921d851740bdbaed8ef0c75541cdd180ca03fb3fbbe093f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_58e9823161fb04df1f1f08f5f3a795b31f98ff13e740c633aeb2b2882290ecba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e9823161fb04df1f1f08f5f3a795b31f98ff13e740c633aeb2b2882290ecba->enter($__internal_58e9823161fb04df1f1f08f5f3a795b31f98ff13e740c633aeb2b2882290ecba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_58e9823161fb04df1f1f08f5f3a795b31f98ff13e740c633aeb2b2882290ecba->leave($__internal_58e9823161fb04df1f1f08f5f3a795b31f98ff13e740c633aeb2b2882290ecba_prof);

        
        $__internal_6bbe1606639bdba4921d851740bdbaed8ef0c75541cdd180ca03fb3fbbe093f2->leave($__internal_6bbe1606639bdba4921d851740bdbaed8ef0c75541cdd180ca03fb3fbbe093f2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b23657d3cb623ebcbfd65676030ecd447786ebc7f7a3bf53b35e80312c56fce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b23657d3cb623ebcbfd65676030ecd447786ebc7f7a3bf53b35e80312c56fce->enter($__internal_1b23657d3cb623ebcbfd65676030ecd447786ebc7f7a3bf53b35e80312c56fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dab5711c61ae3700327eeee5b3411999bd7f6d0408bcef631ccf3602480de88d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab5711c61ae3700327eeee5b3411999bd7f6d0408bcef631ccf3602480de88d->enter($__internal_dab5711c61ae3700327eeee5b3411999bd7f6d0408bcef631ccf3602480de88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    <h1>Annonces</h1>

    <hr>

    ";
        // line 17
        echo "    ";
        $this->displayBlock('ssplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_dab5711c61ae3700327eeee5b3411999bd7f6d0408bcef631ccf3602480de88d->leave($__internal_dab5711c61ae3700327eeee5b3411999bd7f6d0408bcef631ccf3602480de88d_prof);

        
        $__internal_1b23657d3cb623ebcbfd65676030ecd447786ebc7f7a3bf53b35e80312c56fce->leave($__internal_1b23657d3cb623ebcbfd65676030ecd447786ebc7f7a3bf53b35e80312c56fce_prof);

    }

    // line 17
    public function block_ssplatform_body($context, array $blocks = array())
    {
        $__internal_6f3e291632e35bc690a93450e0b59c9f7cf9389588e42c1a3d081493fe16d410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f3e291632e35bc690a93450e0b59c9f7cf9389588e42c1a3d081493fe16d410->enter($__internal_6f3e291632e35bc690a93450e0b59c9f7cf9389588e42c1a3d081493fe16d410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        $__internal_11915023edc7b1c521ed82d9d7fa53ae96fc6ac9602be1d378c17beafb290052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11915023edc7b1c521ed82d9d7fa53ae96fc6ac9602be1d378c17beafb290052->enter($__internal_11915023edc7b1c521ed82d9d7fa53ae96fc6ac9602be1d378c17beafb290052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        // line 18
        echo "    ";
        
        $__internal_11915023edc7b1c521ed82d9d7fa53ae96fc6ac9602be1d378c17beafb290052->leave($__internal_11915023edc7b1c521ed82d9d7fa53ae96fc6ac9602be1d378c17beafb290052_prof);

        
        $__internal_6f3e291632e35bc690a93450e0b59c9f7cf9389588e42c1a3d081493fe16d410->leave($__internal_6f3e291632e35bc690a93450e0b59c9f7cf9389588e42c1a3d081493fe16d410_prof);

    }

    public function getTemplateName()
    {
        return "SSPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  96 => 17,  85 => 19,  82 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SS/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
    Annonces - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
    <h1>Annonces</h1>

    <hr>

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    {% block ssplatform_body %}
    {% endblock %}

{% endblock %}", "SSPlatformBundle::layout.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle/Resources/views/layout.html.twig");
    }
}
