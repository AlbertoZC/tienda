<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b1ceaacada43adb7aca7eecfaa069ecd1b706954fc9423a75f8024a0da11e455 extends Twig_Template
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
        $__internal_be6b90b9226db01a852b8f6111534d6e7c6e59b6db998bbd5a8783df1e80eb57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be6b90b9226db01a852b8f6111534d6e7c6e59b6db998bbd5a8783df1e80eb57->enter($__internal_be6b90b9226db01a852b8f6111534d6e7c6e59b6db998bbd5a8783df1e80eb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_144e36fa98946f854168f1ee175bb42a2157b2d694b9681323e23df1aad542c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144e36fa98946f854168f1ee175bb42a2157b2d694b9681323e23df1aad542c6->enter($__internal_144e36fa98946f854168f1ee175bb42a2157b2d694b9681323e23df1aad542c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_be6b90b9226db01a852b8f6111534d6e7c6e59b6db998bbd5a8783df1e80eb57->leave($__internal_be6b90b9226db01a852b8f6111534d6e7c6e59b6db998bbd5a8783df1e80eb57_prof);

        
        $__internal_144e36fa98946f854168f1ee175bb42a2157b2d694b9681323e23df1aad542c6->leave($__internal_144e36fa98946f854168f1ee175bb42a2157b2d694b9681323e23df1aad542c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
