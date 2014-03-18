<?php

/* PPEGSBBundle:Default:base.html.twig */
class __TwigTemplate_99aad333ae44105510a2914abe6d68c252fdefe52cdcab4cb280fcaebc0b7a49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8 />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
        <section id = \"head\">
        ";
        // line 17
        $this->displayBlock('navigation', $context, $blocks);
        // line 53
        echo "        </section>


        <section class=\"content\">
        ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "        </section>


        <section id=\"foot\">
        ";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "        </section>

        <!-- javascripts -->
        ";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "        
    </body>
</html>

";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "GSB";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
                <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/css/jquery.datetimepicker.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
                <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/css/maplace.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
                <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 17
    public function block_navigation($context, array $blocks = array())
    {
        // line 18
        echo "            <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                      
                        <a class=\"navbar-brand\" href=\"#\">Application GSB</a>
                    </div>
                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"../praticiens/liste.php\">Praticiens</a></li>
                            <li><a href=\"../medicaments/liste.php\">Medicaments</a></li>
                            <li><a href=\"../maps/geolocalisation.php\">Carte</a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Actions rapport <b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"../../rapports/liste.php\">Mes rapports</a></li>
                                    <li><a href=\"#\">Mes brouillons</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\"><button type=\"button\" id=\"rapport_dropdown\" class=\"btn btn-primary\">Nouveau Rapport</button></a></li>
                                </ul>
                            </li>
                      </ul>
                    </div><!--/.nav-collapse -->
                    <div class=\"nav navbar-nav navbar-right\" id=\"bouton-deco-new\">
                        <a href=\"#\"><button type=\"button\" class=\"btn btn-primary\">Nouveau Rapport</button></a>
                        <a href=\"#\"><button type=\"button\" class=\"btn btn-danger\">Deconnexion</button></a>
                    </div>
                </div>
            </div>  
        ";
    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        // line 58
        echo "        ";
    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        // line 64
        echo "           <!--  GSB - JUJU - CLECLE - MOMO -->
        ";
    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        // line 70
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/js/jquery-ui.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
        <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/js/jquery.datetimepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/js/maplace.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
        ";
    }

    public function getTemplateName()
    {
        return "PPEGSBBundle:Default:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  180 => 74,  176 => 73,  172 => 72,  168 => 71,  163 => 70,  160 => 69,  155 => 64,  152 => 63,  148 => 58,  145 => 57,  107 => 18,  104 => 17,  98 => 12,  94 => 11,  90 => 10,  85 => 9,  82 => 8,  76 => 7,  68 => 75,  66 => 69,  61 => 66,  59 => 63,  53 => 59,  51 => 57,  45 => 53,  43 => 17,  38 => 14,  36 => 8,  32 => 7,  25 => 2,);
    }
}
