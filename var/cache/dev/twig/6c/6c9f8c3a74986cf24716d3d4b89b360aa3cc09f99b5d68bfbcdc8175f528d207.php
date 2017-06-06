<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_eb43fa682f0debfdc43812a171140529219ef624edb1c3c8a017b88dfb973c30 extends Twig_Template
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
        $__internal_b833cd9eb1a928e7eaa0357c1cca5d54c8f1610411540f1d26b83478cc9b3395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b833cd9eb1a928e7eaa0357c1cca5d54c8f1610411540f1d26b83478cc9b3395->enter($__internal_b833cd9eb1a928e7eaa0357c1cca5d54c8f1610411540f1d26b83478cc9b3395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_925c4540892a4e1c86da1d9d02c791d4093e923d93720ce3786b41a4ca327084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925c4540892a4e1c86da1d9d02c791d4093e923d93720ce3786b41a4ca327084->enter($__internal_925c4540892a4e1c86da1d9d02c791d4093e923d93720ce3786b41a4ca327084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b833cd9eb1a928e7eaa0357c1cca5d54c8f1610411540f1d26b83478cc9b3395->leave($__internal_b833cd9eb1a928e7eaa0357c1cca5d54c8f1610411540f1d26b83478cc9b3395_prof);

        
        $__internal_925c4540892a4e1c86da1d9d02c791d4093e923d93720ce3786b41a4ca327084->leave($__internal_925c4540892a4e1c86da1d9d02c791d4093e923d93720ce3786b41a4ca327084_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
