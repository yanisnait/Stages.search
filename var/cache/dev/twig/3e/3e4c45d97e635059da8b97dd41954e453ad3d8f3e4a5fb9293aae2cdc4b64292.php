<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a7efddbf081c16e85b1e260cf097eaa8339e527ba14d58c74a4c06046b48d318 extends Twig_Template
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
        $__internal_e00d8e097342a708ac8b76858a35b25bcb2f6f8056c1fe8683d26da5dbc03ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00d8e097342a708ac8b76858a35b25bcb2f6f8056c1fe8683d26da5dbc03ade->enter($__internal_e00d8e097342a708ac8b76858a35b25bcb2f6f8056c1fe8683d26da5dbc03ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_84b22bd4ef3d145bb4bc9bb87537c49e819981a1fc432dd2d118bbc8181e4388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b22bd4ef3d145bb4bc9bb87537c49e819981a1fc432dd2d118bbc8181e4388->enter($__internal_84b22bd4ef3d145bb4bc9bb87537c49e819981a1fc432dd2d118bbc8181e4388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e00d8e097342a708ac8b76858a35b25bcb2f6f8056c1fe8683d26da5dbc03ade->leave($__internal_e00d8e097342a708ac8b76858a35b25bcb2f6f8056c1fe8683d26da5dbc03ade_prof);

        
        $__internal_84b22bd4ef3d145bb4bc9bb87537c49e819981a1fc432dd2d118bbc8181e4388->leave($__internal_84b22bd4ef3d145bb4bc9bb87537c49e819981a1fc432dd2d118bbc8181e4388_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
