<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_ccf53d8eb16bb077823eecd2570ba977b31e121e8e2a094ad4bb32840de415c2 extends Twig_Template
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
        $__internal_61cd193cb01e0a7e15f06723e8437a5fea657d54cfaf5fae99dba273d63846fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61cd193cb01e0a7e15f06723e8437a5fea657d54cfaf5fae99dba273d63846fc->enter($__internal_61cd193cb01e0a7e15f06723e8437a5fea657d54cfaf5fae99dba273d63846fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_b82c26e9e02d9a5746dea33dc73de3722ea336267298d2962dadf546a8548060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82c26e9e02d9a5746dea33dc73de3722ea336267298d2962dadf546a8548060->enter($__internal_b82c26e9e02d9a5746dea33dc73de3722ea336267298d2962dadf546a8548060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_61cd193cb01e0a7e15f06723e8437a5fea657d54cfaf5fae99dba273d63846fc->leave($__internal_61cd193cb01e0a7e15f06723e8437a5fea657d54cfaf5fae99dba273d63846fc_prof);

        
        $__internal_b82c26e9e02d9a5746dea33dc73de3722ea336267298d2962dadf546a8548060->leave($__internal_b82c26e9e02d9a5746dea33dc73de3722ea336267298d2962dadf546a8548060_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
