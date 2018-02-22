<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_630d441400dfe62fa8ba40cfbd346b0f1aabe5e1592f369f1fa255ea77cd0db9 extends Twig_Template
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
        $__internal_5f51ad47446014a2fbef4e7acfe1cb479f0c7dcbdfe34d0f9d4e871d14706aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f51ad47446014a2fbef4e7acfe1cb479f0c7dcbdfe34d0f9d4e871d14706aaa->enter($__internal_5f51ad47446014a2fbef4e7acfe1cb479f0c7dcbdfe34d0f9d4e871d14706aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_05bddf1e4650d0c1703bc0ffdd541b3b4ac1059fc92a1042e0e5ce66cfa55f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05bddf1e4650d0c1703bc0ffdd541b3b4ac1059fc92a1042e0e5ce66cfa55f40->enter($__internal_05bddf1e4650d0c1703bc0ffdd541b3b4ac1059fc92a1042e0e5ce66cfa55f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5f51ad47446014a2fbef4e7acfe1cb479f0c7dcbdfe34d0f9d4e871d14706aaa->leave($__internal_5f51ad47446014a2fbef4e7acfe1cb479f0c7dcbdfe34d0f9d4e871d14706aaa_prof);

        
        $__internal_05bddf1e4650d0c1703bc0ffdd541b3b4ac1059fc92a1042e0e5ce66cfa55f40->leave($__internal_05bddf1e4650d0c1703bc0ffdd541b3b4ac1059fc92a1042e0e5ce66cfa55f40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
