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
        $__internal_4ab3e73241c3b6d4307b90a5e4cc2bff21f64800b8fa6d96d86ceb8129fdf8a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ab3e73241c3b6d4307b90a5e4cc2bff21f64800b8fa6d96d86ceb8129fdf8a7->enter($__internal_4ab3e73241c3b6d4307b90a5e4cc2bff21f64800b8fa6d96d86ceb8129fdf8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:view.html.twig"));

        $__internal_d9502026b8624758937aba8f2923ca54506c61af7184ff62333a17dda77259f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9502026b8624758937aba8f2923ca54506c61af7184ff62333a17dda77259f3->enter($__internal_d9502026b8624758937aba8f2923ca54506c61af7184ff62333a17dda77259f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ab3e73241c3b6d4307b90a5e4cc2bff21f64800b8fa6d96d86ceb8129fdf8a7->leave($__internal_4ab3e73241c3b6d4307b90a5e4cc2bff21f64800b8fa6d96d86ceb8129fdf8a7_prof);

        
        $__internal_d9502026b8624758937aba8f2923ca54506c61af7184ff62333a17dda77259f3->leave($__internal_d9502026b8624758937aba8f2923ca54506c61af7184ff62333a17dda77259f3_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_5069b8d14138b44353e190cacd3a85b514eff691d0f86387f8b44cbfb6c3d799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5069b8d14138b44353e190cacd3a85b514eff691d0f86387f8b44cbfb6c3d799->enter($__internal_5069b8d14138b44353e190cacd3a85b514eff691d0f86387f8b44cbfb6c3d799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7120c2329a8b66eb3377be730b3639f63a6c8edd8a80aec140b93489f204d3fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7120c2329a8b66eb3377be730b3639f63a6c8edd8a80aec140b93489f204d3fc->enter($__internal_7120c2329a8b66eb3377be730b3639f63a6c8edd8a80aec140b93489f204d3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "Affichage de l'annonce n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new Twig_Error_Runtime('Variable "offre" does not exist.', 7, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "
";
        
        $__internal_7120c2329a8b66eb3377be730b3639f63a6c8edd8a80aec140b93489f204d3fc->leave($__internal_7120c2329a8b66eb3377be730b3639f63a6c8edd8a80aec140b93489f204d3fc_prof);

        
        $__internal_5069b8d14138b44353e190cacd3a85b514eff691d0f86387f8b44cbfb6c3d799->leave($__internal_5069b8d14138b44353e190cacd3a85b514eff691d0f86387f8b44cbfb6c3d799_prof);

    }

    // line 10
    public function block_ssplatform_body($context, array $blocks = array())
    {
        $__internal_e3c65688fd3ccebf14a8331c9906d1bd58c2de11cae57c1c89eedcfb299513c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3c65688fd3ccebf14a8331c9906d1bd58c2de11cae57c1c89eedcfb299513c8->enter($__internal_e3c65688fd3ccebf14a8331c9906d1bd58c2de11cae57c1c89eedcfb299513c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        $__internal_e84d4709f4f91d855d5ed296b45ff78aaaf634fb4b2b016282d9be195347b613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84d4709f4f91d855d5ed296b45ff78aaaf634fb4b2b016282d9be195347b613->enter($__internal_e84d4709f4f91d855d5ed296b45ff78aaaf634fb4b2b016282d9be195347b613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

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
        
        $__internal_e84d4709f4f91d855d5ed296b45ff78aaaf634fb4b2b016282d9be195347b613->leave($__internal_e84d4709f4f91d855d5ed296b45ff78aaaf634fb4b2b016282d9be195347b613_prof);

        
        $__internal_e3c65688fd3ccebf14a8331c9906d1bd58c2de11cae57c1c89eedcfb299513c8->leave($__internal_e3c65688fd3ccebf14a8331c9906d1bd58c2de11cae57c1c89eedcfb299513c8_prof);

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
        return array (  107 => 23,  102 => 21,  98 => 20,  94 => 19,  89 => 16,  80 => 14,  75 => 13,  72 => 11,  63 => 10,  50 => 7,  41 => 6,  11 => 4,);
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



{% endblock %}
", "SSPlatformBundle:Advert:view.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\Advert\\view.html.twig");
    }
}
