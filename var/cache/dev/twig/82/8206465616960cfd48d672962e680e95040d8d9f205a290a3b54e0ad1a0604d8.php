<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_d4aa22f0344ac1cbe2a03d3a13ee5a9f5368b39fabbe7c339ac0d29b83043419 extends Twig_Template
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
        $__internal_e28db59f0879d92f818745712a345d0135250db0decb6dfc73e25a6c005fd41d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28db59f0879d92f818745712a345d0135250db0decb6dfc73e25a6c005fd41d->enter($__internal_e28db59f0879d92f818745712a345d0135250db0decb6dfc73e25a6c005fd41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_74f6aa90cc7bedb10b7ca1b19616ee4bba8a805be6a3b24c51839b1662e319af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f6aa90cc7bedb10b7ca1b19616ee4bba8a805be6a3b24c51839b1662e319af->enter($__internal_74f6aa90cc7bedb10b7ca1b19616ee4bba8a805be6a3b24c51839b1662e319af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_e28db59f0879d92f818745712a345d0135250db0decb6dfc73e25a6c005fd41d->leave($__internal_e28db59f0879d92f818745712a345d0135250db0decb6dfc73e25a6c005fd41d_prof);

        
        $__internal_74f6aa90cc7bedb10b7ca1b19616ee4bba8a805be6a3b24c51839b1662e319af->leave($__internal_74f6aa90cc7bedb10b7ca1b19616ee4bba8a805be6a3b24c51839b1662e319af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
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
", "@Twig/Exception/traces.xml.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
