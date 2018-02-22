<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_70a3de6b0764b53d743be3f978f883d1210fdc44c9fb826c9f07be6587b1bbc4 extends Twig_Template
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
        $__internal_c33ae8db485ba75f86c6651bef1cc9e14173d7bba06bcfc40e23f753d9433d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c33ae8db485ba75f86c6651bef1cc9e14173d7bba06bcfc40e23f753d9433d74->enter($__internal_c33ae8db485ba75f86c6651bef1cc9e14173d7bba06bcfc40e23f753d9433d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_5eec2e513462e9f0ae0bf41b87d9ee47852e0cb3b3ec1ab82042d0752ee20929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eec2e513462e9f0ae0bf41b87d9ee47852e0cb3b3ec1ab82042d0752ee20929->enter($__internal_5eec2e513462e9f0ae0bf41b87d9ee47852e0cb3b3ec1ab82042d0752ee20929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c33ae8db485ba75f86c6651bef1cc9e14173d7bba06bcfc40e23f753d9433d74->leave($__internal_c33ae8db485ba75f86c6651bef1cc9e14173d7bba06bcfc40e23f753d9433d74_prof);

        
        $__internal_5eec2e513462e9f0ae0bf41b87d9ee47852e0cb3b3ec1ab82042d0752ee20929->leave($__internal_5eec2e513462e9f0ae0bf41b87d9ee47852e0cb3b3ec1ab82042d0752ee20929_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
