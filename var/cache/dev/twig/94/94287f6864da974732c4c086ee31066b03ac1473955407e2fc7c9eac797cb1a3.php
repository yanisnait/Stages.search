<?php

/* SSUserBundle:User:formInscription.html.twig */
class __TwigTemplate_84d8e053afe071551b3df8fae1ccd82e8597b33e562820a2dc41f4d707e28629 extends Twig_Template
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
        $__internal_364b97f96825b35e436d0aad9d08ccb789842bfd13346720aebe5f9729c758f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364b97f96825b35e436d0aad9d08ccb789842bfd13346720aebe5f9729c758f5->enter($__internal_364b97f96825b35e436d0aad9d08ccb789842bfd13346720aebe5f9729c758f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:User:formInscription.html.twig"));

        $__internal_1721f1d5097de52f577d17f3a76ebf8ada15efbcc8b685551df6b2ecffd30a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1721f1d5097de52f577d17f3a76ebf8ada15efbcc8b685551df6b2ecffd30a4f->enter($__internal_1721f1d5097de52f577d17f3a76ebf8ada15efbcc8b685551df6b2ecffd30a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:User:formInscription.html.twig"));

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
        
        $__internal_364b97f96825b35e436d0aad9d08ccb789842bfd13346720aebe5f9729c758f5->leave($__internal_364b97f96825b35e436d0aad9d08ccb789842bfd13346720aebe5f9729c758f5_prof);

        
        $__internal_1721f1d5097de52f577d17f3a76ebf8ada15efbcc8b685551df6b2ecffd30a4f->leave($__internal_1721f1d5097de52f577d17f3a76ebf8ada15efbcc8b685551df6b2ecffd30a4f_prof);

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
