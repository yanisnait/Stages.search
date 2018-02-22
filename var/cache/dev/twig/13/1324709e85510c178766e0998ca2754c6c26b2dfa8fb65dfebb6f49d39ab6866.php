<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_13550e4d7cada46a9241fa7701af8749e89e2cb2fc8965bc8ea49a634f55416f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43db7f98fa703e564857cf3df3c9fb448bc6cc1e9f44e2d921cea56ce1476b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43db7f98fa703e564857cf3df3c9fb448bc6cc1e9f44e2d921cea56ce1476b10->enter($__internal_43db7f98fa703e564857cf3df3c9fb448bc6cc1e9f44e2d921cea56ce1476b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_e9cfc85dee9b2cc398a4124055f8e0770da03f0a297e16a116aa1a740bf60feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9cfc85dee9b2cc398a4124055f8e0770da03f0a297e16a116aa1a740bf60feb->enter($__internal_e9cfc85dee9b2cc398a4124055f8e0770da03f0a297e16a116aa1a740bf60feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43db7f98fa703e564857cf3df3c9fb448bc6cc1e9f44e2d921cea56ce1476b10->leave($__internal_43db7f98fa703e564857cf3df3c9fb448bc6cc1e9f44e2d921cea56ce1476b10_prof);

        
        $__internal_e9cfc85dee9b2cc398a4124055f8e0770da03f0a297e16a116aa1a740bf60feb->leave($__internal_e9cfc85dee9b2cc398a4124055f8e0770da03f0a297e16a116aa1a740bf60feb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f541c60f1db1459ba8ad39d4901535795c12cafcba638222fea474016d9b22d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f541c60f1db1459ba8ad39d4901535795c12cafcba638222fea474016d9b22d5->enter($__internal_f541c60f1db1459ba8ad39d4901535795c12cafcba638222fea474016d9b22d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5ea709d071f608eae9b83839216be05b9f0fd4d2e43481a08c40a6bf51a87a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea709d071f608eae9b83839216be05b9f0fd4d2e43481a08c40a6bf51a87a40->enter($__internal_5ea709d071f608eae9b83839216be05b9f0fd4d2e43481a08c40a6bf51a87a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5ea709d071f608eae9b83839216be05b9f0fd4d2e43481a08c40a6bf51a87a40->leave($__internal_5ea709d071f608eae9b83839216be05b9f0fd4d2e43481a08c40a6bf51a87a40_prof);

        
        $__internal_f541c60f1db1459ba8ad39d4901535795c12cafcba638222fea474016d9b22d5->leave($__internal_f541c60f1db1459ba8ad39d4901535795c12cafcba638222fea474016d9b22d5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eccb23b3b2a841d6b192300ebf4cc777e9295d4f4288308e3fb2101aa9da8f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eccb23b3b2a841d6b192300ebf4cc777e9295d4f4288308e3fb2101aa9da8f4c->enter($__internal_eccb23b3b2a841d6b192300ebf4cc777e9295d4f4288308e3fb2101aa9da8f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cb49eec7c9c127c31947f5038e8407cee890e02060d5656b5a8507370e24a70f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb49eec7c9c127c31947f5038e8407cee890e02060d5656b5a8507370e24a70f->enter($__internal_cb49eec7c9c127c31947f5038e8407cee890e02060d5656b5a8507370e24a70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cb49eec7c9c127c31947f5038e8407cee890e02060d5656b5a8507370e24a70f->leave($__internal_cb49eec7c9c127c31947f5038e8407cee890e02060d5656b5a8507370e24a70f_prof);

        
        $__internal_eccb23b3b2a841d6b192300ebf4cc777e9295d4f4288308e3fb2101aa9da8f4c->leave($__internal_eccb23b3b2a841d6b192300ebf4cc777e9295d4f4288308e3fb2101aa9da8f4c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_49898f9fc523ad55a508d6f4b648794cc1a2c635a2cbd37452ef374060803c5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49898f9fc523ad55a508d6f4b648794cc1a2c635a2cbd37452ef374060803c5c->enter($__internal_49898f9fc523ad55a508d6f4b648794cc1a2c635a2cbd37452ef374060803c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ace366cfa4f137159d7eb9ac09054ff4b440f09af4b946c7185878789e5ba129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace366cfa4f137159d7eb9ac09054ff4b440f09af4b946c7185878789e5ba129->enter($__internal_ace366cfa4f137159d7eb9ac09054ff4b440f09af4b946c7185878789e5ba129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ace366cfa4f137159d7eb9ac09054ff4b440f09af4b946c7185878789e5ba129->leave($__internal_ace366cfa4f137159d7eb9ac09054ff4b440f09af4b946c7185878789e5ba129_prof);

        
        $__internal_49898f9fc523ad55a508d6f4b648794cc1a2c635a2cbd37452ef374060803c5c->leave($__internal_49898f9fc523ad55a508d6f4b648794cc1a2c635a2cbd37452ef374060803c5c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
