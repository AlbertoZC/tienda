<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_0c3d3985a058d47d19ab1fc98b4b002179ddafbcfd83c87d48a8411c9de39bd5 extends Twig_Template
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
        $__internal_5f2992ccf1f1ea8830cc824a4915b5c768c042c610ee4a6624de34588e52ad57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f2992ccf1f1ea8830cc824a4915b5c768c042c610ee4a6624de34588e52ad57->enter($__internal_5f2992ccf1f1ea8830cc824a4915b5c768c042c610ee4a6624de34588e52ad57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_fc8c98c49f71426607d09ccffd61375262298093b1711bb85f7539d1cffbfdcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8c98c49f71426607d09ccffd61375262298093b1711bb85f7539d1cffbfdcc->enter($__internal_fc8c98c49f71426607d09ccffd61375262298093b1711bb85f7539d1cffbfdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_5f2992ccf1f1ea8830cc824a4915b5c768c042c610ee4a6624de34588e52ad57->leave($__internal_5f2992ccf1f1ea8830cc824a4915b5c768c042c610ee4a6624de34588e52ad57_prof);

        
        $__internal_fc8c98c49f71426607d09ccffd61375262298093b1711bb85f7539d1cffbfdcc->leave($__internal_fc8c98c49f71426607d09ccffd61375262298093b1711bb85f7539d1cffbfdcc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
