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

/* port119/admgroup.html.twig */
class __TwigTemplate_84c279e32fb4e5ee9fb3afc0daf786422d20e7a386765cb8a400ac740f769749 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/admgroup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/admgroup.html.twig"));

        // line 1
        echo "u% extends 'base.html.twig' %}

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

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
        // line 6
        if ((isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "
- administrujesz 
<br />

<table border=1>
\t\t<tr><td>Właściciel</td><td>Awatar</td><td>Nazwa</td><td>Posty / Ostatni</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td><td>Akcja</td></tr>

";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["adm"]) {
                // line 15
                echo "  ";
                if ((twig_get_attribute($this->env, $this->source, $context["adm"], "accounts", [], "any", false, false, false, 15) == (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 15, $this->source); })()))) {
                    // line 16
                    echo "\t<tr><td><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 16), "owner", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 16), "owner", [], "any", false, false, false, 16), "html", null, true);
                    echo "</a></td><td><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2", ["name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "page" => 1]), "html", null, true);
                    echo "\"><img src=\"/groupavatar/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16), "html", null, true);
                    echo ".jpeg\"></a></td><td><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2", ["name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "page" => 1]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
                    echo "</a></td>
<td>
";
                    // line 18
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ccnt"]) || array_key_exists("ccnt", $context) ? $context["ccnt"] : (function () { throw new RuntimeError('Variable "ccnt" does not exist.', 18, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18), [], "array", false, false, false, 18), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 18, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18), [], "array", false, false, false, 18), "html", null, true);
                    echo "
</td>

<td>


\t";
                    // line 24
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 24, $this->source); })()));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 25
                        echo "\t\t";
                        if (($context["k"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25))) {
                            // line 26
                            echo "\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["v"]);
                            foreach ($context['_seq'] as $context["k1"] => $context["v1"]) {
                                // line 27
                                echo "\t\t\t\t<a href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => $context["v1"]]), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $context["k1"], "html", null, true);
                                echo "</a><br />
\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['k1'], $context['v1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 29
                            echo "\t\t";
                        }
                        // line 30
                        echo "\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "
</td>

<td>

";
                    // line 36
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 36), "active", [], "any", false, false, false, 36) != false)) {
                        // line 37
                        echo "\taktywny
";
                    } else {
                        // line 39
                        echo "\tnieaktywny
";
                    }
                    // line 41
                    echo "</td><td>

";
                    // line 43
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 43), "open", [], "any", false, false, false, 43) != false)) {
                        // line 44
                        echo "\totwarty
";
                    } else {
                        // line 46
                        echo "\tzamknięty
";
                    }
                    // line 48
                    echo "</td>
<td>";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new RuntimeError('Variable "abouts" does not exist.', 49, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49), [], "array", false, false, false, 49), "html", null, true);
                    echo "</td>

<td>";
                    // line 51
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 51), "createdat", [], "any", false, false, false, 51), "Y-m-d H-i-s"), "html", null, true);
                    echo "</td>


<td>
<a href=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55)]), "html", null, true);
                    echo "\">pokaż</a> <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55), "page" => 1]), "html", null, true);
                    echo "\">edycja</a>
</td>
</tr>

";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "

</table>

";
        } else {
            // line 66
            echo "Brak wątków
";
        }
        // line 68
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/admgroup.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  219 => 68,  215 => 66,  208 => 61,  194 => 55,  187 => 51,  182 => 49,  179 => 48,  175 => 46,  171 => 44,  169 => 43,  165 => 41,  161 => 39,  157 => 37,  155 => 36,  148 => 31,  142 => 30,  139 => 29,  128 => 27,  123 => 26,  120 => 25,  116 => 24,  105 => 18,  89 => 16,  86 => 15,  82 => 14,  73 => 7,  71 => 6,  67 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("u% extends 'base.html.twig' %}

{% block body %}


{% if admin %}

- administrujesz 
<br />

<table border=1>
\t\t<tr><td>Właściciel</td><td>Awatar</td><td>Nazwa</td><td>Posty / Ostatni</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td><td>Akcja</td></tr>

{% for adm in admin %}
  {% if adm.accounts == username %}
\t<tr><td><a href=\"{{ path('userspace', {'uid': adm.groups.owner.id}) }}\">{{ adm.groups.owner }}</a></td><td><a href=\"{{ path('discuss2', {'name': adm.groups.name, 'page': 1}) }}\"><img src=\"/groupavatar/{{ adm.groups.id }}.jpeg\"></a></td><td><a href=\"{{ path('discuss2', {'name': adm.groups.name, 'page': 1}) }}\">{{ adm.groups.name }}</a></td>
<td>
{{ ccnt[adm.groups.id] }} / {{ last[adm.groups.id] }}
</td>

<td>


\t{% for k, v in gcdn %}
\t\t{% if k == adm.groups.name %}
\t\t\t{% for k1, v1 in v %}
\t\t\t\t<a href=\"{{ path('userspace', {'uid': v1}) }}\">{{ k1 }}</a><br />
\t\t\t{% endfor %}
\t\t{% endif %}
\t{% endfor %}

</td>

<td>

{% if adm.groups.active != false %}
\taktywny
{% else %}
\tnieaktywny
{% endif %}
</td><td>

{% if adm.groups.open != false %}
\totwarty
{% else %}
\tzamknięty
{% endif %}
</td>
<td>{{ abouts[adm.groups.id] }}</td>

<td>{{ adm.groups.createdat|date('Y-m-d H-i-s') }}</td>


<td>
<a href=\"{{ path('group_user_show', {'id': adm.groups.id}) }}\">pokaż</a> <a href=\"{{ path('group_user_edit', {'id': adm.groups.id, 'page': 1}) }}\">edycja</a>
</td>
</tr>

{% endif %}
{% endfor %}


</table>

{% else %}
Brak wątków
{% endif %}

{% endblock %}
", "port119/admgroup.html.twig", "/var/www/port119/templates/port119/admgroup.html.twig");
    }
}
