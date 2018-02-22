<?php

/* @SSPlatform/Advert/index.html.twig */
class __TwigTemplate_c18c09da88d0c2e7871395f0ab410d4de38cc387323fc4f2e98066c3be6b0529 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("SSPlatformBundle::layout.html.twig", "@SSPlatform/Advert/index.html.twig", 3);
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
        $__internal_f7579d6e388b8e101c394b3e5c36b807abd253cd0ace80590d64596fc479bd1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7579d6e388b8e101c394b3e5c36b807abd253cd0ace80590d64596fc479bd1e->enter($__internal_f7579d6e388b8e101c394b3e5c36b807abd253cd0ace80590d64596fc479bd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SSPlatform/Advert/index.html.twig"));

        $__internal_f25bcaac30fb8ff5d990ebe6fad5b8d2c2b80a08995ab2f711414f33474ef028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25bcaac30fb8ff5d990ebe6fad5b8d2c2b80a08995ab2f711414f33474ef028->enter($__internal_f25bcaac30fb8ff5d990ebe6fad5b8d2c2b80a08995ab2f711414f33474ef028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SSPlatform/Advert/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7579d6e388b8e101c394b3e5c36b807abd253cd0ace80590d64596fc479bd1e->leave($__internal_f7579d6e388b8e101c394b3e5c36b807abd253cd0ace80590d64596fc479bd1e_prof);

        
        $__internal_f25bcaac30fb8ff5d990ebe6fad5b8d2c2b80a08995ab2f711414f33474ef028->leave($__internal_f25bcaac30fb8ff5d990ebe6fad5b8d2c2b80a08995ab2f711414f33474ef028_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d657a4fd63711a3e3e67435924b9946a1788826db7939c0b062dfcff5d54b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d657a4fd63711a3e3e67435924b9946a1788826db7939c0b062dfcff5d54b37->enter($__internal_9d657a4fd63711a3e3e67435924b9946a1788826db7939c0b062dfcff5d54b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea20dfea427f523d9bba70937c795d1743f591a29d0de9116bb94e10a5bbd84a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea20dfea427f523d9bba70937c795d1743f591a29d0de9116bb94e10a5bbd84a->enter($__internal_ea20dfea427f523d9bba70937c795d1743f591a29d0de9116bb94e10a5bbd84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ea20dfea427f523d9bba70937c795d1743f591a29d0de9116bb94e10a5bbd84a->leave($__internal_ea20dfea427f523d9bba70937c795d1743f591a29d0de9116bb94e10a5bbd84a_prof);

        
        $__internal_9d657a4fd63711a3e3e67435924b9946a1788826db7939c0b062dfcff5d54b37->leave($__internal_9d657a4fd63711a3e3e67435924b9946a1788826db7939c0b062dfcff5d54b37_prof);

    }

    // line 9
    public function block_ssplatform_body($context, array $blocks = array())
    {
        $__internal_9c5c7c0c6d8c59dcb7cbc7e4ca487bd119859115d4c8d86bb72c7d63774557c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c5c7c0c6d8c59dcb7cbc7e4ca487bd119859115d4c8d86bb72c7d63774557c5->enter($__internal_9c5c7c0c6d8c59dcb7cbc7e4ca487bd119859115d4c8d86bb72c7d63774557c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        $__internal_75ddb6b5aa0ded45e64cc571624eddc2ea66135f1f28a786c99265a1a508273f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ddb6b5aa0ded45e64cc571624eddc2ea66135f1f28a786c99265a1a508273f->enter($__internal_75ddb6b5aa0ded45e64cc571624eddc2ea66135f1f28a786c99265a1a508273f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

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
        
        $__internal_75ddb6b5aa0ded45e64cc571624eddc2ea66135f1f28a786c99265a1a508273f->leave($__internal_75ddb6b5aa0ded45e64cc571624eddc2ea66135f1f28a786c99265a1a508273f_prof);

        
        $__internal_9c5c7c0c6d8c59dcb7cbc7e4ca487bd119859115d4c8d86bb72c7d63774557c5->leave($__internal_9c5c7c0c6d8c59dcb7cbc7e4ca487bd119859115d4c8d86bb72c7d63774557c5_prof);

    }

    public function getTemplateName()
    {
        return "@SSPlatform/Advert/index.html.twig";
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

{% endblock %}", "@SSPlatform/Advert/index.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\Advert\\index.html.twig");
    }
}
