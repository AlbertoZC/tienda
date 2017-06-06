<?php

/* producto/index.html.twig */
class __TwigTemplate_4373b4ba59ff1a6d2d2d8c917d804da1ca8a58fe9eec676843bc9f9c7d77167a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "producto/index.html.twig", 1);
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
        $__internal_bed9b34c51aea7a6a8755bfd841c661bb47002e26b3e0c1d9be900f2807a47d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed9b34c51aea7a6a8755bfd841c661bb47002e26b3e0c1d9be900f2807a47d0->enter($__internal_bed9b34c51aea7a6a8755bfd841c661bb47002e26b3e0c1d9be900f2807a47d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "producto/index.html.twig"));

        $__internal_264d4d9f69037f732d0f9462f2f24a7f27d703348ab87f11d1c19964d3d5ec9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264d4d9f69037f732d0f9462f2f24a7f27d703348ab87f11d1c19964d3d5ec9a->enter($__internal_264d4d9f69037f732d0f9462f2f24a7f27d703348ab87f11d1c19964d3d5ec9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "producto/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bed9b34c51aea7a6a8755bfd841c661bb47002e26b3e0c1d9be900f2807a47d0->leave($__internal_bed9b34c51aea7a6a8755bfd841c661bb47002e26b3e0c1d9be900f2807a47d0_prof);

        
        $__internal_264d4d9f69037f732d0f9462f2f24a7f27d703348ab87f11d1c19964d3d5ec9a->leave($__internal_264d4d9f69037f732d0f9462f2f24a7f27d703348ab87f11d1c19964d3d5ec9a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_257da04fd391907d6241bff5c6d1620a3feee27231cbacbef825a18c0959157e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_257da04fd391907d6241bff5c6d1620a3feee27231cbacbef825a18c0959157e->enter($__internal_257da04fd391907d6241bff5c6d1620a3feee27231cbacbef825a18c0959157e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd42cb22bbf9d08b21a6d6d9221cd0694cc834c482e89cde049bcad304b5cbd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd42cb22bbf9d08b21a6d6d9221cd0694cc834c482e89cde049bcad304b5cbd5->enter($__internal_cd42cb22bbf9d08b21a6d6d9221cd0694cc834c482e89cde049bcad304b5cbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Productos list</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto_show", array("id" => $this->getAttribute($context["producto"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto_show", array("id" => $this->getAttribute($context["producto"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto_edit", array("id" => $this->getAttribute($context["producto"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto_new");
        echo "\">Create a new producto</a>
        </li>
    </ul>
";
        
        $__internal_cd42cb22bbf9d08b21a6d6d9221cd0694cc834c482e89cde049bcad304b5cbd5->leave($__internal_cd42cb22bbf9d08b21a6d6d9221cd0694cc834c482e89cde049bcad304b5cbd5_prof);

        
        $__internal_257da04fd391907d6241bff5c6d1620a3feee27231cbacbef825a18c0959157e->leave($__internal_257da04fd391907d6241bff5c6d1620a3feee27231cbacbef825a18c0959157e_prof);

    }

    public function getTemplateName()
    {
        return "producto/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Productos list</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for producto in productos %}
            <tr>
                <td><a href=\"{{ path('producto_show', { 'id': producto.id }) }}\">{{ producto.nombre }}</a></td>
                <td>{{ producto.precio }}</td>
                <td>{{ producto.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('producto_show', { 'id': producto.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('producto_edit', { 'id': producto.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('producto_new') }}\">Create a new producto</a>
        </li>
    </ul>
{% endblock %}
", "producto/index.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\app\\Resources\\views\\producto\\index.html.twig");
    }
}
