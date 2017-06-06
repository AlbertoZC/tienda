<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_4b2db95a6920be8c5af03321c5fc5e1aea039c16756ddebe0048d02db064adcd extends Twig_Template
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
        $__internal_7ff283d932bd54cd20ee8fe5764c3c66aec6f5f6e8cf801afdeff38d050a5b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff283d932bd54cd20ee8fe5764c3c66aec6f5f6e8cf801afdeff38d050a5b5e->enter($__internal_7ff283d932bd54cd20ee8fe5764c3c66aec6f5f6e8cf801afdeff38d050a5b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_a18e54286d05d0ecb81652219cd9fa90aa981dfee09874457748b358fe8200a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18e54286d05d0ecb81652219cd9fa90aa981dfee09874457748b358fe8200a3->enter($__internal_a18e54286d05d0ecb81652219cd9fa90aa981dfee09874457748b358fe8200a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7ff283d932bd54cd20ee8fe5764c3c66aec6f5f6e8cf801afdeff38d050a5b5e->leave($__internal_7ff283d932bd54cd20ee8fe5764c3c66aec6f5f6e8cf801afdeff38d050a5b5e_prof);

        
        $__internal_a18e54286d05d0ecb81652219cd9fa90aa981dfee09874457748b358fe8200a3->leave($__internal_a18e54286d05d0ecb81652219cd9fa90aa981dfee09874457748b358fe8200a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
