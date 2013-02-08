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
        return array (  157 => 65,  154 => 64,  135 => 67,  133 => 64,  123 => 57,  119 => 56,  115 => 55,  106 => 49,  94 => 40,  90 => 39,  77 => 28,  74 => 27,  59 => 14,  51 => 11,  45 => 8,  39 => 7,  32 => 5,);
    }
}
