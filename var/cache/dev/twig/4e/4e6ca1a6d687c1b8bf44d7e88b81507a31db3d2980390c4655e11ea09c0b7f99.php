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

/* port119/root2.html.twig */
class __TwigTemplate_dbc953ceeacc234ffeea27f5303b8bc34d09dc1bcae574d4145c61cfca49f224 extends \Twig\Template
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
        return "root2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/root2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/root2.html.twig"));

        $this->parent = $this->loadTemplate("root2.html.twig", "port119/root2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<div class=\"all\">

  <div class=\"row gx-5\">

    <div class=\"col-md-4\">
       <div class=\"top_color\"><h5>ostatnio komentowane</h5></div>
     <div class=\"p-3 border bg-light box\">

<table class=\"table table-striped\">
  <thead>
    <tr>
      <th scope=\"col\">Data#</th>
      <th scope=\"col\">Nazwa grupy</th>
      <th scope=\"col\">Autor</th>
      <th scope=\"col\">Tytuł</th>
      <th scope=\"col\">treść</th>
    </tr>
  </thead>
  <tbody>
";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commcreatedat"]) || array_key_exists("commcreatedat", $context) ? $context["commcreatedat"] : (function () { throw new RuntimeError('Variable "commcreatedat" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 28
            echo "<tr>
<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commcreatedat"]) || array_key_exists("commcreatedat", $context) ? $context["commcreatedat"] : (function () { throw new RuntimeError('Variable "commcreatedat" does not exist.', 29, $this->source); })()), $context["k"], [], "array", false, false, false, 29), "Y-m-d H-i-s"), "html", null, true);
            echo "</td>
<td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_discuss", ["name" => twig_get_attribute($this->env, $this->source, (isset($context["commgids"]) || array_key_exists("commgids", $context) ? $context["commgids"] : (function () { throw new RuntimeError('Variable "commgids" does not exist.', 30, $this->source); })()), $context["k"], [], "array", false, false, false, 30), "page" => 1]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commgids"]) || array_key_exists("commgids", $context) ? $context["commgids"] : (function () { throw new RuntimeError('Variable "commgids" does not exist.', 30, $this->source); })()), $context["k"], [], "array", false, false, false, 30), "html", null, true);
            echo "</a></td>
<td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => twig_get_attribute($this->env, $this->source, (isset($context["commacounts2"]) || array_key_exists("commacounts2", $context) ? $context["commacounts2"] : (function () { throw new RuntimeError('Variable "commacounts2" does not exist.', 31, $this->source); })()), $context["k"], [], "array", false, false, false, 31)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commaccounts"]) || array_key_exists("commaccounts", $context) ? $context["commaccounts"] : (function () { throw new RuntimeError('Variable "commaccounts" does not exist.', 31, $this->source); })()), $context["k"], [], "array", false, false, false, 31), "html", null, true);
            echo "</a></td>
<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commtitles"]) || array_key_exists("commtitles", $context) ? $context["commtitles"] : (function () { throw new RuntimeError('Variable "commtitles" does not exist.', 32, $this->source); })()), $context["k"], [], "array", false, false, false, 32), "html", null, true);
            echo "</td>
<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commcontent"]) || array_key_exists("commcontent", $context) ? $context["commcontent"] : (function () { throw new RuntimeError('Variable "commcontent" does not exist.', 33, $this->source); })()), $context["k"], [], "array", false, false, false, 33), "html", null, true);
            echo "</td>

</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "

  </tbody>
</table>


     </div>
    </div>


      <div class=\"col-md-4\">
        <div class=\"top_color\"><h5>najczęściej komentowane</h5></div>
     <div class=\"p-3 border bg-light box\">

<table class=\"table table-striped\">
  <thead>
    <tr>
      <th scope=\"col\">wątek</th>
      <th scope=\"col\">komentarzy</th>

    </tr>
  </thead>
  <tbody>
