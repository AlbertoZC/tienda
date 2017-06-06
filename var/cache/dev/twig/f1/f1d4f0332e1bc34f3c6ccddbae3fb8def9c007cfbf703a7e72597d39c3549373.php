<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_0fb6986762dfaf434e267d5d63295529de494a723c4d4779c246d4344877f065 extends Twig_Template
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
        $__internal_770821f2c68329166858b7957bf53dc436b37e4ca42b6570659c1b84af5ca026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_770821f2c68329166858b7957bf53dc436b37e4ca42b6570659c1b84af5ca026->enter($__internal_770821f2c68329166858b7957bf53dc436b37e4ca42b6570659c1b84af5ca026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2f72b07c7e794230a780f5220fb66a8a7e8dbfbe561903f17134f6ffd49d6c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f72b07c7e794230a780f5220fb66a8a7e8dbfbe561903f17134f6ffd49d6c07->enter($__internal_2f72b07c7e794230a780f5220fb66a8a7e8dbfbe561903f17134f6ffd49d6c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_770821f2c68329166858b7957bf53dc436b37e4ca42b6570659c1b84af5ca026->leave($__internal_770821f2c68329166858b7957bf53dc436b37e4ca42b6570659c1b84af5ca026_prof);

        
        $__internal_2f72b07c7e794230a780f5220fb66a8a7e8dbfbe561903f17134f6ffd49d6c07->leave($__internal_2f72b07c7e794230a780f5220fb66a8a7e8dbfbe561903f17134f6ffd49d6c07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
