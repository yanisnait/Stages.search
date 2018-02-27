<?php

/* SSPlatformBundle:Advert:formOffre.html.twig */
class __TwigTemplate_8646f6c8bfba0a742369525a25b604d35fd668ec94c0b0e4cf8e6d0976b53d90 extends Twig_Template
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
        $__internal_05bfcc9b2aeb1236b158e89cc89cc9c414ec96f7a0c5f24731c0eeeda53e428d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05bfcc9b2aeb1236b158e89cc89cc9c414ec96f7a0c5f24731c0eeeda53e428d->enter($__internal_05bfcc9b2aeb1236b158e89cc89cc9c414ec96f7a0c5f24731c0eeeda53e428d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:formOffre.html.twig"));

        $__internal_9e1ffaec98a0ed9ad9bd5df08ac9fd5b969da06c5a4ea0d8410efa1458d05504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1ffaec98a0ed9ad9bd5df08ac9fd5b969da06c5a4ea0d8410efa1458d05504->enter($__internal_9e1ffaec98a0ed9ad9bd5df08ac9fd5b969da06c5a4ea0d8410efa1458d05504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:formOffre.html.twig"));

        // line 2
        echo "
";
        // line 6
        echo "
<h3>Formulaire d'annonce</h3>

<div class=\"well\">
    <h3>Informations Entreprise</h3>
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formEntreprise"]) || array_key_exists("formEntreprise", $context) ? $context["formEntreprise"] : (function () { throw new Twig_Error_Runtime('Variable "formEntreprise" does not exist.', 11, $this->getSourceContext()); })()), 'form');
        echo "

</div>
<div class=\"well\">

    <h3>Informations Stage</h3>
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formOffre"]) || array_key_exists("formOffre", $context) ? $context["formOffre"] : (function () { throw new Twig_Error_Runtime('Variable "formOffre" does not exist.', 17, $this->getSourceContext()); })()), 'form');
        echo "
</div>";
        
        $__internal_05bfcc9b2aeb1236b158e89cc89cc9c414ec96f7a0c5f24731c0eeeda53e428d->leave($__internal_05bfcc9b2aeb1236b158e89cc89cc9c414ec96f7a0c5f24731c0eeeda53e428d_prof);

        
        $__internal_9e1ffaec98a0ed9ad9bd5df08ac9fd5b969da06c5a4ea0d8410efa1458d05504->leave($__internal_9e1ffaec98a0ed9ad9bd5df08ac9fd5b969da06c5a4ea0d8410efa1458d05504_prof);

    }

    public function getTemplateName()
    {
        return "SSPlatformBundle:Advert:formOffre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 17,  35 => 11,  28 => 6,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SS/PlatformBundle/Resources/views/Advert/formOffre.html.twig #}

{# Cette vue n'hérite de personne, elle sera incluse par d'autres vues qui,
   elles, hériteront probablement du layout. Je dis « probablement » car,
   ici pour cette vue, on n'en sait rien et c'est une info qui ne nous concerne pas. #}

<h3>Formulaire d'annonce</h3>

<div class=\"well\">
    <h3>Informations Entreprise</h3>
    {{ form(formEntreprise) }}

</div>
<div class=\"well\">

    <h3>Informations Stage</h3>
    {{ form(formOffre) }}
</div>", "SSPlatformBundle:Advert:formOffre.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\Advert\\formOffre.html.twig");
    }
}
