<?php

/* SSUserBundle:User:formInscription.html.twig */
class __TwigTemplate_a2fb0444e0c3132835688b6a31b4a82b32e6b1131df23e6233933d0bd47e03ee extends Twig_Template
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
        $__internal_e0b7ed508bab0620597a0d333777fe5819c1daaa29ccd02d2c1d2d635d3ae348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b7ed508bab0620597a0d333777fe5819c1daaa29ccd02d2c1d2d635d3ae348->enter($__internal_e0b7ed508bab0620597a0d333777fe5819c1daaa29ccd02d2c1d2d635d3ae348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:User:formInscription.html.twig"));

        $__internal_7c9da08908b0f6306e41b059bcf133cbaadff667c8762597442705beab9fc90b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9da08908b0f6306e41b059bcf133cbaadff667c8762597442705beab9fc90b->enter($__internal_7c9da08908b0f6306e41b059bcf133cbaadff667c8762597442705beab9fc90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:User:formInscription.html.twig"));

        // line 2
        echo "
";
        // line 6
        echo "<link href=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">

<h3>Formulaire d'inscription</h3>
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<div class=\"fullscreen_bg\">
    <div class=\"container modal-dialog modal-content\">

        <h3>Informations Utilisateur</h3>

        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 20, $this->getSourceContext()); })()), 'form');
        echo "

    </div>


</div>";
        
        $__internal_e0b7ed508bab0620597a0d333777fe5819c1daaa29ccd02d2c1d2d635d3ae348->leave($__internal_e0b7ed508bab0620597a0d333777fe5819c1daaa29ccd02d2c1d2d635d3ae348_prof);

        
        $__internal_7c9da08908b0f6306e41b059bcf133cbaadff667c8762597442705beab9fc90b->leave($__internal_7c9da08908b0f6306e41b059bcf133cbaadff667c8762597442705beab9fc90b_prof);

    }

    public function getTemplateName()
    {
        return "SSUserBundle:User:formInscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 20,  38 => 14,  28 => 6,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SS/PlatformBundle/Resources/views/Advert/formOffre.html.twig #}

{# Cette vue n'hérite de personne, elle sera incluse par d'autres vues qui,
   elles, hériteront probablement du layout. Je dis « probablement » car,
   ici pour cette vue, on n'en sait rien et c'est une info qui ne nous concerne pas. #}
<link href=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">

<h3>Formulaire d'inscription</h3>
<link href=\"{{ asset('login.css') }}\" rel=\"stylesheet\">
<div class=\"fullscreen_bg\">
    <div class=\"container modal-dialog modal-content\">

        <h3>Informations Utilisateur</h3>

        {{ form(formUser) }}

    </div>


</div>", "SSUserBundle:User:formInscription.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\UserBundle/Resources/views/User/formInscription.html.twig");
    }
}
