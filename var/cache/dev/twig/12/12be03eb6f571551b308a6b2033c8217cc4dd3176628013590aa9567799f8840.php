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
        $__internal_1f9535cb5904add160c1da9019ba3d8780f80c46216c786bbd3b981840852bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f9535cb5904add160c1da9019ba3d8780f80c46216c786bbd3b981840852bbd->enter($__internal_1f9535cb5904add160c1da9019ba3d8780f80c46216c786bbd3b981840852bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_16c75cdd9f014fb6c9ae2a2aecfb08cdea8c74f9d9388ae766c32585427fceed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c75cdd9f014fb6c9ae2a2aecfb08cdea8c74f9d9388ae766c32585427fceed->enter($__internal_16c75cdd9f014fb6c9ae2a2aecfb08cdea8c74f9d9388ae766c32585427fceed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTEUR")) {
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
        
        $__internal_1f9535cb5904add160c1da9019ba3d8780f80c46216c786bbd3b981840852bbd->leave($__internal_1f9535cb5904add160c1da9019ba3d8780f80c46216c786bbd3b981840852bbd_prof);

        
        $__internal_16c75cdd9f014fb6c9ae2a2aecfb08cdea8c74f9d9388ae766c32585427fceed->leave($__internal_16c75cdd9f014fb6c9ae2a2aecfb08cdea8c74f9d9388ae766c32585427fceed_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_9dad8052e1aed0eabf5d75bae0c6d947b3088214f21a74a1bf934e1aa4a5e2ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dad8052e1aed0eabf5d75bae0c6d947b3088214f21a74a1bf934e1aa4a5e2ea->enter($__internal_9dad8052e1aed0eabf5d75bae0c6d947b3088214f21a74a1bf934e1aa4a5e2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0feaa7130f3274dd30b3e2cf83594e70a2c80518e4e3087195a410b3474f61be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0feaa7130f3274dd30b3e2cf83594e70a2c80518e4e3087195a410b3474f61be->enter($__internal_0feaa7130f3274dd30b3e2cf83594e70a2c80518e4e3087195a410b3474f61be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SS Plateforme";
        
        $__internal_0feaa7130f3274dd30b3e2cf83594e70a2c80518e4e3087195a410b3474f61be->leave($__internal_0feaa7130f3274dd30b3e2cf83594e70a2c80518e4e3087195a410b3474f61be_prof);

        
        $__internal_9dad8052e1aed0eabf5d75bae0c6d947b3088214f21a74a1bf934e1aa4a5e2ea->leave($__internal_9dad8052e1aed0eabf5d75bae0c6d947b3088214f21a74a1bf934e1aa4a5e2ea_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd172fa2ee4f3442616d5bff7bb6c33995bb495a571258a4971f13aca19d04b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd172fa2ee4f3442616d5bff7bb6c33995bb495a571258a4971f13aca19d04b9->enter($__internal_bd172fa2ee4f3442616d5bff7bb6c33995bb495a571258a4971f13aca19d04b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a31b9036d69a662b197b05840a6d79149650479e1c878dfa4d7d3130673d79b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31b9036d69a662b197b05840a6d79149650479e1c878dfa4d7d3130673d79b7->enter($__internal_a31b9036d69a662b197b05840a6d79149650479e1c878dfa4d7d3130673d79b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_a31b9036d69a662b197b05840a6d79149650479e1c878dfa4d7d3130673d79b7->leave($__internal_a31b9036d69a662b197b05840a6d79149650479e1c878dfa4d7d3130673d79b7_prof);

        
        $__internal_bd172fa2ee4f3442616d5bff7bb6c33995bb495a571258a4971f13aca19d04b9->leave($__internal_bd172fa2ee4f3442616d5bff7bb6c33995bb495a571258a4971f13aca19d04b9_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_45b9e8dfc2cba90d1c7d4d706ec2b8b635d302cf55770e27ca6348a0311168df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b9e8dfc2cba90d1c7d4d706ec2b8b635d302cf55770e27ca6348a0311168df->enter($__internal_45b9e8dfc2cba90d1c7d4d706ec2b8b635d302cf55770e27ca6348a0311168df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_afb1813d2b46d34281a856f38413ab59041a40909c54bdb2be3366b396938fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb1813d2b46d34281a856f38413ab59041a40909c54bdb2be3366b396938fdd->enter($__internal_afb1813d2b46d34281a856f38413ab59041a40909c54bdb2be3366b396938fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 46
        echo "            ";
        
        $__internal_afb1813d2b46d34281a856f38413ab59041a40909c54bdb2be3366b396938fdd->leave($__internal_afb1813d2b46d34281a856f38413ab59041a40909c54bdb2be3366b396938fdd_prof);

        
        $__internal_45b9e8dfc2cba90d1c7d4d706ec2b8b635d302cf55770e27ca6348a0311168df->leave($__internal_45b9e8dfc2cba90d1c7d4d706ec2b8b635d302cf55770e27ca6348a0311168df_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3265038c0c9aa683b5a677277e4ef2c7be2a2fedeecb5966f09ce728645b0b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3265038c0c9aa683b5a677277e4ef2c7be2a2fedeecb5966f09ce728645b0b80->enter($__internal_3265038c0c9aa683b5a677277e4ef2c7be2a2fedeecb5966f09ce728645b0b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_57d1e4672c8568cac3004af16bf95b0629b5cabe4cd405eef4776a47740c6416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d1e4672c8568cac3004af16bf95b0629b5cabe4cd405eef4776a47740c6416->enter($__internal_57d1e4672c8568cac3004af16bf95b0629b5cabe4cd405eef4776a47740c6416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "    ";
        // line 59
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_57d1e4672c8568cac3004af16bf95b0629b5cabe4cd405eef4776a47740c6416->leave($__internal_57d1e4672c8568cac3004af16bf95b0629b5cabe4cd405eef4776a47740c6416_prof);

        
        $__internal_3265038c0c9aa683b5a677277e4ef2c7be2a2fedeecb5966f09ce728645b0b80->leave($__internal_3265038c0c9aa683b5a677277e4ef2c7be2a2fedeecb5966f09ce728645b0b80_prof);

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
                {% if is_granted('ROLE_AUTEUR') %}
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
