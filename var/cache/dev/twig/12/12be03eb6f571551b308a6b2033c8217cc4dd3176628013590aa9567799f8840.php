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
        $__internal_ac05e2c28382e0061e76d25811d5eb67e1963d44f3beee948f9ee9840b4989a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac05e2c28382e0061e76d25811d5eb67e1963d44f3beee948f9ee9840b4989a5->enter($__internal_ac05e2c28382e0061e76d25811d5eb67e1963d44f3beee948f9ee9840b4989a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_25e9f87b94dd72d8d7790858ff4449b113e568eda9bc695866fa05c8667794ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e9f87b94dd72d8d7790858ff4449b113e568eda9bc695866fa05c8667794ed->enter($__internal_25e9f87b94dd72d8d7790858ff4449b113e568eda9bc695866fa05c8667794ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
            <h3>Plateforme</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_home");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_addEntreprise");
        echo "\">Ajouter une Entreprise</a></li>
                ";
        // line 37
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 38
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_addOffre");
            echo "\">Ajouter une Annonce</a></li>
                ";
        }
        // line 40
        echo "            </ul>

            <h4>Dernières annonces</h4>
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("SSPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"col-md-9\">
            ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "        </div>
    </div>

    <hr>

    <footer>
        <p>The sky's the limit © ";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
</div>

";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "
</body>
</html>";
        
        $__internal_ac05e2c28382e0061e76d25811d5eb67e1963d44f3beee948f9ee9840b4989a5->leave($__internal_ac05e2c28382e0061e76d25811d5eb67e1963d44f3beee948f9ee9840b4989a5_prof);

        
        $__internal_25e9f87b94dd72d8d7790858ff4449b113e568eda9bc695866fa05c8667794ed->leave($__internal_25e9f87b94dd72d8d7790858ff4449b113e568eda9bc695866fa05c8667794ed_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_01bfb720eab3a2e94f7899d3a82c76aae1a8fe362dd419bd9a74e475d697a9da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01bfb720eab3a2e94f7899d3a82c76aae1a8fe362dd419bd9a74e475d697a9da->enter($__internal_01bfb720eab3a2e94f7899d3a82c76aae1a8fe362dd419bd9a74e475d697a9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8cc90e21957e235262edd57a2a82c206748a2ce98371eb31b4fb0775428b7ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc90e21957e235262edd57a2a82c206748a2ce98371eb31b4fb0775428b7ae4->enter($__internal_8cc90e21957e235262edd57a2a82c206748a2ce98371eb31b4fb0775428b7ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SS Plateforme";
        
        $__internal_8cc90e21957e235262edd57a2a82c206748a2ce98371eb31b4fb0775428b7ae4->leave($__internal_8cc90e21957e235262edd57a2a82c206748a2ce98371eb31b4fb0775428b7ae4_prof);

        
        $__internal_01bfb720eab3a2e94f7899d3a82c76aae1a8fe362dd419bd9a74e475d697a9da->leave($__internal_01bfb720eab3a2e94f7899d3a82c76aae1a8fe362dd419bd9a74e475d697a9da_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_683930fa1c4dfe979f986e46edabb6f67f0932aac5649f9be2b8eb8b378e8667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683930fa1c4dfe979f986e46edabb6f67f0932aac5649f9be2b8eb8b378e8667->enter($__internal_683930fa1c4dfe979f986e46edabb6f67f0932aac5649f9be2b8eb8b378e8667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dcabf52ddacc72daf333ff34ecebf502e738d4c629a6e9b9336815c2d2482c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcabf52ddacc72daf333ff34ecebf502e738d4c629a6e9b9336815c2d2482c8b->enter($__internal_dcabf52ddacc72daf333ff34ecebf502e738d4c629a6e9b9336815c2d2482c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_dcabf52ddacc72daf333ff34ecebf502e738d4c629a6e9b9336815c2d2482c8b->leave($__internal_dcabf52ddacc72daf333ff34ecebf502e738d4c629a6e9b9336815c2d2482c8b_prof);

        
        $__internal_683930fa1c4dfe979f986e46edabb6f67f0932aac5649f9be2b8eb8b378e8667->leave($__internal_683930fa1c4dfe979f986e46edabb6f67f0932aac5649f9be2b8eb8b378e8667_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_9329430d7a5338ccd7da4ecbba735fe209a29020723d36f231ef1391bc008a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9329430d7a5338ccd7da4ecbba735fe209a29020723d36f231ef1391bc008a76->enter($__internal_9329430d7a5338ccd7da4ecbba735fe209a29020723d36f231ef1391bc008a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08e9f7213056c1cfd8a5d5a440a34a62a49abaac44c39aa54c0224245c34c393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e9f7213056c1cfd8a5d5a440a34a62a49abaac44c39aa54c0224245c34c393->enter($__internal_08e9f7213056c1cfd8a5d5a440a34a62a49abaac44c39aa54c0224245c34c393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "            ";
        
        $__internal_08e9f7213056c1cfd8a5d5a440a34a62a49abaac44c39aa54c0224245c34c393->leave($__internal_08e9f7213056c1cfd8a5d5a440a34a62a49abaac44c39aa54c0224245c34c393_prof);

        
        $__internal_9329430d7a5338ccd7da4ecbba735fe209a29020723d36f231ef1391bc008a76->leave($__internal_9329430d7a5338ccd7da4ecbba735fe209a29020723d36f231ef1391bc008a76_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9e30ed63ce15b11c3db7c4e235450e25c688aec786c6bfeab154fc4cce65f440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e30ed63ce15b11c3db7c4e235450e25c688aec786c6bfeab154fc4cce65f440->enter($__internal_9e30ed63ce15b11c3db7c4e235450e25c688aec786c6bfeab154fc4cce65f440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9f564d8d8a954b8ec7af10593cfbd2238c4a6d0d45cf2fb1ea5fc8da1a0016f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f564d8d8a954b8ec7af10593cfbd2238c4a6d0d45cf2fb1ea5fc8da1a0016f4->enter($__internal_9f564d8d8a954b8ec7af10593cfbd2238c4a6d0d45cf2fb1ea5fc8da1a0016f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "    ";
        // line 60
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_9f564d8d8a954b8ec7af10593cfbd2238c4a6d0d45cf2fb1ea5fc8da1a0016f4->leave($__internal_9f564d8d8a954b8ec7af10593cfbd2238c4a6d0d45cf2fb1ea5fc8da1a0016f4_prof);

        
        $__internal_9e30ed63ce15b11c3db7c4e235450e25c688aec786c6bfeab154fc4cce65f440->leave($__internal_9e30ed63ce15b11c3db7c4e235450e25c688aec786c6bfeab154fc4cce65f440_prof);

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
        return array (  195 => 60,  193 => 59,  184 => 58,  174 => 47,  165 => 46,  154 => 13,  152 => 12,  143 => 11,  125 => 9,  113 => 63,  111 => 58,  104 => 54,  96 => 48,  94 => 46,  88 => 43,  83 => 40,  77 => 38,  75 => 37,  71 => 36,  67 => 35,  45 => 15,  43 => 11,  38 => 9,  29 => 2,);
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
            <h3>Plateforme</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"{{ path('ss_platform_home') }}\">Accueil</a></li>
                <li><a href=\"{{ path('ss_platform_addEntreprise') }}\">Ajouter une Entreprise</a></li>
                {% if is_granted('ROLE_USER') %}
                <li><a href=\"{{ path('ss_platform_addOffre') }}\">Ajouter une Annonce</a></li>
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
