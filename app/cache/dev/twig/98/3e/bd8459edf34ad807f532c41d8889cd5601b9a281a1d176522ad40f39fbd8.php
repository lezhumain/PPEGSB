<?php

/* PPEGSBBundle:Default:index.html.twig */
class __TwigTemplate_983ebd8459edf34ad807f532c41d8889cd5601b9a281a1d176522ad40f39fbd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PPEGSBBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PPEGSBBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "GSB - Connexion";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<form class=\"form-signin\">
\t<h2 class=\"form-signin-heading\">Connectez-vous</h2>
\t<input type=\"text\" class=\"form-control\" placeholder=\"Identifiant\" required autofocus>
\t<input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" required>
\t<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Connexion</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "PPEGSBBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  35 => 6,  29 => 3,);
    }
}
