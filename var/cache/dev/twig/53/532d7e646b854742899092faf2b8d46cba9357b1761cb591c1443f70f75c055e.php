<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_5ddb63c6356a3d0795416e717155c05f609fab2f6367a1c350d2bfdd7ca26d98 extends Twig_Template
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
        $__internal_514bb8bfd253cf01f25c03197080688e522157d2b3308cad0616856337204650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_514bb8bfd253cf01f25c03197080688e522157d2b3308cad0616856337204650->enter($__internal_514bb8bfd253cf01f25c03197080688e522157d2b3308cad0616856337204650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_4a8856197d32f65f201982b9374988186fe967dc418341d13745fd2e1df9e533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8856197d32f65f201982b9374988186fe967dc418341d13745fd2e1df9e533->enter($__internal_4a8856197d32f65f201982b9374988186fe967dc418341d13745fd2e1df9e533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_514bb8bfd253cf01f25c03197080688e522157d2b3308cad0616856337204650->leave($__internal_514bb8bfd253cf01f25c03197080688e522157d2b3308cad0616856337204650_prof);

        
        $__internal_4a8856197d32f65f201982b9374988186fe967dc418341d13745fd2e1df9e533->leave($__internal_4a8856197d32f65f201982b9374988186fe967dc418341d13745fd2e1df9e533_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
