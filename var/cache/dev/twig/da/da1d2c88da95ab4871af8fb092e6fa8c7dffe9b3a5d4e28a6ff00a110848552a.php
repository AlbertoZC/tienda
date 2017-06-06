<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_fcd1b8a17a83fd7890dd5330bed79a278aa45eea06b7f18d5660426f5d0e3b71 extends Twig_Template
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
        $__internal_d014c2b83e272efc4e6eed587bb35fc8c1d36dbd99fae76d83b1cffe8270d40b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d014c2b83e272efc4e6eed587bb35fc8c1d36dbd99fae76d83b1cffe8270d40b->enter($__internal_d014c2b83e272efc4e6eed587bb35fc8c1d36dbd99fae76d83b1cffe8270d40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_d28688312fb6e24b10e58dfc5a0646f2f11c78f367c4d5379870b91756b44467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28688312fb6e24b10e58dfc5a0646f2f11c78f367c4d5379870b91756b44467->enter($__internal_d28688312fb6e24b10e58dfc5a0646f2f11c78f367c4d5379870b91756b44467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d014c2b83e272efc4e6eed587bb35fc8c1d36dbd99fae76d83b1cffe8270d40b->leave($__internal_d014c2b83e272efc4e6eed587bb35fc8c1d36dbd99fae76d83b1cffe8270d40b_prof);

        
        $__internal_d28688312fb6e24b10e58dfc5a0646f2f11c78f367c4d5379870b91756b44467->leave($__internal_d28688312fb6e24b10e58dfc5a0646f2f11c78f367c4d5379870b91756b44467_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
