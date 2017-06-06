<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_76d0a44b83d8cfb53e7b9fb7dfc74202a36c63781c8cea30dcfe613ad9314a6f extends Twig_Template
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
        $__internal_5982713a260215f75db922186d255536a9e6daff9c1c6e26b3feac41c842699c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5982713a260215f75db922186d255536a9e6daff9c1c6e26b3feac41c842699c->enter($__internal_5982713a260215f75db922186d255536a9e6daff9c1c6e26b3feac41c842699c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_d71756d25cc0911366e86a1207fc84bd474666d2de18f3aa905354143be53925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71756d25cc0911366e86a1207fc84bd474666d2de18f3aa905354143be53925->enter($__internal_d71756d25cc0911366e86a1207fc84bd474666d2de18f3aa905354143be53925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5982713a260215f75db922186d255536a9e6daff9c1c6e26b3feac41c842699c->leave($__internal_5982713a260215f75db922186d255536a9e6daff9c1c6e26b3feac41c842699c_prof);

        
        $__internal_d71756d25cc0911366e86a1207fc84bd474666d2de18f3aa905354143be53925->leave($__internal_d71756d25cc0911366e86a1207fc84bd474666d2de18f3aa905354143be53925_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
