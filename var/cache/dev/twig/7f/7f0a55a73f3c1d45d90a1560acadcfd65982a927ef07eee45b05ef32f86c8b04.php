<?php

/* SSPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_c18c09da88d0c2e7871395f0ab410d4de38cc387323fc4f2e98066c3be6b0529 extends Twig_Template
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
        $__internal_47270ae91d1aeefd85625655a8c9cfc985f295436bf3518c1b72f3aa02ac5e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47270ae91d1aeefd85625655a8c9cfc985f295436bf3518c1b72f3aa02ac5e6a->enter($__internal_47270ae91d1aeefd85625655a8c9cfc985f295436bf3518c1b72f3aa02ac5e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:index.html.twig"));

        $__internal_d1751826223cec9e07082ddfed34b8c9540abf947a9efa6a9c9176593f6f44d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1751826223cec9e07082ddfed34b8c9540abf947a9efa6a9c9176593f6f44d5->enter($__internal_d1751826223cec9e07082ddfed34b8c9540abf947a9efa6a9c9176593f6f44d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47270ae91d1aeefd85625655a8c9cfc985f295436bf3518c1b72f3aa02ac5e6a->leave($__internal_47270ae91d1aeefd85625655a8c9cfc985f295436bf3518c1b72f3aa02ac5e6a_prof);

        
        $__internal_d1751826223cec9e07082ddfed34b8c9540abf947a9efa6a9c9176593f6f44d5->leave($__internal_d1751826223cec9e07082ddfed34b8c9540abf947a9efa6a9c9176593f6f44d5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_931bc41813853b41e04b75e3928784ad818718aa5760cb53cb372b78fd199c27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931bc41813853b41e04b75e3928784ad818718aa5760cb53cb372b78fd199c27->enter($__internal_931bc41813853b41e04b75e3928784ad818718aa5760cb53cb372b78fd199c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_70ab042656540154b9cd5d2809cb866bd4cbf052744131cd4141edf122261c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ab042656540154b9cd5d2809cb866bd4cbf052744131cd4141edf122261c1e->enter($__internal_70ab042656540154b9cd5d2809cb866bd4cbf052744131cd4141edf122261c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_70ab042656540154b9cd5d2809cb866bd4cbf052744131cd4141edf122261c1e->leave($__internal_70ab042656540154b9cd5d2809cb866bd4cbf052744131cd4141edf122261c1e_prof);

        
        $__internal_931bc41813853b41e04b75e3928784ad818718aa5760cb53cb372b78fd199c27->leave($__internal_931bc41813853b41e04b75e3928784ad818718aa5760cb53cb372b78fd199c27_prof);

    }

    // line 9
    public function block_ssplatform_body($context, array $blocks = array())
    {
        $__internal_6826c403d41728c12239f02090dd726a945a5cc396e44796e5f22252f43a08a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6826c403d41728c12239f02090dd726a945a5cc396e44796e5f22252f43a08a5->enter($__internal_6826c403d41728c12239f02090dd726a945a5cc396e44796e5f22252f43a08a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        $__internal_ff75958817a983d6b27651519ad2ee02540c1d57b9f2648a3fbc47502272aad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff75958817a983d6b27651519ad2ee02540c1d57b9f2648a3fbc47502272aad1->enter($__internal_ff75958817a983d6b27651519ad2ee02540c1d57b9f2648a3fbc47502272aad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "        <p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  <h2>Liste des annonces</h2>

  <ul>
      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 16, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 17
            echo "        <li>
          <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
              ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "intitule", array()), "html", null, true);
            echo "
          </a>
          par ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "idPers", array()), "html", null, true);
            echo ",
          le ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "dateOffre", array()), "d/m/Y"), "html", null, true);
            echo "
        </li>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "        <li>Pas (encore !) d'annonces</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  </ul>

";
        
        $__internal_ff75958817a983d6b27651519ad2ee02540c1d57b9f2648a3fbc47502272aad1->leave($__internal_ff75958817a983d6b27651519ad2ee02540c1d57b9f2648a3fbc47502272aad1_prof);

        
        $__internal_6826c403d41728c12239f02090dd726a945a5cc396e44796e5f22252f43a08a5->leave($__internal_6826c403d41728c12239f02090dd726a945a5cc396e44796e5f22252f43a08a5_prof);

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
        return array (  127 => 27,  120 => 25,  112 => 22,  108 => 21,  103 => 19,  99 => 18,  96 => 17,  91 => 16,  86 => 13,  77 => 11,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SS/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"SSPlatformBundle::layout.html.twig\" %}

{% block title %}
  Accueil - {{ parent() }}
{% endblock %}

{% block ssplatform_body %}
    {% for message in app.session.flashbag.get('info') %}
        <p>Message flash : {{ message }}</p>
    {% endfor %}
  <h2>Liste des annonces</h2>

  <ul>
      {% for advert in listAdverts %}
        <li>
          <a href=\"{{ path('ss_platform_view', {'id': advert.id}) }}\">
              {{ advert.intitule }}
          </a>
          par {{ advert.idPers }},
          le {{ advert.dateOffre|date('d/m/Y') }}
        </li>
      {% else %}
        <li>Pas (encore !) d'annonces</li>
      {% endfor %}
  </ul>

{% endblock %}", "SSPlatformBundle:Advert:index.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\Advert\\index.html.twig");
    }
}
