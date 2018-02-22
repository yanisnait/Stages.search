<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d47b2ecb391985be0a831366de2b6073a49bf30aee92f3a3bfd6b288194fef1d extends Twig_Template
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
        $__internal_38c17546d2f59b3eca06abe2a50712062ea271fab25d7a2f4075a79e5b07d3f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c17546d2f59b3eca06abe2a50712062ea271fab25d7a2f4075a79e5b07d3f5->enter($__internal_38c17546d2f59b3eca06abe2a50712062ea271fab25d7a2f4075a79e5b07d3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_674615ded96ce25bca11518bb7d7ef9b192f742964ed75abf674e33b139058ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674615ded96ce25bca11518bb7d7ef9b192f742964ed75abf674e33b139058ce->enter($__internal_674615ded96ce25bca11518bb7d7ef9b192f742964ed75abf674e33b139058ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_38c17546d2f59b3eca06abe2a50712062ea271fab25d7a2f4075a79e5b07d3f5->leave($__internal_38c17546d2f59b3eca06abe2a50712062ea271fab25d7a2f4075a79e5b07d3f5_prof);

        
        $__internal_674615ded96ce25bca11518bb7d7ef9b192f742964ed75abf674e33b139058ce->leave($__internal_674615ded96ce25bca11518bb7d7ef9b192f742964ed75abf674e33b139058ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
