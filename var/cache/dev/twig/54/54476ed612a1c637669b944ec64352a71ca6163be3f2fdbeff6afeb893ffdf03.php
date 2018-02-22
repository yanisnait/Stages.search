<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_149ae76f817f81d8ee33ff1f36c9389eedbaddb20d6042755203a8fd564f54eb extends Twig_Template
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
        $__internal_bb1306cb80a8e46f8e2733257d7a2e4afc47da5a2a5f26a2106d60088f290192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb1306cb80a8e46f8e2733257d7a2e4afc47da5a2a5f26a2106d60088f290192->enter($__internal_bb1306cb80a8e46f8e2733257d7a2e4afc47da5a2a5f26a2106d60088f290192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_12bc4d307c81fef3672b5d4ca3f1d2af0172c36e3b7f3727b569c2185fe25e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12bc4d307c81fef3672b5d4ca3f1d2af0172c36e3b7f3727b569c2185fe25e5f->enter($__internal_12bc4d307c81fef3672b5d4ca3f1d2af0172c36e3b7f3727b569c2185fe25e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_bb1306cb80a8e46f8e2733257d7a2e4afc47da5a2a5f26a2106d60088f290192->leave($__internal_bb1306cb80a8e46f8e2733257d7a2e4afc47da5a2a5f26a2106d60088f290192_prof);

        
        $__internal_12bc4d307c81fef3672b5d4ca3f1d2af0172c36e3b7f3727b569c2185fe25e5f->leave($__internal_12bc4d307c81fef3672b5d4ca3f1d2af0172c36e3b7f3727b569c2185fe25e5f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
