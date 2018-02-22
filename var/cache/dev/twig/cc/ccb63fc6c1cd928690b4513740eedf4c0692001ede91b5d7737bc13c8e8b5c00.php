<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_002bdc7dde2763e6f64d11766f444baf121dd65d1a0815275641c0f25945761b extends Twig_Template
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
        $__internal_1f7d585f1c3e06dacc1835c8bcf26baf81662c732e8ae5c888c081922d2c5082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f7d585f1c3e06dacc1835c8bcf26baf81662c732e8ae5c888c081922d2c5082->enter($__internal_1f7d585f1c3e06dacc1835c8bcf26baf81662c732e8ae5c888c081922d2c5082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_fe43782d479d2f0a6661eaef2800d0631f76ff9ebc623788b0f39ad1eab76783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe43782d479d2f0a6661eaef2800d0631f76ff9ebc623788b0f39ad1eab76783->enter($__internal_fe43782d479d2f0a6661eaef2800d0631f76ff9ebc623788b0f39ad1eab76783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1f7d585f1c3e06dacc1835c8bcf26baf81662c732e8ae5c888c081922d2c5082->leave($__internal_1f7d585f1c3e06dacc1835c8bcf26baf81662c732e8ae5c888c081922d2c5082_prof);

        
        $__internal_fe43782d479d2f0a6661eaef2800d0631f76ff9ebc623788b0f39ad1eab76783->leave($__internal_fe43782d479d2f0a6661eaef2800d0631f76ff9ebc623788b0f39ad1eab76783_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
