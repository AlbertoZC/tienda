<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_84664b445ccd4bc884d673233ec7c6cff71a7547a841ef729247df96b12213ed extends Twig_Template
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
        $__internal_af2b6fa1f79ad424848e077d5263bc475934bcd7c8e62a985566b014628a0c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af2b6fa1f79ad424848e077d5263bc475934bcd7c8e62a985566b014628a0c94->enter($__internal_af2b6fa1f79ad424848e077d5263bc475934bcd7c8e62a985566b014628a0c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b17eba0dfe512301170e4fe16778a5632b47bde2ee587789de491dfaa2ba3b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17eba0dfe512301170e4fe16778a5632b47bde2ee587789de491dfaa2ba3b6c->enter($__internal_b17eba0dfe512301170e4fe16778a5632b47bde2ee587789de491dfaa2ba3b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_af2b6fa1f79ad424848e077d5263bc475934bcd7c8e62a985566b014628a0c94->leave($__internal_af2b6fa1f79ad424848e077d5263bc475934bcd7c8e62a985566b014628a0c94_prof);

        
        $__internal_b17eba0dfe512301170e4fe16778a5632b47bde2ee587789de491dfaa2ba3b6c->leave($__internal_b17eba0dfe512301170e4fe16778a5632b47bde2ee587789de491dfaa2ba3b6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
