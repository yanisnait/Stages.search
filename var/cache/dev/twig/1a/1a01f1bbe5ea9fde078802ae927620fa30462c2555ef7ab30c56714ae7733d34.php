<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b261a9201ebfe2dacac9f9271661ccb113c720cd624070e052d2710b963d88d2 extends Twig_Template
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
        $__internal_38b58a691ee2cd3fb7f7988ce5111df79781e2acc7680283f56057a6b92d2cfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b58a691ee2cd3fb7f7988ce5111df79781e2acc7680283f56057a6b92d2cfe->enter($__internal_38b58a691ee2cd3fb7f7988ce5111df79781e2acc7680283f56057a6b92d2cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_2b86dcd81f89fc719d0ebe959d1817946df2783491ede61c3169282ba996421d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b86dcd81f89fc719d0ebe959d1817946df2783491ede61c3169282ba996421d->enter($__internal_2b86dcd81f89fc719d0ebe959d1817946df2783491ede61c3169282ba996421d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_38b58a691ee2cd3fb7f7988ce5111df79781e2acc7680283f56057a6b92d2cfe->leave($__internal_38b58a691ee2cd3fb7f7988ce5111df79781e2acc7680283f56057a6b92d2cfe_prof);

        
        $__internal_2b86dcd81f89fc719d0ebe959d1817946df2783491ede61c3169282ba996421d->leave($__internal_2b86dcd81f89fc719d0ebe959d1817946df2783491ede61c3169282ba996421d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
