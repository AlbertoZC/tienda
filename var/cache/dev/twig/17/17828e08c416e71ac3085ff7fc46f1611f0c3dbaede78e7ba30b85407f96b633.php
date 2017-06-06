<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_2085c1b3268776e260a077bea7a89c53df6d829ab60b1b2008a1136d22e2e42e extends Twig_Template
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
        $__internal_6024d16e86f85fbc16ca68721b5a13d1d2cdfef1af092ded62935c83c26ed2c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6024d16e86f85fbc16ca68721b5a13d1d2cdfef1af092ded62935c83c26ed2c3->enter($__internal_6024d16e86f85fbc16ca68721b5a13d1d2cdfef1af092ded62935c83c26ed2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_a2cd0f4124a815444888716dfd4fbe5b07a37cc8bb53d41d08990350fb1db704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2cd0f4124a815444888716dfd4fbe5b07a37cc8bb53d41d08990350fb1db704->enter($__internal_a2cd0f4124a815444888716dfd4fbe5b07a37cc8bb53d41d08990350fb1db704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6024d16e86f85fbc16ca68721b5a13d1d2cdfef1af092ded62935c83c26ed2c3->leave($__internal_6024d16e86f85fbc16ca68721b5a13d1d2cdfef1af092ded62935c83c26ed2c3_prof);

        
        $__internal_a2cd0f4124a815444888716dfd4fbe5b07a37cc8bb53d41d08990350fb1db704->leave($__internal_a2cd0f4124a815444888716dfd4fbe5b07a37cc8bb53d41d08990350fb1db704_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
