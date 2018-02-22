<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_fae5700e7587502fa7d63bdb45bafe332aab8f4701a3c0e26a79950bc8dd4fc7 extends Twig_Template
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
        $__internal_76aa12c81f447259560deb6c52077f728af22f53355752625b6d8323b0b34355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76aa12c81f447259560deb6c52077f728af22f53355752625b6d8323b0b34355->enter($__internal_76aa12c81f447259560deb6c52077f728af22f53355752625b6d8323b0b34355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_f7cf2c628e92c78817fa05874232b6a20e0974fbec69d6fa6dbd35b3b7a12b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7cf2c628e92c78817fa05874232b6a20e0974fbec69d6fa6dbd35b3b7a12b13->enter($__internal_f7cf2c628e92c78817fa05874232b6a20e0974fbec69d6fa6dbd35b3b7a12b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_76aa12c81f447259560deb6c52077f728af22f53355752625b6d8323b0b34355->leave($__internal_76aa12c81f447259560deb6c52077f728af22f53355752625b6d8323b0b34355_prof);

        
        $__internal_f7cf2c628e92c78817fa05874232b6a20e0974fbec69d6fa6dbd35b3b7a12b13->leave($__internal_f7cf2c628e92c78817fa05874232b6a20e0974fbec69d6fa6dbd35b3b7a12b13_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
