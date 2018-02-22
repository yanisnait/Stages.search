<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_143191da8e92caf6105d0ca448f74475d137371472feb69aa64bcae2318d4813 extends Twig_Template
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
        $__internal_f8d77954ba8f3d2c7a23edcd6a48f672f37f87c1c820a9bf14ef282e7d96f08f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8d77954ba8f3d2c7a23edcd6a48f672f37f87c1c820a9bf14ef282e7d96f08f->enter($__internal_f8d77954ba8f3d2c7a23edcd6a48f672f37f87c1c820a9bf14ef282e7d96f08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_2c0079d701a1003b382947eafd4fa7880dd22876d45c4b9dd12f11d1360216f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0079d701a1003b382947eafd4fa7880dd22876d45c4b9dd12f11d1360216f7->enter($__internal_2c0079d701a1003b382947eafd4fa7880dd22876d45c4b9dd12f11d1360216f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_f8d77954ba8f3d2c7a23edcd6a48f672f37f87c1c820a9bf14ef282e7d96f08f->leave($__internal_f8d77954ba8f3d2c7a23edcd6a48f672f37f87c1c820a9bf14ef282e7d96f08f_prof);

        
        $__internal_2c0079d701a1003b382947eafd4fa7880dd22876d45c4b9dd12f11d1360216f7->leave($__internal_2c0079d701a1003b382947eafd4fa7880dd22876d45c4b9dd12f11d1360216f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
