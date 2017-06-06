<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f0dbcbe243af1ac361b1565700d55943209a3eb5f9cedb9d61e3b26f27280039 extends Twig_Template
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
        $__internal_fee814324c945f6945b7559b9d1a70bf83069c0f3af937cf35a647785c83287c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee814324c945f6945b7559b9d1a70bf83069c0f3af937cf35a647785c83287c->enter($__internal_fee814324c945f6945b7559b9d1a70bf83069c0f3af937cf35a647785c83287c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_cd55335ea23f5e7e5ba9b8e91afdbeed91df287d1bbf0ee2c23f6e4a169ff54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd55335ea23f5e7e5ba9b8e91afdbeed91df287d1bbf0ee2c23f6e4a169ff54a->enter($__internal_cd55335ea23f5e7e5ba9b8e91afdbeed91df287d1bbf0ee2c23f6e4a169ff54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fee814324c945f6945b7559b9d1a70bf83069c0f3af937cf35a647785c83287c->leave($__internal_fee814324c945f6945b7559b9d1a70bf83069c0f3af937cf35a647785c83287c_prof);

        
        $__internal_cd55335ea23f5e7e5ba9b8e91afdbeed91df287d1bbf0ee2c23f6e4a169ff54a->leave($__internal_cd55335ea23f5e7e5ba9b8e91afdbeed91df287d1bbf0ee2c23f6e4a169ff54a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
