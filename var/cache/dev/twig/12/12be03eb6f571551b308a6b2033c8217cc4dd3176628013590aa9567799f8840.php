<?php

/* layout.html.twig */
class __TwigTemplate_b7a749199f40302fe1815396b8cf393a7a34e6e183ca703c30ab37575cb49215 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2e902fae52e11c8cd267c74f2328014b7a7c62d02f4500f4f529c2e7623d6ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e902fae52e11c8cd267c74f2328014b7a7c62d02f4500f4f529c2e7623d6ed->enter($__internal_c2e902fae52e11c8cd267c74f2328014b7a7c62d02f4500f4f529c2e7623d6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_da40508d44efcfb355a503ef639b28a2f78e6647750ead43abc228df588cb5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da40508d44efcfb355a503ef639b28a2f78e6647750ead43abc228df588cb5c5->enter($__internal_da40508d44efcfb355a503ef639b28a2f78e6647750ead43abc228df588cb5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>Ma plateforme d'annonces</h1>
        <p>

        </p>
        <p>
            <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
                Participer  »
            </a>
        </p>
    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Les annonces</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_home");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_add");
        echo "\">Ajouter une annonce</a></li>
            </ul>

            <h4>Dernières annonces</h4>
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("SSPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"col-md-9\">
            ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "        </div>
    </div>

    <hr>

    <footer>
        <p>The sky's the limit © ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
</div>

";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "
</body>
</html>";
        
        $__internal_c2e902fae52e11c8cd267c74f2328014b7a7c62d02f4500f4f529c2e7623d6ed->leave($__internal_c2e902fae52e11c8cd267c74f2328014b7a7c62d02f4500f4f529c2e7623d6ed_prof);

        
        $__internal_da40508d44efcfb355a503ef639b28a2f78e6647750ead43abc228df588cb5c5->leave($__internal_da40508d44efcfb355a503ef639b28a2f78e6647750ead43abc228df588cb5c5_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_9806aa723e9b2372da05dbe1951c7dff62e5173b8e3314238fa32e570071e60a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9806aa723e9b2372da05dbe1951c7dff62e5173b8e3314238fa32e570071e60a->enter($__internal_9806aa723e9b2372da05dbe1951c7dff62e5173b8e3314238fa32e570071e60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c9f851332b912f15e6ccc0c73694dab9fde1e472ba79946ab6910bb4cdc9cf93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f851332b912f15e6ccc0c73694dab9fde1e472ba79946ab6910bb4cdc9cf93->enter($__internal_c9f851332b912f15e6ccc0c73694dab9fde1e472ba79946ab6910bb4cdc9cf93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SS Plateforme";
        
        $__internal_c9f851332b912f15e6ccc0c73694dab9fde1e472ba79946ab6910bb4cdc9cf93->leave($__internal_c9f851332b912f15e6ccc0c73694dab9fde1e472ba79946ab6910bb4cdc9cf93_prof);

        
        $__internal_9806aa723e9b2372da05dbe1951c7dff62e5173b8e3314238fa32e570071e60a->leave($__internal_9806aa723e9b2372da05dbe1951c7dff62e5173b8e3314238fa32e570071e60a_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b06a32a5ed5d6d0da5f9673b60009ca3f2467c0227fcc7941db913a5cbaa3177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06a32a5ed5d6d0da5f9673b60009ca3f2467c0227fcc7941db913a5cbaa3177->enter($__internal_b06a32a5ed5d6d0da5f9673b60009ca3f2467c0227fcc7941db913a5cbaa3177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fafd402e4ee192427919ce887ecddfcdc7f7fd0b0eb764f8369da963c8f0556d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fafd402e4ee192427919ce887ecddfcdc7f7fd0b0eb764f8369da963c8f0556d->enter($__internal_fafd402e4ee192427919ce887ecddfcdc7f7fd0b0eb764f8369da963c8f0556d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_fafd402e4ee192427919ce887ecddfcdc7f7fd0b0eb764f8369da963c8f0556d->leave($__internal_fafd402e4ee192427919ce887ecddfcdc7f7fd0b0eb764f8369da963c8f0556d_prof);

        
        $__internal_b06a32a5ed5d6d0da5f9673b60009ca3f2467c0227fcc7941db913a5cbaa3177->leave($__internal_b06a32a5ed5d6d0da5f9673b60009ca3f2467c0227fcc7941db913a5cbaa3177_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d5391e1388a607fd035ea5a31632723ff458e6d81324e488a32edcbce873b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5391e1388a607fd035ea5a31632723ff458e6d81324e488a32edcbce873b43->enter($__internal_5d5391e1388a607fd035ea5a31632723ff458e6d81324e488a32edcbce873b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e38af0795becc6475699eec95796958538479f861e57426449cf8a5d8352f392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38af0795becc6475699eec95796958538479f861e57426449cf8a5d8352f392->enter($__internal_e38af0795becc6475699eec95796958538479f861e57426449cf8a5d8352f392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "            ";
        
        $__internal_e38af0795becc6475699eec95796958538479f861e57426449cf8a5d8352f392->leave($__internal_e38af0795becc6475699eec95796958538479f861e57426449cf8a5d8352f392_prof);

        
        $__internal_5d5391e1388a607fd035ea5a31632723ff458e6d81324e488a32edcbce873b43->leave($__internal_5d5391e1388a607fd035ea5a31632723ff458e6d81324e488a32edcbce873b43_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8661e60f6c58636b4e4a6cfdfa02c2d43bfc922cad3d87eedcc2f6534a02c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8661e60f6c58636b4e4a6cfdfa02c2d43bfc922cad3d87eedcc2f6534a02c14->enter($__internal_b8661e60f6c58636b4e4a6cfdfa02c2d43bfc922cad3d87eedcc2f6534a02c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7650d5b55457e5a5866fc2c6ecc505965fffb73f1114bca5f578a4c6f9957855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7650d5b55457e5a5866fc2c6ecc505965fffb73f1114bca5f578a4c6f9957855->enter($__internal_7650d5b55457e5a5866fc2c6ecc505965fffb73f1114bca5f578a4c6f9957855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        // line 57
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_7650d5b55457e5a5866fc2c6ecc505965fffb73f1114bca5f578a4c6f9957855->leave($__internal_7650d5b55457e5a5866fc2c6ecc505965fffb73f1114bca5f578a4c6f9957855_prof);

        
        $__internal_b8661e60f6c58636b4e4a6cfdfa02c2d43bfc922cad3d87eedcc2f6534a02c14->leave($__internal_b8661e60f6c58636b4e4a6cfdfa02c2d43bfc922cad3d87eedcc2f6534a02c14_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 57,  183 => 56,  174 => 55,  164 => 44,  155 => 43,  144 => 13,  142 => 12,  133 => 11,  115 => 9,  103 => 60,  101 => 55,  94 => 51,  86 => 45,  84 => 43,  78 => 40,  71 => 36,  67 => 35,  45 => 15,  43 => 11,  38 => 9,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% block title %}SS Plateforme{% endblock %}</title>

    {% block stylesheets %}
        {# On charge le CSS de bootstrap depuis le site directement #}
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    {% endblock %}
</head>

<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>Ma plateforme d'annonces</h1>
        <p>

        </p>
        <p>
            <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
                Participer  »
            </a>
        </p>
    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Les annonces</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"{{ path('ss_platform_home') }}\">Accueil</a></li>
                <li><a href=\"{{ path('ss_platform_add') }}\">Ajouter une annonce</a></li>
            </ul>

            <h4>Dernières annonces</h4>
            {{ render(controller(\"SSPlatformBundle:Advert:menu\", {'limit': 3})) }}
        </div>
        <div id=\"content\" class=\"col-md-9\">
            {% block body %}
            {% endblock %}
        </div>
    </div>

    <hr>

    <footer>
        <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
</div>

{% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
{% endblock %}

</body>
</html>", "layout.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\app\\Resources\\views\\layout.html.twig");
    }
}
