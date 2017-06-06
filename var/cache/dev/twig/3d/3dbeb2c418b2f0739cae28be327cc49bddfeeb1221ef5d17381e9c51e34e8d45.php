<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_cbcf52e87edb48c82a943b4209054ae2122deb8ffc79e6df81e7168f8e9ac9a0 extends Twig_Template
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
        $__internal_7de6892c8dcbab0db67a764bfbea6e94f64a718120fe9e955f74ff4903e3a7b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de6892c8dcbab0db67a764bfbea6e94f64a718120fe9e955f74ff4903e3a7b1->enter($__internal_7de6892c8dcbab0db67a764bfbea6e94f64a718120fe9e955f74ff4903e3a7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_972a7a57ff27403f76c3271b173c9d84cc51294bb7c1182d8cfebb60640836e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972a7a57ff27403f76c3271b173c9d84cc51294bb7c1182d8cfebb60640836e3->enter($__internal_972a7a57ff27403f76c3271b173c9d84cc51294bb7c1182d8cfebb60640836e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_7de6892c8dcbab0db67a764bfbea6e94f64a718120fe9e955f74ff4903e3a7b1->leave($__internal_7de6892c8dcbab0db67a764bfbea6e94f64a718120fe9e955f74ff4903e3a7b1_prof);

        
        $__internal_972a7a57ff27403f76c3271b173c9d84cc51294bb7c1182d8cfebb60640836e3->leave($__internal_972a7a57ff27403f76c3271b173c9d84cc51294bb7c1182d8cfebb60640836e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
