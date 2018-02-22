<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_8cee4d9cf1d5bc1e77632632f664a166d46d11e9659a6a9e1ffd27a67bdb6ec0 extends Twig_Template
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
        $__internal_d25cbfa28f09a982700d8d2e16ac2653828af5791b5301c6f07a68e159d9b642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d25cbfa28f09a982700d8d2e16ac2653828af5791b5301c6f07a68e159d9b642->enter($__internal_d25cbfa28f09a982700d8d2e16ac2653828af5791b5301c6f07a68e159d9b642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_d46458e624400349cbec4e1b1c78250de1dc440a9826afd6c5f15295af6fff2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46458e624400349cbec4e1b1c78250de1dc440a9826afd6c5f15295af6fff2c->enter($__internal_d46458e624400349cbec4e1b1c78250de1dc440a9826afd6c5f15295af6fff2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_d25cbfa28f09a982700d8d2e16ac2653828af5791b5301c6f07a68e159d9b642->leave($__internal_d25cbfa28f09a982700d8d2e16ac2653828af5791b5301c6f07a68e159d9b642_prof);

        
        $__internal_d46458e624400349cbec4e1b1c78250de1dc440a9826afd6c5f15295af6fff2c->leave($__internal_d46458e624400349cbec4e1b1c78250de1dc440a9826afd6c5f15295af6fff2c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
