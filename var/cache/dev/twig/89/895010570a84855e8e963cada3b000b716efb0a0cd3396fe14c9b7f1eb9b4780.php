<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d0ea04b0681df5be4f4372891dbf57cd265f736c45c771d50e480f083206011b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b35f4d8c7e05f16fb0e79bd0ba4a489747b8f4ef25b7f8f5e28aea95f33b7bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b35f4d8c7e05f16fb0e79bd0ba4a489747b8f4ef25b7f8f5e28aea95f33b7bee->enter($__internal_b35f4d8c7e05f16fb0e79bd0ba4a489747b8f4ef25b7f8f5e28aea95f33b7bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2aa14fd9b6256ff03eb16495e3b8a03e123872715913eee9d265300d6dd22c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa14fd9b6256ff03eb16495e3b8a03e123872715913eee9d265300d6dd22c6a->enter($__internal_2aa14fd9b6256ff03eb16495e3b8a03e123872715913eee9d265300d6dd22c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b35f4d8c7e05f16fb0e79bd0ba4a489747b8f4ef25b7f8f5e28aea95f33b7bee->leave($__internal_b35f4d8c7e05f16fb0e79bd0ba4a489747b8f4ef25b7f8f5e28aea95f33b7bee_prof);

        
        $__internal_2aa14fd9b6256ff03eb16495e3b8a03e123872715913eee9d265300d6dd22c6a->leave($__internal_2aa14fd9b6256ff03eb16495e3b8a03e123872715913eee9d265300d6dd22c6a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2c1ca1dacf0403c7b80bb5311bba2355a802d744f078052333e0b31cab5f4cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1ca1dacf0403c7b80bb5311bba2355a802d744f078052333e0b31cab5f4cd1->enter($__internal_2c1ca1dacf0403c7b80bb5311bba2355a802d744f078052333e0b31cab5f4cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_afe5f5dc531f2b54c89d368f2418ab28fefa4fadaa9bfc9b1b58fd0de113e438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe5f5dc531f2b54c89d368f2418ab28fefa4fadaa9bfc9b1b58fd0de113e438->enter($__internal_afe5f5dc531f2b54c89d368f2418ab28fefa4fadaa9bfc9b1b58fd0de113e438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_afe5f5dc531f2b54c89d368f2418ab28fefa4fadaa9bfc9b1b58fd0de113e438->leave($__internal_afe5f5dc531f2b54c89d368f2418ab28fefa4fadaa9bfc9b1b58fd0de113e438_prof);

        
        $__internal_2c1ca1dacf0403c7b80bb5311bba2355a802d744f078052333e0b31cab5f4cd1->leave($__internal_2c1ca1dacf0403c7b80bb5311bba2355a802d744f078052333e0b31cab5f4cd1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a51e165ed89a00bc8c509f45f2b628ae2e4666a27dd74acd197671eb720c3c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a51e165ed89a00bc8c509f45f2b628ae2e4666a27dd74acd197671eb720c3c1c->enter($__internal_a51e165ed89a00bc8c509f45f2b628ae2e4666a27dd74acd197671eb720c3c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_765536e044be8c5513546020d6d7d873ca3d696719dc7cb2050c06cf590eddf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765536e044be8c5513546020d6d7d873ca3d696719dc7cb2050c06cf590eddf0->enter($__internal_765536e044be8c5513546020d6d7d873ca3d696719dc7cb2050c06cf590eddf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_765536e044be8c5513546020d6d7d873ca3d696719dc7cb2050c06cf590eddf0->leave($__internal_765536e044be8c5513546020d6d7d873ca3d696719dc7cb2050c06cf590eddf0_prof);

        
        $__internal_a51e165ed89a00bc8c509f45f2b628ae2e4666a27dd74acd197671eb720c3c1c->leave($__internal_a51e165ed89a00bc8c509f45f2b628ae2e4666a27dd74acd197671eb720c3c1c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d7485c49bae83d9c9f4250c8e53d30428f7256817d9824befb286c2c7e5f343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d7485c49bae83d9c9f4250c8e53d30428f7256817d9824befb286c2c7e5f343->enter($__internal_3d7485c49bae83d9c9f4250c8e53d30428f7256817d9824befb286c2c7e5f343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3d03a4f19bda4a7489e94ff7b151d5f8bde4061ba037f3fd096a70aa6dde3027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d03a4f19bda4a7489e94ff7b151d5f8bde4061ba037f3fd096a70aa6dde3027->enter($__internal_3d03a4f19bda4a7489e94ff7b151d5f8bde4061ba037f3fd096a70aa6dde3027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3d03a4f19bda4a7489e94ff7b151d5f8bde4061ba037f3fd096a70aa6dde3027->leave($__internal_3d03a4f19bda4a7489e94ff7b151d5f8bde4061ba037f3fd096a70aa6dde3027_prof);

        
        $__internal_3d7485c49bae83d9c9f4250c8e53d30428f7256817d9824befb286c2c7e5f343->leave($__internal_3d7485c49bae83d9c9f4250c8e53d30428f7256817d9824befb286c2c7e5f343_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
