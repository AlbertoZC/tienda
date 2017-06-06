<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5142174c090f9b35d3f6528dbe4630cb12b6f0fe4f8d7cb856410414c2171287 extends Twig_Template
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
        $__internal_0c5c7a725f50a84ebcd9ef04674b73cf408061856958a36d1d72c2994a1b6f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5c7a725f50a84ebcd9ef04674b73cf408061856958a36d1d72c2994a1b6f3c->enter($__internal_0c5c7a725f50a84ebcd9ef04674b73cf408061856958a36d1d72c2994a1b6f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_1fb6f7fef83f14d102ac2ce6bfb1cbb8409dd061a53138a2369cad5ec1525c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb6f7fef83f14d102ac2ce6bfb1cbb8409dd061a53138a2369cad5ec1525c6d->enter($__internal_1fb6f7fef83f14d102ac2ce6bfb1cbb8409dd061a53138a2369cad5ec1525c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0c5c7a725f50a84ebcd9ef04674b73cf408061856958a36d1d72c2994a1b6f3c->leave($__internal_0c5c7a725f50a84ebcd9ef04674b73cf408061856958a36d1d72c2994a1b6f3c_prof);

        
        $__internal_1fb6f7fef83f14d102ac2ce6bfb1cbb8409dd061a53138a2369cad5ec1525c6d->leave($__internal_1fb6f7fef83f14d102ac2ce6bfb1cbb8409dd061a53138a2369cad5ec1525c6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
