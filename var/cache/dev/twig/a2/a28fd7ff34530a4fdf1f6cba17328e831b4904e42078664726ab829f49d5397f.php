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

/* port119/root.html.twig */
class __TwigTemplate_f00e6c75825d3001c11a241be6901bcdd6a95fced5f8c5ba496f0d940a8a9692 extends \Twig\Template
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
        return "root.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/root.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/root.html.twig"));

        $this->parent = $this->loadTemplate("root.html.twig", "port119/root.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-8\">
\tostatnie wątki (ilość: ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["grcnt"]) || array_key_exists("grcnt", $context) ? $context["grcnt"] : (function () { throw new RuntimeError('Variable "grcnt" does not exist.', 13, $this->source); })()), "html", null, true);
        echo ")

";
        // line 15
        if ((isset($context["allgroups"]) || array_key_exists("allgroups", $context) ? $context["allgroups"] : (function () { throw new RuntimeError('Variable "allgroups" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "
<table border=1>
                <tr><td>Właściciel</td><td>Awatar</td><td>Nazwa</td><td>Posty / Ostatni</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td></tr>
";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["thread_allgroups"]) || array_key_exists("thread_allgroups", $context) ? $context["thread_allgroups"] : (function () { throw new RuntimeError('Variable "thread_allgroups" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                // line 20
                echo "                <tr><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "owner", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "owner", [], "any", false, false, false, 20), "html", null, true);
                echo " </a></td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_discuss", ["name" => twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 20), "page" => 1]), "html", null, true);
                echo "\"><img src=\"/groupavatar/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 20), "html", null, true);
                echo ".jpeg\"></a></td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_discuss", ["name" => twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 20), "page" => 1]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 20), "html", null, true);
                echo "</a></td><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ccnt"]) || array_key_exists("ccnt", $context) ? $context["ccnt"] : (function () { throw new RuntimeError('Variable "ccnt" does not exist.', 20, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 20), [], "array", false, false, false, 20), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 20, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 20), [], "array", false, false, false, 20), "html", null, true);
                echo "</td>
<td>
";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 22, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 23
                    echo "        ";
                    if (($context["k"] == twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 23))) {
                        // line 24
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["v"]);
                        foreach ($context['_seq'] as $context["k1"] => $context["v1"]) {
                            // line 25
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
                        // line 27
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "</td>
<td>
";
                // line 31
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "active", [], "any", false, false, false, 31) != false)) {
                    // line 32
                    echo "aktywny
";
                } else {
                    // line 34
                    echo "niaktywny
";
                }
                // line 36
                echo "</td>
<td>
";
                // line 38
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "open", [], "any", false, false, false, 38) != false)) {
                    // line 39
                    echo "otwarty
";
                } else {
                    // line 41
                    echo "zamknięty
";
                }
                // line 43
                echo "</td>
<td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new RuntimeError('Variable "abouts" does not exist.', 44, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 44), [], "array", false, false, false, 44), "html", null, true);
                echo "</td>
<td>";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "createdat", [], "any", false, false, false, 45), "Y-m-d H-i-s"), "html", null, true);
                echo "</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "</table>
";
            // line 49
            echo (isset($context["navi"]) || array_key_exists("navi", $context) ? $context["navi"] : (function () { throw new RuntimeError('Variable "navi" does not exist.', 49, $this->source); })());
            echo "

";
        }
        // line 52
        echo "
    </div>
\t<div class=\"col-sm-4\">
ostatnio komentowane

<table border=1>
<tr><td>Data</td><td>Nazwa grupy</td><td>Autor</td><td>Tytuł</td><td>Treść</td></tr>

";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commcreatedat"]) || array_key_exists("commcreatedat", $context) ? $context["commcreatedat"] : (function () { throw new RuntimeError('Variable "commcreatedat" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 61
            echo "<tr><td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commcreatedat"]) || array_key_exists("commcreatedat", $context) ? $context["commcreatedat"] : (function () { throw new RuntimeError('Variable "commcreatedat" does not exist.', 61, $this->source); })()), $context["k"], [], "array", false, false, false, 61), "Y-m-d H-i-s"), "html", null, true);
            echo "</td><td><a href =\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_discuss", ["name" => twig_get_attribute($this->env, $this->source, (isset($context["commgids"]) || array_key_exists("commgids", $context) ? $context["commgids"] : (function () { throw new RuntimeError('Variable "commgids" does not exist.', 61, $this->source); })()), $context["k"], [], "array", false, false, false, 61), "page" => 1]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commgids"]) || array_key_exists("commgids", $context) ? $context["commgids"] : (function () { throw new RuntimeError('Variable "commgids" does not exist.', 61, $this->source); })()), $context["k"], [], "array", false, false, false, 61), "html", null, true);
            echo "</a></td><td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => twig_get_attribute($this->env, $this->source, (isset($context["commacounts2"]) || array_key_exists("commacounts2", $context) ? $context["commacounts2"] : (function () { throw new RuntimeError('Variable "commacounts2" does not exist.', 61, $this->source); })()), $context["k"], [], "array", false, false, false, 61)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commaccounts"]) || array_key_exists("commaccounts", $context) ? $context["commaccounts"] : (function () { throw new RuntimeError('Variable "commaccounts" does not exist.', 61, $this->source); })()), $context["k"], [], "array", false, false, false, 61), "html", null, true);
            echo "</a></td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commtitles"]) || array_key_exists("commtitles", $context) ? $context["commtitles"] : (function () { throw new RuntimeError('Variable "commtitles" does not exist.', 61, $this->source); })()), $context["k"], [], "array", false, false, false, 61), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commcontent"]) || array_key_exists("commcontent", $context) ? $context["commcontent"] : (function () { throw new RuntimeError('Variable "commcontent" does not exist.', 61, $this->source); })()), $context["k"], [], "array", false, false, false, 61), "html", null, true);
            echo "</td></tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "</table>
