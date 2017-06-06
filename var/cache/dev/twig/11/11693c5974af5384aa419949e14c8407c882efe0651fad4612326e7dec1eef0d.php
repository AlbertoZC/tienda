<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e921e34bf8ed02db42a195416909e3edabf80b0f44593c2f2b817c8cd17a5dc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_037571beafd3684dd8fd3357596c657845a9aaac5bf3132800d450d3d406356f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037571beafd3684dd8fd3357596c657845a9aaac5bf3132800d450d3d406356f->enter($__internal_037571beafd3684dd8fd3357596c657845a9aaac5bf3132800d450d3d406356f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_544051a39aca818a2bb4a0918fce8c026f073d562418745f84661b60dd26c2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544051a39aca818a2bb4a0918fce8c026f073d562418745f84661b60dd26c2b6->enter($__internal_544051a39aca818a2bb4a0918fce8c026f073d562418745f84661b60dd26c2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_037571beafd3684dd8fd3357596c657845a9aaac5bf3132800d450d3d406356f->leave($__internal_037571beafd3684dd8fd3357596c657845a9aaac5bf3132800d450d3d406356f_prof);

        
        $__internal_544051a39aca818a2bb4a0918fce8c026f073d562418745f84661b60dd26c2b6->leave($__internal_544051a39aca818a2bb4a0918fce8c026f073d562418745f84661b60dd26c2b6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6c211c3bf8a1d9b9e265df5ea63d06ac3a84ed77a886bc3fd68922abb1dfeb4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c211c3bf8a1d9b9e265df5ea63d06ac3a84ed77a886bc3fd68922abb1dfeb4c->enter($__internal_6c211c3bf8a1d9b9e265df5ea63d06ac3a84ed77a886bc3fd68922abb1dfeb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8adcf43233afb435602f3890859cfec605433df26934c797557a914300a2a00a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8adcf43233afb435602f3890859cfec605433df26934c797557a914300a2a00a->enter($__internal_8adcf43233afb435602f3890859cfec605433df26934c797557a914300a2a00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8adcf43233afb435602f3890859cfec605433df26934c797557a914300a2a00a->leave($__internal_8adcf43233afb435602f3890859cfec605433df26934c797557a914300a2a00a_prof);

        
        $__internal_6c211c3bf8a1d9b9e265df5ea63d06ac3a84ed77a886bc3fd68922abb1dfeb4c->leave($__internal_6c211c3bf8a1d9b9e265df5ea63d06ac3a84ed77a886bc3fd68922abb1dfeb4c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d86651bff1162485a27ea1c190f41f621332e399b47a5b8cfd78ee47617d172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d86651bff1162485a27ea1c190f41f621332e399b47a5b8cfd78ee47617d172->enter($__internal_1d86651bff1162485a27ea1c190f41f621332e399b47a5b8cfd78ee47617d172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e26460290b5567363f2e8bd3e33f6595eba0444c4feb3d74b7502dad2d57dbf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e26460290b5567363f2e8bd3e33f6595eba0444c4feb3d74b7502dad2d57dbf8->enter($__internal_e26460290b5567363f2e8bd3e33f6595eba0444c4feb3d74b7502dad2d57dbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e26460290b5567363f2e8bd3e33f6595eba0444c4feb3d74b7502dad2d57dbf8->leave($__internal_e26460290b5567363f2e8bd3e33f6595eba0444c4feb3d74b7502dad2d57dbf8_prof);

        
        $__internal_1d86651bff1162485a27ea1c190f41f621332e399b47a5b8cfd78ee47617d172->leave($__internal_1d86651bff1162485a27ea1c190f41f621332e399b47a5b8cfd78ee47617d172_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_946b9e96e6bcc84d88bd92d9c633cd90f81bda3fb3a170a0e67fe9961c4fd688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946b9e96e6bcc84d88bd92d9c633cd90f81bda3fb3a170a0e67fe9961c4fd688->enter($__internal_946b9e96e6bcc84d88bd92d9c633cd90f81bda3fb3a170a0e67fe9961c4fd688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2ab26bd81210a552b0cf882759b2ef021bbe6fefb9143434a1cf9a919505eebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab26bd81210a552b0cf882759b2ef021bbe6fefb9143434a1cf9a919505eebc->enter($__internal_2ab26bd81210a552b0cf882759b2ef021bbe6fefb9143434a1cf9a919505eebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2ab26bd81210a552b0cf882759b2ef021bbe6fefb9143434a1cf9a919505eebc->leave($__internal_2ab26bd81210a552b0cf882759b2ef021bbe6fefb9143434a1cf9a919505eebc_prof);

        
        $__internal_946b9e96e6bcc84d88bd92d9c633cd90f81bda3fb3a170a0e67fe9961c4fd688->leave($__internal_946b9e96e6bcc84d88bd92d9c633cd90f81bda3fb3a170a0e67fe9961c4fd688_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
