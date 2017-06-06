<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_73d6f091166d6733c12434c6dc665f76e846f4759b1033ad0ad52b66027ade1d extends Twig_Template
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
        $__internal_e3916f9601b3ff5bf2bbe8ae25b0686638b8fdb98793bcfc2ec06d30b5b0e9d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3916f9601b3ff5bf2bbe8ae25b0686638b8fdb98793bcfc2ec06d30b5b0e9d9->enter($__internal_e3916f9601b3ff5bf2bbe8ae25b0686638b8fdb98793bcfc2ec06d30b5b0e9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a07572fba46f7631d46ca097e09f410c81108b2edd18e35fc568232bcd8be0ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07572fba46f7631d46ca097e09f410c81108b2edd18e35fc568232bcd8be0ff->enter($__internal_a07572fba46f7631d46ca097e09f410c81108b2edd18e35fc568232bcd8be0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e3916f9601b3ff5bf2bbe8ae25b0686638b8fdb98793bcfc2ec06d30b5b0e9d9->leave($__internal_e3916f9601b3ff5bf2bbe8ae25b0686638b8fdb98793bcfc2ec06d30b5b0e9d9_prof);

        
        $__internal_a07572fba46f7631d46ca097e09f410c81108b2edd18e35fc568232bcd8be0ff->leave($__internal_a07572fba46f7631d46ca097e09f410c81108b2edd18e35fc568232bcd8be0ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
