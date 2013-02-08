<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_cb01fc535498faed0f1077c984cf8b71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'links' => array($this, 'block_links'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    // line 6
    public function block_links($context, array $blocks = array())
    {
        $this->displayParentBlock("links", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/styleLogin.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo " 

    <div class=\"container\">

        <div class=\"form-signin\">
            <h2 class=\"form-signin-heading\">Please Sign In</h2>

            ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 19
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo " span12 alert alert-error\">
                ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "FOSUserBundle"), "html", null, true);
            echo "
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "            ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 25
        echo "        </div>
    </div> <!-- /container -->
";
    }

    // line 23
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 24
        echo "            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  81 => 23,  75 => 25,  72 => 23,  63 => 20,  58 => 19,  54 => 18,  45 => 11,  36 => 7,  30 => 6,  73 => 21,  67 => 18,  60 => 14,  55 => 12,  51 => 11,  46 => 9,  42 => 10,  39 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
