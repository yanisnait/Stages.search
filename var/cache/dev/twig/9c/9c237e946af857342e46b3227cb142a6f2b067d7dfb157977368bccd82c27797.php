<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_4f939123771267ba26715967eb734c7c99034dbbe6f31b6ac7196365dc767bd1 extends Twig_Template
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
        $__internal_c5d6d438ee12ee3461ee79cd2c954f79ac0a97fa9572a2b6c4d44bcfa6b28cdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d6d438ee12ee3461ee79cd2c954f79ac0a97fa9572a2b6c4d44bcfa6b28cdc->enter($__internal_c5d6d438ee12ee3461ee79cd2c954f79ac0a97fa9572a2b6c4d44bcfa6b28cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_4cba4b2db6f9a15a3c1b7a97d342ba77c398f4ea8f6aa06e5088cceddeb24626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cba4b2db6f9a15a3c1b7a97d342ba77c398f4ea8f6aa06e5088cceddeb24626->enter($__internal_4cba4b2db6f9a15a3c1b7a97d342ba77c398f4ea8f6aa06e5088cceddeb24626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_c5d6d438ee12ee3461ee79cd2c954f79ac0a97fa9572a2b6c4d44bcfa6b28cdc->leave($__internal_c5d6d438ee12ee3461ee79cd2c954f79ac0a97fa9572a2b6c4d44bcfa6b28cdc_prof);

        
        $__internal_4cba4b2db6f9a15a3c1b7a97d342ba77c398f4ea8f6aa06e5088cceddeb24626->leave($__internal_4cba4b2db6f9a15a3c1b7a97d342ba77c398f4ea8f6aa06e5088cceddeb24626_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
