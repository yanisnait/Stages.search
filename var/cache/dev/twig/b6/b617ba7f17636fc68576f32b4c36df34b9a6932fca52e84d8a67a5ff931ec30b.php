<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_8ea9cd42eacdb2c7c14b5609a5e15f56576d458001c7571f7260a08cf46bcd2a extends Twig_Template
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
        $__internal_81dbff9cf10883fb3158a4842d080ac6a54bf77ba3381006633e959f7f70cc1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81dbff9cf10883fb3158a4842d080ac6a54bf77ba3381006633e959f7f70cc1d->enter($__internal_81dbff9cf10883fb3158a4842d080ac6a54bf77ba3381006633e959f7f70cc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_d115c1d4bf0ed4bff4210c9d5f924c87e884bd8cdb7f39c3a5f4a72c394f7d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d115c1d4bf0ed4bff4210c9d5f924c87e884bd8cdb7f39c3a5f4a72c394f7d09->enter($__internal_d115c1d4bf0ed4bff4210c9d5f924c87e884bd8cdb7f39c3a5f4a72c394f7d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_81dbff9cf10883fb3158a4842d080ac6a54bf77ba3381006633e959f7f70cc1d->leave($__internal_81dbff9cf10883fb3158a4842d080ac6a54bf77ba3381006633e959f7f70cc1d_prof);

        
        $__internal_d115c1d4bf0ed4bff4210c9d5f924c87e884bd8cdb7f39c3a5f4a72c394f7d09->leave($__internal_d115c1d4bf0ed4bff4210c9d5f924c87e884bd8cdb7f39c3a5f4a72c394f7d09_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
