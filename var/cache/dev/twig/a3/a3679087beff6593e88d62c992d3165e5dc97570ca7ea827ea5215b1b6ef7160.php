<?php

/* producto/new.html.twig */
class __TwigTemplate_196163b66e810743b56f56b4495a969cabc679c1b09a64d39e9ca1504b2d23fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "producto/new.html.twig", 1);
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
        $__internal_f389aae6db83c997a98f0fd0b3b4f31ba1935ddf6af9d958d7ec555c5e5bcdca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f389aae6db83c997a98f0fd0b3b4f31ba1935ddf6af9d958d7ec555c5e5bcdca->enter($__internal_f389aae6db83c997a98f0fd0b3b4f31ba1935ddf6af9d958d7ec555c5e5bcdca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "producto/new.html.twig"));

        $__internal_db71617a4aa3f243c1eb68a7c73f826768b6758797730af486db79de8b5649da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db71617a4aa3f243c1eb68a7c73f826768b6758797730af486db79de8b5649da->enter($__internal_db71617a4aa3f243c1eb68a7c73f826768b6758797730af486db79de8b5649da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "producto/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f389aae6db83c997a98f0fd0b3b4f31ba1935ddf6af9d958d7ec555c5e5bcdca->leave($__internal_f389aae6db83c997a98f0fd0b3b4f31ba1935ddf6af9d958d7ec555c5e5bcdca_prof);

        
        $__internal_db71617a4aa3f243c1eb68a7c73f826768b6758797730af486db79de8b5649da->leave($__internal_db71617a4aa3f243c1eb68a7c73f826768b6758797730af486db79de8b5649da_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff7b28423dc8cd8e7f99e8b31f8950bbd5c57de3e1e679050656a5cfab3ddb80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7b28423dc8cd8e7f99e8b31f8950bbd5c57de3e1e679050656a5cfab3ddb80->enter($__internal_ff7b28423dc8cd8e7f99e8b31f8950bbd5c57de3e1e679050656a5cfab3ddb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba8947a6c149e9de51cf88980961262bb7c6a8e8e2dd69684ff28beb37007174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8947a6c149e9de51cf88980961262bb7c6a8e8e2dd69684ff28beb37007174->enter($__internal_ba8947a6c149e9de51cf88980961262bb7c6a8e8e2dd69684ff28beb37007174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Producto creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_ba8947a6c149e9de51cf88980961262bb7c6a8e8e2dd69684ff28beb37007174->leave($__internal_ba8947a6c149e9de51cf88980961262bb7c6a8e8e2dd69684ff28beb37007174_prof);

        
        $__internal_ff7b28423dc8cd8e7f99e8b31f8950bbd5c57de3e1e679050656a5cfab3ddb80->leave($__internal_ff7b28423dc8cd8e7f99e8b31f8950bbd5c57de3e1e679050656a5cfab3ddb80_prof);

    }

    public function getTemplateName()
    {
        return "producto/new.html.twig";
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
    <h1>Producto creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('producto_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "producto/new.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\app\\Resources\\views\\producto\\new.html.twig");
    }
}
