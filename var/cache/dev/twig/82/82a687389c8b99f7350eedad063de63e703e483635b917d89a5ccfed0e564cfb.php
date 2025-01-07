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

/* port119/usergroup.html.twig */
class __TwigTemplate_a5662cb47912bd60777a485b368d413fa511b8888477ee164b0d6377b8a8a5c8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/usergroup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/usergroup.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/usergroup.html.twig", 1);
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
                echo "        ";
                if (($context["k"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 10), "name", [], "any", false, false, false, 10))) {
                    // line 11
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["v"]);
                    foreach ($context['_seq'] as $context["k1"] => $context["v1"]) {
                        // line 12
                        echo "                        ";
                        $context["subhash"] = twig_array_merge((isset($context["subhash"]) || array_key_exists("subhash", $context) ? $context["subhash"] : (function () { throw new RuntimeError('Variable "subhash" does not exist.', 12, $this->source); })()), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12) => 1]);
                        // line 13
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k1'], $context['v1'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "        ";
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
        if ((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "Twoje wątki<br /><br />


<table border=1>
\t\t<tr><td>Awatar</td><td>Nazwa</td><td>Posty / Ostatni</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td><td>Akcja</td></tr>


";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 29
                echo "<tr>
<td><a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2", ["name" => twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 30), "page" => 1]), "html", null, true);
                echo "\"><img src=\"/groupavatar/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo ".jpeg\"></a></td>
<td><a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2", ["name" => twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 31), "page" => 1]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 31), "html", null, true);
                echo "</a></td>

<td>
";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ccnt"]) || array_key_exists("ccnt", $context) ? $context["ccnt"] : (function () { throw new RuntimeError('Variable "ccnt" does not exist.', 34, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 34), [], "array", false, false, false, 34), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 34, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 34), [], "array", false, false, false, 34), "html", null, true);
                echo "
</td>

<td>

";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 39, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 40
                    echo "\t";
                    if (($context["key"] == twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 40))) {
                        // line 41
                        echo "\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["value"]);
                        foreach ($context['_seq'] as $context["key1"] => $context["value1"]) {
                            // line 42
                            echo "\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => $context["value1"]]), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["key1"], "html", null, true);
                            echo "</a><br />
\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key1'], $context['value1'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 44
                        echo "\t";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "
</td>

<td class=\"text-center\">
";
                // line 50
                if ((twig_get_attribute($this->env, $this->source, $context["group"], "active", [], "any", false, false, false, 50) != false)) {
                    // line 51
                    echo "akywny
";
                } else {
                    // line 53
                    echo "zamknięty
";
                }
                // line 55
                echo "
</td>

<td class=\"text-center\">

";
                // line 60
                if ((twig_get_attribute($this->env, $this->source, $context["group"], "open", [], "any", false, false, false, 60) != false)) {
                    // line 61
                    echo "otwarty
";
                } else {
                    // line 63
                    echo "zamknięty
";
                }
                // line 65
                echo "</td>




<td>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new RuntimeError('Variable "abouts" does not exist.', 70, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 70), [], "array", false, false, false, 70), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "createdat", [], "any", false, false, false, 70), "Y-m-d H-i-s"), "html", null, true);
                echo "</td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\">pokaż</a> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\">edycja</a> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\">usuń</a>

";
                // line 72
                if (twig_get_attribute($this->env, $this->source, ($context["subhash"] ?? null), twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 72), [], "array", true, true, false, 72)) {
                    // line 73
                    echo "
<a href=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_unsubscribe", ["groupid" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                    echo "\">nie subskrybuj</a>

";
                } else {
                    // line 77
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_subscribe", ["groupid" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 77)]), "html", null, true);
                    echo "\">subskrybuj</a>
";
                }
                // line 79
                echo "

</td>


</tr>



";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "
</table>

";
        } else {
            // line 93
            echo "
Brak wątków

";
        }
        // line 97
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/usergroup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 97,  281 => 93,  275 => 89,  260 => 79,  254 => 77,  248 => 74,  245 => 73,  243 => 72,  230 => 70,  223 => 65,  219 => 63,  215 => 61,  213 => 60,  206 => 55,  202 => 53,  198 => 51,  196 => 50,  190 => 46,  183 => 44,  172 => 42,  167 => 41,  164 => 40,  160 => 39,  150 => 34,  142 => 31,  136 => 30,  133 => 29,  129 => 28,  120 => 21,  118 => 20,  113 => 17,  102 => 14,  96 => 13,  93 => 12,  88 => 11,  85 => 10,  81 => 9,  77 => 8,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

{% set subhash = [] %}


{% for sub in subscriptions %}
{% for k, v in gcdn %}
        {% if k == sub.groups.name %}
                {% for k1, v1 in v %}
                        {% set subhash = subhash|merge({(sub.groups.name): 1}) %}
                {% endfor %}
        {% endif %}
{% endfor %}
{% endfor %}



{% if groups %}
Twoje wątki<br /><br />


<table border=1>
\t\t<tr><td>Awatar</td><td>Nazwa</td><td>Posty / Ostatni</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td><td>Akcja</td></tr>


{% for group in groups %}
<tr>
<td><a href=\"{{ path('discuss2', {'name': group.name, 'page': 1}) }}\"><img src=\"/groupavatar/{{ group.id }}.jpeg\"></a></td>
<td><a href=\"{{ path('discuss2', {'name': group.name, 'page': 1}) }}\">{{ group.name }}</a></td>

<td>
{{ ccnt[group.id] }} / {{ last[group.id] }}
</td>

<td>

{% for key, value in gcdn %}
\t{% if key == group.name %}
\t\t{% for key1, value1 in value %}
\t\t\t<a href=\"{{ path('userspace', {'uid': value1}) }}\">{{ key1 }}</a><br />
\t\t{% endfor %}
\t{% endif %}
{% endfor %}

</td>

<td class=\"text-center\">
{% if group.active != false %}
akywny
{% else %}
zamknięty
{% endif %}

</td>

<td class=\"text-center\">

{% if group.open != false %}
otwarty
{% else %}
zamknięty
{% endif %}
</td>




<td>{{ abouts[group.id] }}</td><td>{{ group.createdat|date('Y-m-d H-i-s') }}</td><td><a href=\"{{ path('group_user_show', {'id': group.id}) }}\">pokaż</a> <a href=\"{{ path('group_user_edit', {'id': group.id}) }}\">edycja</a> <a href=\"{{ path('group_user_delete', {'id': group.id}) }}\">usuń</a>

{% if subhash[group.name] is defined %}

<a href=\"{{ path('group_user_unsubscribe', {'groupid': group.id}) }}\">nie subskrybuj</a>

{% else %}
<a href=\"{{ path('group_user_subscribe', {'groupid': group.id}) }}\">subskrybuj</a>
{% endif %}


</td>


</tr>



{% endfor %}

</table>

{% else %}

Brak wątków

{% endif %}


{% endblock %}
", "port119/usergroup.html.twig", "/var/www/port119/templates/port119/usergroup.html.twig");
    }
}
