<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5c7831b9d473abf957cb3479a7a5577a5d2b1c2b7b7536536fea396ce727825d extends Twig_Template
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
        $__internal_0aa732d5832c7fb20434e7f9381c630985e11a77dad6fb9729c39800a56126ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa732d5832c7fb20434e7f9381c630985e11a77dad6fb9729c39800a56126ea->enter($__internal_0aa732d5832c7fb20434e7f9381c630985e11a77dad6fb9729c39800a56126ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_8bd02b0364d1d870aa951572a568d1e51d664f2ec085affaf0d10f8c20c78619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd02b0364d1d870aa951572a568d1e51d664f2ec085affaf0d10f8c20c78619->enter($__internal_8bd02b0364d1d870aa951572a568d1e51d664f2ec085affaf0d10f8c20c78619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0aa732d5832c7fb20434e7f9381c630985e11a77dad6fb9729c39800a56126ea->leave($__internal_0aa732d5832c7fb20434e7f9381c630985e11a77dad6fb9729c39800a56126ea_prof);

        
        $__internal_8bd02b0364d1d870aa951572a568d1e51d664f2ec085affaf0d10f8c20c78619->leave($__internal_8bd02b0364d1d870aa951572a568d1e51d664f2ec085affaf0d10f8c20c78619_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
