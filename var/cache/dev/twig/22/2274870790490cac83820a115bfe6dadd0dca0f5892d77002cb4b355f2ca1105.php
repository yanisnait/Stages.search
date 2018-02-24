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
        $__internal_1edfe3cb08fc3e793f8e29ca218f12abf750dad676bac9a798e55958bb0a3abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1edfe3cb08fc3e793f8e29ca218f12abf750dad676bac9a798e55958bb0a3abd->enter($__internal_1edfe3cb08fc3e793f8e29ca218f12abf750dad676bac9a798e55958bb0a3abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:view.html.twig"));

        $__internal_3fe88564cfef07836ecc7d68665b39df64b02d66d97c91e3724509bc44ff8a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe88564cfef07836ecc7d68665b39df64b02d66d97c91e3724509bc44ff8a06->enter($__internal_3fe88564cfef07836ecc7d68665b39df64b02d66d97c91e3724509bc44ff8a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1edfe3cb08fc3e793f8e29ca218f12abf750dad676bac9a798e55958bb0a3abd->leave($__internal_1edfe3cb08fc3e793f8e29ca218f12abf750dad676bac9a798e55958bb0a3abd_prof);

        
        $__internal_3fe88564cfef07836ecc7d68665b39df64b02d66d97c91e3724509bc44ff8a06->leave($__internal_3fe88564cfef07836ecc7d68665b39df64b02d66d97c91e3724509bc44ff8a06_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ddd8f79e0fb94e837b8a0b3680f02dacce21f32c3ec18c48bcb1db9f3bf55fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ddd8f79e0fb94e837b8a0b3680f02dacce21f32c3ec18c48bcb1db9f3bf55fe->enter($__internal_4ddd8f79e0fb94e837b8a0b3680f02dacce21f32c3ec18c48bcb1db9f3bf55fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d1649c71f143c8958f5a2d8c1fbbdc53281b6fc442784a22876ace8044e0df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1649c71f143c8958f5a2d8c1fbbdc53281b6fc442784a22876ace8044e0df1->enter($__internal_9d1649c71f143c8958f5a2d8c1fbbdc53281b6fc442784a22876ace8044e0df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "Affichage de l'annonce n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new Twig_Error_Runtime('Variable "offre" does not exist.', 7, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "
";
        
        $__internal_9d1649c71f143c8958f5a2d8c1fbbdc53281b6fc442784a22876ace8044e0df1->leave($__internal_9d1649c71f143c8958f5a2d8c1fbbdc53281b6fc442784a22876ace8044e0df1_prof);

        
        $__internal_4ddd8f79e0fb94e837b8a0b3680f02dacce21f32c3ec18c48bcb1db9f3bf55fe->leave($__internal_4ddd8f79e0fb94e837b8a0b3680f02dacce21f32c3ec18c48bcb1db9f3bf55fe_prof);

    }

    // line 10
    public function block_ssplatform_body($context, array $blocks = array())
    {
        $__internal_c793fec55599d195a3a0a110356269e0ee5bf533ba0f035e201bc5882e518f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c793fec55599d195a3a0a110356269e0ee5bf533ba0f035e201bc5882e518f3f->enter($__internal_c793fec55599d195a3a0a110356269e0ee5bf533ba0f035e201bc5882e518f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        $__internal_f82467dd78291795b955386f82aaf7a28a45d1b1f32adea9ce6f93b36e922235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82467dd78291795b955386f82aaf7a28a45d1b1f32adea9ce6f93b36e922235->enter($__internal_f82467dd78291795b955386f82aaf7a28a45d1b1f32adea9ce6f93b36e922235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new Twig_Error_Runtime('Variable "offre" does not exist.', 19, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "<br />
    Mais pour l'instant, nous ne savons pas encore le faire, cela viendra !
</p>
";
        
        $__internal_f82467dd78291795b955386f82aaf7a28a45d1b1f32adea9ce6f93b36e922235->leave($__internal_f82467dd78291795b955386f82aaf7a28a45d1b1f32adea9ce6f93b36e922235_prof);

        
        $__internal_c793fec55599d195a3a0a110356269e0ee5bf533ba0f035e201bc5882e518f3f->leave($__internal_c793fec55599d195a3a0a110356269e0ee5bf533ba0f035e201bc5882e518f3f_prof);

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
    Ici nous pourrons lire l'annonce ayant comme id : {{offre.id }}<br />
    Mais pour l'instant, nous ne savons pas encore le faire, cela viendra !
</p>
{% endblock %}
", "SSPlatformBundle:Advert:view.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\Advert\\view.html.twig");
    }
}
