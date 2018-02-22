<?php

/* @SSPlatform/Advert/view.html.twig */
class __TwigTemplate_aa646a049986b5237760fc7456b72bc7adc020e42f7a7f79295c8b9b3e52a921 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("SSPlatformBundle::layout.html.twig", "@SSPlatform/Advert/view.html.twig", 4);
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
        $__internal_a24f58c1d29fd95ced0b64cfb8ecf5720bc99523ee11885e3909d6f8bf85f6d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a24f58c1d29fd95ced0b64cfb8ecf5720bc99523ee11885e3909d6f8bf85f6d3->enter($__internal_a24f58c1d29fd95ced0b64cfb8ecf5720bc99523ee11885e3909d6f8bf85f6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SSPlatform/Advert/view.html.twig"));

        $__internal_d1db6d842293a52b535505a9d12166aa925e2bb11ccf2cbcf7462be8b24e105e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1db6d842293a52b535505a9d12166aa925e2bb11ccf2cbcf7462be8b24e105e->enter($__internal_d1db6d842293a52b535505a9d12166aa925e2bb11ccf2cbcf7462be8b24e105e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SSPlatform/Advert/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a24f58c1d29fd95ced0b64cfb8ecf5720bc99523ee11885e3909d6f8bf85f6d3->leave($__internal_a24f58c1d29fd95ced0b64cfb8ecf5720bc99523ee11885e3909d6f8bf85f6d3_prof);

        
        $__internal_d1db6d842293a52b535505a9d12166aa925e2bb11ccf2cbcf7462be8b24e105e->leave($__internal_d1db6d842293a52b535505a9d12166aa925e2bb11ccf2cbcf7462be8b24e105e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_55a27e8e2da16c8ebbe9cc99e303aef0faa977b956c7c1a8e49186746428c57c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55a27e8e2da16c8ebbe9cc99e303aef0faa977b956c7c1a8e49186746428c57c->enter($__internal_55a27e8e2da16c8ebbe9cc99e303aef0faa977b956c7c1a8e49186746428c57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5976deb7c276aa0ff5bcf8a611862d1ddf3e403d95d0fc19a17985548a53e1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5976deb7c276aa0ff5bcf8a611862d1ddf3e403d95d0fc19a17985548a53e1c4->enter($__internal_5976deb7c276aa0ff5bcf8a611862d1ddf3e403d95d0fc19a17985548a53e1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "Affichage de l'annonce n°";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
        echo "
";
        
        $__internal_5976deb7c276aa0ff5bcf8a611862d1ddf3e403d95d0fc19a17985548a53e1c4->leave($__internal_5976deb7c276aa0ff5bcf8a611862d1ddf3e403d95d0fc19a17985548a53e1c4_prof);

        
        $__internal_55a27e8e2da16c8ebbe9cc99e303aef0faa977b956c7c1a8e49186746428c57c->leave($__internal_55a27e8e2da16c8ebbe9cc99e303aef0faa977b956c7c1a8e49186746428c57c_prof);

    }

    // line 10
    public function block_ssplatform_body($context, array $blocks = array())
    {
        $__internal_0d5e35a75a2ba3e5217626090cadf0d638d961cb7ce92dc8700def71c5caabdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5e35a75a2ba3e5217626090cadf0d638d961cb7ce92dc8700def71c5caabdd->enter($__internal_0d5e35a75a2ba3e5217626090cadf0d638d961cb7ce92dc8700def71c5caabdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        $__internal_e5d6a6174f3465a10469fa310cc50a9ad31e020f08a438b45ec91328b16e5fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d6a6174f3465a10469fa310cc50a9ad31e020f08a438b45ec91328b16e5fb4->enter($__internal_e5d6a6174f3465a10469fa310cc50a9ad31e020f08a438b45ec91328b16e5fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

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
        
        $__internal_e5d6a6174f3465a10469fa310cc50a9ad31e020f08a438b45ec91328b16e5fb4->leave($__internal_e5d6a6174f3465a10469fa310cc50a9ad31e020f08a438b45ec91328b16e5fb4_prof);

        
        $__internal_0d5e35a75a2ba3e5217626090cadf0d638d961cb7ce92dc8700def71c5caabdd->leave($__internal_0d5e35a75a2ba3e5217626090cadf0d638d961cb7ce92dc8700def71c5caabdd_prof);

    }

    public function getTemplateName()
    {
        return "@SSPlatform/Advert/view.html.twig";
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
", "@SSPlatform/Advert/view.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\Advert\\view.html.twig");
    }
}
