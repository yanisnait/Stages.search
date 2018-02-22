<?php

/* SSUserBundle:Security:login.html.twig */
class __TwigTemplate_6acbc95e4a22fca93e46965db6bc717f170cb0a248a79372fc8de1a082f1ab91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("SSPlatformBundle::layout.html.twig", "SSUserBundle:Security:login.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SSPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4ce58f24bb128f3994908f68909e47f709cad999adb5a583049d27f1b84b122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ce58f24bb128f3994908f68909e47f709cad999adb5a583049d27f1b84b122->enter($__internal_b4ce58f24bb128f3994908f68909e47f709cad999adb5a583049d27f1b84b122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:Security:login.html.twig"));

        $__internal_5deff9dba55daf31557a718272d4443578b4dc296ca2cf3cbcdc89d8146db652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5deff9dba55daf31557a718272d4443578b4dc296ca2cf3cbcdc89d8146db652->enter($__internal_5deff9dba55daf31557a718272d4443578b4dc296ca2cf3cbcdc89d8146db652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4ce58f24bb128f3994908f68909e47f709cad999adb5a583049d27f1b84b122->leave($__internal_b4ce58f24bb128f3994908f68909e47f709cad999adb5a583049d27f1b84b122_prof);

        
        $__internal_5deff9dba55daf31557a718272d4443578b4dc296ca2cf3cbcdc89d8146db652->leave($__internal_5deff9dba55daf31557a718272d4443578b4dc296ca2cf3cbcdc89d8146db652_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bacd3f4a27fc0f3d1fd30eac6c391baeb699ac7db89f06304ce91af8ee78522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bacd3f4a27fc0f3d1fd30eac6c391baeb699ac7db89f06304ce91af8ee78522->enter($__internal_9bacd3f4a27fc0f3d1fd30eac6c391baeb699ac7db89f06304ce91af8ee78522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4badf5feb87918c6d2b4c6939114ab1c25c0cb7b564deab17383f63b18d90835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4badf5feb87918c6d2b4c6939114ab1c25c0cb7b564deab17383f63b18d90835->enter($__internal_4badf5feb87918c6d2b4c6939114ab1c25c0cb7b564deab17383f63b18d90835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_home");
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
        
        $__internal_4badf5feb87918c6d2b4c6939114ab1c25c0cb7b564deab17383f63b18d90835->leave($__internal_4badf5feb87918c6d2b4c6939114ab1c25c0cb7b564deab17383f63b18d90835_prof);

        
        $__internal_9bacd3f4a27fc0f3d1fd30eac6c391baeb699ac7db89f06304ce91af8ee78522->leave($__internal_9bacd3f4a27fc0f3d1fd30eac6c391baeb699ac7db89f06304ce91af8ee78522_prof);

    }

    public function getTemplateName()
    {
        return "SSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  64 => 13,  61 => 11,  55 => 9,  52 => 8,  49 => 6,  40 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SS/UserBundle/Resources/views/Security/login.html.twig #}

{% extends \"SSPlatformBundle::layout.html.twig\" %}

{% block body %}

    {# S'il y a une erreur, on l'affiche dans un joli cadre #}
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.message }}</div>
    {% endif %}

    {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}
    <form action=\"{{ path('ss_platform_home') }}\" method=\"post\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
        <br>
        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <input type=\"submit\" value=\"Connexion\" />
    </form>

{% endblock %}", "SSUserBundle:Security:login.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
