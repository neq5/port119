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

/* port119/groupall.html.twig */
class __TwigTemplate_f8bc9f7a3a825b3eb8e009135683876b0fbae4d193b63af119fec2fd15c25267 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/groupall.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/groupall.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/groupall.html.twig", 1);
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
";
        // line 5
        $context["subhash"] = [];
        // line 6
        echo "

";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 10
                echo "\t";
                if (($context["k"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 10), "name", [], "any", false, false, false, 10))) {
                    // line 11
                    echo "\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["v"]);
                    foreach ($context['_seq'] as $context["k1"] => $context["v1"]) {
                        // line 12
                        echo "\t\t\t";
                        $context["subhash"] = twig_array_merge((isset($context["subhash"]) || array_key_exists("subhash", $context) ? $context["subhash"] : (function () { throw new RuntimeError('Variable "subhash" does not exist.', 12, $this->source); })()), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12) => 1]);
                        // line 13
                        echo "\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k1'], $context['v1'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "


";
        // line 20
        if ((isset($context["allgroups"]) || array_key_exists("allgroups", $context) ? $context["allgroups"] : (function () { throw new RuntimeError('Variable "allgroups" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "Wszystkie wątki<br />

<table border=1>
\t\t<tr><td>Właściciel</td><td>Awatar</td><td>Nazwa</td><td>Posty / Ostatni</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td><td>Akcja</td></tr>
";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allgroups"]) || array_key_exists("allgroups", $context) ? $context["allgroups"] : (function () { throw new RuntimeError('Variable "allgroups" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                // line 26
                echo "<tr><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "owner", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "owner", [], "any", false, false, false, 26), "html", null, true);
                echo " </a></td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2", ["name" => twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 26), "page" => 1]), "html", null, true);
                echo "\"><img src=\"/groupavatar/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo ".jpeg\"></a></td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2", ["name" => twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 26), "page" => 1]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 26), "html", null, true);
                echo "</a></td>
<td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ccnt"]) || array_key_exists("ccnt", $context) ? $context["ccnt"] : (function () { throw new RuntimeError('Variable "ccnt" does not exist.', 27, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 27), [], "array", false, false, false, 27), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 27, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 27), [], "array", false, false, false, 27), "html", null, true);
                echo "</td>
<td>
";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 29, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 30
                    echo "\t";
                    if (($context["k"] == twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 30))) {
                        // line 31
                        echo "\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["v"]);
                        foreach ($context['_seq'] as $context["k1"] => $context["v1"]) {
                            // line 32
                            echo "\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => $context["v1"]]), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["k1"], "html", null, true);
                            echo "</a> <br />
\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k1'], $context['v1'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 34
                        echo "\t";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "</td>

<td>
";
                // line 39
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "active", [], "any", false, false, false, 39) != false)) {
                    // line 40
                    echo "aktywny
";
                } else {
                    // line 42
                    echo "nieaktywny
";
                }
                // line 44
                echo "</td>
<td>
";
                // line 46
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "open", [], "any", false, false, false, 46) != false)) {
                    // line 47
                    echo "otwarty
";
                } else {
                    // line 49
                    echo "zamknięty
";
                }
                // line 51
                echo "</td>
<td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new RuntimeError('Variable "abouts" does not exist.', 52, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 52), [], "array", false, false, false, 52), "html", null, true);
                echo "
</td>
<td>
";
                // line 55
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "createdat", [], "any", false, false, false, 55), "Y-m-d H-i-s"), "html", null, true);
                echo "
</td>

<td>


";
                // line 61
                if (twig_get_attribute($this->env, $this->source, ($context["subhash"] ?? null), twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 61), [], "array", true, true, false, 61)) {
                    // line 62
                    echo "
<a href=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_unsubscribe", ["groupid" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                    echo "\">nie subskrybuj</a>

";
                } else {
                    // line 66
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_subscribe", ["groupid" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                    echo "\">subskrybuj</a>
";
                }
                // line 68
                echo "
<a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                echo "\">pokaż</a>


";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 72, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 73
                    echo "        ";
                    if (($context["k"] == twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 73))) {
                        // line 74
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["v"]);
                        foreach ($context['_seq'] as $context["k1"] => $context["v1"]) {
                            // line 75
                            echo "\t\t\t\t";
                            if (($context["k1"] == (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 75, $this->source); })()))) {
                                // line 76
                                echo "\t\t\t\t\t<a href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 76)]), "html", null, true);
                                echo "\">edytuj</a>
\t\t\t\t\t";
                                // line 77
                                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "owner", [], "any", false, false, false, 77) == $context["k1"])) {
                                    // line 78
                                    echo "\t\t\t\t\t\t<a href=\"";
                                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 78)]), "html", null, true);
                                    echo "\">usuń</a>
