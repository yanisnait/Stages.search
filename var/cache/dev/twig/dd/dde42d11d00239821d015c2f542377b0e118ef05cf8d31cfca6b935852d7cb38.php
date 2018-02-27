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
        $__internal_94494177d529083a8674b06a740544438b9a98f9743bb40a0b420413a086ea04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94494177d529083a8674b06a740544438b9a98f9743bb40a0b420413a086ea04->enter($__internal_94494177d529083a8674b06a740544438b9a98f9743bb40a0b420413a086ea04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:Security:login.html.twig"));

        $__internal_211d7915c8f030ca9429fb6b47fed3930cd52700611f55429634ba79aba043a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211d7915c8f030ca9429fb6b47fed3930cd52700611f55429634ba79aba043a1->enter($__internal_211d7915c8f030ca9429fb6b47fed3930cd52700611f55429634ba79aba043a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:Security:login.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_94494177d529083a8674b06a740544438b9a98f9743bb40a0b420413a086ea04->leave($__internal_94494177d529083a8674b06a740544438b9a98f9743bb40a0b420413a086ea04_prof);

        
        $__internal_211d7915c8f030ca9429fb6b47fed3930cd52700611f55429634ba79aba043a1->leave($__internal_211d7915c8f030ca9429fb6b47fed3930cd52700611f55429634ba79aba043a1_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_1d69e0efafe8925d7f789c6cb8da636a347be407d0b615052fe5b9cc80e6585b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d69e0efafe8925d7f789c6cb8da636a347be407d0b615052fe5b9cc80e6585b->enter($__internal_1d69e0efafe8925d7f789c6cb8da636a347be407d0b615052fe5b9cc80e6585b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e7ddd7447fe3318e06c567faba372226895dbfa92ae13141a9adfb6fbbaf63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7ddd7447fe3318e06c567faba372226895dbfa92ae13141a9adfb6fbbaf63b->enter($__internal_9e7ddd7447fe3318e06c567faba372226895dbfa92ae13141a9adfb6fbbaf63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 6
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })())) {
            // line 7
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    ";
        // line 11
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
        <br>
        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <input type=\"submit\" value=\"Connexion\" />
    </form>

";
        
        $__internal_9e7ddd7447fe3318e06c567faba372226895dbfa92ae13141a9adfb6fbbaf63b->leave($__internal_9e7ddd7447fe3318e06c567faba372226895dbfa92ae13141a9adfb6fbbaf63b_prof);

        
        $__internal_1d69e0efafe8925d7f789c6cb8da636a347be407d0b615052fe5b9cc80e6585b->leave($__internal_1d69e0efafe8925d7f789c6cb8da636a347be407d0b615052fe5b9cc80e6585b_prof);

    }

    public function getTemplateName()
    {
        return "SSUserBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  62 => 11,  59 => 9,  53 => 7,  50 => 6,  47 => 4,  29 => 3,  26 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SS/UserBundle/Resources/views/Security/login.html.twig #}

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
