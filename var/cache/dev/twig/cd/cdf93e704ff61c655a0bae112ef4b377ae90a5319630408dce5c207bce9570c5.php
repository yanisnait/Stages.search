<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_63f084be9fc6551bbd93691142c3f96be9cb65097fcb535a7675e70409a473ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_708891642bb325fc433c77fe35241dae022c4a5c7c22d21e02f0c8dbcfa19b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708891642bb325fc433c77fe35241dae022c4a5c7c22d21e02f0c8dbcfa19b7b->enter($__internal_708891642bb325fc433c77fe35241dae022c4a5c7c22d21e02f0c8dbcfa19b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_a41e4357734fcede32380ce291402e19b575293e337c26d3e8a0caea49138f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41e4357734fcede32380ce291402e19b575293e337c26d3e8a0caea49138f4b->enter($__internal_a41e4357734fcede32380ce291402e19b575293e337c26d3e8a0caea49138f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_708891642bb325fc433c77fe35241dae022c4a5c7c22d21e02f0c8dbcfa19b7b->leave($__internal_708891642bb325fc433c77fe35241dae022c4a5c7c22d21e02f0c8dbcfa19b7b_prof);

        
        $__internal_a41e4357734fcede32380ce291402e19b575293e337c26d3e8a0caea49138f4b->leave($__internal_a41e4357734fcede32380ce291402e19b575293e337c26d3e8a0caea49138f4b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_11671c635509352d319d88257a5a77575dbf91a3d93857eec06317a3131b33c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11671c635509352d319d88257a5a77575dbf91a3d93857eec06317a3131b33c3->enter($__internal_11671c635509352d319d88257a5a77575dbf91a3d93857eec06317a3131b33c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_899e043808fc9ea7735f5fb94e4fb04b7c7958a7fbe67bcb72f1134dd2587d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_899e043808fc9ea7735f5fb94e4fb04b7c7958a7fbe67bcb72f1134dd2587d2f->enter($__internal_899e043808fc9ea7735f5fb94e4fb04b7c7958a7fbe67bcb72f1134dd2587d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_899e043808fc9ea7735f5fb94e4fb04b7c7958a7fbe67bcb72f1134dd2587d2f->leave($__internal_899e043808fc9ea7735f5fb94e4fb04b7c7958a7fbe67bcb72f1134dd2587d2f_prof);

        
        $__internal_11671c635509352d319d88257a5a77575dbf91a3d93857eec06317a3131b33c3->leave($__internal_11671c635509352d319d88257a5a77575dbf91a3d93857eec06317a3131b33c3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_895c8f39cfc308aebcb1a98b229c2ab856134df9edbae37a6d6213215ce07828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_895c8f39cfc308aebcb1a98b229c2ab856134df9edbae37a6d6213215ce07828->enter($__internal_895c8f39cfc308aebcb1a98b229c2ab856134df9edbae37a6d6213215ce07828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cf5f209453530315e8996b715f17e7d98b57b01c9b25c450c0ac2d5dae591fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5f209453530315e8996b715f17e7d98b57b01c9b25c450c0ac2d5dae591fb7->enter($__internal_cf5f209453530315e8996b715f17e7d98b57b01c9b25c450c0ac2d5dae591fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_cf5f209453530315e8996b715f17e7d98b57b01c9b25c450c0ac2d5dae591fb7->leave($__internal_cf5f209453530315e8996b715f17e7d98b57b01c9b25c450c0ac2d5dae591fb7_prof);

        
        $__internal_895c8f39cfc308aebcb1a98b229c2ab856134df9edbae37a6d6213215ce07828->leave($__internal_895c8f39cfc308aebcb1a98b229c2ab856134df9edbae37a6d6213215ce07828_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f36741ffb10db052d0abec11d7927a298cb0719d1a4e512d687f66516e8071f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f36741ffb10db052d0abec11d7927a298cb0719d1a4e512d687f66516e8071f1->enter($__internal_f36741ffb10db052d0abec11d7927a298cb0719d1a4e512d687f66516e8071f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_729753c1a7a9a165a2c2fb1e6e90aa63824f627708e4435bf71cc40d0744ad42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729753c1a7a9a165a2c2fb1e6e90aa63824f627708e4435bf71cc40d0744ad42->enter($__internal_729753c1a7a9a165a2c2fb1e6e90aa63824f627708e4435bf71cc40d0744ad42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_729753c1a7a9a165a2c2fb1e6e90aa63824f627708e4435bf71cc40d0744ad42->leave($__internal_729753c1a7a9a165a2c2fb1e6e90aa63824f627708e4435bf71cc40d0744ad42_prof);

        
        $__internal_f36741ffb10db052d0abec11d7927a298cb0719d1a4e512d687f66516e8071f1->leave($__internal_f36741ffb10db052d0abec11d7927a298cb0719d1a4e512d687f66516e8071f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
