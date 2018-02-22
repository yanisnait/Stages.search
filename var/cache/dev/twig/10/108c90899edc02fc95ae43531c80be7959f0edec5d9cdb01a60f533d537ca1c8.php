<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_85447c589d95419fd5733854bbdc005e7473143935bbb01b1d20a1977bd4daf1 extends Twig_Template
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
        $__internal_840b32a36f995417a73eac7acc35506de0baa1f6def2b6ae5816e100d6c62108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_840b32a36f995417a73eac7acc35506de0baa1f6def2b6ae5816e100d6c62108->enter($__internal_840b32a36f995417a73eac7acc35506de0baa1f6def2b6ae5816e100d6c62108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_9849bcb64136fea06d692cabe99a8cb8552213280a0ec2e0c6995ba99530ca75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9849bcb64136fea06d692cabe99a8cb8552213280a0ec2e0c6995ba99530ca75->enter($__internal_9849bcb64136fea06d692cabe99a8cb8552213280a0ec2e0c6995ba99530ca75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_840b32a36f995417a73eac7acc35506de0baa1f6def2b6ae5816e100d6c62108->leave($__internal_840b32a36f995417a73eac7acc35506de0baa1f6def2b6ae5816e100d6c62108_prof);

        
        $__internal_9849bcb64136fea06d692cabe99a8cb8552213280a0ec2e0c6995ba99530ca75->leave($__internal_9849bcb64136fea06d692cabe99a8cb8552213280a0ec2e0c6995ba99530ca75_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