\t\t\t\t\t";
                                }
                                // line 80
                                echo "\t\t\t\t";
                            }
                            // line 81
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k1'], $context['v1'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 82
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "

</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "</table>

";
        } else {
            // line 92
            echo "Brak wątków
";
        }
        // line 94
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/groupall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 94,  314 => 92,  309 => 89,  299 => 84,  292 => 82,  286 => 81,  283 => 80,  277 => 78,  275 => 77,  270 => 76,  267 => 75,  262 => 74,  259 => 73,  255 => 72,  249 => 69,  246 => 68,  240 => 66,  234 => 63,  231 => 62,  229 => 61,  220 => 55,  214 => 52,  211 => 51,  207 => 49,  203 => 47,  201 => 46,  197 => 44,  193 => 42,  189 => 40,  187 => 39,  182 => 36,  175 => 34,  164 => 32,  159 => 31,  156 => 30,  152 => 29,  145 => 27,  130 => 26,  126 => 25,  120 => 21,  118 => 20,  113 => 17,  102 => 14,  96 => 13,  93 => 12,  88 => 11,  85 => 10,  81 => 9,  77 => 8,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

{% set subhash = [] %}


{% for sub in subscriptions %}
{% for k, v in gcdn %}
\t{% if k == sub.groups.name %}
\t\t{% for k1, v1 in v %}
\t\t\t{% set subhash = subhash|merge({(sub.groups.name): 1}) %}
\t\t{% endfor %}
\t{% endif %}
{% endfor %}
{% endfor %}



{% if allgroups %}
Wszystkie wątki<br />

<table border=1>
\t\t<tr><td>Właściciel</td><td>Awatar</td><td>Nazwa</td><td>Posty / Ostatni</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td><td>Akcja</td></tr>
{% for ag in allgroups %}
<tr><td><a href=\"{{ path('userspace', {'uid': ag.owner.id}) }}\"> {{ ag.owner }} </a></td><td><a href=\"{{ path('discuss2', {'name': ag.name, 'page': 1}) }}\"><img src=\"/groupavatar/{{ ag.id }}.jpeg\"></a></td><td><a href=\"{{ path('discuss2', {'name': ag.name, 'page': 1}) }}\">{{ ag.name }}</a></td>
<td>{{ ccnt[ag.id] }} / {{ last[ag.id] }}</td>
<td>
{% for k, v in gcdn %}
\t{% if k == ag.name %}
\t\t{% for k1, v1 in v %}
\t\t\t<a href=\"{{ path('userspace', {'uid': v1}) }}\">{{ k1 }}</a> <br />
\t\t{% endfor %}
\t{% endif %}
{% endfor %}
</td>

<td>
{% if ag.active != false %}
aktywny
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
<td>{{ abouts[ag.id] }}
</td>
<td>
{{ ag.createdat|date('Y-m-d H-i-s') }}
</td>

<td>


{% if subhash[ag.name] is defined %}

<a href=\"{{ path('group_user_unsubscribe', {'groupid': ag.id}) }}\">nie subskrybuj</a>

{% else %}
<a href=\"{{ path('group_user_subscribe', {'groupid': ag.id}) }}\">subskrybuj</a>
{% endif %}

<a href=\"{{ path('group_user_show', {'id': ag.id })}}\">pokaż</a>


{% for k, v in gcdn %}
        {% if k == ag.name %}
                {% for k1, v1 in v %}
\t\t\t\t{% if k1 == username %}
\t\t\t\t\t<a href=\"{{ path('group_user_edit', {'id': ag.id}) }}\">edytuj</a>
\t\t\t\t\t{% if ag.owner == k1 %}
\t\t\t\t\t\t<a href=\"{{ path('group_user_delete', {'id': ag.id}) }}\">usuń</a>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
                {% endfor %}
        {% endif %}
{% endfor %}


</td>
</tr>
{% endfor %}
</table>

{% else %}
Brak wątków
{% endif %}

{% endblock %}
", "port119/groupall.html.twig", "/var/www/port119/templates/port119/groupall.html.twig");
    }
}
