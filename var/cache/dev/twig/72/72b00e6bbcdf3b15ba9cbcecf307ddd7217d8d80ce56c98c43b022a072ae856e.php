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

/* port119/friends.html.twig */
class __TwigTemplate_9cb41525638c91497a90e4e69b163000ba83f1c9fb101c41a96e9c7c971003b0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/friends.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/friends.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/friends.html.twig", 1);
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
Friends

";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'widget');
        echo "
<button type=\"submit\" class=\"btn btnoutline-secondary\">Dodaj</button>
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_end');
        echo "


Lista znajomych:
<br />

<table border=1>
<tr><td>User</td><td>Imię</td><td>Nazwisko</td><td>Akcja</td></tr>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["frepo"]) || array_key_exists("frepo", $context) ? $context["frepo"] : (function () { throw new RuntimeError('Variable "frepo" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 19
            echo "<tr>
\t<td>";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, (isset($context["av"]) || array_key_exists("av", $context) ? $context["av"] : (function () { throw new RuntimeError('Variable "av" does not exist.', 20, $this->source); })()), $context["k"], [], "array", false, false, false, 20) != "BRAK")) {
                echo " <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["av"]) || array_key_exists("av", $context) ? $context["av"] : (function () { throw new RuntimeError('Variable "av" does not exist.', 20, $this->source); })()), $context["k"], [], "array", false, false, false, 20), "html", null, true);
                echo "\">";
            }
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepo"]) || array_key_exists("frepo", $context) ? $context["frepo"] : (function () { throw new RuntimeError('Variable "frepo" does not exist.', 20, $this->source); })()), $context["k"], [], "array", false, false, false, 20), "user", [], "any", false, false, false, 20), "username", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepo"]) || array_key_exists("frepo", $context) ? $context["frepo"] : (function () { throw new RuntimeError('Variable "frepo" does not exist.', 21, $this->source); })()), $context["k"], [], "array", false, false, false, 21), "user", [], "any", false, false, false, 21), "firstname", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepo"]) || array_key_exists("frepo", $context) ? $context["frepo"] : (function () { throw new RuntimeError('Variable "frepo" does not exist.', 22, $this->source); })()), $context["k"], [], "array", false, false, false, 22), "user", [], "any", false, false, false, 22), "lastname", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("removefriend", ["uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepo"]) || array_key_exists("frepo", $context) ? $context["frepo"] : (function () { throw new RuntimeError('Variable "frepo" does not exist.', 23, $this->source); })()), $context["k"], [], "array", false, false, false, 23), "user", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), "pid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepo"]) || array_key_exists("frepo", $context) ? $context["frepo"] : (function () { throw new RuntimeError('Variable "frepo" does not exist.', 23, $this->source); })()), $context["k"], [], "array", false, false, false, 23), "party", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">Usuń</a></td>
</tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</table>


<br />
<br />
<br />
Zostałeś zaproszony przez:
<br />


<br />

<table border=1>
<tr><td>User</td><td>Imię</td><td>Nazwisko</td><td>Akcja</td></tr>
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["frepotoconfirm"]) || array_key_exists("frepotoconfirm", $context) ? $context["frepotoconfirm"] : (function () { throw new RuntimeError('Variable "frepotoconfirm" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 42
            echo "<tr>
\t<td>";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, (isset($context["cav"]) || array_key_exists("cav", $context) ? $context["cav"] : (function () { throw new RuntimeError('Variable "cav" does not exist.', 43, $this->source); })()), $context["k"], [], "array", false, false, false, 43) != "BRAK")) {
                echo " <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cav"]) || array_key_exists("cav", $context) ? $context["cav"] : (function () { throw new RuntimeError('Variable "cav" does not exist.', 43, $this->source); })()), $context["k"], [], "array", false, false, false, 43), "html", null, true);
                echo "\">";
            }
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepotoconfirm"]) || array_key_exists("frepotoconfirm", $context) ? $context["frepotoconfirm"] : (function () { throw new RuntimeError('Variable "frepotoconfirm" does not exist.', 43, $this->source); })()), $context["k"], [], "array", false, false, false, 43), "user", [], "any", false, false, false, 43), "username", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
\t<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepotoconfirm"]) || array_key_exists("frepotoconfirm", $context) ? $context["frepotoconfirm"] : (function () { throw new RuntimeError('Variable "frepotoconfirm" does not exist.', 44, $this->source); })()), $context["k"], [], "array", false, false, false, 44), "user", [], "any", false, false, false, 44), "firstname", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
\t<td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepotoconfirm"]) || array_key_exists("frepotoconfirm", $context) ? $context["frepotoconfirm"] : (function () { throw new RuntimeError('Variable "frepotoconfirm" does not exist.', 45, $this->source); })()), $context["k"], [], "array", false, false, false, 45), "user", [], "any", false, false, false, 45), "lastname", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confirm", ["fid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepotoconfirm"]) || array_key_exists("frepotoconfirm", $context) ? $context["frepotoconfirm"] : (function () { throw new RuntimeError('Variable "frepotoconfirm" does not exist.', 46, $this->source); })()), $context["k"], [], "array", false, false, false, 46), "id", [], "any", false, false, false, 46), "uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepotoconfirm"]) || array_key_exists("frepotoconfirm", $context) ? $context["frepotoconfirm"] : (function () { throw new RuntimeError('Variable "frepotoconfirm" does not exist.', 46, $this->source); })()), $context["k"], [], "array", false, false, false, 46), "user", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "pid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepotoconfirm"]) || array_key_exists("frepotoconfirm", $context) ? $context["frepotoconfirm"] : (function () { throw new RuntimeError('Variable "frepotoconfirm" does not exist.', 46, $this->source); })()), $context["k"], [], "array", false, false, false, 46), "party", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">potwierdź</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cancel", ["fid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepotoconfirm"]) || array_key_exists("frepotoconfirm", $context) ? $context["frepotoconfirm"] : (function () { throw new RuntimeError('Variable "frepotoconfirm" does not exist.', 46, $this->source); })()), $context["k"], [], "array", false, false, false, 46), "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">anuluj</a> </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
</table>

