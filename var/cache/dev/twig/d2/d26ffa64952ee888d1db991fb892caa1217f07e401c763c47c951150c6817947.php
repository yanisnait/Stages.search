<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_655f6cd5607925ffaaef60e0206f5c565075db1851ef816fd69954227b44c32e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_1cb4f60e05b79a7a1c9db8d7ce26da310594bf1d2a25a201ef11c296119951f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb4f60e05b79a7a1c9db8d7ce26da310594bf1d2a25a201ef11c296119951f8->enter($__internal_1cb4f60e05b79a7a1c9db8d7ce26da310594bf1d2a25a201ef11c296119951f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_36e81da84018b868f9d5b31a6ed276f2087c1c156cdc3c525c77ffe19d6eeb8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e81da84018b868f9d5b31a6ed276f2087c1c156cdc3c525c77ffe19d6eeb8d->enter($__internal_36e81da84018b868f9d5b31a6ed276f2087c1c156cdc3c525c77ffe19d6eeb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cb4f60e05b79a7a1c9db8d7ce26da310594bf1d2a25a201ef11c296119951f8->leave($__internal_1cb4f60e05b79a7a1c9db8d7ce26da310594bf1d2a25a201ef11c296119951f8_prof);

        
        $__internal_36e81da84018b868f9d5b31a6ed276f2087c1c156cdc3c525c77ffe19d6eeb8d->leave($__internal_36e81da84018b868f9d5b31a6ed276f2087c1c156cdc3c525c77ffe19d6eeb8d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_892b818ccefaa7118f9c3cdf2e99e07c21464f0babcb6cdaf2eb8cd21d8fdac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892b818ccefaa7118f9c3cdf2e99e07c21464f0babcb6cdaf2eb8cd21d8fdac3->enter($__internal_892b818ccefaa7118f9c3cdf2e99e07c21464f0babcb6cdaf2eb8cd21d8fdac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ab871aa4b010a47959ba59b62150974153018c5c958c86b1cb5aa3f425ab1784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab871aa4b010a47959ba59b62150974153018c5c958c86b1cb5aa3f425ab1784->enter($__internal_ab871aa4b010a47959ba59b62150974153018c5c958c86b1cb5aa3f425ab1784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ab871aa4b010a47959ba59b62150974153018c5c958c86b1cb5aa3f425ab1784->leave($__internal_ab871aa4b010a47959ba59b62150974153018c5c958c86b1cb5aa3f425ab1784_prof);

        
        $__internal_892b818ccefaa7118f9c3cdf2e99e07c21464f0babcb6cdaf2eb8cd21d8fdac3->leave($__internal_892b818ccefaa7118f9c3cdf2e99e07c21464f0babcb6cdaf2eb8cd21d8fdac3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
