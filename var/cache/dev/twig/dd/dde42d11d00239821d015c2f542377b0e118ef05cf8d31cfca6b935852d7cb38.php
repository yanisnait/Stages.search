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
        $__internal_91f292f6f4ed5b2b7cd6c6e70c05fe455c0b4e0477de13708b42c2ae2b853f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f292f6f4ed5b2b7cd6c6e70c05fe455c0b4e0477de13708b42c2ae2b853f36->enter($__internal_91f292f6f4ed5b2b7cd6c6e70c05fe455c0b4e0477de13708b42c2ae2b853f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:Security:login.html.twig"));

        $__internal_c2bb209cd3377dd7c2dc0a23276266b29e73712b07099fdc1976fad7ae8a178d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2bb209cd3377dd7c2dc0a23276266b29e73712b07099fdc1976fad7ae8a178d->enter($__internal_c2bb209cd3377dd7c2dc0a23276266b29e73712b07099fdc1976fad7ae8a178d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:Security:login.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_91f292f6f4ed5b2b7cd6c6e70c05fe455c0b4e0477de13708b42c2ae2b853f36->leave($__internal_91f292f6f4ed5b2b7cd6c6e70c05fe455c0b4e0477de13708b42c2ae2b853f36_prof);

        
        $__internal_c2bb209cd3377dd7c2dc0a23276266b29e73712b07099fdc1976fad7ae8a178d->leave($__internal_c2bb209cd3377dd7c2dc0a23276266b29e73712b07099fdc1976fad7ae8a178d_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_0a4c467509640504c757d6e4ac8a621cb93953d862190124034bc37dcdb62091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4c467509640504c757d6e4ac8a621cb93953d862190124034bc37dcdb62091->enter($__internal_0a4c467509640504c757d6e4ac8a621cb93953d862190124034bc37dcdb62091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_108d74862deef06f860f9304b389662243290a977c4086fa0e9ee7a35c18579f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108d74862deef06f860f9304b389662243290a977c4086fa0e9ee7a35c18579f->enter($__internal_108d74862deef06f860f9304b389662243290a977c4086fa0e9ee7a35c18579f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "    <!-- <form action=\"";
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
    </form> -->

    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <div id=\"login-overlay\" class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"myModalLabel\">Connexion à Stages Search</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"well\">
                            <form id=\"loginForm\" action=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\" novalidate=\"novalidate\">
                                <div class=\"form-group\">
                                    <label for=\"username\" class=\"control-label\">Nom d'utilisateur</label>
                                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 42, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"\" title=\"Please enter you username\" placeholder=\"example@gmail.com\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"password\" class=\"control-label\">Mot de passe</label>
                                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" value=\"\" required=\"\" title=\"Please enter your password\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div id=\"loginErrorMsg\" class=\"alert alert-error hide\">Mauvais nom d'utilisateur ou mot de passe</div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" name=\"remember\" id=\"remember\"> Se souvenir de moi
                                    </label>
                                    <p class=\"help-block\">(réseau non public)</p>
                                </div>
                                <button type=\"submit\" class=\"btn btn-success btn-block\">Connexion</button>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-xs-6\">
                        <p class=\"lead\">Inscrivez vous maintenant<span class=\"text-success\">!</span></p>
                        <ul class=\"list-unstyled\" style=\"line-height: 2\">
                            <li><span class=\"fa fa-check text-success\"></span> Ajoutez des annonces</li>
                            <li><span class=\"fa fa-check text-success\"></span> Suivre l'avancement de vos recherches</li>
                            <li><span class=\"fa fa-check text-success\"></span> Commenter les annonces</li>
                            <li><span class=\"fa fa-check text-success\"></span> Aidez les autres étudiants</li>
                        </ul>
                        <p><a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" class=\"btn btn-info btn-block\">S'inscrire mainteant !</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_108d74862deef06f860f9304b389662243290a977c4086fa0e9ee7a35c18579f->leave($__internal_108d74862deef06f860f9304b389662243290a977c4086fa0e9ee7a35c18579f_prof);

        
        $__internal_0a4c467509640504c757d6e4ac8a621cb93953d862190124034bc37dcdb62091->leave($__internal_0a4c467509640504c757d6e4ac8a621cb93953d862190124034bc37dcdb62091_prof);

    }

    public function getTemplateName()
    {
        return "SSUserBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  134 => 69,  104 => 42,  98 => 39,  71 => 15,  65 => 13,  62 => 11,  56 => 9,  53 => 8,  50 => 6,  32 => 5,  29 => 4,  26 => 2,);
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
    <!-- <form action=\"{{ path('login_check') }}\" method=\"post\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
        <br>
        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <input type=\"submit\" value=\"Connexion\" />
    </form> -->

    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <div id=\"login-overlay\" class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"myModalLabel\">Connexion à Stages Search</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"well\">
                            <form id=\"loginForm\" action=\"{{ path('login_check') }}\" method=\"post\" novalidate=\"novalidate\">
                                <div class=\"form-group\">
                                    <label for=\"username\" class=\"control-label\">Nom d'utilisateur</label>
                                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"\" title=\"Please enter you username\" placeholder=\"example@gmail.com\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"password\" class=\"control-label\">Mot de passe</label>
                                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" value=\"\" required=\"\" title=\"Please enter your password\">
                                    <span class=\"help-block\"></span>
                                </div>
                                <div id=\"loginErrorMsg\" class=\"alert alert-error hide\">Mauvais nom d'utilisateur ou mot de passe</div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" name=\"remember\" id=\"remember\"> Se souvenir de moi
                                    </label>
                                    <p class=\"help-block\">(réseau non public)</p>
                                </div>
                                <button type=\"submit\" class=\"btn btn-success btn-block\">Connexion</button>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-xs-6\">
                        <p class=\"lead\">Inscrivez vous maintenant<span class=\"text-success\">!</span></p>
                        <ul class=\"list-unstyled\" style=\"line-height: 2\">
                            <li><span class=\"fa fa-check text-success\"></span> Ajoutez des annonces</li>
                            <li><span class=\"fa fa-check text-success\"></span> Suivre l'avancement de vos recherches</li>
                            <li><span class=\"fa fa-check text-success\"></span> Commenter les annonces</li>
                            <li><span class=\"fa fa-check text-success\"></span> Aidez les autres étudiants</li>
                        </ul>
                        <p><a href=\"{{ path('login') }}\" class=\"btn btn-info btn-block\">S'inscrire mainteant !</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "SSUserBundle:Security:login.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
