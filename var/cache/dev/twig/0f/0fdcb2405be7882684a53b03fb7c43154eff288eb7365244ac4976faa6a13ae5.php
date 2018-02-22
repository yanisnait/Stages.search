<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_25e0c27308862f2e18c699b214302c42f62fa64eaa4270274ba18eaeef5421ed extends Twig_Template
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
        $__internal_e064f657cffc492713b0519735d2e82f40f971da4ba066da3dc8b70b95d08f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e064f657cffc492713b0519735d2e82f40f971da4ba066da3dc8b70b95d08f29->enter($__internal_e064f657cffc492713b0519735d2e82f40f971da4ba066da3dc8b70b95d08f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ffa6745296eeab9a9e7ceb00fad4c8e57bff1c661db5a9f5ecdeb19fa54da32b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa6745296eeab9a9e7ceb00fad4c8e57bff1c661db5a9f5ecdeb19fa54da32b->enter($__internal_ffa6745296eeab9a9e7ceb00fad4c8e57bff1c661db5a9f5ecdeb19fa54da32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e064f657cffc492713b0519735d2e82f40f971da4ba066da3dc8b70b95d08f29->leave($__internal_e064f657cffc492713b0519735d2e82f40f971da4ba066da3dc8b70b95d08f29_prof);

        
        $__internal_ffa6745296eeab9a9e7ceb00fad4c8e57bff1c661db5a9f5ecdeb19fa54da32b->leave($__internal_ffa6745296eeab9a9e7ceb00fad4c8e57bff1c661db5a9f5ecdeb19fa54da32b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
