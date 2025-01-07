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

/* port119/useradmin.html.twig */
class __TwigTemplate_552d355b49b77719c50eddfdbe6361e3f7bdf6e13ec99ac40529dcfae2dd98fd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/useradmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/useradmin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/useradmin.html.twig", 1);
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
Twoje wątki<br /><br />

<table border=1>
\t\t<tr><td>Awatar</td><td>Nazwa</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td><td>Akcja</td></tr>


";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 12
            echo "<tr>
<td><img src=\"/groupavatar/";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo ".jpeg\"></td>
<td><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2", ["name" => twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 14), "page" => 1]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</a></td>

<td>

";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 19
                echo "\t";
                if (($context["key"] == twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 19))) {
                    // line 20
                    echo "\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
                    foreach ($context['_seq'] as $context["key1"] => $context["value1"]) {
                        // line 21
                        echo "\t\t\t";
                        echo twig_escape_filter($this->env, $context["key1"], "html", null, true);
                        echo "<br />
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key1'], $context['value1'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
</td>

<td class=\"text-center\">
";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, $context["group"], "active", [], "any", false, false, false, 29) != false)) {
                // line 30
                echo "akywny
";
            } else {
                // line 32
                echo "zamknięty
";
            }
            // line 34
            echo "
</td>

<td class=\"text-center\">

";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, $context["group"], "open", [], "any", false, false, false, 39) != false)) {
                // line 40
                echo "otwarty
";
            } else {
                // line 42
                echo "zamknięty
";
            }
            // line 44
            echo "</td>




<td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new RuntimeError('Variable "abouts" does not exist.', 49, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 49), [], "array", false, false, false, 49), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "createdat", [], "any", false, false, false, 49), "Y-m-d H-i-s"), "html", null, true);
            echo "</td><td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">pokaż</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">edycja</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">usuń</a></td></tr>



";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/useradmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 54,  165 => 49,  158 => 44,  154 => 42,  150 => 40,  148 => 39,  141 => 34,  137 => 32,  133 => 30,  131 => 29,  125 => 25,  118 => 23,  109 => 21,  104 => 20,  101 => 19,  97 => 18,  88 => 14,  84 => 13,  81 => 12,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

Twoje wątki<br /><br />

<table border=1>
\t\t<tr><td>Awatar</td><td>Nazwa</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td><td>Akcja</td></tr>


{% for group in groups %}
<tr>
<td><img src=\"/groupavatar/{{ group.id }}.jpeg\"></td>
<td><a href=\"{{ path('discuss2', {'name': group.name, 'page': 1}) }}\">{{ group.name }}</a></td>

<td>

{% for key, value in gcdn %}
\t{% if key == group.name %}
\t\t{% for key1, value1 in value %}
\t\t\t{{ key1 }}<br />
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




<td>{{ abouts[group.id] }}</td><td>{{ group.createdat|date('Y-m-d H-i-s') }}</td><td><a href=\"{{ path('group_user_show', {'id': group.id}) }}\">pokaż</a> <a href=\"{{ path('group_user_edit', {'id': group.id}) }}\">edycja</a> <a href=\"{{ path('group_user_delete', {'id': group.id}) }}\">usuń</a></td></tr>



{% endfor %}
</table>

{% endblock %}
", "port119/useradmin.html.twig", "/var/www/port119/templates/port119/useradmin.html.twig");
    }
}
