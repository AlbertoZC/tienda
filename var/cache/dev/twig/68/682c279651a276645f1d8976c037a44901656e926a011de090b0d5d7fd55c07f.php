<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_7fa301137c70abe5968c877eb4d3b2dc2980a891691ac47cae0c0cb63083ffee extends Twig_Template
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
        $__internal_9a94587a892d78b980c2777a94d79b362bba7afcb36ba5b9687cd5af3341f909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a94587a892d78b980c2777a94d79b362bba7afcb36ba5b9687cd5af3341f909->enter($__internal_9a94587a892d78b980c2777a94d79b362bba7afcb36ba5b9687cd5af3341f909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_3c14bd3afc45aa468283293c61c78d5b21cc3313b772c3728b4c1845a095cf8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c14bd3afc45aa468283293c61c78d5b21cc3313b772c3728b4c1845a095cf8e->enter($__internal_3c14bd3afc45aa468283293c61c78d5b21cc3313b772c3728b4c1845a095cf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_9a94587a892d78b980c2777a94d79b362bba7afcb36ba5b9687cd5af3341f909->leave($__internal_9a94587a892d78b980c2777a94d79b362bba7afcb36ba5b9687cd5af3341f909_prof);

        
        $__internal_3c14bd3afc45aa468283293c61c78d5b21cc3313b772c3728b4c1845a095cf8e->leave($__internal_3c14bd3afc45aa468283293c61c78d5b21cc3313b772c3728b4c1845a095cf8e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
