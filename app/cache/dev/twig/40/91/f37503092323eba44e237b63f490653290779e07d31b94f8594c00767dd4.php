<?php

/* PPEGSBBundle:Default:liste_prat.html.twig */
class __TwigTemplate_4091f37503092323eba44e237b63f490653290779e07d31b94f8594c00767dd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
\t<html>
\t<head>
\t\t\t<meta charset=\"utf-8\">
\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t\t<title>Praticiens</title>
\t\t\t<link rel=\"stylesheet\" href=\"../../style/bootstrap.css\">
\t</head>
\t<body>
\t\t<?php 
\t\t\t// Barre de navigation, contient la balise script.
\t\t\tinclude \"../include/barre_navigation.html\"
\t\t ?>
\t\t <div class=\"table-responsive\">
\t\t\t <table class=\"table table-hover\">
\t\t\t \t<!-- Entête du tableau -->
\t\t\t \t<thead> 
\t\t\t \t\t<tr>
\t\t\t \t\t\t<th>Numero</th>
\t\t\t \t\t\t<th>Nom</th>
\t\t\t \t\t\t<th>Prenom</th>
\t\t\t \t\t\t<th>Adresse</th>
\t\t\t \t\t\t<th>CP</th>
\t\t\t \t\t\t<th>Ville</th>
\t\t\t \t\t\t<th>Coeff. Notoriété</th>
\t\t\t \t\t\t<th>Lieu d'exercice</th>
\t\t\t \t\t</tr>
\t\t\t \t</thead>
\t\t\t \t<!-- fin de l'entête -->
\t\t\t </table>
\t\t</div>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "PPEGSBBundle:Default:liste_prat.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 71,  170 => 70,  146 => 60,  65 => 66,  58 => 60,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 73,  63 => 15,  59 => 14,  38 => 7,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 8,  78 => 21,  46 => 7,  27 => 4,  44 => 50,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 69,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 55,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 11,  22 => 2,  246 => 90,  157 => 67,  145 => 46,  139 => 54,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 15,  98 => 14,  96 => 31,  83 => 7,  74 => 5,  66 => 15,  55 => 15,  52 => 56,  50 => 54,  43 => 8,  41 => 7,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 68,  154 => 66,  149 => 61,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 9,  86 => 28,  82 => 22,  80 => 6,  73 => 19,  64 => 17,  60 => 63,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 14,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
