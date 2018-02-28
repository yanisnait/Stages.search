<?php

/* SSUserBundle:User:login.html.twig */
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
        $__internal_74fcb895054c5d5c1c8d5698b4dca90e2d24a7367283accc45c13c971abfda43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74fcb895054c5d5c1c8d5698b4dca90e2d24a7367283accc45c13c971abfda43->enter($__internal_74fcb895054c5d5c1c8d5698b4dca90e2d24a7367283accc45c13c971abfda43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:User:login.html.twig"));

        $__internal_be34505ac774f93430ec10fb9221388512395574111a8e46ca9b9fc3713edf67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be34505ac774f93430ec10fb9221388512395574111a8e46ca9b9fc3713edf67->enter($__internal_be34505ac774f93430ec10fb9221388512395574111a8e46ca9b9fc3713edf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:User:login.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_74fcb895054c5d5c1c8d5698b4dca90e2d24a7367283accc45c13c971abfda43->leave($__internal_74fcb895054c5d5c1c8d5698b4dca90e2d24a7367283accc45c13c971abfda43_prof);

        
        $__internal_be34505ac774f93430ec10fb9221388512395574111a8e46ca9b9fc3713edf67->leave($__internal_be34505ac774f93430ec10fb9221388512395574111a8e46ca9b9fc3713edf67_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_9511f804da884d0c3232fdc1b03bd25de88fd1955459ab2be518dce14ed8c29f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9511f804da884d0c3232fdc1b03bd25de88fd1955459ab2be518dce14ed8c29f->enter($__internal_9511f804da884d0c3232fdc1b03bd25de88fd1955459ab2be518dce14ed8c29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5bbb45464296d11bef032b25ac014808043b4ed55ebae87c2ad621dc161c91c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bbb45464296d11bef032b25ac014808043b4ed55ebae87c2ad621dc161c91c5->enter($__internal_5bbb45464296d11bef032b25ac014808043b4ed55ebae87c2ad621dc161c91c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <div id=\"fullscreen_bg\" class=\"fullscreen_bg\">
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
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\" novalidate=\"novalidate\">
                                <div class=\"form-group\">
                                    <label for=\"username\" class=\"control-label\">Nom d'utilisateur</label>
                                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 32, $this->getSourceContext()); })()), "html", null, true);
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
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("signup");
        echo "\" class=\"btn btn-info btn-block\">S'inscrire mainteant !</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
";
        
        $__internal_5bbb45464296d11bef032b25ac014808043b4ed55ebae87c2ad621dc161c91c5->leave($__internal_5bbb45464296d11bef032b25ac014808043b4ed55ebae87c2ad621dc161c91c5_prof);

        
        $__internal_9511f804da884d0c3232fdc1b03bd25de88fd1955459ab2be518dce14ed8c29f->leave($__internal_9511f804da884d0c3232fdc1b03bd25de88fd1955459ab2be518dce14ed8c29f_prof);

    }

    public function getTemplateName()
    {
        return "SSUserBundle:User:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  121 => 59,  91 => 32,  85 => 29,  71 => 18,  62 => 11,  56 => 9,  53 => 8,  50 => 6,  32 => 5,  29 => 4,  26 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SS/UserBundle/Resources/views/User/login.html.twig #}

{#% extends \"SSPlatformBundle::layout.html.twig\" %#}

{% block body %}

    {# S'il y a une erreur, on l'affiche dans un joli cadre #}
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.message }}</div>
    {% endif %}

    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"{{ asset('login.css') }}\" rel=\"stylesheet\">
    <div id=\"fullscreen_bg\" class=\"fullscreen_bg\">
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
                        <p><a href=\"{{ path('signup') }}\" class=\"btn btn-info btn-block\">S'inscrire mainteant !</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
{% endblock %}", "SSUserBundle:User:login.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\UserBundle\\Resources\\views\\User\\login.html.twig");
    }
}
