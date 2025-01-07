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

/* port119/index.html.twig */
class __TwigTemplate_f0118b7d44ed4826bb98725536c33e9f2c9e95462b3326e0d98d3d2fb39a72b1 extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-sm-8\">
\t\t\tWizyty: <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => (isset($context["uid"]) || array_key_exists("uid", $context) ? $context["uid"] : (function () { throw new RuntimeError('Variable "uid" does not exist.', 12, $this->source); })())]), "html", null, true);
        echo "\">na Twoim profilu</a>
<br />\t\t\tostatnie wątki (ilość ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["grcnt"]) || array_key_exists("grcnt", $context) ? $context["grcnt"] : (function () { throw new RuntimeError('Variable "grcnt" does not exist.', 13, $this->source); })()), "html", null, true);
        echo ")


";
        // line 16
        if ((isset($context["allgroups"]) || array_key_exists("allgroups", $context) ? $context["allgroups"] : (function () { throw new RuntimeError('Variable "allgroups" does not exist.', 16, $this->source); })())) {
            // line 17
            echo "
<table border=1>
<tr><td>Właściciel</td><td>Awatar</td><td>Nazwa</td><td>Posty / Ostatni</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td></tr>

";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["thread_allgroups"]) || array_key_exists("thread_allgroups", $context) ? $context["thread_allgroups"] : (function () { throw new RuntimeError('Variable "thread_allgroups" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                // line 22
                echo "<tr><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "owner", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "owner", [], "any", false, false, false, 22), "html", null, true);
                echo "</td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2", ["name" => twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 22), "page" => 1]), "html", null, true);
                echo "\"><img src=\"/groupavatar/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 22), "html", null, true);
                echo ".jpeg\"></a></td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2", ["name" => twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 22), "page" => 1]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 22), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ccnt"]) || array_key_exists("ccnt", $context) ? $context["ccnt"] : (function () { throw new RuntimeError('Variable "ccnt" does not exist.', 22, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 22), [], "array", false, false, false, 22), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 22, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 22), [], "array", false, false, false, 22), "html", null, true);
                echo "</td>

<td>
";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 25, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 26
                    echo "\t";
                    if (($context["k"] == twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 26))) {
                        // line 27
                        echo "\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["v"]);
                        foreach ($context['_seq'] as $context["k1"] => $context["v1"]) {
                            // line 28
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
                        // line 30
                        echo "\t";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "</td>
<td>
";
                // line 34
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "active", [], "any", false, false, false, 34) != false)) {
                    // line 35
                    echo "akrywny
";
                } else {
                    // line 37
                    echo "nieaktywny
";
                }
                // line 39
                echo "</td>
<td>
";
                // line 41
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "open", [], "any", false, false, false, 41) != false)) {
                    // line 42
                    echo "otwarty
";
                } else {
                    // line 44
                    echo "zamknięty 
";
                }
                // line 46
                echo "</td>
<td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new RuntimeError('Variable "abouts" does not exist.', 47, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 47), [], "array", false, false, false, 47), "html", null, true);
                echo "</td>
<td>";
                // line 48
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "createdat", [], "any", false, false, false, 48), "Y-m-d H-i-s"), "html", null, true);
                echo "</td>
</tr>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "

</table>
";
            // line 55
            echo (isset($context["navi"]) || array_key_exists("navi", $context) ? $context["navi"] : (function () { throw new RuntimeError('Variable "navi" does not exist.', 55, $this->source); })());
            echo "

";
        }
        // line 58
        echo "\t</div>
