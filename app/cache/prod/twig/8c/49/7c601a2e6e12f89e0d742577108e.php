<?php

/* YMTestBundle:Musician:list.html.twig */
class __TwigTemplate_8c497c601a2e6e12f89e0d742577108e extends Twig_Template
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
<div class=\"container\">

\t";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "flashbag", array(), "any", false, true), "get", array(0 => "info"), "method", true, true)) {
            // line 10
            echo "\t\t<div class=\"row-fluid\">
\t\t\t";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 12
                echo "\t\t\t\t<div class=\"span12 alert alert-info\" style=\"margin-left:0px\">
\t\t\t\t\t";
                // line 13
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 16
            echo "\t\t</div>
\t";
        }
        // line 18
        echo "
\t<div class='row-fluid'>

\t\t<div class = \"span12\" >
\t\t\t<form class=\"well form-search\">
\t\t\t\t<span class='Left'>
\t\t\t\t\tThere are actually <strong>";
        // line 24
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["artists"]) ? $context["artists"] : null)), "html", null, true);
        echo "</strong> Artists in the Database
\t\t\t\t</span>
\t\t\t\t<a class='Right btn btn-success' href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_AddArtist"), "html", null, true);
        echo "\">
\t\t\t\t\t<i class=\"icon-plus-sign\"></i> &nbsp; Add a new Artist
\t\t\t\t</a>
\t\t\t</form>
\t\t</div>
\t</div>

\t<div class='row-fluid'>
\t\t<div class=\"span12\">
\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t<tr class=\"tableHead active topNoBar\">
\t\t\t\t\t<td id='top-left'>Id</td>
\t\t\t\t\t<td>Name</td>
\t\t\t\t\t<td>Biography</td>
\t\t\t\t\t<td>Number of Albums</td>
\t\t\t\t\t<td>Picture</td>
\t\t\t\t\t<td id='top-right'>Delete</td>
\t\t\t\t</tr>
\t\t\t\t";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["artists"]) ? $context["artists"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
            // line 45
            echo "\t\t\t\t\t<tr class=\"tableContent\">
\t\t\t\t\t\t<td onclick=\"location.href='";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_ReviewArtist", array("id" => $this->getAttribute((isset($context["artist"]) ? $context["artist"] : null), "id"))), "html", null, true);
            echo "'\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artist"]) ? $context["artist"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td onclick=\"location.href='";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_ReviewArtist", array("id" => $this->getAttribute((isset($context["artist"]) ? $context["artist"] : null), "id"))), "html", null, true);
            echo "'\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artist"]) ? $context["artist"] : null), "name"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td onclick=\"location.href='";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_ReviewArtist", array("id" => $this->getAttribute((isset($context["artist"]) ? $context["artist"] : null), "id"))), "html", null, true);
            echo "'\">";
            echo twig_slice($this->env, $this->getAttribute((isset($context["artist"]) ? $context["artist"] : null), "biography"), 0, 100);
            echo "...</td>
\t\t\t\t\t\t<td onclick=\"location.href='";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_ReviewArtist", array("id" => $this->getAttribute((isset($context["artist"]) ? $context["artist"] : null), "id"))), "html", null, true);
            echo "'\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["artist"]) ? $context["artist"] : null), "albums")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 50
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["artist"]) ? $context["artist"] : null), "picture")) == 0)) {
                // line 51
                echo "\t\t\t\t\t\t\t<td onclick=\"location.href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_ReviewArtist", array("id" => $this->getAttribute((isset($context["artist"]) ? $context["artist"] : null), "id"))), "html", null, true);
                echo "'\"><img class='imgList' src='";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/no_image.png"), "html", null, true);
                echo "'></td>
\t\t\t\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t\t\t\t<td onclick=\"location.href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_ReviewArtist", array("id" => $this->getAttribute((isset($context["artist"]) ? $context["artist"] : null), "id"))), "html", null, true);
                echo "'\"><img class='imgList' src='";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/Artists/" . $this->getAttribute((isset($context["artist"]) ? $context["artist"] : null), "picture"))), "html", null, true);
                echo "'></td>
\t\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t\t<td><a class='Right btn btn-danger delete' data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_DeleteArtist", array("id" => $this->getAttribute((isset($context["artist"]) ? $context["artist"] : null), "id"))), "html", null, true);
            echo "\" data-message=\"Are you sure you want to delete this Artist ?\">
\t\t\t\t\t\t\t<i class=\"icon-remove-sign icon-white\"></i>
\t\t\t\t\t\t</a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"10\" class=\"alert alert-error\">There are currently no Artists</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 64
        echo "\t\t\t</table>
\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "YMTestBundle:Musician:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 60,  145 => 55,  129 => 51,  69 => 24,  49 => 19,  187 => 72,  167 => 63,  149 => 58,  137 => 53,  117 => 52,  40 => 10,  37 => 9,  113 => 31,  87 => 16,  56 => 23,  23 => 2,  123 => 57,  115 => 48,  106 => 49,  77 => 28,  90 => 32,  80 => 28,  62 => 22,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  131 => 55,  128 => 50,  125 => 54,  107 => 36,  38 => 10,  155 => 58,  144 => 53,  141 => 51,  139 => 55,  135 => 67,  126 => 45,  109 => 47,  103 => 46,  101 => 32,  70 => 24,  67 => 15,  61 => 18,  47 => 13,  105 => 22,  96 => 18,  93 => 28,  83 => 18,  76 => 27,  72 => 14,  68 => 23,  50 => 20,  27 => 4,  91 => 20,  84 => 29,  74 => 26,  66 => 23,  55 => 15,  94 => 35,  88 => 6,  79 => 17,  59 => 14,  21 => 2,  46 => 21,  29 => 3,  44 => 11,  35 => 8,  31 => 6,  43 => 20,  28 => 5,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  163 => 59,  159 => 61,  154 => 64,  147 => 55,  132 => 48,  127 => 50,  121 => 49,  118 => 44,  114 => 42,  104 => 36,  100 => 45,  78 => 30,  75 => 23,  71 => 19,  63 => 24,  58 => 24,  41 => 11,  34 => 11,  26 => 6,  24 => 3,  32 => 5,  25 => 3,  22 => 2,  19 => 1,  184 => 70,  178 => 68,  171 => 62,  165 => 64,  162 => 57,  157 => 65,  153 => 54,  151 => 59,  143 => 57,  138 => 51,  136 => 50,  133 => 64,  130 => 47,  122 => 53,  119 => 56,  116 => 32,  111 => 37,  108 => 31,  102 => 21,  98 => 36,  95 => 44,  92 => 17,  89 => 19,  85 => 25,  81 => 40,  73 => 25,  64 => 17,  60 => 27,  57 => 16,  54 => 16,  51 => 11,  48 => 13,  45 => 12,  42 => 10,  39 => 12,  36 => 9,  33 => 4,  30 => 7,);
    }
}
