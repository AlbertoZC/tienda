<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_0a15eee4d1c1dc59b2ec996683f27fcfd49029369ee2331898152157c1b214db extends Twig_Template
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
        $__internal_184aaa11b29ebc80477791cd471369fd7ef6949b3c671c65df7be3ddf6f114bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_184aaa11b29ebc80477791cd471369fd7ef6949b3c671c65df7be3ddf6f114bc->enter($__internal_184aaa11b29ebc80477791cd471369fd7ef6949b3c671c65df7be3ddf6f114bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_17c48dc2d3ee23a0f221a023410af29c8deabf43dad3c928607604b481b82455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c48dc2d3ee23a0f221a023410af29c8deabf43dad3c928607604b481b82455->enter($__internal_17c48dc2d3ee23a0f221a023410af29c8deabf43dad3c928607604b481b82455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_184aaa11b29ebc80477791cd471369fd7ef6949b3c671c65df7be3ddf6f114bc->leave($__internal_184aaa11b29ebc80477791cd471369fd7ef6949b3c671c65df7be3ddf6f114bc_prof);

        
        $__internal_17c48dc2d3ee23a0f221a023410af29c8deabf43dad3c928607604b481b82455->leave($__internal_17c48dc2d3ee23a0f221a023410af29c8deabf43dad3c928607604b481b82455_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
