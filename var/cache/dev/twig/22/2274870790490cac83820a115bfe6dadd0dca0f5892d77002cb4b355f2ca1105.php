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
        $__internal_7d1b18dcdaa36d4efb5b60197b0ba663613cfc2f37caf6d2575075b8c5890428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d1b18dcdaa36d4efb5b60197b0ba663613cfc2f37caf6d2575075b8c5890428->enter($__internal_7d1b18dcdaa36d4efb5b60197b0ba663613cfc2f37caf6d2575075b8c5890428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:view.html.twig"));

        $__internal_5a66d1df5ea12b65296a5838300ec6a432dfda05e0cc6de23eede36450d78382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a66d1df5ea12b65296a5838300ec6a432dfda05e0cc6de23eede36450d78382->enter($__internal_5a66d1df5ea12b65296a5838300ec6a432dfda05e0cc6de23eede36450d78382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d1b18dcdaa36d4efb5b60197b0ba663613cfc2f37caf6d2575075b8c5890428->leave($__internal_7d1b18dcdaa36d4efb5b60197b0ba663613cfc2f37caf6d2575075b8c5890428_prof);

        
        $__internal_5a66d1df5ea12b65296a5838300ec6a432dfda05e0cc6de23eede36450d78382->leave($__internal_5a66d1df5ea12b65296a5838300ec6a432dfda05e0cc6de23eede36450d78382_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d3f2a924802ea5dd38fb62a4221e7ac40b79d0b0f6c1ff14e93331e67ad82d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3f2a924802ea5dd38fb62a4221e7ac40b79d0b0f6c1ff14e93331e67ad82d3->enter($__internal_4d3f2a924802ea5dd38fb62a4221e7ac40b79d0b0f6c1ff14e93331e67ad82d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c432dca81e386f62e26965743291608b870983b486c8bc812a7117457db4bd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c432dca81e386f62e26965743291608b870983b486c8bc812a7117457db4bd4f->enter($__internal_c432dca81e386f62e26965743291608b870983b486c8bc812a7117457db4bd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "Affichage de l'annonce n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new Twig_Error_Runtime('Variable "offre" does not exist.', 7, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "
";
        
        $__internal_c432dca81e386f62e26965743291608b870983b486c8bc812a7117457db4bd4f->leave($__internal_c432dca81e386f62e26965743291608b870983b486c8bc812a7117457db4bd4f_prof);

        
        $__internal_4d3f2a924802ea5dd38fb62a4221e7ac40b79d0b0f6c1ff14e93331e67ad82d3->leave($__internal_4d3f2a924802ea5dd38fb62a4221e7ac40b79d0b0f6c1ff14e93331e67ad82d3_prof);

    }

    // line 10
    public function block_ssplatform_body($context, array $blocks = array())
    {
        $__internal_e1c2e476d9e6ec99ff0edc482a0237fcc493b905b4aaf211621ce55ab665cc0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c2e476d9e6ec99ff0edc482a0237fcc493b905b4aaf211621ce55ab665cc0e->enter($__internal_e1c2e476d9e6ec99ff0edc482a0237fcc493b905b4aaf211621ce55ab665cc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        $__internal_8732e15508c3a487a694ea5ce7676d5a64d3e028c931a6614b062a0a13a9d102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8732e15508c3a487a694ea5ce7676d5a64d3e028c931a6614b062a0a13a9d102->enter($__internal_8732e15508c3a487a694ea5ce7676d5a64d3e028c931a6614b062a0a13a9d102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

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
    <img src=\"hjggggj\">
</p>



";
        
        $__internal_8732e15508c3a487a694ea5ce7676d5a64d3e028c931a6614b062a0a13a9d102->leave($__internal_8732e15508c3a487a694ea5ce7676d5a64d3e028c931a6614b062a0a13a9d102_prof);

        
        $__internal_e1c2e476d9e6ec99ff0edc482a0237fcc493b905b4aaf211621ce55ab665cc0e->leave($__internal_e1c2e476d9e6ec99ff0edc482a0237fcc493b905b4aaf211621ce55ab665cc0e_prof);

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
        return array (  94 => 19,  89 => 16,  80 => 14,  75 => 13,  72 => 11,  63 => 10,  50 => 7,  41 => 6,  11 => 4,);
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
    <img src=\"hjggggj\">
</p>



{% endblock %}
", "SSPlatformBundle:Advert:view.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\Advert\\view.html.twig");
    }
}
