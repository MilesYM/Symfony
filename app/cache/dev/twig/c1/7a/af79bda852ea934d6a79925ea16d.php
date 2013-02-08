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
        return array (  116 => 32,  113 => 31,  105 => 22,  102 => 21,  96 => 18,  92 => 17,  87 => 16,  84 => 15,  78 => 11,  70 => 46,  56 => 34,  54 => 31,  48 => 27,  46 => 21,  43 => 20,  41 => 15,  34 => 11,  23 => 2,);
    }
}
