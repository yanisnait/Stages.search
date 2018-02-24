<?php

/* SSUserBundle:Security:login.html.twig */
class __TwigTemplate_8277bfe9e0891b368f9a323056fa1c5882f8bc8fb87e0073935c087ab39b5b65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d837e5b2709a75083b24d96e65f148d809c10f2ea9200cea0183c0576db5de17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d837e5b2709a75083b24d96e65f148d809c10f2ea9200cea0183c0576db5de17->enter($__internal_d837e5b2709a75083b24d96e65f148d809c10f2ea9200cea0183c0576db5de17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:Security:login.html.twig"));

        $__internal_ed6b8505a25fe9b33da1bce6f4e369b50c5d02f5decf5401ca677f4327d594f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6b8505a25fe9b33da1bce6f4e369b50c5d02f5decf5401ca677f4327d594f3->enter($__internal_ed6b8505a25fe9b33da1bce6f4e369b50c5d02f5decf5401ca677f4327d594f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:Security:login.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_d837e5b2709a75083b24d96e65f148d809c10f2ea9200cea0183c0576db5de17->leave($__internal_d837e5b2709a75083b24d96e65f148d809c10f2ea9200cea0183c0576db5de17_prof);

        
        $__internal_ed6b8505a25fe9b33da1bce6f4e369b50c5d02f5decf5401ca677f4327d594f3->leave($__internal_ed6b8505a25fe9b33da1bce6f4e369b50c5d02f5decf5401ca677f4327d594f3_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_e8e3d63bbdb677398ee18e3b13b0268203f81d444aa1877303d51d3b76252e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e3d63bbdb677398ee18e3b13b0268203f81d444aa1877303d51d3b76252e0d->enter($__internal_e8e3d63bbdb677398ee18e3b13b0268203f81d444aa1877303d51d3b76252e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_561180c9aaf39d58b82dcc8d08f1cb8c6d4e379e97942841450806e17057e9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561180c9aaf39d58b82dcc8d08f1cb8c6d4e379e97942841450806e17057e9c2->enter($__internal_561180c9aaf39d58b82dcc8d08f1cb8c6d4e379e97942841450806e17057e9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 8
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 8, $this->getSourceContext()); })())) {
            // line 9
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 9, $this->getSourceContext()); })()), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 11
        echo "
    ";
        // line 13
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
        <br>
        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <input type=\"submit\" value=\"Connexion\" />
    </form>

";
        
        $__internal_561180c9aaf39d58b82dcc8d08f1cb8c6d4e379e97942841450806e17057e9c2->leave($__internal_561180c9aaf39d58b82dcc8d08f1cb8c6d4e379e97942841450806e17057e9c2_prof);

        
        $__internal_e8e3d63bbdb677398ee18e3b13b0268203f81d444aa1877303d51d3b76252e0d->leave($__internal_e8e3d63bbdb677398ee18e3b13b0268203f81d444aa1877303d51d3b76252e0d_prof);

    }

    public function getTemplateName()
    {
        return "SSUserBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  65 => 13,  62 => 11,  56 => 9,  53 => 8,  50 => 6,  32 => 5,  29 => 4,  26 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SS/UserBundle/Resources/views/Security/login.html.twig #}

{#% extends \"SSPlatformBundle::layout.html.twig\" %#}

{% block body %}

    {# S'il y a une erreur, on l'affiche dans un joli cadre #}
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.message }}</div>
    {% endif %}

    {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}
    <form action=\"{{ path('login_check') }}\" method=\"post\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
        <br>
        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <input type=\"submit\" value=\"Connexion\" />
    </form>

{% endblock %}", "SSUserBundle:Security:login.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
