<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_641373ae80d67ae83f4b6a0facaa44980cb2e0b6f176d37c497fdd5588420939 extends Twig_Template
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
        $__internal_572377d8372a13b742dc941d285e89674035fa89fbb416e70580f27cb20361c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_572377d8372a13b742dc941d285e89674035fa89fbb416e70580f27cb20361c3->enter($__internal_572377d8372a13b742dc941d285e89674035fa89fbb416e70580f27cb20361c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_7547e4381bc96934e526f896fd42a135aa56762e2f9842bc235cdc2b6495f067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7547e4381bc96934e526f896fd42a135aa56762e2f9842bc235cdc2b6495f067->enter($__internal_7547e4381bc96934e526f896fd42a135aa56762e2f9842bc235cdc2b6495f067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_572377d8372a13b742dc941d285e89674035fa89fbb416e70580f27cb20361c3->leave($__internal_572377d8372a13b742dc941d285e89674035fa89fbb416e70580f27cb20361c3_prof);

        
        $__internal_7547e4381bc96934e526f896fd42a135aa56762e2f9842bc235cdc2b6495f067->leave($__internal_7547e4381bc96934e526f896fd42a135aa56762e2f9842bc235cdc2b6495f067_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
