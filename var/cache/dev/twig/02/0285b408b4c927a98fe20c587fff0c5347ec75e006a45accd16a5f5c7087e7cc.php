<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6229a00beed9409652d041e817b4349db90d8dea76b6fe8fa7e7691ac821fdc8 extends Twig_Template
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
        $__internal_4204a9e8d385e87cf38320846d9156337b89a047824459919e94b0a7fdae3af2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4204a9e8d385e87cf38320846d9156337b89a047824459919e94b0a7fdae3af2->enter($__internal_4204a9e8d385e87cf38320846d9156337b89a047824459919e94b0a7fdae3af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_faa89172065279d828608bf9b5854277283a72b36ee590e66df8345976a5edec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa89172065279d828608bf9b5854277283a72b36ee590e66df8345976a5edec->enter($__internal_faa89172065279d828608bf9b5854277283a72b36ee590e66df8345976a5edec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4204a9e8d385e87cf38320846d9156337b89a047824459919e94b0a7fdae3af2->leave($__internal_4204a9e8d385e87cf38320846d9156337b89a047824459919e94b0a7fdae3af2_prof);

        
        $__internal_faa89172065279d828608bf9b5854277283a72b36ee590e66df8345976a5edec->leave($__internal_faa89172065279d828608bf9b5854277283a72b36ee590e66df8345976a5edec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
