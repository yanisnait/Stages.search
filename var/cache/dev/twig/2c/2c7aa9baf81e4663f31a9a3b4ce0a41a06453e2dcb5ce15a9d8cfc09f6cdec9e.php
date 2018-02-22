<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_95ad4494afc40cd049c2ae1136a6097804732ceba0542bf80e4582e84d4d07af extends Twig_Template
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
        $__internal_c7caeaacd0439d877f701ad9b807e090f873ee46518b29f750baa94b5a61a9a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7caeaacd0439d877f701ad9b807e090f873ee46518b29f750baa94b5a61a9a7->enter($__internal_c7caeaacd0439d877f701ad9b807e090f873ee46518b29f750baa94b5a61a9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_50d3a394c5d0eaff5c7fe3e05af0ffd758b8c74438d7b696fb0bfd53e34ccb29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d3a394c5d0eaff5c7fe3e05af0ffd758b8c74438d7b696fb0bfd53e34ccb29->enter($__internal_50d3a394c5d0eaff5c7fe3e05af0ffd758b8c74438d7b696fb0bfd53e34ccb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_c7caeaacd0439d877f701ad9b807e090f873ee46518b29f750baa94b5a61a9a7->leave($__internal_c7caeaacd0439d877f701ad9b807e090f873ee46518b29f750baa94b5a61a9a7_prof);

        
        $__internal_50d3a394c5d0eaff5c7fe3e05af0ffd758b8c74438d7b696fb0bfd53e34ccb29->leave($__internal_50d3a394c5d0eaff5c7fe3e05af0ffd758b8c74438d7b696fb0bfd53e34ccb29_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
