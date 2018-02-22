<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_7f28fd1f1225b241f057f67755e9c90be7c08954a290cba2f63a3d464493941c extends Twig_Template
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
        $__internal_6103ea50511a20a4a9bb96888d6ca48f7ab3296807a833fe0c99d67c5c9cb877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6103ea50511a20a4a9bb96888d6ca48f7ab3296807a833fe0c99d67c5c9cb877->enter($__internal_6103ea50511a20a4a9bb96888d6ca48f7ab3296807a833fe0c99d67c5c9cb877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_31281489f5a8da8e70e17e7271c89ef306647b5d63a59908ebcbce133745355f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31281489f5a8da8e70e17e7271c89ef306647b5d63a59908ebcbce133745355f->enter($__internal_31281489f5a8da8e70e17e7271c89ef306647b5d63a59908ebcbce133745355f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_6103ea50511a20a4a9bb96888d6ca48f7ab3296807a833fe0c99d67c5c9cb877->leave($__internal_6103ea50511a20a4a9bb96888d6ca48f7ab3296807a833fe0c99d67c5c9cb877_prof);

        
        $__internal_31281489f5a8da8e70e17e7271c89ef306647b5d63a59908ebcbce133745355f->leave($__internal_31281489f5a8da8e70e17e7271c89ef306647b5d63a59908ebcbce133745355f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
