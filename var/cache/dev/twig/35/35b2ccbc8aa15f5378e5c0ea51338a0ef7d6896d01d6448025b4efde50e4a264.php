<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_6fadd97612084bc62e99c1c95fcc3a0e8ff142d467d7e03d2b4dae8da0522881 extends Twig_Template
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
        $__internal_242d069f7bd4eb50d8e2ecc0afdbda73ccc17304bae0c8d3f509bb90ee3c2489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_242d069f7bd4eb50d8e2ecc0afdbda73ccc17304bae0c8d3f509bb90ee3c2489->enter($__internal_242d069f7bd4eb50d8e2ecc0afdbda73ccc17304bae0c8d3f509bb90ee3c2489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_358e540b890f62d13e2d55fb0c922dd61bc3fd50d8c6a227265121753bf7e838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358e540b890f62d13e2d55fb0c922dd61bc3fd50d8c6a227265121753bf7e838->enter($__internal_358e540b890f62d13e2d55fb0c922dd61bc3fd50d8c6a227265121753bf7e838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_242d069f7bd4eb50d8e2ecc0afdbda73ccc17304bae0c8d3f509bb90ee3c2489->leave($__internal_242d069f7bd4eb50d8e2ecc0afdbda73ccc17304bae0c8d3f509bb90ee3c2489_prof);

        
        $__internal_358e540b890f62d13e2d55fb0c922dd61bc3fd50d8c6a227265121753bf7e838->leave($__internal_358e540b890f62d13e2d55fb0c922dd61bc3fd50d8c6a227265121753bf7e838_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
