<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_f145afbafaf6e9670f5289a6b0aec4f793a02ca23d9e93c80243345412ef7525 extends Twig_Template
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
        $__internal_d2ff4544b4c92b566e096f0675f657b579439169b882fc8b455c20fe32c52aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ff4544b4c92b566e096f0675f657b579439169b882fc8b455c20fe32c52aef->enter($__internal_d2ff4544b4c92b566e096f0675f657b579439169b882fc8b455c20fe32c52aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_0ef52535a6dcf5ce6b11a1b34b7cbd205f40de7c6ca56c4bd08f5f5e0a359e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef52535a6dcf5ce6b11a1b34b7cbd205f40de7c6ca56c4bd08f5f5e0a359e64->enter($__internal_0ef52535a6dcf5ce6b11a1b34b7cbd205f40de7c6ca56c4bd08f5f5e0a359e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_d2ff4544b4c92b566e096f0675f657b579439169b882fc8b455c20fe32c52aef->leave($__internal_d2ff4544b4c92b566e096f0675f657b579439169b882fc8b455c20fe32c52aef_prof);

        
        $__internal_0ef52535a6dcf5ce6b11a1b34b7cbd205f40de7c6ca56c4bd08f5f5e0a359e64->leave($__internal_0ef52535a6dcf5ce6b11a1b34b7cbd205f40de7c6ca56c4bd08f5f5e0a359e64_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
