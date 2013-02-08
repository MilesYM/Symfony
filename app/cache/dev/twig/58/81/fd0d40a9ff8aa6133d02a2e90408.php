<?php

/* YMTestBundle:Musician:edit.html.twig */
class __TwigTemplate_5881fd0d40a9ff8aa6133d02a2e90408 extends Twig_Template
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
\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_EditArtist", array("id" => $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t<div class=\"row\">
\t\t\t";
        // line 10
        if ((twig_length_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) != 0)) {
            // line 11
            echo "\t\t\t\t<div class=\"span12 alert alert-error\" style=\"margin-left:0px\">
\t\t\t\t\t";
            // line 13
            echo "\t\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 16
        echo "\t\t</div>
\t

\t\t<div class=\"row\">
\t\t\t<div class=\"span10 BoxesW\">
\t\t\t\t<div>
\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label', array("label" => "Artist Name"));
        echo "
\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
        echo "
\t\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "biography"), 'label', array("label" => "Artist Biography"));
        echo "
\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "biography"), 'errors');
        echo "
\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "biography"), 'widget', array("attr" => array("class" => "span10"), "id" => "wysiwyg"));
        echo "
\t\t\t\t</div>
\t\t\t\t</br>
\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t</br>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>
</div>

";
    }

    public function getTemplateName()
    {
        return "YMTestBundle:Musician:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 32,  84 => 29,  80 => 28,  76 => 27,  70 => 24,  66 => 23,  62 => 22,  54 => 16,  47 => 13,  44 => 11,  42 => 10,  35 => 8,  31 => 6,  28 => 5,);
    }
}
