<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_d97ad0b7db000e73054c53f19b845681432a7563cd7b7fb402ca1d07f967724a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18dcb92f05c89da7b31109f0106a63d0607d742521ba680f6b40bdffba200ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18dcb92f05c89da7b31109f0106a63d0607d742521ba680f6b40bdffba200ef0->enter($__internal_18dcb92f05c89da7b31109f0106a63d0607d742521ba680f6b40bdffba200ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_89e7fb2312b09ff9e7c5f1bce39c209e8d8fccdafbc25e777a630d6f5622376a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e7fb2312b09ff9e7c5f1bce39c209e8d8fccdafbc25e777a630d6f5622376a->enter($__internal_89e7fb2312b09ff9e7c5f1bce39c209e8d8fccdafbc25e777a630d6f5622376a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18dcb92f05c89da7b31109f0106a63d0607d742521ba680f6b40bdffba200ef0->leave($__internal_18dcb92f05c89da7b31109f0106a63d0607d742521ba680f6b40bdffba200ef0_prof);

        
        $__internal_89e7fb2312b09ff9e7c5f1bce39c209e8d8fccdafbc25e777a630d6f5622376a->leave($__internal_89e7fb2312b09ff9e7c5f1bce39c209e8d8fccdafbc25e777a630d6f5622376a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_28b7a2c20fa2b5fbe2ccb0b5a099fa3ff589035b7c6ef7b6606f5191111c289e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b7a2c20fa2b5fbe2ccb0b5a099fa3ff589035b7c6ef7b6606f5191111c289e->enter($__internal_28b7a2c20fa2b5fbe2ccb0b5a099fa3ff589035b7c6ef7b6606f5191111c289e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ae9ddcd113f206b073933632258f063bdaa5b08bc554a2b26c7524bdc6037189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9ddcd113f206b073933632258f063bdaa5b08bc554a2b26c7524bdc6037189->enter($__internal_ae9ddcd113f206b073933632258f063bdaa5b08bc554a2b26c7524bdc6037189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ae9ddcd113f206b073933632258f063bdaa5b08bc554a2b26c7524bdc6037189->leave($__internal_ae9ddcd113f206b073933632258f063bdaa5b08bc554a2b26c7524bdc6037189_prof);

        
        $__internal_28b7a2c20fa2b5fbe2ccb0b5a099fa3ff589035b7c6ef7b6606f5191111c289e->leave($__internal_28b7a2c20fa2b5fbe2ccb0b5a099fa3ff589035b7c6ef7b6606f5191111c289e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_630030c0425230966c4991095eb8d87389244bd75c18e81c9c3a4bc5f5a17b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_630030c0425230966c4991095eb8d87389244bd75c18e81c9c3a4bc5f5a17b83->enter($__internal_630030c0425230966c4991095eb8d87389244bd75c18e81c9c3a4bc5f5a17b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_966b6632ec675c27be02a23c634452db051e1b196ac4f3b4fd7948f8618aac89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_966b6632ec675c27be02a23c634452db051e1b196ac4f3b4fd7948f8618aac89->enter($__internal_966b6632ec675c27be02a23c634452db051e1b196ac4f3b4fd7948f8618aac89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_966b6632ec675c27be02a23c634452db051e1b196ac4f3b4fd7948f8618aac89->leave($__internal_966b6632ec675c27be02a23c634452db051e1b196ac4f3b4fd7948f8618aac89_prof);

        
        $__internal_630030c0425230966c4991095eb8d87389244bd75c18e81c9c3a4bc5f5a17b83->leave($__internal_630030c0425230966c4991095eb8d87389244bd75c18e81c9c3a4bc5f5a17b83_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
