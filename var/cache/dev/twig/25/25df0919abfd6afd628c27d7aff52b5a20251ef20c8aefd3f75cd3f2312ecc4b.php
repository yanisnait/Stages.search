<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f76c285cfae9bf9c9d9565586ec60830346491d931df498860190ec7764342c5 extends Twig_Template
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
        $__internal_7fd239a3c6964c66af6f0fe751faba5fe524b1da345c8e67eedb42ea2d5c873d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd239a3c6964c66af6f0fe751faba5fe524b1da345c8e67eedb42ea2d5c873d->enter($__internal_7fd239a3c6964c66af6f0fe751faba5fe524b1da345c8e67eedb42ea2d5c873d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_094832751eb7781bdd5966c7fadd7b2a7c0990b589bdf08017646676b830d3b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_094832751eb7781bdd5966c7fadd7b2a7c0990b589bdf08017646676b830d3b9->enter($__internal_094832751eb7781bdd5966c7fadd7b2a7c0990b589bdf08017646676b830d3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_7fd239a3c6964c66af6f0fe751faba5fe524b1da345c8e67eedb42ea2d5c873d->leave($__internal_7fd239a3c6964c66af6f0fe751faba5fe524b1da345c8e67eedb42ea2d5c873d_prof);

        
        $__internal_094832751eb7781bdd5966c7fadd7b2a7c0990b589bdf08017646676b830d3b9->leave($__internal_094832751eb7781bdd5966c7fadd7b2a7c0990b589bdf08017646676b830d3b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
