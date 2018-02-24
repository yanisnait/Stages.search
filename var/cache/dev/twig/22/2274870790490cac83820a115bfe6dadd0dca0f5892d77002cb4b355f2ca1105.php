<?php

/* SSPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_aa646a049986b5237760fc7456b72bc7adc020e42f7a7f79295c8b9b3e52a921 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("SSPlatformBundle::layout.html.twig", "SSPlatformBundle:Advert:view.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ssplatform_body' => array($this, 'block_ssplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SSPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e79f62ccb901012d3a008f572a7470fad40fe41ae760a616ba2559e5e1976b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79f62ccb901012d3a008f572a7470fad40fe41ae760a616ba2559e5e1976b0a->enter($__internal_e79f62ccb901012d3a008f572a7470fad40fe41ae760a616ba2559e5e1976b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:view.html.twig"));

        $__internal_07748003bd93282b049a888cd398ae98ce3127c95b772351842b048c4ebd16a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07748003bd93282b049a888cd398ae98ce3127c95b772351842b048c4ebd16a5->enter($__internal_07748003bd93282b049a888cd398ae98ce3127c95b772351842b048c4ebd16a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e79f62ccb901012d3a008f572a7470fad40fe41ae760a616ba2559e5e1976b0a->leave($__internal_e79f62ccb901012d3a008f572a7470fad40fe41ae760a616ba2559e5e1976b0a_prof);

        
        $__internal_07748003bd93282b049a888cd398ae98ce3127c95b772351842b048c4ebd16a5->leave($__internal_07748003bd93282b049a888cd398ae98ce3127c95b772351842b048c4ebd16a5_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c60a30ba45c7d5e1956a3d22f52b0bdb7631c0cfa4abaceb02e2f1387060d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c60a30ba45c7d5e1956a3d22f52b0bdb7631c0cfa4abaceb02e2f1387060d50->enter($__internal_3c60a30ba45c7d5e1956a3d22f52b0bdb7631c0cfa4abaceb02e2f1387060d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a7d3ce338432f2d5ad6575f89bf89f492f420cc98519b8a654710d7ae40e3629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d3ce338432f2d5ad6575f89bf89f492f420cc98519b8a654710d7ae40e3629->enter($__internal_a7d3ce338432f2d5ad6575f89bf89f492f420cc98519b8a654710d7ae40e3629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "Affichage de l'annonce n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new Twig_Error_Runtime('Variable "offre" does not exist.', 7, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "
";
        
        $__internal_a7d3ce338432f2d5ad6575f89bf89f492f420cc98519b8a654710d7ae40e3629->leave($__internal_a7d3ce338432f2d5ad6575f89bf89f492f420cc98519b8a654710d7ae40e3629_prof);

        
        $__internal_3c60a30ba45c7d5e1956a3d22f52b0bdb7631c0cfa4abaceb02e2f1387060d50->leave($__internal_3c60a30ba45c7d5e1956a3d22f52b0bdb7631c0cfa4abaceb02e2f1387060d50_prof);

    }

    // line 10
    public function block_ssplatform_body($context, array $blocks = array())
    {
        $__internal_58a694ea591ef547b4bd540f9c7f33cb286cd5c937390de67634b6eef2a6127c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a694ea591ef547b4bd540f9c7f33cb286cd5c937390de67634b6eef2a6127c->enter($__internal_58a694ea591ef547b4bd540f9c7f33cb286cd5c937390de67634b6eef2a6127c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        $__internal_68658fd633fecc7262f1a4fc9ce06cb9438e279a6820dff2d4cbd3a955a0201a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68658fd633fecc7262f1a4fc9ce06cb9438e279a6820dff2d4cbd3a955a0201a->enter($__internal_68658fd633fecc7262f1a4fc9ce06cb9438e279a6820dff2d4cbd3a955a0201a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        // line 11
        echo "<div>
    ";
        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "        <p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>

<p>
    ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new Twig_Error_Runtime('Variable "offre" does not exist.', 19, $this->getSourceContext()); })()), "intitule", array()), "html", null, true);
        echo "
</p>
";
        
        $__internal_68658fd633fecc7262f1a4fc9ce06cb9438e279a6820dff2d4cbd3a955a0201a->leave($__internal_68658fd633fecc7262f1a4fc9ce06cb9438e279a6820dff2d4cbd3a955a0201a_prof);

        
        $__internal_58a694ea591ef547b4bd540f9c7f33cb286cd5c937390de67634b6eef2a6127c->leave($__internal_58a694ea591ef547b4bd540f9c7f33cb286cd5c937390de67634b6eef2a6127c_prof);

    }

    public function getTemplateName()
    {
        return "SSPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 19,  89 => 16,  80 => 14,  75 => 13,  72 => 11,  63 => 10,  50 => 7,  41 => 6,  11 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SS/PlatformBundle/Resources/view/Advert/view.html.twig #}


{% extends \"SSPlatformBundle::layout.html.twig\" %}

{% block title  %}
Affichage de l'annonce n°{{ offre.id }}
{% endblock %}

{% block ssplatform_body %}
<div>
    {# On affiche tous les messages flash dont le nom est « info » #}
    {% for message in app.session.flashbag.get('info') %}
        <p>Message flash : {{ message }}</p>
    {% endfor %}
</div>

<p>
    {{ offre.intitule }}
</p>
{% endblock %}
", "SSPlatformBundle:Advert:view.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\Advert\\view.html.twig");
    }
}
