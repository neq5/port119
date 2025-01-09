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

/* port119/root3.html.twig */
class __TwigTemplate_2bae1286c12f526d86a883fdeeb17b6695b071d7c1e45acad04fd28e42fbdbbc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "root3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/root3.html.twig"));

        $this->parent = $this->loadTemplate("root3.html.twig", "port119/root3.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<nav class=\"navbar navbar-dark bg-dark\">
</nav>

<div class=\"all row\">
<div class=\"lewa col-lg-8\">
  <div class=\"row \">

    <div class=\"col-md-12\">
      <div class=\"top_color\"><h5>wątki</h5></div>
     <div class=\"p-3 border bg-light box table-responsive\">


<table class=\"table table-striped table-hover table-fixed\">
  <thead>
    <tr>
      <th scope=\"col\">właściciel</th>
      <th scope=\"col\">avatar</th>
      <th scope=\"col\">nazwa</th>
      <th scope=\"col\">posty / ostatni</th>
      <th scope=\"col\">admini</th>


      <th scope=\"col\">opis</th>
      <th scope=\"col\">utworzono</th>

    </tr>
  </thead>
  <tbody>

\t";
        // line 36
        if ((isset($context["allgroups"]) || array_key_exists("allgroups", $context) ? $context["allgroups"] : (function () { throw new RuntimeError('Variable "allgroups" does not exist.', 36, $this->source); })())) {
            // line 37
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["thread_allgroups"]) || array_key_exists("thread_allgroups", $context) ? $context["thread_allgroups"] : (function () { throw new RuntimeError('Variable "thread_allgroups" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                // line 38
                echo "                \t<tr><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "owner", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "owner", [], "any", false, false, false, 38), "html", null, true);
                echo " </a></td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_discuss", ["name" => twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 38), "page" => 1]), "html", null, true);
                echo "\"><img src=\"/groupavatar/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo ".jpeg\"></a></td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_discuss", ["name" => twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 38), "page" => 1]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 38), "html", null, true);
                echo "</a></td><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ccnt"]) || array_key_exists("ccnt", $context) ? $context["ccnt"] : (function () { throw new RuntimeError('Variable "ccnt" does not exist.', 38, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 38), [], "array", false, false, false, 38), "html", null, true);
                echo " / ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["ccnt"]) || array_key_exists("ccnt", $context) ? $context["ccnt"] : (function () { throw new RuntimeError('Variable "ccnt" does not exist.', 38, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 38), [], "array", false, false, false, 38)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastf"]) || array_key_exists("lastf", $context) ? $context["lastf"] : (function () { throw new RuntimeError('Variable "lastf" does not exist.', 38, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 38), [], "array", false, false, false, 38), "html", null, true);
                    echo " ";
                }
                echo "</td>
\t\t\t<td>
\t\t\t";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 40, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 41
                    echo "\t\t\t\t";
                    if (($context["k"] == twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 41))) {
                        // line 42
                        echo "\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["v"]);
                        foreach ($context['_seq'] as $context["k1"] => $context["v1"]) {
                            // line 43
                            echo "                        \t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => $context["v1"]]), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["k1"], "html", null, true);
                            echo "</a><br />
\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k1'], $context['v1'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 45
                        echo "\t\t\t\t";
                    }
                    // line 46
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\t
\t\t\t</td>


<td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new RuntimeError('Variable "abouts" does not exist.', 50, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 50), [], "array", false, false, false, 50), "html", null, true);
                echo "</td>
<td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["luty"]) || array_key_exists("luty", $context) ? $context["luty"] : (function () { throw new RuntimeError('Variable "luty" does not exist.', 51, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 51), [], "array", false, false, false, 51), "html", null, true);
                echo "</td>
</tr>

\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t";
        }
        // line 56
        echo "

  </tbody>
</table>


     </div>
   </div>
 </div>

</div>


