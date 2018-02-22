<?php

/* SSPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_23a6dc4c997dea86fddb2dbf6f664a288d630d1b3d2a70710707e57f929748b3 extends Twig_Template
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
        $__internal_4d42e460f812257d36eb3effaffc6cc26b71303ea357f987b05d2ef275805b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d42e460f812257d36eb3effaffc6cc26b71303ea357f987b05d2ef275805b0b->enter($__internal_4d42e460f812257d36eb3effaffc6cc26b71303ea357f987b05d2ef275805b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:view.html.twig"));

        $__internal_528ac0c3aeddff082d071bd495a3c4338973d5b2c2c1695d291e2e8d203c7fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528ac0c3aeddff082d071bd495a3c4338973d5b2c2c1695d291e2e8d203c7fcc->enter($__internal_528ac0c3aeddff082d071bd495a3c4338973d5b2c2c1695d291e2e8d203c7fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d42e460f812257d36eb3effaffc6cc26b71303ea357f987b05d2ef275805b0b->leave($__internal_4d42e460f812257d36eb3effaffc6cc26b71303ea357f987b05d2ef275805b0b_prof);

        
        $__internal_528ac0c3aeddff082d071bd495a3c4338973d5b2c2c1695d291e2e8d203c7fcc->leave($__internal_528ac0c3aeddff082d071bd495a3c4338973d5b2c2c1695d291e2e8d203c7fcc_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd669cf76a6e3fbd5a5005f98d31d44a68d7ba357f0eeb010c456b15da6f2410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd669cf76a6e3fbd5a5005f98d31d44a68d7ba357f0eeb010c456b15da6f2410->enter($__internal_dd669cf76a6e3fbd5a5005f98d31d44a68d7ba357f0eeb010c456b15da6f2410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dca25427ada8ee2ae2c4cd3a531bc766ce228827d1ee7e0aea2474435662fd00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca25427ada8ee2ae2c4cd3a531bc766ce228827d1ee7e0aea2474435662fd00->enter($__internal_dca25427ada8ee2ae2c4cd3a531bc766ce228827d1ee7e0aea2474435662fd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "Affichage de l'annonce n°";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
        echo "
";
        
        $__internal_dca25427ada8ee2ae2c4cd3a531bc766ce228827d1ee7e0aea2474435662fd00->leave($__internal_dca25427ada8ee2ae2c4cd3a531bc766ce228827d1ee7e0aea2474435662fd00_prof);

        
        $__internal_dd669cf76a6e3fbd5a5005f98d31d44a68d7ba357f0eeb010c456b15da6f2410->leave($__internal_dd669cf76a6e3fbd5a5005f98d31d44a68d7ba357f0eeb010c456b15da6f2410_prof);

    }

    // line 10
    public function block_ssplatform_body($context, array $blocks = array())
    {
        $__internal_c93d565213046242fb8290eb4c15308689913a5802ac5ea35abc27098f5a04aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93d565213046242fb8290eb4c15308689913a5802ac5ea35abc27098f5a04aa->enter($__internal_c93d565213046242fb8290eb4c15308689913a5802ac5ea35abc27098f5a04aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        $__internal_b8b5ba2187a708eef4485eadc4b49e3af47b30312739e5e5060e849e151626b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b5ba2187a708eef4485eadc4b49e3af47b30312739e5e5060e849e151626b7->enter($__internal_b8b5ba2187a708eef4485eadc4b49e3af47b30312739e5e5060e849e151626b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

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
    Ici nous pourrons lire l'annonce ayant comme id : ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
        echo "<br />
    Mais pour l'instant, nous ne savons pas encore le faire, cela viendra !
</p>
";
        
        $__internal_b8b5ba2187a708eef4485eadc4b49e3af47b30312739e5e5060e849e151626b7->leave($__internal_b8b5ba2187a708eef4485eadc4b49e3af47b30312739e5e5060e849e151626b7_prof);

        
        $__internal_c93d565213046242fb8290eb4c15308689913a5802ac5ea35abc27098f5a04aa->leave($__internal_c93d565213046242fb8290eb4c15308689913a5802ac5ea35abc27098f5a04aa_prof);

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
Affichage de l'annonce n°{{ id }}
{% endblock %}

{% block ssplatform_body %}
<div>
    {# On affiche tous les messages flash dont le nom est « info » #}
    {% for message in app.session.flashbag.get('info') %}
        <p>Message flash : {{ message }}</p>
    {% endfor %}
</div>

<p>
    Ici nous pourrons lire l'annonce ayant comme id : {{ id }}<br />
    Mais pour l'instant, nous ne savons pas encore le faire, cela viendra !
</p>
{% endblock %}
", "SSPlatformBundle:Advert:view.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
