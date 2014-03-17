<?php

/* ::base.html.twig */
class __TwigTemplate_dd6181eb2e8e2efd5a80daf9822f6f40cd177ce2a75423da68ecc3dd5865e011 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8 />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <section id = \"head\">
        ";
        // line 14
        $this->displayBlock('navigation', $context, $blocks);
        // line 50
        echo "        </section>


        <section class=\"content\">
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "        </section>


        <section id=\"foot\">
        ";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 63
        echo "        </section>


        ";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "    </body>
</html>

<!--
  <style type=\"text/css\" media=\"screen\">
    #bouton-deco-new {
        margin-top: -40px;
        margin-right: -40px;
    }
    @media screen and (max-width: 1040px) {
        #bouton-deco-new{
            margin-top : 0px;
            float: left;
        }
        #bouton-deco-new button {
            width: 150px;
            display: inline;
            margin-left: 20px;
        }
        #rapport_dropdown, .divider {
            visibility: hidden;
        }
    }
  </style>-->";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "GSB";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
                <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/css/jquery.datetimepicker.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
                <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/css/maplace.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 14
    public function block_navigation($context, array $blocks = array())
    {
        // line 15
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

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo "        ";
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "            Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
        ";
    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        // line 67
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "db602d5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db602d5_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/db602d5_jquery_1.js");
            // line 69
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "db602d5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db602d5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/db602d5.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 71
        echo " <!--        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\" />
 <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/js/jquery-ui.js"), "html", null, true);
        echo "\" type=\"text/javascript\" />
 <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" />
 <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/js/jquery.datetimepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\" />
 <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/js/maplace.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" /> -->
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  213 => 75,  209 => 74,  205 => 73,  201 => 72,  196 => 71,  182 => 69,  177 => 67,  174 => 66,  169 => 61,  166 => 60,  162 => 55,  159 => 54,  121 => 15,  118 => 14,  112 => 9,  108 => 8,  103 => 7,  100 => 6,  94 => 5,  67 => 77,  65 => 66,  60 => 63,  58 => 60,  52 => 56,  50 => 54,  44 => 50,  42 => 14,  37 => 11,  35 => 6,  31 => 5,  25 => 1,);
    }
}
