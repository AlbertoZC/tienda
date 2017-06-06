<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4a0837c52d6733fc0060ed5757ccfb28ace0aef65c6a16b6b14ca321a51748cd extends Twig_Template
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
        $__internal_8523be4b4e478c85e2cfbc4e124a97ef6b290e61c489bc4651b5f246c3e6544e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8523be4b4e478c85e2cfbc4e124a97ef6b290e61c489bc4651b5f246c3e6544e->enter($__internal_8523be4b4e478c85e2cfbc4e124a97ef6b290e61c489bc4651b5f246c3e6544e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ddda5e40e6d91d82db091e5e681134064c69b917c612f408bb4250d2c906d59a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddda5e40e6d91d82db091e5e681134064c69b917c612f408bb4250d2c906d59a->enter($__internal_ddda5e40e6d91d82db091e5e681134064c69b917c612f408bb4250d2c906d59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8523be4b4e478c85e2cfbc4e124a97ef6b290e61c489bc4651b5f246c3e6544e->leave($__internal_8523be4b4e478c85e2cfbc4e124a97ef6b290e61c489bc4651b5f246c3e6544e_prof);

        
        $__internal_ddda5e40e6d91d82db091e5e681134064c69b917c612f408bb4250d2c906d59a->leave($__internal_ddda5e40e6d91d82db091e5e681134064c69b917c612f408bb4250d2c906d59a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
