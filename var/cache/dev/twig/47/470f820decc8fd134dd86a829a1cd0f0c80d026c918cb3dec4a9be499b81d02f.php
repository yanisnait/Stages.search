<?php

/* SSPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_41c43ad3634229c6649461110808b46455c298fd3fe27d2580555e7abafc94c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("SSPlatformBundle::layout.html.twig", "SSPlatformBundle:Advert:index.html.twig", 3);
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
        $__internal_180378975d8ad60405d361ab00967149731f60409454724e49aae907a6678121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_180378975d8ad60405d361ab00967149731f60409454724e49aae907a6678121->enter($__internal_180378975d8ad60405d361ab00967149731f60409454724e49aae907a6678121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:index.html.twig"));

        $__internal_59379980679c53ffe3ec0d12925cf4d6b781a1b97068ee7b7abfdedd63f4c05b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59379980679c53ffe3ec0d12925cf4d6b781a1b97068ee7b7abfdedd63f4c05b->enter($__internal_59379980679c53ffe3ec0d12925cf4d6b781a1b97068ee7b7abfdedd63f4c05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_180378975d8ad60405d361ab00967149731f60409454724e49aae907a6678121->leave($__internal_180378975d8ad60405d361ab00967149731f60409454724e49aae907a6678121_prof);

        
        $__internal_59379980679c53ffe3ec0d12925cf4d6b781a1b97068ee7b7abfdedd63f4c05b->leave($__internal_59379980679c53ffe3ec0d12925cf4d6b781a1b97068ee7b7abfdedd63f4c05b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_36b6fbd0a08e2d1c2ce8d4483f855e76a72c891625fd572967fe84248d81f330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36b6fbd0a08e2d1c2ce8d4483f855e76a72c891625fd572967fe84248d81f330->enter($__internal_36b6fbd0a08e2d1c2ce8d4483f855e76a72c891625fd572967fe84248d81f330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_deba8af5758410f21b0409bf412d6606d14717af649575150d9c2e4f07a5453a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deba8af5758410f21b0409bf412d6606d14717af649575150d9c2e4f07a5453a->enter($__internal_deba8af5758410f21b0409bf412d6606d14717af649575150d9c2e4f07a5453a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_deba8af5758410f21b0409bf412d6606d14717af649575150d9c2e4f07a5453a->leave($__internal_deba8af5758410f21b0409bf412d6606d14717af649575150d9c2e4f07a5453a_prof);

        
        $__internal_36b6fbd0a08e2d1c2ce8d4483f855e76a72c891625fd572967fe84248d81f330->leave($__internal_36b6fbd0a08e2d1c2ce8d4483f855e76a72c891625fd572967fe84248d81f330_prof);

    }

    // line 9
    public function block_ssplatform_body($context, array $blocks = array())
    {
        $__internal_8198d4bacc7290ba3060185f8def5e98a0e4f7d55a44310e8c1a4ca77c7da01d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8198d4bacc7290ba3060185f8def5e98a0e4f7d55a44310e8c1a4ca77c7da01d->enter($__internal_8198d4bacc7290ba3060185f8def5e98a0e4f7d55a44310e8c1a4ca77c7da01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        $__internal_5b44b48b6016ec0cd2434461f95017a3537968835ed8f080bfc2e73dd22d093c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b44b48b6016ec0cd2434461f95017a3537968835ed8f080bfc2e73dd22d093c->enter($__internal_5b44b48b6016ec0cd2434461f95017a3537968835ed8f080bfc2e73dd22d093c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        // line 10
        echo "
  <h2>Liste des annonces</h2>

  <ul>
      ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 14, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "        <li>
          <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
              ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "
          </a>
          par ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "author", array()), "html", null, true);
            echo ",
          le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
        </li>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "        <li>Pas (encore !) d'annonces</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </ul>

";
        
        $__internal_5b44b48b6016ec0cd2434461f95017a3537968835ed8f080bfc2e73dd22d093c->leave($__internal_5b44b48b6016ec0cd2434461f95017a3537968835ed8f080bfc2e73dd22d093c_prof);

        
        $__internal_8198d4bacc7290ba3060185f8def5e98a0e4f7d55a44310e8c1a4ca77c7da01d->leave($__internal_8198d4bacc7290ba3060185f8def5e98a0e4f7d55a44310e8c1a4ca77c7da01d_prof);

    }

    public function getTemplateName()
    {
        return "SSPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  107 => 23,  99 => 20,  95 => 19,  90 => 17,  86 => 16,  83 => 15,  78 => 14,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SS/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"SSPlatformBundle::layout.html.twig\" %}

{% block title %}
  Accueil - {{ parent() }}
{% endblock %}

{% block ssplatform_body %}

  <h2>Liste des annonces</h2>

  <ul>
      {% for advert in listAdverts %}
        <li>
          <a href=\"{{ path('ss_platform_view', {'id': advert.id}) }}\">
              {{ advert.title }}
          </a>
          par {{ advert.author }},
          le {{ advert.date|date('d/m/Y') }}
        </li>
      {% else %}
        <li>Pas (encore !) d'annonces</li>
      {% endfor %}
  </ul>

{% endblock %}", "SSPlatformBundle:Advert:index.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
