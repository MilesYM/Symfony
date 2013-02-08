<?php

/* YMTestBundle:Album:list.html.twig */
class __TwigTemplate_0010b012a99f37feb1bead484e502655 extends Twig_Template
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
        // line 8
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "flashbag", array(), "any", false, true), "get", array(0 => "info"), "method", true, true)) {
            // line 9
            echo "\t\t<div class=\"row-fluid\">
\t\t\t";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 11
                echo "\t\t\t\t<div class=\"span12 alert alert-info\" style=\"margin-left:0px\">
\t\t\t\t\t";
                // line 12
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 15
            echo "\t\t</div>
\t";
        }
        // line 17
        echo "
\t<div class='row-fluid'>

\t\t<div class = \"span12\" >
\t\t\t<form class=\"well form-search\">
\t\t\t\t<span class='Left'>
\t\t\t\t\tThere are actually <strong>";
        // line 23
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["albums"]) ? $context["albums"] : $this->getContext($context, "albums"))), "html", null, true);
        echo "</strong> Albums in the Database
\t\t\t\t</span>
\t\t\t\t<a class='Right btn btn-success' href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_AddAlbum"), "html", null, true);
        echo "\">
\t\t\t\t\t<i class=\"icon-plus-sign\"></i> &nbsp; Add a new Album
\t\t\t\t</a>
\t\t\t</form>
\t\t</div>
\t</div>

\t<div class='row-fluid'>
\t\t<form action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_Album"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artist"), 'label', array("label" => "Sort by Artist:"));
        echo "
\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artist"), 'errors');
        echo "
\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artist"), 'widget');
        echo "
\t\t\t<input type=\"submit\" class=\"btn btn-primary\" name=\"Sort!\"/>
\t\t</form>
\t</div>

\t<div class='row-fluid'>
\t\t<div class=\"span12\">
\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t<tr class=\"tableHead active topNoBar\">
\t\t\t\t\t<td id='top-left'>Id</td>
\t\t\t\t\t<td>Name</td>
\t\t\t\t\t<td>Review</td>
\t\t\t\t\t<td>Artist</td>
\t\t\t\t\t<td>Picture</td>
\t\t\t\t\t<td id='top-right'>Delete</td>
\t\t\t\t</tr>
\t\t\t\t";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["albums"]) ? $context["albums"] : $this->getContext($context, "albums")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 53
            echo "\t\t\t\t\t<tr class=\"tableContent\">
\t\t\t\t\t\t<td onclick=\"location.href='";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_ReviewAlbum", array("id" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"))), "html", null, true);
            echo "'\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td onclick=\"location.href='";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_ReviewAlbum", array("id" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"))), "html", null, true);
            echo "'\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "name"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td onclick=\"location.href='";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_ReviewAlbum", array("id" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"))), "html", null, true);
            echo "'\">";
            echo twig_slice($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "songs"), 0, 100);
            echo "...</td>
\t\t\t\t\t\t<td onclick=\"location.href='";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_ReviewAlbum", array("id" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"))), "html", null, true);
            echo "'\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "artist"), "name"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 58
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "picture")) == 0)) {
                // line 59
                echo "\t\t\t\t\t\t\t<td onclick=\"location.href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_ReviewAlbum", array("id" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"))), "html", null, true);
                echo "'\"><img class='imgList' src='";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/no_image.png"), "html", null, true);
                echo "'></td>
\t\t\t\t\t\t";
            } else {
                // line 61
                echo "\t\t\t\t\t\t\t<td onclick=\"location.href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_ReviewAlbum", array("id" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"))), "html", null, true);
                echo "'\"><img class='imgList' src='";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/albums/" . $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "picture"))), "html", null, true);
                echo "'></td>
\t\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t\t\t<td><a class='Right btn btn-danger delete' data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_DeleteAlbum", array("id" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"))), "html", null, true);
            echo "\" data-message=\"Are you sure you want to delete this Album ?\">
\t\t\t\t\t\t\t<i class=\"icon-remove-sign icon-white\"></i>
\t\t\t\t\t\t</a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"10\" class=\"alert alert-error\">There are currently no Albums</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 72
        echo "\t\t\t</table>
\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "YMTestBundle:Album:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 72,  178 => 68,  167 => 63,  159 => 61,  151 => 59,  149 => 58,  143 => 57,  137 => 56,  131 => 55,  125 => 54,  122 => 53,  117 => 52,  98 => 36,  94 => 35,  90 => 34,  84 => 33,  73 => 25,  68 => 23,  60 => 17,  56 => 15,  47 => 12,  44 => 11,  40 => 10,  37 => 9,  35 => 8,  31 => 6,  28 => 5,);
    }
}
