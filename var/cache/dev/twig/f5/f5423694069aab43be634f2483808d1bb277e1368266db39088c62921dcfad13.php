<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7681e1ce04ef91e74cb0fd702eafdc4c7e7fdeaf69dfa7fcda8842ad569ccf15 extends Twig_Template
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
        $__internal_47fc2a669d610227c548a4cfa97b327da76624637897823fa6bea4dbcc1fc159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47fc2a669d610227c548a4cfa97b327da76624637897823fa6bea4dbcc1fc159->enter($__internal_47fc2a669d610227c548a4cfa97b327da76624637897823fa6bea4dbcc1fc159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_53f38efe347a2b9c3067ece388233d85160f596e41c6330f00e6c8e7e0e98d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f38efe347a2b9c3067ece388233d85160f596e41c6330f00e6c8e7e0e98d76->enter($__internal_53f38efe347a2b9c3067ece388233d85160f596e41c6330f00e6c8e7e0e98d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_47fc2a669d610227c548a4cfa97b327da76624637897823fa6bea4dbcc1fc159->leave($__internal_47fc2a669d610227c548a4cfa97b327da76624637897823fa6bea4dbcc1fc159_prof);

        
        $__internal_53f38efe347a2b9c3067ece388233d85160f596e41c6330f00e6c8e7e0e98d76->leave($__internal_53f38efe347a2b9c3067ece388233d85160f596e41c6330f00e6c8e7e0e98d76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
