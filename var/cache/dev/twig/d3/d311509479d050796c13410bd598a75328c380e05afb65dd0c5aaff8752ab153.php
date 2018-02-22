<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_ee768b82aaac02430b448a9e605058e3644d37e5345558e3712efd7410a29158 extends Twig_Template
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
        $__internal_1952e0c05f87024045bc01c801d23f2c0ff34312216ee9d1a9ca5d47b1412882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1952e0c05f87024045bc01c801d23f2c0ff34312216ee9d1a9ca5d47b1412882->enter($__internal_1952e0c05f87024045bc01c801d23f2c0ff34312216ee9d1a9ca5d47b1412882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_c47c25e0fb9dbfcb1f6deed4e686c5700b4de26c18f03c8740260c76ffb239ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47c25e0fb9dbfcb1f6deed4e686c5700b4de26c18f03c8740260c76ffb239ed->enter($__internal_c47c25e0fb9dbfcb1f6deed4e686c5700b4de26c18f03c8740260c76ffb239ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_1952e0c05f87024045bc01c801d23f2c0ff34312216ee9d1a9ca5d47b1412882->leave($__internal_1952e0c05f87024045bc01c801d23f2c0ff34312216ee9d1a9ca5d47b1412882_prof);

        
        $__internal_c47c25e0fb9dbfcb1f6deed4e686c5700b4de26c18f03c8740260c76ffb239ed->leave($__internal_c47c25e0fb9dbfcb1f6deed4e686c5700b4de26c18f03c8740260c76ffb239ed_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
