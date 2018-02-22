<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_e6dcf7dcbd4b5d2d85eb23c62f0cafe3799a0afc40fc947b90223c7e6f60e2dd extends Twig_Template
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
        $__internal_e6992566598124ed3b5919e7d53069fb7b9cda55d4dba2a5746e7432dc448e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6992566598124ed3b5919e7d53069fb7b9cda55d4dba2a5746e7432dc448e66->enter($__internal_e6992566598124ed3b5919e7d53069fb7b9cda55d4dba2a5746e7432dc448e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_5e233397999c5b84a4f34383f0501fa4400e4cc83355fe6d2571ca6314256f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e233397999c5b84a4f34383f0501fa4400e4cc83355fe6d2571ca6314256f62->enter($__internal_5e233397999c5b84a4f34383f0501fa4400e4cc83355fe6d2571ca6314256f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_e6992566598124ed3b5919e7d53069fb7b9cda55d4dba2a5746e7432dc448e66->leave($__internal_e6992566598124ed3b5919e7d53069fb7b9cda55d4dba2a5746e7432dc448e66_prof);

        
        $__internal_5e233397999c5b84a4f34383f0501fa4400e4cc83355fe6d2571ca6314256f62->leave($__internal_5e233397999c5b84a4f34383f0501fa4400e4cc83355fe6d2571ca6314256f62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
