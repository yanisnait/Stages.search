<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_d71544512b16c6a7c09f496f72a38d156ee58f77dc6f950b5d42f2404719663e extends Twig_Template
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
        $__internal_eacbf0c3a6863748f7b42f2ed9581e14bc7a567315b7421d316e71b927023270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eacbf0c3a6863748f7b42f2ed9581e14bc7a567315b7421d316e71b927023270->enter($__internal_eacbf0c3a6863748f7b42f2ed9581e14bc7a567315b7421d316e71b927023270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_98e0896df432db504f678de4a44343eab1c168b08f31033acb9954d6433486b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e0896df432db504f678de4a44343eab1c168b08f31033acb9954d6433486b4->enter($__internal_98e0896df432db504f678de4a44343eab1c168b08f31033acb9954d6433486b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_eacbf0c3a6863748f7b42f2ed9581e14bc7a567315b7421d316e71b927023270->leave($__internal_eacbf0c3a6863748f7b42f2ed9581e14bc7a567315b7421d316e71b927023270_prof);

        
        $__internal_98e0896df432db504f678de4a44343eab1c168b08f31033acb9954d6433486b4->leave($__internal_98e0896df432db504f678de4a44343eab1c168b08f31033acb9954d6433486b4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
