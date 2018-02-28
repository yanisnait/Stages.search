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
        $__internal_dccb7d07638ad5d1dcde5eee85a492f953c0350b12066f50a3e5d9977450015b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dccb7d07638ad5d1dcde5eee85a492f953c0350b12066f50a3e5d9977450015b->enter($__internal_dccb7d07638ad5d1dcde5eee85a492f953c0350b12066f50a3e5d9977450015b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:index.html.twig"));

        $__internal_8d628b986a249c1a8b93bc10ad77f51d93c5a9b4453063399d1d5f537fbb623b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d628b986a249c1a8b93bc10ad77f51d93c5a9b4453063399d1d5f537fbb623b->enter($__internal_8d628b986a249c1a8b93bc10ad77f51d93c5a9b4453063399d1d5f537fbb623b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dccb7d07638ad5d1dcde5eee85a492f953c0350b12066f50a3e5d9977450015b->leave($__internal_dccb7d07638ad5d1dcde5eee85a492f953c0350b12066f50a3e5d9977450015b_prof);

        
        $__internal_8d628b986a249c1a8b93bc10ad77f51d93c5a9b4453063399d1d5f537fbb623b->leave($__internal_8d628b986a249c1a8b93bc10ad77f51d93c5a9b4453063399d1d5f537fbb623b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec1cd23f5f410892a419c080a9be491745233d26e1b361b1762ac8eb28cb64a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1cd23f5f410892a419c080a9be491745233d26e1b361b1762ac8eb28cb64a5->enter($__internal_ec1cd23f5f410892a419c080a9be491745233d26e1b361b1762ac8eb28cb64a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d54c60f27455083052b003abe7503b567352af0382396b3ebeaf66f4ddf30ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d54c60f27455083052b003abe7503b567352af0382396b3ebeaf66f4ddf30ac9->enter($__internal_d54c60f27455083052b003abe7503b567352af0382396b3ebeaf66f4ddf30ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d54c60f27455083052b003abe7503b567352af0382396b3ebeaf66f4ddf30ac9->leave($__internal_d54c60f27455083052b003abe7503b567352af0382396b3ebeaf66f4ddf30ac9_prof);

        
        $__internal_ec1cd23f5f410892a419c080a9be491745233d26e1b361b1762ac8eb28cb64a5->leave($__internal_ec1cd23f5f410892a419c080a9be491745233d26e1b361b1762ac8eb28cb64a5_prof);

    }

    // line 9
    public function block_ssplatform_body($context, array $blocks = array())
    {
        $__internal_c4c95e2d6e1b2aee6fd2aa02694f450d04df4e6cdea8dc3b6b8f1e85ce94e69d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4c95e2d6e1b2aee6fd2aa02694f450d04df4e6cdea8dc3b6b8f1e85ce94e69d->enter($__internal_c4c95e2d6e1b2aee6fd2aa02694f450d04df4e6cdea8dc3b6b8f1e85ce94e69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        $__internal_df9aa7cce9ab598d8a8e59dd717b84cffb7cf0f92247a7d801e091b91782e933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9aa7cce9ab598d8a8e59dd717b84cffb7cf0f92247a7d801e091b91782e933->enter($__internal_df9aa7cce9ab598d8a8e59dd717b84cffb7cf0f92247a7d801e091b91782e933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "notice_O_Delete"), "method"));
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
        
        $__internal_df9aa7cce9ab598d8a8e59dd717b84cffb7cf0f92247a7d801e091b91782e933->leave($__internal_df9aa7cce9ab598d8a8e59dd717b84cffb7cf0f92247a7d801e091b91782e933_prof);

        
        $__internal_c4c95e2d6e1b2aee6fd2aa02694f450d04df4e6cdea8dc3b6b8f1e85ce94e69d->leave($__internal_c4c95e2d6e1b2aee6fd2aa02694f450d04df4e6cdea8dc3b6b8f1e85ce94e69d_prof);

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
    {% for message in app.session.flashbag.get('notice_O_Delete') %}
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
