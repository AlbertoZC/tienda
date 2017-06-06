<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_4856042e1e2b0f08af587ef0bb14d17f80979aa1c67d4757d09a583f65ad7fe4 extends Twig_Template
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
        $__internal_61ead7f928a84bf64fa1c5679e01a209e71695177d61ec0d5f6b86d7b44c1940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61ead7f928a84bf64fa1c5679e01a209e71695177d61ec0d5f6b86d7b44c1940->enter($__internal_61ead7f928a84bf64fa1c5679e01a209e71695177d61ec0d5f6b86d7b44c1940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_1773bc6a56100295a4a830b87aab72455586cadba464480e2013a0f7c6b41ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1773bc6a56100295a4a830b87aab72455586cadba464480e2013a0f7c6b41ecf->enter($__internal_1773bc6a56100295a4a830b87aab72455586cadba464480e2013a0f7c6b41ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_61ead7f928a84bf64fa1c5679e01a209e71695177d61ec0d5f6b86d7b44c1940->leave($__internal_61ead7f928a84bf64fa1c5679e01a209e71695177d61ec0d5f6b86d7b44c1940_prof);

        
        $__internal_1773bc6a56100295a4a830b87aab72455586cadba464480e2013a0f7c6b41ecf->leave($__internal_1773bc6a56100295a4a830b87aab72455586cadba464480e2013a0f7c6b41ecf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
