<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_130701d4b750a3dc8e72cf64fdc23086b6aa456bb05f282846a1074e5ac9e72a extends Twig_Template
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
        $__internal_c0b06431231226e52e5fbdbe98d629466e9544b93fc6cc9e1673eaeb7fde4cb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b06431231226e52e5fbdbe98d629466e9544b93fc6cc9e1673eaeb7fde4cb7->enter($__internal_c0b06431231226e52e5fbdbe98d629466e9544b93fc6cc9e1673eaeb7fde4cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_fd444d39a212f4b0e0fe31efdc9992e1c0867068b2c3d095a7f1bdc34e5b05f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd444d39a212f4b0e0fe31efdc9992e1c0867068b2c3d095a7f1bdc34e5b05f5->enter($__internal_fd444d39a212f4b0e0fe31efdc9992e1c0867068b2c3d095a7f1bdc34e5b05f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_c0b06431231226e52e5fbdbe98d629466e9544b93fc6cc9e1673eaeb7fde4cb7->leave($__internal_c0b06431231226e52e5fbdbe98d629466e9544b93fc6cc9e1673eaeb7fde4cb7_prof);

        
        $__internal_fd444d39a212f4b0e0fe31efdc9992e1c0867068b2c3d095a7f1bdc34e5b05f5->leave($__internal_fd444d39a212f4b0e0fe31efdc9992e1c0867068b2c3d095a7f1bdc34e5b05f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
