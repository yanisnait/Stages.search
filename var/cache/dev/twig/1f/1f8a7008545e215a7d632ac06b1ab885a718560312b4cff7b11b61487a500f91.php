<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8e2acf462e232a651b9cbceb9629c1bda76dab4759001d4d83642b40a6895018 extends Twig_Template
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
        $__internal_92fad90a50e3c0c4cd042fae68590ad3ddbade000f0c3f7e866019e10f88d89a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92fad90a50e3c0c4cd042fae68590ad3ddbade000f0c3f7e866019e10f88d89a->enter($__internal_92fad90a50e3c0c4cd042fae68590ad3ddbade000f0c3f7e866019e10f88d89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_2aa7ef3fd7e4117b14f2bd6fc88a84adb9909f26a52dd1c3d20bc1dae7bd3c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa7ef3fd7e4117b14f2bd6fc88a84adb9909f26a52dd1c3d20bc1dae7bd3c34->enter($__internal_2aa7ef3fd7e4117b14f2bd6fc88a84adb9909f26a52dd1c3d20bc1dae7bd3c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_92fad90a50e3c0c4cd042fae68590ad3ddbade000f0c3f7e866019e10f88d89a->leave($__internal_92fad90a50e3c0c4cd042fae68590ad3ddbade000f0c3f7e866019e10f88d89a_prof);

        
        $__internal_2aa7ef3fd7e4117b14f2bd6fc88a84adb9909f26a52dd1c3d20bc1dae7bd3c34->leave($__internal_2aa7ef3fd7e4117b14f2bd6fc88a84adb9909f26a52dd1c3d20bc1dae7bd3c34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
