<?php

/* @SSPlatform/Advert/menu.html.twig */
class __TwigTemplate_3c03ff2ec0ba9395632ac8895669d6d489ae64e764d3a546128ec87efb0a291b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80879a9986a2fb49d98e456d14d927404d76af24a612c087b3f29186dc1c2ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80879a9986a2fb49d98e456d14d927404d76af24a612c087b3f29186dc1c2ce4->enter($__internal_80879a9986a2fb49d98e456d14d927404d76af24a612c087b3f29186dc1c2ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SSPlatform/Advert/menu.html.twig"));

        $__internal_c94f481e732e3d36aa94e83f7e59e4f6dffe4b43ca9f83fc5b13c873f5f30ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94f481e732e3d36aa94e83f7e59e4f6dffe4b43ca9f83fc5b13c873f5f30ee6->enter($__internal_c94f481e732e3d36aa94e83f7e59e4f6dffe4b43ca9f83fc5b13c873f5f30ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SSPlatform/Advert/menu.html.twig"));

        // line 2
        echo "
";
        // line 5
        echo "
<ul class=\"nav nav-pills nav-stacked\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 7, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 8
            echo "        <li>
            <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
                ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>";
        
        $__internal_80879a9986a2fb49d98e456d14d927404d76af24a612c087b3f29186dc1c2ce4->leave($__internal_80879a9986a2fb49d98e456d14d927404d76af24a612c087b3f29186dc1c2ce4_prof);

        
        $__internal_c94f481e732e3d36aa94e83f7e59e4f6dffe4b43ca9f83fc5b13c873f5f30ee6->leave($__internal_c94f481e732e3d36aa94e83f7e59e4f6dffe4b43ca9f83fc5b13c873f5f30ee6_prof);

    }

    public function getTemplateName()
    {
        return "@SSPlatform/Advert/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  43 => 10,  39 => 9,  36 => 8,  32 => 7,  28 => 5,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SS/PlatformBundle/Resources/views/Advert/menu.html.twig #}

{# Ce template n'hérite de personne,
   tout comme le template inclus avec {{ include() }}. #}

<ul class=\"nav nav-pills nav-stacked\">
    {% for advert in listAdverts %}
        <li>
            <a href=\"{{ path('ss_platform_view', {'id': advert.id}) }}\">
                {{ advert.title }}
            </a>
        </li>
    {% endfor %}
</ul>", "@SSPlatform/Advert/menu.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\Advert\\menu.html.twig");
    }
}
