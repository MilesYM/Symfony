<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_0dae679b5adb826c8c43645992b32279 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"fos_user_resetting_reset\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 28,  156 => 60,  145 => 55,  129 => 51,  69 => 24,  49 => 19,  187 => 72,  167 => 63,  149 => 58,  137 => 53,  117 => 52,  40 => 10,  37 => 9,  113 => 31,  87 => 16,  56 => 23,  23 => 3,  123 => 57,  115 => 48,  106 => 49,  77 => 28,  90 => 32,  80 => 28,  62 => 22,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  131 => 55,  128 => 50,  125 => 54,  107 => 36,  38 => 6,  155 => 58,  144 => 53,  141 => 51,  139 => 55,  135 => 67,  126 => 45,  109 => 47,  103 => 46,  101 => 32,  70 => 24,  67 => 15,  61 => 18,  47 => 13,  105 => 22,  96 => 18,  93 => 28,  83 => 18,  76 => 27,  72 => 23,  68 => 23,  50 => 8,  27 => 4,  91 => 20,  84 => 24,  74 => 26,  66 => 23,  55 => 15,  94 => 35,  88 => 6,  79 => 17,  59 => 14,  21 => 2,  46 => 16,  29 => 3,  44 => 11,  35 => 8,  31 => 4,  43 => 20,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  163 => 59,  159 => 61,  154 => 64,  147 => 55,  132 => 48,  127 => 50,  121 => 49,  118 => 44,  114 => 42,  104 => 36,  100 => 45,  78 => 30,  75 => 25,  71 => 19,  63 => 20,  58 => 19,  41 => 10,  34 => 5,  26 => 2,  24 => 6,  32 => 5,  25 => 3,  22 => 1,  19 => 1,  184 => 70,  178 => 68,  171 => 62,  165 => 64,  162 => 57,  157 => 65,  153 => 54,  151 => 59,  143 => 57,  138 => 51,  136 => 50,  133 => 64,  130 => 47,  122 => 53,  119 => 56,  116 => 32,  111 => 37,  108 => 31,  102 => 21,  98 => 36,  95 => 44,  92 => 17,  89 => 19,  85 => 34,  81 => 23,  73 => 30,  64 => 17,  60 => 27,  57 => 24,  54 => 18,  51 => 11,  48 => 11,  45 => 11,  42 => 8,  39 => 6,  36 => 5,  33 => 6,  30 => 1,);
    }
}
