<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_cb65465c7247fd7bbf274b8137e93967c84e3849577a6c8ab3bd830ad03dc5af extends Twig_Template
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
        $__internal_829c0f0d796c53d584ba62ce53523f8662df36d59d161064b49ed64732516b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829c0f0d796c53d584ba62ce53523f8662df36d59d161064b49ed64732516b8c->enter($__internal_829c0f0d796c53d584ba62ce53523f8662df36d59d161064b49ed64732516b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_36badacf36c2394210abafcc7e5aa1897d333548b11cc2fa74a7c5f292393790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36badacf36c2394210abafcc7e5aa1897d333548b11cc2fa74a7c5f292393790->enter($__internal_36badacf36c2394210abafcc7e5aa1897d333548b11cc2fa74a7c5f292393790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_829c0f0d796c53d584ba62ce53523f8662df36d59d161064b49ed64732516b8c->leave($__internal_829c0f0d796c53d584ba62ce53523f8662df36d59d161064b49ed64732516b8c_prof);

        
        $__internal_36badacf36c2394210abafcc7e5aa1897d333548b11cc2fa74a7c5f292393790->leave($__internal_36badacf36c2394210abafcc7e5aa1897d333548b11cc2fa74a7c5f292393790_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
", "@Twig/Exception/error.txt.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
