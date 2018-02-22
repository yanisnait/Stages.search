<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2bd6cfe9ff5340bedcf5970fdf2421755087d056ba5f21d3ad4e6d8acb62e40a extends Twig_Template
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
        $__internal_cbc6951e1b104a7b30e102706d6368e542ae563d005723e2ea4b0908fb6d22be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbc6951e1b104a7b30e102706d6368e542ae563d005723e2ea4b0908fb6d22be->enter($__internal_cbc6951e1b104a7b30e102706d6368e542ae563d005723e2ea4b0908fb6d22be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_427e1315f86b6c2f91142442b79b163141a1fcf9a8691390e41fc62682ad9847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_427e1315f86b6c2f91142442b79b163141a1fcf9a8691390e41fc62682ad9847->enter($__internal_427e1315f86b6c2f91142442b79b163141a1fcf9a8691390e41fc62682ad9847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_cbc6951e1b104a7b30e102706d6368e542ae563d005723e2ea4b0908fb6d22be->leave($__internal_cbc6951e1b104a7b30e102706d6368e542ae563d005723e2ea4b0908fb6d22be_prof);

        
        $__internal_427e1315f86b6c2f91142442b79b163141a1fcf9a8691390e41fc62682ad9847->leave($__internal_427e1315f86b6c2f91142442b79b163141a1fcf9a8691390e41fc62682ad9847_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
