<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* port119/root.work.html.twig */
class __TwigTemplate_7f07f1efaca82cb6efbd502e69a3e7fabed150f97524a772f69f2e9254b6cd16 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/root.work.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/root.work.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t<meta charset=\"UTF-8\">
\t<meta http-equiv=\"pragma\" content=\"no-cache\">
\t<neta http-equiv=\"expires\" content=\"-1\">
\t<title>port119</title>

        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 100
        echo "    </head>


";
        // line 103
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "                <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">

                <style type=\"text/css\">

                #overlay {
  position: fixed; /* Sit on top of the page content */
  display: block; /* Hidden by default */
  width: 10%; /* Full width (cover the whole page) */
  height: 10%; /* Full height (cover the whole page) */
  top: 3%;
  left: 50;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
#text{
  padding: 0 12px;
  border: 0px solid teal;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 17px;
  background-color: rgba(0,0,0,0,5);
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
  border-style: none;
  border-color: red;
}


                .link-container {
                        border: 0px solid;
                        width: 50%
                        height: 20px;
                }
                .link-container a {
                        display: block;
                        background: #black;
                        height: 100%;
                        text-align: left;
                }
                .link-container a:hover {
                        background: #f8f8f8;
                }

                .lcolor {
                        color: white;
                }


.lewa_p, .prawa_p
{

}
.poszial_prawa
{
   float: right;
   text-align: right;
}
#top_s
{
   background: black;
   position: sticky;
   z-index: 99999;
   padding-top: 3px;
   padding-bottom: 3px;
   color: white;
   top: 0;
}
.cont
{
   width: 99%;
   margin: 0 auto;
}
.navbar
{
   padding: 0!important;
}
.nav-link, .navbar-brand
{
   padding-top: 0!important;
   padding-bottom: 0!important;
}

.lista li { list-style-type: none; }
                </style>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 104
        echo "
<div id=\"top_s\">

<div class=\"cont\">
<div class=\"poszial_top row\">

<div class=\"lewa_strona_top col-lg-6\">


<nav class=\"navbar navbar-expand-lg\">
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item active\">
        <b>
\t\t<a class=\"navbar-brand lcolor\" href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hello_world");
        echo "\">zaloguj</a>
        </b>
      </li>


</div>
</nav>
</div>
</div>
</div>
</div>


ostatnie wątki (ilość: ";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["grcnt"]) || array_key_exists("grcnt", $context) ? $context["grcnt"] : (function () { throw new RuntimeError('Variable "grcnt" does not exist.', 134, $this->source); })()), "html", null, true);
        echo ")

";
        // line 136
        if ((isset($context["allgroups"]) || array_key_exists("allgroups", $context) ? $context["allgroups"] : (function () { throw new RuntimeError('Variable "allgroups" does not exist.', 136, $this->source); })())) {
            // line 137
            echo "
<table border=1>
\t\t<tr><td>Właściciel</td><td>Awatar</td><td>Nazwa</td><td>Posty / Ostatni</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td></tr>
";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allgroups"]) || array_key_exists("allgroups", $context) ? $context["allgroups"] : (function () { throw new RuntimeError('Variable "allgroups" does not exist.', 140, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                // line 141
                echo "\t\t<tr><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "owner", [], "any", false, false, false, 141), "id", [], "any", false, false, false, 141)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "owner", [], "any", false, false, false, 141), "html", null, true);
                echo " </a></td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2", ["name" => twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 141), "page" => 1]), "html", null, true);
                echo "\"><img src=\"/groupavatar/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 141), "html", null, true);
                echo ".jpeg\"></a></td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2", ["name" => twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 141), "page" => 1]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 141), "html", null, true);
                echo "</a></td><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ccnt"]) || array_key_exists("ccnt", $context) ? $context["ccnt"] : (function () { throw new RuntimeError('Variable "ccnt" does not exist.', 141, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 141), [], "array", false, false, false, 141), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 141, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 141), [], "array", false, false, false, 141), "html", null, true);
                echo "</td>
<td>
";
                // line 143
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 143, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 144
                    echo "\t";
                    if (($context["k"] == twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 144))) {
                        // line 145
                        echo "\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["v"]);
                        foreach ($context['_seq'] as $context["k1"] => $context["v1"]) {
                            // line 146
                            echo "\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => $context["v1"]]), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["k1"], "html", null, true);
                            echo "</a><br />
\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k1'], $context['v1'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 148
                        echo "\t";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "</td>
<td>
";
                // line 152
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "active", [], "any", false, false, false, 152) != false)) {
                    // line 153
                    echo "aktywny
";
                } else {
                    // line 155
                    echo "niaktywny
";
                }
                // line 157
                echo "</td>
<td>
";
                // line 159
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "open", [], "any", false, false, false, 159) != false)) {
                    // line 160
                    echo "otwarty
";
                } else {
                    // line 162
                    echo "zamknięty
";
                }
                // line 164
                echo "</td>
