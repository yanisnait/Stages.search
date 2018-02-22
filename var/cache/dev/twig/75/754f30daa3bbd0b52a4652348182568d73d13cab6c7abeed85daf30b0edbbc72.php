<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_76a7be76af0f17a50490faae26083ecb56e9a36a76042bebdb1379769a347de7 extends Twig_Template
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
        $__internal_4d5866de874e37b977320de864437d222c047eb42641f40636d7cb7617e1df39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d5866de874e37b977320de864437d222c047eb42641f40636d7cb7617e1df39->enter($__internal_4d5866de874e37b977320de864437d222c047eb42641f40636d7cb7617e1df39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_247642258bbf258a56168d42adf9f776d5deda19c3aecb9427fbd6840804f72e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_247642258bbf258a56168d42adf9f776d5deda19c3aecb9427fbd6840804f72e->enter($__internal_247642258bbf258a56168d42adf9f776d5deda19c3aecb9427fbd6840804f72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4d5866de874e37b977320de864437d222c047eb42641f40636d7cb7617e1df39->leave($__internal_4d5866de874e37b977320de864437d222c047eb42641f40636d7cb7617e1df39_prof);

        
        $__internal_247642258bbf258a56168d42adf9f776d5deda19c3aecb9427fbd6840804f72e->leave($__internal_247642258bbf258a56168d42adf9f776d5deda19c3aecb9427fbd6840804f72e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
