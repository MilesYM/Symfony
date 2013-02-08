<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_fd171c7db6353ec8a511f3a682e0f855 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 28,  156 => 60,  145 => 55,  129 => 51,  69 => 24,  49 => 19,  187 => 72,  167 => 63,  149 => 58,  137 => 53,  117 => 52,  40 => 10,  37 => 9,  113 => 31,  87 => 16,  56 => 23,  23 => 3,  123 => 57,  115 => 48,  106 => 49,  77 => 28,  90 => 32,  80 => 28,  62 => 22,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  131 => 55,  128 => 50,  125 => 54,  107 => 36,  38 => 6,  155 => 58,  144 => 53,  141 => 51,  139 => 55,  135 => 67,  126 => 45,  109 => 47,  103 => 46,  101 => 32,  70 => 24,  67 => 15,  61 => 18,  47 => 13,  105 => 22,  96 => 18,  93 => 28,  83 => 18,  76 => 27,  72 => 23,  68 => 23,  50 => 8,  27 => 4,  91 => 20,  84 => 24,  74 => 26,  66 => 23,  55 => 15,  94 => 35,  88 => 6,  79 => 17,  59 => 14,  21 => 2,  46 => 16,  29 => 3,  44 => 11,  35 => 8,  31 => 4,  43 => 20,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  163 => 59,  159 => 61,  154 => 64,  147 => 55,  132 => 48,  127 => 50,  121 => 49,  118 => 44,  114 => 42,  104 => 36,  100 => 45,  78 => 30,  75 => 25,  71 => 19,  63 => 20,  58 => 19,  41 => 7,  34 => 5,  26 => 11,  24 => 6,  32 => 5,  25 => 3,  22 => 1,  19 => 1,  184 => 70,  178 => 68,  171 => 62,  165 => 64,  162 => 57,  157 => 65,  153 => 54,  151 => 59,  143 => 57,  138 => 51,  136 => 50,  133 => 64,  130 => 47,  122 => 53,  119 => 56,  116 => 32,  111 => 37,  108 => 31,  102 => 21,  98 => 36,  95 => 44,  92 => 17,  89 => 19,  85 => 34,  81 => 23,  73 => 30,  64 => 17,  60 => 27,  57 => 24,  54 => 18,  51 => 11,  48 => 11,  45 => 11,  42 => 8,  39 => 6,  36 => 5,  33 => 3,  30 => 1,);
    }
}
