<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_479b05edb2c3df36f95639279314cb098974933a514ba3927ca5de3bf95af8e4 extends Twig_Template
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
        $__internal_011e48b9c075318b53c9ae5644d253b3061c102e02d32c6aec11187310bd08c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_011e48b9c075318b53c9ae5644d253b3061c102e02d32c6aec11187310bd08c6->enter($__internal_011e48b9c075318b53c9ae5644d253b3061c102e02d32c6aec11187310bd08c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_d7f0730add2b478ed2f86b19099a139814c93345d49e3c5c2d652dfca387b521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f0730add2b478ed2f86b19099a139814c93345d49e3c5c2d652dfca387b521->enter($__internal_d7f0730add2b478ed2f86b19099a139814c93345d49e3c5c2d652dfca387b521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_011e48b9c075318b53c9ae5644d253b3061c102e02d32c6aec11187310bd08c6->leave($__internal_011e48b9c075318b53c9ae5644d253b3061c102e02d32c6aec11187310bd08c6_prof);

        
        $__internal_d7f0730add2b478ed2f86b19099a139814c93345d49e3c5c2d652dfca387b521->leave($__internal_d7f0730add2b478ed2f86b19099a139814c93345d49e3c5c2d652dfca387b521_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
