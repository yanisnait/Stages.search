<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0648c6cc068c7d7dbbacbed15b37d4f9bd48158ab816d0ba53f1255204ea18fc extends Twig_Template
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
        $__internal_01219f7bdb5a8edbae432f27838ec6e0cb6bc87450e834a5e6c709624fd26745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01219f7bdb5a8edbae432f27838ec6e0cb6bc87450e834a5e6c709624fd26745->enter($__internal_01219f7bdb5a8edbae432f27838ec6e0cb6bc87450e834a5e6c709624fd26745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_572eaff2b1960e2b8f24322372fc351fbad5c989e87b976595a8d230de030b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572eaff2b1960e2b8f24322372fc351fbad5c989e87b976595a8d230de030b7b->enter($__internal_572eaff2b1960e2b8f24322372fc351fbad5c989e87b976595a8d230de030b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_01219f7bdb5a8edbae432f27838ec6e0cb6bc87450e834a5e6c709624fd26745->leave($__internal_01219f7bdb5a8edbae432f27838ec6e0cb6bc87450e834a5e6c709624fd26745_prof);

        
        $__internal_572eaff2b1960e2b8f24322372fc351fbad5c989e87b976595a8d230de030b7b->leave($__internal_572eaff2b1960e2b8f24322372fc351fbad5c989e87b976595a8d230de030b7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
