<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d763620059b3e149eb40c935045f5f8fd47839ef3094bfb13326a2e7210bd2bf extends Twig_Template
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
        $__internal_3a2a95aea4b08184bcf00cd4d138ea6872fd8f76cc3af0fbb2e4442e1a8e5c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2a95aea4b08184bcf00cd4d138ea6872fd8f76cc3af0fbb2e4442e1a8e5c3d->enter($__internal_3a2a95aea4b08184bcf00cd4d138ea6872fd8f76cc3af0fbb2e4442e1a8e5c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_5bbfbcb37aaca434e837a2b6ad98396ae80513d19200344577c4557fb2382275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bbfbcb37aaca434e837a2b6ad98396ae80513d19200344577c4557fb2382275->enter($__internal_5bbfbcb37aaca434e837a2b6ad98396ae80513d19200344577c4557fb2382275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_3a2a95aea4b08184bcf00cd4d138ea6872fd8f76cc3af0fbb2e4442e1a8e5c3d->leave($__internal_3a2a95aea4b08184bcf00cd4d138ea6872fd8f76cc3af0fbb2e4442e1a8e5c3d_prof);

        
        $__internal_5bbfbcb37aaca434e837a2b6ad98396ae80513d19200344577c4557fb2382275->leave($__internal_5bbfbcb37aaca434e837a2b6ad98396ae80513d19200344577c4557fb2382275_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