";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cntg"]) || array_key_exists("cntg", $context) ? $context["cntg"] : (function () { throw new RuntimeError('Variable "cntg" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 61
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
        // line 63
        echo "</tbody>
</table>
</div>
</div>

      <div class=\"col-md-4\">
        <div class=\"top_color\"><h5>najczęściej wyświetlane</h5></div>
     <div class=\"p-3 border bg-light box\">


<table class=\"table table-striped\">
  <thead>
    <tr>
      <th scope=\"col\">wątek</th>
      <th scope=\"col\">licznik</th>

    </tr>
  </thead>
  <tbody>
";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ghitsarr"]) || array_key_exists("ghitsarr", $context) ? $context["ghitsarr"] : (function () { throw new RuntimeError('Variable "ghitsarr" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 83
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
        // line 85
        echo "  </tbody>
</table>

     </div>
    </div>

  </div>

</div>

  <div class=\"row gx-5\">
    <div class=\"col-md-12\">
     <div class=\"p-3 border bg-light box\">

wątki
<table class=\"table table-striped\">
  <thead>
    <tr>
      <th scope=\"col\">właściciel</th>
      <th scope=\"col\">avatar</th>
      <th scope=\"col\">nazwa</th>
      <th scope=\"col\">posty / ostatni</th>
      <th scope=\"col\">admini</th>
      <th scope=\"col\">aktywny?</th>
      <th scope=\"col\">otwarty?</th>
      <th scope=\"col\">opis</th>
      <th scope=\"col\">data utworzenia</th>

    </tr>
  </thead>
  <tbody>

";
        // line 117
        if ((isset($context["allgroups"]) || array_key_exists("allgroups", $context) ? $context["allgroups"] : (function () { throw new RuntimeError('Variable "allgroups" does not exist.', 117, $this->source); })())) {
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["thread_allgroups"]) || array_key_exists("thread_allgroups", $context) ? $context["thread_allgroups"] : (function () { throw new RuntimeError('Variable "thread_allgroups" does not exist.', 118, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                // line 119
                echo "                <tr><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "owner", [], "any", false, false, false, 119), "id", [], "any", false, false, false, 119)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "owner", [], "any", false, false, false, 119), "html", null, true);
                echo " </a></td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_discuss", ["name" => twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 119), "page" => 1]), "html", null, true);
                echo "\"><img src=\"/groupavatar/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 119), "html", null, true);
                echo ".jpeg\"></a></td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_discuss", ["name" => twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 119), "page" => 1]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 119), "html", null, true);
                echo "</a></td><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ccnt"]) || array_key_exists("ccnt", $context) ? $context["ccnt"] : (function () { throw new RuntimeError('Variable "ccnt" does not exist.', 119, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 119), [], "array", false, false, false, 119), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 119, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 119), [], "array", false, false, false, 119), "html", null, true);
                echo "</td>
<td>
";
                // line 121
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 121, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 122
                    echo "        ";
                    if (($context["k"] == twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 122))) {
                        // line 123
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["v"]);
                        foreach ($context['_seq'] as $context["k1"] => $context["v1"]) {
                            // line 124
                            echo "                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => $context["v1"]]), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["k1"], "html", null, true);
                            echo "</a><br />
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k1'], $context['v1'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 126
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "
</td>
<td>
";
                // line 131
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "active", [], "any", false, false, false, 131) != false)) {
                    // line 132
                    echo "aktywny
";
                } else {
                    // line 134
                    echo "niaktywny
";
                }
                // line 136
                echo "</td>
<td>
";
                // line 138
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "open", [], "any", false, false, false, 138) != false)) {
                    // line 139
                    echo "otwarty
";
                } else {
                    // line 141
                    echo "zamknięty
";
                }
                // line 143
                echo "</td>
<td>";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new RuntimeError('Variable "abouts" does not exist.', 144, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 144), [], "array", false, false, false, 144), "html", null, true);
                echo "</td>
<td>";
                // line 145
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "createdat", [], "any", false, false, false, 145), "Y-m-d H-i-s"), "html", null, true);
                echo "</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "
";
        }
        // line 150
        echo "

  </tbody>
</table>



     </div>
   </div>
 </div>

augue eget arcu dictum varius duis at consectetur lorem donec massa sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor eu augue ut lectus arcu bibendum at varius vel pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque convallis a cras semper auctor neque vitae tempus quam pellentesque nec nam aliquam sem et tortor consequat id porta nibh venenatis cras sed felis eget velit aliquet sagittis id consectetur purus ut faucibus pulvinar elementum integer enim neque volutpat ac tincidunt vitae semper quis lectus nulla at volutpat diam ut venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt eget nullam non nisi est sit amet facilisis magna etiam tempor orci eu lobortis elementum nibh tellus molestie nunc non blandit massa enim nec dui nunc mattis enim ut tellus elementum sagittis vitae et leo duis ut diam quam nulla porttitor massa id neque aliquam 

<hr>

";
        // line 165
        echo (isset($context["navi"]) || array_key_exists("navi", $context) ? $context["navi"] : (function () { throw new RuntimeError('Variable "navi" does not exist.', 165, $this->source); })());
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/root2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 165,  347 => 150,  343 => 148,  334 => 145,  330 => 144,  327 => 143,  323 => 141,  319 => 139,  317 => 138,  313 => 136,  309 => 134,  305 => 132,  303 => 131,  298 => 128,  291 => 126,  280 => 124,  275 => 123,  272 => 122,  268 => 121,  248 => 119,  244 => 118,  242 => 117,  208 => 85,  195 => 83,  191 => 82,  170 => 63,  157 => 61,  153 => 60,  128 => 37,  118 => 33,  114 => 32,  108 => 31,  102 => 30,  98 => 29,  95 => 28,  91 => 27,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'root2.html.twig' %}



{% block body %}


<div class=\"all\">

  <div class=\"row gx-5\">

    <div class=\"col-md-4\">
       <div class=\"top_color\"><h5>ostatnio komentowane</h5></div>
     <div class=\"p-3 border bg-light box\">

