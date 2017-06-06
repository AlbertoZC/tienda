<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_26cf9bf30cb6908e94b72420d69b92dc184a271e6a2627c73312e1113d40db5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f56f8e30e8cb7b15bf3e4e513f4b28b1ddd1c69396ad4e87abeb02a9843f9477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56f8e30e8cb7b15bf3e4e513f4b28b1ddd1c69396ad4e87abeb02a9843f9477->enter($__internal_f56f8e30e8cb7b15bf3e4e513f4b28b1ddd1c69396ad4e87abeb02a9843f9477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_6783b47d9754e81dd52d2f9d2820ebab60543b6bf1b5508eed96977ddd4f92a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6783b47d9754e81dd52d2f9d2820ebab60543b6bf1b5508eed96977ddd4f92a5->enter($__internal_6783b47d9754e81dd52d2f9d2820ebab60543b6bf1b5508eed96977ddd4f92a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f56f8e30e8cb7b15bf3e4e513f4b28b1ddd1c69396ad4e87abeb02a9843f9477->leave($__internal_f56f8e30e8cb7b15bf3e4e513f4b28b1ddd1c69396ad4e87abeb02a9843f9477_prof);

        
        $__internal_6783b47d9754e81dd52d2f9d2820ebab60543b6bf1b5508eed96977ddd4f92a5->leave($__internal_6783b47d9754e81dd52d2f9d2820ebab60543b6bf1b5508eed96977ddd4f92a5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f2710ece4ef0b37904eb11ea6aed1a5448fe4ed88cfe99440771a4862dcfd65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f2710ece4ef0b37904eb11ea6aed1a5448fe4ed88cfe99440771a4862dcfd65->enter($__internal_9f2710ece4ef0b37904eb11ea6aed1a5448fe4ed88cfe99440771a4862dcfd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3e6c8f0384597728a95f8beea001190f761d6436d99cc4553e2e01b8b4f5e2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6c8f0384597728a95f8beea001190f761d6436d99cc4553e2e01b8b4f5e2d6->enter($__internal_3e6c8f0384597728a95f8beea001190f761d6436d99cc4553e2e01b8b4f5e2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3e6c8f0384597728a95f8beea001190f761d6436d99cc4553e2e01b8b4f5e2d6->leave($__internal_3e6c8f0384597728a95f8beea001190f761d6436d99cc4553e2e01b8b4f5e2d6_prof);

        
        $__internal_9f2710ece4ef0b37904eb11ea6aed1a5448fe4ed88cfe99440771a4862dcfd65->leave($__internal_9f2710ece4ef0b37904eb11ea6aed1a5448fe4ed88cfe99440771a4862dcfd65_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
