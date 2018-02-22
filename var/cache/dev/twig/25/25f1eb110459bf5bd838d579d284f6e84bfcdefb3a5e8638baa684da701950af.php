<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b7db1731cfb7f31208b07c1dc6cf3d96fe5e4cc0fed0efc7f8d2133ad9868363 extends Twig_Template
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
        $__internal_87474513f43905a3e57a38d627c3b5395a8d2b58fa0d6701f57bfee5c8404185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87474513f43905a3e57a38d627c3b5395a8d2b58fa0d6701f57bfee5c8404185->enter($__internal_87474513f43905a3e57a38d627c3b5395a8d2b58fa0d6701f57bfee5c8404185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_681bd38216018bd57cf7624f2328d8741bd45515764f21936ae6a39a8cc4fd67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681bd38216018bd57cf7624f2328d8741bd45515764f21936ae6a39a8cc4fd67->enter($__internal_681bd38216018bd57cf7624f2328d8741bd45515764f21936ae6a39a8cc4fd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_87474513f43905a3e57a38d627c3b5395a8d2b58fa0d6701f57bfee5c8404185->leave($__internal_87474513f43905a3e57a38d627c3b5395a8d2b58fa0d6701f57bfee5c8404185_prof);

        
        $__internal_681bd38216018bd57cf7624f2328d8741bd45515764f21936ae6a39a8cc4fd67->leave($__internal_681bd38216018bd57cf7624f2328d8741bd45515764f21936ae6a39a8cc4fd67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
