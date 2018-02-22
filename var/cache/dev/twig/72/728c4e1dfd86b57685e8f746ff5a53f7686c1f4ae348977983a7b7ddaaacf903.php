<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_791537bf8dfdb7f2858db77c0cd05c4d6ab95c0be5cca77e969ad85799e9a74b extends Twig_Template
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
        $__internal_387897cba7d7fb539477b11a529f8957b20c74e1cc2e7d829fe6a6973697bb5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_387897cba7d7fb539477b11a529f8957b20c74e1cc2e7d829fe6a6973697bb5b->enter($__internal_387897cba7d7fb539477b11a529f8957b20c74e1cc2e7d829fe6a6973697bb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_bfab768ebab31b8cf61ee2a233cd558fdf1c786b0e9df4151f6957004cf8dfab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfab768ebab31b8cf61ee2a233cd558fdf1c786b0e9df4151f6957004cf8dfab->enter($__internal_bfab768ebab31b8cf61ee2a233cd558fdf1c786b0e9df4151f6957004cf8dfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_387897cba7d7fb539477b11a529f8957b20c74e1cc2e7d829fe6a6973697bb5b->leave($__internal_387897cba7d7fb539477b11a529f8957b20c74e1cc2e7d829fe6a6973697bb5b_prof);

        
        $__internal_bfab768ebab31b8cf61ee2a233cd558fdf1c786b0e9df4151f6957004cf8dfab->leave($__internal_bfab768ebab31b8cf61ee2a233cd558fdf1c786b0e9df4151f6957004cf8dfab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
