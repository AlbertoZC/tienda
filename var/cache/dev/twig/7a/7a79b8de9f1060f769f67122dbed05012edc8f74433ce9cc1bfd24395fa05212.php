<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_9a37ad8ddc3020dafa241d65b7f92c049acf411addc3fdb58c1f927a77adf5a8 extends Twig_Template
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
        $__internal_3f5956dbcf52f52b6951c5743d3531e6b648ba28718c17df348d13024dc2253d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5956dbcf52f52b6951c5743d3531e6b648ba28718c17df348d13024dc2253d->enter($__internal_3f5956dbcf52f52b6951c5743d3531e6b648ba28718c17df348d13024dc2253d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_8a9385e7f35bab521843f96eebdc0841edf0a8232f53e1072b84938422c1af93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9385e7f35bab521843f96eebdc0841edf0a8232f53e1072b84938422c1af93->enter($__internal_8a9385e7f35bab521843f96eebdc0841edf0a8232f53e1072b84938422c1af93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3f5956dbcf52f52b6951c5743d3531e6b648ba28718c17df348d13024dc2253d->leave($__internal_3f5956dbcf52f52b6951c5743d3531e6b648ba28718c17df348d13024dc2253d_prof);

        
        $__internal_8a9385e7f35bab521843f96eebdc0841edf0a8232f53e1072b84938422c1af93->leave($__internal_8a9385e7f35bab521843f96eebdc0841edf0a8232f53e1072b84938422c1af93_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
