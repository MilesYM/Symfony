<?php

/* YMTestBundle:Album:add.html.twig */
class __TwigTemplate_6743849a2a2d9f81797111439eef2d5b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_AddAlbum"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
\t\t<div class=\"row\">
\t\t\t";
        // line 10
        if ((twig_length_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors')) != 0)) {
            // line 11
            echo "\t\t\t\t<div class=\"span12 alert alert-error\" style=\"margin-left:0px\">
\t\t\t\t\t";
            // line 13
            echo "\t\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "artist"), 'label', array("label" => "Album Name"));
        echo "
\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'errors');
        echo "
\t\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "songs"), 'label', array("label" => "Album Review & Songs"));
        echo "
\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "songs"), 'errors');
        echo "
\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "songs"), 'widget', array("attr" => array("class" => "span10"), "id" => "wysiwyg"));
        echo "
\t\t\t\t</div>
\t\t\t\t</br>
\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
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
        return "YMTestBundle:Album:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 32,  80 => 28,  62 => 22,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  131 => 51,  128 => 50,  125 => 44,  107 => 36,  38 => 6,  155 => 58,  144 => 53,  141 => 51,  139 => 55,  135 => 47,  126 => 45,  109 => 41,  103 => 37,  101 => 32,  70 => 24,  67 => 15,  61 => 13,  47 => 13,  105 => 24,  96 => 21,  93 => 28,  83 => 18,  76 => 27,  72 => 14,  68 => 12,  50 => 10,  27 => 4,  91 => 20,  84 => 29,  74 => 16,  66 => 23,  55 => 15,  94 => 39,  88 => 6,  79 => 17,  59 => 22,  21 => 2,  46 => 7,  29 => 3,  44 => 11,  35 => 8,  31 => 6,  43 => 7,  28 => 5,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  163 => 59,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 34,  78 => 21,  75 => 23,  71 => 19,  63 => 24,  58 => 9,  41 => 7,  34 => 11,  26 => 6,  24 => 3,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 31,  102 => 30,  98 => 31,  95 => 34,  92 => 33,  89 => 19,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 23,  57 => 11,  54 => 16,  51 => 14,  48 => 13,  45 => 8,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
