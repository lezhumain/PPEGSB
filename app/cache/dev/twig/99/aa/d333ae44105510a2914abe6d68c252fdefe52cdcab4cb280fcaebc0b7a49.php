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
        // line 54
        echo "        </section>


        <section class=\"content\">
        ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "        </section>


        <section id=\"foot\">
        ";
        // line 64
        $this->displayBlock('footer', $context, $blocks);
        // line 67
        echo "        </section>

        <!-- javascripts -->
        ";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
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
                      
                        <a class=\"navbar-brand\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("ppegsb_homepage");
        echo "\">Application GSB</a>
                        
                    </div>
                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("ppesgb_listePra");
        echo "\">Praticiens</a></li>
                            <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("ppesgb_listeMed");
        echo "\">Medicaments</a></li>
                            <li><a href=\"#\">Carte</a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Actions rapport <b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("ppegsb_homepage");
        echo "\">Mes rapports</a></li>
                                    <!-- <li><a href=\"#\">Mes brouillons</a></li> -->
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("ppegsb_newFicheRp");
        echo "\">Nouveau Rapport</a></li>
                                </ul>
                            </li>
                      </ul>
                    </div><!--/.nav-collapse -->
                    <div class=\"nav navbar-nav navbar-right\" id=\"bouton-deco-new\">
                        <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("ppegsb_newFicheRp");
        echo "\"><button type=\"button\" class=\"btn btn-primary\">Nouveau Rapport</button></a>
                        <a href=\"#\"><button type=\"button\" class=\"btn btn-danger\">Deconnexion</button></a>
                    </div>
                </div>
            </div>  
        ";
    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        // line 59
        echo "        ";
    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        // line 65
        echo "           <!--  GSB - JUJU - CLECLE - MOMO -->
        ";
    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        // line 71
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/js/jquery-ui.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ppegsb/js/jquery.datetimepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
        <script src=\"";
        // line 75
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
        return array (  195 => 74,  191 => 73,  174 => 65,  167 => 59,  127 => 33,  104 => 17,  90 => 10,  76 => 7,  53 => 60,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 18,  61 => 67,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 70,  159 => 61,  143 => 56,  135 => 53,  119 => 28,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 64,  38 => 14,  94 => 11,  89 => 20,  85 => 9,  75 => 17,  68 => 76,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 64,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 2,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 42,  139 => 39,  131 => 34,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 12,  96 => 31,  83 => 25,  74 => 14,  66 => 70,  55 => 15,  52 => 21,  50 => 10,  43 => 17,  41 => 8,  35 => 5,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 75,  193 => 73,  189 => 71,  187 => 72,  182 => 71,  176 => 64,  173 => 65,  168 => 72,  164 => 58,  162 => 57,  154 => 48,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 8,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 58,  48 => 13,  45 => 54,  42 => 7,  39 => 9,  36 => 8,  33 => 4,  30 => 3,);
    }
}