\t<div class=\"prawa col-lg-4\">
\t\t<div class=\"row gx-5\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"top_color\"><h5>ostatnio komentowane</h5></div>
\t\t\t\t\t<div class=\"p-3 border bg-light box\">
\t\t\t\t\t\t<table class=\"prawa table table-striped\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Wątek</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Autor</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Tytuł</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Treść</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Data</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commcreatedat"]) || array_key_exists("commcreatedat", $context) ? $context["commcreatedat"] : (function () { throw new RuntimeError('Variable "commcreatedat" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 87
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td><a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_discuss", ["name" => twig_get_attribute($this->env, $this->source, (isset($context["commgids"]) || array_key_exists("commgids", $context) ? $context["commgids"] : (function () { throw new RuntimeError('Variable "commgids" does not exist.', 88, $this->source); })()), $context["k"], [], "array", false, false, false, 88), "page" => 1]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commgids"]) || array_key_exists("commgids", $context) ? $context["commgids"] : (function () { throw new RuntimeError('Variable "commgids" does not exist.', 88, $this->source); })()), $context["k"], [], "array", false, false, false, 88), "html", null, true);
            echo "</a></td>\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td><a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => twig_get_attribute($this->env, $this->source, (isset($context["commacounts2"]) || array_key_exists("commacounts2", $context) ? $context["commacounts2"] : (function () { throw new RuntimeError('Variable "commacounts2" does not exist.', 89, $this->source); })()), $context["k"], [], "array", false, false, false, 89)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commaccounts"]) || array_key_exists("commaccounts", $context) ? $context["commaccounts"] : (function () { throw new RuntimeError('Variable "commaccounts" does not exist.', 89, $this->source); })()), $context["k"], [], "array", false, false, false, 89), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commtitles"]) || array_key_exists("commtitles", $context) ? $context["commtitles"] : (function () { throw new RuntimeError('Variable "commtitles" does not exist.', 90, $this->source); })()), $context["k"], [], "array", false, false, false, 90), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commcontent"]) || array_key_exists("commcontent", $context) ? $context["commcontent"] : (function () { throw new RuntimeError('Variable "commcontent" does not exist.', 91, $this->source); })()), $context["k"], [], "array", false, false, false, 91), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 92
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commcreatedat"]) || array_key_exists("commcreatedat", $context) ? $context["commcreatedat"] : (function () { throw new RuntimeError('Variable "commcreatedat" does not exist.', 92, $this->source); })()), $context["k"], [], "array", false, false, false, 92), "Y-m-d H-i-s"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t\t\t\t\t\t\t</tbody>



\t\t\t\t\t\t</table>
\t\t\t\t\t</div>








        \t\t\t<div class=\"top_color\"><h5>najczęściej komentowane</h5></div>
