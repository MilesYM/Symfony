<?php

/* YMTestBundle:Album:review.html.twig */
class __TwigTemplate_2b561746b87017641d31a3655adb8894 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_EditAlbum", array("id" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"))), "html", null, true);
        echo "\">
\t\t\t\t\t<i class=\"icon-edit\"></i> &nbsp; Edit this Album
\t\t\t\t</a>
\t\t\t</form>
\t\t</div>
\t</div>

\t<div class='row-fluid'>
\t\t<h2>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "name"), "html", null, true);
        echo "</h2>
\t\t
\t\t<div style=\"float:left\">
\t\t\t<img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/albums/" . $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "picture"))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "name"), "html", null, true);
        echo "\" id=\"pic\"/>
\t\t</div>

\t\t\t<p>";
        // line 26
        echo $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "songs");
        echo "</p>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "YMTestBundle:Album:review.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 26,  56 => 23,  50 => 20,  39 => 12,  31 => 6,  28 => 5,);
    }
}
