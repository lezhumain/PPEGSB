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
        // line 73
        echo "    </body>
</html>

";
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
        echo "            GSB - JUJU - CLECLE - MOMO
        ";
    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        // line 67
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\" />
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/js/jquery-ui.js"), "html", null, true);
        echo "\" type=\"text/javascript\" />
        <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" />
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/js/jquery.datetimepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\" />
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/js/maplace.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" />
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 71,  170 => 70,  146 => 60,  65 => 66,  58 => 60,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 73,  63 => 15,  59 => 14,  38 => 7,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 8,  78 => 21,  46 => 7,  27 => 4,  44 => 50,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 69,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 55,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 11,  22 => 2,  246 => 90,  157 => 67,  145 => 46,  139 => 54,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 15,  98 => 14,  96 => 31,  83 => 7,  74 => 5,  66 => 15,  55 => 15,  52 => 56,  50 => 54,  43 => 8,  41 => 7,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 68,  154 => 66,  149 => 61,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 9,  86 => 28,  82 => 22,  80 => 6,  73 => 19,  64 => 17,  60 => 63,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 14,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
