<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2a212e5ed31a1b3cc9815006cc6157bfbfa8741c4f386eb219b775c8de20091d extends Twig_Template
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
        $__internal_285058a7f10fef050e97672abd724bd919e7c65f42fc2585f20c59d4f2e0150c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_285058a7f10fef050e97672abd724bd919e7c65f42fc2585f20c59d4f2e0150c->enter($__internal_285058a7f10fef050e97672abd724bd919e7c65f42fc2585f20c59d4f2e0150c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_bb1f97cd2ec1cb78ecc22be3010439c91beb3c5d319e45d3746d2a6212c400e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1f97cd2ec1cb78ecc22be3010439c91beb3c5d319e45d3746d2a6212c400e5->enter($__internal_bb1f97cd2ec1cb78ecc22be3010439c91beb3c5d319e45d3746d2a6212c400e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_285058a7f10fef050e97672abd724bd919e7c65f42fc2585f20c59d4f2e0150c->leave($__internal_285058a7f10fef050e97672abd724bd919e7c65f42fc2585f20c59d4f2e0150c_prof);

        
        $__internal_bb1f97cd2ec1cb78ecc22be3010439c91beb3c5d319e45d3746d2a6212c400e5->leave($__internal_bb1f97cd2ec1cb78ecc22be3010439c91beb3c5d319e45d3746d2a6212c400e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
