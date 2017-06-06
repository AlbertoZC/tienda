<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_bc3110c868e711804592a414a51eb2bf8fe89e615e8d561acc152b25cbd1f79b extends Twig_Template
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
        $__internal_183003a99612a75a82e313125eac5cfe135798c06199ccd0585ccdbe7fcde2ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_183003a99612a75a82e313125eac5cfe135798c06199ccd0585ccdbe7fcde2ab->enter($__internal_183003a99612a75a82e313125eac5cfe135798c06199ccd0585ccdbe7fcde2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_aa44832609927fcbea28e54ba03b0b1f60f47e5baab2b59c06d9f3e28177d9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa44832609927fcbea28e54ba03b0b1f60f47e5baab2b59c06d9f3e28177d9e5->enter($__internal_aa44832609927fcbea28e54ba03b0b1f60f47e5baab2b59c06d9f3e28177d9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
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
        
        $__internal_183003a99612a75a82e313125eac5cfe135798c06199ccd0585ccdbe7fcde2ab->leave($__internal_183003a99612a75a82e313125eac5cfe135798c06199ccd0585ccdbe7fcde2ab_prof);

        
        $__internal_aa44832609927fcbea28e54ba03b0b1f60f47e5baab2b59c06d9f3e28177d9e5->leave($__internal_aa44832609927fcbea28e54ba03b0b1f60f47e5baab2b59c06d9f3e28177d9e5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
