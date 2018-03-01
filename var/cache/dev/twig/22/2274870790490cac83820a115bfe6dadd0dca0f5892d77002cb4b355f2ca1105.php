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
        $__internal_47b628c829b08c0018194a4b43f44c3902628bf8fb51fd43e989fdefb72db9bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b628c829b08c0018194a4b43f44c3902628bf8fb51fd43e989fdefb72db9bc->enter($__internal_47b628c829b08c0018194a4b43f44c3902628bf8fb51fd43e989fdefb72db9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:view.html.twig"));

        $__internal_f4a81962b0d9f45fce3a9a9e16d81a062361b505f25ad87ae8923b08d8c44ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a81962b0d9f45fce3a9a9e16d81a062361b505f25ad87ae8923b08d8c44ce2->enter($__internal_f4a81962b0d9f45fce3a9a9e16d81a062361b505f25ad87ae8923b08d8c44ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47b628c829b08c0018194a4b43f44c3902628bf8fb51fd43e989fdefb72db9bc->leave($__internal_47b628c829b08c0018194a4b43f44c3902628bf8fb51fd43e989fdefb72db9bc_prof);

        
        $__internal_f4a81962b0d9f45fce3a9a9e16d81a062361b505f25ad87ae8923b08d8c44ce2->leave($__internal_f4a81962b0d9f45fce3a9a9e16d81a062361b505f25ad87ae8923b08d8c44ce2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0304b8943b00565d9cc97f69de639b63d3e031a471430cfccc621b5c2e8dc7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0304b8943b00565d9cc97f69de639b63d3e031a471430cfccc621b5c2e8dc7c->enter($__internal_b0304b8943b00565d9cc97f69de639b63d3e031a471430cfccc621b5c2e8dc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e57dd60f62db7c1da52e6de5d6b9e1b9feacc0b6c5d1f9e05b308a9c112c06c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e57dd60f62db7c1da52e6de5d6b9e1b9feacc0b6c5d1f9e05b308a9c112c06c2->enter($__internal_e57dd60f62db7c1da52e6de5d6b9e1b9feacc0b6c5d1f9e05b308a9c112c06c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "Affichage de l'annonce n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new Twig_Error_Runtime('Variable "offre" does not exist.', 7, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "
";
        
        $__internal_e57dd60f62db7c1da52e6de5d6b9e1b9feacc0b6c5d1f9e05b308a9c112c06c2->leave($__internal_e57dd60f62db7c1da52e6de5d6b9e1b9feacc0b6c5d1f9e05b308a9c112c06c2_prof);

        
        $__internal_b0304b8943b00565d9cc97f69de639b63d3e031a471430cfccc621b5c2e8dc7c->leave($__internal_b0304b8943b00565d9cc97f69de639b63d3e031a471430cfccc621b5c2e8dc7c_prof);

    }

    // line 10
    public function block_ssplatform_body($context, array $blocks = array())
    {
        $__internal_87e624de749fa8b102b35652d1978defdb50c9893613bf26cd5d5e72225f10bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e624de749fa8b102b35652d1978defdb50c9893613bf26cd5d5e72225f10bb->enter($__internal_87e624de749fa8b102b35652d1978defdb50c9893613bf26cd5d5e72225f10bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        $__internal_dad5c2f54573e1c2890168e4565c26719671ed718360e2fd73ac968139b0c9af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad5c2f54573e1c2890168e4565c26719671ed718360e2fd73ac968139b0c9af->enter($__internal_dad5c2f54573e1c2890168e4565c26719671ed718360e2fd73ac968139b0c9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        // line 11
        echo "<div>
    ";
        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "notice_O"), "method"));
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
    <img src=";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new Twig_Error_Runtime('Variable "logo" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
        echo ">
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new Twig_Error_Runtime('Variable "offre" does not exist.', 21, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" type=\"submit\">Modifier</a>

    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new Twig_Error_Runtime('Variable "offre" does not exist.', 23, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" type=\"submit\">Supprimer</a>

</p>
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "notice_C"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "        <p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["commentBox"]) || array_key_exists("commentBox", $context) ? $context["commentBox"] : (function () { throw new Twig_Error_Runtime('Variable "commentBox" does not exist.', 29, $this->getSourceContext()); })()), 'form');
        echo "

    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new Twig_Error_Runtime('Variable "offre" does not exist.', 31, $this->getSourceContext()); })()), "avis", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["coms"]) {
            // line 32
            echo "
        ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["coms"], "contenu", array()), "html", null, true);
            echo "
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "    Pas de commentaires pour cette offre !
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "

";
        
        $__internal_dad5c2f54573e1c2890168e4565c26719671ed718360e2fd73ac968139b0c9af->leave($__internal_dad5c2f54573e1c2890168e4565c26719671ed718360e2fd73ac968139b0c9af_prof);

        
        $__internal_87e624de749fa8b102b35652d1978defdb50c9893613bf26cd5d5e72225f10bb->leave($__internal_87e624de749fa8b102b35652d1978defdb50c9893613bf26cd5d5e72225f10bb_prof);

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
        return array (  154 => 37,  147 => 35,  140 => 33,  137 => 32,  132 => 31,  126 => 29,  117 => 27,  113 => 26,  107 => 23,  102 => 21,  98 => 20,  94 => 19,  89 => 16,  80 => 14,  75 => 13,  72 => 11,  63 => 10,  50 => 7,  41 => 6,  11 => 4,);
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
    {% for message in app.session.flashbag.get('notice_O') %}
        <p>Message flash : {{ message }}</p>
    {% endfor %}
</div>

<p>
    {{ offre.intitule }}<br>
    <img src={{ logo }}>
    <a href=\"{{ path('ss_platform_edit',{'id':offre.id}) }}\" type=\"submit\">Modifier</a>

    <a href=\"{{ path('ss_platform_delete',{'id':offre.id}) }}\" type=\"submit\">Supprimer</a>

</p>
    {% for message in app.session.flashbag.get('notice_C') %}
        <p>Message flash : {{ message }}</p>
    {% endfor %}
    {{ form(commentBox) }}

    {% for coms in offre.avis %}

        {{ coms.contenu }}
    {% else %}
    Pas de commentaires pour cette offre !
    {% endfor %}


{% endblock %}
", "SSPlatformBundle:Advert:view.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\Advert\\view.html.twig");
    }
}
