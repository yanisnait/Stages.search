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
        $__internal_bb0f43e60ca1d4abda8f6b7fd9980cfdd92df49ecde22d3de7794bd53f9d7dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb0f43e60ca1d4abda8f6b7fd9980cfdd92df49ecde22d3de7794bd53f9d7dea->enter($__internal_bb0f43e60ca1d4abda8f6b7fd9980cfdd92df49ecde22d3de7794bd53f9d7dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_976b607eebf4200cd953875c13c45fc3a038a30fa1f9d8ea68219f2222026353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976b607eebf4200cd953875c13c45fc3a038a30fa1f9d8ea68219f2222026353->enter($__internal_976b607eebf4200cd953875c13c45fc3a038a30fa1f9d8ea68219f2222026353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../web/assets/ico/favicon.png"), "html", null, true);
        echo "\">



    <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "</head>

<body>

<!-- Fixed navbar -->

<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../web/assets/img/logo.png"), "html", null, true);
        echo "\" align=\"left\"   style=\"float:top;margin:0 0px 0 0px;\"  height=\"70px\" width=\"135px\" >

    <div class=\"container\">

        <div class=\"navbar-header\">

            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>

            <a class=\"navbar-brand\" href=\"#\">StageSearch SEGMI</a>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">

                <li class=\"active\"><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_home");
        echo "\">Accueil</a></li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Offres <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_offres");
        echo "\">Nos offres</a></li>
                        <li><a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_addOffre");
        echo "\">Ajouter une offre </a></li>

                    </ul>
                </li>


                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Entreprises <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"sidebar-left.html\">Nos entreprises</a></li>
                        <li><a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ss_platform_addEntreprise");
        echo "\">Ajouter une entreprise</a></li>
                    </ul>
                </li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Espace Membre <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"sidebar-left.html\">Cours L1</a></li>
                        <li><a href=\"sidebar-left.html\">Cours L2</a></li>
                        <li><a href=\"sidebar-left.html\">Cours L3</a></li>
                        <li><a href=\"sidebar-right.html\">Cours Masters</a></li>
                    </ul>
                </li>



                <li class=\"dropdown\">

                    <a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\" class=\"dropdown-toggle\" > Sign Out <b class=\"\"></b></a>



            </ul></li>
        </div><!--/.nav-collapse -->
    </div>
</div>


<div id=\"headerwrap\">
    <div class=\"container\">
        <div class=\"row centered\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <h1>La plateforme faite par les <b>étudiants</b></h1>
                <h2>pour les <b>étudiants</b></h2>
            </div>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- headerwrap -->



";
        // line 116
        $this->displayBlock('body', $context, $blocks);
        // line 118
        echo "<!-- FOOTER -->
<div id=\"f\">
    <div class=\"container\">
        <div class=\"row centered\">
            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a><a href=\"#\"><i class=\"fa fa-facebook\"></i></a><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>

        </div><!-- row -->
    </div><!-- container -->
</div><!-- Footer -->


<!-- MODAL FOR CONTACT -->
<!-- Modal -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">contact us</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row centered\">
                    <p>We are available 24/7, so don't hesitate to contact us.</p>
                    <p>
                        Somestreet Ave, 987<br/>
                        London, UK.<br/>
                        +44 8948-4343<br/>
                        hi@blacktie.co
                    </p>
                    <div id=\"mapwrap\">
                        <iframe height=\"300\" width=\"100%\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.es/maps?t=m&amp;ie=UTF8&amp;ll=52.752693,22.791016&amp;spn=67.34552,156.972656&amp;z=2&amp;output=embed\"></iframe>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Save & Go</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


";
        // line 160
        $this->displayBlock('javascripts', $context, $blocks);
        // line 165
        echo "
