<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_86e6701c8cb9222f051072424cca51a5bdf3003c44c0743f27ac53aeb21bceb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23e2fb27d65374cdbd79e6bf3a23299bf4bb3e9f3b33a5a833ba6015c8460519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e2fb27d65374cdbd79e6bf3a23299bf4bb3e9f3b33a5a833ba6015c8460519->enter($__internal_23e2fb27d65374cdbd79e6bf3a23299bf4bb3e9f3b33a5a833ba6015c8460519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_02f6b0864ae07ee6ec3eab8c21451b426a256af0163bfcae0e063b42bd60f1c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f6b0864ae07ee6ec3eab8c21451b426a256af0163bfcae0e063b42bd60f1c5->enter($__internal_02f6b0864ae07ee6ec3eab8c21451b426a256af0163bfcae0e063b42bd60f1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23e2fb27d65374cdbd79e6bf3a23299bf4bb3e9f3b33a5a833ba6015c8460519->leave($__internal_23e2fb27d65374cdbd79e6bf3a23299bf4bb3e9f3b33a5a833ba6015c8460519_prof);

        
        $__internal_02f6b0864ae07ee6ec3eab8c21451b426a256af0163bfcae0e063b42bd60f1c5->leave($__internal_02f6b0864ae07ee6ec3eab8c21451b426a256af0163bfcae0e063b42bd60f1c5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8083b38b53cb392d3b270b3d29b6dcc7497f7c4ff3ba765c4258267c0e7f28d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8083b38b53cb392d3b270b3d29b6dcc7497f7c4ff3ba765c4258267c0e7f28d4->enter($__internal_8083b38b53cb392d3b270b3d29b6dcc7497f7c4ff3ba765c4258267c0e7f28d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d33328fc15389fb279c08aa9bf7e420b749a986a01c980f3ae29e015f212b121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33328fc15389fb279c08aa9bf7e420b749a986a01c980f3ae29e015f212b121->enter($__internal_d33328fc15389fb279c08aa9bf7e420b749a986a01c980f3ae29e015f212b121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d33328fc15389fb279c08aa9bf7e420b749a986a01c980f3ae29e015f212b121->leave($__internal_d33328fc15389fb279c08aa9bf7e420b749a986a01c980f3ae29e015f212b121_prof);

        
        $__internal_8083b38b53cb392d3b270b3d29b6dcc7497f7c4ff3ba765c4258267c0e7f28d4->leave($__internal_8083b38b53cb392d3b270b3d29b6dcc7497f7c4ff3ba765c4258267c0e7f28d4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d6fa9482749f191d330fde5c982c36f118b26a6398a9c23887d346609721019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d6fa9482749f191d330fde5c982c36f118b26a6398a9c23887d346609721019->enter($__internal_4d6fa9482749f191d330fde5c982c36f118b26a6398a9c23887d346609721019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fec1a454b6736c871fabbee4f78f7095539da81409be6373b55365818f58df53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec1a454b6736c871fabbee4f78f7095539da81409be6373b55365818f58df53->enter($__internal_fec1a454b6736c871fabbee4f78f7095539da81409be6373b55365818f58df53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_fec1a454b6736c871fabbee4f78f7095539da81409be6373b55365818f58df53->leave($__internal_fec1a454b6736c871fabbee4f78f7095539da81409be6373b55365818f58df53_prof);

        
        $__internal_4d6fa9482749f191d330fde5c982c36f118b26a6398a9c23887d346609721019->leave($__internal_4d6fa9482749f191d330fde5c982c36f118b26a6398a9c23887d346609721019_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
