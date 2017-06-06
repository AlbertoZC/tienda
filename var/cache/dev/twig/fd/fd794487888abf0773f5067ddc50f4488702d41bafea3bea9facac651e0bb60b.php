<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_909920452a4d5a2b1d6c2dd8e2772510fc980639890cedf351a5059878330780 extends Twig_Template
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
        $__internal_aaeb3b9338bcc2e6af7f3ad04afcf4f57f60e41490a69b21901067c0ae7886b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaeb3b9338bcc2e6af7f3ad04afcf4f57f60e41490a69b21901067c0ae7886b9->enter($__internal_aaeb3b9338bcc2e6af7f3ad04afcf4f57f60e41490a69b21901067c0ae7886b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_f8a8053247499c2144c3675b047cdaead324aab61c828db85a386f4c82e4533a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8a8053247499c2144c3675b047cdaead324aab61c828db85a386f4c82e4533a->enter($__internal_f8a8053247499c2144c3675b047cdaead324aab61c828db85a386f4c82e4533a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_aaeb3b9338bcc2e6af7f3ad04afcf4f57f60e41490a69b21901067c0ae7886b9->leave($__internal_aaeb3b9338bcc2e6af7f3ad04afcf4f57f60e41490a69b21901067c0ae7886b9_prof);

        
        $__internal_f8a8053247499c2144c3675b047cdaead324aab61c828db85a386f4c82e4533a->leave($__internal_f8a8053247499c2144c3675b047cdaead324aab61c828db85a386f4c82e4533a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
