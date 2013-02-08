<?php

/* ::layout.html.twig */
class __TwigTemplate_c17aaf79bda852ea934d6a79925ea16d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'links' => array($this, 'block_links'),
            'scripts' => array($this, 'block_scripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
    <html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">

    <head profile=\"http://gmpg.org/xfn/11\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"language\" content=\"us\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=9\" />

        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
     
    

        ";
        // line 15
        $this->displayBlock('links', $context, $blocks);
        // line 20
        echo "    
        ";
        // line 21
        $this->displayBlock('scripts', $context, $blocks);
        // line 27
        echo "
    </head>
    <body>

       ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "
        <hr>

        <footer>
            <p>&copy; Company 2012</p>
        </footer>

        </div> <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "Yohann Merran Test Project";
    }

    // line 15
    public function block_links($context, array $blocks = array())
    {
        // line 16
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"shortcut icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\">
        ";
    }

    // line 21
    public function block_scripts($context, array $blocks = array())
    {
        // line 22
        echo "        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "
       ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 31,  87 => 16,  56 => 34,  23 => 2,  123 => 57,  115 => 55,  106 => 49,  77 => 28,  90 => 39,  80 => 28,  62 => 22,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  131 => 51,  128 => 50,  125 => 44,  107 => 36,  38 => 6,  155 => 58,  144 => 53,  141 => 51,  139 => 55,  135 => 67,  126 => 45,  109 => 41,  103 => 37,  101 => 32,  70 => 46,  67 => 15,  61 => 13,  47 => 13,  105 => 22,  96 => 18,  93 => 28,  83 => 18,  76 => 27,  72 => 14,  68 => 12,  50 => 10,  27 => 4,  91 => 20,  84 => 15,  74 => 27,  66 => 23,  55 => 15,  94 => 40,  88 => 6,  79 => 17,  59 => 14,  21 => 2,  46 => 21,  29 => 3,  44 => 11,  35 => 8,  31 => 6,  43 => 20,  28 => 5,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  163 => 59,  159 => 61,  154 => 64,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 34,  78 => 11,  75 => 23,  71 => 19,  63 => 24,  58 => 9,  41 => 15,  34 => 11,  26 => 6,  24 => 3,  32 => 5,  25 => 3,  22 => 2,  19 => 1,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 65,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 64,  130 => 47,  122 => 43,  119 => 56,  116 => 32,  111 => 37,  108 => 31,  102 => 21,  98 => 31,  95 => 34,  92 => 17,  89 => 19,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 23,  57 => 11,  54 => 31,  51 => 11,  48 => 27,  45 => 8,  42 => 10,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
