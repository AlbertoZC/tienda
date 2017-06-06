<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_393da864547072fbae849e24b1fdad62bc7ded7547c947c91f96ce70c64d0369 extends Twig_Template
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
        $__internal_8cadef87b04d981e9957ed2a8a48a31054b42179ef6cef0a27ecd5405808ef52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cadef87b04d981e9957ed2a8a48a31054b42179ef6cef0a27ecd5405808ef52->enter($__internal_8cadef87b04d981e9957ed2a8a48a31054b42179ef6cef0a27ecd5405808ef52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_0ea22245a06092ec9200f52626d11b12f90d6d2798b0b0f7510ec9240ef8d005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea22245a06092ec9200f52626d11b12f90d6d2798b0b0f7510ec9240ef8d005->enter($__internal_0ea22245a06092ec9200f52626d11b12f90d6d2798b0b0f7510ec9240ef8d005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8cadef87b04d981e9957ed2a8a48a31054b42179ef6cef0a27ecd5405808ef52->leave($__internal_8cadef87b04d981e9957ed2a8a48a31054b42179ef6cef0a27ecd5405808ef52_prof);

        
        $__internal_0ea22245a06092ec9200f52626d11b12f90d6d2798b0b0f7510ec9240ef8d005->leave($__internal_0ea22245a06092ec9200f52626d11b12f90d6d2798b0b0f7510ec9240ef8d005_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
