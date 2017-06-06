<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_803e932302810c25dcb9f4fbd0022af1ebd835dafabc65acb5862ad260b4f820 extends Twig_Template
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
        $__internal_2ee62c55e672cfda729aa9522935e63884f5fdb82c22d7c4881703fc7fbc7ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ee62c55e672cfda729aa9522935e63884f5fdb82c22d7c4881703fc7fbc7ae3->enter($__internal_2ee62c55e672cfda729aa9522935e63884f5fdb82c22d7c4881703fc7fbc7ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_54d3d5b039eb007b2b4a700d44786b170bba57e259ba0cba2bd7fbb8925948b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d3d5b039eb007b2b4a700d44786b170bba57e259ba0cba2bd7fbb8925948b5->enter($__internal_54d3d5b039eb007b2b4a700d44786b170bba57e259ba0cba2bd7fbb8925948b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_2ee62c55e672cfda729aa9522935e63884f5fdb82c22d7c4881703fc7fbc7ae3->leave($__internal_2ee62c55e672cfda729aa9522935e63884f5fdb82c22d7c4881703fc7fbc7ae3_prof);

        
        $__internal_54d3d5b039eb007b2b4a700d44786b170bba57e259ba0cba2bd7fbb8925948b5->leave($__internal_54d3d5b039eb007b2b4a700d44786b170bba57e259ba0cba2bd7fbb8925948b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
