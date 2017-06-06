<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_91cd3b4ba3857eed529c4af2c966bc9b24432d1f46c443d90b030406e8c6b856 extends Twig_Template
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
        $__internal_7a7249233f5eed1abdfab6b8801cf3673c7da0a960556b01c607684419d33396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a7249233f5eed1abdfab6b8801cf3673c7da0a960556b01c607684419d33396->enter($__internal_7a7249233f5eed1abdfab6b8801cf3673c7da0a960556b01c607684419d33396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_ff9fc9db0b50f00f0e06a3808ec9a3fd45954349030814508b5655c86c3f932d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff9fc9db0b50f00f0e06a3808ec9a3fd45954349030814508b5655c86c3f932d->enter($__internal_ff9fc9db0b50f00f0e06a3808ec9a3fd45954349030814508b5655c86c3f932d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7a7249233f5eed1abdfab6b8801cf3673c7da0a960556b01c607684419d33396->leave($__internal_7a7249233f5eed1abdfab6b8801cf3673c7da0a960556b01c607684419d33396_prof);

        
        $__internal_ff9fc9db0b50f00f0e06a3808ec9a3fd45954349030814508b5655c86c3f932d->leave($__internal_ff9fc9db0b50f00f0e06a3808ec9a3fd45954349030814508b5655c86c3f932d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
