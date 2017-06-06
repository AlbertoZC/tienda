<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_067f4e2b1ed9b8fc8579ebafbadba23a6828395efefd8dffe93e2372d6164a9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_9034a0d6e95c14255f5a84e54c191c84b82dc81207218c051143a2a9cacd17fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9034a0d6e95c14255f5a84e54c191c84b82dc81207218c051143a2a9cacd17fb->enter($__internal_9034a0d6e95c14255f5a84e54c191c84b82dc81207218c051143a2a9cacd17fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_bfa1e267456adf9449588926afbaf05e30c6b740103c08ffbbaca8fd37e52b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa1e267456adf9449588926afbaf05e30c6b740103c08ffbbaca8fd37e52b66->enter($__internal_bfa1e267456adf9449588926afbaf05e30c6b740103c08ffbbaca8fd37e52b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9034a0d6e95c14255f5a84e54c191c84b82dc81207218c051143a2a9cacd17fb->leave($__internal_9034a0d6e95c14255f5a84e54c191c84b82dc81207218c051143a2a9cacd17fb_prof);

        
        $__internal_bfa1e267456adf9449588926afbaf05e30c6b740103c08ffbbaca8fd37e52b66->leave($__internal_bfa1e267456adf9449588926afbaf05e30c6b740103c08ffbbaca8fd37e52b66_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_870daa6aaebcc30f691f518560795987b1bc4e295d54adabd4bf0a8543e11d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_870daa6aaebcc30f691f518560795987b1bc4e295d54adabd4bf0a8543e11d73->enter($__internal_870daa6aaebcc30f691f518560795987b1bc4e295d54adabd4bf0a8543e11d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10a1e9ea39caeb06af828898ebb4a6bccdc256f291b913acc2031601488271d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a1e9ea39caeb06af828898ebb4a6bccdc256f291b913acc2031601488271d4->enter($__internal_10a1e9ea39caeb06af828898ebb4a6bccdc256f291b913acc2031601488271d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_10a1e9ea39caeb06af828898ebb4a6bccdc256f291b913acc2031601488271d4->leave($__internal_10a1e9ea39caeb06af828898ebb4a6bccdc256f291b913acc2031601488271d4_prof);

        
        $__internal_870daa6aaebcc30f691f518560795987b1bc4e295d54adabd4bf0a8543e11d73->leave($__internal_870daa6aaebcc30f691f518560795987b1bc4e295d54adabd4bf0a8543e11d73_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e12d3f2b32055bee10644f130fec85d76516d5b313b148cd89e3bd9bc2969a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e12d3f2b32055bee10644f130fec85d76516d5b313b148cd89e3bd9bc2969a8->enter($__internal_5e12d3f2b32055bee10644f130fec85d76516d5b313b148cd89e3bd9bc2969a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3b64485e608b85aba0f7f50304ccda188178300994cb3771260d88344218836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b64485e608b85aba0f7f50304ccda188178300994cb3771260d88344218836->enter($__internal_c3b64485e608b85aba0f7f50304ccda188178300994cb3771260d88344218836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c3b64485e608b85aba0f7f50304ccda188178300994cb3771260d88344218836->leave($__internal_c3b64485e608b85aba0f7f50304ccda188178300994cb3771260d88344218836_prof);

        
        $__internal_5e12d3f2b32055bee10644f130fec85d76516d5b313b148cd89e3bd9bc2969a8->leave($__internal_5e12d3f2b32055bee10644f130fec85d76516d5b313b148cd89e3bd9bc2969a8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
