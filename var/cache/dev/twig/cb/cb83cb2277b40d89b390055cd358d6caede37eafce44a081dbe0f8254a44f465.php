<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_9432ae1103d3494e8bb638f8c7707357a10e3d19892aff84790d78508103549c extends Twig_Template
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
        $__internal_16f43c895d94bf14a46726a5552f1c5c55ecd81b2c9ec2d4c791316f05ad89fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f43c895d94bf14a46726a5552f1c5c55ecd81b2c9ec2d4c791316f05ad89fe->enter($__internal_16f43c895d94bf14a46726a5552f1c5c55ecd81b2c9ec2d4c791316f05ad89fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_4ec3daabd8c6ff5fe66aa70bdb7ebd6ae73c820f3567e5d390b13d3f54601095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec3daabd8c6ff5fe66aa70bdb7ebd6ae73c820f3567e5d390b13d3f54601095->enter($__internal_4ec3daabd8c6ff5fe66aa70bdb7ebd6ae73c820f3567e5d390b13d3f54601095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_16f43c895d94bf14a46726a5552f1c5c55ecd81b2c9ec2d4c791316f05ad89fe->leave($__internal_16f43c895d94bf14a46726a5552f1c5c55ecd81b2c9ec2d4c791316f05ad89fe_prof);

        
        $__internal_4ec3daabd8c6ff5fe66aa70bdb7ebd6ae73c820f3567e5d390b13d3f54601095->leave($__internal_4ec3daabd8c6ff5fe66aa70bdb7ebd6ae73c820f3567e5d390b13d3f54601095_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
