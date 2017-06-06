<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_22c639aca54f3a4e259d4f54b394460df527237147be94af9c8393f211a20749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_5ada5412a0d79560a116a5dee3d5412765453b19b81578e510e2cf76015a1e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ada5412a0d79560a116a5dee3d5412765453b19b81578e510e2cf76015a1e1b->enter($__internal_5ada5412a0d79560a116a5dee3d5412765453b19b81578e510e2cf76015a1e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_8516888a9e831c5cadb03b82f45cf217393abda4f431d758ab3b498fd13b1a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8516888a9e831c5cadb03b82f45cf217393abda4f431d758ab3b498fd13b1a72->enter($__internal_8516888a9e831c5cadb03b82f45cf217393abda4f431d758ab3b498fd13b1a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ada5412a0d79560a116a5dee3d5412765453b19b81578e510e2cf76015a1e1b->leave($__internal_5ada5412a0d79560a116a5dee3d5412765453b19b81578e510e2cf76015a1e1b_prof);

        
        $__internal_8516888a9e831c5cadb03b82f45cf217393abda4f431d758ab3b498fd13b1a72->leave($__internal_8516888a9e831c5cadb03b82f45cf217393abda4f431d758ab3b498fd13b1a72_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_22c825d663619ce6c2f600deef5d64b195924308311b61282020716e4d5d1cb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c825d663619ce6c2f600deef5d64b195924308311b61282020716e4d5d1cb3->enter($__internal_22c825d663619ce6c2f600deef5d64b195924308311b61282020716e4d5d1cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f058099d22431b1fb140446f4839f058d68ecd304a688160ec75e537a474b6ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f058099d22431b1fb140446f4839f058d68ecd304a688160ec75e537a474b6ed->enter($__internal_f058099d22431b1fb140446f4839f058d68ecd304a688160ec75e537a474b6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f058099d22431b1fb140446f4839f058d68ecd304a688160ec75e537a474b6ed->leave($__internal_f058099d22431b1fb140446f4839f058d68ecd304a688160ec75e537a474b6ed_prof);

        
        $__internal_22c825d663619ce6c2f600deef5d64b195924308311b61282020716e4d5d1cb3->leave($__internal_22c825d663619ce6c2f600deef5d64b195924308311b61282020716e4d5d1cb3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8ab3b7556321174a1abc3d8bf209e9bab7dc31d5662b5c33dec5e4f812496e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ab3b7556321174a1abc3d8bf209e9bab7dc31d5662b5c33dec5e4f812496e0->enter($__internal_f8ab3b7556321174a1abc3d8bf209e9bab7dc31d5662b5c33dec5e4f812496e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36ebf31af62158c53df81be1baca7291dde99b616cdcfb30470800d3d534c28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ebf31af62158c53df81be1baca7291dde99b616cdcfb30470800d3d534c28d->enter($__internal_36ebf31af62158c53df81be1baca7291dde99b616cdcfb30470800d3d534c28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_36ebf31af62158c53df81be1baca7291dde99b616cdcfb30470800d3d534c28d->leave($__internal_36ebf31af62158c53df81be1baca7291dde99b616cdcfb30470800d3d534c28d_prof);

        
        $__internal_f8ab3b7556321174a1abc3d8bf209e9bab7dc31d5662b5c33dec5e4f812496e0->leave($__internal_f8ab3b7556321174a1abc3d8bf209e9bab7dc31d5662b5c33dec5e4f812496e0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
