<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d277f4cab5599514e84d48c4e75f52907c6f83bb13c9c25ff71ea47dbe539c72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9529c5b46af6dfbe440f9c6d2fc4269e8b0210d0977d50f59dc8536c59af123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9529c5b46af6dfbe440f9c6d2fc4269e8b0210d0977d50f59dc8536c59af123->enter($__internal_b9529c5b46af6dfbe440f9c6d2fc4269e8b0210d0977d50f59dc8536c59af123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e0a5b90a459000c423be1f1bd3b729b4c7cdc188585e3d947008ae53dd0c8ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a5b90a459000c423be1f1bd3b729b4c7cdc188585e3d947008ae53dd0c8ebd->enter($__internal_e0a5b90a459000c423be1f1bd3b729b4c7cdc188585e3d947008ae53dd0c8ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9529c5b46af6dfbe440f9c6d2fc4269e8b0210d0977d50f59dc8536c59af123->leave($__internal_b9529c5b46af6dfbe440f9c6d2fc4269e8b0210d0977d50f59dc8536c59af123_prof);

        
        $__internal_e0a5b90a459000c423be1f1bd3b729b4c7cdc188585e3d947008ae53dd0c8ebd->leave($__internal_e0a5b90a459000c423be1f1bd3b729b4c7cdc188585e3d947008ae53dd0c8ebd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ab28c8682e0f66002303a179aadd90c553659c6b26a3b228ba1bcd718070067d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab28c8682e0f66002303a179aadd90c553659c6b26a3b228ba1bcd718070067d->enter($__internal_ab28c8682e0f66002303a179aadd90c553659c6b26a3b228ba1bcd718070067d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_55e988e83cb9b650f93c5e14f22d65b9a4fac41130c70501721d1a3b0076110b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e988e83cb9b650f93c5e14f22d65b9a4fac41130c70501721d1a3b0076110b->enter($__internal_55e988e83cb9b650f93c5e14f22d65b9a4fac41130c70501721d1a3b0076110b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_55e988e83cb9b650f93c5e14f22d65b9a4fac41130c70501721d1a3b0076110b->leave($__internal_55e988e83cb9b650f93c5e14f22d65b9a4fac41130c70501721d1a3b0076110b_prof);

        
        $__internal_ab28c8682e0f66002303a179aadd90c553659c6b26a3b228ba1bcd718070067d->leave($__internal_ab28c8682e0f66002303a179aadd90c553659c6b26a3b228ba1bcd718070067d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
