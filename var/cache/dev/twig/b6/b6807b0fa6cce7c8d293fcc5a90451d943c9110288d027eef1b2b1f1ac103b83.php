<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_1f2cb0bbc60e06ee3907014ad04f85b0757a0881e6f1ab18f43438e880e5ed32 extends Twig_Template
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
        $__internal_0298b9f74d08a2f6800fc3746bd43b50518d2cb7aebd2a5c2d636ac8c15056e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0298b9f74d08a2f6800fc3746bd43b50518d2cb7aebd2a5c2d636ac8c15056e1->enter($__internal_0298b9f74d08a2f6800fc3746bd43b50518d2cb7aebd2a5c2d636ac8c15056e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_5cfdfe4d745c499f56bec18a6593ba1e434890f1baba8b0406102455087a99bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cfdfe4d745c499f56bec18a6593ba1e434890f1baba8b0406102455087a99bd->enter($__internal_5cfdfe4d745c499f56bec18a6593ba1e434890f1baba8b0406102455087a99bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_0298b9f74d08a2f6800fc3746bd43b50518d2cb7aebd2a5c2d636ac8c15056e1->leave($__internal_0298b9f74d08a2f6800fc3746bd43b50518d2cb7aebd2a5c2d636ac8c15056e1_prof);

        
        $__internal_5cfdfe4d745c499f56bec18a6593ba1e434890f1baba8b0406102455087a99bd->leave($__internal_5cfdfe4d745c499f56bec18a6593ba1e434890f1baba8b0406102455087a99bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
