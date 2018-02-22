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
        $__internal_2d88ad9b0e01280da46979080b136ee55e93819ada02e62d6bf09011114419a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d88ad9b0e01280da46979080b136ee55e93819ada02e62d6bf09011114419a5->enter($__internal_2d88ad9b0e01280da46979080b136ee55e93819ada02e62d6bf09011114419a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:Security:login.html.twig"));

        $__internal_b960c512d390914c9f504c210042e15f9b7abab47fc379ad3f050134d3384b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b960c512d390914c9f504c210042e15f9b7abab47fc379ad3f050134d3384b0c->enter($__internal_b960c512d390914c9f504c210042e15f9b7abab47fc379ad3f050134d3384b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:Security:login.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_2d88ad9b0e01280da46979080b136ee55e93819ada02e62d6bf09011114419a5->leave($__internal_2d88ad9b0e01280da46979080b136ee55e93819ada02e62d6bf09011114419a5_prof);

        
        $__internal_b960c512d390914c9f504c210042e15f9b7abab47fc379ad3f050134d3384b0c->leave($__internal_b960c512d390914c9f504c210042e15f9b7abab47fc379ad3f050134d3384b0c_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_cd1cfd7df0396314cf8e39367a7150af040d7cc556bbc0855cb9dfeeb4b9388f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd1cfd7df0396314cf8e39367a7150af040d7cc556bbc0855cb9dfeeb4b9388f->enter($__internal_cd1cfd7df0396314cf8e39367a7150af040d7cc556bbc0855cb9dfeeb4b9388f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9bc91890063949fc7b2fb5b35056306df131dd26fae52910ec1ae8b1265abb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9bc91890063949fc7b2fb5b35056306df131dd26fae52910ec1ae8b1265abb5->enter($__internal_e9bc91890063949fc7b2fb5b35056306df131dd26fae52910ec1ae8b1265abb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e9bc91890063949fc7b2fb5b35056306df131dd26fae52910ec1ae8b1265abb5->leave($__internal_e9bc91890063949fc7b2fb5b35056306df131dd26fae52910ec1ae8b1265abb5_prof);

        
        $__internal_cd1cfd7df0396314cf8e39367a7150af040d7cc556bbc0855cb9dfeeb4b9388f->leave($__internal_cd1cfd7df0396314cf8e39367a7150af040d7cc556bbc0855cb9dfeeb4b9388f_prof);

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
