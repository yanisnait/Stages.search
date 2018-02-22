<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c4a6b2a12f966b2d6821d88d3733a497e87f28561b78d9f22f236840ee7ab476 extends Twig_Template
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
        $__internal_e34350b5a6e684167451a693872a0b947d1eac97980e841293caac6b3a803ea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e34350b5a6e684167451a693872a0b947d1eac97980e841293caac6b3a803ea1->enter($__internal_e34350b5a6e684167451a693872a0b947d1eac97980e841293caac6b3a803ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_3804f30358c117293e99b7ef02931ed320f4ee6ec437c3439ce0309c2837bf12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3804f30358c117293e99b7ef02931ed320f4ee6ec437c3439ce0309c2837bf12->enter($__internal_3804f30358c117293e99b7ef02931ed320f4ee6ec437c3439ce0309c2837bf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_e34350b5a6e684167451a693872a0b947d1eac97980e841293caac6b3a803ea1->leave($__internal_e34350b5a6e684167451a693872a0b947d1eac97980e841293caac6b3a803ea1_prof);

        
        $__internal_3804f30358c117293e99b7ef02931ed320f4ee6ec437c3439ce0309c2837bf12->leave($__internal_3804f30358c117293e99b7ef02931ed320f4ee6ec437c3439ce0309c2837bf12_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
