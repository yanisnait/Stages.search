<?php

/* base.html.twig */
class __TwigTemplate_2678591f62af89d90ab7dddb52c900318afd55d1486fda13fd22b00f25ce66ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30550cec3e09a4c03f0d62d0bba7f627b7b1376e0227fe224e348555b8d821b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30550cec3e09a4c03f0d62d0bba7f627b7b1376e0227fe224e348555b8d821b1->enter($__internal_30550cec3e09a4c03f0d62d0bba7f627b7b1376e0227fe224e348555b8d821b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8a80c4cbbab31b4009bafa43b89aadb9bd53c074dbc6b41b639d777cebf23a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a80c4cbbab31b4009bafa43b89aadb9bd53c074dbc6b41b639d777cebf23a16->enter($__internal_8a80c4cbbab31b4009bafa43b89aadb9bd53c074dbc6b41b639d777cebf23a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_30550cec3e09a4c03f0d62d0bba7f627b7b1376e0227fe224e348555b8d821b1->leave($__internal_30550cec3e09a4c03f0d62d0bba7f627b7b1376e0227fe224e348555b8d821b1_prof);

        
        $__internal_8a80c4cbbab31b4009bafa43b89aadb9bd53c074dbc6b41b639d777cebf23a16->leave($__internal_8a80c4cbbab31b4009bafa43b89aadb9bd53c074dbc6b41b639d777cebf23a16_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_60cda1508412c643ea9ee2bb0d44b3c9f463891edfeac53311c14d57edbdda08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60cda1508412c643ea9ee2bb0d44b3c9f463891edfeac53311c14d57edbdda08->enter($__internal_60cda1508412c643ea9ee2bb0d44b3c9f463891edfeac53311c14d57edbdda08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0540a84a52ed3bba5b9f161c53203fb0f72768fada80522898b1e5e8c8bf64a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0540a84a52ed3bba5b9f161c53203fb0f72768fada80522898b1e5e8c8bf64a7->enter($__internal_0540a84a52ed3bba5b9f161c53203fb0f72768fada80522898b1e5e8c8bf64a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0540a84a52ed3bba5b9f161c53203fb0f72768fada80522898b1e5e8c8bf64a7->leave($__internal_0540a84a52ed3bba5b9f161c53203fb0f72768fada80522898b1e5e8c8bf64a7_prof);

        
        $__internal_60cda1508412c643ea9ee2bb0d44b3c9f463891edfeac53311c14d57edbdda08->leave($__internal_60cda1508412c643ea9ee2bb0d44b3c9f463891edfeac53311c14d57edbdda08_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da802fb47885b8fe1dafa3e88484cbad2e2c34a4198df2d9c1579779f4126e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da802fb47885b8fe1dafa3e88484cbad2e2c34a4198df2d9c1579779f4126e71->enter($__internal_da802fb47885b8fe1dafa3e88484cbad2e2c34a4198df2d9c1579779f4126e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_79156029b934e8cee4e4d1ccefdbfb8de03245372b19fc3fac28fefe1abae00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79156029b934e8cee4e4d1ccefdbfb8de03245372b19fc3fac28fefe1abae00c->enter($__internal_79156029b934e8cee4e4d1ccefdbfb8de03245372b19fc3fac28fefe1abae00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_79156029b934e8cee4e4d1ccefdbfb8de03245372b19fc3fac28fefe1abae00c->leave($__internal_79156029b934e8cee4e4d1ccefdbfb8de03245372b19fc3fac28fefe1abae00c_prof);

        
        $__internal_da802fb47885b8fe1dafa3e88484cbad2e2c34a4198df2d9c1579779f4126e71->leave($__internal_da802fb47885b8fe1dafa3e88484cbad2e2c34a4198df2d9c1579779f4126e71_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_95bbbfb158327ecb2ddf30adc03c974bbedf70ee9d18cab3174f07361c204b8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95bbbfb158327ecb2ddf30adc03c974bbedf70ee9d18cab3174f07361c204b8a->enter($__internal_95bbbfb158327ecb2ddf30adc03c974bbedf70ee9d18cab3174f07361c204b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a42747f7c9c24a7632442454a182cbb28f7dc10a4c25df07466add2bdeed58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a42747f7c9c24a7632442454a182cbb28f7dc10a4c25df07466add2bdeed58c->enter($__internal_3a42747f7c9c24a7632442454a182cbb28f7dc10a4c25df07466add2bdeed58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3a42747f7c9c24a7632442454a182cbb28f7dc10a4c25df07466add2bdeed58c->leave($__internal_3a42747f7c9c24a7632442454a182cbb28f7dc10a4c25df07466add2bdeed58c_prof);

        
        $__internal_95bbbfb158327ecb2ddf30adc03c974bbedf70ee9d18cab3174f07361c204b8a->leave($__internal_95bbbfb158327ecb2ddf30adc03c974bbedf70ee9d18cab3174f07361c204b8a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_edd6c2463624b5f84cbd660e041b13967d9876487249e4c0d0c26cd885432750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edd6c2463624b5f84cbd660e041b13967d9876487249e4c0d0c26cd885432750->enter($__internal_edd6c2463624b5f84cbd660e041b13967d9876487249e4c0d0c26cd885432750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0cdd404de79d2f4fca490460e7b3221cca263bdd90b1a29b4c4e7562a5560ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cdd404de79d2f4fca490460e7b3221cca263bdd90b1a29b4c4e7562a5560ca5->enter($__internal_0cdd404de79d2f4fca490460e7b3221cca263bdd90b1a29b4c4e7562a5560ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0cdd404de79d2f4fca490460e7b3221cca263bdd90b1a29b4c4e7562a5560ca5->leave($__internal_0cdd404de79d2f4fca490460e7b3221cca263bdd90b1a29b4c4e7562a5560ca5_prof);

        
        $__internal_edd6c2463624b5f84cbd660e041b13967d9876487249e4c0d0c26cd885432750->leave($__internal_edd6c2463624b5f84cbd660e041b13967d9876487249e4c0d0c26cd885432750_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\app\\Resources\\views\\base.html.twig");
    }
}