<br /><br />
najczęściej wyświetlane wątki

<table border=1>
<tr><td>Wątek</td><td>Licznik</td></tr>
";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ghitsarr"]) || array_key_exists("ghitsarr", $context) ? $context["ghitsarr"] : (function () { throw new RuntimeError('Variable "ghitsarr" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 71
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
        // line 73
        echo "
</table>

<br /><br />
Najczęściej komentowane

<table border=1>
<tr><td>Wątek</td><td>Komentarzy</td></tr>
";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cntg"]) || array_key_exists("cntg", $context) ? $context["cntg"] : (function () { throw new RuntimeError('Variable "cntg" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 82
            echo "<tr><td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_discuss", ["name" => $context["k"], "page" => 1]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "</a></td><td>";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "</table>

<br /><br />

augue eget arcu dictum varius duis at consectetur lorem donec massa sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor eu augue ut lectus arcu bibendum at varius vel pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque convallis a cras semper auctor neque vitae tempus quam pellentesque nec nam aliquam sem et tortor consequat id porta nibh venenatis cras sed felis eget velit aliquet sagittis id consectetur purus ut faucibus pulvinar elementum integer enim neque volutpat ac tincidunt vitae semper quis lectus nulla at volutpat diam ut venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt eget nullam non nisi est sit amet facilisis magna etiam tempor orci eu lobortis elementum nibh tellus molestie nunc non blandit massa enim nec dui nunc mattis enim ut tellus elementum sagittis vitae et leo duis ut diam quam nulla porttitor massa id neque aliquam 


\t</div>
  </div>
  </div>
</div>

<hr>


";
        // line 99
        echo (isset($context["navi"]) || array_key_exists("navi", $context) ? $context["navi"] : (function () { throw new RuntimeError('Variable "navi" does not exist.', 99, $this->source); })());
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/root.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 99,  285 => 84,  272 => 82,  268 => 81,  258 => 73,  245 => 71,  241 => 70,  233 => 64,  211 => 61,  207 => 60,  197 => 52,  191 => 49,  188 => 48,  179 => 45,  175 => 44,  172 => 43,  168 => 41,  164 => 39,  162 => 38,  158 => 36,  154 => 34,  150 => 32,  148 => 31,  144 => 29,  137 => 27,  126 => 25,  121 => 24,  118 => 23,  114 => 22,  94 => 20,  90 => 19,  85 => 16,  83 => 15,  78 => 13,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'root.html.twig' %}


{% block body %}

<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-8\">
\tostatnie wątki (ilość: {{ grcnt }})

{% if allgroups %}

<table border=1>
                <tr><td>Właściciel</td><td>Awatar</td><td>Nazwa</td><td>Posty / Ostatni</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td></tr>
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
</table>
{{ navi|raw }}

{% endif %}

    </div>
\t<div class=\"col-sm-4\">
ostatnio komentowane

<table border=1>
<tr><td>Data</td><td>Nazwa grupy</td><td>Autor</td><td>Tytuł</td><td>Treść</td></tr>

{% for k, v in commcreatedat %}
<tr><td>{{ commcreatedat[k]|date('Y-m-d H-i-s') }}</td><td><a href =\"{{ path('show_discuss', {'name': commgids[k], 'page': 1}) }}\">{{ commgids[k] }}</a></td><td><a href=\"{{ path('userspace', {'uid': commacounts2[k] }) }}\">{{ commaccounts[k] }}</a></td><td>{{ commtitles[k] }}</td><td>{{ commcontent[k] }}</td></tr>

{% endfor %}
</table>
<br /><br />
najczęściej wyświetlane wątki

<table border=1>
<tr><td>Wątek</td><td>Licznik</td></tr>
{% for k, v in ghitsarr %}
<tr><td><a href=\"{{ path('show_discuss', {'name': k, 'page': 1}) }}\">{{ k }}</a></td><td align=right>{{ v }}</td></tr>
{% endfor %}

</table>

<br /><br />
Najczęściej komentowane

<table border=1>
<tr><td>Wątek</td><td>Komentarzy</td></tr>
{% for k, v in cntg %}
<tr><td><a href=\"{{ path('show_discuss', {'name': k, 'page':1}) }}\">{{ k }}</a></td><td>{{ v }}</td></tr>
{% endfor %}
</table>

<br /><br />

augue eget arcu dictum varius duis at consectetur lorem donec massa sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor eu augue ut lectus arcu bibendum at varius vel pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque convallis a cras semper auctor neque vitae tempus quam pellentesque nec nam aliquam sem et tortor consequat id porta nibh venenatis cras sed felis eget velit aliquet sagittis id consectetur purus ut faucibus pulvinar elementum integer enim neque volutpat ac tincidunt vitae semper quis lectus nulla at volutpat diam ut venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt eget nullam non nisi est sit amet facilisis magna etiam tempor orci eu lobortis elementum nibh tellus molestie nunc non blandit massa enim nec dui nunc mattis enim ut tellus elementum sagittis vitae et leo duis ut diam quam nulla porttitor massa id neque aliquam 


\t</div>
  </div>
  </div>
</div>

<hr>


{{ navi|raw }}

{% endblock %}
", "port119/root.html.twig", "/var/www/port119/templates/port119/root.html.twig");
    }
}
