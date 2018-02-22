<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_dfb221f410e43e6158f9fccc3dafa3b69119fd2985c3797ece07077c727cfdb2 extends Twig_Template
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
        $__internal_6c4de1dc04c601bb75bbb6358736041cf7ce97cc5d68b075db7b57a9cfbaad08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4de1dc04c601bb75bbb6358736041cf7ce97cc5d68b075db7b57a9cfbaad08->enter($__internal_6c4de1dc04c601bb75bbb6358736041cf7ce97cc5d68b075db7b57a9cfbaad08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_45d6feaa89c1ff8550a7338b7a88dd350cdff91e80681067ca3af249a07d1421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d6feaa89c1ff8550a7338b7a88dd350cdff91e80681067ca3af249a07d1421->enter($__internal_45d6feaa89c1ff8550a7338b7a88dd350cdff91e80681067ca3af249a07d1421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6c4de1dc04c601bb75bbb6358736041cf7ce97cc5d68b075db7b57a9cfbaad08->leave($__internal_6c4de1dc04c601bb75bbb6358736041cf7ce97cc5d68b075db7b57a9cfbaad08_prof);

        
        $__internal_45d6feaa89c1ff8550a7338b7a88dd350cdff91e80681067ca3af249a07d1421->leave($__internal_45d6feaa89c1ff8550a7338b7a88dd350cdff91e80681067ca3af249a07d1421_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Stages.search\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
