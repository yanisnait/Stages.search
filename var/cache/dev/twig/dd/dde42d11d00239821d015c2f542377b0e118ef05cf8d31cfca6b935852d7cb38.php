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
        $__internal_dc9d24a226a7d3fc20c275605160bccb1b6e7c283bd9483434c5ca1853b32855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc9d24a226a7d3fc20c275605160bccb1b6e7c283bd9483434c5ca1853b32855->enter($__internal_dc9d24a226a7d3fc20c275605160bccb1b6e7c283bd9483434c5ca1853b32855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:Security:login.html.twig"));

        $__internal_4299cd961c9d274bcd11432e2c2b27922002ba429b2c56135a1e22f91ae00d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4299cd961c9d274bcd11432e2c2b27922002ba429b2c56135a1e22f91ae00d8c->enter($__internal_4299cd961c9d274bcd11432e2c2b27922002ba429b2c56135a1e22f91ae00d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:Security:login.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_dc9d24a226a7d3fc20c275605160bccb1b6e7c283bd9483434c5ca1853b32855->leave($__internal_dc9d24a226a7d3fc20c275605160bccb1b6e7c283bd9483434c5ca1853b32855_prof);

        
        $__internal_4299cd961c9d274bcd11432e2c2b27922002ba429b2c56135a1e22f91ae00d8c->leave($__internal_4299cd961c9d274bcd11432e2c2b27922002ba429b2c56135a1e22f91ae00d8c_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_bd9c3d78f12c6c087301c66904317f858c89be613689d193f020e038173ef018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd9c3d78f12c6c087301c66904317f858c89be613689d193f020e038173ef018->enter($__internal_bd9c3d78f12c6c087301c66904317f858c89be613689d193f020e038173ef018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8afa09eba21a168ab8e6b0016649478279e4869d3fb7ee6ea20e1529768ece7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8afa09eba21a168ab8e6b0016649478279e4869d3fb7ee6ea20e1529768ece7->enter($__internal_f8afa09eba21a168ab8e6b0016649478279e4869d3fb7ee6ea20e1529768ece7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f8afa09eba21a168ab8e6b0016649478279e4869d3fb7ee6ea20e1529768ece7->leave($__internal_f8afa09eba21a168ab8e6b0016649478279e4869d3fb7ee6ea20e1529768ece7_prof);

        
        $__internal_bd9c3d78f12c6c087301c66904317f858c89be613689d193f020e038173ef018->leave($__internal_bd9c3d78f12c6c087301c66904317f858c89be613689d193f020e038173ef018_prof);

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
