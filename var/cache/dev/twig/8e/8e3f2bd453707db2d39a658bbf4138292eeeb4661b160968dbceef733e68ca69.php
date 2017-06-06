<?php

/* admin/new.html.twig */
class __TwigTemplate_2ad7ab518131401db6fe285ff189f777e339ae1957eec5e29997459c5ad3dbf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/new.html.twig", 1);
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
        $__internal_2040e5631e56dcb809e4d91203b3c93741ac6c101cfbf2e99b95a3a9f76740b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2040e5631e56dcb809e4d91203b3c93741ac6c101cfbf2e99b95a3a9f76740b0->enter($__internal_2040e5631e56dcb809e4d91203b3c93741ac6c101cfbf2e99b95a3a9f76740b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new.html.twig"));

        $__internal_d2be1adf9e8f523d5ef2868455a4b08795f95fdf3fd5a3234f67b6aa7590265c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2be1adf9e8f523d5ef2868455a4b08795f95fdf3fd5a3234f67b6aa7590265c->enter($__internal_d2be1adf9e8f523d5ef2868455a4b08795f95fdf3fd5a3234f67b6aa7590265c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2040e5631e56dcb809e4d91203b3c93741ac6c101cfbf2e99b95a3a9f76740b0->leave($__internal_2040e5631e56dcb809e4d91203b3c93741ac6c101cfbf2e99b95a3a9f76740b0_prof);

        
        $__internal_d2be1adf9e8f523d5ef2868455a4b08795f95fdf3fd5a3234f67b6aa7590265c->leave($__internal_d2be1adf9e8f523d5ef2868455a4b08795f95fdf3fd5a3234f67b6aa7590265c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_435719637b01cc5b8928992907bcccec02d9c95fbff76df08518da5a419b0532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_435719637b01cc5b8928992907bcccec02d9c95fbff76df08518da5a419b0532->enter($__internal_435719637b01cc5b8928992907bcccec02d9c95fbff76df08518da5a419b0532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ffe1bc6379b7f166b2670b5404badd8191e6f6a12bd38e2ce1f8a9cf7d2c81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ffe1bc6379b7f166b2670b5404badd8191e6f6a12bd38e2ce1f8a9cf7d2c81f->enter($__internal_0ffe1bc6379b7f166b2670b5404badd8191e6f6a12bd38e2ce1f8a9cf7d2c81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Admin creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0ffe1bc6379b7f166b2670b5404badd8191e6f6a12bd38e2ce1f8a9cf7d2c81f->leave($__internal_0ffe1bc6379b7f166b2670b5404badd8191e6f6a12bd38e2ce1f8a9cf7d2c81f_prof);

        
        $__internal_435719637b01cc5b8928992907bcccec02d9c95fbff76df08518da5a419b0532->leave($__internal_435719637b01cc5b8928992907bcccec02d9c95fbff76df08518da5a419b0532_prof);

    }

    public function getTemplateName()
    {
        return "admin/new.html.twig";
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
    <h1>Admin creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "admin/new.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\app\\Resources\\views\\admin\\new.html.twig");
    }
}
