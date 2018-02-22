<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_535e2553630556e984066bb36f8542bc8b0e6dbaf8e9a5f97ee11de5c5b8e8e3 extends Twig_Template
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
        $__internal_3050601259cd613f7d49de7bcfe9ebfced767e45a4142fa7b2bbe977c98211cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3050601259cd613f7d49de7bcfe9ebfced767e45a4142fa7b2bbe977c98211cb->enter($__internal_3050601259cd613f7d49de7bcfe9ebfced767e45a4142fa7b2bbe977c98211cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_810b40f62c98fdad11ff2e8c726cd7edcb7dd87f0f6fbc96056ad9575a4f300a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_810b40f62c98fdad11ff2e8c726cd7edcb7dd87f0f6fbc96056ad9575a4f300a->enter($__internal_810b40f62c98fdad11ff2e8c726cd7edcb7dd87f0f6fbc96056ad9575a4f300a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3050601259cd613f7d49de7bcfe9ebfced767e45a4142fa7b2bbe977c98211cb->leave($__internal_3050601259cd613f7d49de7bcfe9ebfced767e45a4142fa7b2bbe977c98211cb_prof);

        
        $__internal_810b40f62c98fdad11ff2e8c726cd7edcb7dd87f0f6fbc96056ad9575a4f300a->leave($__internal_810b40f62c98fdad11ff2e8c726cd7edcb7dd87f0f6fbc96056ad9575a4f300a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
