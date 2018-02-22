<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5f2a274db7c0c54e7e9b6d7d73ebfd0e12b5e02bee2b8b76b3f45842230fd9c4 extends Twig_Template
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
        $__internal_1a1ebb93b57c0ef47e8b6a2ab35848fed948d42d1dc418cfcb2fa5323690d9eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a1ebb93b57c0ef47e8b6a2ab35848fed948d42d1dc418cfcb2fa5323690d9eb->enter($__internal_1a1ebb93b57c0ef47e8b6a2ab35848fed948d42d1dc418cfcb2fa5323690d9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_ac80f2b0f3786dcdb01631223ae2671b991b35b56f7ae822db9bfbe1bcf0a55d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac80f2b0f3786dcdb01631223ae2671b991b35b56f7ae822db9bfbe1bcf0a55d->enter($__internal_ac80f2b0f3786dcdb01631223ae2671b991b35b56f7ae822db9bfbe1bcf0a55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1a1ebb93b57c0ef47e8b6a2ab35848fed948d42d1dc418cfcb2fa5323690d9eb->leave($__internal_1a1ebb93b57c0ef47e8b6a2ab35848fed948d42d1dc418cfcb2fa5323690d9eb_prof);

        
        $__internal_ac80f2b0f3786dcdb01631223ae2671b991b35b56f7ae822db9bfbe1bcf0a55d->leave($__internal_ac80f2b0f3786dcdb01631223ae2671b991b35b56f7ae822db9bfbe1bcf0a55d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
