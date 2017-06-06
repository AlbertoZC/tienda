<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_bc091436827f2506f003f2a3bd017e63cab97865af27f6d9ff9cfbeb7b806c1b extends Twig_Template
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
        $__internal_753f8fecec59c133e80f89a0465b9eb2327dba9f36049c8501bb5c8b4f8b469d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_753f8fecec59c133e80f89a0465b9eb2327dba9f36049c8501bb5c8b4f8b469d->enter($__internal_753f8fecec59c133e80f89a0465b9eb2327dba9f36049c8501bb5c8b4f8b469d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_4fc4f91d9ba8713d7157349d81c1d22ab737d1e7c46807d2c411353672f36f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc4f91d9ba8713d7157349d81c1d22ab737d1e7c46807d2c411353672f36f70->enter($__internal_4fc4f91d9ba8713d7157349d81c1d22ab737d1e7c46807d2c411353672f36f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_753f8fecec59c133e80f89a0465b9eb2327dba9f36049c8501bb5c8b4f8b469d->leave($__internal_753f8fecec59c133e80f89a0465b9eb2327dba9f36049c8501bb5c8b4f8b469d_prof);

        
        $__internal_4fc4f91d9ba8713d7157349d81c1d22ab737d1e7c46807d2c411353672f36f70->leave($__internal_4fc4f91d9ba8713d7157349d81c1d22ab737d1e7c46807d2c411353672f36f70_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
