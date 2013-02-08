<?php

/* YMTestBundle::layout.html.twig */
class __TwigTemplate_1fd64efa65c70469e781293de19c1a9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'links' => array($this, 'block_links'),
            'scripts' => array($this, 'block_scripts'),
            'body' => array($this, 'block_body'),
            'bodyAdmin' => array($this, 'block_bodyAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Admin Dashboard - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_links($context, array $blocks = array())
    {
        $this->displayParentBlock("links", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/styleAdmin.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 11
    public function block_scripts($context, array $blocks = array())
    {
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "

    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("editor/ckeditor.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
    window.onload = function()
    {
      CKEDITOR.replace( 'wysiwyg',
      {
        skin : 'office2003'
      });
    };
    </script>
";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 28
        echo "
  <!-- On affiche à présent le Header -->

    <div class=\"navbar navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container-fluid\">
                <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </a>
                <a class=\"brand\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_dashboard"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo/logo.png"), "html", null, true);
        echo "\" id=\"logo\" alt=\"New Heights\"/></a>

                <div class=\"btn-group pull-right\">
                    <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"icon-user\"></i> Admin
                        <span class=\"caret\"></span>
                    </a>

                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
        echo "\">Sign Out</a></li>
                    </ul>
                </div>

                <div class=\"nav-collapse\">
                    <ul class=\"nav\"  id=\"navMenu\">
                        <li class=\"active\"><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_dashboard"), "html", null, true);
        echo "\">Dashboard</a></li>
                        <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_Album"), "html", null, true);
        echo "\">Albums</a></li>
                        <li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_Artist"), "html", null, true);
        echo "\">Artists</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>

    ";
        // line 64
        $this->displayBlock('bodyAdmin', $context, $blocks);
        // line 67
        echo "    
    <script>
        \$(document).ready(function() {
            \$('.container .delete').on('click', function() {
                var \$this = \$(this),
                    url = \$this.data('url'),
                    message = \$this.data('message');
                
                if (confirm(message)) { // Clic sur OK
                    document.location.href=url;
            }
            });
        });
    </script>

";
    }

    // line 64
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 65
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "YMTestBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 57,  115 => 55,  106 => 49,  77 => 28,  90 => 39,  80 => 28,  62 => 22,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  131 => 51,  128 => 50,  125 => 44,  107 => 36,  38 => 6,  155 => 58,  144 => 53,  141 => 51,  139 => 55,  135 => 67,  126 => 45,  109 => 41,  103 => 37,  101 => 32,  70 => 24,  67 => 15,  61 => 13,  47 => 13,  105 => 24,  96 => 21,  93 => 28,  83 => 18,  76 => 27,  72 => 14,  68 => 12,  50 => 10,  27 => 4,  91 => 20,  84 => 29,  74 => 27,  66 => 23,  55 => 15,  94 => 40,  88 => 6,  79 => 17,  59 => 14,  21 => 2,  46 => 7,  29 => 3,  44 => 11,  35 => 8,  31 => 6,  43 => 7,  28 => 5,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  163 => 59,  159 => 61,  154 => 64,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 34,  78 => 21,  75 => 23,  71 => 19,  63 => 24,  58 => 9,  41 => 7,  34 => 11,  26 => 6,  24 => 3,  32 => 5,  25 => 3,  22 => 2,  19 => 1,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 65,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 64,  130 => 47,  122 => 43,  119 => 56,  116 => 35,  111 => 37,  108 => 31,  102 => 30,  98 => 31,  95 => 34,  92 => 33,  89 => 19,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 23,  57 => 11,  54 => 16,  51 => 11,  48 => 13,  45 => 8,  42 => 10,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
