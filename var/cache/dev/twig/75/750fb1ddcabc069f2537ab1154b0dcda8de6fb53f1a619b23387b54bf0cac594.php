<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_47d4e9fe9e31504d7f595d09ec57a380aa11ede2b6a3e0a64cdda7b350a02a29 extends Twig_Template
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
        $__internal_1de2ccf2baadc7902bcf990d29396d7cac3c258ccea120b245f4e419701557fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de2ccf2baadc7902bcf990d29396d7cac3c258ccea120b245f4e419701557fe->enter($__internal_1de2ccf2baadc7902bcf990d29396d7cac3c258ccea120b245f4e419701557fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_5d5fdf3893a88021ddcab9e3f81b0c8ab9ccaa42ac029ff49d4de3503864f123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5fdf3893a88021ddcab9e3f81b0c8ab9ccaa42ac029ff49d4de3503864f123->enter($__internal_5d5fdf3893a88021ddcab9e3f81b0c8ab9ccaa42ac029ff49d4de3503864f123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_1de2ccf2baadc7902bcf990d29396d7cac3c258ccea120b245f4e419701557fe->leave($__internal_1de2ccf2baadc7902bcf990d29396d7cac3c258ccea120b245f4e419701557fe_prof);

        
        $__internal_5d5fdf3893a88021ddcab9e3f81b0c8ab9ccaa42ac029ff49d4de3503864f123->leave($__internal_5d5fdf3893a88021ddcab9e3f81b0c8ab9ccaa42ac029ff49d4de3503864f123_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
