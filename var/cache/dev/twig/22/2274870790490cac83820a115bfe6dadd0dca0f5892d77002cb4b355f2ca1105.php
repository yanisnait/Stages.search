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
        $__internal_4d6a022dd408da058b48afc4935aea62df84d7de9dbe5f9cb493b68bbe109273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d6a022dd408da058b48afc4935aea62df84d7de9dbe5f9cb493b68bbe109273->enter($__internal_4d6a022dd408da058b48afc4935aea62df84d7de9dbe5f9cb493b68bbe109273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:view.html.twig"));

        $__internal_8eab9f2f83446488f3ec46c0582cf358b5654fca6ec2c0e2a19545606872cce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eab9f2f83446488f3ec46c0582cf358b5654fca6ec2c0e2a19545606872cce8->enter($__internal_8eab9f2f83446488f3ec46c0582cf358b5654fca6ec2c0e2a19545606872cce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d6a022dd408da058b48afc4935aea62df84d7de9dbe5f9cb493b68bbe109273->leave($__internal_4d6a022dd408da058b48afc4935aea62df84d7de9dbe5f9cb493b68bbe109273_prof);

        
        $__internal_8eab9f2f83446488f3ec46c0582cf358b5654fca6ec2c0e2a19545606872cce8->leave($__internal_8eab9f2f83446488f3ec46c0582cf358b5654fca6ec2c0e2a19545606872cce8_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_95d06d3cac012d2175b6c3f352d123b48c4630e61dc17e657a1d3910a4c950a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d06d3cac012d2175b6c3f352d123b48c4630e61dc17e657a1d3910a4c950a6->enter($__internal_95d06d3cac012d2175b6c3f352d123b48c4630e61dc17e657a1d3910a4c950a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b6d2586050244e43e404a216a1909157a767f99627ff4889d37c608f20f25c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d2586050244e43e404a216a1909157a767f99627ff4889d37c608f20f25c1f->enter($__internal_b6d2586050244e43e404a216a1909157a767f99627ff4889d37c608f20f25c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "Affichage de l'annonce n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new Twig_Error_Runtime('Variable "offre" does not exist.', 7, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "
";
        
        $__internal_b6d2586050244e43e404a216a1909157a767f99627ff4889d37c608f20f25c1f->leave($__internal_b6d2586050244e43e404a216a1909157a767f99627ff4889d37c608f20f25c1f_prof);

        
        $__internal_95d06d3cac012d2175b6c3f352d123b48c4630e61dc17e657a1d3910a4c950a6->leave($__internal_95d06d3cac012d2175b6c3f352d123b48c4630e61dc17e657a1d3910a4c950a6_prof);

    }

    // line 10
    public function block_ssplatform_body($context, array $blocks = array())
    {
        $__internal_0c600fcae60dd7b08723a769b734456f2bfa8371d1cfb3aeaae6f3dfc3e00c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c600fcae60dd7b08723a769b734456f2bfa8371d1cfb3aeaae6f3dfc3e00c37->enter($__internal_0c600fcae60dd7b08723a769b734456f2bfa8371d1cfb3aeaae6f3dfc3e00c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        $__internal_f6a9de2a962c816b5fa3b490b75ca68a38b146d7701492e0d0e2e01f4435a12c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a9de2a962c816b5fa3b490b75ca68a38b146d7701492e0d0e2e01f4435a12c->enter($__internal_f6a9de2a962c816b5fa3b490b75ca68a38b146d7701492e0d0e2e01f4435a12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

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
        
        $__internal_f6a9de2a962c816b5fa3b490b75ca68a38b146d7701492e0d0e2e01f4435a12c->leave($__internal_f6a9de2a962c816b5fa3b490b75ca68a38b146d7701492e0d0e2e01f4435a12c_prof);

        
        $__internal_0c600fcae60dd7b08723a769b734456f2bfa8371d1cfb3aeaae6f3dfc3e00c37->leave($__internal_0c600fcae60dd7b08723a769b734456f2bfa8371d1cfb3aeaae6f3dfc3e00c37_prof);

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
