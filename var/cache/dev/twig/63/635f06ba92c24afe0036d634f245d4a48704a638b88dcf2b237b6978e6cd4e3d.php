<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_4a9e141aeb8c71663ec1ecdca0594691741d28d108b8e7688af91f5232d619a7 extends Twig_Template
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
        $__internal_c83e46b2086ebbb8941d70c4612678b879aa9cca506149e6f5d2e98628ebada3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c83e46b2086ebbb8941d70c4612678b879aa9cca506149e6f5d2e98628ebada3->enter($__internal_c83e46b2086ebbb8941d70c4612678b879aa9cca506149e6f5d2e98628ebada3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_0f87153d2ac8907c118f08b52117fa71a555893afb5c8f06a155e4cef9cddc96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f87153d2ac8907c118f08b52117fa71a555893afb5c8f06a155e4cef9cddc96->enter($__internal_0f87153d2ac8907c118f08b52117fa71a555893afb5c8f06a155e4cef9cddc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_c83e46b2086ebbb8941d70c4612678b879aa9cca506149e6f5d2e98628ebada3->leave($__internal_c83e46b2086ebbb8941d70c4612678b879aa9cca506149e6f5d2e98628ebada3_prof);

        
        $__internal_0f87153d2ac8907c118f08b52117fa71a555893afb5c8f06a155e4cef9cddc96->leave($__internal_0f87153d2ac8907c118f08b52117fa71a555893afb5c8f06a155e4cef9cddc96_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
