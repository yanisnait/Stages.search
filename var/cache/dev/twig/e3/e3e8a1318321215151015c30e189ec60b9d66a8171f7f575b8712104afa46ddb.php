<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_b6ae0098bc82ae204465a770a12a2c46f492666420c385c35bccd04e951ad8ab extends Twig_Template
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
        $__internal_69ed1c88bb32169c996ebf5bb5489d6c3ab9667706709468d08dcda02b2e3ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69ed1c88bb32169c996ebf5bb5489d6c3ab9667706709468d08dcda02b2e3ab8->enter($__internal_69ed1c88bb32169c996ebf5bb5489d6c3ab9667706709468d08dcda02b2e3ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_57277f6d664a430324357f2b457b9b3bf6c01a9b40ff48a165aeb40f6bd4380c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57277f6d664a430324357f2b457b9b3bf6c01a9b40ff48a165aeb40f6bd4380c->enter($__internal_57277f6d664a430324357f2b457b9b3bf6c01a9b40ff48a165aeb40f6bd4380c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_69ed1c88bb32169c996ebf5bb5489d6c3ab9667706709468d08dcda02b2e3ab8->leave($__internal_69ed1c88bb32169c996ebf5bb5489d6c3ab9667706709468d08dcda02b2e3ab8_prof);

        
        $__internal_57277f6d664a430324357f2b457b9b3bf6c01a9b40ff48a165aeb40f6bd4380c->leave($__internal_57277f6d664a430324357f2b457b9b3bf6c01a9b40ff48a165aeb40f6bd4380c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
