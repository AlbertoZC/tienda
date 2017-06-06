<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_0c120ccf1ab1d4662d3c4eacfe05aa53df0027b27b30842510004d6a2412dd5a extends Twig_Template
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
        $__internal_17a5e93a66d31a0e4b7e242d2238b89d7b02b30280c9af2342eecce5b0062539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17a5e93a66d31a0e4b7e242d2238b89d7b02b30280c9af2342eecce5b0062539->enter($__internal_17a5e93a66d31a0e4b7e242d2238b89d7b02b30280c9af2342eecce5b0062539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_c8f79aa26fb568f8c396b866f1638d91f4aa6d9383f9e6ce5a359bffc6c6c451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f79aa26fb568f8c396b866f1638d91f4aa6d9383f9e6ce5a359bffc6c6c451->enter($__internal_c8f79aa26fb568f8c396b866f1638d91f4aa6d9383f9e6ce5a359bffc6c6c451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_17a5e93a66d31a0e4b7e242d2238b89d7b02b30280c9af2342eecce5b0062539->leave($__internal_17a5e93a66d31a0e4b7e242d2238b89d7b02b30280c9af2342eecce5b0062539_prof);

        
        $__internal_c8f79aa26fb568f8c396b866f1638d91f4aa6d9383f9e6ce5a359bffc6c6c451->leave($__internal_c8f79aa26fb568f8c396b866f1638d91f4aa6d9383f9e6ce5a359bffc6c6c451_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
