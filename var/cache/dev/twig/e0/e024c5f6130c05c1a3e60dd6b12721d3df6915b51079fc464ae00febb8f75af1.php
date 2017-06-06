<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_97b62ca6e9106649548a2a2803ed3ead9fb0fc02d44502d10e2d9eb461ff47fd extends Twig_Template
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
        $__internal_32eda7150f921f7dd63a4faecc5e09df710f24c9eb3c11fff0bee93a97b41e99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32eda7150f921f7dd63a4faecc5e09df710f24c9eb3c11fff0bee93a97b41e99->enter($__internal_32eda7150f921f7dd63a4faecc5e09df710f24c9eb3c11fff0bee93a97b41e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_9c710d69b7199b146143c950a8a65f7247256c8eafedca0fec5ea87332648c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c710d69b7199b146143c950a8a65f7247256c8eafedca0fec5ea87332648c32->enter($__internal_9c710d69b7199b146143c950a8a65f7247256c8eafedca0fec5ea87332648c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_32eda7150f921f7dd63a4faecc5e09df710f24c9eb3c11fff0bee93a97b41e99->leave($__internal_32eda7150f921f7dd63a4faecc5e09df710f24c9eb3c11fff0bee93a97b41e99_prof);

        
        $__internal_9c710d69b7199b146143c950a8a65f7247256c8eafedca0fec5ea87332648c32->leave($__internal_9c710d69b7199b146143c950a8a65f7247256c8eafedca0fec5ea87332648c32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
