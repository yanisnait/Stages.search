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
        $__internal_95c0a1f9f30c576e9f72a9e49e64d164e6c08486d07179d969625f5fbf490bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c0a1f9f30c576e9f72a9e49e64d164e6c08486d07179d969625f5fbf490bca->enter($__internal_95c0a1f9f30c576e9f72a9e49e64d164e6c08486d07179d969625f5fbf490bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:view.html.twig"));

        $__internal_38cf3ca10986b6dea8f289a7667437b7a5eab32690d3083ac361078339ffab27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38cf3ca10986b6dea8f289a7667437b7a5eab32690d3083ac361078339ffab27->enter($__internal_38cf3ca10986b6dea8f289a7667437b7a5eab32690d3083ac361078339ffab27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95c0a1f9f30c576e9f72a9e49e64d164e6c08486d07179d969625f5fbf490bca->leave($__internal_95c0a1f9f30c576e9f72a9e49e64d164e6c08486d07179d969625f5fbf490bca_prof);

        
        $__internal_38cf3ca10986b6dea8f289a7667437b7a5eab32690d3083ac361078339ffab27->leave($__internal_38cf3ca10986b6dea8f289a7667437b7a5eab32690d3083ac361078339ffab27_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_79e3edfded531937122288ca6430c178ebbd6fe351a520170bb7b436f84ccb21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e3edfded531937122288ca6430c178ebbd6fe351a520170bb7b436f84ccb21->enter($__internal_79e3edfded531937122288ca6430c178ebbd6fe351a520170bb7b436f84ccb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_788e8d14d0122ccff330e05cd52651df53eb8844594c0d9e2acc45b569e31c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_788e8d14d0122ccff330e05cd52651df53eb8844594c0d9e2acc45b569e31c1c->enter($__internal_788e8d14d0122ccff330e05cd52651df53eb8844594c0d9e2acc45b569e31c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "Affichage de l'annonce n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new Twig_Error_Runtime('Variable "offre" does not exist.', 7, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "
";
        
        $__internal_788e8d14d0122ccff330e05cd52651df53eb8844594c0d9e2acc45b569e31c1c->leave($__internal_788e8d14d0122ccff330e05cd52651df53eb8844594c0d9e2acc45b569e31c1c_prof);

        
        $__internal_79e3edfded531937122288ca6430c178ebbd6fe351a520170bb7b436f84ccb21->leave($__internal_79e3edfded531937122288ca6430c178ebbd6fe351a520170bb7b436f84ccb21_prof);

    }

    // line 10
    public function block_ssplatform_body($context, array $blocks = array())
    {
        $__internal_ee118e2240fb1d8ec2c0a209016eca90206191ffb248ce4af054d6140b4b7658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee118e2240fb1d8ec2c0a209016eca90206191ffb248ce4af054d6140b4b7658->enter($__internal_ee118e2240fb1d8ec2c0a209016eca90206191ffb248ce4af054d6140b4b7658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        $__internal_7eda8e187d215c37c167d759dc7d96e3290ea32142a846ae087df1c2fbc29d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eda8e187d215c37c167d759dc7d96e3290ea32142a846ae087df1c2fbc29d33->enter($__internal_7eda8e187d215c37c167d759dc7d96e3290ea32142a846ae087df1c2fbc29d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        // line 11
        echo "    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<div>
    ";
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "notice_O"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "        <p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</div>

<p>
    ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new Twig_Error_Runtime('Variable "offre" does not exist.', 22, $this->getSourceContext()); })()), "intitule", array()), "html", null, true);
        echo "<br>
    <img src=";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new Twig_Error_Runtime('Variable "logo" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true);
        echo ">
    <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new Twig_Error_Runtime('Variable "offre" does not exist.', 24, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" type=\"submit\">Modifier</a>

    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new Twig_Error_Runtime('Variable "offre" does not exist.', 26, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" type=\"submit\">Supprimer</a>

</p>
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 29, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "notice_C"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 30
            echo "        <p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["commentBox"]) || array_key_exists("commentBox", $context) ? $context["commentBox"] : (function () { throw new Twig_Error_Runtime('Variable "commentBox" does not exist.', 32, $this->getSourceContext()); })()), 'form');
        echo "

    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new Twig_Error_Runtime('Variable "offre" does not exist.', 34, $this->getSourceContext()); })()), "avis", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["coms"]) {
            // line 35
            echo "        <!------ Include the above in your HEAD tag ---------->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-1\">
                </div><!-- /col-sm-1 -->
                <div class=\"col-sm-5\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <strong>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["coms"], "auteur", array()), "username", array()), "html", null, true);
            echo "</strong> <span class=\"text-muted\">publié le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["coms"], "date", array()), "m/d/Y à H:i:s"), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"panel-body\">
                            ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["coms"], "contenu", array()), "html", null, true);
            echo "
                        </div><!-- /panel-body -->
                    </div><!-- /panel panel-default -->
                </div><!-- /col-sm-5 -->

            </div><!-- /row -->
        </div><!-- /container -->
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "    Pas de commentaires pour cette offre !
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "




