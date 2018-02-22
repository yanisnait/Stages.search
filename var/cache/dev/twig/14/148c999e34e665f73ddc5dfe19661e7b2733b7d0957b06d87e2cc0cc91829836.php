<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ca11c23d6bba63ce97502bd2fd5d93694b5e4d8b5852f43118532dcae14e6b20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a63cb8f83b53e9634e08002205b265618114d454d0d0cb8e01866b5b1000f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a63cb8f83b53e9634e08002205b265618114d454d0d0cb8e01866b5b1000f9d->enter($__internal_5a63cb8f83b53e9634e08002205b265618114d454d0d0cb8e01866b5b1000f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_5cb67077f43b3df0337befab346251340654fae1fcb667023ba43a621a00bfb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb67077f43b3df0337befab346251340654fae1fcb667023ba43a621a00bfb2->enter($__internal_5cb67077f43b3df0337befab346251340654fae1fcb667023ba43a621a00bfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5a63cb8f83b53e9634e08002205b265618114d454d0d0cb8e01866b5b1000f9d->leave($__internal_5a63cb8f83b53e9634e08002205b265618114d454d0d0cb8e01866b5b1000f9d_prof);

        
        $__internal_5cb67077f43b3df0337befab346251340654fae1fcb667023ba43a621a00bfb2->leave($__internal_5cb67077f43b3df0337befab346251340654fae1fcb667023ba43a621a00bfb2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_aabe4dda8c413f30df9b6304d337586f2476b564ccfc15aa9723b6de32fe4838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aabe4dda8c413f30df9b6304d337586f2476b564ccfc15aa9723b6de32fe4838->enter($__internal_aabe4dda8c413f30df9b6304d337586f2476b564ccfc15aa9723b6de32fe4838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2b893bbad0579574ba3088dd0593ef954d68da875ccd55bd98a50910e66cfb72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b893bbad0579574ba3088dd0593ef954d68da875ccd55bd98a50910e66cfb72->enter($__internal_2b893bbad0579574ba3088dd0593ef954d68da875ccd55bd98a50910e66cfb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2b893bbad0579574ba3088dd0593ef954d68da875ccd55bd98a50910e66cfb72->leave($__internal_2b893bbad0579574ba3088dd0593ef954d68da875ccd55bd98a50910e66cfb72_prof);

        
        $__internal_aabe4dda8c413f30df9b6304d337586f2476b564ccfc15aa9723b6de32fe4838->leave($__internal_aabe4dda8c413f30df9b6304d337586f2476b564ccfc15aa9723b6de32fe4838_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
