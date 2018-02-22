<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6cabab37751eacdbae5886c52cd766bc356f7ea026392d089534ed98b8b9e63d extends Twig_Template
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
        $__internal_8a1cf21c4ba9a708b4258db7b9c4e89d37f62eb01a177edb1e96256d6f0aa86b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1cf21c4ba9a708b4258db7b9c4e89d37f62eb01a177edb1e96256d6f0aa86b->enter($__internal_8a1cf21c4ba9a708b4258db7b9c4e89d37f62eb01a177edb1e96256d6f0aa86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_218ee34c864018cbd7729a68a0e38b1b9e0f92a13943bfae7a455e56dc913639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_218ee34c864018cbd7729a68a0e38b1b9e0f92a13943bfae7a455e56dc913639->enter($__internal_218ee34c864018cbd7729a68a0e38b1b9e0f92a13943bfae7a455e56dc913639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8a1cf21c4ba9a708b4258db7b9c4e89d37f62eb01a177edb1e96256d6f0aa86b->leave($__internal_8a1cf21c4ba9a708b4258db7b9c4e89d37f62eb01a177edb1e96256d6f0aa86b_prof);

        
        $__internal_218ee34c864018cbd7729a68a0e38b1b9e0f92a13943bfae7a455e56dc913639->leave($__internal_218ee34c864018cbd7729a68a0e38b1b9e0f92a13943bfae7a455e56dc913639_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
