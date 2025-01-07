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

/* port119/groups_show.html.twig */
class __TwigTemplate_d792191bada0e883201e785dc4e3323a12b0d6397e6e1f696d5aac88be0c18bc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/groups_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/groups_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/groups_show.html.twig", 1);
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


<br /><br />

Pokaż wątek: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "

<br /><br />

<table border=1>
\t<tr><td>Właściciel</td><td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 14, $this->source); })()), "owner", [], "any", false, false, false, 14), "html", null, true);
        echo "</td></tr>
\t<tr><td>Aktywny</td><td>

\t";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 17, $this->source); })()), "active", [], "any", false, false, false, 17) != false)) {
            // line 18
            echo "\t\taktywny
\t";
        } else {
            // line 20
            echo "\t\tnieaktywny
\t";
        }
        // line 22
        echo "
\t</td></tr>


\t<tr><td>Otwarta</td><td>
\t
\t";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 28, $this->source); })()), "open", [], "any", false, false, false, 28) != false)) {
            // line 29
            echo "\t\totwarty
\t";
        } else {
            // line 31
            echo "\t\tzamknięty
\t";
        }
        // line 33
        echo "
\t</td></tr>

\t<tr><td>Utworzono</td><td>";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 36, $this->source); })()), "createdat", [], "any", false, false, false, 36), "Y-m-d H-i-s"), "html", null, true);
        echo "</td></tr>

\t<tr><td>Opis</td><td>";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new RuntimeError('Variable "about" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</td></tr>

\t<tr><td>Admini</td><td>

\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 43
            echo "\t\t";
            if (($context["key"] == twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43))) {
                // line 44
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key1"] => $context["value1"]) {
                    // line 45
                    echo "\t\t\t\t";
                    echo twig_escape_filter($this->env, $context["key1"], "html", null, true);
                    echo "<br />
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key1'], $context['value1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "\t\t";
            }
            // line 48
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
\t</td></tr>
</table>

<br /><br />

<a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
        echo "\">edytuj</a> <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
        echo "\">usuń</a>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/groups_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 55,  164 => 49,  158 => 48,  155 => 47,  146 => 45,  141 => 44,  138 => 43,  134 => 42,  127 => 38,  122 => 36,  117 => 33,  113 => 31,  109 => 29,  107 => 28,  99 => 22,  95 => 20,  91 => 18,  89 => 17,  83 => 14,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}



<br /><br />

Pokaż wątek: {{ group.name }}

<br /><br />

<table border=1>
\t<tr><td>Właściciel</td><td>{{ group.owner }}</td></tr>
\t<tr><td>Aktywny</td><td>

\t{% if group.active != false %}
\t\taktywny
\t{% else %}
\t\tnieaktywny
\t{% endif %}

\t</td></tr>


\t<tr><td>Otwarta</td><td>
\t
\t{% if group.open != false %}
\t\totwarty
\t{% else %}
\t\tzamknięty
\t{% endif %}

\t</td></tr>

\t<tr><td>Utworzono</td><td>{{ group.createdat|date('Y-m-d H-i-s') }}</td></tr>

\t<tr><td>Opis</td><td>{{ about }}</td></tr>

\t<tr><td>Admini</td><td>

\t{% for key, value in gcdn %}
\t\t{% if key == group.name %}
\t\t\t{% for key1, value1 in value %}
\t\t\t\t{{ key1 }}<br />
\t\t\t{% endfor %}
\t\t{% endif %}
\t{% endfor %}

\t</td></tr>
</table>

<br /><br />

<a href=\"{{ path('group_edit', {'id': group.id})}}\">edytuj</a> <a href=\"{{ path('group_delete', {'id': group.id}) }}\">usuń</a>



{% endblock %}
", "port119/groups_show.html.twig", "/var/www/port119/templates/port119/groups_show.html.twig");
    }
}
