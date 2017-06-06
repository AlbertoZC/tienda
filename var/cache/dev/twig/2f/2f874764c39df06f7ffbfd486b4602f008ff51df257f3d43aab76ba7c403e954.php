<?php

/* admin/index.html.twig */
class __TwigTemplate_9dd6a4bf39b631bcfb2389995a03f7d0c950da3bd29e188b74de14986c2d8034 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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
        $__internal_7a385460b96dc0f1ed8af8dcb9b123bfe254201c644366c98ca178677e7f88af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a385460b96dc0f1ed8af8dcb9b123bfe254201c644366c98ca178677e7f88af->enter($__internal_7a385460b96dc0f1ed8af8dcb9b123bfe254201c644366c98ca178677e7f88af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_648f5663ecf1acad2c6cdfda4bf47cd4cc1fbf8af542e1e8b26968cf86abd654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648f5663ecf1acad2c6cdfda4bf47cd4cc1fbf8af542e1e8b26968cf86abd654->enter($__internal_648f5663ecf1acad2c6cdfda4bf47cd4cc1fbf8af542e1e8b26968cf86abd654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a385460b96dc0f1ed8af8dcb9b123bfe254201c644366c98ca178677e7f88af->leave($__internal_7a385460b96dc0f1ed8af8dcb9b123bfe254201c644366c98ca178677e7f88af_prof);

        
        $__internal_648f5663ecf1acad2c6cdfda4bf47cd4cc1fbf8af542e1e8b26968cf86abd654->leave($__internal_648f5663ecf1acad2c6cdfda4bf47cd4cc1fbf8af542e1e8b26968cf86abd654_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f464a1780e56e401c4217197b97e92fcd24fcd3614f90d433c039fe7c495934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f464a1780e56e401c4217197b97e92fcd24fcd3614f90d433c039fe7c495934->enter($__internal_6f464a1780e56e401c4217197b97e92fcd24fcd3614f90d433c039fe7c495934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7f278cf8fd75f857fb9dbc015363a4017bb3d82d4263b02f5d717a89e024c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f278cf8fd75f857fb9dbc015363a4017bb3d82d4263b02f5d717a89e024c07->enter($__internal_d7f278cf8fd75f857fb9dbc015363a4017bb3d82d4263b02f5d717a89e024c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Admins list</h1>

    <table>
        <thead>
            <tr>
                <th>Clave</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) ? $context["admins"] : $this->getContext($context, "admins")));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_show", array("username" => $this->getAttribute($context["admin"], "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "clave", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "username", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_show", array("username" => $this->getAttribute($context["admin"], "username", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edit", array("username" => $this->getAttribute($context["admin"], "username", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_new");
        echo "\">Create a new admin</a>
        </li>
    </ul>
";
        
        $__internal_d7f278cf8fd75f857fb9dbc015363a4017bb3d82d4263b02f5d717a89e024c07->leave($__internal_d7f278cf8fd75f857fb9dbc015363a4017bb3d82d4263b02f5d717a89e024c07_prof);

        
        $__internal_6f464a1780e56e401c4217197b97e92fcd24fcd3614f90d433c039fe7c495934->leave($__internal_6f464a1780e56e401c4217197b97e92fcd24fcd3614f90d433c039fe7c495934_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Admins list</h1>

    <table>
        <thead>
            <tr>
                <th>Clave</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for admin in admins %}
            <tr>
                <td><a href=\"{{ path('admin_show', { 'username': admin.username }) }}\">{{ admin.clave }}</a></td>
                <td>{{ admin.username }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('admin_show', { 'username': admin.username }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_edit', { 'username': admin.username }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_new') }}\">Create a new admin</a>
        </li>
    </ul>
{% endblock %}
", "admin/index.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\app\\Resources\\views\\admin\\index.html.twig");
    }
}
