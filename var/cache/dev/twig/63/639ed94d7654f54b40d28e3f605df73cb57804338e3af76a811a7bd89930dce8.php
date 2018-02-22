<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_d285567643b793f9d64014a575a53a35eaedfe268030b0c978a1a640ac4fcbe0 extends Twig_Template
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
        $__internal_e63d87adc808a5cba0114e972a2744a26c40d01eb848a58589dba98ce44ab1b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63d87adc808a5cba0114e972a2744a26c40d01eb848a58589dba98ce44ab1b3->enter($__internal_e63d87adc808a5cba0114e972a2744a26c40d01eb848a58589dba98ce44ab1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_a6b2f0b2c082fe9f2bda5666b0f4a56719a4f00ad9b98ed8a25215dca5da0d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b2f0b2c082fe9f2bda5666b0f4a56719a4f00ad9b98ed8a25215dca5da0d2a->enter($__internal_a6b2f0b2c082fe9f2bda5666b0f4a56719a4f00ad9b98ed8a25215dca5da0d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_e63d87adc808a5cba0114e972a2744a26c40d01eb848a58589dba98ce44ab1b3->leave($__internal_e63d87adc808a5cba0114e972a2744a26c40d01eb848a58589dba98ce44ab1b3_prof);

        
        $__internal_a6b2f0b2c082fe9f2bda5666b0f4a56719a4f00ad9b98ed8a25215dca5da0d2a->leave($__internal_a6b2f0b2c082fe9f2bda5666b0f4a56719a4f00ad9b98ed8a25215dca5da0d2a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
