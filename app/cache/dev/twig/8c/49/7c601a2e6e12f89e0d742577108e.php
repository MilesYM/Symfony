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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 12
                echo "\t\t\t\t<div class=\"span12 alert alert-info\" style=\"margin-left:0px\">
\t\t\t\t\t";
                // line 13
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["artists"]) ? $context["artists"] : $this->getContext($context, "artists"))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["artists"]) ? $context["artists"] : $this->getContext($context, "artists")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
            // line 45
            echo "\t\t\t\t\t<tr class=\"tableContent\">
\t\t\t\t\t\t<td onclick=\"location.href='";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_ReviewArtist", array("id" => $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "id"))), "html", null, true);
            echo "'\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "id"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td onclick=\"location.href='";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_ReviewArtist", array("id" => $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "id"))), "html", null, true);
            echo "'\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "name"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td onclick=\"location.href='";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_ReviewArtist", array("id" => $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "id"))), "html", null, true);
            echo "'\">";
            echo twig_slice($this->env, $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "biography"), 0, 100);
            echo "...</td>
\t\t\t\t\t\t<td onclick=\"location.href='";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_ReviewArtist", array("id" => $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "id"))), "html", null, true);
            echo "'\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "albums")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 50
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "picture")) == 0)) {
                // line 51
                echo "\t\t\t\t\t\t\t<td onclick=\"location.href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_ReviewArtist", array("id" => $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "id"))), "html", null, true);
                echo "'\"><img class='imgList' src='";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/no_image.png"), "html", null, true);
                echo "'></td>
\t\t\t\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t\t\t\t<td onclick=\"location.href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_ReviewArtist", array("id" => $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "id"))), "html", null, true);
                echo "'\"><img class='imgList' src='";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/Artists/" . $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "picture"))), "html", null, true);
                echo "'></td>
\t\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t\t<td><a class='Right btn btn-danger delete' data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_DeleteArtist", array("id" => $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "id"))), "html", null, true);
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
        return array (  165 => 64,  156 => 60,  145 => 55,  137 => 53,  129 => 51,  127 => 50,  121 => 49,  115 => 48,  109 => 47,  103 => 46,  100 => 45,  95 => 44,  74 => 26,  69 => 24,  61 => 18,  57 => 16,  48 => 13,  45 => 12,  41 => 11,  38 => 10,  36 => 9,  31 => 6,  28 => 5,);
    }
}
