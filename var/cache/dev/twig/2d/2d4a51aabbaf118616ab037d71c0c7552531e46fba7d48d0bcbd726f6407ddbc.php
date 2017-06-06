<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a01f470a581e7c48a497142856e5518036b77523014133a0f5d8ac3ae504b66d extends Twig_Template
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
        $__internal_1b507f9dd82327346b8b883b9d8995eee861e9fc81002135fec35c27344386d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b507f9dd82327346b8b883b9d8995eee861e9fc81002135fec35c27344386d2->enter($__internal_1b507f9dd82327346b8b883b9d8995eee861e9fc81002135fec35c27344386d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e4cfa96462ac55771df02ca574dcc17d4f3c421b62e4f0a751c99859f88eb15c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4cfa96462ac55771df02ca574dcc17d4f3c421b62e4f0a751c99859f88eb15c->enter($__internal_e4cfa96462ac55771df02ca574dcc17d4f3c421b62e4f0a751c99859f88eb15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1b507f9dd82327346b8b883b9d8995eee861e9fc81002135fec35c27344386d2->leave($__internal_1b507f9dd82327346b8b883b9d8995eee861e9fc81002135fec35c27344386d2_prof);

        
        $__internal_e4cfa96462ac55771df02ca574dcc17d4f3c421b62e4f0a751c99859f88eb15c->leave($__internal_e4cfa96462ac55771df02ca574dcc17d4f3c421b62e4f0a751c99859f88eb15c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
