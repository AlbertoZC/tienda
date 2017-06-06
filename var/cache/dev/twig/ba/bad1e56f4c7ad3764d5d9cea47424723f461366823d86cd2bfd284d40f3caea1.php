<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_353dbf5fefe11ef5fae7530342ddf8862a94612839e6bd3e15ce057f5991fd7e extends Twig_Template
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
        $__internal_8ccd92c80d71e5c650172d9cf5000df30d0c1fc9992c8d0f3e69376ce55c4dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ccd92c80d71e5c650172d9cf5000df30d0c1fc9992c8d0f3e69376ce55c4dc4->enter($__internal_8ccd92c80d71e5c650172d9cf5000df30d0c1fc9992c8d0f3e69376ce55c4dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_bf52c5b17a0d4d85c388c2978609dfbfb5e4050c36ab0023b43e775cb4935dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf52c5b17a0d4d85c388c2978609dfbfb5e4050c36ab0023b43e775cb4935dbd->enter($__internal_bf52c5b17a0d4d85c388c2978609dfbfb5e4050c36ab0023b43e775cb4935dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_8ccd92c80d71e5c650172d9cf5000df30d0c1fc9992c8d0f3e69376ce55c4dc4->leave($__internal_8ccd92c80d71e5c650172d9cf5000df30d0c1fc9992c8d0f3e69376ce55c4dc4_prof);

        
        $__internal_bf52c5b17a0d4d85c388c2978609dfbfb5e4050c36ab0023b43e775cb4935dbd->leave($__internal_bf52c5b17a0d4d85c388c2978609dfbfb5e4050c36ab0023b43e775cb4935dbd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
