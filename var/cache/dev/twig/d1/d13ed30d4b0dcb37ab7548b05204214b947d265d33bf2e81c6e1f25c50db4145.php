<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_ef74fcace844ccdc0827040464c45d29988129509eb0bb5733b16ac64caddafe extends Twig_Template
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
        $__internal_b57cb4fceae74a053fce73422719a5798a849ac173248ad5d3d1f3629c36d1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b57cb4fceae74a053fce73422719a5798a849ac173248ad5d3d1f3629c36d1f6->enter($__internal_b57cb4fceae74a053fce73422719a5798a849ac173248ad5d3d1f3629c36d1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_b58fcc1e904fe0756c766225444727373bbc57f14bdb7c8634e81cd49d4926e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58fcc1e904fe0756c766225444727373bbc57f14bdb7c8634e81cd49d4926e3->enter($__internal_b58fcc1e904fe0756c766225444727373bbc57f14bdb7c8634e81cd49d4926e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b57cb4fceae74a053fce73422719a5798a849ac173248ad5d3d1f3629c36d1f6->leave($__internal_b57cb4fceae74a053fce73422719a5798a849ac173248ad5d3d1f3629c36d1f6_prof);

        
        $__internal_b58fcc1e904fe0756c766225444727373bbc57f14bdb7c8634e81cd49d4926e3->leave($__internal_b58fcc1e904fe0756c766225444727373bbc57f14bdb7c8634e81cd49d4926e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
