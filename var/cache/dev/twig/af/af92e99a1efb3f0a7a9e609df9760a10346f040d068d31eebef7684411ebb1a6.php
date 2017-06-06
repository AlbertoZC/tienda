<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_91cfe39bf96e55acb08e6a7bc08963c05241befb51acccf23313894d9fb6bc42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_acc236d2fadb471044f278ba8a7116deeafee0d153cb30e3481d863020be647d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acc236d2fadb471044f278ba8a7116deeafee0d153cb30e3481d863020be647d->enter($__internal_acc236d2fadb471044f278ba8a7116deeafee0d153cb30e3481d863020be647d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_74d4004acbc821027387cf5e32f75fd0ba83b93b3239432cdf45ee87d5cc306c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d4004acbc821027387cf5e32f75fd0ba83b93b3239432cdf45ee87d5cc306c->enter($__internal_74d4004acbc821027387cf5e32f75fd0ba83b93b3239432cdf45ee87d5cc306c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acc236d2fadb471044f278ba8a7116deeafee0d153cb30e3481d863020be647d->leave($__internal_acc236d2fadb471044f278ba8a7116deeafee0d153cb30e3481d863020be647d_prof);

        
        $__internal_74d4004acbc821027387cf5e32f75fd0ba83b93b3239432cdf45ee87d5cc306c->leave($__internal_74d4004acbc821027387cf5e32f75fd0ba83b93b3239432cdf45ee87d5cc306c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_69474933861bb821f57b78789b10a60f2b06fcd1ca3241fc28cf717188a2e395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69474933861bb821f57b78789b10a60f2b06fcd1ca3241fc28cf717188a2e395->enter($__internal_69474933861bb821f57b78789b10a60f2b06fcd1ca3241fc28cf717188a2e395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1f015c20feccb8fd069544d83f992486b055abb2b4f73b092f050e5513501b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f015c20feccb8fd069544d83f992486b055abb2b4f73b092f050e5513501b23->enter($__internal_1f015c20feccb8fd069544d83f992486b055abb2b4f73b092f050e5513501b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1f015c20feccb8fd069544d83f992486b055abb2b4f73b092f050e5513501b23->leave($__internal_1f015c20feccb8fd069544d83f992486b055abb2b4f73b092f050e5513501b23_prof);

        
        $__internal_69474933861bb821f57b78789b10a60f2b06fcd1ca3241fc28cf717188a2e395->leave($__internal_69474933861bb821f57b78789b10a60f2b06fcd1ca3241fc28cf717188a2e395_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3623e658bfb3cc073c98b153f3e977c5632a92dd6a25510dc59dcd4e0f921574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3623e658bfb3cc073c98b153f3e977c5632a92dd6a25510dc59dcd4e0f921574->enter($__internal_3623e658bfb3cc073c98b153f3e977c5632a92dd6a25510dc59dcd4e0f921574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cc5f5001cdff83357b48a835cd0f4f9a0cbd492a289922145059247b9a49d9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5f5001cdff83357b48a835cd0f4f9a0cbd492a289922145059247b9a49d9d2->enter($__internal_cc5f5001cdff83357b48a835cd0f4f9a0cbd492a289922145059247b9a49d9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cc5f5001cdff83357b48a835cd0f4f9a0cbd492a289922145059247b9a49d9d2->leave($__internal_cc5f5001cdff83357b48a835cd0f4f9a0cbd492a289922145059247b9a49d9d2_prof);

        
        $__internal_3623e658bfb3cc073c98b153f3e977c5632a92dd6a25510dc59dcd4e0f921574->leave($__internal_3623e658bfb3cc073c98b153f3e977c5632a92dd6a25510dc59dcd4e0f921574_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee1e09100431851da48b8d2a49700d4c5bed813aaa6ad49ea609739e49a9b66e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1e09100431851da48b8d2a49700d4c5bed813aaa6ad49ea609739e49a9b66e->enter($__internal_ee1e09100431851da48b8d2a49700d4c5bed813aaa6ad49ea609739e49a9b66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d069ba97a509ec35d81536cae16a0891d47d75f73b848c2d352c45e687ec6680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d069ba97a509ec35d81536cae16a0891d47d75f73b848c2d352c45e687ec6680->enter($__internal_d069ba97a509ec35d81536cae16a0891d47d75f73b848c2d352c45e687ec6680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_d069ba97a509ec35d81536cae16a0891d47d75f73b848c2d352c45e687ec6680->leave($__internal_d069ba97a509ec35d81536cae16a0891d47d75f73b848c2d352c45e687ec6680_prof);

        
        $__internal_ee1e09100431851da48b8d2a49700d4c5bed813aaa6ad49ea609739e49a9b66e->leave($__internal_ee1e09100431851da48b8d2a49700d4c5bed813aaa6ad49ea609739e49a9b66e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
