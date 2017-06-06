<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_9ee94395d57bd775afdb5d78dd46fdaa650e54a29ca756c0211b2c734117b8a0 extends Twig_Template
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
        $__internal_d6439144f6730b66e6588dd2b841ee8d3994829e99bf2a13e66c4b1c555de763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6439144f6730b66e6588dd2b841ee8d3994829e99bf2a13e66c4b1c555de763->enter($__internal_d6439144f6730b66e6588dd2b841ee8d3994829e99bf2a13e66c4b1c555de763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_60e3ae9dd99e62a5d23699d06db3b8d385ad9fad5db1230a5708903a57a91b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e3ae9dd99e62a5d23699d06db3b8d385ad9fad5db1230a5708903a57a91b39->enter($__internal_60e3ae9dd99e62a5d23699d06db3b8d385ad9fad5db1230a5708903a57a91b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d6439144f6730b66e6588dd2b841ee8d3994829e99bf2a13e66c4b1c555de763->leave($__internal_d6439144f6730b66e6588dd2b841ee8d3994829e99bf2a13e66c4b1c555de763_prof);

        
        $__internal_60e3ae9dd99e62a5d23699d06db3b8d385ad9fad5db1230a5708903a57a91b39->leave($__internal_60e3ae9dd99e62a5d23699d06db3b8d385ad9fad5db1230a5708903a57a91b39_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
