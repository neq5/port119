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

/* port119/content.html.twig */
class __TwigTemplate_de5aff93cdaa4acc405396021f18e317592ae1607573d46214865532999e1078 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/content.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/content.html.twig", 1);
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
Wątek \"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["groupname"]) || array_key_exists("groupname", $context) ? $context["groupname"] : (function () { throw new RuntimeError('Variable "groupname" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\" | Ilość wpisów: ";
        echo twig_escape_filter($this->env, (isset($context["cnt"]) || array_key_exists("cnt", $context) ? $context["cnt"] : (function () { throw new RuntimeError('Variable "cnt" does not exist.', 5, $this->source); })()), "html", null, true);
        echo " | <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss_new", ["id" => (isset($context["groupid"]) || array_key_exists("groupid", $context) ? $context["groupid"] : (function () { throw new RuntimeError('Variable "groupid" does not exist.', 5, $this->source); })())]), "html", null, true);
        echo "\">Nowy wpis</a>
<br /><br />


";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cid"]) || array_key_exists("cid", $context) ? $context["cid"] : (function () { throw new RuntimeError('Variable "cid" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 10
            echo "<table border=1 width=90%>
<tr><td>Data</td><td>Id wpisu</td><td>Nazwa wątku</td><td>Referencja</td><td>Autor</td><td>Akcja</td><td>Temat</td><td width=40%>Treść</td></tr>
<tr><td>";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "createdat", [], "any", false, false, false, 12), "Y-m-d H-i-s"), "html", null, true);
            echo "<td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 12), "html", null, true);
            echo " </td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["v"], "groups", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "refs", [], "any", false, false, false, 12), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["v"], "accounts", [], "any", false, false, false, 12), "username", [], "any", false, false, false, 12), "html", null, true);
            echo "</td><td>";
            if (((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 12, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["v"], "accounts", [], "any", false, false, false, 12), "username", [], "any", false, false, false, 12))) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 12), "page" => 1]), "html", null, true);
                echo "\">edytuj</a>";
            }
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss_reply", ["cid" => twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 12), "gid" => (isset($context["groupid"]) || array_key_exists("groupid", $context) ? $context["groupid"] : (function () { throw new RuntimeError('Variable "groupid" does not exist.', 12, $this->source); })()), "page" => 1]), "html", null, true);
            echo "\">odpowiedz</a></td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "subject", [], "any", false, false, false, 12), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cnts"]) || array_key_exists("cnts", $context) ? $context["cnts"] : (function () { throw new RuntimeError('Variable "cnts" does not exist.', 12, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 12), [], "array", false, false, false, 12), "html", null, true);
            echo "</td></tr>
</table>
<br /><br /><br />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "

<tr>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 16,  90 => 12,  86 => 10,  82 => 9,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

Wątek \"{{ groupname }}\" | Ilość wpisów: {{ cnt }} | <a href=\"{{ path('discuss_new', {'id': groupid}) }}\">Nowy wpis</a>
<br /><br />


{% for k, v in cid %}
<table border=1 width=90%>
<tr><td>Data</td><td>Id wpisu</td><td>Nazwa wątku</td><td>Referencja</td><td>Autor</td><td>Akcja</td><td>Temat</td><td width=40%>Treść</td></tr>
<tr><td>{{ v.createdat|date('Y-m-d H-i-s') }}<td>{{ v.id }} </td><td>{{ v.groups.name }}</td><td>{{ v.refs }}</td><td>{{ v.accounts.username }}</td><td>{% if username == v.accounts.username %} <a href=\"{{ path('discuss_edit', {'id': v.id, 'page': 1}) }}\">edytuj</a>{% endif %}  <a href=\"{{ path('discuss_reply', {'cid': v.id, 'gid': groupid, 'page': 1}) }}\">odpowiedz</a></td><td>{{ v.subject }}</td><td>{{ cnts[v.id] }}</td></tr>
</table>
<br /><br /><br />
{% endfor %}


<tr>




{% endblock %}
", "port119/content.html.twig", "/var/www/port119/templates/port119/content.html.twig");
    }
}
