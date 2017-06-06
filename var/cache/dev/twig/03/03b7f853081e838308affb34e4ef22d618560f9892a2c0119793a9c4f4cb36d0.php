<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_b7bdd2070b73591cbbb72102022881a93ce767f4583eb851b890635331ba3877 extends Twig_Template
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
        $__internal_b2509b2cb8ec33cb220b1f0626bd78bfdf53dc6c3730df2725e7b9be82403451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2509b2cb8ec33cb220b1f0626bd78bfdf53dc6c3730df2725e7b9be82403451->enter($__internal_b2509b2cb8ec33cb220b1f0626bd78bfdf53dc6c3730df2725e7b9be82403451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_7a89683e63deb42171403b19abc8813caa820efca466d2d4c2aff46d82c547a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a89683e63deb42171403b19abc8813caa820efca466d2d4c2aff46d82c547a1->enter($__internal_7a89683e63deb42171403b19abc8813caa820efca466d2d4c2aff46d82c547a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b2509b2cb8ec33cb220b1f0626bd78bfdf53dc6c3730df2725e7b9be82403451->leave($__internal_b2509b2cb8ec33cb220b1f0626bd78bfdf53dc6c3730df2725e7b9be82403451_prof);

        
        $__internal_7a89683e63deb42171403b19abc8813caa820efca466d2d4c2aff46d82c547a1->leave($__internal_7a89683e63deb42171403b19abc8813caa820efca466d2d4c2aff46d82c547a1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
