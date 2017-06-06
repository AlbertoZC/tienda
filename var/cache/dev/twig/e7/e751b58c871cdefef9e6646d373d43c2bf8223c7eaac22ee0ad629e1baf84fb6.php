<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_3d0c933cf3f16c68c308e84e4dd784fa58d7c8e0a43a44712199a7d91c004a02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfb158dffae251d7c9f1a4c608a79d774155679ee0fb5c14bcb560a7d70c1257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb158dffae251d7c9f1a4c608a79d774155679ee0fb5c14bcb560a7d70c1257->enter($__internal_bfb158dffae251d7c9f1a4c608a79d774155679ee0fb5c14bcb560a7d70c1257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6238a59ddab74a483dddaacb38b050358f76074b3e3695f7f688fe76b055e24a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6238a59ddab74a483dddaacb38b050358f76074b3e3695f7f688fe76b055e24a->enter($__internal_6238a59ddab74a483dddaacb38b050358f76074b3e3695f7f688fe76b055e24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfb158dffae251d7c9f1a4c608a79d774155679ee0fb5c14bcb560a7d70c1257->leave($__internal_bfb158dffae251d7c9f1a4c608a79d774155679ee0fb5c14bcb560a7d70c1257_prof);

        
        $__internal_6238a59ddab74a483dddaacb38b050358f76074b3e3695f7f688fe76b055e24a->leave($__internal_6238a59ddab74a483dddaacb38b050358f76074b3e3695f7f688fe76b055e24a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9236e6633da1362497a69f6f66993d885bbb4abac8408fc54d6da3068a047e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9236e6633da1362497a69f6f66993d885bbb4abac8408fc54d6da3068a047e14->enter($__internal_9236e6633da1362497a69f6f66993d885bbb4abac8408fc54d6da3068a047e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a7dc74be67138bc77c751c9b936e9af0d8e65448d37ad14351561b9ee146e3ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7dc74be67138bc77c751c9b936e9af0d8e65448d37ad14351561b9ee146e3ad->enter($__internal_a7dc74be67138bc77c751c9b936e9af0d8e65448d37ad14351561b9ee146e3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a7dc74be67138bc77c751c9b936e9af0d8e65448d37ad14351561b9ee146e3ad->leave($__internal_a7dc74be67138bc77c751c9b936e9af0d8e65448d37ad14351561b9ee146e3ad_prof);

        
        $__internal_9236e6633da1362497a69f6f66993d885bbb4abac8408fc54d6da3068a047e14->leave($__internal_9236e6633da1362497a69f6f66993d885bbb4abac8408fc54d6da3068a047e14_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