\t<div class=\"col-sm-4\">
\t\tostatnio komentowane
\t\t<table border=1>
\t\t<tr><td>Data</td><td>Nazwa grupy</td><td>Autor</td><td>Tytuł</td><td>Treśc</td></tr>
\t\t";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commcreatedat"]) || array_key_exists("commcreatedat", $context) ? $context["commcreatedat"] : (function () { throw new RuntimeError('Variable "commcreatedat" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 64
            echo "\t\t\t<tr><td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commcreatedat"]) || array_key_exists("commcreatedat", $context) ? $context["commcreatedat"] : (function () { throw new RuntimeError('Variable "commcreatedat" does not exist.', 64, $this->source); })()), $context["k"], [], "array", false, false, false, 64), "Y-m-d H-i-s"), "html", null, true);
            echo "</td><td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2", ["name" => twig_get_attribute($this->env, $this->source, (isset($context["commgids"]) || array_key_exists("commgids", $context) ? $context["commgids"] : (function () { throw new RuntimeError('Variable "commgids" does not exist.', 64, $this->source); })()), $context["k"], [], "array", false, false, false, 64), "page" => 1]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commgids"]) || array_key_exists("commgids", $context) ? $context["commgids"] : (function () { throw new RuntimeError('Variable "commgids" does not exist.', 64, $this->source); })()), $context["k"], [], "array", false, false, false, 64), "html", null, true);
            echo "</td><td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => twig_get_attribute($this->env, $this->source, (isset($context["commaccounts2"]) || array_key_exists("commaccounts2", $context) ? $context["commaccounts2"] : (function () { throw new RuntimeError('Variable "commaccounts2" does not exist.', 64, $this->source); })()), $context["k"], [], "array", false, false, false, 64)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commaccounts"]) || array_key_exists("commaccounts", $context) ? $context["commaccounts"] : (function () { throw new RuntimeError('Variable "commaccounts" does not exist.', 64, $this->source); })()), $context["k"], [], "array", false, false, false, 64), "html", null, true);
            echo "</a></td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commtitles"]) || array_key_exists("commtitles", $context) ? $context["commtitles"] : (function () { throw new RuntimeError('Variable "commtitles" does not exist.', 64, $this->source); })()), $context["k"], [], "array", false, false, false, 64), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commcontent"]) || array_key_exists("commcontent", $context) ? $context["commcontent"] : (function () { throw new RuntimeError('Variable "commcontent" does not exist.', 64, $this->source); })()), $context["k"], [], "array", false, false, false, 64), "html", null, true);
            echo "</td></tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t</table>

<br /><br />
najczęściej wyświetlane wątki

