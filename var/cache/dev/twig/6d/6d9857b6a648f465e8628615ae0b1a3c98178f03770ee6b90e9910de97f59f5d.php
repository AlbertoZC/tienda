<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_88a9ecd71feaa4e9d92c9d0613c6618e8ec5a7816c15fb85150a30e0b9ce6318 extends Twig_Template
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
        $__internal_a84c5174ce257aeb3fb5b4c82678ae20dd65ddd49f02bddf99b39f6ff6702994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a84c5174ce257aeb3fb5b4c82678ae20dd65ddd49f02bddf99b39f6ff6702994->enter($__internal_a84c5174ce257aeb3fb5b4c82678ae20dd65ddd49f02bddf99b39f6ff6702994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_6cb18ac267721508bfb986fece08e0acdccfcf819a569138e5b801b22090dce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb18ac267721508bfb986fece08e0acdccfcf819a569138e5b801b22090dce6->enter($__internal_6cb18ac267721508bfb986fece08e0acdccfcf819a569138e5b801b22090dce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a84c5174ce257aeb3fb5b4c82678ae20dd65ddd49f02bddf99b39f6ff6702994->leave($__internal_a84c5174ce257aeb3fb5b4c82678ae20dd65ddd49f02bddf99b39f6ff6702994_prof);

        
        $__internal_6cb18ac267721508bfb986fece08e0acdccfcf819a569138e5b801b22090dce6->leave($__internal_6cb18ac267721508bfb986fece08e0acdccfcf819a569138e5b801b22090dce6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
