<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_94e782c3b132e4e8193df6909b76fdba0be27a16f85afefcdbb50ab45fc8292b extends Twig_Template
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
        $__internal_62a6afb033b593b6cfab46dfacfbf9760c0e11da49ef1e36870c8ff1f4754c42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62a6afb033b593b6cfab46dfacfbf9760c0e11da49ef1e36870c8ff1f4754c42->enter($__internal_62a6afb033b593b6cfab46dfacfbf9760c0e11da49ef1e36870c8ff1f4754c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_443e9da955416ec70cfe03cea3aec7ca3d63e7f6b566dd57eb8d937873907fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443e9da955416ec70cfe03cea3aec7ca3d63e7f6b566dd57eb8d937873907fe6->enter($__internal_443e9da955416ec70cfe03cea3aec7ca3d63e7f6b566dd57eb8d937873907fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_62a6afb033b593b6cfab46dfacfbf9760c0e11da49ef1e36870c8ff1f4754c42->leave($__internal_62a6afb033b593b6cfab46dfacfbf9760c0e11da49ef1e36870c8ff1f4754c42_prof);

        
        $__internal_443e9da955416ec70cfe03cea3aec7ca3d63e7f6b566dd57eb8d937873907fe6->leave($__internal_443e9da955416ec70cfe03cea3aec7ca3d63e7f6b566dd57eb8d937873907fe6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
