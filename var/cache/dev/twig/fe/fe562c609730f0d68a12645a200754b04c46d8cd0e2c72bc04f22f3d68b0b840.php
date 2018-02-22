<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_6cc856dc38491af45edf4459f01d2d5bd3557fdf2f3238438314bfe6cf308416 extends Twig_Template
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
        $__internal_03e49705f5811cbee4c9f72cc7f053e6d11b3b48f1a54eab0e91772303cf314c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e49705f5811cbee4c9f72cc7f053e6d11b3b48f1a54eab0e91772303cf314c->enter($__internal_03e49705f5811cbee4c9f72cc7f053e6d11b3b48f1a54eab0e91772303cf314c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_4047eb3b67363e0f899264d6b01934255e75488bc22233d63ba0efea67146d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4047eb3b67363e0f899264d6b01934255e75488bc22233d63ba0efea67146d70->enter($__internal_4047eb3b67363e0f899264d6b01934255e75488bc22233d63ba0efea67146d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_03e49705f5811cbee4c9f72cc7f053e6d11b3b48f1a54eab0e91772303cf314c->leave($__internal_03e49705f5811cbee4c9f72cc7f053e6d11b3b48f1a54eab0e91772303cf314c_prof);

        
        $__internal_4047eb3b67363e0f899264d6b01934255e75488bc22233d63ba0efea67146d70->leave($__internal_4047eb3b67363e0f899264d6b01934255e75488bc22233d63ba0efea67146d70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
