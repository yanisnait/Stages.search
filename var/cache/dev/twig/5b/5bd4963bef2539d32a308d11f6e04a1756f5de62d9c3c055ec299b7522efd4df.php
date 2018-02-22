<?php

/* @SSPlatform/layout.html.twig */
class __TwigTemplate_d14bddbcb901555d6fd66a6a9d2af19cf748d4601530c1b484c63ecc9d355350 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "@SSPlatform/layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ssplatform_body' => array($this, 'block_ssplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02487ad0bbbb5b7faa72521da8419c824477f73e9de0218ff6fd3c61ba1ec784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02487ad0bbbb5b7faa72521da8419c824477f73e9de0218ff6fd3c61ba1ec784->enter($__internal_02487ad0bbbb5b7faa72521da8419c824477f73e9de0218ff6fd3c61ba1ec784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SSPlatform/layout.html.twig"));

        $__internal_bd0097e482d70bf3f5bf40257dc2663e90f2a123342529fedbaa3d2b202042ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0097e482d70bf3f5bf40257dc2663e90f2a123342529fedbaa3d2b202042ff->enter($__internal_bd0097e482d70bf3f5bf40257dc2663e90f2a123342529fedbaa3d2b202042ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SSPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02487ad0bbbb5b7faa72521da8419c824477f73e9de0218ff6fd3c61ba1ec784->leave($__internal_02487ad0bbbb5b7faa72521da8419c824477f73e9de0218ff6fd3c61ba1ec784_prof);

        
        $__internal_bd0097e482d70bf3f5bf40257dc2663e90f2a123342529fedbaa3d2b202042ff->leave($__internal_bd0097e482d70bf3f5bf40257dc2663e90f2a123342529fedbaa3d2b202042ff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d21cbee434513baf6d96699851a45b1fb0ae7928288075342d09b63043fbe22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d21cbee434513baf6d96699851a45b1fb0ae7928288075342d09b63043fbe22->enter($__internal_2d21cbee434513baf6d96699851a45b1fb0ae7928288075342d09b63043fbe22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3732d49304ec37a00e2fa300958fb2c83c27184ba9e1b33cd97a26e98331b759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3732d49304ec37a00e2fa300958fb2c83c27184ba9e1b33cd97a26e98331b759->enter($__internal_3732d49304ec37a00e2fa300958fb2c83c27184ba9e1b33cd97a26e98331b759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3732d49304ec37a00e2fa300958fb2c83c27184ba9e1b33cd97a26e98331b759->leave($__internal_3732d49304ec37a00e2fa300958fb2c83c27184ba9e1b33cd97a26e98331b759_prof);

        
        $__internal_2d21cbee434513baf6d96699851a45b1fb0ae7928288075342d09b63043fbe22->leave($__internal_2d21cbee434513baf6d96699851a45b1fb0ae7928288075342d09b63043fbe22_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e26316cca760196db8436e404f1bfded840a604fe203ddd755e0871ca0d6317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e26316cca760196db8436e404f1bfded840a604fe203ddd755e0871ca0d6317->enter($__internal_7e26316cca760196db8436e404f1bfded840a604fe203ddd755e0871ca0d6317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a926088facfb3cab757ae754f90a91812f24583fcd4cf3655c5ce8b06c6b2814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a926088facfb3cab757ae754f90a91812f24583fcd4cf3655c5ce8b06c6b2814->enter($__internal_a926088facfb3cab757ae754f90a91812f24583fcd4cf3655c5ce8b06c6b2814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    <h1>Annonces</h1>

    <hr>

    ";
        // line 17
        echo "    ";
        $this->displayBlock('ssplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_a926088facfb3cab757ae754f90a91812f24583fcd4cf3655c5ce8b06c6b2814->leave($__internal_a926088facfb3cab757ae754f90a91812f24583fcd4cf3655c5ce8b06c6b2814_prof);

        
        $__internal_7e26316cca760196db8436e404f1bfded840a604fe203ddd755e0871ca0d6317->leave($__internal_7e26316cca760196db8436e404f1bfded840a604fe203ddd755e0871ca0d6317_prof);

    }

    // line 17
    public function block_ssplatform_body($context, array $blocks = array())
    {
        $__internal_2baa918f7412f4ffef17bef9f9dcfacb2685bfb7fc6da3a785377b1c23c8c2c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2baa918f7412f4ffef17bef9f9dcfacb2685bfb7fc6da3a785377b1c23c8c2c8->enter($__internal_2baa918f7412f4ffef17bef9f9dcfacb2685bfb7fc6da3a785377b1c23c8c2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        $__internal_b9dd0e41dea4d8b9974f00868d3c50722af40eb9e568028d6a0b3f86029dada3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9dd0e41dea4d8b9974f00868d3c50722af40eb9e568028d6a0b3f86029dada3->enter($__internal_b9dd0e41dea4d8b9974f00868d3c50722af40eb9e568028d6a0b3f86029dada3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ssplatform_body"));

        // line 18
        echo "    ";
        
        $__internal_b9dd0e41dea4d8b9974f00868d3c50722af40eb9e568028d6a0b3f86029dada3->leave($__internal_b9dd0e41dea4d8b9974f00868d3c50722af40eb9e568028d6a0b3f86029dada3_prof);

        
        $__internal_2baa918f7412f4ffef17bef9f9dcfacb2685bfb7fc6da3a785377b1c23c8c2c8->leave($__internal_2baa918f7412f4ffef17bef9f9dcfacb2685bfb7fc6da3a785377b1c23c8c2c8_prof);

    }

    public function getTemplateName()
    {
        return "@SSPlatform/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  96 => 17,  85 => 19,  82 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SS/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
    Annonces - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
    <h1>Annonces</h1>

    <hr>

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    {% block ssplatform_body %}
    {% endblock %}

{% endblock %}", "@SSPlatform/layout.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\layout.html.twig");
    }
}
