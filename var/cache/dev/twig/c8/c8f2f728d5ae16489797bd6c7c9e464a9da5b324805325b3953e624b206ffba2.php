<?php

/* ::base.html.twig */
class __TwigTemplate_dfa9721b78528cbeedbe3eb29513387d6f609652fa90b23015e5701593a91d11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78f49153578187a3d4c556dfeabe1301abfaa66a217f351d7ff4c335a7505bb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f49153578187a3d4c556dfeabe1301abfaa66a217f351d7ff4c335a7505bb3->enter($__internal_78f49153578187a3d4c556dfeabe1301abfaa66a217f351d7ff4c335a7505bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a1bd112283db6fbcb838c589bf993d73d34c73d0276bdd4feb2dc50bcff022fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1bd112283db6fbcb838c589bf993d73d34c73d0276bdd4feb2dc50bcff022fc->enter($__internal_a1bd112283db6fbcb838c589bf993d73d34c73d0276bdd4feb2dc50bcff022fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_78f49153578187a3d4c556dfeabe1301abfaa66a217f351d7ff4c335a7505bb3->leave($__internal_78f49153578187a3d4c556dfeabe1301abfaa66a217f351d7ff4c335a7505bb3_prof);

        
        $__internal_a1bd112283db6fbcb838c589bf993d73d34c73d0276bdd4feb2dc50bcff022fc->leave($__internal_a1bd112283db6fbcb838c589bf993d73d34c73d0276bdd4feb2dc50bcff022fc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_36fec72503c0f1a18c5270462037618886f30d8ce1af3c0c73736295d0b14828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36fec72503c0f1a18c5270462037618886f30d8ce1af3c0c73736295d0b14828->enter($__internal_36fec72503c0f1a18c5270462037618886f30d8ce1af3c0c73736295d0b14828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4d5210e66da6502a568878c495912dca078473a181966d11d5340b8d2b424583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5210e66da6502a568878c495912dca078473a181966d11d5340b8d2b424583->enter($__internal_4d5210e66da6502a568878c495912dca078473a181966d11d5340b8d2b424583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4d5210e66da6502a568878c495912dca078473a181966d11d5340b8d2b424583->leave($__internal_4d5210e66da6502a568878c495912dca078473a181966d11d5340b8d2b424583_prof);

        
        $__internal_36fec72503c0f1a18c5270462037618886f30d8ce1af3c0c73736295d0b14828->leave($__internal_36fec72503c0f1a18c5270462037618886f30d8ce1af3c0c73736295d0b14828_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4820747437005b110b89c58b2382ded5c433b1523d77fd2935dbda7c3cf92aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4820747437005b110b89c58b2382ded5c433b1523d77fd2935dbda7c3cf92aa1->enter($__internal_4820747437005b110b89c58b2382ded5c433b1523d77fd2935dbda7c3cf92aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7b5b686ed1e744358cd2d960a7bd44d015f98ec6a761eaf970d4a31b1603ef3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5b686ed1e744358cd2d960a7bd44d015f98ec6a761eaf970d4a31b1603ef3b->enter($__internal_7b5b686ed1e744358cd2d960a7bd44d015f98ec6a761eaf970d4a31b1603ef3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7b5b686ed1e744358cd2d960a7bd44d015f98ec6a761eaf970d4a31b1603ef3b->leave($__internal_7b5b686ed1e744358cd2d960a7bd44d015f98ec6a761eaf970d4a31b1603ef3b_prof);

        
        $__internal_4820747437005b110b89c58b2382ded5c433b1523d77fd2935dbda7c3cf92aa1->leave($__internal_4820747437005b110b89c58b2382ded5c433b1523d77fd2935dbda7c3cf92aa1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2d7e47071e7db39d02cf3fbe800dce181cd780c5a4e30d055df4c47e617d680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d7e47071e7db39d02cf3fbe800dce181cd780c5a4e30d055df4c47e617d680->enter($__internal_b2d7e47071e7db39d02cf3fbe800dce181cd780c5a4e30d055df4c47e617d680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5b6c2dc781b08274fd89f79e4bae624eedb3696cf6c2e9fdea52430f9ea9b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b6c2dc781b08274fd89f79e4bae624eedb3696cf6c2e9fdea52430f9ea9b0d->enter($__internal_e5b6c2dc781b08274fd89f79e4bae624eedb3696cf6c2e9fdea52430f9ea9b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e5b6c2dc781b08274fd89f79e4bae624eedb3696cf6c2e9fdea52430f9ea9b0d->leave($__internal_e5b6c2dc781b08274fd89f79e4bae624eedb3696cf6c2e9fdea52430f9ea9b0d_prof);

        
        $__internal_b2d7e47071e7db39d02cf3fbe800dce181cd780c5a4e30d055df4c47e617d680->leave($__internal_b2d7e47071e7db39d02cf3fbe800dce181cd780c5a4e30d055df4c47e617d680_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_98232944a1891216ad8f8e065d1e41fd5762b1d9c0a489df2184cee39459eb14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98232944a1891216ad8f8e065d1e41fd5762b1d9c0a489df2184cee39459eb14->enter($__internal_98232944a1891216ad8f8e065d1e41fd5762b1d9c0a489df2184cee39459eb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_abb19fb7847d6efc18d09b84931deec3aa67fd67597fba3bb39b6e51d7af0d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb19fb7847d6efc18d09b84931deec3aa67fd67597fba3bb39b6e51d7af0d27->enter($__internal_abb19fb7847d6efc18d09b84931deec3aa67fd67597fba3bb39b6e51d7af0d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_abb19fb7847d6efc18d09b84931deec3aa67fd67597fba3bb39b6e51d7af0d27->leave($__internal_abb19fb7847d6efc18d09b84931deec3aa67fd67597fba3bb39b6e51d7af0d27_prof);

        
        $__internal_98232944a1891216ad8f8e065d1e41fd5762b1d9c0a489df2184cee39459eb14->leave($__internal_98232944a1891216ad8f8e065d1e41fd5762b1d9c0a489df2184cee39459eb14_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\app/Resources\\views/base.html.twig");
    }
}
