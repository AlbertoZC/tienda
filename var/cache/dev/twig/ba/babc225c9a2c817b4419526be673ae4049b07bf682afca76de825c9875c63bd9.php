<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_1340be69d0a6a5e116497c35152a2599ed662e07faafbd1f21cd7dfe63d8cec3 extends Twig_Template
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
        $__internal_1b39b8095d70058f40c5a62ec4b90a13048b8b7648ccb6aa7d99ef84b7b3dc19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b39b8095d70058f40c5a62ec4b90a13048b8b7648ccb6aa7d99ef84b7b3dc19->enter($__internal_1b39b8095d70058f40c5a62ec4b90a13048b8b7648ccb6aa7d99ef84b7b3dc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_4b3e6421786870ab4a05b261fb2b46e6e5d77f22111574d6651e721744918473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3e6421786870ab4a05b261fb2b46e6e5d77f22111574d6651e721744918473->enter($__internal_4b3e6421786870ab4a05b261fb2b46e6e5d77f22111574d6651e721744918473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1b39b8095d70058f40c5a62ec4b90a13048b8b7648ccb6aa7d99ef84b7b3dc19->leave($__internal_1b39b8095d70058f40c5a62ec4b90a13048b8b7648ccb6aa7d99ef84b7b3dc19_prof);

        
        $__internal_4b3e6421786870ab4a05b261fb2b46e6e5d77f22111574d6651e721744918473->leave($__internal_4b3e6421786870ab4a05b261fb2b46e6e5d77f22111574d6651e721744918473_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
