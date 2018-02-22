<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_c7cd910b162ba89498b51c84e56b012df48bfa70eb97c22bcbb2ed8bc64c9c6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_46253aafcc62aded81a1b7655bd5148f920942b967a54437bc379aef3b71ed4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46253aafcc62aded81a1b7655bd5148f920942b967a54437bc379aef3b71ed4c->enter($__internal_46253aafcc62aded81a1b7655bd5148f920942b967a54437bc379aef3b71ed4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_471fc86cca9b6af5cc84cf5083f8188c837793c3fbaf261e5e685cc99c29e75f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471fc86cca9b6af5cc84cf5083f8188c837793c3fbaf261e5e685cc99c29e75f->enter($__internal_471fc86cca9b6af5cc84cf5083f8188c837793c3fbaf261e5e685cc99c29e75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46253aafcc62aded81a1b7655bd5148f920942b967a54437bc379aef3b71ed4c->leave($__internal_46253aafcc62aded81a1b7655bd5148f920942b967a54437bc379aef3b71ed4c_prof);

        
        $__internal_471fc86cca9b6af5cc84cf5083f8188c837793c3fbaf261e5e685cc99c29e75f->leave($__internal_471fc86cca9b6af5cc84cf5083f8188c837793c3fbaf261e5e685cc99c29e75f_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9a5aa57e579f78c1a73e25869baf599c71044ee13d2563fe485832c8daeb543d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5aa57e579f78c1a73e25869baf599c71044ee13d2563fe485832c8daeb543d->enter($__internal_9a5aa57e579f78c1a73e25869baf599c71044ee13d2563fe485832c8daeb543d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ad21dd76912b83aabe5584f412379705441e93f0d91b9ed2e9ff0509ff8e3fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad21dd76912b83aabe5584f412379705441e93f0d91b9ed2e9ff0509ff8e3fcb->enter($__internal_ad21dd76912b83aabe5584f412379705441e93f0d91b9ed2e9ff0509ff8e3fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_ad21dd76912b83aabe5584f412379705441e93f0d91b9ed2e9ff0509ff8e3fcb->leave($__internal_ad21dd76912b83aabe5584f412379705441e93f0d91b9ed2e9ff0509ff8e3fcb_prof);

        
        $__internal_9a5aa57e579f78c1a73e25869baf599c71044ee13d2563fe485832c8daeb543d->leave($__internal_9a5aa57e579f78c1a73e25869baf599c71044ee13d2563fe485832c8daeb543d_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_760e30933602ab3c8c74b533ee8f9991c4816e7a1e9d363032d9c3522e26ac66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760e30933602ab3c8c74b533ee8f9991c4816e7a1e9d363032d9c3522e26ac66->enter($__internal_760e30933602ab3c8c74b533ee8f9991c4816e7a1e9d363032d9c3522e26ac66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a11cbe186695cd187c776c0bb53bffe30e2d9025fb929f55f274d9e2ebffe623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a11cbe186695cd187c776c0bb53bffe30e2d9025fb929f55f274d9e2ebffe623->enter($__internal_a11cbe186695cd187c776c0bb53bffe30e2d9025fb929f55f274d9e2ebffe623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a11cbe186695cd187c776c0bb53bffe30e2d9025fb929f55f274d9e2ebffe623->leave($__internal_a11cbe186695cd187c776c0bb53bffe30e2d9025fb929f55f274d9e2ebffe623_prof);

        
        $__internal_760e30933602ab3c8c74b533ee8f9991c4816e7a1e9d363032d9c3522e26ac66->leave($__internal_760e30933602ab3c8c74b533ee8f9991c4816e7a1e9d363032d9c3522e26ac66_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
