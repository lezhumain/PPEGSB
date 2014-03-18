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
            'navigation' => array($this, 'block_navigation'),
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

    // line 5
    public function block_navigation($context, array $blocks = array())
    {
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "\t\t<div class=\"col-md-6 col-md-offset-3 well\" id = \"formConnexion\">
\t\t\t<form>
\t\t\t\t<h2>Connectez-vous</h2>
\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Matricule\" required autofocus>
\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" required>
\t\t\t\t<button class=\"btn btn-primary col-md-6 col-md-offset-3\" type=\"submit\">Connexion</button>
\t\t\t</form>
\t\t\t<div class=\"col-md-12\" id = \"formConnexionFooter\">
\t\t\t\t<a href=\"#\">Contact administration</a>
\t\t\t\t<a href=\"#\"> - Application GSB</a>
\t\t\t</div>
\t\t</div>
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
        return array (  44 => 9,  41 => 8,  36 => 5,  30 => 3,);
    }
}
