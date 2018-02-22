<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_488f548c20b4cb8e642f6b8be395fa7f78f1015cd42146453ee8944849d3444f extends Twig_Template
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
        $__internal_9927ffabae439f59d469da3099b385fcfbaba14c6c6d1d3c821317428094d2aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9927ffabae439f59d469da3099b385fcfbaba14c6c6d1d3c821317428094d2aa->enter($__internal_9927ffabae439f59d469da3099b385fcfbaba14c6c6d1d3c821317428094d2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_9d735b0342b46853e129c0576585306651af01e716d98446a6b7cf7f57f8cbf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d735b0342b46853e129c0576585306651af01e716d98446a6b7cf7f57f8cbf9->enter($__internal_9d735b0342b46853e129c0576585306651af01e716d98446a6b7cf7f57f8cbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9927ffabae439f59d469da3099b385fcfbaba14c6c6d1d3c821317428094d2aa->leave($__internal_9927ffabae439f59d469da3099b385fcfbaba14c6c6d1d3c821317428094d2aa_prof);

        
        $__internal_9d735b0342b46853e129c0576585306651af01e716d98446a6b7cf7f57f8cbf9->leave($__internal_9d735b0342b46853e129c0576585306651af01e716d98446a6b7cf7f57f8cbf9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
