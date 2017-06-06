<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eec7f2e14c815cb4b410e5ccdaba76006c4a515783a226949455616a9d3ecd55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce64b5da69edbe4468e41af3f34b8e92bbd3f4c8f39f42ec095d1a711bf15676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce64b5da69edbe4468e41af3f34b8e92bbd3f4c8f39f42ec095d1a711bf15676->enter($__internal_ce64b5da69edbe4468e41af3f34b8e92bbd3f4c8f39f42ec095d1a711bf15676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c853fc632915d29ad3636082d41ad0bd3efbf4f9c7aacc24e5c1dc6c65c5b6ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c853fc632915d29ad3636082d41ad0bd3efbf4f9c7aacc24e5c1dc6c65c5b6ef->enter($__internal_c853fc632915d29ad3636082d41ad0bd3efbf4f9c7aacc24e5c1dc6c65c5b6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce64b5da69edbe4468e41af3f34b8e92bbd3f4c8f39f42ec095d1a711bf15676->leave($__internal_ce64b5da69edbe4468e41af3f34b8e92bbd3f4c8f39f42ec095d1a711bf15676_prof);

        
        $__internal_c853fc632915d29ad3636082d41ad0bd3efbf4f9c7aacc24e5c1dc6c65c5b6ef->leave($__internal_c853fc632915d29ad3636082d41ad0bd3efbf4f9c7aacc24e5c1dc6c65c5b6ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_55f737217c1185c5bd7a9fcfe708bc44bb168150647c5de3e88772b9a69d27bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55f737217c1185c5bd7a9fcfe708bc44bb168150647c5de3e88772b9a69d27bc->enter($__internal_55f737217c1185c5bd7a9fcfe708bc44bb168150647c5de3e88772b9a69d27bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5f0cb6a22035857363dc38933c13827799c387530986cf01d459ed0be819464b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0cb6a22035857363dc38933c13827799c387530986cf01d459ed0be819464b->enter($__internal_5f0cb6a22035857363dc38933c13827799c387530986cf01d459ed0be819464b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_5f0cb6a22035857363dc38933c13827799c387530986cf01d459ed0be819464b->leave($__internal_5f0cb6a22035857363dc38933c13827799c387530986cf01d459ed0be819464b_prof);

        
        $__internal_55f737217c1185c5bd7a9fcfe708bc44bb168150647c5de3e88772b9a69d27bc->leave($__internal_55f737217c1185c5bd7a9fcfe708bc44bb168150647c5de3e88772b9a69d27bc_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_77e33a6ce3182dcdecbbb54787e4ca71a8c42e46aeb30f03cb0c0d590113ca9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e33a6ce3182dcdecbbb54787e4ca71a8c42e46aeb30f03cb0c0d590113ca9d->enter($__internal_77e33a6ce3182dcdecbbb54787e4ca71a8c42e46aeb30f03cb0c0d590113ca9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_17c610394206fa19ad90299588069d4b2b843417154cd3b3bba5cf87cdb5624c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c610394206fa19ad90299588069d4b2b843417154cd3b3bba5cf87cdb5624c->enter($__internal_17c610394206fa19ad90299588069d4b2b843417154cd3b3bba5cf87cdb5624c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_17c610394206fa19ad90299588069d4b2b843417154cd3b3bba5cf87cdb5624c->leave($__internal_17c610394206fa19ad90299588069d4b2b843417154cd3b3bba5cf87cdb5624c_prof);

        
        $__internal_77e33a6ce3182dcdecbbb54787e4ca71a8c42e46aeb30f03cb0c0d590113ca9d->leave($__internal_77e33a6ce3182dcdecbbb54787e4ca71a8c42e46aeb30f03cb0c0d590113ca9d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_205bbe9e64fbc4a31b8e5cc45056297a95e9ae961df678f67da36461b33b16fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205bbe9e64fbc4a31b8e5cc45056297a95e9ae961df678f67da36461b33b16fd->enter($__internal_205bbe9e64fbc4a31b8e5cc45056297a95e9ae961df678f67da36461b33b16fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_796a78cd26a40a0143d0fe4ff1cdb5d85ee1c368fbe71bea8a89aa0fdd20a26d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796a78cd26a40a0143d0fe4ff1cdb5d85ee1c368fbe71bea8a89aa0fdd20a26d->enter($__internal_796a78cd26a40a0143d0fe4ff1cdb5d85ee1c368fbe71bea8a89aa0fdd20a26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_796a78cd26a40a0143d0fe4ff1cdb5d85ee1c368fbe71bea8a89aa0fdd20a26d->leave($__internal_796a78cd26a40a0143d0fe4ff1cdb5d85ee1c368fbe71bea8a89aa0fdd20a26d_prof);

        
        $__internal_205bbe9e64fbc4a31b8e5cc45056297a95e9ae961df678f67da36461b33b16fd->leave($__internal_205bbe9e64fbc4a31b8e5cc45056297a95e9ae961df678f67da36461b33b16fd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
