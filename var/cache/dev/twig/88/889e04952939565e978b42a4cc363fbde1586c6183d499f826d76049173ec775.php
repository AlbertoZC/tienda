<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d0ae23abd49f9c60de7f820ae1ecc72214b731bc4feb9ef7340450b2b2033136 extends Twig_Template
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
        $__internal_52e7daf0ec8252da09c2637eea44490f9cb6e1faf984df8ceda2045594ca3caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e7daf0ec8252da09c2637eea44490f9cb6e1faf984df8ceda2045594ca3caa->enter($__internal_52e7daf0ec8252da09c2637eea44490f9cb6e1faf984df8ceda2045594ca3caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ff52715439796a04a2dea11834ff564d38f20fa5f6bb210b3ebeb699906b0205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff52715439796a04a2dea11834ff564d38f20fa5f6bb210b3ebeb699906b0205->enter($__internal_ff52715439796a04a2dea11834ff564d38f20fa5f6bb210b3ebeb699906b0205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_52e7daf0ec8252da09c2637eea44490f9cb6e1faf984df8ceda2045594ca3caa->leave($__internal_52e7daf0ec8252da09c2637eea44490f9cb6e1faf984df8ceda2045594ca3caa_prof);

        
        $__internal_ff52715439796a04a2dea11834ff564d38f20fa5f6bb210b3ebeb699906b0205->leave($__internal_ff52715439796a04a2dea11834ff564d38f20fa5f6bb210b3ebeb699906b0205_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
