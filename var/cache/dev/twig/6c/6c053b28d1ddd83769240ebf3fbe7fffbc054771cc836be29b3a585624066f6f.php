<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c8f1075c8a31a5a4baf5570027d984a4d29995a5eb13626faf0cff392636e92e extends Twig_Template
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
        $__internal_55d18c545f4bafad910366c5256935762702bc99c2ccc9bad136d18befa3ad43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d18c545f4bafad910366c5256935762702bc99c2ccc9bad136d18befa3ad43->enter($__internal_55d18c545f4bafad910366c5256935762702bc99c2ccc9bad136d18befa3ad43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_98410f47f07777d303a4bbf326238805e971d1a337d066652b53e4121ded14dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98410f47f07777d303a4bbf326238805e971d1a337d066652b53e4121ded14dc->enter($__internal_98410f47f07777d303a4bbf326238805e971d1a337d066652b53e4121ded14dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_55d18c545f4bafad910366c5256935762702bc99c2ccc9bad136d18befa3ad43->leave($__internal_55d18c545f4bafad910366c5256935762702bc99c2ccc9bad136d18befa3ad43_prof);

        
        $__internal_98410f47f07777d303a4bbf326238805e971d1a337d066652b53e4121ded14dc->leave($__internal_98410f47f07777d303a4bbf326238805e971d1a337d066652b53e4121ded14dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