<td>";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new RuntimeError('Variable "abouts" does not exist.', 165, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 165), [], "array", false, false, false, 165), "html", null, true);
                echo "</td>
<td>";
                // line 166
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "createdat", [], "any", false, false, false, 166), "Y-m-d H-i-s"), "html", null, true);
                echo "</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "</table>


";
        }
        // line 173
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/root.work.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  342 => 173,  336 => 169,  327 => 166,  323 => 165,  320 => 164,  316 => 162,  312 => 160,  310 => 159,  306 => 157,  302 => 155,  298 => 153,  296 => 152,  292 => 150,  285 => 148,  274 => 146,  269 => 145,  266 => 144,  262 => 143,  242 => 141,  238 => 140,  233 => 137,  231 => 136,  226 => 134,  210 => 121,  191 => 104,  181 => 103,  81 => 9,  71 => 8,  61 => 103,  56 => 100,  54 => 8,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
\t<head>
\t<meta charset=\"UTF-8\">
\t<meta http-equiv=\"pragma\" content=\"no-cache\">
\t<neta http-equiv=\"expires\" content=\"-1\">
\t<title>port119</title>

        {% block stylesheets %}
                <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">

                <style type=\"text/css\">

                #overlay {
  position: fixed; /* Sit on top of the page content */
  display: block; /* Hidden by default */
  width: 10%; /* Full width (cover the whole page) */
  height: 10%; /* Full height (cover the whole page) */
  top: 3%;
  left: 50;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
#text{
  padding: 0 12px;
  border: 0px solid teal;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 17px;
  background-color: rgba(0,0,0,0,5);
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
  border-style: none;
  border-color: red;
}


                .link-container {
                        border: 0px solid;
                        width: 50%
                        height: 20px;
                }
                .link-container a {
                        display: block;
                        background: #black;
                        height: 100%;
                        text-align: left;
                }
                .link-container a:hover {
                        background: #f8f8f8;
                }

                .lcolor {
                        color: white;
                }


.lewa_p, .prawa_p
{

}
.poszial_prawa
{
   float: right;
   text-align: right;
}
#top_s
{
   background: black;
   position: sticky;
   z-index: 99999;
   padding-top: 3px;
   padding-bottom: 3px;
   color: white;
   top: 0;
}
.cont
{
   width: 99%;
   margin: 0 auto;
}
.navbar
{
   padding: 0!important;
}
.nav-link, .navbar-brand
{
   padding-top: 0!important;
   padding-bottom: 0!important;
}

.lista li { list-style-type: none; }
                </style>

        {% endblock %}
    </head>


{% block body %}

<div id=\"top_s\">

<div class=\"cont\">
<div class=\"poszial_top row\">

<div class=\"lewa_strona_top col-lg-6\">


<nav class=\"navbar navbar-expand-lg\">
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item active\">
        <b>
\t\t<a class=\"navbar-brand lcolor\" href=\"{{ path('hello_world') }}\">zaloguj</a>
        </b>
      </li>


</div>
</nav>
</div>
</div>
</div>
</div>


ostatnie wątki (ilość: {{ grcnt }})

{% if allgroups %}

<table border=1>
\t\t<tr><td>Właściciel</td><td>Awatar</td><td>Nazwa</td><td>Posty / Ostatni</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td></tr>
{% for ag in allgroups %}
\t\t<tr><td><a href=\"{{ path('userspace', {'uid': ag.owner.id}) }}\"> {{ ag.owner }} </a></td><td><a href=\"{{ path('discuss2', {'name': ag.name, 'page': 1}) }}\"><img src=\"/groupavatar/{{ ag.id }}.jpeg\"></a></td><td><a href=\"{{ path('discuss2', {'name': ag.name, 'page': 1}) }}\">{{ ag.name }}</a></td><td>{{ ccnt[ag.id] }} / {{ last[ag.id] }}</td>
<td>
{% for k, v in gcdn %}
\t{% if k == ag.name %}
\t\t{% for k1, v1 in v %}
\t\t\t<a href=\"{{ path('userspace', {'uid': v1}) }}\">{{ k1 }}</a><br />
\t\t{% endfor %}
\t{% endif %}
{% endfor %}
</td>
<td>
{% if ag.active != false %}
aktywny
{% else %}
niaktywny
{% endif %}
</td>
<td>
{% if ag.open != false %}
otwarty
{% else %}
zamknięty
{% endif %}
</td>
<td>{{ abouts[ag.id] }}</td>
<td>{{ ag.createdat|date('Y-m-d H-i-s') }}</td>
</tr>
{% endfor %}
</table>


{% endif %}

{% endblock %}
", "port119/root.work.html.twig", "/var/www/port119/templates/port119/root.work.html.twig");
    }
}
