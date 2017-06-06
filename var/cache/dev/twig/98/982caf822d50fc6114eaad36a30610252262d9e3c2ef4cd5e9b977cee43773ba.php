<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_923212f6404a9cfd0b0558295603682969779985ac302d02b3842016f9a4c642 extends Twig_Template
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
        $__internal_76fecf5a4fdc5227228fa532a577d0462ff4fcbdc03608e21bb36443fdf5e4b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76fecf5a4fdc5227228fa532a577d0462ff4fcbdc03608e21bb36443fdf5e4b8->enter($__internal_76fecf5a4fdc5227228fa532a577d0462ff4fcbdc03608e21bb36443fdf5e4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1302796911b03d4f688d035abca0b1b8adf21d453ea66ecec73d6b5e4939190e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1302796911b03d4f688d035abca0b1b8adf21d453ea66ecec73d6b5e4939190e->enter($__internal_1302796911b03d4f688d035abca0b1b8adf21d453ea66ecec73d6b5e4939190e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_76fecf5a4fdc5227228fa532a577d0462ff4fcbdc03608e21bb36443fdf5e4b8->leave($__internal_76fecf5a4fdc5227228fa532a577d0462ff4fcbdc03608e21bb36443fdf5e4b8_prof);

        
        $__internal_1302796911b03d4f688d035abca0b1b8adf21d453ea66ecec73d6b5e4939190e->leave($__internal_1302796911b03d4f688d035abca0b1b8adf21d453ea66ecec73d6b5e4939190e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
