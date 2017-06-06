<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2d26ba761d87d3657b07a9f29909771d83e2bb674bdc5449f3e16b2e6121900e extends Twig_Template
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
        $__internal_170981c723017bc40c5afa3e1fa80f92a42eb02559a1284e7df0fb106e0321bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_170981c723017bc40c5afa3e1fa80f92a42eb02559a1284e7df0fb106e0321bb->enter($__internal_170981c723017bc40c5afa3e1fa80f92a42eb02559a1284e7df0fb106e0321bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_00b7c3cd4da17ee84c445474757293efce4a86b45be74d84b102606ee7d5d244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b7c3cd4da17ee84c445474757293efce4a86b45be74d84b102606ee7d5d244->enter($__internal_00b7c3cd4da17ee84c445474757293efce4a86b45be74d84b102606ee7d5d244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_170981c723017bc40c5afa3e1fa80f92a42eb02559a1284e7df0fb106e0321bb->leave($__internal_170981c723017bc40c5afa3e1fa80f92a42eb02559a1284e7df0fb106e0321bb_prof);

        
        $__internal_00b7c3cd4da17ee84c445474757293efce4a86b45be74d84b102606ee7d5d244->leave($__internal_00b7c3cd4da17ee84c445474757293efce4a86b45be74d84b102606ee7d5d244_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
