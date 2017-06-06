<?php

/* usuario/index.html.twig */
class __TwigTemplate_9790175aadec50824fb06b54778ed165fd21d2a69924a20f7773889977c8c08a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/index.html.twig", 1);
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
        $__internal_f1fcc6eb4e935d33dff6d4a13bdc54c3d2b9bbb175bf01df802d95d2b7677163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1fcc6eb4e935d33dff6d4a13bdc54c3d2b9bbb175bf01df802d95d2b7677163->enter($__internal_f1fcc6eb4e935d33dff6d4a13bdc54c3d2b9bbb175bf01df802d95d2b7677163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/index.html.twig"));

        $__internal_eefe4ddd687e01a2cfe278a63a87943331142a10eac6ca41c8a3222fec13a9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eefe4ddd687e01a2cfe278a63a87943331142a10eac6ca41c8a3222fec13a9c8->enter($__internal_eefe4ddd687e01a2cfe278a63a87943331142a10eac6ca41c8a3222fec13a9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1fcc6eb4e935d33dff6d4a13bdc54c3d2b9bbb175bf01df802d95d2b7677163->leave($__internal_f1fcc6eb4e935d33dff6d4a13bdc54c3d2b9bbb175bf01df802d95d2b7677163_prof);

        
        $__internal_eefe4ddd687e01a2cfe278a63a87943331142a10eac6ca41c8a3222fec13a9c8->leave($__internal_eefe4ddd687e01a2cfe278a63a87943331142a10eac6ca41c8a3222fec13a9c8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_24f180553646c9592b3c21e9b57c84a8d3a4b046867e8f6a3a2125c32d89774a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f180553646c9592b3c21e9b57c84a8d3a4b046867e8f6a3a2125c32d89774a->enter($__internal_24f180553646c9592b3c21e9b57c84a8d3a4b046867e8f6a3a2125c32d89774a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f17f0bf6f9a22d06b2094c49dd9cbe6dc141acd3657287bf7659aab63102ab52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17f0bf6f9a22d06b2094c49dd9cbe6dc141acd3657287bf7659aab63102ab52->enter($__internal_f17f0bf6f9a22d06b2094c49dd9cbe6dc141acd3657287bf7659aab63102ab52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuarios list</h1>

    <table>
        <thead>
            <tr>
                <th>Clave</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Bio</th>
                <th>Avatar</th>
                <th>Verificada</th>
                <th>Fecha</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_show", array("username" => $this->getAttribute($context["usuario"], "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "clave", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "bio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "avatar", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "verificada", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            if ($this->getAttribute($context["usuario"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["usuario"], "fecha", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "username", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_show", array("username" => $this->getAttribute($context["usuario"], "username", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_edit", array("username" => $this->getAttribute($context["usuario"], "username", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_new");
        echo "\">Create a new usuario</a>
        </li>
    </ul>
";
        
        $__internal_f17f0bf6f9a22d06b2094c49dd9cbe6dc141acd3657287bf7659aab63102ab52->leave($__internal_f17f0bf6f9a22d06b2094c49dd9cbe6dc141acd3657287bf7659aab63102ab52_prof);

        
        $__internal_24f180553646c9592b3c21e9b57c84a8d3a4b046867e8f6a3a2125c32d89774a->leave($__internal_24f180553646c9592b3c21e9b57c84a8d3a4b046867e8f6a3a2125c32d89774a_prof);

    }

    public function getTemplateName()
    {
        return "usuario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 48,  132 => 43,  120 => 37,  114 => 34,  107 => 30,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  75 => 23,  72 => 22,  68 => 21,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Usuarios list</h1>

    <table>
        <thead>
            <tr>
                <th>Clave</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Bio</th>
                <th>Avatar</th>
                <th>Verificada</th>
                <th>Fecha</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for usuario in usuarios %}
            <tr>
                <td><a href=\"{{ path('usuario_show', { 'username': usuario.username }) }}\">{{ usuario.clave }}</a></td>
                <td>{{ usuario.nombre }}</td>
                <td>{{ usuario.email }}</td>
                <td>{{ usuario.bio }}</td>
                <td>{{ usuario.avatar }}</td>
                <td>{{ usuario.verificada }}</td>
                <td>{% if usuario.fecha %}{{ usuario.fecha|date('Y-m-d') }}{% endif %}</td>
                <td>{{ usuario.username }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('usuario_show', { 'username': usuario.username }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('usuario_edit', { 'username': usuario.username }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('usuario_new') }}\">Create a new usuario</a>
        </li>
    </ul>
{% endblock %}
", "usuario/index.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\app\\Resources\\views\\usuario\\index.html.twig");
    }
}
