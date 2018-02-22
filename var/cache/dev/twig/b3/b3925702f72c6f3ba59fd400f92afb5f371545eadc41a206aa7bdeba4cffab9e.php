<?php

/* SSPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_9a2c086261b7dd24bce755f00546b062c7306b4836e3137032a1a3fbb5d499d5 extends Twig_Template
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
        $__internal_c4e55c54166b84c8f7bec85889d4a03fef881056a5bb34f6599c3415d11a6ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e55c54166b84c8f7bec85889d4a03fef881056a5bb34f6599c3415d11a6ea2->enter($__internal_c4e55c54166b84c8f7bec85889d4a03fef881056a5bb34f6599c3415d11a6ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:menu.html.twig"));

        $__internal_3c55817d99077100e78a9ce629e237a1776688f78cd23112bf61da21100929ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c55817d99077100e78a9ce629e237a1776688f78cd23112bf61da21100929ac->enter($__internal_3c55817d99077100e78a9ce629e237a1776688f78cd23112bf61da21100929ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:menu.html.twig"));

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
        
        $__internal_c4e55c54166b84c8f7bec85889d4a03fef881056a5bb34f6599c3415d11a6ea2->leave($__internal_c4e55c54166b84c8f7bec85889d4a03fef881056a5bb34f6599c3415d11a6ea2_prof);

        
        $__internal_3c55817d99077100e78a9ce629e237a1776688f78cd23112bf61da21100929ac->leave($__internal_3c55817d99077100e78a9ce629e237a1776688f78cd23112bf61da21100929ac_prof);

    }

    public function getTemplateName()
    {
        return "SSPlatformBundle:Advert:menu.html.twig";
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
</ul>", "SSPlatformBundle:Advert:menu.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle/Resources/views/Advert/menu.html.twig");
    }
}
