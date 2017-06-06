<?php

/* producto/show.html.twig */
class __TwigTemplate_f94caf6af5f80c10591100cea0267a78afbe1f144e23bbe46ad16a75d7e61ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "producto/show.html.twig", 1);
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
        $__internal_a52f535f25bc3e205179f1876ef37421b619ae80ec06ffd4ef87854e7d04791f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a52f535f25bc3e205179f1876ef37421b619ae80ec06ffd4ef87854e7d04791f->enter($__internal_a52f535f25bc3e205179f1876ef37421b619ae80ec06ffd4ef87854e7d04791f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "producto/show.html.twig"));

        $__internal_756b28e77aa86334e61aa1522e6a72dada8b12746d5ef601cc760fe89e5bf46e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756b28e77aa86334e61aa1522e6a72dada8b12746d5ef601cc760fe89e5bf46e->enter($__internal_756b28e77aa86334e61aa1522e6a72dada8b12746d5ef601cc760fe89e5bf46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "producto/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a52f535f25bc3e205179f1876ef37421b619ae80ec06ffd4ef87854e7d04791f->leave($__internal_a52f535f25bc3e205179f1876ef37421b619ae80ec06ffd4ef87854e7d04791f_prof);

        
        $__internal_756b28e77aa86334e61aa1522e6a72dada8b12746d5ef601cc760fe89e5bf46e->leave($__internal_756b28e77aa86334e61aa1522e6a72dada8b12746d5ef601cc760fe89e5bf46e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d6537fe2330db7a501d98d9aa10e54d8eeda86abff3970782a433c543589721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d6537fe2330db7a501d98d9aa10e54d8eeda86abff3970782a433c543589721->enter($__internal_2d6537fe2330db7a501d98d9aa10e54d8eeda86abff3970782a433c543589721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4de3e0f5c6a4db66c16455a853942b71c16fe32668cf34cc1a68a4837bcf56bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de3e0f5c6a4db66c16455a853942b71c16fe32668cf34cc1a68a4837bcf56bd->enter($__internal_4de3e0f5c6a4db66c16455a853942b71c16fe32668cf34cc1a68a4837bcf56bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Producto</h1>

    <table>
        <tbody>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "precio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto_edit", array("id" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4de3e0f5c6a4db66c16455a853942b71c16fe32668cf34cc1a68a4837bcf56bd->leave($__internal_4de3e0f5c6a4db66c16455a853942b71c16fe32668cf34cc1a68a4837bcf56bd_prof);

        
        $__internal_2d6537fe2330db7a501d98d9aa10e54d8eeda86abff3970782a433c543589721->leave($__internal_2d6537fe2330db7a501d98d9aa10e54d8eeda86abff3970782a433c543589721_prof);

    }

    public function getTemplateName()
    {
        return "producto/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Producto</h1>

    <table>
        <tbody>
            <tr>
                <th>Nombre</th>
                <td>{{ producto.nombre }}</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>{{ producto.precio }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ producto.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('producto_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('producto_edit', { 'id': producto.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "producto/show.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\app\\Resources\\views\\producto\\show.html.twig");
    }
}