</body>
</html>";
        
        $__internal_bb0f43e60ca1d4abda8f6b7fd9980cfdd92df49ecde22d3de7794bd53f9d7dea->leave($__internal_bb0f43e60ca1d4abda8f6b7fd9980cfdd92df49ecde22d3de7794bd53f9d7dea_prof);

        
        $__internal_976b607eebf4200cd953875c13c45fc3a038a30fa1f9d8ea68219f2222026353->leave($__internal_976b607eebf4200cd953875c13c45fc3a038a30fa1f9d8ea68219f2222026353_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f787fc468409f87b17835928150d52aadb421983a5fe4374184f9dee1a4944a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f787fc468409f87b17835928150d52aadb421983a5fe4374184f9dee1a4944a->enter($__internal_3f787fc468409f87b17835928150d52aadb421983a5fe4374184f9dee1a4944a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_003bb56483ccb12efa2ef7fab02a6e312ee40403f7b640353ed864d939ae85fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003bb56483ccb12efa2ef7fab02a6e312ee40403f7b640353ed864d939ae85fd->enter($__internal_003bb56483ccb12efa2ef7fab02a6e312ee40403f7b640353ed864d939ae85fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SS Plateforme";
        
        $__internal_003bb56483ccb12efa2ef7fab02a6e312ee40403f7b640353ed864d939ae85fd->leave($__internal_003bb56483ccb12efa2ef7fab02a6e312ee40403f7b640353ed864d939ae85fd_prof);

        
        $__internal_3f787fc468409f87b17835928150d52aadb421983a5fe4374184f9dee1a4944a->leave($__internal_3f787fc468409f87b17835928150d52aadb421983a5fe4374184f9dee1a4944a_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6b0d0aa0fb09584830f6b639c088c811078cc6f6611f8e9f69ee6f3e8b553e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6b0d0aa0fb09584830f6b639c088c811078cc6f6611f8e9f69ee6f3e8b553e6->enter($__internal_b6b0d0aa0fb09584830f6b639c088c811078cc6f6611f8e9f69ee6f3e8b553e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c57eadaa8ebc531c677477b88a546cddc8aace76f6d0734cd12522622253264c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57eadaa8ebc531c677477b88a546cddc8aace76f6d0734cd12522622253264c->enter($__internal_c57eadaa8ebc531c677477b88a546cddc8aace76f6d0734cd12522622253264c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../web/assets/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../web/assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../web/assets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
</head>


";
        
        $__internal_c57eadaa8ebc531c677477b88a546cddc8aace76f6d0734cd12522622253264c->leave($__internal_c57eadaa8ebc531c677477b88a546cddc8aace76f6d0734cd12522622253264c_prof);

        
        $__internal_b6b0d0aa0fb09584830f6b639c088c811078cc6f6611f8e9f69ee6f3e8b553e6->leave($__internal_b6b0d0aa0fb09584830f6b639c088c811078cc6f6611f8e9f69ee6f3e8b553e6_prof);

    }

    // line 116
    public function block_body($context, array $blocks = array())
    {
        $__internal_03231223cc918ae13e6c5822a7685cf98270dbbcdaa7d73ec33bb62ed04db977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03231223cc918ae13e6c5822a7685cf98270dbbcdaa7d73ec33bb62ed04db977->enter($__internal_03231223cc918ae13e6c5822a7685cf98270dbbcdaa7d73ec33bb62ed04db977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6806a51e9093f393a5f4dfde8c606b021ecdc6d7739768e704d8c2d0b1880d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6806a51e9093f393a5f4dfde8c606b021ecdc6d7739768e704d8c2d0b1880d39->enter($__internal_6806a51e9093f393a5f4dfde8c606b021ecdc6d7739768e704d8c2d0b1880d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6806a51e9093f393a5f4dfde8c606b021ecdc6d7739768e704d8c2d0b1880d39->leave($__internal_6806a51e9093f393a5f4dfde8c606b021ecdc6d7739768e704d8c2d0b1880d39_prof);

        
        $__internal_03231223cc918ae13e6c5822a7685cf98270dbbcdaa7d73ec33bb62ed04db977->leave($__internal_03231223cc918ae13e6c5822a7685cf98270dbbcdaa7d73ec33bb62ed04db977_prof);

    }

    // line 160
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_33a249cbb4c996274fb1b1bda67d5a689efe0e5c19e7c1d5a47dd459b89e887a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a249cbb4c996274fb1b1bda67d5a689efe0e5c19e7c1d5a47dd459b89e887a->enter($__internal_33a249cbb4c996274fb1b1bda67d5a689efe0e5c19e7c1d5a47dd459b89e887a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b547cc06cda2553bec3661a20947ebb4139c8de933ef2f45fa23e2576a5a51f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b547cc06cda2553bec3661a20947ebb4139c8de933ef2f45fa23e2576a5a51f0->enter($__internal_b547cc06cda2553bec3661a20947ebb4139c8de933ef2f45fa23e2576a5a51f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 161
        echo "    ";
        // line 162
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_b547cc06cda2553bec3661a20947ebb4139c8de933ef2f45fa23e2576a5a51f0->leave($__internal_b547cc06cda2553bec3661a20947ebb4139c8de933ef2f45fa23e2576a5a51f0_prof);

        
        $__internal_33a249cbb4c996274fb1b1bda67d5a689efe0e5c19e7c1d5a47dd459b89e887a->leave($__internal_33a249cbb4c996274fb1b1bda67d5a689efe0e5c19e7c1d5a47dd459b89e887a_prof);

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
        return array (  306 => 162,  304 => 161,  295 => 160,  278 => 116,  256 => 23,  250 => 20,  246 => 19,  242 => 17,  233 => 16,  215 => 14,  203 => 165,  201 => 160,  157 => 118,  155 => 116,  129 => 93,  108 => 75,  95 => 65,  91 => 64,  83 => 59,  63 => 42,  54 => 35,  52 => 16,  47 => 14,  40 => 10,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"{{asset('../web/assets/ico/favicon.png')}}\">



    <title>{% block title %}SS Plateforme{% endblock %}</title>

    {% block stylesheets %}

    <!-- Bootstrap core CSS -->
    <link href=\"{{asset('../web/assets/css/bootstrap.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('../web/assets/css/font-awesome.min.css')}}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{asset('../web/assets/css/main.css')}}\" rel=\"stylesheet\">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
</head>


{% endblock %}
</head>

<body>

<!-- Fixed navbar -->

<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <img src=\"{{ asset('../web/assets/img/logo.png') }}\" align=\"left\"   style=\"float:top;margin:0 0px 0 0px;\"  height=\"70px\" width=\"135px\" >

    <div class=\"container\">

        <div class=\"navbar-header\">

            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>

            <a class=\"navbar-brand\" href=\"#\">StageSearch SEGMI</a>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">

                <li class=\"active\"><a href=\"{{ path('ss_platform_home') }}\">Accueil</a></li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Offres <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ path('ss_platform_offres') }}\">Nos offres</a></li>
                        <li><a href=\"{{ path('ss_platform_addOffre') }}\">Ajouter une offre </a></li>

                    </ul>
                </li>


                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Entreprises <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"sidebar-left.html\">Nos entreprises</a></li>
                        <li><a href=\"{{ path('ss_platform_addEntreprise') }}\">Ajouter une entreprise</a></li>
                    </ul>
                </li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Espace Membre <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"sidebar-left.html\">Cours L1</a></li>
                        <li><a href=\"sidebar-left.html\">Cours L2</a></li>
                        <li><a href=\"sidebar-left.html\">Cours L3</a></li>
                        <li><a href=\"sidebar-right.html\">Cours Masters</a></li>
                    </ul>
                </li>



                <li class=\"dropdown\">

                    <a href=\"{{ path('logout') }}\" class=\"dropdown-toggle\" > Sign Out <b class=\"\"></b></a>



            </ul></li>
        </div><!--/.nav-collapse -->
    </div>
</div>


<div id=\"headerwrap\">
    <div class=\"container\">
        <div class=\"row centered\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <h1>La plateforme faite par les <b>étudiants</b></h1>
                <h2>pour les <b>étudiants</b></h2>
            </div>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- headerwrap -->



{% block body %}
{% endblock %}
<!-- FOOTER -->
<div id=\"f\">
    <div class=\"container\">
        <div class=\"row centered\">
            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a><a href=\"#\"><i class=\"fa fa-facebook\"></i></a><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>

        </div><!-- row -->
    </div><!-- container -->
</div><!-- Footer -->


<!-- MODAL FOR CONTACT -->
<!-- Modal -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">contact us</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row centered\">
                    <p>We are available 24/7, so don't hesitate to contact us.</p>
                    <p>
                        Somestreet Ave, 987<br/>
                        London, UK.<br/>
                        +44 8948-4343<br/>
                        hi@blacktie.co
                    </p>
                    <div id=\"mapwrap\">
                        <iframe height=\"300\" width=\"100%\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.es/maps?t=m&amp;ie=UTF8&amp;ll=52.752693,22.791016&amp;spn=67.34552,156.972656&amp;z=2&amp;output=embed\"></iframe>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Save & Go</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


{% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
{% endblock %}

</body>
</html>", "::layout.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\app\\Resources\\views\\layout.html.twig");
    }
}
