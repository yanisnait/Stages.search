<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e0559722337da7b2b98f5622b66bbe76060f7dbc5eb23baaf5b166face599949 extends Twig_Template
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
        $__internal_7f54fe6bd981d4be7a38945a6363b2771b7589f43b032281525cffab7e15f6bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f54fe6bd981d4be7a38945a6363b2771b7589f43b032281525cffab7e15f6bb->enter($__internal_7f54fe6bd981d4be7a38945a6363b2771b7589f43b032281525cffab7e15f6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_6952dd25f306782a33f5f90b42b350ad12a9680116c2183747364f4c2af95057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6952dd25f306782a33f5f90b42b350ad12a9680116c2183747364f4c2af95057->enter($__internal_6952dd25f306782a33f5f90b42b350ad12a9680116c2183747364f4c2af95057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7f54fe6bd981d4be7a38945a6363b2771b7589f43b032281525cffab7e15f6bb->leave($__internal_7f54fe6bd981d4be7a38945a6363b2771b7589f43b032281525cffab7e15f6bb_prof);

        
        $__internal_6952dd25f306782a33f5f90b42b350ad12a9680116c2183747364f4c2af95057->leave($__internal_6952dd25f306782a33f5f90b42b350ad12a9680116c2183747364f4c2af95057_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
