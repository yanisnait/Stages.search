<?php

/* SSPlatformBundle:Advert:bye.html.twig */
class __TwigTemplate_8209034b052f7873eb0b31eb939640a54564e500e495dd61292dddb86b31d980 extends Twig_Template
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
        $__internal_ff78c76b45e6eeda796c4d0443319a54b42c39e50ac81166b23ec858f2baa9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff78c76b45e6eeda796c4d0443319a54b42c39e50ac81166b23ec858f2baa9ce->enter($__internal_ff78c76b45e6eeda796c4d0443319a54b42c39e50ac81166b23ec858f2baa9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:bye.html.twig"));

        $__internal_beaed8a1e8f60432afa603efa9f495f74c7424e912641590890a9b7e6e990623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beaed8a1e8f60432afa603efa9f495f74c7424e912641590890a9b7e6e990623->enter($__internal_beaed8a1e8f60432afa603efa9f495f74c7424e912641590890a9b7e6e990623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SSPlatformBundle:Advert:bye.html.twig"));

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
        
        $__internal_ff78c76b45e6eeda796c4d0443319a54b42c39e50ac81166b23ec858f2baa9ce->leave($__internal_ff78c76b45e6eeda796c4d0443319a54b42c39e50ac81166b23ec858f2baa9ce_prof);

        
        $__internal_beaed8a1e8f60432afa603efa9f495f74c7424e912641590890a9b7e6e990623->leave($__internal_beaed8a1e8f60432afa603efa9f495f74c7424e912641590890a9b7e6e990623_prof);

    }

    public function getTemplateName()
    {
        return "SSPlatformBundle:Advert:bye.html.twig";
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
", "SSPlatformBundle:Advert:bye.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\src\\SS\\PlatformBundle/Resources/views/Advert/bye.html.twig");
    }
}
