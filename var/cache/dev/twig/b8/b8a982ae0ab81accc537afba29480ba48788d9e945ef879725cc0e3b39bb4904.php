<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_8e4292a420228e25555c3d514bb8b97b7b1351f94ef41943f6ee930f569ff334 extends Twig_Template
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
        $__internal_12964b4da0b2d3223956979a9a8eacb21ab2d96c7c0103841c9ec64858674047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12964b4da0b2d3223956979a9a8eacb21ab2d96c7c0103841c9ec64858674047->enter($__internal_12964b4da0b2d3223956979a9a8eacb21ab2d96c7c0103841c9ec64858674047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_ac0526dc208fea4e5435ff622fb9fe430be2d8f6490328e95ac49b111ce726fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac0526dc208fea4e5435ff622fb9fe430be2d8f6490328e95ac49b111ce726fc->enter($__internal_ac0526dc208fea4e5435ff622fb9fe430be2d8f6490328e95ac49b111ce726fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_12964b4da0b2d3223956979a9a8eacb21ab2d96c7c0103841c9ec64858674047->leave($__internal_12964b4da0b2d3223956979a9a8eacb21ab2d96c7c0103841c9ec64858674047_prof);

        
        $__internal_ac0526dc208fea4e5435ff622fb9fe430be2d8f6490328e95ac49b111ce726fc->leave($__internal_ac0526dc208fea4e5435ff622fb9fe430be2d8f6490328e95ac49b111ce726fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