----
<br />

Wysłałeś zaproszenie do:
<br />

<table border=1>
<tr><td>User</td><td>Imię</td><td>Nazwisko</td><td>Akcja</td></tr>

";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["freporequested"]) || array_key_exists("freporequested", $context) ? $context["freporequested"] : (function () { throw new RuntimeError('Variable "freporequested" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 62
            echo "<tr>
\t<td>";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, (isset($context["rav"]) || array_key_exists("rav", $context) ? $context["rav"] : (function () { throw new RuntimeError('Variable "rav" does not exist.', 63, $this->source); })()), $context["k"], [], "array", false, false, false, 63) != "BRAK")) {
                echo " <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rav"]) || array_key_exists("rav", $context) ? $context["rav"] : (function () { throw new RuntimeError('Variable "rav" does not exist.', 63, $this->source); })()), $context["k"], [], "array", false, false, false, 63), "html", null, true);
                echo "\">";
            }
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["freporequested"]) || array_key_exists("freporequested", $context) ? $context["freporequested"] : (function () { throw new RuntimeError('Variable "freporequested" does not exist.', 63, $this->source); })()), $context["k"], [], "array", false, false, false, 63), "party", [], "any", false, false, false, 63), "username", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
\t<td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["freporequested"]) || array_key_exists("freporequested", $context) ? $context["freporequested"] : (function () { throw new RuntimeError('Variable "freporequested" does not exist.', 64, $this->source); })()), $context["k"], [], "array", false, false, false, 64), "party", [], "any", false, false, false, 64), "firstname", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
\t<td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["freporequested"]) || array_key_exists("freporequested", $context) ? $context["freporequested"] : (function () { throw new RuntimeError('Variable "freporequested" does not exist.', 65, $this->source); })()), $context["k"], [], "array", false, false, false, 65), "party", [], "any", false, false, false, 65), "lastname", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cancel", ["fid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["freporequested"]) || array_key_exists("freporequested", $context) ? $context["freporequested"] : (function () { throw new RuntimeError('Variable "freporequested" does not exist.', 66, $this->source); })()), $context["k"], [], "array", false, false, false, 66), "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">anuluj</a> </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/friends.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 69,  216 => 66,  212 => 65,  208 => 64,  199 => 63,  196 => 62,  192 => 61,  178 => 49,  167 => 46,  163 => 45,  159 => 44,  150 => 43,  147 => 42,  143 => 41,  127 => 27,  117 => 23,  113 => 22,  109 => 21,  100 => 20,  97 => 19,  93 => 18,  82 => 10,  77 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

Friends

{{ form_start(form) }}
{{ form_widget(form) }}
<button type=\"submit\" class=\"btn btnoutline-secondary\">Dodaj</button>
{{ form_end(form) }}


Lista znajomych:
<br />

<table border=1>
<tr><td>User</td><td>Imię</td><td>Nazwisko</td><td>Akcja</td></tr>
{% for k, v in frepo %}
<tr>
\t<td>{% if av[k] != \"BRAK\" %} <img src=\"{{ av[k] }}\">{% endif %}{{ frepo[k].user.username }}</td>
\t<td>{{ frepo[k].user.firstname }}</td>
\t<td>{{ frepo[k].user.lastname }}</td>
\t<td><a href=\"{{ path('removefriend', {'uid': frepo[k].user.id, 'pid': frepo[k].party.id}) }}\">Usuń</a></td>
</tr>

{% endfor %}
</table>


<br />
<br />
<br />
Zostałeś zaproszony przez:
<br />


<br />

<table border=1>
<tr><td>User</td><td>Imię</td><td>Nazwisko</td><td>Akcja</td></tr>
{% for k, v in frepotoconfirm %}
<tr>
\t<td>{% if cav[k] != \"BRAK\" %} <img src=\"{{ cav[k] }}\">{% endif %}{{ frepotoconfirm[k].user.username }}</td>
\t<td>{{ frepotoconfirm[k].user.firstname }}</td>
\t<td>{{ frepotoconfirm[k].user.lastname }}</td>
\t<td><a href=\"{{ path('confirm', {'fid': frepotoconfirm[k].id, 'uid': frepotoconfirm[k].user.id, 'pid': frepotoconfirm[k].party.id}) }}\">potwierdź</a> <a href=\"{{ path('cancel', {'fid': frepotoconfirm[k].id}) }}\">anuluj</a> </td>
</tr>
{% endfor %}

</table>

----
<br />

Wysłałeś zaproszenie do:
<br />

<table border=1>
<tr><td>User</td><td>Imię</td><td>Nazwisko</td><td>Akcja</td></tr>

{% for k, v in freporequested %}
<tr>
\t<td>{% if rav[k] != \"BRAK\" %} <img src=\"{{ rav[k] }}\">{% endif %}{{ freporequested[k].party.username }}</td>
\t<td>{{ freporequested[k].party.firstname }}</td>
\t<td>{{ freporequested[k].party.lastname }}</td>
\t<td><a href=\"{{ path('cancel', {'fid': freporequested[k].id}) }}\">anuluj</a> </td>
</tr>
{% endfor %}

</table>

{% endblock %}
", "port119/friends.html.twig", "/var/www/port119/templates/port119/friends.html.twig");
    }
}
