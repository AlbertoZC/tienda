<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_80c84f3d6064961974d68c5db7df668fa3b19616039e572c10a2527e685b6058 extends Twig_Template
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
        $__internal_949ca6fbe49116ccadfa57a60d194fcfa7bd1634923aa8ac55da7c2f164650a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_949ca6fbe49116ccadfa57a60d194fcfa7bd1634923aa8ac55da7c2f164650a1->enter($__internal_949ca6fbe49116ccadfa57a60d194fcfa7bd1634923aa8ac55da7c2f164650a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_2ea73ca514d2198da5d8615fb0dd424a583d132e176695c39781748a0c92fed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea73ca514d2198da5d8615fb0dd424a583d132e176695c39781748a0c92fed8->enter($__internal_2ea73ca514d2198da5d8615fb0dd424a583d132e176695c39781748a0c92fed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_949ca6fbe49116ccadfa57a60d194fcfa7bd1634923aa8ac55da7c2f164650a1->leave($__internal_949ca6fbe49116ccadfa57a60d194fcfa7bd1634923aa8ac55da7c2f164650a1_prof);

        
        $__internal_2ea73ca514d2198da5d8615fb0dd424a583d132e176695c39781748a0c92fed8->leave($__internal_2ea73ca514d2198da5d8615fb0dd424a583d132e176695c39781748a0c92fed8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
