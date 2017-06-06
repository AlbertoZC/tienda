<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d181e90151c7f4f75e82a6c017a43c025490c0eb156a84345f2b1d5f879fef92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1af1670bb2461a6303bd292357033b9956ece3b7c2336694ca6b52c3ca9ac9a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1af1670bb2461a6303bd292357033b9956ece3b7c2336694ca6b52c3ca9ac9a7->enter($__internal_1af1670bb2461a6303bd292357033b9956ece3b7c2336694ca6b52c3ca9ac9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_b47928a48073c7e3a07b987e5592f7d0c4840e30a48ecb2e336486a3fad1d46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47928a48073c7e3a07b987e5592f7d0c4840e30a48ecb2e336486a3fad1d46b->enter($__internal_b47928a48073c7e3a07b987e5592f7d0c4840e30a48ecb2e336486a3fad1d46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1af1670bb2461a6303bd292357033b9956ece3b7c2336694ca6b52c3ca9ac9a7->leave($__internal_1af1670bb2461a6303bd292357033b9956ece3b7c2336694ca6b52c3ca9ac9a7_prof);

        
        $__internal_b47928a48073c7e3a07b987e5592f7d0c4840e30a48ecb2e336486a3fad1d46b->leave($__internal_b47928a48073c7e3a07b987e5592f7d0c4840e30a48ecb2e336486a3fad1d46b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_838f672cb97d0e54dfa5bc066838d3a96f33d99d9cd8bc77462e40ce395a213d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_838f672cb97d0e54dfa5bc066838d3a96f33d99d9cd8bc77462e40ce395a213d->enter($__internal_838f672cb97d0e54dfa5bc066838d3a96f33d99d9cd8bc77462e40ce395a213d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_42d84454e9918bb897d52fda7a32fa0bb328600f3e3f57787e32b2ca6b5d21f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d84454e9918bb897d52fda7a32fa0bb328600f3e3f57787e32b2ca6b5d21f5->enter($__internal_42d84454e9918bb897d52fda7a32fa0bb328600f3e3f57787e32b2ca6b5d21f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_42d84454e9918bb897d52fda7a32fa0bb328600f3e3f57787e32b2ca6b5d21f5->leave($__internal_42d84454e9918bb897d52fda7a32fa0bb328600f3e3f57787e32b2ca6b5d21f5_prof);

        
        $__internal_838f672cb97d0e54dfa5bc066838d3a96f33d99d9cd8bc77462e40ce395a213d->leave($__internal_838f672cb97d0e54dfa5bc066838d3a96f33d99d9cd8bc77462e40ce395a213d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3cc735a13e2bbe275c3f4939fd9f85fb47d0fbaa2761e3993da4b05de440e05a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc735a13e2bbe275c3f4939fd9f85fb47d0fbaa2761e3993da4b05de440e05a->enter($__internal_3cc735a13e2bbe275c3f4939fd9f85fb47d0fbaa2761e3993da4b05de440e05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8bdb6e3a3b89b8a750cf26adfca60c0c1fa3639afdc880504325063e5e5d6e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bdb6e3a3b89b8a750cf26adfca60c0c1fa3639afdc880504325063e5e5d6e4f->enter($__internal_8bdb6e3a3b89b8a750cf26adfca60c0c1fa3639afdc880504325063e5e5d6e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8bdb6e3a3b89b8a750cf26adfca60c0c1fa3639afdc880504325063e5e5d6e4f->leave($__internal_8bdb6e3a3b89b8a750cf26adfca60c0c1fa3639afdc880504325063e5e5d6e4f_prof);

        
        $__internal_3cc735a13e2bbe275c3f4939fd9f85fb47d0fbaa2761e3993da4b05de440e05a->leave($__internal_3cc735a13e2bbe275c3f4939fd9f85fb47d0fbaa2761e3993da4b05de440e05a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e1fa35d50ce2f4fd49f61a546396cd18519019fa5fa974f9c514b36793228a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1fa35d50ce2f4fd49f61a546396cd18519019fa5fa974f9c514b36793228a65->enter($__internal_e1fa35d50ce2f4fd49f61a546396cd18519019fa5fa974f9c514b36793228a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4c9cdd0d418fc0814efac567d5b3c4b205462abd962260d227bbb3c7563c73b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9cdd0d418fc0814efac567d5b3c4b205462abd962260d227bbb3c7563c73b1->enter($__internal_4c9cdd0d418fc0814efac567d5b3c4b205462abd962260d227bbb3c7563c73b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4c9cdd0d418fc0814efac567d5b3c4b205462abd962260d227bbb3c7563c73b1->leave($__internal_4c9cdd0d418fc0814efac567d5b3c4b205462abd962260d227bbb3c7563c73b1_prof);

        
        $__internal_e1fa35d50ce2f4fd49f61a546396cd18519019fa5fa974f9c514b36793228a65->leave($__internal_e1fa35d50ce2f4fd49f61a546396cd18519019fa5fa974f9c514b36793228a65_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
