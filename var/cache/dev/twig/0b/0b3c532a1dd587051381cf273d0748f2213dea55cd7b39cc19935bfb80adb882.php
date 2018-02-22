<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a9ef2f2d07d2d7160aefe7fd83fc25f5160d6b3ec6f9d1d040742796b3aa06ca extends Twig_Template
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
        $__internal_748b06547a9f4862c2b4289b2d396bcef5e79f9677d67ee8ae65faabe2a0e50f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_748b06547a9f4862c2b4289b2d396bcef5e79f9677d67ee8ae65faabe2a0e50f->enter($__internal_748b06547a9f4862c2b4289b2d396bcef5e79f9677d67ee8ae65faabe2a0e50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f98041d09e5e424a333fe9fa163d3e7702aed78c54f38a982bfce93ecd8ea070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98041d09e5e424a333fe9fa163d3e7702aed78c54f38a982bfce93ecd8ea070->enter($__internal_f98041d09e5e424a333fe9fa163d3e7702aed78c54f38a982bfce93ecd8ea070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_748b06547a9f4862c2b4289b2d396bcef5e79f9677d67ee8ae65faabe2a0e50f->leave($__internal_748b06547a9f4862c2b4289b2d396bcef5e79f9677d67ee8ae65faabe2a0e50f_prof);

        
        $__internal_f98041d09e5e424a333fe9fa163d3e7702aed78c54f38a982bfce93ecd8ea070->leave($__internal_f98041d09e5e424a333fe9fa163d3e7702aed78c54f38a982bfce93ecd8ea070_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
