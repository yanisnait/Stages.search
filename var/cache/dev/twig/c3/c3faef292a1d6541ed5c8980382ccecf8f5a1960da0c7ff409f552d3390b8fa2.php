<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_810c9d64191fd4d6cca42f6674298707fc79a43978e68cc1bd696338b8e35e95 extends Twig_Template
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
        $__internal_ca35f99976d349cf052e43bf41f9be47a1083745c100021c1de091ad351c9181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca35f99976d349cf052e43bf41f9be47a1083745c100021c1de091ad351c9181->enter($__internal_ca35f99976d349cf052e43bf41f9be47a1083745c100021c1de091ad351c9181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_da586b103887b32e9567a8f5f57524301a72dccc4c424656e312fd3defbbabef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da586b103887b32e9567a8f5f57524301a72dccc4c424656e312fd3defbbabef->enter($__internal_da586b103887b32e9567a8f5f57524301a72dccc4c424656e312fd3defbbabef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ca35f99976d349cf052e43bf41f9be47a1083745c100021c1de091ad351c9181->leave($__internal_ca35f99976d349cf052e43bf41f9be47a1083745c100021c1de091ad351c9181_prof);

        
        $__internal_da586b103887b32e9567a8f5f57524301a72dccc4c424656e312fd3defbbabef->leave($__internal_da586b103887b32e9567a8f5f57524301a72dccc4c424656e312fd3defbbabef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
