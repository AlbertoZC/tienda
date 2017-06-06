<?php

/* usuario/new.html.twig */
class __TwigTemplate_fc325e471380dfb7ef827a7724d32b42126452f55f1bff07c117cb50d7111ed0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de2cd9f430a0a69a8ae873b2cf744e92a44c762378276475c09e09971f8eeff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de2cd9f430a0a69a8ae873b2cf744e92a44c762378276475c09e09971f8eeff2->enter($__internal_de2cd9f430a0a69a8ae873b2cf744e92a44c762378276475c09e09971f8eeff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $__internal_504a1bce54c63d17394e6dee310a2796c00010c8c06c6dc36e3d57663f372551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504a1bce54c63d17394e6dee310a2796c00010c8c06c6dc36e3d57663f372551->enter($__internal_504a1bce54c63d17394e6dee310a2796c00010c8c06c6dc36e3d57663f372551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de2cd9f430a0a69a8ae873b2cf744e92a44c762378276475c09e09971f8eeff2->leave($__internal_de2cd9f430a0a69a8ae873b2cf744e92a44c762378276475c09e09971f8eeff2_prof);

        
        $__internal_504a1bce54c63d17394e6dee310a2796c00010c8c06c6dc36e3d57663f372551->leave($__internal_504a1bce54c63d17394e6dee310a2796c00010c8c06c6dc36e3d57663f372551_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4b72af6411fcc1c3cbd176ad7a5c9d4b57b2e4e9170adbcf73a50d6950a43a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b72af6411fcc1c3cbd176ad7a5c9d4b57b2e4e9170adbcf73a50d6950a43a6->enter($__internal_f4b72af6411fcc1c3cbd176ad7a5c9d4b57b2e4e9170adbcf73a50d6950a43a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a4f37064860558649ad668f77a072e58166a82f619cf4ee096ffae8a49b4c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4f37064860558649ad668f77a072e58166a82f619cf4ee096ffae8a49b4c91->enter($__internal_3a4f37064860558649ad668f77a072e58166a82f619cf4ee096ffae8a49b4c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuario creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_3a4f37064860558649ad668f77a072e58166a82f619cf4ee096ffae8a49b4c91->leave($__internal_3a4f37064860558649ad668f77a072e58166a82f619cf4ee096ffae8a49b4c91_prof);

        
        $__internal_f4b72af6411fcc1c3cbd176ad7a5c9d4b57b2e4e9170adbcf73a50d6950a43a6->leave($__internal_f4b72af6411fcc1c3cbd176ad7a5c9d4b57b2e4e9170adbcf73a50d6950a43a6_prof);

    }

    public function getTemplateName()
    {
        return "usuario/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Usuario creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('usuario_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "usuario/new.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\app\\Resources\\views\\usuario\\new.html.twig");
    }
}
