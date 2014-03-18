<?php

/* PPEGSBBundle:Default:liste_rp.html.twig */
class __TwigTemplate_87cf8ac65acf08b4832966700aec9f130b35ce56740b8469e80015ca1fd022a7 extends Twig_Template
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
 <div class=\"table-responsive\">
\t <table class=\"table table-hover\">
\t \t<!-- Entête du tableau -->
\t \t<thead> 
\t \t\t<tr>
\t \t\t\t<th>Numero</th>
\t \t\t\t<th>Praticien</th>
\t \t\t\t<th>Date</th>
\t \t\t\t<th>Motif</th>
\t \t\t</tr>
\t \t</thead>
\t \t<tbody>
\t \t\t<tr>
\t \t\t\t<td>plop</td>
\t \t\t\t<td>plop</td>
\t \t\t\t<td>plop</td>
\t \t\t\t<td>plop</td>
\t \t\t</tr>
\t \t</tbody>
\t \t<!-- fin de l'entête -->
\t </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "PPEGSBBundle:Default:liste_rp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 63,  195 => 74,  191 => 73,  174 => 65,  167 => 59,  127 => 33,  104 => 17,  90 => 10,  76 => 41,  53 => 60,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 18,  61 => 67,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 70,  159 => 61,  143 => 56,  135 => 53,  119 => 28,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 64,  38 => 6,  94 => 60,  89 => 20,  85 => 9,  75 => 17,  68 => 76,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 64,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 2,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 42,  139 => 39,  131 => 34,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 12,  96 => 61,  83 => 25,  74 => 40,  66 => 70,  55 => 15,  52 => 21,  50 => 10,  43 => 17,  41 => 8,  35 => 5,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 75,  193 => 73,  189 => 71,  187 => 72,  182 => 71,  176 => 64,  173 => 65,  168 => 72,  164 => 58,  162 => 57,  154 => 48,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 8,  80 => 43,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 58,  48 => 13,  45 => 54,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
