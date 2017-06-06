<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_f307fce9dceb2f37576b3a6f8ec15111cf802fdbbb435bb1bfcd2b1225c58baa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_c216e690db02fd6759110fa79311c09a084eed5c97edfbe443716235d5366411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c216e690db02fd6759110fa79311c09a084eed5c97edfbe443716235d5366411->enter($__internal_c216e690db02fd6759110fa79311c09a084eed5c97edfbe443716235d5366411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_166e91581d0430867ce2d3ae58796452a60e5be78f7c5907d3643ba2076a3870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166e91581d0430867ce2d3ae58796452a60e5be78f7c5907d3643ba2076a3870->enter($__internal_166e91581d0430867ce2d3ae58796452a60e5be78f7c5907d3643ba2076a3870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c216e690db02fd6759110fa79311c09a084eed5c97edfbe443716235d5366411->leave($__internal_c216e690db02fd6759110fa79311c09a084eed5c97edfbe443716235d5366411_prof);

        
        $__internal_166e91581d0430867ce2d3ae58796452a60e5be78f7c5907d3643ba2076a3870->leave($__internal_166e91581d0430867ce2d3ae58796452a60e5be78f7c5907d3643ba2076a3870_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d8a55fcb9ad2874a3a000d1d47900662fc2924990476972b7c6e2b20847ac7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a55fcb9ad2874a3a000d1d47900662fc2924990476972b7c6e2b20847ac7f2->enter($__internal_d8a55fcb9ad2874a3a000d1d47900662fc2924990476972b7c6e2b20847ac7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b9b4485c1034ee37215a69f13172d1aea0d2041b782564c123de02658ddc5472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b4485c1034ee37215a69f13172d1aea0d2041b782564c123de02658ddc5472->enter($__internal_b9b4485c1034ee37215a69f13172d1aea0d2041b782564c123de02658ddc5472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b9b4485c1034ee37215a69f13172d1aea0d2041b782564c123de02658ddc5472->leave($__internal_b9b4485c1034ee37215a69f13172d1aea0d2041b782564c123de02658ddc5472_prof);

        
        $__internal_d8a55fcb9ad2874a3a000d1d47900662fc2924990476972b7c6e2b20847ac7f2->leave($__internal_d8a55fcb9ad2874a3a000d1d47900662fc2924990476972b7c6e2b20847ac7f2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
