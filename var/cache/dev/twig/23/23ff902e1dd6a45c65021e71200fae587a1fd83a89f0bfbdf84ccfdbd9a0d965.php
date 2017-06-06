<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_48b75de831ff92d32f797b4f2914857c161a659c9848ca003d40035007a7586e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4e0bd2b491345e953975fcb6f5f2113e614cbede9a0473977c6dce99c03036d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4e0bd2b491345e953975fcb6f5f2113e614cbede9a0473977c6dce99c03036d->enter($__internal_a4e0bd2b491345e953975fcb6f5f2113e614cbede9a0473977c6dce99c03036d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_b5a9fcd81992242e60ded82a184868cc0f9b35c9bb068bdc08823985afaa33ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a9fcd81992242e60ded82a184868cc0f9b35c9bb068bdc08823985afaa33ef->enter($__internal_b5a9fcd81992242e60ded82a184868cc0f9b35c9bb068bdc08823985afaa33ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4e0bd2b491345e953975fcb6f5f2113e614cbede9a0473977c6dce99c03036d->leave($__internal_a4e0bd2b491345e953975fcb6f5f2113e614cbede9a0473977c6dce99c03036d_prof);

        
        $__internal_b5a9fcd81992242e60ded82a184868cc0f9b35c9bb068bdc08823985afaa33ef->leave($__internal_b5a9fcd81992242e60ded82a184868cc0f9b35c9bb068bdc08823985afaa33ef_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_fc6174577dc72b4a4167185f7fc43833c7c72e20bfec5317befde0fc69d21912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6174577dc72b4a4167185f7fc43833c7c72e20bfec5317befde0fc69d21912->enter($__internal_fc6174577dc72b4a4167185f7fc43833c7c72e20bfec5317befde0fc69d21912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_59461fe195f6b1c057fe52f4948d24abf4eb65347c169876c13499459b6915ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59461fe195f6b1c057fe52f4948d24abf4eb65347c169876c13499459b6915ed->enter($__internal_59461fe195f6b1c057fe52f4948d24abf4eb65347c169876c13499459b6915ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_59461fe195f6b1c057fe52f4948d24abf4eb65347c169876c13499459b6915ed->leave($__internal_59461fe195f6b1c057fe52f4948d24abf4eb65347c169876c13499459b6915ed_prof);

        
        $__internal_fc6174577dc72b4a4167185f7fc43833c7c72e20bfec5317befde0fc69d21912->leave($__internal_fc6174577dc72b4a4167185f7fc43833c7c72e20bfec5317befde0fc69d21912_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_022bc80571985da478546a5bbe90006a3984655c8f8210a4b0e0ea186fd72930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_022bc80571985da478546a5bbe90006a3984655c8f8210a4b0e0ea186fd72930->enter($__internal_022bc80571985da478546a5bbe90006a3984655c8f8210a4b0e0ea186fd72930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_54167e4273da0be650640b96f890e418c13bb83fa15e400bb59e149451c0b31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54167e4273da0be650640b96f890e418c13bb83fa15e400bb59e149451c0b31b->enter($__internal_54167e4273da0be650640b96f890e418c13bb83fa15e400bb59e149451c0b31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_54167e4273da0be650640b96f890e418c13bb83fa15e400bb59e149451c0b31b->leave($__internal_54167e4273da0be650640b96f890e418c13bb83fa15e400bb59e149451c0b31b_prof);

        
        $__internal_022bc80571985da478546a5bbe90006a3984655c8f8210a4b0e0ea186fd72930->leave($__internal_022bc80571985da478546a5bbe90006a3984655c8f8210a4b0e0ea186fd72930_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
