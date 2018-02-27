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
        $__internal_5605d4eeafd6a358e017fec32e6d64a73ac19c9a5c6ad1a9f098fd1029530bdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5605d4eeafd6a358e017fec32e6d64a73ac19c9a5c6ad1a9f098fd1029530bdf->enter($__internal_5605d4eeafd6a358e017fec32e6d64a73ac19c9a5c6ad1a9f098fd1029530bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:index.html.twig"));

        $__internal_5c3a525ba91262c780f17be17a167d7322480e22e3cfe34d0e79bee1e52943cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3a525ba91262c780f17be17a167d7322480e22e3cfe34d0e79bee1e52943cd->enter($__internal_5c3a525ba91262c780f17be17a167d7322480e22e3cfe34d0e79bee1e52943cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5605d4eeafd6a358e017fec32e6d64a73ac19c9a5c6ad1a9f098fd1029530bdf->leave($__internal_5605d4eeafd6a358e017fec32e6d64a73ac19c9a5c6ad1a9f098fd1029530bdf_prof);

        
        $__internal_5c3a525ba91262c780f17be17a167d7322480e22e3cfe34d0e79bee1e52943cd->leave($__internal_5c3a525ba91262c780f17be17a167d7322480e22e3cfe34d0e79bee1e52943cd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2abe281033f3da94fca63ed96b343095ef1931c2540c66dd4be63d06a02e37cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2abe281033f3da94fca63ed96b343095ef1931c2540c66dd4be63d06a02e37cc->enter($__internal_2abe281033f3da94fca63ed96b343095ef1931c2540c66dd4be63d06a02e37cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_56f78ba631ec777640d129fd33c1820684302b4b7ed7e477a5b4b137d826a12c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f78ba631ec777640d129fd33c1820684302b4b7ed7e477a5b4b137d826a12c->enter($__internal_56f78ba631ec777640d129fd33c1820684302b4b7ed7e477a5b4b137d826a12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_56f78ba631ec777640d129fd33c1820684302b4b7ed7e477a5b4b137d826a12c->leave($__internal_56f78ba631ec777640d129fd33c1820684302b4b7ed7e477a5b4b137d826a12c_prof);

        
        $__internal_2abe281033f3da94fca63ed96b343095ef1931c2540c66dd4be63d06a02e37cc->leave($__internal_2abe281033f3da94fca63ed96b343095ef1931c2540c66dd4be63d06a02e37cc_prof);

    }

    // line 9
    public function block_ssplatform_body($context, array $blocks = array())
    {
        $__internal_952ce8453d917276dfd2f928fd76035ddd87f6befa1aba0b5faecfbf5d55e2dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952ce8453d917276dfd2f928fd76035ddd87f6befa1aba0b5faecfbf5d55e2dd->enter($__internal_952ce8453d917276dfd2f928fd76035ddd87f6befa1aba0b5faecfbf5d55e2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        $__internal_fbd447733dd0d8ad12fe26309db06a2632a61e85080dd0f9bba39bff42e7ca2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd447733dd0d8ad12fe26309db06a2632a61e85080dd0f9bba39bff42e7ca2d->enter($__internal_fbd447733dd0d8ad12fe26309db06a2632a61e85080dd0f9bba39bff42e7ca2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "
          </a>
          par ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "author", array()), "html", null, true);
            echo ",
          le ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "date", array()), "d/m/Y"), "html", null, true);
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
        
        $__internal_fbd447733dd0d8ad12fe26309db06a2632a61e85080dd0f9bba39bff42e7ca2d->leave($__internal_fbd447733dd0d8ad12fe26309db06a2632a61e85080dd0f9bba39bff42e7ca2d_prof);

        
        $__internal_952ce8453d917276dfd2f928fd76035ddd87f6befa1aba0b5faecfbf5d55e2dd->leave($__internal_952ce8453d917276dfd2f928fd76035ddd87f6befa1aba0b5faecfbf5d55e2dd_prof);

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
              {{ advert.title }}
          </a>
          par {{ advert.author }},
          le {{ advert.date|date('d/m/Y') }}
        </li>
      {% else %}
        <li>Pas (encore !) d'annonces</li>
      {% endfor %}
  </ul>

{% endblock %}", "SSPlatformBundle:Advert:index.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\Advert\\index.html.twig");
    }
}
