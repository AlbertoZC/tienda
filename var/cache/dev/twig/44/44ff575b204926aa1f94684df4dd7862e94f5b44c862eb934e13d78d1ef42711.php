<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_a9f738c332b9605873b8ff5939ed971ac3086e0f429ae3f519c374f093393833 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_743b8191e2be24e606051173abd892c1364b8e8f804622e07b482f4464c32027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_743b8191e2be24e606051173abd892c1364b8e8f804622e07b482f4464c32027->enter($__internal_743b8191e2be24e606051173abd892c1364b8e8f804622e07b482f4464c32027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_0b1aa0f49d52153da57631dc12a5b338e907117d56ef41e97d6c531a961db267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b1aa0f49d52153da57631dc12a5b338e907117d56ef41e97d6c531a961db267->enter($__internal_0b1aa0f49d52153da57631dc12a5b338e907117d56ef41e97d6c531a961db267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_743b8191e2be24e606051173abd892c1364b8e8f804622e07b482f4464c32027->leave($__internal_743b8191e2be24e606051173abd892c1364b8e8f804622e07b482f4464c32027_prof);

        
        $__internal_0b1aa0f49d52153da57631dc12a5b338e907117d56ef41e97d6c531a961db267->leave($__internal_0b1aa0f49d52153da57631dc12a5b338e907117d56ef41e97d6c531a961db267_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a31ab954b8fff3c55a43635acf338f3e37e0b253fe8e10eba68ec0d803ed450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a31ab954b8fff3c55a43635acf338f3e37e0b253fe8e10eba68ec0d803ed450->enter($__internal_1a31ab954b8fff3c55a43635acf338f3e37e0b253fe8e10eba68ec0d803ed450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_91b177674983f9587ff9440ad3ebad6c45de506bf535ae22cb89194f81046f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b177674983f9587ff9440ad3ebad6c45de506bf535ae22cb89194f81046f12->enter($__internal_91b177674983f9587ff9440ad3ebad6c45de506bf535ae22cb89194f81046f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_91b177674983f9587ff9440ad3ebad6c45de506bf535ae22cb89194f81046f12->leave($__internal_91b177674983f9587ff9440ad3ebad6c45de506bf535ae22cb89194f81046f12_prof);

        
        $__internal_1a31ab954b8fff3c55a43635acf338f3e37e0b253fe8e10eba68ec0d803ed450->leave($__internal_1a31ab954b8fff3c55a43635acf338f3e37e0b253fe8e10eba68ec0d803ed450_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
