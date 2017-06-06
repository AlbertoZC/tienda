<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c78088b31c8a70463deefcda8ba44aba122d4d8f1d2a86895468e2f6df27c8eb extends Twig_Template
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
        $__internal_a338f3a38f5e0bf1cd51c9336d97d0896f070bf585a979a2ed96481615dc59f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a338f3a38f5e0bf1cd51c9336d97d0896f070bf585a979a2ed96481615dc59f5->enter($__internal_a338f3a38f5e0bf1cd51c9336d97d0896f070bf585a979a2ed96481615dc59f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_edb72854c09143eca666d3b366434b62303f29501fc005dc1559ddb3c4f8daef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb72854c09143eca666d3b366434b62303f29501fc005dc1559ddb3c4f8daef->enter($__internal_edb72854c09143eca666d3b366434b62303f29501fc005dc1559ddb3c4f8daef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a338f3a38f5e0bf1cd51c9336d97d0896f070bf585a979a2ed96481615dc59f5->leave($__internal_a338f3a38f5e0bf1cd51c9336d97d0896f070bf585a979a2ed96481615dc59f5_prof);

        
        $__internal_edb72854c09143eca666d3b366434b62303f29501fc005dc1559ddb3c4f8daef->leave($__internal_edb72854c09143eca666d3b366434b62303f29501fc005dc1559ddb3c4f8daef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
