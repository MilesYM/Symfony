<?php

/* YMTestBundle:Default:index.html.twig */
class __TwigTemplate_0c9900b8fcaaf1f6b6f1422ee1ae3f5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("YMTestBundle::layout.html.twig");

        $this->blocks = array(
            'bodyAdmin' => array($this, 'block_bodyAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YMTestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 6
        echo "

\t<div class=\"container\">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class=\"hero-unit\">
        <div class='span12'>
\t\t\t<h1>Hello to the crew !</h1><br/><br/>
\t\t\t<p>Welcome on you Admin Dashboard !<br/> Here you can manage the artist and albums of the webiste</p>
\t\t</div>

\t\t<div class='span4 offset6'>
\t\t\t\t<p>There are <strong>";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["albums"]) ? $context["albums"] : null)), "html", null, true);
        echo "</strong> Albums In the DataBase</p>
\t\t\t\t<p>There are <strong>";
        // line 19
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["artists"]) ? $context["artists"] : null)), "html", null, true);
        echo "</strong> Artists In the DataBase</p>
\t\t</div>
\t\t
        <p><a class=\"btn btn-primary btn-large\" href=\"http://www.linkedin.com/pub/yohann-merran/4b/ab9/aa\">See my Portfolio &raquo;</a></p>
      </div>

      <!-- Example row of columns -->
      <div class=\"row show-grid\">
\t\t<a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_Album"), "html", null, true);
        echo "\">
\t\t\t<div class=\"span6\">
\t\t\t\t<h2>Manage Albums</h2>
\t\t\t\tYou are able to see the list of all the albums on the website, edit them, add some and delete them.
\t\t\t</div>
\t\t</a>
        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_Artist"), "html", null, true);
        echo "\">
\t\t\t<div class=\"span6\">
\t\t\t\t<h2>Manage Artists</h2>
\t\t\t\tYou are able to see the list of all the artists on the website, edit them, add some and delete them.
\t\t\t</div>
\t\t</a>
      </div>

    ";
    }

    public function getTemplateName()
    {
        return "YMTestBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 33,  49 => 19,  187 => 72,  167 => 63,  149 => 58,  137 => 56,  117 => 52,  40 => 10,  37 => 9,  113 => 31,  87 => 16,  56 => 23,  23 => 2,  123 => 57,  115 => 55,  106 => 49,  77 => 28,  90 => 34,  80 => 28,  62 => 22,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  131 => 55,  128 => 50,  125 => 54,  107 => 36,  38 => 6,  155 => 58,  144 => 53,  141 => 51,  139 => 55,  135 => 67,  126 => 45,  109 => 41,  103 => 37,  101 => 32,  70 => 24,  67 => 15,  61 => 13,  47 => 12,  105 => 22,  96 => 18,  93 => 28,  83 => 18,  76 => 27,  72 => 14,  68 => 23,  50 => 20,  27 => 4,  91 => 20,  84 => 33,  74 => 28,  66 => 26,  55 => 15,  94 => 35,  88 => 6,  79 => 17,  59 => 14,  21 => 2,  46 => 21,  29 => 3,  44 => 11,  35 => 8,  31 => 6,  43 => 20,  28 => 5,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  163 => 59,  159 => 61,  154 => 64,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 34,  78 => 30,  75 => 23,  71 => 19,  63 => 24,  58 => 24,  41 => 15,  34 => 11,  26 => 6,  24 => 3,  32 => 5,  25 => 3,  22 => 2,  19 => 1,  184 => 70,  178 => 68,  171 => 62,  165 => 58,  162 => 57,  157 => 65,  153 => 54,  151 => 59,  143 => 57,  138 => 51,  136 => 50,  133 => 64,  130 => 47,  122 => 53,  119 => 56,  116 => 32,  111 => 37,  108 => 31,  102 => 21,  98 => 36,  95 => 34,  92 => 17,  89 => 19,  85 => 25,  81 => 40,  73 => 25,  64 => 17,  60 => 27,  57 => 11,  54 => 16,  51 => 11,  48 => 27,  45 => 18,  42 => 10,  39 => 12,  36 => 5,  33 => 4,  30 => 7,);
    }
}
