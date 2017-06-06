<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b4ef0e07f9ec8ab69c75c71703d163c2fbebf7609a73488fe116ce644847f117 extends Twig_Template
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
        $__internal_96b9c55ab65a096559770346ef194629305121da95ae18f1add81c847b31783e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96b9c55ab65a096559770346ef194629305121da95ae18f1add81c847b31783e->enter($__internal_96b9c55ab65a096559770346ef194629305121da95ae18f1add81c847b31783e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_878ce1a80844f72d3f02518e9b9dc53e803166835cf5218be545f0e85c205844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878ce1a80844f72d3f02518e9b9dc53e803166835cf5218be545f0e85c205844->enter($__internal_878ce1a80844f72d3f02518e9b9dc53e803166835cf5218be545f0e85c205844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_96b9c55ab65a096559770346ef194629305121da95ae18f1add81c847b31783e->leave($__internal_96b9c55ab65a096559770346ef194629305121da95ae18f1add81c847b31783e_prof);

        
        $__internal_878ce1a80844f72d3f02518e9b9dc53e803166835cf5218be545f0e85c205844->leave($__internal_878ce1a80844f72d3f02518e9b9dc53e803166835cf5218be545f0e85c205844_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
