<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_e55f7bcffb3632520b25e1ec1e74bf2e0a5f5d4a95696c7a66deb2ce49ca4fed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fb39ad5659580f5f4518ae30be6191f0101f4b41786c4fa3874a97016662805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fb39ad5659580f5f4518ae30be6191f0101f4b41786c4fa3874a97016662805->enter($__internal_8fb39ad5659580f5f4518ae30be6191f0101f4b41786c4fa3874a97016662805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_3b457bf801bc36327da4272fc568fefa7c81e334c1ef6786b1ea7614e135b201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b457bf801bc36327da4272fc568fefa7c81e334c1ef6786b1ea7614e135b201->enter($__internal_3b457bf801bc36327da4272fc568fefa7c81e334c1ef6786b1ea7614e135b201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_8fb39ad5659580f5f4518ae30be6191f0101f4b41786c4fa3874a97016662805->leave($__internal_8fb39ad5659580f5f4518ae30be6191f0101f4b41786c4fa3874a97016662805_prof);

        
        $__internal_3b457bf801bc36327da4272fc568fefa7c81e334c1ef6786b1ea7614e135b201->leave($__internal_3b457bf801bc36327da4272fc568fefa7c81e334c1ef6786b1ea7614e135b201_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