";
        
        $__internal_7eda8e187d215c37c167d759dc7d96e3290ea32142a846ae087df1c2fbc29d33->leave($__internal_7eda8e187d215c37c167d759dc7d96e3290ea32142a846ae087df1c2fbc29d33_prof);

        
        $__internal_ee118e2240fb1d8ec2c0a209016eca90206191ffb248ce4af054d6140b4b7658->leave($__internal_ee118e2240fb1d8ec2c0a209016eca90206191ffb248ce4af054d6140b4b7658_prof);

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
        return array (  178 => 56,  171 => 54,  158 => 46,  150 => 43,  140 => 35,  135 => 34,  129 => 32,  120 => 30,  116 => 29,  110 => 26,  105 => 24,  101 => 23,  97 => 22,  92 => 19,  83 => 17,  78 => 16,  72 => 11,  63 => 10,  50 => 7,  41 => 6,  11 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SS/PlatformBundle/Resources/view/Advert/view.html.twig #}


{% extends \"SSPlatformBundle::layout.html.twig\" %}

{% block title  %}
Affichage de l'annonce n°{{ offre.id }}
{% endblock %}

{% block ssplatform_body %}
    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<div>
    {# On affiche tous les messages flash dont le nom est « info » #}
    {% for message in app.session.flashbag.get('notice_O') %}
        <p>Message flash : {{ message }}</p>
    {% endfor %}
</div>

<p>
    {{ offre.intitule }}<br>
    <img src={{ logo }}>
    <a href=\"{{ path('ss_platform_edit',{'id':offre.id}) }}\" type=\"submit\">Modifier</a>

    <a href=\"{{ path('ss_platform_delete',{'id':offre.id}) }}\" type=\"submit\">Supprimer</a>

</p>
    {% for message in app.session.flashbag.get('notice_C') %}
        <p>Message flash : {{ message }}</p>
    {% endfor %}
    {{ form(commentBox) }}

    {% for coms in offre.avis %}
        <!------ Include the above in your HEAD tag ---------->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-1\">
                </div><!-- /col-sm-1 -->
                <div class=\"col-sm-5\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <strong>{{coms.auteur.username}}</strong> <span class=\"text-muted\">publié le {{ coms.date|date(\"m/d/Y à H:i:s\") }}</span>
                        </div>
                        <div class=\"panel-body\">
                            {{ coms.contenu }}
                        </div><!-- /panel-body -->
                    </div><!-- /panel panel-default -->
                </div><!-- /col-sm-5 -->

            </div><!-- /row -->
        </div><!-- /container -->
    {% else %}
    Pas de commentaires pour cette offre !
    {% endfor %}





{% endblock %}
", "SSPlatformBundle:Advert:view.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\Advert\\view.html.twig");
    }
}
