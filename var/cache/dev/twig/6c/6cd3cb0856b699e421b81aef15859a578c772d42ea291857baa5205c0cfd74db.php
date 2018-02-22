<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_66dce4732527b25d1417e44d992f03879d620530a23800e50d7339472f7f76a7 extends Twig_Template
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
        $__internal_9b517bdf54168fb99294c974440424a1d5baf87b82d080608883457c09424457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b517bdf54168fb99294c974440424a1d5baf87b82d080608883457c09424457->enter($__internal_9b517bdf54168fb99294c974440424a1d5baf87b82d080608883457c09424457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_b1ce687b6fe286847fc8510e287f4a2c696d1b9293ae8d8137248b81f4d52bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ce687b6fe286847fc8510e287f4a2c696d1b9293ae8d8137248b81f4d52bd7->enter($__internal_b1ce687b6fe286847fc8510e287f4a2c696d1b9293ae8d8137248b81f4d52bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_9b517bdf54168fb99294c974440424a1d5baf87b82d080608883457c09424457->leave($__internal_9b517bdf54168fb99294c974440424a1d5baf87b82d080608883457c09424457_prof);

        
        $__internal_b1ce687b6fe286847fc8510e287f4a2c696d1b9293ae8d8137248b81f4d52bd7->leave($__internal_b1ce687b6fe286847fc8510e287f4a2c696d1b9293ae8d8137248b81f4d52bd7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
