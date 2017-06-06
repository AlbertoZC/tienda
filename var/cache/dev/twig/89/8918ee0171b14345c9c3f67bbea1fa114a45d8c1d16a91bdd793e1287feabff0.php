<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_e1b6daaab3e531b382c95b76f6a2057edf6327da5799597e2393dfeb375998ee extends Twig_Template
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
        $__internal_52aa4dc796c37b7d89be93ccfbe191a8ded71b964b9705232161042bd051c7e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52aa4dc796c37b7d89be93ccfbe191a8ded71b964b9705232161042bd051c7e8->enter($__internal_52aa4dc796c37b7d89be93ccfbe191a8ded71b964b9705232161042bd051c7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_22c134e9070156652c95cfd4b078d67051c0ab4e67dda56301fbb9a90af19272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c134e9070156652c95cfd4b078d67051c0ab4e67dda56301fbb9a90af19272->enter($__internal_22c134e9070156652c95cfd4b078d67051c0ab4e67dda56301fbb9a90af19272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_52aa4dc796c37b7d89be93ccfbe191a8ded71b964b9705232161042bd051c7e8->leave($__internal_52aa4dc796c37b7d89be93ccfbe191a8ded71b964b9705232161042bd051c7e8_prof);

        
        $__internal_22c134e9070156652c95cfd4b078d67051c0ab4e67dda56301fbb9a90af19272->leave($__internal_22c134e9070156652c95cfd4b078d67051c0ab4e67dda56301fbb9a90af19272_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
