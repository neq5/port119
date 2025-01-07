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

/* port119/groups_user_show.html.twig */
class __TwigTemplate_5664a8d02df10ad842cb5c155c4cc666e85b4f595e9cfbbeb8b773d2fe31138d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/groups_user_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/groups_user_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/groups_user_show.html.twig", 1);
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
        echo "Pokaż wątek: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "
<br /><br />

<table border=1>
\t<tr><td>Właściciel</td><td>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 8, $this->source); })()), "owner", [], "any", false, false, false, 8), "html", null, true);
        echo "</td></tr>
\t<tr><td>Awatar</td><td><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\"></td></tr>
\t<tr><td>Aktywny</td><td>

\t";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 12, $this->source); })()), "active", [], "any", false, false, false, 12) != false)) {
            // line 13
            echo "\t\taktywny
\t";
        } else {
            // line 15
            echo "\t\tnieaktywny
\t";
        }
        // line 17
        echo "
\t</td></tr>


\t<tr><td>Otwarty</td><td>
\t
\t";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 23, $this->source); })()), "open", [], "any", false, false, false, 23) != false)) {
            // line 24
            echo "\t\totwarty
\t";
        } else {
            // line 26
            echo "\t\tzamknięty
\t";
        }
        // line 28
        echo "
\t</td></tr>

\t<tr><td>Utworzono</td><td>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 31, $this->source); })()), "createdat", [], "any", false, false, false, 31), "Y-m-d H-i-s"), "html", null, true);
        echo "</td></tr>

\t<tr><td>Opis</td><td>";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new RuntimeError('Variable "about" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "</td></tr>

\t<tr><td>Admini</td><td>

\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 38
            echo "\t\t";
            if (($context["key"] == twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38))) {
                // line 39
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key1"] => $context["value1"]) {
                    // line 40
                    echo "\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => $context["value1"]]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["key1"], "html", null, true);
                    echo "</a><br />
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key1'], $context['value1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "\t\t";
            }
            // line 43
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
\t</td></tr>
</table>

<br /><br />

<a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
        echo "\">edytuj</a> <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
        echo "\">usuń</a>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/groups_user_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 50,  163 => 44,  157 => 43,  154 => 42,  143 => 40,  138 => 39,  135 => 38,  131 => 37,  124 => 33,  119 => 31,  114 => 28,  110 => 26,  106 => 24,  104 => 23,  96 => 17,  92 => 15,  88 => 13,  86 => 12,  80 => 9,  76 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
Pokaż wątek: {{ group.name }}
<br /><br />

<table border=1>
\t<tr><td>Właściciel</td><td>{{ group.owner }}</td></tr>
\t<tr><td>Awatar</td><td><img src=\"{{ avatar }}\"></td></tr>
\t<tr><td>Aktywny</td><td>

\t{% if group.active != false %}
\t\taktywny
\t{% else %}
\t\tnieaktywny
\t{% endif %}

\t</td></tr>


\t<tr><td>Otwarty</td><td>
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
\t\t\t\t<a href=\"{{ path('userspace', {'uid': value1}) }}\">{{ key1 }}</a><br />
\t\t\t{% endfor %}
\t\t{% endif %}
\t{% endfor %}

\t</td></tr>
</table>

<br /><br />

<a href=\"{{ path('group_user_edit', {'id': group.id})}}\">edytuj</a> <a href=\"{{ path('group_user_delete', {'id': group.id}) }}\">usuń</a>



{% endblock %}
", "port119/groups_user_show.html.twig", "/var/www/port119/templates/port119/groups_user_show.html.twig");
    }
}
