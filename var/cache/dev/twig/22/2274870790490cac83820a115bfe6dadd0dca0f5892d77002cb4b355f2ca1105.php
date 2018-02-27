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
        $__internal_ca517f9f04795ec6f1a3e5e4967b00176040d49e5ff345134c9b35442b66a78c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca517f9f04795ec6f1a3e5e4967b00176040d49e5ff345134c9b35442b66a78c->enter($__internal_ca517f9f04795ec6f1a3e5e4967b00176040d49e5ff345134c9b35442b66a78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:view.html.twig"));

        $__internal_884b73464b6c2fb660eaac62424f2e498bb616a6403823ff6956827efda09c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884b73464b6c2fb660eaac62424f2e498bb616a6403823ff6956827efda09c63->enter($__internal_884b73464b6c2fb660eaac62424f2e498bb616a6403823ff6956827efda09c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca517f9f04795ec6f1a3e5e4967b00176040d49e5ff345134c9b35442b66a78c->leave($__internal_ca517f9f04795ec6f1a3e5e4967b00176040d49e5ff345134c9b35442b66a78c_prof);

        
        $__internal_884b73464b6c2fb660eaac62424f2e498bb616a6403823ff6956827efda09c63->leave($__internal_884b73464b6c2fb660eaac62424f2e498bb616a6403823ff6956827efda09c63_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6583a461f379646969da9df2c3b2e04f506f5cde2ee8ea2e157ae507e6f296c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6583a461f379646969da9df2c3b2e04f506f5cde2ee8ea2e157ae507e6f296c7->enter($__internal_6583a461f379646969da9df2c3b2e04f506f5cde2ee8ea2e157ae507e6f296c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d16e6a315a6534079259fbbede6ccfffdd7bd65655a7e68acd249c550b7fb50b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16e6a315a6534079259fbbede6ccfffdd7bd65655a7e68acd249c550b7fb50b->enter($__internal_d16e6a315a6534079259fbbede6ccfffdd7bd65655a7e68acd249c550b7fb50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "Affichage de l'annonce n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new Twig_Error_Runtime('Variable "offre" does not exist.', 7, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "
";
        
        $__internal_d16e6a315a6534079259fbbede6ccfffdd7bd65655a7e68acd249c550b7fb50b->leave($__internal_d16e6a315a6534079259fbbede6ccfffdd7bd65655a7e68acd249c550b7fb50b_prof);

        
        $__internal_6583a461f379646969da9df2c3b2e04f506f5cde2ee8ea2e157ae507e6f296c7->leave($__internal_6583a461f379646969da9df2c3b2e04f506f5cde2ee8ea2e157ae507e6f296c7_prof);

    }

    // line 10
    public function block_ssplatform_body($context, array $blocks = array())
    {
        $__internal_afd04770a646fa4820070b818a402f9ddd2d1ff67cbc0bd35191cc5fea055067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd04770a646fa4820070b818a402f9ddd2d1ff67cbc0bd35191cc5fea055067->enter($__internal_afd04770a646fa4820070b818a402f9ddd2d1ff67cbc0bd35191cc5fea055067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        $__internal_4110c13fe29c202b5bd790862ef11f0acd9eb13490b5d5f50c2c889993bb9c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4110c13fe29c202b5bd790862ef11f0acd9eb13490b5d5f50c2c889993bb9c23->enter($__internal_4110c13fe29c202b5bd790862ef11f0acd9eb13490b5d5f50c2c889993bb9c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

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
        echo "<br>
    ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new Twig_Error_Runtime('Variable "logo" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
        echo "
</p>
";
        
        $__internal_4110c13fe29c202b5bd790862ef11f0acd9eb13490b5d5f50c2c889993bb9c23->leave($__internal_4110c13fe29c202b5bd790862ef11f0acd9eb13490b5d5f50c2c889993bb9c23_prof);

        
        $__internal_afd04770a646fa4820070b818a402f9ddd2d1ff67cbc0bd35191cc5fea055067->leave($__internal_afd04770a646fa4820070b818a402f9ddd2d1ff67cbc0bd35191cc5fea055067_prof);

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
        return array (  98 => 20,  94 => 19,  89 => 16,  80 => 14,  75 => 13,  72 => 11,  63 => 10,  50 => 7,  41 => 6,  11 => 4,);
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
    {{ offre.intitule }}<br>
    {{ logo }}
</p>
{% endblock %}
", "SSPlatformBundle:Advert:view.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\Advert\\view.html.twig");
    }
}
