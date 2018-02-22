<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_1ae111cd69160019eab445c0e127c2359e163bbb22847543c8757fecdf1f82af extends Twig_Template
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
        $__internal_acd65d1e37976c10b5d65a04976b79583cc66d93f2cafa5a865c54e70f41deee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd65d1e37976c10b5d65a04976b79583cc66d93f2cafa5a865c54e70f41deee->enter($__internal_acd65d1e37976c10b5d65a04976b79583cc66d93f2cafa5a865c54e70f41deee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_34ecf119f7507444e0be8f8d6a37c96954f2a62e9e9ab1d642e5f86a2110a7d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ecf119f7507444e0be8f8d6a37c96954f2a62e9e9ab1d642e5f86a2110a7d7->enter($__internal_34ecf119f7507444e0be8f8d6a37c96954f2a62e9e9ab1d642e5f86a2110a7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_acd65d1e37976c10b5d65a04976b79583cc66d93f2cafa5a865c54e70f41deee->leave($__internal_acd65d1e37976c10b5d65a04976b79583cc66d93f2cafa5a865c54e70f41deee_prof);

        
        $__internal_34ecf119f7507444e0be8f8d6a37c96954f2a62e9e9ab1d642e5f86a2110a7d7->leave($__internal_34ecf119f7507444e0be8f8d6a37c96954f2a62e9e9ab1d642e5f86a2110a7d7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
