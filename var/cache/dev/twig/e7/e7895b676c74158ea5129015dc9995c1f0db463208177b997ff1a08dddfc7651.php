<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_95a9b09ebf68b6acc9ce119c7d7cabfed3a0aa09267026ba03cbd0ff3b63b7e2 extends Twig_Template
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
        $__internal_9fd4108de9f6a1a7a53f64fb2a23e09f42e47bafa2422f8dc4bbcd3203999014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd4108de9f6a1a7a53f64fb2a23e09f42e47bafa2422f8dc4bbcd3203999014->enter($__internal_9fd4108de9f6a1a7a53f64fb2a23e09f42e47bafa2422f8dc4bbcd3203999014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_5bb8f1f23078ebe5936510f443f5052e19e27d90aa80ffa18a7e3dc6fbf9ddc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb8f1f23078ebe5936510f443f5052e19e27d90aa80ffa18a7e3dc6fbf9ddc1->enter($__internal_5bb8f1f23078ebe5936510f443f5052e19e27d90aa80ffa18a7e3dc6fbf9ddc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9fd4108de9f6a1a7a53f64fb2a23e09f42e47bafa2422f8dc4bbcd3203999014->leave($__internal_9fd4108de9f6a1a7a53f64fb2a23e09f42e47bafa2422f8dc4bbcd3203999014_prof);

        
        $__internal_5bb8f1f23078ebe5936510f443f5052e19e27d90aa80ffa18a7e3dc6fbf9ddc1->leave($__internal_5bb8f1f23078ebe5936510f443f5052e19e27d90aa80ffa18a7e3dc6fbf9ddc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
