<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_9d5ce6b71acb3f19cc479ca358c3b1229d9d0145fe73e5b87b1aecb87011a7f0 extends Twig_Template
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
        $__internal_60256ad95e993fe78f233d722ad1926c77767ae3783cb7f69cf51a9263b02490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60256ad95e993fe78f233d722ad1926c77767ae3783cb7f69cf51a9263b02490->enter($__internal_60256ad95e993fe78f233d722ad1926c77767ae3783cb7f69cf51a9263b02490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_aba01a7b8bd41388623b74672369aa9ca129bed82ac454dc47596dd7b865e4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba01a7b8bd41388623b74672369aa9ca129bed82ac454dc47596dd7b865e4b5->enter($__internal_aba01a7b8bd41388623b74672369aa9ca129bed82ac454dc47596dd7b865e4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_60256ad95e993fe78f233d722ad1926c77767ae3783cb7f69cf51a9263b02490->leave($__internal_60256ad95e993fe78f233d722ad1926c77767ae3783cb7f69cf51a9263b02490_prof);

        
        $__internal_aba01a7b8bd41388623b74672369aa9ca129bed82ac454dc47596dd7b865e4b5->leave($__internal_aba01a7b8bd41388623b74672369aa9ca129bed82ac454dc47596dd7b865e4b5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
