<?php

/* SSPlatformBundle:Advert:formOffre.html.twig */
class __TwigTemplate_8f2b0883e8e035b4c999e2513f68c3999110481e78ad83252e301483c651ca94 extends Twig_Template
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
        $__internal_c65a66184ed2c20400aebd22bbaa5b0ba421829fe68a9e8677a4ce2800b8d9a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65a66184ed2c20400aebd22bbaa5b0ba421829fe68a9e8677a4ce2800b8d9a1->enter($__internal_c65a66184ed2c20400aebd22bbaa5b0ba421829fe68a9e8677a4ce2800b8d9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:formOffre.html.twig"));

        $__internal_443d0c2287fad172e1e8b3cf405f2cdd34274671dbe7c3b007126c5a51d94ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443d0c2287fad172e1e8b3cf405f2cdd34274671dbe7c3b007126c5a51d94ee2->enter($__internal_443d0c2287fad172e1e8b3cf405f2cdd34274671dbe7c3b007126c5a51d94ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:formOffre.html.twig"));

        // line 2
        echo "
";
        // line 6
        echo "
<h3>Formulaire d'annonce</h3>

<div class=\"well\">

    <h3>Informations Stage</h3>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formOffre"]) || array_key_exists("formOffre", $context) ? $context["formOffre"] : (function () { throw new Twig_Error_Runtime('Variable "formOffre" does not exist.', 12, $this->getSourceContext()); })()), 'form');
        echo "
</div>";
        
        $__internal_c65a66184ed2c20400aebd22bbaa5b0ba421829fe68a9e8677a4ce2800b8d9a1->leave($__internal_c65a66184ed2c20400aebd22bbaa5b0ba421829fe68a9e8677a4ce2800b8d9a1_prof);

        
        $__internal_443d0c2287fad172e1e8b3cf405f2cdd34274671dbe7c3b007126c5a51d94ee2->leave($__internal_443d0c2287fad172e1e8b3cf405f2cdd34274671dbe7c3b007126c5a51d94ee2_prof);

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
        return array (  36 => 12,  28 => 6,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SS/PlatformBundle/Resources/views/Advert/formOffre.html.twig #}

{# Cette vue n'hérite de personne, elle sera incluse par d'autres vues qui,
   elles, hériteront probablement du layout. Je dis « probablement » car,
   ici pour cette vue, on n'en sait rien et c'est une info qui ne nous concerne pas. #}

<h3>Formulaire d'annonce</h3>

<div class=\"well\">

    <h3>Informations Stage</h3>
    {{ form(formOffre) }}
</div>", "SSPlatformBundle:Advert:formOffre.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\Advert\\formOffre.html.twig");
    }
}
