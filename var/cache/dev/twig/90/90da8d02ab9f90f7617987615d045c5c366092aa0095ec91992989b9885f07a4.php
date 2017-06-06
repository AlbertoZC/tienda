<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0fd258d5cd90e6569d1ab61f7a8b5064101977573920a7e0c68993aed9a371c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_ce6357ef7e6b5167a1bde8bb59b14525aa75f0dc8dfc0a62f63845567bcec2eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce6357ef7e6b5167a1bde8bb59b14525aa75f0dc8dfc0a62f63845567bcec2eb->enter($__internal_ce6357ef7e6b5167a1bde8bb59b14525aa75f0dc8dfc0a62f63845567bcec2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b0af1c4a73031f84f4f854db5a0ff9640e5fa229925e988920685a6f33d0dab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0af1c4a73031f84f4f854db5a0ff9640e5fa229925e988920685a6f33d0dab4->enter($__internal_b0af1c4a73031f84f4f854db5a0ff9640e5fa229925e988920685a6f33d0dab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce6357ef7e6b5167a1bde8bb59b14525aa75f0dc8dfc0a62f63845567bcec2eb->leave($__internal_ce6357ef7e6b5167a1bde8bb59b14525aa75f0dc8dfc0a62f63845567bcec2eb_prof);

        
        $__internal_b0af1c4a73031f84f4f854db5a0ff9640e5fa229925e988920685a6f33d0dab4->leave($__internal_b0af1c4a73031f84f4f854db5a0ff9640e5fa229925e988920685a6f33d0dab4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4752642f760cd7823b5d579ee4c10bcb8c77df69dd7805ea677ff27dfc6ff2cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4752642f760cd7823b5d579ee4c10bcb8c77df69dd7805ea677ff27dfc6ff2cb->enter($__internal_4752642f760cd7823b5d579ee4c10bcb8c77df69dd7805ea677ff27dfc6ff2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4d14bb6aa11a9f95d1eb8ed63243b92bf8c35bbb76d5443a0684e7938b7c34ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d14bb6aa11a9f95d1eb8ed63243b92bf8c35bbb76d5443a0684e7938b7c34ac->enter($__internal_4d14bb6aa11a9f95d1eb8ed63243b92bf8c35bbb76d5443a0684e7938b7c34ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4d14bb6aa11a9f95d1eb8ed63243b92bf8c35bbb76d5443a0684e7938b7c34ac->leave($__internal_4d14bb6aa11a9f95d1eb8ed63243b92bf8c35bbb76d5443a0684e7938b7c34ac_prof);

        
        $__internal_4752642f760cd7823b5d579ee4c10bcb8c77df69dd7805ea677ff27dfc6ff2cb->leave($__internal_4752642f760cd7823b5d579ee4c10bcb8c77df69dd7805ea677ff27dfc6ff2cb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2dc952a6f59928eddd1c73fe4b57af20b765323778b68d89e27644ba94a24ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2dc952a6f59928eddd1c73fe4b57af20b765323778b68d89e27644ba94a24ae->enter($__internal_d2dc952a6f59928eddd1c73fe4b57af20b765323778b68d89e27644ba94a24ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1a49af7959383a50ff411c3644fd4a81866bf25e5045ee85e8ad3eeffb8a63f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a49af7959383a50ff411c3644fd4a81866bf25e5045ee85e8ad3eeffb8a63f9->enter($__internal_1a49af7959383a50ff411c3644fd4a81866bf25e5045ee85e8ad3eeffb8a63f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1a49af7959383a50ff411c3644fd4a81866bf25e5045ee85e8ad3eeffb8a63f9->leave($__internal_1a49af7959383a50ff411c3644fd4a81866bf25e5045ee85e8ad3eeffb8a63f9_prof);

        
        $__internal_d2dc952a6f59928eddd1c73fe4b57af20b765323778b68d89e27644ba94a24ae->leave($__internal_d2dc952a6f59928eddd1c73fe4b57af20b765323778b68d89e27644ba94a24ae_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_629efad1097185a4bca7ba5a5c3acd5d6c98e2315b0cae94ab8a8255ecf7a9de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_629efad1097185a4bca7ba5a5c3acd5d6c98e2315b0cae94ab8a8255ecf7a9de->enter($__internal_629efad1097185a4bca7ba5a5c3acd5d6c98e2315b0cae94ab8a8255ecf7a9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_de9a89bc8f91005175ee634dfdb0b45a9d51f963df5f26830e6750e9d0bf44c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9a89bc8f91005175ee634dfdb0b45a9d51f963df5f26830e6750e9d0bf44c6->enter($__internal_de9a89bc8f91005175ee634dfdb0b45a9d51f963df5f26830e6750e9d0bf44c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_de9a89bc8f91005175ee634dfdb0b45a9d51f963df5f26830e6750e9d0bf44c6->leave($__internal_de9a89bc8f91005175ee634dfdb0b45a9d51f963df5f26830e6750e9d0bf44c6_prof);

        
        $__internal_629efad1097185a4bca7ba5a5c3acd5d6c98e2315b0cae94ab8a8255ecf7a9de->leave($__internal_629efad1097185a4bca7ba5a5c3acd5d6c98e2315b0cae94ab8a8255ecf7a9de_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
