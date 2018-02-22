<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5beff66ccad29ea044e0aa31a90df1568f45cddbf77ca3d4003dd616922a1789 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d276c97e4a0cf44863f07a1cb0c22031fd3095023c26c176d5a768b71c0c5b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d276c97e4a0cf44863f07a1cb0c22031fd3095023c26c176d5a768b71c0c5b2d->enter($__internal_d276c97e4a0cf44863f07a1cb0c22031fd3095023c26c176d5a768b71c0c5b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c9c8c229f9bed5fbeb6ddc326a95751a1f3b0e91179be6c4b8272c80f470b4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c8c229f9bed5fbeb6ddc326a95751a1f3b0e91179be6c4b8272c80f470b4bd->enter($__internal_c9c8c229f9bed5fbeb6ddc326a95751a1f3b0e91179be6c4b8272c80f470b4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d276c97e4a0cf44863f07a1cb0c22031fd3095023c26c176d5a768b71c0c5b2d->leave($__internal_d276c97e4a0cf44863f07a1cb0c22031fd3095023c26c176d5a768b71c0c5b2d_prof);

        
        $__internal_c9c8c229f9bed5fbeb6ddc326a95751a1f3b0e91179be6c4b8272c80f470b4bd->leave($__internal_c9c8c229f9bed5fbeb6ddc326a95751a1f3b0e91179be6c4b8272c80f470b4bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea57bb43b41ea3ee3e0c731801294a4c038a28e682200b2bd4ef04e23368869d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea57bb43b41ea3ee3e0c731801294a4c038a28e682200b2bd4ef04e23368869d->enter($__internal_ea57bb43b41ea3ee3e0c731801294a4c038a28e682200b2bd4ef04e23368869d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ed00020a8c87a485b55fd6a98e643a922d4c83bdef8b35be4d7900d31f8d1d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed00020a8c87a485b55fd6a98e643a922d4c83bdef8b35be4d7900d31f8d1d1c->enter($__internal_ed00020a8c87a485b55fd6a98e643a922d4c83bdef8b35be4d7900d31f8d1d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ed00020a8c87a485b55fd6a98e643a922d4c83bdef8b35be4d7900d31f8d1d1c->leave($__internal_ed00020a8c87a485b55fd6a98e643a922d4c83bdef8b35be4d7900d31f8d1d1c_prof);

        
        $__internal_ea57bb43b41ea3ee3e0c731801294a4c038a28e682200b2bd4ef04e23368869d->leave($__internal_ea57bb43b41ea3ee3e0c731801294a4c038a28e682200b2bd4ef04e23368869d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f41c7238891291ab550afe6b2ae7de79227f86a54929c39bd814c858590065c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f41c7238891291ab550afe6b2ae7de79227f86a54929c39bd814c858590065c5->enter($__internal_f41c7238891291ab550afe6b2ae7de79227f86a54929c39bd814c858590065c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_413705d845690ef8484cec4cdc65326c3cf756b3c904d4ae58b60492ccab3eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413705d845690ef8484cec4cdc65326c3cf756b3c904d4ae58b60492ccab3eee->enter($__internal_413705d845690ef8484cec4cdc65326c3cf756b3c904d4ae58b60492ccab3eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_413705d845690ef8484cec4cdc65326c3cf756b3c904d4ae58b60492ccab3eee->leave($__internal_413705d845690ef8484cec4cdc65326c3cf756b3c904d4ae58b60492ccab3eee_prof);

        
        $__internal_f41c7238891291ab550afe6b2ae7de79227f86a54929c39bd814c858590065c5->leave($__internal_f41c7238891291ab550afe6b2ae7de79227f86a54929c39bd814c858590065c5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5fc90929c2cbea0f1cf7e0c72f75629c33516d312f0355b1431a7efe52c08ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5fc90929c2cbea0f1cf7e0c72f75629c33516d312f0355b1431a7efe52c08ca->enter($__internal_e5fc90929c2cbea0f1cf7e0c72f75629c33516d312f0355b1431a7efe52c08ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7bc926cea100ac35ce95c1d245d6f091151aea6ecdf93c5b212a449926dedf92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc926cea100ac35ce95c1d245d6f091151aea6ecdf93c5b212a449926dedf92->enter($__internal_7bc926cea100ac35ce95c1d245d6f091151aea6ecdf93c5b212a449926dedf92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7bc926cea100ac35ce95c1d245d6f091151aea6ecdf93c5b212a449926dedf92->leave($__internal_7bc926cea100ac35ce95c1d245d6f091151aea6ecdf93c5b212a449926dedf92_prof);

        
        $__internal_e5fc90929c2cbea0f1cf7e0c72f75629c33516d312f0355b1431a7efe52c08ca->leave($__internal_e5fc90929c2cbea0f1cf7e0c72f75629c33516d312f0355b1431a7efe52c08ca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
