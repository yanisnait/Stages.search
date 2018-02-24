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
        $__internal_35f743ce671448e723f0a68dbab3bad0d982d78bd97e52411aef9c5f42898c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f743ce671448e723f0a68dbab3bad0d982d78bd97e52411aef9c5f42898c14->enter($__internal_35f743ce671448e723f0a68dbab3bad0d982d78bd97e52411aef9c5f42898c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_99e1d280ae7aaa81313be71c8618f2e5ede4398efbcef13b6a02916931f419be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e1d280ae7aaa81313be71c8618f2e5ede4398efbcef13b6a02916931f419be->enter($__internal_99e1d280ae7aaa81313be71c8618f2e5ede4398efbcef13b6a02916931f419be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 37
        echo "                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_add");
        echo "\">Ajouter une annonce</a></li>
                ";
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
        
        $__internal_35f743ce671448e723f0a68dbab3bad0d982d78bd97e52411aef9c5f42898c14->leave($__internal_35f743ce671448e723f0a68dbab3bad0d982d78bd97e52411aef9c5f42898c14_prof);

        
        $__internal_99e1d280ae7aaa81313be71c8618f2e5ede4398efbcef13b6a02916931f419be->leave($__internal_99e1d280ae7aaa81313be71c8618f2e5ede4398efbcef13b6a02916931f419be_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_241925f47c373d2b06bb58845fcb129c708f0893b9e45abb7aa7b997cd3d03b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241925f47c373d2b06bb58845fcb129c708f0893b9e45abb7aa7b997cd3d03b8->enter($__internal_241925f47c373d2b06bb58845fcb129c708f0893b9e45abb7aa7b997cd3d03b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d67c395a3bcca59c4371e645b40571a6b7dbf8592f08178a9064c05090ba3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d67c395a3bcca59c4371e645b40571a6b7dbf8592f08178a9064c05090ba3f9->enter($__internal_2d67c395a3bcca59c4371e645b40571a6b7dbf8592f08178a9064c05090ba3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SS Plateforme";
        
        $__internal_2d67c395a3bcca59c4371e645b40571a6b7dbf8592f08178a9064c05090ba3f9->leave($__internal_2d67c395a3bcca59c4371e645b40571a6b7dbf8592f08178a9064c05090ba3f9_prof);

        
        $__internal_241925f47c373d2b06bb58845fcb129c708f0893b9e45abb7aa7b997cd3d03b8->leave($__internal_241925f47c373d2b06bb58845fcb129c708f0893b9e45abb7aa7b997cd3d03b8_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_24c01b55e059f481db21901bde3b1c3b5b7b951d189f9a2877c44b85a51ee86e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c01b55e059f481db21901bde3b1c3b5b7b951d189f9a2877c44b85a51ee86e->enter($__internal_24c01b55e059f481db21901bde3b1c3b5b7b951d189f9a2877c44b85a51ee86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fef60e3dac1196c1244c35f46055f5bc9abe914b479b8f6921484dd35bab374c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef60e3dac1196c1244c35f46055f5bc9abe914b479b8f6921484dd35bab374c->enter($__internal_fef60e3dac1196c1244c35f46055f5bc9abe914b479b8f6921484dd35bab374c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_fef60e3dac1196c1244c35f46055f5bc9abe914b479b8f6921484dd35bab374c->leave($__internal_fef60e3dac1196c1244c35f46055f5bc9abe914b479b8f6921484dd35bab374c_prof);

        
        $__internal_24c01b55e059f481db21901bde3b1c3b5b7b951d189f9a2877c44b85a51ee86e->leave($__internal_24c01b55e059f481db21901bde3b1c3b5b7b951d189f9a2877c44b85a51ee86e_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfadc95160e10e9dab5abfdb0560ea1d622814b03b70dea2ce7929ddf222b1f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfadc95160e10e9dab5abfdb0560ea1d622814b03b70dea2ce7929ddf222b1f5->enter($__internal_bfadc95160e10e9dab5abfdb0560ea1d622814b03b70dea2ce7929ddf222b1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_16054d4f894025c4f216b2240e2f7296bf56b8dc55690c9fffdf7c8335704051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16054d4f894025c4f216b2240e2f7296bf56b8dc55690c9fffdf7c8335704051->enter($__internal_16054d4f894025c4f216b2240e2f7296bf56b8dc55690c9fffdf7c8335704051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 46
        echo "            ";
        
        $__internal_16054d4f894025c4f216b2240e2f7296bf56b8dc55690c9fffdf7c8335704051->leave($__internal_16054d4f894025c4f216b2240e2f7296bf56b8dc55690c9fffdf7c8335704051_prof);

        
        $__internal_bfadc95160e10e9dab5abfdb0560ea1d622814b03b70dea2ce7929ddf222b1f5->leave($__internal_bfadc95160e10e9dab5abfdb0560ea1d622814b03b70dea2ce7929ddf222b1f5_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fba042da39efb603ecc0dc76511757d88657603e8e85fe840fb1d5ddb5bdb1e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba042da39efb603ecc0dc76511757d88657603e8e85fe840fb1d5ddb5bdb1e8->enter($__internal_fba042da39efb603ecc0dc76511757d88657603e8e85fe840fb1d5ddb5bdb1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_241bd5da20e6f50cbe06c52e1982eddfa422b356a2deef16cc00b2e9332559e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_241bd5da20e6f50cbe06c52e1982eddfa422b356a2deef16cc00b2e9332559e6->enter($__internal_241bd5da20e6f50cbe06c52e1982eddfa422b356a2deef16cc00b2e9332559e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "    ";
        // line 59
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_241bd5da20e6f50cbe06c52e1982eddfa422b356a2deef16cc00b2e9332559e6->leave($__internal_241bd5da20e6f50cbe06c52e1982eddfa422b356a2deef16cc00b2e9332559e6_prof);

        
        $__internal_fba042da39efb603ecc0dc76511757d88657603e8e85fe840fb1d5ddb5bdb1e8->leave($__internal_fba042da39efb603ecc0dc76511757d88657603e8e85fe840fb1d5ddb5bdb1e8_prof);

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
        return array (  188 => 59,  186 => 58,  177 => 57,  167 => 46,  158 => 45,  147 => 13,  145 => 12,  136 => 11,  118 => 9,  106 => 62,  104 => 57,  97 => 53,  89 => 47,  87 => 45,  81 => 42,  76 => 39,  71 => 37,  67 => 35,  45 => 15,  43 => 11,  38 => 9,  29 => 2,);
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
                {#% if is_granted('ROLE_AUTEUR') %#}
                <li><a href=\"{{ path('ss_platform_add') }}\">Ajouter une annonce</a></li>
                {#% endif %#}
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
