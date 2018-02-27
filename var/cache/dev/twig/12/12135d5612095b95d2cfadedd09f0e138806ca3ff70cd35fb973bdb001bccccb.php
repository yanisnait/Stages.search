<?php

/* SSPlatformBundle:Advert:formEntreprise.html.twig */
class __TwigTemplate_63d838a1451e747ecca64a3f896e9a163d16d1a635da65f1e71bf627db02afd1 extends Twig_Template
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
        $__internal_5cdcc1959e70c627c4b3eedfd6b16821f48479814e844cf48962c7e991151810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cdcc1959e70c627c4b3eedfd6b16821f48479814e844cf48962c7e991151810->enter($__internal_5cdcc1959e70c627c4b3eedfd6b16821f48479814e844cf48962c7e991151810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:formEntreprise.html.twig"));

        $__internal_25d608368a80e9c975e9109f6cf58b9b35a98ce7254adb3bddf2f8d856123032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d608368a80e9c975e9109f6cf58b9b35a98ce7254adb3bddf2f8d856123032->enter($__internal_25d608368a80e9c975e9109f6cf58b9b35a98ce7254adb3bddf2f8d856123032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:formEntreprise.html.twig"));

        // line 2
        echo "
";
        // line 6
        echo "
<h3>Formulaire d'Entreprise</h3>

<div class=\"well\">
    <h3>Informations Entreprise</h3>
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formEntreprise"]) || array_key_exists("formEntreprise", $context) ? $context["formEntreprise"] : (function () { throw new Twig_Error_Runtime('Variable "formEntreprise" does not exist.', 11, $this->getSourceContext()); })()), 'form');
        echo "

</div>
";
        
        $__internal_5cdcc1959e70c627c4b3eedfd6b16821f48479814e844cf48962c7e991151810->leave($__internal_5cdcc1959e70c627c4b3eedfd6b16821f48479814e844cf48962c7e991151810_prof);

        
        $__internal_25d608368a80e9c975e9109f6cf58b9b35a98ce7254adb3bddf2f8d856123032->leave($__internal_25d608368a80e9c975e9109f6cf58b9b35a98ce7254adb3bddf2f8d856123032_prof);

    }

    public function getTemplateName()
    {
        return "SSPlatformBundle:Advert:formEntreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 11,  28 => 6,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SS/PlatformBundle/Resources/views/Advert/form.html.twig #}

{# Cette vue n'hérite de personne, elle sera incluse par d'autres vues qui,
   elles, hériteront probablement du layout. Je dis « probablement » car,
   ici pour cette vue, on n'en sait rien et c'est une info qui ne nous concerne pas. #}

<h3>Formulaire d'Entreprise</h3>

<div class=\"well\">
    <h3>Informations Entreprise</h3>
    {{ form(formEntreprise) }}

</div>
", "SSPlatformBundle:Advert:formEntreprise.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle/Resources/views/Advert/formEntreprise.html.twig");
    }
}
