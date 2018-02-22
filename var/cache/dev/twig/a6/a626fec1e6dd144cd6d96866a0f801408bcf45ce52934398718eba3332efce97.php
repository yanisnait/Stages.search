<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_6d564dcef67da133cb645eca6b0f2c05ad051f966ae1fecfbecad17ebdae21e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1da7a06ce26bc38035ecdd0485f83b3b932adc5b4f7199f5e82e39addf27d588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da7a06ce26bc38035ecdd0485f83b3b932adc5b4f7199f5e82e39addf27d588->enter($__internal_1da7a06ce26bc38035ecdd0485f83b3b932adc5b4f7199f5e82e39addf27d588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_ae62c04f204a58a428a20b126a02e64de1bd83c26d2eb03caaad606293c517a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae62c04f204a58a428a20b126a02e64de1bd83c26d2eb03caaad606293c517a7->enter($__internal_ae62c04f204a58a428a20b126a02e64de1bd83c26d2eb03caaad606293c517a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1da7a06ce26bc38035ecdd0485f83b3b932adc5b4f7199f5e82e39addf27d588->leave($__internal_1da7a06ce26bc38035ecdd0485f83b3b932adc5b4f7199f5e82e39addf27d588_prof);

        
        $__internal_ae62c04f204a58a428a20b126a02e64de1bd83c26d2eb03caaad606293c517a7->leave($__internal_ae62c04f204a58a428a20b126a02e64de1bd83c26d2eb03caaad606293c517a7_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_5919df1e0a97d897ff404d2205158200be2acb146b8b331348922c023fbe242e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5919df1e0a97d897ff404d2205158200be2acb146b8b331348922c023fbe242e->enter($__internal_5919df1e0a97d897ff404d2205158200be2acb146b8b331348922c023fbe242e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e1e07108e0603767d4be7c4a1b913a1e43c31826b7ff753a31f9b41c63904d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e07108e0603767d4be7c4a1b913a1e43c31826b7ff753a31f9b41c63904d7b->enter($__internal_e1e07108e0603767d4be7c4a1b913a1e43c31826b7ff753a31f9b41c63904d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_e1e07108e0603767d4be7c4a1b913a1e43c31826b7ff753a31f9b41c63904d7b->leave($__internal_e1e07108e0603767d4be7c4a1b913a1e43c31826b7ff753a31f9b41c63904d7b_prof);

        
        $__internal_5919df1e0a97d897ff404d2205158200be2acb146b8b331348922c023fbe242e->leave($__internal_5919df1e0a97d897ff404d2205158200be2acb146b8b331348922c023fbe242e_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c0a33bba71f0cfe51cf6dcfa6974904ae5b7e4a5cced55b990f54eaddaba7307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0a33bba71f0cfe51cf6dcfa6974904ae5b7e4a5cced55b990f54eaddaba7307->enter($__internal_c0a33bba71f0cfe51cf6dcfa6974904ae5b7e4a5cced55b990f54eaddaba7307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a9c81f3468bf8aa088ed6fae794dd5f57dd2634ee9ff4fe4a27a2b427a2658b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c81f3468bf8aa088ed6fae794dd5f57dd2634ee9ff4fe4a27a2b427a2658b4->enter($__internal_a9c81f3468bf8aa088ed6fae794dd5f57dd2634ee9ff4fe4a27a2b427a2658b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a9c81f3468bf8aa088ed6fae794dd5f57dd2634ee9ff4fe4a27a2b427a2658b4->leave($__internal_a9c81f3468bf8aa088ed6fae794dd5f57dd2634ee9ff4fe4a27a2b427a2658b4_prof);

        
        $__internal_c0a33bba71f0cfe51cf6dcfa6974904ae5b7e4a5cced55b990f54eaddaba7307->leave($__internal_c0a33bba71f0cfe51cf6dcfa6974904ae5b7e4a5cced55b990f54eaddaba7307_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
