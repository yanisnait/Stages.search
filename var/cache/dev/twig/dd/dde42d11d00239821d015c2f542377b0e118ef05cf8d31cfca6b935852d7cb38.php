<?php

/* SSUserBundle:Security:login.html.twig */
class __TwigTemplate_8277bfe9e0891b368f9a323056fa1c5882f8bc8fb87e0073935c087ab39b5b65 extends Twig_Template
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
        $__internal_454a7dd1fb83ddb4873fbd3564591891f1aeac1680451313c690db017fa32a96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454a7dd1fb83ddb4873fbd3564591891f1aeac1680451313c690db017fa32a96->enter($__internal_454a7dd1fb83ddb4873fbd3564591891f1aeac1680451313c690db017fa32a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:Security:login.html.twig"));

        $__internal_5458c0588de7dbd9bc894e806d993f39055ae59a48b88a0eec66284cf53924d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5458c0588de7dbd9bc894e806d993f39055ae59a48b88a0eec66284cf53924d1->enter($__internal_5458c0588de7dbd9bc894e806d993f39055ae59a48b88a0eec66284cf53924d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_454a7dd1fb83ddb4873fbd3564591891f1aeac1680451313c690db017fa32a96->leave($__internal_454a7dd1fb83ddb4873fbd3564591891f1aeac1680451313c690db017fa32a96_prof);

        
        $__internal_5458c0588de7dbd9bc894e806d993f39055ae59a48b88a0eec66284cf53924d1->leave($__internal_5458c0588de7dbd9bc894e806d993f39055ae59a48b88a0eec66284cf53924d1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_82e7108da89567b8d2d9db08af0e5acca061ad7deb7fe2af0add65b51d75c887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e7108da89567b8d2d9db08af0e5acca061ad7deb7fe2af0add65b51d75c887->enter($__internal_82e7108da89567b8d2d9db08af0e5acca061ad7deb7fe2af0add65b51d75c887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b476a9490112b1dce2e50908db78085e9829f62c68f41a67a104920da987d265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b476a9490112b1dce2e50908db78085e9829f62c68f41a67a104920da987d265->enter($__internal_b476a9490112b1dce2e50908db78085e9829f62c68f41a67a104920da987d265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b476a9490112b1dce2e50908db78085e9829f62c68f41a67a104920da987d265->leave($__internal_b476a9490112b1dce2e50908db78085e9829f62c68f41a67a104920da987d265_prof);

        
        $__internal_82e7108da89567b8d2d9db08af0e5acca061ad7deb7fe2af0add65b51d75c887->leave($__internal_82e7108da89567b8d2d9db08af0e5acca061ad7deb7fe2af0add65b51d75c887_prof);

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
