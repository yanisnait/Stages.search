<?php

/* SSPlatformBundle:Advert:form.html.twig */
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
        $__internal_5f1ea2361c458d4682ba2f1268ca35e67ac3dcb915e0e6c98719ad6aa69c3bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f1ea2361c458d4682ba2f1268ca35e67ac3dcb915e0e6c98719ad6aa69c3bae->enter($__internal_5f1ea2361c458d4682ba2f1268ca35e67ac3dcb915e0e6c98719ad6aa69c3bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:form.html.twig"));

        $__internal_a869f0ec710af45ba2fd9419d5906269ba756ccf0637ad36cf5d4605a7352a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a869f0ec710af45ba2fd9419d5906269ba756ccf0637ad36cf5d4605a7352a6c->enter($__internal_a869f0ec710af45ba2fd9419d5906269ba756ccf0637ad36cf5d4605a7352a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:form.html.twig"));

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
</:div>";
        
        $__internal_5f1ea2361c458d4682ba2f1268ca35e67ac3dcb915e0e6c98719ad6aa69c3bae->leave($__internal_5f1ea2361c458d4682ba2f1268ca35e67ac3dcb915e0e6c98719ad6aa69c3bae_prof);

        
        $__internal_a869f0ec710af45ba2fd9419d5906269ba756ccf0637ad36cf5d4605a7352a6c->leave($__internal_a869f0ec710af45ba2fd9419d5906269ba756ccf0637ad36cf5d4605a7352a6c_prof);

    }

    public function getTemplateName()
    {
        return "SSPlatformBundle:Advert:form.html.twig";
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
        return new Twig_Source("{# src/SS/PlatformBundle/Resources/views/Advert/form.html.twig #}

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
</:div>", "SSPlatformBundle:Advert:form.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\Advert\\form.html.twig");
    }
}
