<?php

/* ::base.html.twig */
class __TwigTemplate_f672f545f365e30e8339d25287484e44ecbce2e996602d7807408fa60fa8952a extends Twig_Template
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
        $__internal_6500e1e23b4962ca4cf5c7ff588f5d5eb1931dafc7a753dc2c27441c68061ba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6500e1e23b4962ca4cf5c7ff588f5d5eb1931dafc7a753dc2c27441c68061ba3->enter($__internal_6500e1e23b4962ca4cf5c7ff588f5d5eb1931dafc7a753dc2c27441c68061ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_8dcc2d076e2f686cd0236a49fe103fecc0f51c4628208cb91dd5739b26c6a33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dcc2d076e2f686cd0236a49fe103fecc0f51c4628208cb91dd5739b26c6a33a->enter($__internal_8dcc2d076e2f686cd0236a49fe103fecc0f51c4628208cb91dd5739b26c6a33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6500e1e23b4962ca4cf5c7ff588f5d5eb1931dafc7a753dc2c27441c68061ba3->leave($__internal_6500e1e23b4962ca4cf5c7ff588f5d5eb1931dafc7a753dc2c27441c68061ba3_prof);

        
        $__internal_8dcc2d076e2f686cd0236a49fe103fecc0f51c4628208cb91dd5739b26c6a33a->leave($__internal_8dcc2d076e2f686cd0236a49fe103fecc0f51c4628208cb91dd5739b26c6a33a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf88730747dbbc1a4aa6e0acbf15b6f076be08119e794d239ddf8c75f27f0255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf88730747dbbc1a4aa6e0acbf15b6f076be08119e794d239ddf8c75f27f0255->enter($__internal_bf88730747dbbc1a4aa6e0acbf15b6f076be08119e794d239ddf8c75f27f0255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_18e38d5433f7133cac521971557f1a72a5d24f7c81f3f952d360d63f8bdbfee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e38d5433f7133cac521971557f1a72a5d24f7c81f3f952d360d63f8bdbfee1->enter($__internal_18e38d5433f7133cac521971557f1a72a5d24f7c81f3f952d360d63f8bdbfee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_18e38d5433f7133cac521971557f1a72a5d24f7c81f3f952d360d63f8bdbfee1->leave($__internal_18e38d5433f7133cac521971557f1a72a5d24f7c81f3f952d360d63f8bdbfee1_prof);

        
        $__internal_bf88730747dbbc1a4aa6e0acbf15b6f076be08119e794d239ddf8c75f27f0255->leave($__internal_bf88730747dbbc1a4aa6e0acbf15b6f076be08119e794d239ddf8c75f27f0255_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f857193077d23912e9055f24c1d307438a68a9c6643cbff9b3d4204e5d1a5adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f857193077d23912e9055f24c1d307438a68a9c6643cbff9b3d4204e5d1a5adc->enter($__internal_f857193077d23912e9055f24c1d307438a68a9c6643cbff9b3d4204e5d1a5adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a4f0218e58f9b1110423a233811ead24f47a59dde63793da227221b09e74914d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f0218e58f9b1110423a233811ead24f47a59dde63793da227221b09e74914d->enter($__internal_a4f0218e58f9b1110423a233811ead24f47a59dde63793da227221b09e74914d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a4f0218e58f9b1110423a233811ead24f47a59dde63793da227221b09e74914d->leave($__internal_a4f0218e58f9b1110423a233811ead24f47a59dde63793da227221b09e74914d_prof);

        
        $__internal_f857193077d23912e9055f24c1d307438a68a9c6643cbff9b3d4204e5d1a5adc->leave($__internal_f857193077d23912e9055f24c1d307438a68a9c6643cbff9b3d4204e5d1a5adc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_817cb6ecf8c3703f089248d755f5678acf639a73f77a4d96e079bd766615a4cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_817cb6ecf8c3703f089248d755f5678acf639a73f77a4d96e079bd766615a4cb->enter($__internal_817cb6ecf8c3703f089248d755f5678acf639a73f77a4d96e079bd766615a4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e693a55ae3e4124f92fe18bb6604404e824c9bd2a30d4bd20b6865698f5aba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e693a55ae3e4124f92fe18bb6604404e824c9bd2a30d4bd20b6865698f5aba0->enter($__internal_2e693a55ae3e4124f92fe18bb6604404e824c9bd2a30d4bd20b6865698f5aba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2e693a55ae3e4124f92fe18bb6604404e824c9bd2a30d4bd20b6865698f5aba0->leave($__internal_2e693a55ae3e4124f92fe18bb6604404e824c9bd2a30d4bd20b6865698f5aba0_prof);

        
        $__internal_817cb6ecf8c3703f089248d755f5678acf639a73f77a4d96e079bd766615a4cb->leave($__internal_817cb6ecf8c3703f089248d755f5678acf639a73f77a4d96e079bd766615a4cb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cc076277caef5da9bada3d95594c9652b291f1ef5e68697b2912b79552889ebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc076277caef5da9bada3d95594c9652b291f1ef5e68697b2912b79552889ebb->enter($__internal_cc076277caef5da9bada3d95594c9652b291f1ef5e68697b2912b79552889ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b0267971295e9fbc032ba048e341293a30eb1c53f2afff9fec3e0c9290577cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0267971295e9fbc032ba048e341293a30eb1c53f2afff9fec3e0c9290577cc3->enter($__internal_b0267971295e9fbc032ba048e341293a30eb1c53f2afff9fec3e0c9290577cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b0267971295e9fbc032ba048e341293a30eb1c53f2afff9fec3e0c9290577cc3->leave($__internal_b0267971295e9fbc032ba048e341293a30eb1c53f2afff9fec3e0c9290577cc3_prof);

        
        $__internal_cc076277caef5da9bada3d95594c9652b291f1ef5e68697b2912b79552889ebb->leave($__internal_cc076277caef5da9bada3d95594c9652b291f1ef5e68697b2912b79552889ebb_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\app/Resources\\views/base.html.twig");
    }
}
