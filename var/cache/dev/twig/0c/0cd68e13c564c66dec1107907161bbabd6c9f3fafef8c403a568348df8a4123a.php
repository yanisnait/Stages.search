<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_c3f20f83b6ce049978be7a416fb7aa1803176f63c2fdec58e56142c3ef53af34 extends Twig_Template
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
        $__internal_763a59c3a2d7899e4fea9b0bd8a2e2a4d580f5677c8073639c4ca61071320e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763a59c3a2d7899e4fea9b0bd8a2e2a4d580f5677c8073639c4ca61071320e2c->enter($__internal_763a59c3a2d7899e4fea9b0bd8a2e2a4d580f5677c8073639c4ca61071320e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_934db60790a5d0c58c0812e813d8291e493e252ea82fb33f535e662962b76c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934db60790a5d0c58c0812e813d8291e493e252ea82fb33f535e662962b76c6f->enter($__internal_934db60790a5d0c58c0812e813d8291e493e252ea82fb33f535e662962b76c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_763a59c3a2d7899e4fea9b0bd8a2e2a4d580f5677c8073639c4ca61071320e2c->leave($__internal_763a59c3a2d7899e4fea9b0bd8a2e2a4d580f5677c8073639c4ca61071320e2c_prof);

        
        $__internal_934db60790a5d0c58c0812e813d8291e493e252ea82fb33f535e662962b76c6f->leave($__internal_934db60790a5d0c58c0812e813d8291e493e252ea82fb33f535e662962b76c6f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
