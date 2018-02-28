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
        $__internal_9727c537ce162a4f4a031a14255a478445f88b75e47b3af3ab9916f210d3892f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9727c537ce162a4f4a031a14255a478445f88b75e47b3af3ab9916f210d3892f->enter($__internal_9727c537ce162a4f4a031a14255a478445f88b75e47b3af3ab9916f210d3892f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:view.html.twig"));

        $__internal_9a6d80f7bef6333bdc71f7f452871f7cc81b658e5308a2af0f63ae6c33e38def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6d80f7bef6333bdc71f7f452871f7cc81b658e5308a2af0f63ae6c33e38def->enter($__internal_9a6d80f7bef6333bdc71f7f452871f7cc81b658e5308a2af0f63ae6c33e38def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9727c537ce162a4f4a031a14255a478445f88b75e47b3af3ab9916f210d3892f->leave($__internal_9727c537ce162a4f4a031a14255a478445f88b75e47b3af3ab9916f210d3892f_prof);

        
        $__internal_9a6d80f7bef6333bdc71f7f452871f7cc81b658e5308a2af0f63ae6c33e38def->leave($__internal_9a6d80f7bef6333bdc71f7f452871f7cc81b658e5308a2af0f63ae6c33e38def_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_39ecb1a1f765d0ce6cf29bf38d7f085a5709c2f6d382c18093c5eaa3b11ce314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ecb1a1f765d0ce6cf29bf38d7f085a5709c2f6d382c18093c5eaa3b11ce314->enter($__internal_39ecb1a1f765d0ce6cf29bf38d7f085a5709c2f6d382c18093c5eaa3b11ce314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_df7a87cc503abc7ec558d3d9c901038a76c0abd222b8f7ce138d231cac28dcc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df7a87cc503abc7ec558d3d9c901038a76c0abd222b8f7ce138d231cac28dcc3->enter($__internal_df7a87cc503abc7ec558d3d9c901038a76c0abd222b8f7ce138d231cac28dcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "Affichage de l'annonce n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new Twig_Error_Runtime('Variable "offre" does not exist.', 7, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "
";
        
        $__internal_df7a87cc503abc7ec558d3d9c901038a76c0abd222b8f7ce138d231cac28dcc3->leave($__internal_df7a87cc503abc7ec558d3d9c901038a76c0abd222b8f7ce138d231cac28dcc3_prof);

        
        $__internal_39ecb1a1f765d0ce6cf29bf38d7f085a5709c2f6d382c18093c5eaa3b11ce314->leave($__internal_39ecb1a1f765d0ce6cf29bf38d7f085a5709c2f6d382c18093c5eaa3b11ce314_prof);

    }

    // line 10
    public function block_ssplatform_body($context, array $blocks = array())
    {
        $__internal_bea48a9e7a20e4c34a10091826b34339065514374cd51fae9782c3135aced88d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea48a9e7a20e4c34a10091826b34339065514374cd51fae9782c3135aced88d->enter($__internal_bea48a9e7a20e4c34a10091826b34339065514374cd51fae9782c3135aced88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        $__internal_597249e5247edf942285be619269590f26c884dd985ebd286b9e5b509fa2bcb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597249e5247edf942285be619269590f26c884dd985ebd286b9e5b509fa2bcb1->enter($__internal_597249e5247edf942285be619269590f26c884dd985ebd286b9e5b509fa2bcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

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
    <img src=";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new Twig_Error_Runtime('Variable "logo" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
        echo ">
</p>



";
        
        $__internal_597249e5247edf942285be619269590f26c884dd985ebd286b9e5b509fa2bcb1->leave($__internal_597249e5247edf942285be619269590f26c884dd985ebd286b9e5b509fa2bcb1_prof);

        
        $__internal_bea48a9e7a20e4c34a10091826b34339065514374cd51fae9782c3135aced88d->leave($__internal_bea48a9e7a20e4c34a10091826b34339065514374cd51fae9782c3135aced88d_prof);

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
    <img src={{ logo }}>
</p>



{% endblock %}
", "SSPlatformBundle:Advert:view.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\Advert\\view.html.twig");
    }
}
