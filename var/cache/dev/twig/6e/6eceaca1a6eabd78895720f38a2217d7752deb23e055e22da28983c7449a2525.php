<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_09273100dae166d3ed02cd4489d89e0c9a3b13ee5feb28c8a00a8c12f149e96b extends Twig_Template
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
        $__internal_8dd32df074122f380c7895e14ae2ca9114fc63185d70a38131d90175cb6722ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dd32df074122f380c7895e14ae2ca9114fc63185d70a38131d90175cb6722ef->enter($__internal_8dd32df074122f380c7895e14ae2ca9114fc63185d70a38131d90175cb6722ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_d7b9535255846ce81bd06fa18bf58f86ce638e97e881f681c2dc524ff67385ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b9535255846ce81bd06fa18bf58f86ce638e97e881f681c2dc524ff67385ba->enter($__internal_d7b9535255846ce81bd06fa18bf58f86ce638e97e881f681c2dc524ff67385ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8dd32df074122f380c7895e14ae2ca9114fc63185d70a38131d90175cb6722ef->leave($__internal_8dd32df074122f380c7895e14ae2ca9114fc63185d70a38131d90175cb6722ef_prof);

        
        $__internal_d7b9535255846ce81bd06fa18bf58f86ce638e97e881f681c2dc524ff67385ba->leave($__internal_d7b9535255846ce81bd06fa18bf58f86ce638e97e881f681c2dc524ff67385ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
