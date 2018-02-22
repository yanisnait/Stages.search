<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ee45297d5cceec95d2e378e903d87fe6584ef699c3c06ffd6303fd928623978f extends Twig_Template
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
        $__internal_7005546ea71be5347d940973d208f5785346967e2a36bbe8781656d1c4a3e7b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7005546ea71be5347d940973d208f5785346967e2a36bbe8781656d1c4a3e7b6->enter($__internal_7005546ea71be5347d940973d208f5785346967e2a36bbe8781656d1c4a3e7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_04938ab0627c51735f104cdb5be7b3fdb43381b9436c62c527219d483242b8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04938ab0627c51735f104cdb5be7b3fdb43381b9436c62c527219d483242b8e8->enter($__internal_04938ab0627c51735f104cdb5be7b3fdb43381b9436c62c527219d483242b8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_7005546ea71be5347d940973d208f5785346967e2a36bbe8781656d1c4a3e7b6->leave($__internal_7005546ea71be5347d940973d208f5785346967e2a36bbe8781656d1c4a3e7b6_prof);

        
        $__internal_04938ab0627c51735f104cdb5be7b3fdb43381b9436c62c527219d483242b8e8->leave($__internal_04938ab0627c51735f104cdb5be7b3fdb43381b9436c62c527219d483242b8e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
