<?php

/* YMTestBundle:Default:index.html.twig */
class __TwigTemplate_0c9900b8fcaaf1f6b6f1422ee1ae3f5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("YMTestBundle::layout.html.twig");

        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
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
    public function block_scripts($context, array $blocks = array())
    {
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
<!--Load the AJAX API-->
    <script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
    <script type=\"text/javascript\">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Mushrooms', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]
        ]);

        // Set chart options
        var options = {'title':'How Much Pizza I Ate Last Night',
                       'width':500,
                       'height':400};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

";
    }

    // line 46
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 47
        echo "

\t<div class=\"container\">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class=\"hero-unit\">
      \t<table>
      \t\t<tr>
      \t\t\t<td>
\t\t\t\t\t<h1>Hello To The Team !</h1><br/><br/>
\t\t\t\t\t<p>Welcome on you Admin Dashboard !<br/> Here you can manage the artist and albums of the webiste</p>
\t\t\t\t</td>
\t\t\t\t<td rowspan=\"2\">\t
\t\t\t\t\t<!--Div that will hold the pie chart-->
\t\t\t   \t\t<div id=\"chart_div\"></div>
\t\t\t   \t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<p>There are <strong>";
        // line 66
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["albums"]) ? $context["albums"] : $this->getContext($context, "albums"))), "html", null, true);
        echo "</strong> Albums In the DataBase</p>
\t\t\t\t\t<p>There are <strong>";
        // line 67
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["artists"]) ? $context["artists"] : $this->getContext($context, "artists"))), "html", null, true);
        echo "</strong> Artists In the DataBase</p>
\t\t\t        <p><a class=\"btn btn-primary btn-large\" href=\"http://www.linkedin.com/pub/yohann-merran/4b/ab9/aa\">See my Portfolio &raquo;</a></p>
\t        \t</td>
\t        <tr>
\t\t\t
\t    </table>
      </div>

      <!-- Example row of columns -->
      <div class=\"row show-grid\">
\t\t<a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_Album"), "html", null, true);
        echo "\">
\t\t\t<div class=\"span6\">
\t\t\t\t<h2>Manage Albums</h2>
\t\t\t\tYou are able to see the list of all the albums on the website, edit them, add some and delete them.
\t\t\t</div>
\t\t</a>
        <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ymtest_Artist"), "html", null, true);
        echo "\">
\t\t\t<div class=\"span6\">
\t\t\t\t<h2>Manage Artists</h2>
\t\t\t\tYou are able to see the list of all the artists on the website, edit them, add some and delete them.
\t\t\t</div>
\t\t</a>
      </div>

    ";
    }

    public function getTemplateName()
    {
        return "YMTestBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 83,  116 => 77,  103 => 67,  99 => 66,  78 => 47,  75 => 46,  29 => 5,);
    }
}
