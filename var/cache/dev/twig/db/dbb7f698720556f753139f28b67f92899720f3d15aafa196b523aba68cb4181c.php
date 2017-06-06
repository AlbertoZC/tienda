<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_edbe43f5215e0223e82a14fd5699a4ffc0a0fa47118f18f61b5954a72f05be9c extends Twig_Template
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
        $__internal_90c9d15cf476b617e2fccda7366d6c1378c27c59680ed4a9d9f4252e0b169ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90c9d15cf476b617e2fccda7366d6c1378c27c59680ed4a9d9f4252e0b169ae3->enter($__internal_90c9d15cf476b617e2fccda7366d6c1378c27c59680ed4a9d9f4252e0b169ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_3e5046f2a13a19ba654a441bec9ea81e37e047b70519b1a8fcbc608a89d026e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5046f2a13a19ba654a441bec9ea81e37e047b70519b1a8fcbc608a89d026e4->enter($__internal_3e5046f2a13a19ba654a441bec9ea81e37e047b70519b1a8fcbc608a89d026e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_90c9d15cf476b617e2fccda7366d6c1378c27c59680ed4a9d9f4252e0b169ae3->leave($__internal_90c9d15cf476b617e2fccda7366d6c1378c27c59680ed4a9d9f4252e0b169ae3_prof);

        
        $__internal_3e5046f2a13a19ba654a441bec9ea81e37e047b70519b1a8fcbc608a89d026e4->leave($__internal_3e5046f2a13a19ba654a441bec9ea81e37e047b70519b1a8fcbc608a89d026e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
