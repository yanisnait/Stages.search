<?php

/* SSUserBundle:User:login.html.twig */
class __TwigTemplate_775b2548d3c5bbcd90ae2d9148e0d0c3de00d482aa6bfbefdd6e3afc351c925f extends Twig_Template
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
        $__internal_36dfc67d8d9c3415b42934bc1fa2490f3eb21ab9ecfc8ee514e1a126413b688b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36dfc67d8d9c3415b42934bc1fa2490f3eb21ab9ecfc8ee514e1a126413b688b->enter($__internal_36dfc67d8d9c3415b42934bc1fa2490f3eb21ab9ecfc8ee514e1a126413b688b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:User:login.html.twig"));

        $__internal_a236e4eddfe357049a12094cd13ad34a8f953904a7bac46f0457d7fb20b2ef86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a236e4eddfe357049a12094cd13ad34a8f953904a7bac46f0457d7fb20b2ef86->enter($__internal_a236e4eddfe357049a12094cd13ad34a8f953904a7bac46f0457d7fb20b2ef86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSUserBundle:User:login.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_36dfc67d8d9c3415b42934bc1fa2490f3eb21ab9ecfc8ee514e1a126413b688b->leave($__internal_36dfc67d8d9c3415b42934bc1fa2490f3eb21ab9ecfc8ee514e1a126413b688b_prof);

        
        $__internal_a236e4eddfe357049a12094cd13ad34a8f953904a7bac46f0457d7fb20b2ef86->leave($__internal_a236e4eddfe357049a12094cd13ad34a8f953904a7bac46f0457d7fb20b2ef86_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_fbd2b167c78c2eb53b0fef415695ddb5c48342f6a13a6277610ac73a19669284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbd2b167c78c2eb53b0fef415695ddb5c48342f6a13a6277610ac73a19669284->enter($__internal_fbd2b167c78c2eb53b0fef415695ddb5c48342f6a13a6277610ac73a19669284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3cb185c497c6030a11ea6af057e2b09a03f91f9ec21950aaf6eb771e03471456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb185c497c6030a11ea6af057e2b09a03f91f9ec21950aaf6eb771e03471456->enter($__internal_3cb185c497c6030a11ea6af057e2b09a03f91f9ec21950aaf6eb771e03471456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

                                <button type=\"submit\" class=\"btn btn-success btn-block\">Connexion</button>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-xs-6\">
                        <p class=\"lead\">Inscrivez vous maintenant<span class=\"text-success\">!</span></p>
                        <p><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("signup");
        echo "\" class=\"btn btn-info btn-block\">S'inscrire mainteant !</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
";
        
        $__internal_3cb185c497c6030a11ea6af057e2b09a03f91f9ec21950aaf6eb771e03471456->leave($__internal_3cb185c497c6030a11ea6af057e2b09a03f91f9ec21950aaf6eb771e03471456_prof);

        
        $__internal_fbd2b167c78c2eb53b0fef415695ddb5c48342f6a13a6277610ac73a19669284->leave($__internal_fbd2b167c78c2eb53b0fef415695ddb5c48342f6a13a6277610ac73a19669284_prof);

    }

    public function getTemplateName()
    {
        return "SSUserBundle:User:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  110 => 48,  91 => 32,  85 => 29,  71 => 18,  62 => 11,  56 => 9,  53 => 8,  50 => 6,  32 => 5,  29 => 4,  26 => 2,);
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

                                <button type=\"submit\" class=\"btn btn-success btn-block\">Connexion</button>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-xs-6\">
                        <p class=\"lead\">Inscrivez vous maintenant<span class=\"text-success\">!</span></p>
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
