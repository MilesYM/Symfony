<?php

/* YMTestBundle:Musician:review.html.twig */
class __TwigTemplate_b2f96de9c4fd94e6fd33392f0b7d77f1 extends Twig_Template
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
\t<div class='row-fluid'>

\t\t<div class = \"span12\" >
\t\t\t<form class=\"well form-search\">
\t\t\t\t<a class='Right btn btn-warning' href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_EditArtist", array("id" => $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "id"))), "html", null, true);
        echo "\">
\t\t\t\t\t<i class=\"icon-edit\"></i> &nbsp; Edit this Artist
\t\t\t\t</a>
\t\t\t\t&nbsp
\t\t\t\t<a class='Left btn btn-warning' href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_AddAlbum"), "html", null, true);
        echo "\">
\t\t\t\t\t<i class=\"icon-edit\"></i> &nbsp; Add an Album for this Artist
\t\t\t\t</a>
\t\t\t</form>
\t\t</div>
\t</div>

\t<div class='row-fluid'>
\t\t<h2>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "name"), "html", null, true);
        echo "</h2>
\t\t
\t\t<div style=\"float:left\">
\t\t\t";
        // line 27
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "picture")) == 0)) {
            // line 28
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/no_image.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "name"), "html", null, true);
            echo "\" id=\"pic\"/>
\t\t\t";
        } else {
            // line 30
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/artists/" . $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "picture"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "name"), "html", null, true);
            echo "\" id=\"pic\"/>
\t\t\t";
        }
        // line 32
        echo "\t\t</div>

\t\t\t<p>";
        // line 34
        echo $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "biography");
        echo "</p>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "YMTestBundle:Musician:review.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 34,  81 => 32,  73 => 30,  65 => 28,  63 => 27,  57 => 24,  46 => 16,  39 => 12,  31 => 6,  28 => 5,);
    }
}
