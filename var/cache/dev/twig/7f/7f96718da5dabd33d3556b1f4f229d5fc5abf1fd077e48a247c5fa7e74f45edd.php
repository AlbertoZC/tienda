<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4f4d3faa391e0f24e4d5f1beea1a9fb317f00549cd477e1e662eb5d88eb9d52e extends Twig_Template
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
        $__internal_4c67974e2042bc500da58443cab63f36fdf1f7db923469bc2b3a05f9d090c338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c67974e2042bc500da58443cab63f36fdf1f7db923469bc2b3a05f9d090c338->enter($__internal_4c67974e2042bc500da58443cab63f36fdf1f7db923469bc2b3a05f9d090c338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_717da798f7f50a32578324b3da7f3b3f97b7e4333f253532d64166a6c0706e14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717da798f7f50a32578324b3da7f3b3f97b7e4333f253532d64166a6c0706e14->enter($__internal_717da798f7f50a32578324b3da7f3b3f97b7e4333f253532d64166a6c0706e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4c67974e2042bc500da58443cab63f36fdf1f7db923469bc2b3a05f9d090c338->leave($__internal_4c67974e2042bc500da58443cab63f36fdf1f7db923469bc2b3a05f9d090c338_prof);

        
        $__internal_717da798f7f50a32578324b3da7f3b3f97b7e4333f253532d64166a6c0706e14->leave($__internal_717da798f7f50a32578324b3da7f3b3f97b7e4333f253532d64166a6c0706e14_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
