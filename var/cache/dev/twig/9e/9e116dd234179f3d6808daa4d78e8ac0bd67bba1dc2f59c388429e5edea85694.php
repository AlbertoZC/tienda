<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_1a4d59a53ec68f6c0780521dc6ade8449579bcee70e6400343f608cc2c753665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cfa9fbbb8ea965cdbc554e374bdfd5dceb6e18a015b226d3217a58ab8a49a6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cfa9fbbb8ea965cdbc554e374bdfd5dceb6e18a015b226d3217a58ab8a49a6d->enter($__internal_5cfa9fbbb8ea965cdbc554e374bdfd5dceb6e18a015b226d3217a58ab8a49a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_f81f7bc61840ee02425f387d04a753ca177d1f4ea08aa02d07597f5c7a8a7c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81f7bc61840ee02425f387d04a753ca177d1f4ea08aa02d07597f5c7a8a7c83->enter($__internal_f81f7bc61840ee02425f387d04a753ca177d1f4ea08aa02d07597f5c7a8a7c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5cfa9fbbb8ea965cdbc554e374bdfd5dceb6e18a015b226d3217a58ab8a49a6d->leave($__internal_5cfa9fbbb8ea965cdbc554e374bdfd5dceb6e18a015b226d3217a58ab8a49a6d_prof);

        
        $__internal_f81f7bc61840ee02425f387d04a753ca177d1f4ea08aa02d07597f5c7a8a7c83->leave($__internal_f81f7bc61840ee02425f387d04a753ca177d1f4ea08aa02d07597f5c7a8a7c83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
