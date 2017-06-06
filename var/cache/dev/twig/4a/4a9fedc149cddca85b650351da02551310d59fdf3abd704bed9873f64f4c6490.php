<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_3370b3dcd81a99e02d11ac4d8629f3e21bebfa88f5fc14415e279f042a8c2f0d extends Twig_Template
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
        $__internal_940766d1e59d3d24238e01081d1f3bfb8f6ae24fcef055616659e426778be2ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_940766d1e59d3d24238e01081d1f3bfb8f6ae24fcef055616659e426778be2ab->enter($__internal_940766d1e59d3d24238e01081d1f3bfb8f6ae24fcef055616659e426778be2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_0db45369c6fd010c3cae46cf43ea7c71806a6ad42556394e2e7834594b228b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db45369c6fd010c3cae46cf43ea7c71806a6ad42556394e2e7834594b228b91->enter($__internal_0db45369c6fd010c3cae46cf43ea7c71806a6ad42556394e2e7834594b228b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_940766d1e59d3d24238e01081d1f3bfb8f6ae24fcef055616659e426778be2ab->leave($__internal_940766d1e59d3d24238e01081d1f3bfb8f6ae24fcef055616659e426778be2ab_prof);

        
        $__internal_0db45369c6fd010c3cae46cf43ea7c71806a6ad42556394e2e7834594b228b91->leave($__internal_0db45369c6fd010c3cae46cf43ea7c71806a6ad42556394e2e7834594b228b91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
