<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_9a0b317bb2a93993fe72884013776b7c030d7b9931cb64ab864660ff4f421156 extends Twig_Template
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
        $__internal_faa61f3f4de6e5d1dcfa5c1e06e30008ee759ab4e21aaa188eef150eb826c276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa61f3f4de6e5d1dcfa5c1e06e30008ee759ab4e21aaa188eef150eb826c276->enter($__internal_faa61f3f4de6e5d1dcfa5c1e06e30008ee759ab4e21aaa188eef150eb826c276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_aa8c1a0d7c7f9812634f5cf0b4decd8786e049fa3846029ef42dbae527a9d25e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8c1a0d7c7f9812634f5cf0b4decd8786e049fa3846029ef42dbae527a9d25e->enter($__internal_aa8c1a0d7c7f9812634f5cf0b4decd8786e049fa3846029ef42dbae527a9d25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_faa61f3f4de6e5d1dcfa5c1e06e30008ee759ab4e21aaa188eef150eb826c276->leave($__internal_faa61f3f4de6e5d1dcfa5c1e06e30008ee759ab4e21aaa188eef150eb826c276_prof);

        
        $__internal_aa8c1a0d7c7f9812634f5cf0b4decd8786e049fa3846029ef42dbae527a9d25e->leave($__internal_aa8c1a0d7c7f9812634f5cf0b4decd8786e049fa3846029ef42dbae527a9d25e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_label.html.php");
    }
}
