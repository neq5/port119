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

/* port119/subscriptions.html.twig */
class __TwigTemplate_c57913cb4b382c2246ff44392583ae85dfc9f8cc9e6dc8401de7da47e065b2d2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/subscriptions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/subscriptions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/subscriptions.html.twig", 1);
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
        if ((isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "
Subskrybujesz<br />

<table border=1>
\t\t<tr><td>Właściciel</td><td>Awatar</td><td>Nazwa</td><td>Posty / Ostatni</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td><td>Akcja</td></tr>




";
            // line 15
            $context["subhash"] = [];
            // line 16
            echo "
";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                // line 18
                echo "

<tr><td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 20), "owner", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 20), "owner", [], "any", false, false, false, 20), "html", null, true);
                echo "</a></td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2", ["name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "page" => 1]), "html", null, true);
                echo "\"><img src=\"/groupavatar/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), "html", null, true);
                echo ".jpeg\"></a></td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2", ["name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "page" => 1]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
                echo "</a></td>
<td>
";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ccnt"]) || array_key_exists("ccnt", $context) ? $context["ccnt"] : (function () { throw new RuntimeError('Variable "ccnt" does not exist.', 22, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22), [], "array", false, false, false, 22), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 22, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22), [], "array", false, false, false, 22), "html", null, true);
                echo "
</td>
<td>
\t";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 25, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 26
                    echo "\t\t";
                    if (($context["k"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26))) {
                        // line 27
                        echo "\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["v"]);
                        foreach ($context['_seq'] as $context["k1"] => $context["v1"]) {
                            // line 28
                            echo "\t\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => $context["v1"]]), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["k1"], "html", null, true);
                            echo "</a><br />
\t\t\t\t";
                            // line 29
                            $context["subhash"] = twig_array_merge((isset($context["subhash"]) || array_key_exists("subhash", $context) ? $context["subhash"] : (function () { throw new RuntimeError('Variable "subhash" does not exist.', 29, $this->source); })()), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29) => 1]);
                            // line 30
                            echo "\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k1'], $context['v1'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 31
                        echo "\t\t";
                    }
                    // line 32
                    echo "\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "</td>
<td>
";
                // line 35
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 35), "active", [], "any", false, false, false, 35) != false)) {
                    // line 36
                    echo "\taktywny
";
                } else {
                    // line 38
                    echo "\tnieakwytwny
";
                }
                // line 40
                echo "</td>
<td>
";
                // line 42
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 42), "open", [], "any", false, false, false, 42) != false)) {
                    // line 43
                    echo "\totwarty
";
                } else {
                    // line 45
                    echo "\tzamknięty
";
                }
                // line 47
                echo "</td>
<td>
";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new RuntimeError('Variable "abouts" does not exist.', 49, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49), [], "array", false, false, false, 49), "html", null, true);
                echo "</td>

<td>";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 51), "createdat", [], "any", false, false, false, 51), "Y-m-d H-i-s"), "html", null, true);
                echo "</td>

<td><a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_unsubscribe", ["groupid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\">nie subskrybuj</a> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\">pokaż</a></td>


</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "</table>

";
        } else {
            // line 61
            echo "Brak wątków
";
        }
        // line 63
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/subscriptions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 63,  216 => 61,  211 => 58,  198 => 53,  193 => 51,  188 => 49,  184 => 47,  180 => 45,  176 => 43,  174 => 42,  170 => 40,  166 => 38,  162 => 36,  160 => 35,  156 => 33,  150 => 32,  147 => 31,  141 => 30,  139 => 29,  132 => 28,  127 => 27,  124 => 26,  120 => 25,  112 => 22,  97 => 20,  93 => 18,  89 => 17,  86 => 16,  84 => 15,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

{% if subscriptions %}

Subskrybujesz<br />

<table border=1>
\t\t<tr><td>Właściciel</td><td>Awatar</td><td>Nazwa</td><td>Posty / Ostatni</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td><td>Akcja</td></tr>




{% set subhash = [] %}

{% for sub in subscriptions %}


<tr><td><a href=\"{{ path('userspace', {'uid': sub.groups.owner.id}) }}\">{{ sub.groups.owner }}</a></td><td><a href=\"{{ path('discuss2', {'name': sub.groups.name, 'page': 1}) }}\"><img src=\"/groupavatar/{{ sub.groups.id }}.jpeg\"></a></td><td><a href=\"{{ path('discuss2', {'name': sub.groups.name, 'page': 1}) }}\">{{ sub.groups.name }}</a></td>
<td>
{{ ccnt[sub.groups.id] }} / {{ last[sub.groups.id] }}
</td>
<td>
\t{% for k, v in gcdn %}
\t\t{% if k == sub.groups.name %}
\t\t\t{% for k1, v1 in v %}
\t\t\t\t<a href=\"{{ path('userspace', {'uid': v1}) }}\">{{ k1 }}</a><br />
\t\t\t\t{% set subhash = subhash|merge({(sub.groups.name): 1}) %}
\t\t\t{% endfor %}
\t\t{% endif %}
\t{% endfor %}
</td>
<td>
{% if sub.groups.active != false %}
\taktywny
{% else %}
\tnieakwytwny
{% endif %}
</td>
<td>
{% if sub.groups.open != false %}
\totwarty
{% else %}
\tzamknięty
{% endif %}
</td>
<td>
{{ abouts[sub.groups.id] }}</td>

<td>{{ sub.groups.createdat|date('Y-m-d H-i-s') }}</td>

<td><a href=\"{{ path('group_user_unsubscribe', {'groupid': sub.groups.id}) }}\">nie subskrybuj</a> <a href=\"{{ path('group_user_show', {'id': sub.groups.id}) }}\">pokaż</a></td>


</tr>
{% endfor %}
</table>

{% else %}
Brak wątków
{% endif %}


{% endblock %}
", "port119/subscriptions.html.twig", "/var/www/port119/templates/port119/subscriptions.html.twig");
    }
}
