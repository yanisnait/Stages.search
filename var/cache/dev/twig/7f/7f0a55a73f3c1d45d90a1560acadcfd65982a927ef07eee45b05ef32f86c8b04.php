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
        $__internal_0b3b64084c015230173221c1a86cf9eb58472ff92621169c7e56bfa0ab337756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b3b64084c015230173221c1a86cf9eb58472ff92621169c7e56bfa0ab337756->enter($__internal_0b3b64084c015230173221c1a86cf9eb58472ff92621169c7e56bfa0ab337756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:index.html.twig"));

        $__internal_f6e57ca39f0c6721ba881531c1602e26616ce183124420c89f3a709c83616b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e57ca39f0c6721ba881531c1602e26616ce183124420c89f3a709c83616b66->enter($__internal_f6e57ca39f0c6721ba881531c1602e26616ce183124420c89f3a709c83616b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b3b64084c015230173221c1a86cf9eb58472ff92621169c7e56bfa0ab337756->leave($__internal_0b3b64084c015230173221c1a86cf9eb58472ff92621169c7e56bfa0ab337756_prof);

        
        $__internal_f6e57ca39f0c6721ba881531c1602e26616ce183124420c89f3a709c83616b66->leave($__internal_f6e57ca39f0c6721ba881531c1602e26616ce183124420c89f3a709c83616b66_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a6b614b04f2686dc76bc8d47160974c07e6cffdce0d88359ceaae08304253bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6b614b04f2686dc76bc8d47160974c07e6cffdce0d88359ceaae08304253bd->enter($__internal_7a6b614b04f2686dc76bc8d47160974c07e6cffdce0d88359ceaae08304253bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_49587715cb6ec25230f41efe98003d0ecca7f3da96c1701c8f85d1feaa0f6f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49587715cb6ec25230f41efe98003d0ecca7f3da96c1701c8f85d1feaa0f6f86->enter($__internal_49587715cb6ec25230f41efe98003d0ecca7f3da96c1701c8f85d1feaa0f6f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_49587715cb6ec25230f41efe98003d0ecca7f3da96c1701c8f85d1feaa0f6f86->leave($__internal_49587715cb6ec25230f41efe98003d0ecca7f3da96c1701c8f85d1feaa0f6f86_prof);

        
        $__internal_7a6b614b04f2686dc76bc8d47160974c07e6cffdce0d88359ceaae08304253bd->leave($__internal_7a6b614b04f2686dc76bc8d47160974c07e6cffdce0d88359ceaae08304253bd_prof);

    }

    // line 10
    public function block_ssplatform_body($context, array $blocks = array())
    {
        $__internal_609298b054ace551001203957f01505983714060e5c8d4fdb733dee5f815db70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609298b054ace551001203957f01505983714060e5c8d4fdb733dee5f815db70->enter($__internal_609298b054ace551001203957f01505983714060e5c8d4fdb733dee5f815db70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        $__internal_3aea8eb6995976646d38d2274eb7bc22e55f8e77ac493151a3923d087d90e554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aea8eb6995976646d38d2274eb7bc22e55f8e77ac493151a3923d087d90e554->enter($__internal_3aea8eb6995976646d38d2274eb7bc22e55f8e77ac493151a3923d087d90e554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        // line 11
        echo "    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>

    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "        <p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  <h2>Liste des annonces</h2>
    <table class=\"table table-striped\">
        <thead class=\"thead-dark\">
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Intitulé</th>
            <th scope=\"col\">Posté par</th>
            <th scope=\"col\">Date publication</th>
        </tr>
        </thead>
        <tbody>
      ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 29, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 30
            echo "          <tr>
              <th>
                  ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()), "html", null, true);
            echo "
              </th>
              <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
                      ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "intitule", array()), "html", null, true);
            echo "
                  </a></td>
              <td>Test</td>
              <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "dateOffre", array()), "d/m/Y"), "html", null, true);
            echo "</td>
          </tr>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "        <tr>
            <td>Aucune annonce publiée</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listOffres"]) || array_key_exists("listOffres", $context) ? $context["listOffres"] : (function () { throw new Twig_Error_Runtime('Variable "listOffres" does not exist.', 45, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 46
            echo "      <tr>
          <th>
          </th>
          <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">

                Mes offres(";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 51, $this->getSourceContext()); })()), "html", null, true);
            echo " ) :   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "intitule", array()), "html", null, true);
            echo "
              </a></td>
          <td>Test</td>
          <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "dateOffre", array()), "d/m/Y"), "html", null, true);
            echo "</td>
      </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
  </table>

";
        
        $__internal_3aea8eb6995976646d38d2274eb7bc22e55f8e77ac493151a3923d087d90e554->leave($__internal_3aea8eb6995976646d38d2274eb7bc22e55f8e77ac493151a3923d087d90e554_prof);

        
        $__internal_609298b054ace551001203957f01505983714060e5c8d4fdb733dee5f815db70->leave($__internal_609298b054ace551001203957f01505983714060e5c8d4fdb733dee5f815db70_prof);

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
        return array (  177 => 57,  168 => 54,  160 => 51,  155 => 49,  150 => 46,  145 => 45,  136 => 41,  128 => 38,  122 => 35,  118 => 34,  113 => 32,  109 => 30,  104 => 29,  91 => 18,  82 => 16,  78 => 15,  72 => 11,  63 => 10,  50 => 7,  41 => 6,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SS/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"SSPlatformBundle::layout.html.twig\" %}


{% block title %}
  Accueil - {{ parent() }}
{% endblock %}

{% block ssplatform_body %}
    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>

    {% for message in app.session.flashbag.get('info') %}
        <p>Message flash : {{ message }}</p>
    {% endfor %}
  <h2>Liste des annonces</h2>
    <table class=\"table table-striped\">
        <thead class=\"thead-dark\">
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Intitulé</th>
            <th scope=\"col\">Posté par</th>
            <th scope=\"col\">Date publication</th>
        </tr>
        </thead>
        <tbody>
      {% for advert in listAdverts %}
          <tr>
              <th>
                  {{ advert.id }}
              </th>
              <td><a href=\"{{ path('ss_platform_view', {'id': advert.id}) }}\">
                      {{ advert.intitule }}
                  </a></td>
              <td>Test</td>
              <td>{{ advert.dateOffre|date('d/m/Y') }}</td>
          </tr>
      {% else %}
        <tr>
            <td>Aucune annonce publiée</td>
        </tr>
      {% endfor %}
      {% for advert in listOffres %}
      <tr>
          <th>
          </th>
          <td><a href=\"{{ path('ss_platform_view', {'id': advert.id}) }}\">

                Mes offres({{ total }} ) :   {{ advert.intitule }}
              </a></td>
          <td>Test</td>
          <td>{{ advert.dateOffre|date('d/m/Y') }}</td>
      </tr>
        {% endfor %}
        </tbody>
  </table>

{% endblock %}", "SSPlatformBundle:Advert:index.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\Advert\\index.html.twig");
    }
}
