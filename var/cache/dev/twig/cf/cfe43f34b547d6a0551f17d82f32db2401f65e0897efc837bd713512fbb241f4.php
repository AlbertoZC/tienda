<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_bede0af796a1486980ba5e86053a1ccc012ec265647dee3874742536b88ef0a0 extends Twig_Template
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
        $__internal_288f580a2576ca63bb26fdbfa80d09ed139122c2145ba250cf49e9e884d6526b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_288f580a2576ca63bb26fdbfa80d09ed139122c2145ba250cf49e9e884d6526b->enter($__internal_288f580a2576ca63bb26fdbfa80d09ed139122c2145ba250cf49e9e884d6526b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_51490818abd45c94128ceb92be6d4dac5b23c69608dbb163460346c88580707a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51490818abd45c94128ceb92be6d4dac5b23c69608dbb163460346c88580707a->enter($__internal_51490818abd45c94128ceb92be6d4dac5b23c69608dbb163460346c88580707a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_288f580a2576ca63bb26fdbfa80d09ed139122c2145ba250cf49e9e884d6526b->leave($__internal_288f580a2576ca63bb26fdbfa80d09ed139122c2145ba250cf49e9e884d6526b_prof);

        
        $__internal_51490818abd45c94128ceb92be6d4dac5b23c69608dbb163460346c88580707a->leave($__internal_51490818abd45c94128ceb92be6d4dac5b23c69608dbb163460346c88580707a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
