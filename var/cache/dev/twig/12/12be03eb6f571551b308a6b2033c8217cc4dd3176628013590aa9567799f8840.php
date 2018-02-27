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
        $__internal_aeb810fd9471710afce5d062f1837c1beec91062ba5da783cacf6276f6e37ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb810fd9471710afce5d062f1837c1beec91062ba5da783cacf6276f6e37ac2->enter($__internal_aeb810fd9471710afce5d062f1837c1beec91062ba5da783cacf6276f6e37ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_ac75f9092dae14b99c18a456c2678c0d1ac01176f605ff02732b8227c33f0148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac75f9092dae14b99c18a456c2678c0d1ac01176f605ff02732b8227c33f0148->enter($__internal_ac75f9092dae14b99c18a456c2678c0d1ac01176f605ff02732b8227c33f0148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_add");
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
        
        $__internal_aeb810fd9471710afce5d062f1837c1beec91062ba5da783cacf6276f6e37ac2->leave($__internal_aeb810fd9471710afce5d062f1837c1beec91062ba5da783cacf6276f6e37ac2_prof);

        
        $__internal_ac75f9092dae14b99c18a456c2678c0d1ac01176f605ff02732b8227c33f0148->leave($__internal_ac75f9092dae14b99c18a456c2678c0d1ac01176f605ff02732b8227c33f0148_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ee45cc6ecf6cd2d5bd9959f66537565ec7b79a57e40daf49f36c63a7a2963ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee45cc6ecf6cd2d5bd9959f66537565ec7b79a57e40daf49f36c63a7a2963ee->enter($__internal_6ee45cc6ecf6cd2d5bd9959f66537565ec7b79a57e40daf49f36c63a7a2963ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3959f30c85cae07929404d1d6051b60cd0a040d989dea64785f3aef886136955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3959f30c85cae07929404d1d6051b60cd0a040d989dea64785f3aef886136955->enter($__internal_3959f30c85cae07929404d1d6051b60cd0a040d989dea64785f3aef886136955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SS Plateforme";
        
        $__internal_3959f30c85cae07929404d1d6051b60cd0a040d989dea64785f3aef886136955->leave($__internal_3959f30c85cae07929404d1d6051b60cd0a040d989dea64785f3aef886136955_prof);

        
        $__internal_6ee45cc6ecf6cd2d5bd9959f66537565ec7b79a57e40daf49f36c63a7a2963ee->leave($__internal_6ee45cc6ecf6cd2d5bd9959f66537565ec7b79a57e40daf49f36c63a7a2963ee_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0bda5c02e410606986a404943b5236466214a7fd52bef28a4dff788203e135b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bda5c02e410606986a404943b5236466214a7fd52bef28a4dff788203e135b6->enter($__internal_0bda5c02e410606986a404943b5236466214a7fd52bef28a4dff788203e135b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d2021549f72197d04dfbeef18d0d6633c33cc5a7eeb15b4848c868f863508ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2021549f72197d04dfbeef18d0d6633c33cc5a7eeb15b4848c868f863508ab6->enter($__internal_d2021549f72197d04dfbeef18d0d6633c33cc5a7eeb15b4848c868f863508ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_d2021549f72197d04dfbeef18d0d6633c33cc5a7eeb15b4848c868f863508ab6->leave($__internal_d2021549f72197d04dfbeef18d0d6633c33cc5a7eeb15b4848c868f863508ab6_prof);

        
        $__internal_0bda5c02e410606986a404943b5236466214a7fd52bef28a4dff788203e135b6->leave($__internal_0bda5c02e410606986a404943b5236466214a7fd52bef28a4dff788203e135b6_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc1471de095fe54ba4f0975a1560c13572f7e111325af37082f19a192055e331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1471de095fe54ba4f0975a1560c13572f7e111325af37082f19a192055e331->enter($__internal_bc1471de095fe54ba4f0975a1560c13572f7e111325af37082f19a192055e331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a4f1ab2f67802266563493d33cc063f095d5de06b6391c6baf2e2f527d44112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4f1ab2f67802266563493d33cc063f095d5de06b6391c6baf2e2f527d44112->enter($__internal_4a4f1ab2f67802266563493d33cc063f095d5de06b6391c6baf2e2f527d44112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "            ";
        
        $__internal_4a4f1ab2f67802266563493d33cc063f095d5de06b6391c6baf2e2f527d44112->leave($__internal_4a4f1ab2f67802266563493d33cc063f095d5de06b6391c6baf2e2f527d44112_prof);

        
        $__internal_bc1471de095fe54ba4f0975a1560c13572f7e111325af37082f19a192055e331->leave($__internal_bc1471de095fe54ba4f0975a1560c13572f7e111325af37082f19a192055e331_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86eb49b5ae96db9a6f6c36d1a5423989986e04db99c87c8ca63baccefb6249ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86eb49b5ae96db9a6f6c36d1a5423989986e04db99c87c8ca63baccefb6249ad->enter($__internal_86eb49b5ae96db9a6f6c36d1a5423989986e04db99c87c8ca63baccefb6249ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6bbe049055f13e7b23b352c43f08d1f3c73f0e633d0e3ef192e35549ff417679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bbe049055f13e7b23b352c43f08d1f3c73f0e633d0e3ef192e35549ff417679->enter($__internal_6bbe049055f13e7b23b352c43f08d1f3c73f0e633d0e3ef192e35549ff417679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "    ";
        // line 60
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_6bbe049055f13e7b23b352c43f08d1f3c73f0e633d0e3ef192e35549ff417679->leave($__internal_6bbe049055f13e7b23b352c43f08d1f3c73f0e633d0e3ef192e35549ff417679_prof);

        
        $__internal_86eb49b5ae96db9a6f6c36d1a5423989986e04db99c87c8ca63baccefb6249ad->leave($__internal_86eb49b5ae96db9a6f6c36d1a5423989986e04db99c87c8ca63baccefb6249ad_prof);

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
                <li><a href=\"{{ path('ss_platform_add') }}\">Ajouter une Annonce</a></li>
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
