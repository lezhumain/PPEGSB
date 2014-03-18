<?php

/* PPEGSBBundle:Default:fiche_prat.html.twig */
class __TwigTemplate_d04f7e600a14cc62046a45abe0c49c16e0d0a640943506a5ebaaddfe22c9af98 extends Twig_Template
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
        echo "GSB - Liste des rapports";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"container\">
\t<div class=\"row\">
\t\t<form action=\"../maps/geolocalisation.php\" method=\"POST\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<div class=\"form-group\">
\t\t\t    \t<label for=\"numero\">Numéro</label>
\t\t\t    \t<input class=\"form-control\" id=\"numero\">
\t\t\t  \t</div>
\t\t\t  \t<div class=\"form-group\">
\t\t\t    \t<label for=\"nom\">Nom</label>
\t\t\t    \t<input class=\"form-control\" id=\"nom\">
\t\t\t  \t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t  \t<div class=\"form-group\">
\t\t\t    \t<label for=\"prenom\">Prénom</label>
\t\t\t    \t<input class=\"form-control\" id=\"prenom\">
\t\t\t  \t</div>
\t\t\t  \t<div class=\"form-group\">
\t\t\t    \t<label for=\"adresse\">Adresse</label>
\t\t\t    \t<input class=\"form-control\" name=\"adresse\" id=\"adresse\" value=\"32 rue des granges\">
\t\t\t  \t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t  \t<div class=\"form-group\">
\t\t\t    \t<label for=\"coeff_notoriete\">Coefficient Notoriété</label>
\t\t\t    \t<input class=\"form-control\" id=\"coeff_notoriete\">
\t\t\t  \t</div>
\t\t\t  \t<div class=\"form-group\">
\t\t\t    \t\t<div class=\"form-inline\">
\t\t\t    \t\t\t<label for=\"cp\">CP /</label>
\t\t\t    \t\t\t<label for=\"ville\">Ville</label>
\t\t\t    \t\t\t<br>
\t\t\t    \t\t\t<input class=\"form-control\" name=\"cp\" id=\"cp\" style=\"width: 65px;\" value=\"69005\">
\t\t\t    \t\t\t<input class=\"form-control\" name=\"ville\" id=\"ville\" style=\"width : 188px;\" value=\"Lyon\">
\t\t\t    \t\t\t<input type=\"hidden\" class=\"form-control\" id=\"pays\" style=\"width : 285px;\" value=\"France\">
\t\t\t    \t\t</div>
\t\t\t    </div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t  \t<div class=\"form-group\">
\t\t\t    \t<label for=\"lieu_exe\">Lieu d'Exercice</label>
\t\t\t    \t<input class=\"form-control\" id=\"lieu_exe\">
\t\t\t  \t</div>
\t\t\t  \t<!-- <div class=\"form-group\">
\t\t\t    \t<label for=\"localiser\">Localiser</label>
\t\t\t    \t<input type=\"submit\" class=\"form-control btn btn-primary\">
\t\t\t  \t</div> -->
\t\t\t</div>
\t\t</form>
\t</div>
</div>

";
        // line 60
        if (($this->getContext($context, "new") == 1)) {
            // line 61
            echo "formulaire dajout
";
        } else {
            // line 63
            echo "affichage du prat
";
        }
    }

    public function getTemplateName()
    {
        return "PPEGSBBundle:Default:fiche_prat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 63,  195 => 74,  191 => 73,  174 => 65,  167 => 59,  127 => 33,  104 => 17,  90 => 10,  76 => 7,  53 => 60,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 18,  61 => 67,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 70,  159 => 61,  143 => 56,  135 => 53,  119 => 28,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 64,  38 => 6,  94 => 60,  89 => 20,  85 => 9,  75 => 17,  68 => 76,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 64,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 2,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 42,  139 => 39,  131 => 34,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 12,  96 => 61,  83 => 25,  74 => 14,  66 => 70,  55 => 15,  52 => 21,  50 => 10,  43 => 17,  41 => 8,  35 => 5,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 75,  193 => 73,  189 => 71,  187 => 72,  182 => 71,  176 => 64,  173 => 65,  168 => 72,  164 => 58,  162 => 57,  154 => 48,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 8,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 58,  48 => 13,  45 => 54,  42 => 7,  39 => 9,  36 => 8,  33 => 4,  30 => 3,);
    }
}
