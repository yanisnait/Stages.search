<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_2e6b21cd12fb6a5eaaff9e010f2e2ebc81cb73f24b09f290c046096061204c98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ccb0c34d16b338930c0a8aa0d5ed5ef41a5c0ce87e7767765ba70fc67bac3d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ccb0c34d16b338930c0a8aa0d5ed5ef41a5c0ce87e7767765ba70fc67bac3d6->enter($__internal_7ccb0c34d16b338930c0a8aa0d5ed5ef41a5c0ce87e7767765ba70fc67bac3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_e6117bb49ab7bc4a47f64cdbf99a70d825136b5370feef418af0d458f6e30625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6117bb49ab7bc4a47f64cdbf99a70d825136b5370feef418af0d458f6e30625->enter($__internal_e6117bb49ab7bc4a47f64cdbf99a70d825136b5370feef418af0d458f6e30625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7ccb0c34d16b338930c0a8aa0d5ed5ef41a5c0ce87e7767765ba70fc67bac3d6->leave($__internal_7ccb0c34d16b338930c0a8aa0d5ed5ef41a5c0ce87e7767765ba70fc67bac3d6_prof);

        
        $__internal_e6117bb49ab7bc4a47f64cdbf99a70d825136b5370feef418af0d458f6e30625->leave($__internal_e6117bb49ab7bc4a47f64cdbf99a70d825136b5370feef418af0d458f6e30625_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
