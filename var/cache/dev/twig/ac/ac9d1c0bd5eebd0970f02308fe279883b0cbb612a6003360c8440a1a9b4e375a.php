<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e7da76f07441292d28aa4d4a4d7349aa799a05b0fe197fdb0282353d41cfe9f3 extends Twig_Template
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
        $__internal_d6386a84f72bd3edf92241ad32281f05deeb0126a3fe9680573bbf4abd6f0e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6386a84f72bd3edf92241ad32281f05deeb0126a3fe9680573bbf4abd6f0e17->enter($__internal_d6386a84f72bd3edf92241ad32281f05deeb0126a3fe9680573bbf4abd6f0e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_a867547962918071a2de7937afb42d4275e233bc5b503d160fcab667e5577f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a867547962918071a2de7937afb42d4275e233bc5b503d160fcab667e5577f8c->enter($__internal_a867547962918071a2de7937afb42d4275e233bc5b503d160fcab667e5577f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d6386a84f72bd3edf92241ad32281f05deeb0126a3fe9680573bbf4abd6f0e17->leave($__internal_d6386a84f72bd3edf92241ad32281f05deeb0126a3fe9680573bbf4abd6f0e17_prof);

        
        $__internal_a867547962918071a2de7937afb42d4275e233bc5b503d160fcab667e5577f8c->leave($__internal_a867547962918071a2de7937afb42d4275e233bc5b503d160fcab667e5577f8c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
