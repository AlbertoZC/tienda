<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_5141c14855cf54845aec583b177d1e7a5f44104a0864eb875602ec6d1921da2d extends Twig_Template
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
        $__internal_a4091727b49949c40420101ff8ea350a5ba4f893e825729fc4cea3a115e0590f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4091727b49949c40420101ff8ea350a5ba4f893e825729fc4cea3a115e0590f->enter($__internal_a4091727b49949c40420101ff8ea350a5ba4f893e825729fc4cea3a115e0590f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_dc1aa98e90fba411410d61f0854cc6ca43cfa9869945f4e18133231bb5ace7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1aa98e90fba411410d61f0854cc6ca43cfa9869945f4e18133231bb5ace7a3->enter($__internal_dc1aa98e90fba411410d61f0854cc6ca43cfa9869945f4e18133231bb5ace7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a4091727b49949c40420101ff8ea350a5ba4f893e825729fc4cea3a115e0590f->leave($__internal_a4091727b49949c40420101ff8ea350a5ba4f893e825729fc4cea3a115e0590f_prof);

        
        $__internal_dc1aa98e90fba411410d61f0854cc6ca43cfa9869945f4e18133231bb5ace7a3->leave($__internal_dc1aa98e90fba411410d61f0854cc6ca43cfa9869945f4e18133231bb5ace7a3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
