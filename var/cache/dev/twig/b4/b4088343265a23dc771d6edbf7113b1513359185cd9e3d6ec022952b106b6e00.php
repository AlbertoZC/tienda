<?php

/* base.html.twig */
class __TwigTemplate_8b9af363f79570f54baa8c6ff66ed3fd291fa90ae054c39ca27af4c2c64f332b extends Twig_Template
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
        $__internal_3746b39ee0619d2224f2929100793a8f8def97f1f4e158f853c9fc044212a7a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3746b39ee0619d2224f2929100793a8f8def97f1f4e158f853c9fc044212a7a3->enter($__internal_3746b39ee0619d2224f2929100793a8f8def97f1f4e158f853c9fc044212a7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a264b31e74b608b8841ee5f1d77b243536d6e8127eddf5a1032444807478de83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a264b31e74b608b8841ee5f1d77b243536d6e8127eddf5a1032444807478de83->enter($__internal_a264b31e74b608b8841ee5f1d77b243536d6e8127eddf5a1032444807478de83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<?php use Symfony\\Component\\HttpFoundation\\Session\\Session;
\t\t\$session = new Session();
\t\t\$session->start();
 ?>
    <head>
        <meta charset=\"UTF-8\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"estilo.css\">
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t<style>
\t\t#nav{background-color:#FFFFFF;width:100%;height:50px;box-shadow: 0px 1px 50px #5E5E5E;position:fixed;top:0px;}
\t\t</style>
    </head>
    <body>
\t<div id=\"nav\">
\t<?php if(\$session->get('name')!='usuario'){
\t\techo \"Hola\";
\t}else{
\t\techo \"Hola\"+\$session->get('username');
\t} ?>
\t</div>
\t<br><br>
        ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    </body>

</html>
";
        
        $__internal_3746b39ee0619d2224f2929100793a8f8def97f1f4e158f853c9fc044212a7a3->leave($__internal_3746b39ee0619d2224f2929100793a8f8def97f1f4e158f853c9fc044212a7a3_prof);

        
        $__internal_a264b31e74b608b8841ee5f1d77b243536d6e8127eddf5a1032444807478de83->leave($__internal_a264b31e74b608b8841ee5f1d77b243536d6e8127eddf5a1032444807478de83_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_9970f0a8ad0870e26021cbeb1ac5b98292e7b66ed8ea6843ab722ea59a243bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9970f0a8ad0870e26021cbeb1ac5b98292e7b66ed8ea6843ab722ea59a243bcb->enter($__internal_9970f0a8ad0870e26021cbeb1ac5b98292e7b66ed8ea6843ab722ea59a243bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1abb58891c0cce0fe9fc044b3df995c01ea9c847abdc81639732651405fa2fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1abb58891c0cce0fe9fc044b3df995c01ea9c847abdc81639732651405fa2fbe->enter($__internal_1abb58891c0cce0fe9fc044b3df995c01ea9c847abdc81639732651405fa2fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1abb58891c0cce0fe9fc044b3df995c01ea9c847abdc81639732651405fa2fbe->leave($__internal_1abb58891c0cce0fe9fc044b3df995c01ea9c847abdc81639732651405fa2fbe_prof);

        
        $__internal_9970f0a8ad0870e26021cbeb1ac5b98292e7b66ed8ea6843ab722ea59a243bcb->leave($__internal_9970f0a8ad0870e26021cbeb1ac5b98292e7b66ed8ea6843ab722ea59a243bcb_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc0fe6ad1a5a567c2accef1d9e0db0b558d108bff0867740f65f5c57c60aa352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0fe6ad1a5a567c2accef1d9e0db0b558d108bff0867740f65f5c57c60aa352->enter($__internal_bc0fe6ad1a5a567c2accef1d9e0db0b558d108bff0867740f65f5c57c60aa352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2b03eb50cf3e287e65426bf0f0cbe5b12ded278fa23d3bbe7c11c54720d83337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b03eb50cf3e287e65426bf0f0cbe5b12ded278fa23d3bbe7c11c54720d83337->enter($__internal_2b03eb50cf3e287e65426bf0f0cbe5b12ded278fa23d3bbe7c11c54720d83337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2b03eb50cf3e287e65426bf0f0cbe5b12ded278fa23d3bbe7c11c54720d83337->leave($__internal_2b03eb50cf3e287e65426bf0f0cbe5b12ded278fa23d3bbe7c11c54720d83337_prof);

        
        $__internal_bc0fe6ad1a5a567c2accef1d9e0db0b558d108bff0867740f65f5c57c60aa352->leave($__internal_bc0fe6ad1a5a567c2accef1d9e0db0b558d108bff0867740f65f5c57c60aa352_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_52db223659e2c6abab8986cf919ba7db3871a056d4aa24c2c2a5a6cd4b7f84c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52db223659e2c6abab8986cf919ba7db3871a056d4aa24c2c2a5a6cd4b7f84c9->enter($__internal_52db223659e2c6abab8986cf919ba7db3871a056d4aa24c2c2a5a6cd4b7f84c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6cba54283c78668ebabd7fb92574302c45ab712f2594d703797b5473cc2e170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cba54283c78668ebabd7fb92574302c45ab712f2594d703797b5473cc2e170->enter($__internal_d6cba54283c78668ebabd7fb92574302c45ab712f2594d703797b5473cc2e170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d6cba54283c78668ebabd7fb92574302c45ab712f2594d703797b5473cc2e170->leave($__internal_d6cba54283c78668ebabd7fb92574302c45ab712f2594d703797b5473cc2e170_prof);

        
        $__internal_52db223659e2c6abab8986cf919ba7db3871a056d4aa24c2c2a5a6cd4b7f84c9->leave($__internal_52db223659e2c6abab8986cf919ba7db3871a056d4aa24c2c2a5a6cd4b7f84c9_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ba7b77b07f07afff92a9f95e0a8679bfeead98b45538301c899602d203a4dee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7b77b07f07afff92a9f95e0a8679bfeead98b45538301c899602d203a4dee7->enter($__internal_ba7b77b07f07afff92a9f95e0a8679bfeead98b45538301c899602d203a4dee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d53a02751f35feae0c3ca4e99582673bb86b7263013aeb987dca6df3b61990ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53a02751f35feae0c3ca4e99582673bb86b7263013aeb987dca6df3b61990ef->enter($__internal_d53a02751f35feae0c3ca4e99582673bb86b7263013aeb987dca6df3b61990ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d53a02751f35feae0c3ca4e99582673bb86b7263013aeb987dca6df3b61990ef->leave($__internal_d53a02751f35feae0c3ca4e99582673bb86b7263013aeb987dca6df3b61990ef_prof);

        
        $__internal_ba7b77b07f07afff92a9f95e0a8679bfeead98b45538301c899602d203a4dee7->leave($__internal_ba7b77b07f07afff92a9f95e0a8679bfeead98b45538301c899602d203a4dee7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 27,  117 => 26,  100 => 11,  82 => 10,  69 => 28,  66 => 27,  64 => 26,  46 => 12,  44 => 11,  40 => 10,  29 => 1,);
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
<?php use Symfony\\Component\\HttpFoundation\\Session\\Session;
\t\t\$session = new Session();
\t\t\$session->start();
 ?>
    <head>
        <meta charset=\"UTF-8\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"estilo.css\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
\t\t<style>
\t\t#nav{background-color:#FFFFFF;width:100%;height:50px;box-shadow: 0px 1px 50px #5E5E5E;position:fixed;top:0px;}
\t\t</style>
    </head>
    <body>
\t<div id=\"nav\">
\t<?php if(\$session->get('name')!='usuario'){
\t\techo \"Hola\";
\t}else{
\t\techo \"Hola\"+\$session->get('username');
\t} ?>
\t</div>
\t<br><br>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>

</html>
", "base.html.twig", "C:\\xampp\\htdocs\\symfony\\tienda\\app\\Resources\\views\\base.html.twig");
    }
}
