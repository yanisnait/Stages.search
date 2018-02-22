<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_f07c5cf5e9751ccd7de81a9dfd6411e6123b915bb4be1c9b75fc660aaf0d5d2c extends Twig_Template
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
        $__internal_1ca9fa21ddc7a462fda3cd5776c8fb8fbe7186a74ad08857f16f4a987ecdcd2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca9fa21ddc7a462fda3cd5776c8fb8fbe7186a74ad08857f16f4a987ecdcd2b->enter($__internal_1ca9fa21ddc7a462fda3cd5776c8fb8fbe7186a74ad08857f16f4a987ecdcd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_562d17b72bca0e7670146eb91e1f255d9ad0f99812eaaccbaf29b28a81df4077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562d17b72bca0e7670146eb91e1f255d9ad0f99812eaaccbaf29b28a81df4077->enter($__internal_562d17b72bca0e7670146eb91e1f255d9ad0f99812eaaccbaf29b28a81df4077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_1ca9fa21ddc7a462fda3cd5776c8fb8fbe7186a74ad08857f16f4a987ecdcd2b->leave($__internal_1ca9fa21ddc7a462fda3cd5776c8fb8fbe7186a74ad08857f16f4a987ecdcd2b_prof);

        
        $__internal_562d17b72bca0e7670146eb91e1f255d9ad0f99812eaaccbaf29b28a81df4077->leave($__internal_562d17b72bca0e7670146eb91e1f255d9ad0f99812eaaccbaf29b28a81df4077_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
