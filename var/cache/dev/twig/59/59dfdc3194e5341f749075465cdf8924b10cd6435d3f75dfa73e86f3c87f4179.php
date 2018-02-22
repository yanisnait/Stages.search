<?php

/* ::layout.html.twig */
class __TwigTemplate_32838075824cdb8ed2460ffc993bf3e3aa784a65f2fe00b344f91db5c99546ea extends Twig_Template
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
        $__internal_a8780d67aa86d026d5e7a626efa335818f4543fffae303cdf02da3f50ef2b968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8780d67aa86d026d5e7a626efa335818f4543fffae303cdf02da3f50ef2b968->enter($__internal_a8780d67aa86d026d5e7a626efa335818f4543fffae303cdf02da3f50ef2b968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_5d6de52b72a4d3d3065389989236711fc6159efe0c8adbd451d90393cf5ec28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6de52b72a4d3d3065389989236711fc6159efe0c8adbd451d90393cf5ec28f->enter($__internal_5d6de52b72a4d3d3065389989236711fc6159efe0c8adbd451d90393cf5ec28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_a8780d67aa86d026d5e7a626efa335818f4543fffae303cdf02da3f50ef2b968->leave($__internal_a8780d67aa86d026d5e7a626efa335818f4543fffae303cdf02da3f50ef2b968_prof);

        
        $__internal_5d6de52b72a4d3d3065389989236711fc6159efe0c8adbd451d90393cf5ec28f->leave($__internal_5d6de52b72a4d3d3065389989236711fc6159efe0c8adbd451d90393cf5ec28f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_901149525288804cf1ae0d7ace75404edda85f793111519c1c4db5aba1c76991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901149525288804cf1ae0d7ace75404edda85f793111519c1c4db5aba1c76991->enter($__internal_901149525288804cf1ae0d7ace75404edda85f793111519c1c4db5aba1c76991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e67958dd4cf7d18faff9b9f37042fae28093ca9cbf41dd3cdbee778a385fcb64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e67958dd4cf7d18faff9b9f37042fae28093ca9cbf41dd3cdbee778a385fcb64->enter($__internal_e67958dd4cf7d18faff9b9f37042fae28093ca9cbf41dd3cdbee778a385fcb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SS Plateforme";
        
        $__internal_e67958dd4cf7d18faff9b9f37042fae28093ca9cbf41dd3cdbee778a385fcb64->leave($__internal_e67958dd4cf7d18faff9b9f37042fae28093ca9cbf41dd3cdbee778a385fcb64_prof);

        
        $__internal_901149525288804cf1ae0d7ace75404edda85f793111519c1c4db5aba1c76991->leave($__internal_901149525288804cf1ae0d7ace75404edda85f793111519c1c4db5aba1c76991_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0fa472efe0cb613e5d21ecfd95fa2bf00475010ad22d49fc729a74bef0cd255a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa472efe0cb613e5d21ecfd95fa2bf00475010ad22d49fc729a74bef0cd255a->enter($__internal_0fa472efe0cb613e5d21ecfd95fa2bf00475010ad22d49fc729a74bef0cd255a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6abcfa514c5d0efdc1a3947937f4e1303f5490ab8c08932d2e10622b2c6cebc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6abcfa514c5d0efdc1a3947937f4e1303f5490ab8c08932d2e10622b2c6cebc0->enter($__internal_6abcfa514c5d0efdc1a3947937f4e1303f5490ab8c08932d2e10622b2c6cebc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_6abcfa514c5d0efdc1a3947937f4e1303f5490ab8c08932d2e10622b2c6cebc0->leave($__internal_6abcfa514c5d0efdc1a3947937f4e1303f5490ab8c08932d2e10622b2c6cebc0_prof);

        
        $__internal_0fa472efe0cb613e5d21ecfd95fa2bf00475010ad22d49fc729a74bef0cd255a->leave($__internal_0fa472efe0cb613e5d21ecfd95fa2bf00475010ad22d49fc729a74bef0cd255a_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_98332eb7d13042b6b325caa9df8ba361076947a0676967b72e896f6fd4b71730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98332eb7d13042b6b325caa9df8ba361076947a0676967b72e896f6fd4b71730->enter($__internal_98332eb7d13042b6b325caa9df8ba361076947a0676967b72e896f6fd4b71730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a99d03956673241488deda2a07a49de2bf0cb052a014a05a3b6652a90db8b6f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a99d03956673241488deda2a07a49de2bf0cb052a014a05a3b6652a90db8b6f8->enter($__internal_a99d03956673241488deda2a07a49de2bf0cb052a014a05a3b6652a90db8b6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "            ";
        
        $__internal_a99d03956673241488deda2a07a49de2bf0cb052a014a05a3b6652a90db8b6f8->leave($__internal_a99d03956673241488deda2a07a49de2bf0cb052a014a05a3b6652a90db8b6f8_prof);

        
        $__internal_98332eb7d13042b6b325caa9df8ba361076947a0676967b72e896f6fd4b71730->leave($__internal_98332eb7d13042b6b325caa9df8ba361076947a0676967b72e896f6fd4b71730_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bea3351c5ed58dcb20df8dcc93e945b334de77c1d5e4a47c6a916422aaed0342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea3351c5ed58dcb20df8dcc93e945b334de77c1d5e4a47c6a916422aaed0342->enter($__internal_bea3351c5ed58dcb20df8dcc93e945b334de77c1d5e4a47c6a916422aaed0342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f04ee77ea33bb8b89835af83ca3ce886435e9039db0809526b97976e3f7f6be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04ee77ea33bb8b89835af83ca3ce886435e9039db0809526b97976e3f7f6be7->enter($__internal_f04ee77ea33bb8b89835af83ca3ce886435e9039db0809526b97976e3f7f6be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        // line 57
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_f04ee77ea33bb8b89835af83ca3ce886435e9039db0809526b97976e3f7f6be7->leave($__internal_f04ee77ea33bb8b89835af83ca3ce886435e9039db0809526b97976e3f7f6be7_prof);

        
        $__internal_bea3351c5ed58dcb20df8dcc93e945b334de77c1d5e4a47c6a916422aaed0342->leave($__internal_bea3351c5ed58dcb20df8dcc93e945b334de77c1d5e4a47c6a916422aaed0342_prof);

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
</html>", "::layout.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\app/Resources\\views/layout.html.twig");
    }
}