\t\t\t\t\t<div class=\"p-3 border bg-light box\">
\t\t\t\t\t\t<table class=\"prawa table table-striped\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Wątek</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\" align=\"right\">Komentarzy</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cntg"]) || array_key_exists("cntg", $context) ? $context["cntg"] : (function () { throw new RuntimeError('Variable "cntg" does not exist.', 119, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 120
            echo "\t\t\t\t\t\t\t\t\t<tr><td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_discuss", ["name" => $context["k"], "page" => 1]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "</a></td><td align=right>";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "</td></tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "\t\t\t\t\t\t\t</tbody>

\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t</div>
                                <div class=\"top_color\"><h5>najczęściej odwiedzane</h5></div>

\t\t\t\t\t<div class=\"p-3 border bg-light box\">
\t\t\t\t\t\t<table class=\"prawa table table-striped\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Wątek</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Licznik</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ghitsarr"]) || array_key_exists("ghitsarr", $context) ? $context["ghitsarr"] : (function () { throw new RuntimeError('Variable "ghitsarr" does not exist.', 140, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 141
            echo "<tr><td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_discuss", ["name" => $context["k"], "page" => 1]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "</a></td><td align=right>";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>



     </div>
   </div>
 </div>

augue eget arcu dictum varius duis at consectetur lorem donec massa sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor eu augue ut lectus arcu bibendum at varius vel pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque convallis a cras semper auctor neque vitae tempus quam pellentesque nec nam aliquam sem et tortor consequat id porta nibh venenatis cras sed felis eget velit aliquet sagittis id consectetur purus ut faucibus pulvinar elementum integer enim neque volutpat ac tincidunt vitae semper quis lectus nulla at volutpat diam ut venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt eget nullam non nisi est sit amet facilisis magna etiam tempor orci eu lobortis elementum nibh tellus molestie nunc non blandit massa enim nec dui nunc mattis enim ut tellus elementum sagittis vitae et leo duis ut diam quam nulla porttitor massa id neque aliquam 

<hr>

";
        // line 160
        echo (isset($context["navi"]) || array_key_exists("navi", $context) ? $context["navi"] : (function () { throw new RuntimeError('Variable "navi" does not exist.', 160, $this->source); })());
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "port119/root3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 160,  323 => 143,  310 => 141,  306 => 140,  286 => 122,  273 => 120,  269 => 119,  243 => 95,  234 => 92,  230 => 91,  226 => 90,  220 => 89,  214 => 88,  211 => 87,  207 => 86,  175 => 56,  172 => 55,  162 => 51,  158 => 50,  147 => 46,  144 => 45,  133 => 43,  128 => 42,  125 => 41,  121 => 40,  98 => 38,  93 => 37,  91 => 36,  59 => 6,  52 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'root3.html.twig' %}



{% block body %}

<nav class=\"navbar navbar-dark bg-dark\">
</nav>

<div class=\"all row\">
<div class=\"lewa col-lg-8\">
  <div class=\"row \">

    <div class=\"col-md-12\">
      <div class=\"top_color\"><h5>wątki</h5></div>
     <div class=\"p-3 border bg-light box table-responsive\">


<table class=\"table table-striped table-hover table-fixed\">
  <thead>
    <tr>
      <th scope=\"col\">właściciel</th>
      <th scope=\"col\">avatar</th>
      <th scope=\"col\">nazwa</th>
      <th scope=\"col\">posty / ostatni</th>
      <th scope=\"col\">admini</th>


      <th scope=\"col\">opis</th>
      <th scope=\"col\">utworzono</th>

    </tr>
  </thead>
  <tbody>

\t{% if allgroups %}
\t\t{% for ag in thread_allgroups %}
                \t<tr><td><a href=\"{{ path('userspace', {'uid': ag.owner.id}) }}\"> {{ ag.owner }} </a></td><td><a href=\"{{ path('show_discuss', {'name': ag.name, 'page': 1}) }}\"><img src=\"/groupavatar/{{ ag.id }}.jpeg\"></a></td><td><a href=\"{{ path('show_discuss', {'name': ag.name, 'page': 1}) }}\">{{ ag.name }}</a></td><td>{{ ccnt[ag.id] }} / {% if ccnt[ag.id] %}{{ lastf[ag.id] }} {% endif %}</td>
\t\t\t<td>
\t\t\t{% for k, v in gcdn %}
\t\t\t\t{% if k == ag.name %}
\t\t\t\t\t{% for k1, v1 in v %}
                        \t\t\t<a href=\"{{ path('userspace', {'uid': v1}) }}\">{{ k1 }}</a><br />
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}
\t\t\t{% endfor %}\t
\t\t\t</td>


<td>{{ abouts[ag.id] }}</td>
<td>{{ luty[ag.id] }}</td>
</tr>

\t\t{% endfor %}
\t{% endif %}


  </tbody>
</table>


     </div>
   </div>
 </div>

</div>


\t<div class=\"prawa col-lg-4\">
\t\t<div class=\"row gx-5\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"top_color\"><h5>ostatnio komentowane</h5></div>
\t\t\t\t\t<div class=\"p-3 border bg-light box\">
\t\t\t\t\t\t<table class=\"prawa table table-striped\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Wątek</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Autor</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Tytuł</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Treść</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Data</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t{% for k, v in commcreatedat %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td><a href=\"{{ path('show_discuss', {'name': commgids[k], 'page': 1}) }}\">{{ commgids[k] }}</a></td>\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td><a href=\"{{ path('userspace', {'uid': commacounts2[k] }) }}\">{{ commaccounts[k] }}</a></td>
\t\t\t\t\t\t\t\t\t\t<td>{{ commtitles[k] }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ commcontent[k] }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ commcreatedat[k]|date('Y-m-d H-i-s') }}</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>



\t\t\t\t\t\t</table>
\t\t\t\t\t</div>








        \t\t\t<div class=\"top_color\"><h5>najczęściej komentowane</h5></div>
\t\t\t\t\t<div class=\"p-3 border bg-light box\">
\t\t\t\t\t\t<table class=\"prawa table table-striped\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Wątek</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\" align=\"right\">Komentarzy</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t{% for k, v in cntg %}
\t\t\t\t\t\t\t\t\t<tr><td><a href=\"{{ path('show_discuss', {'name': k, 'page':1}) }}\">{{ k }}</a></td><td align=right>{{ v }}</td></tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>

\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t</div>
                                <div class=\"top_color\"><h5>najczęściej odwiedzane</h5></div>

\t\t\t\t\t<div class=\"p-3 border bg-light box\">
\t\t\t\t\t\t<table class=\"prawa table table-striped\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Wątek</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Licznik</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
{% for k, v in ghitsarr %}
<tr><td><a href=\"{{ path('show_discuss', {'name': k, 'page': 1}) }}\">{{ k }}</a></td><td align=right>{{ v }}</td></tr>
{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>



     </div>
   </div>
 </div>

augue eget arcu dictum varius duis at consectetur lorem donec massa sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor eu augue ut lectus arcu bibendum at varius vel pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque convallis a cras semper auctor neque vitae tempus quam pellentesque nec nam aliquam sem et tortor consequat id porta nibh venenatis cras sed felis eget velit aliquet sagittis id consectetur purus ut faucibus pulvinar elementum integer enim neque volutpat ac tincidunt vitae semper quis lectus nulla at volutpat diam ut venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt eget nullam non nisi est sit amet facilisis magna etiam tempor orci eu lobortis elementum nibh tellus molestie nunc non blandit massa enim nec dui nunc mattis enim ut tellus elementum sagittis vitae et leo duis ut diam quam nulla porttitor massa id neque aliquam 

<hr>

{{ navi|raw }}

{% endblock %}
", "port119/root3.html.twig", "/var/www/port119/templates/port119/root3.html.twig");
    }
}
