<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_ecccba5efc0f5ce1136c0faa19b8808db3d21c868cb69e7cf93bb6186a2a9d56 extends Twig_Template
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
        $__internal_f273b38c5f4c8db849d587faee8c6d725314a57d39e596bfc30a2de2b2cac909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f273b38c5f4c8db849d587faee8c6d725314a57d39e596bfc30a2de2b2cac909->enter($__internal_f273b38c5f4c8db849d587faee8c6d725314a57d39e596bfc30a2de2b2cac909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_945367225582e258965e167ac70f330bbc3003bd92c70ec59bd09e5dec877608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945367225582e258965e167ac70f330bbc3003bd92c70ec59bd09e5dec877608->enter($__internal_945367225582e258965e167ac70f330bbc3003bd92c70ec59bd09e5dec877608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f273b38c5f4c8db849d587faee8c6d725314a57d39e596bfc30a2de2b2cac909->leave($__internal_f273b38c5f4c8db849d587faee8c6d725314a57d39e596bfc30a2de2b2cac909_prof);

        
        $__internal_945367225582e258965e167ac70f330bbc3003bd92c70ec59bd09e5dec877608->leave($__internal_945367225582e258965e167ac70f330bbc3003bd92c70ec59bd09e5dec877608_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