<table class=\"table table-striped\">
  <thead>
    <tr>
      <th scope=\"col\">Data#</th>
      <th scope=\"col\">Nazwa grupy</th>
      <th scope=\"col\">Autor</th>
      <th scope=\"col\">Tytuł</th>
      <th scope=\"col\">treść</th>
    </tr>
  </thead>
  <tbody>
{% for k, v in commcreatedat %}
<tr>
<td>{{ commcreatedat[k]|date('Y-m-d H-i-s') }}</td>
<td><a href=\"{{ path('show_discuss', {'name': commgids[k], 'page': 1}) }}\">{{ commgids[k] }}</a></td>
<td><a href=\"{{ path('userspace', {'uid': commacounts2[k] }) }}\">{{ commaccounts[k] }}</a></td>
<td>{{ commtitles[k] }}</td>
<td>{{ commcontent[k] }}</td>

</tr>
{% endfor %}


  </tbody>
</table>


     </div>
    </div>


      <div class=\"col-md-4\">
        <div class=\"top_color\"><h5>najczęściej komentowane</h5></div>
     <div class=\"p-3 border bg-light box\">

<table class=\"table table-striped\">
  <thead>
    <tr>
      <th scope=\"col\">wątek</th>
      <th scope=\"col\">komentarzy</th>

    </tr>
  </thead>
  <tbody>
{% for k, v in cntg %}
<tr><td><a href=\"{{ path('show_discuss', {'name': k, 'page':1}) }}\">{{ k }}</a></td><td align=right>{{ v }}</td></tr>
{% endfor %}
</tbody>
</table>
</div>
</div>

      <div class=\"col-md-4\">
        <div class=\"top_color\"><h5>najczęściej wyświetlane</h5></div>
     <div class=\"p-3 border bg-light box\">


<table class=\"table table-striped\">
  <thead>
    <tr>
      <th scope=\"col\">wątek</th>
      <th scope=\"col\">licznik</th>

    </tr>
  </thead>
  <tbody>
{% for k, v in ghitsarr %}
<tr><td><a href=\"{{ path('show_discuss', {'name': k, 'page': 1}) }}\">{{ k }}</a></td><td align=right>{{ v }}</td></tr>
{% endfor %}
  </tbody>
</table>

     </div>
    </div>

  </div>

</div>

  <div class=\"row gx-5\">
    <div class=\"col-md-12\">
     <div class=\"p-3 border bg-light box\">

wątki
<table class=\"table table-striped\">
  <thead>
    <tr>
      <th scope=\"col\">właściciel</th>
      <th scope=\"col\">avatar</th>
      <th scope=\"col\">nazwa</th>
      <th scope=\"col\">posty / ostatni</th>
      <th scope=\"col\">admini</th>
      <th scope=\"col\">aktywny?</th>
      <th scope=\"col\">otwarty?</th>
      <th scope=\"col\">opis</th>
      <th scope=\"col\">data utworzenia</th>

    </tr>
  </thead>
  <tbody>

{% if allgroups %}
{% for ag in thread_allgroups %}
                <tr><td><a href=\"{{ path('userspace', {'uid': ag.owner.id}) }}\"> {{ ag.owner }} </a></td><td><a href=\"{{ path('show_discuss', {'name': ag.name, 'page': 1}) }}\"><img src=\"/groupavatar/{{ ag.id }}.jpeg\"></a></td><td><a href=\"{{ path('show_discuss', {'name': ag.name, 'page': 1}) }}\">{{ ag.name }}</a></td><td>{{ ccnt[ag.id] }} / {{ last[ag.id] }}</td>
<td>
{% for k, v in gcdn %}
        {% if k == ag.name %}
                {% for k1, v1 in v %}
                        <a href=\"{{ path('userspace', {'uid': v1}) }}\">{{ k1 }}</a><br />
                {% endfor %}
        {% endif %}
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

{% endif %}


  </tbody>
</table>



     </div>
   </div>
 </div>

augue eget arcu dictum varius duis at consectetur lorem donec massa sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor eu augue ut lectus arcu bibendum at varius vel pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque convallis a cras semper auctor neque vitae tempus quam pellentesque nec nam aliquam sem et tortor consequat id porta nibh venenatis cras sed felis eget velit aliquet sagittis id consectetur purus ut faucibus pulvinar elementum integer enim neque volutpat ac tincidunt vitae semper quis lectus nulla at volutpat diam ut venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt eget nullam non nisi est sit amet facilisis magna etiam tempor orci eu lobortis elementum nibh tellus molestie nunc non blandit massa enim nec dui nunc mattis enim ut tellus elementum sagittis vitae et leo duis ut diam quam nulla porttitor massa id neque aliquam 

<hr>

{{ navi|raw }}

{% endblock %}
", "port119/root2.html.twig", "/var/www/port119/templates/port119/root2.html.twig");
    }
}
