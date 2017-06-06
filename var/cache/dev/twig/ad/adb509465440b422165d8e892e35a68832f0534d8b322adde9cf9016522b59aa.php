<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_e9d9ca4af59ba34e29753c08cfdbfce7dfe17edd15cfd7965bd74bc488ed6c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48e8f652f170026afadb4eb5ea88f13b2e993f5dcb5789489b15a683afbd4111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e8f652f170026afadb4eb5ea88f13b2e993f5dcb5789489b15a683afbd4111->enter($__internal_48e8f652f170026afadb4eb5ea88f13b2e993f5dcb5789489b15a683afbd4111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_01d9702b74ba69d29a1152e8434fa1e95f9af4eafbe1d7d0df39981e7ada9170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d9702b74ba69d29a1152e8434fa1e95f9af4eafbe1d7d0df39981e7ada9170->enter($__internal_01d9702b74ba69d29a1152e8434fa1e95f9af4eafbe1d7d0df39981e7ada9170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48e8f652f170026afadb4eb5ea88f13b2e993f5dcb5789489b15a683afbd4111->leave($__internal_48e8f652f170026afadb4eb5ea88f13b2e993f5dcb5789489b15a683afbd4111_prof);

        
        $__internal_01d9702b74ba69d29a1152e8434fa1e95f9af4eafbe1d7d0df39981e7ada9170->leave($__internal_01d9702b74ba69d29a1152e8434fa1e95f9af4eafbe1d7d0df39981e7ada9170_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3b72665e650d506b8bf078f7ebc07608de3b3a2d977eb0ff98449908200258a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b72665e650d506b8bf078f7ebc07608de3b3a2d977eb0ff98449908200258a0->enter($__internal_3b72665e650d506b8bf078f7ebc07608de3b3a2d977eb0ff98449908200258a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1c3c0c058d3ed1d04452cd46b3a7699b4124d97734e22b0264e2a66bfccd607f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3c0c058d3ed1d04452cd46b3a7699b4124d97734e22b0264e2a66bfccd607f->enter($__internal_1c3c0c058d3ed1d04452cd46b3a7699b4124d97734e22b0264e2a66bfccd607f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_1c3c0c058d3ed1d04452cd46b3a7699b4124d97734e22b0264e2a66bfccd607f->leave($__internal_1c3c0c058d3ed1d04452cd46b3a7699b4124d97734e22b0264e2a66bfccd607f_prof);

        
        $__internal_3b72665e650d506b8bf078f7ebc07608de3b3a2d977eb0ff98449908200258a0->leave($__internal_3b72665e650d506b8bf078f7ebc07608de3b3a2d977eb0ff98449908200258a0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9b81c1160def1b1557779c8d5c939fe60177128de3f22d16316805ca57c23e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9b81c1160def1b1557779c8d5c939fe60177128de3f22d16316805ca57c23e3->enter($__internal_d9b81c1160def1b1557779c8d5c939fe60177128de3f22d16316805ca57c23e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4318ef2aa04389423575469d9c57a8033bab43a8d41442de89f78e9d2dff244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4318ef2aa04389423575469d9c57a8033bab43a8d41442de89f78e9d2dff244->enter($__internal_d4318ef2aa04389423575469d9c57a8033bab43a8d41442de89f78e9d2dff244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_d4318ef2aa04389423575469d9c57a8033bab43a8d41442de89f78e9d2dff244->leave($__internal_d4318ef2aa04389423575469d9c57a8033bab43a8d41442de89f78e9d2dff244_prof);

        
        $__internal_d9b81c1160def1b1557779c8d5c939fe60177128de3f22d16316805ca57c23e3->leave($__internal_d9b81c1160def1b1557779c8d5c939fe60177128de3f22d16316805ca57c23e3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
