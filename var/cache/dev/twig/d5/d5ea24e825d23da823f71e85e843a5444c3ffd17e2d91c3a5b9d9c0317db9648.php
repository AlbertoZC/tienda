<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d68a419cf52df19ffccebe09552c7838ceaa04be286d4f8a91c2f44ea66a0629 extends Twig_Template
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
        $__internal_faeb05a9a8aaa155994f684346968f21f99ec6968148137ab92c1aca3706c59a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faeb05a9a8aaa155994f684346968f21f99ec6968148137ab92c1aca3706c59a->enter($__internal_faeb05a9a8aaa155994f684346968f21f99ec6968148137ab92c1aca3706c59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_3acc56a33ced67a61104a75810134a4b1020f09245a4f32ac365b9b0d0d5a7b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3acc56a33ced67a61104a75810134a4b1020f09245a4f32ac365b9b0d0d5a7b0->enter($__internal_3acc56a33ced67a61104a75810134a4b1020f09245a4f32ac365b9b0d0d5a7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_faeb05a9a8aaa155994f684346968f21f99ec6968148137ab92c1aca3706c59a->leave($__internal_faeb05a9a8aaa155994f684346968f21f99ec6968148137ab92c1aca3706c59a_prof);

        
        $__internal_3acc56a33ced67a61104a75810134a4b1020f09245a4f32ac365b9b0d0d5a7b0->leave($__internal_3acc56a33ced67a61104a75810134a4b1020f09245a4f32ac365b9b0d0d5a7b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
