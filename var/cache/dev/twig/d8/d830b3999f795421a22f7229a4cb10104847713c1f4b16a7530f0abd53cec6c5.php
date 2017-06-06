<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_577890cd89a58c02877e96b96009a6d2eb5a6b0994d624a7ff1d25d2e678e0df extends Twig_Template
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
        $__internal_00c6b76741327cab746feda8c02eb163bf7387d087eeeeeb37912d675e25c472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00c6b76741327cab746feda8c02eb163bf7387d087eeeeeb37912d675e25c472->enter($__internal_00c6b76741327cab746feda8c02eb163bf7387d087eeeeeb37912d675e25c472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_75e83f3b7c9078dbc71d4802a8c3ef715731010e874a1573701759dd8e9e1381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e83f3b7c9078dbc71d4802a8c3ef715731010e874a1573701759dd8e9e1381->enter($__internal_75e83f3b7c9078dbc71d4802a8c3ef715731010e874a1573701759dd8e9e1381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_00c6b76741327cab746feda8c02eb163bf7387d087eeeeeb37912d675e25c472->leave($__internal_00c6b76741327cab746feda8c02eb163bf7387d087eeeeeb37912d675e25c472_prof);

        
        $__internal_75e83f3b7c9078dbc71d4802a8c3ef715731010e874a1573701759dd8e9e1381->leave($__internal_75e83f3b7c9078dbc71d4802a8c3ef715731010e874a1573701759dd8e9e1381_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
