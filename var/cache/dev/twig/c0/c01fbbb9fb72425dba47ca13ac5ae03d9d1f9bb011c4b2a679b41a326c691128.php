<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5b0c7723737a3bf1a18033efceba1b153622eb0acbc11f9d06ef8f4c21198852 extends Twig_Template
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
        $__internal_be1139f9cc9b40ff69665813ce88fa1d1033fea04209c319539a05c320ea2e01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be1139f9cc9b40ff69665813ce88fa1d1033fea04209c319539a05c320ea2e01->enter($__internal_be1139f9cc9b40ff69665813ce88fa1d1033fea04209c319539a05c320ea2e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_d1f5a65b4c6c30ee32c827cfec524134335f7b29c18a7b3cc0d81d1f1f76ba9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f5a65b4c6c30ee32c827cfec524134335f7b29c18a7b3cc0d81d1f1f76ba9b->enter($__internal_d1f5a65b4c6c30ee32c827cfec524134335f7b29c18a7b3cc0d81d1f1f76ba9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_be1139f9cc9b40ff69665813ce88fa1d1033fea04209c319539a05c320ea2e01->leave($__internal_be1139f9cc9b40ff69665813ce88fa1d1033fea04209c319539a05c320ea2e01_prof);

        
        $__internal_d1f5a65b4c6c30ee32c827cfec524134335f7b29c18a7b3cc0d81d1f1f76ba9b->leave($__internal_d1f5a65b4c6c30ee32c827cfec524134335f7b29c18a7b3cc0d81d1f1f76ba9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
