<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_0777722e2033d767e7110f3fceb5d3d9ada997afa58d87df59b9c17c9dd55c18 extends Twig_Template
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
        $__internal_1dbcfe216c0bda158b5e1259c3be60ddfa0d2553208831912cb1b72e7d658c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dbcfe216c0bda158b5e1259c3be60ddfa0d2553208831912cb1b72e7d658c87->enter($__internal_1dbcfe216c0bda158b5e1259c3be60ddfa0d2553208831912cb1b72e7d658c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_2922d6d5ff030319aa5cf16e66321250bd4e5bb4c236f0a78701d745a18c231c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2922d6d5ff030319aa5cf16e66321250bd4e5bb4c236f0a78701d745a18c231c->enter($__internal_2922d6d5ff030319aa5cf16e66321250bd4e5bb4c236f0a78701d745a18c231c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_1dbcfe216c0bda158b5e1259c3be60ddfa0d2553208831912cb1b72e7d658c87->leave($__internal_1dbcfe216c0bda158b5e1259c3be60ddfa0d2553208831912cb1b72e7d658c87_prof);

        
        $__internal_2922d6d5ff030319aa5cf16e66321250bd4e5bb4c236f0a78701d745a18c231c->leave($__internal_2922d6d5ff030319aa5cf16e66321250bd4e5bb4c236f0a78701d745a18c231c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
