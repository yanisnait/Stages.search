<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1eb101aebe138b6a770503ce36e4e5224308fcee0f2637a594f4ee0ca0f227fc extends Twig_Template
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
        $__internal_07004f70c9a26d41419fafaef53b89c604a9cef6c945fac0cf29e0f69a5688ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07004f70c9a26d41419fafaef53b89c604a9cef6c945fac0cf29e0f69a5688ff->enter($__internal_07004f70c9a26d41419fafaef53b89c604a9cef6c945fac0cf29e0f69a5688ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_1f9a0f0f0e04b6129c662d0b13983909ad23caa175fbc137ff9996c2e7ac16ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9a0f0f0e04b6129c662d0b13983909ad23caa175fbc137ff9996c2e7ac16ed->enter($__internal_1f9a0f0f0e04b6129c662d0b13983909ad23caa175fbc137ff9996c2e7ac16ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_07004f70c9a26d41419fafaef53b89c604a9cef6c945fac0cf29e0f69a5688ff->leave($__internal_07004f70c9a26d41419fafaef53b89c604a9cef6c945fac0cf29e0f69a5688ff_prof);

        
        $__internal_1f9a0f0f0e04b6129c662d0b13983909ad23caa175fbc137ff9996c2e7ac16ed->leave($__internal_1f9a0f0f0e04b6129c662d0b13983909ad23caa175fbc137ff9996c2e7ac16ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
