<?php

/* ::layout.html.twig */
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
        $__internal_3cfcd5e809202f32b48f5fbfc37f32821b4a7f98661f7aeab5d695903e157881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cfcd5e809202f32b48f5fbfc37f32821b4a7f98661f7aeab5d695903e157881->enter($__internal_3cfcd5e809202f32b48f5fbfc37f32821b4a7f98661f7aeab5d695903e157881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_98754df22b825f1a2efc84ad5f6faf2e5a4572505b6ab8c3e286c8457b8a1461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98754df22b825f1a2efc84ad5f6faf2e5a4572505b6ab8c3e286c8457b8a1461->enter($__internal_98754df22b825f1a2efc84ad5f6faf2e5a4572505b6ab8c3e286c8457b8a1461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
                ";
        // line 36
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 37
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_add");
            echo "\">Ajouter une annonce</a></li>
                ";
        }
        // line 39
        echo "            </ul>

            <h4>Dernières annonces</h4>
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("SSPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"col-md-9\">
            ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "        </div>
    </div>

    <hr>

    <footer>
        <p>The sky's the limit © ";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
</div>

";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "
</body>
</html>";
        
        $__internal_3cfcd5e809202f32b48f5fbfc37f32821b4a7f98661f7aeab5d695903e157881->leave($__internal_3cfcd5e809202f32b48f5fbfc37f32821b4a7f98661f7aeab5d695903e157881_prof);

        
        $__internal_98754df22b825f1a2efc84ad5f6faf2e5a4572505b6ab8c3e286c8457b8a1461->leave($__internal_98754df22b825f1a2efc84ad5f6faf2e5a4572505b6ab8c3e286c8457b8a1461_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_0508a8770f679bb58ab03029e0ccffbe4ab7b594fb6618d3bc18822e256c8c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0508a8770f679bb58ab03029e0ccffbe4ab7b594fb6618d3bc18822e256c8c0f->enter($__internal_0508a8770f679bb58ab03029e0ccffbe4ab7b594fb6618d3bc18822e256c8c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5540f0420fdc6dc57f2f8d0da3113ee5a1acda938f6bea341a9b5ca050f21819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5540f0420fdc6dc57f2f8d0da3113ee5a1acda938f6bea341a9b5ca050f21819->enter($__internal_5540f0420fdc6dc57f2f8d0da3113ee5a1acda938f6bea341a9b5ca050f21819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SS Plateforme";
        
        $__internal_5540f0420fdc6dc57f2f8d0da3113ee5a1acda938f6bea341a9b5ca050f21819->leave($__internal_5540f0420fdc6dc57f2f8d0da3113ee5a1acda938f6bea341a9b5ca050f21819_prof);

        
        $__internal_0508a8770f679bb58ab03029e0ccffbe4ab7b594fb6618d3bc18822e256c8c0f->leave($__internal_0508a8770f679bb58ab03029e0ccffbe4ab7b594fb6618d3bc18822e256c8c0f_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_100beedb823c5ec2297d41f0cb47c9b883bd5c2e1e4a9d784c5c2b3f829a357a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_100beedb823c5ec2297d41f0cb47c9b883bd5c2e1e4a9d784c5c2b3f829a357a->enter($__internal_100beedb823c5ec2297d41f0cb47c9b883bd5c2e1e4a9d784c5c2b3f829a357a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ddc458496fa87096bb85c23d8a3c59a88ff8cfdd8f24451b152661189b87c453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc458496fa87096bb85c23d8a3c59a88ff8cfdd8f24451b152661189b87c453->enter($__internal_ddc458496fa87096bb85c23d8a3c59a88ff8cfdd8f24451b152661189b87c453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_ddc458496fa87096bb85c23d8a3c59a88ff8cfdd8f24451b152661189b87c453->leave($__internal_ddc458496fa87096bb85c23d8a3c59a88ff8cfdd8f24451b152661189b87c453_prof);

        
        $__internal_100beedb823c5ec2297d41f0cb47c9b883bd5c2e1e4a9d784c5c2b3f829a357a->leave($__internal_100beedb823c5ec2297d41f0cb47c9b883bd5c2e1e4a9d784c5c2b3f829a357a_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_a75a29719fd5a443da6c514e6d66e8d3d25eb2a0996eae7d352187772801325c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75a29719fd5a443da6c514e6d66e8d3d25eb2a0996eae7d352187772801325c->enter($__internal_a75a29719fd5a443da6c514e6d66e8d3d25eb2a0996eae7d352187772801325c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa6d2f122f43b2e7f5365b486a9b3ae3c5844792fb4229d53197e5240eac06bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6d2f122f43b2e7f5365b486a9b3ae3c5844792fb4229d53197e5240eac06bd->enter($__internal_fa6d2f122f43b2e7f5365b486a9b3ae3c5844792fb4229d53197e5240eac06bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 46
        echo "            ";
        
        $__internal_fa6d2f122f43b2e7f5365b486a9b3ae3c5844792fb4229d53197e5240eac06bd->leave($__internal_fa6d2f122f43b2e7f5365b486a9b3ae3c5844792fb4229d53197e5240eac06bd_prof);

        
        $__internal_a75a29719fd5a443da6c514e6d66e8d3d25eb2a0996eae7d352187772801325c->leave($__internal_a75a29719fd5a443da6c514e6d66e8d3d25eb2a0996eae7d352187772801325c_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dcc351e97bc4eae4d7f90c95e210a2c0a09bba50bed1df976d4e74cbc89c183c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcc351e97bc4eae4d7f90c95e210a2c0a09bba50bed1df976d4e74cbc89c183c->enter($__internal_dcc351e97bc4eae4d7f90c95e210a2c0a09bba50bed1df976d4e74cbc89c183c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1e277d076a5436ee5864b1e0bbee1ba1212b8ca90a53c0be8de1a254cb3dfa78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e277d076a5436ee5864b1e0bbee1ba1212b8ca90a53c0be8de1a254cb3dfa78->enter($__internal_1e277d076a5436ee5864b1e0bbee1ba1212b8ca90a53c0be8de1a254cb3dfa78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "    ";
        // line 59
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_1e277d076a5436ee5864b1e0bbee1ba1212b8ca90a53c0be8de1a254cb3dfa78->leave($__internal_1e277d076a5436ee5864b1e0bbee1ba1212b8ca90a53c0be8de1a254cb3dfa78_prof);

        
        $__internal_dcc351e97bc4eae4d7f90c95e210a2c0a09bba50bed1df976d4e74cbc89c183c->leave($__internal_dcc351e97bc4eae4d7f90c95e210a2c0a09bba50bed1df976d4e74cbc89c183c_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 59,  189 => 58,  180 => 57,  170 => 46,  161 => 45,  150 => 13,  148 => 12,  139 => 11,  121 => 9,  109 => 62,  107 => 57,  100 => 53,  92 => 47,  90 => 45,  84 => 42,  79 => 39,  73 => 37,  71 => 36,  67 => 35,  45 => 15,  43 => 11,  38 => 9,  29 => 2,);
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
                {% if is_granted('ROLE_USER') %}
                <li><a href=\"{{ path('ss_platform_add') }}\">Ajouter une annonce</a></li>
                {% endif %}
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
</html>", "::layout.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\app\\Resources\\views\\layout.html.twig");
    }
}
