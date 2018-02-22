<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_45f43745b4d6cc19081c88ce1bc7fc515885fd5fdcb88155f30ad9c2595016b4 extends Twig_Template
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
        $__internal_5cc80af7de1a039cdcb2f020a87ce4b5c8838484199f2e7d2478c63f264ab6da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc80af7de1a039cdcb2f020a87ce4b5c8838484199f2e7d2478c63f264ab6da->enter($__internal_5cc80af7de1a039cdcb2f020a87ce4b5c8838484199f2e7d2478c63f264ab6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_ca84b6ebfc90a9cb7510f9d1f7684716f89fb29852de603db8c8b10fb5ba45d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca84b6ebfc90a9cb7510f9d1f7684716f89fb29852de603db8c8b10fb5ba45d4->enter($__internal_ca84b6ebfc90a9cb7510f9d1f7684716f89fb29852de603db8c8b10fb5ba45d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5cc80af7de1a039cdcb2f020a87ce4b5c8838484199f2e7d2478c63f264ab6da->leave($__internal_5cc80af7de1a039cdcb2f020a87ce4b5c8838484199f2e7d2478c63f264ab6da_prof);

        
        $__internal_ca84b6ebfc90a9cb7510f9d1f7684716f89fb29852de603db8c8b10fb5ba45d4->leave($__internal_ca84b6ebfc90a9cb7510f9d1f7684716f89fb29852de603db8c8b10fb5ba45d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