<table border=1>
<tr><td>Grupa</td><td>Licznik</td></tr>
";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ghitsarr"]) || array_key_exists("ghitsarr", $context) ? $context["ghitsarr"] : (function () { throw new RuntimeError('Variable "ghitsarr" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 74
            echo "<tr><td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2", ["name" => $context["k"], "page" => 1]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "</a><td align=right>";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "</td></tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "</table>
<br /><br />

Najczęściej komentowane
<table border=1>
<tr><td>Wątek</td><td>Komentarzy</td></tr>
";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cntg"]) || array_key_exists("cntg", $context) ? $context["cntg"] : (function () { throw new RuntimeError('Variable "cntg" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 84
            echo "<tr><td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2", ["name" => $context["k"], "page" => 1]), "html", null, true);
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
        // line 86
        echo "</table>

<br /><br />


augue eget arcu dictum varius duis at consectetur lorem donec massa sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor eu augue ut lectus arcu bibendum at varius vel pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque convallis a cras semper auctor neque vitae tempus quam pellentesque nec nam aliquam sem et tortor consequat id porta nibh venenatis cras sed felis eget velit aliquet sagittis id consectetur purus ut faucibus pulvinar elementum integer enim neque volutpat ac tincidunt vitae semper quis lectus nulla at volutpat diam ut venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt eget nullam non nisi est sit amet facilisis magna etiam tempor orci eu lobortis elementum nibh tellus molestie nunc non blandit massa enim nec dui nunc mattis enim ut tellus elementum sagittis vitae et leo duis ut diam quam nulla porttitor massa id neque aliquam 
\t</div>
\t</div>
\t</div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 86,  278 => 84,  274 => 83,  266 => 77,  252 => 74,  248 => 73,  239 => 66,  218 => 64,  214 => 63,  207 => 58,  201 => 55,  196 => 52,  186 => 48,  182 => 47,  179 => 46,  175 => 44,  171 => 42,  169 => 41,  165 => 39,  161 => 37,  157 => 35,  155 => 34,  151 => 32,  144 => 30,  133 => 28,  128 => 27,  125 => 26,  121 => 25,  100 => 22,  96 => 21,  90 => 17,  88 => 16,  82 => 13,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-sm-8\">
\t\t\tWizyty: <a href=\"{{ path('userspace', {'uid': uid}) }}\">na Twoim profilu</a>
<br />\t\t\tostatnie wątki (ilość {{ grcnt }})


{% if allgroups %}

<table border=1>
<tr><td>Właściciel</td><td>Awatar</td><td>Nazwa</td><td>Posty / Ostatni</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td></tr>

{% for ag in thread_allgroups %}
<tr><td><a href=\"{{ path('userspace', {'uid': ag.owner.id}) }}\"> {{ ag.owner }}</td><td><a href=\"{{ path('discuss2', {'name': ag.name, 'page': 1}) }}\"><img src=\"/groupavatar/{{ ag.id }}.jpeg\"></a></td><td><a href=\"{{ path('discuss2', {'name': ag.name, 'page': 1}) }}\">{{ ag.name }}</td><td>{{ ccnt[ag.id] }} / {{ last[ag.id] }}</td>

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
akrywny
{% else %}
nieaktywny
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
\t</div>
\t<div class=\"col-sm-4\">
\t\tostatnio komentowane
\t\t<table border=1>
\t\t<tr><td>Data</td><td>Nazwa grupy</td><td>Autor</td><td>Tytuł</td><td>Treśc</td></tr>
\t\t{% for k, v in commcreatedat %}
\t\t\t<tr><td>{{ commcreatedat[k]|date('Y-m-d H-i-s') }}</td><td><a href=\"{{ path('discuss2', {'name': commgids[k], 'page': 1}) }}\">{{ commgids[k] }}</td><td><a href=\"{{ path('userspace', {'uid': commaccounts2[k] }) }}\">{{ commaccounts[k] }}</a></td><td>{{ commtitles[k] }}</td><td>{{ commcontent[k] }}</td></tr>
\t\t{% endfor %}
\t\t</table>

<br /><br />
najczęściej wyświetlane wątki

<table border=1>
<tr><td>Grupa</td><td>Licznik</td></tr>
{% for k, v in ghitsarr %}
<tr><td><a href=\"{{ path('discuss2', {'name': k, 'page': 1}) }}\">{{ k }}</a><td align=right>{{ v }}</td></tr>

{% endfor %}
</table>
<br /><br />

Najczęściej komentowane
<table border=1>
<tr><td>Wątek</td><td>Komentarzy</td></tr>
{% for k, v in cntg %}
<tr><td><a href=\"{{ path('discuss2', {'name': k, 'page':1}) }}\">{{ k }}</a></td><td>{{ v }}</td></tr>
{% endfor %}
</table>

<br /><br />


augue eget arcu dictum varius duis at consectetur lorem donec massa sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor eu augue ut lectus arcu bibendum at varius vel pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque convallis a cras semper auctor neque vitae tempus quam pellentesque nec nam aliquam sem et tortor consequat id porta nibh venenatis cras sed felis eget velit aliquet sagittis id consectetur purus ut faucibus pulvinar elementum integer enim neque volutpat ac tincidunt vitae semper quis lectus nulla at volutpat diam ut venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt eget nullam non nisi est sit amet facilisis magna etiam tempor orci eu lobortis elementum nibh tellus molestie nunc non blandit massa enim nec dui nunc mattis enim ut tellus elementum sagittis vitae et leo duis ut diam quam nulla porttitor massa id neque aliquam 
\t</div>
\t</div>
\t</div>
</div>

{% endblock %}
", "port119/index.html.twig", "/var/www/port119/templates/port119/index.html.twig");
    }
}
