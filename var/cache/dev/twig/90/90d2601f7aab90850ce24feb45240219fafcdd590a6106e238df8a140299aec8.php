<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_da7d5a5aae8245a2b99bc2331ff29782bda6b29c8cec0279619e1e8c76efb29f extends Twig_Template
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
        $__internal_50cdcaa67c156a94c1ca39d2bddf60a6ace7afc544b67d1343e7333059c4b697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50cdcaa67c156a94c1ca39d2bddf60a6ace7afc544b67d1343e7333059c4b697->enter($__internal_50cdcaa67c156a94c1ca39d2bddf60a6ace7afc544b67d1343e7333059c4b697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_05569194f9ea6babd5482cbef2aec605f41b8d044418324bda12f4984b65beba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05569194f9ea6babd5482cbef2aec605f41b8d044418324bda12f4984b65beba->enter($__internal_05569194f9ea6babd5482cbef2aec605f41b8d044418324bda12f4984b65beba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_50cdcaa67c156a94c1ca39d2bddf60a6ace7afc544b67d1343e7333059c4b697->leave($__internal_50cdcaa67c156a94c1ca39d2bddf60a6ace7afc544b67d1343e7333059c4b697_prof);

        
        $__internal_05569194f9ea6babd5482cbef2aec605f41b8d044418324bda12f4984b65beba->leave($__internal_05569194f9ea6babd5482cbef2aec605f41b8d044418324bda12f4984b65beba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
