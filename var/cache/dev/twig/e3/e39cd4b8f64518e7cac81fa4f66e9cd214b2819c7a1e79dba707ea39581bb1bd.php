<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7b51a0edf4865f6aa088e920f0f8a812639e95624fbc714786856273690410fc extends Twig_Template
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
        $__internal_35bc02d88bfdc57df4b1059a4561e508ad70104a423a564b71bdc7475703d257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35bc02d88bfdc57df4b1059a4561e508ad70104a423a564b71bdc7475703d257->enter($__internal_35bc02d88bfdc57df4b1059a4561e508ad70104a423a564b71bdc7475703d257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_1071fd5f56c284419ba52ab14193c37b85a5a57f06c50e69452f0c0d7f8c5dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1071fd5f56c284419ba52ab14193c37b85a5a57f06c50e69452f0c0d7f8c5dad->enter($__internal_1071fd5f56c284419ba52ab14193c37b85a5a57f06c50e69452f0c0d7f8c5dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_35bc02d88bfdc57df4b1059a4561e508ad70104a423a564b71bdc7475703d257->leave($__internal_35bc02d88bfdc57df4b1059a4561e508ad70104a423a564b71bdc7475703d257_prof);

        
        $__internal_1071fd5f56c284419ba52ab14193c37b85a5a57f06c50e69452f0c0d7f8c5dad->leave($__internal_1071fd5f56c284419ba52ab14193c37b85a5a57f06c50e69452f0c0d7f8c5dad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
