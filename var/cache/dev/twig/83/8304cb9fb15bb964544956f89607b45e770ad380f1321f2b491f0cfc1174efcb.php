<?php

/* @SSPlatform/Advert/bye.html.twig */
class __TwigTemplate_dfc619148709e17e0cc10e4adc339b0d52267abc7dcc1cdc8186327bb729ba1f extends Twig_Template
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
        $__internal_637300edff586172ea93f388960b208b6bb3d72eb64fc269db21a3e016145c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_637300edff586172ea93f388960b208b6bb3d72eb64fc269db21a3e016145c43->enter($__internal_637300edff586172ea93f388960b208b6bb3d72eb64fc269db21a3e016145c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SSPlatform/Advert/bye.html.twig"));

        $__internal_03a06ab88732c02b65e3ca4eaa5859db5b4c861a044e3d0f25ab6bbcf6b8064b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a06ab88732c02b65e3ca4eaa5859db5b4c861a044e3d0f25ab6bbcf6b8064b->enter($__internal_03a06ab88732c02b65e3ca4eaa5859db5b4c861a044e3d0f25ab6bbcf6b8064b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SSPlatform/Advert/bye.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <title>Aurevoir</title>
  </head>
  <body>
    <h1>Bye ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new Twig_Error_Runtime('Variable "nom" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo " !</h1>

    <p>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
  </body>
</html>
";
        
        $__internal_637300edff586172ea93f388960b208b6bb3d72eb64fc269db21a3e016145c43->leave($__internal_637300edff586172ea93f388960b208b6bb3d72eb64fc269db21a3e016145c43_prof);

        
        $__internal_03a06ab88732c02b65e3ca4eaa5859db5b4c861a044e3d0f25ab6bbcf6b8064b->leave($__internal_03a06ab88732c02b65e3ca4eaa5859db5b4c861a044e3d0f25ab6bbcf6b8064b_prof);

    }

    public function getTemplateName()
    {
        return "@SSPlatform/Advert/bye.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SS/PlatformBundle/Resources/views/Advert/bye.html.twig #}

<!DOCTYPE html>
<html>
  <head>
    <title>Aurevoir</title>
  </head>
  <body>
    <h1>Bye {{nom}} !</h1>

    <p>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
  </body>
</html>
", "@SSPlatform/Advert/bye.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle\\Resources\\views\\Advert\\bye.html.twig");
    }
}
