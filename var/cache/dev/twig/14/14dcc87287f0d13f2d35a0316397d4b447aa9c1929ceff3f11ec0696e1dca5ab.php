<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_88c51502ef9b42a321b6c5a157cbe2b95725ba5ecf08b0993a360e7a1cfa708c extends Twig_Template
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
        $__internal_6f95cb41858e7ace3d642b1d6bc1c9664b6c1d12649e92e3c268ed52f45d230a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f95cb41858e7ace3d642b1d6bc1c9664b6c1d12649e92e3c268ed52f45d230a->enter($__internal_6f95cb41858e7ace3d642b1d6bc1c9664b6c1d12649e92e3c268ed52f45d230a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_6f7899a9eea827a309135a6c78239932e4c3856228643de2e62e6b8a9ad2c9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7899a9eea827a309135a6c78239932e4c3856228643de2e62e6b8a9ad2c9da->enter($__internal_6f7899a9eea827a309135a6c78239932e4c3856228643de2e62e6b8a9ad2c9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_6f95cb41858e7ace3d642b1d6bc1c9664b6c1d12649e92e3c268ed52f45d230a->leave($__internal_6f95cb41858e7ace3d642b1d6bc1c9664b6c1d12649e92e3c268ed52f45d230a_prof);

        
        $__internal_6f7899a9eea827a309135a6c78239932e4c3856228643de2e62e6b8a9ad2c9da->leave($__internal_6f7899a9eea827a309135a6c78239932e4c3856228643de2e62e6b8a9ad2c9da_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
