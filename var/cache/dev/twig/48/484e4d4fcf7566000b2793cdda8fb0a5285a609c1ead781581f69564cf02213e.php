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

/* port119/groups_mng.html.twig */
class __TwigTemplate_259049e835ce708a63a7e009f3429f28ac1f4442abb85e29bc5e4752d9524e1f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/groups_mng.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/groups_mng.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/groups_mng.html.twig", 1);
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
Dodaj wątek

";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["groupform"]) || array_key_exists("groupform", $context) ? $context["groupform"] : (function () { throw new RuntimeError('Variable "groupform" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["groupform"]) || array_key_exists("groupform", $context) ? $context["groupform"] : (function () { throw new RuntimeError('Variable "groupform" does not exist.', 8, $this->source); })()), 'widget');
        echo "
<button type=\"submit\" class=\"btn btnoutline-secondary\">Dodaj wątek</button>
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["groupform"]) || array_key_exists("groupform", $context) ? $context["groupform"] : (function () { throw new RuntimeError('Variable "groupform" does not exist.', 10, $this->source); })()), 'form_end');
        echo "

<br /><br />

Lista wątków (";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["groupscnt"]) || array_key_exists("groupscnt", $context) ? $context["groupscnt"] : (function () { throw new RuntimeError('Variable "groupscnt" does not exist.', 14, $this->source); })()), "html", null, true);
        echo ")

<br /><br />

<table border=1>
\t<tr>
\t\t<td>Właściciel</td><td>Nazwa</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td><td>Akcja</td></tr>

";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 23
            echo "
<tr><td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "owner", [], "any", false, false, false, 24), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>

<td>

";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 29
                echo "\t";
                if (($context["key"] == twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 29))) {
                    // line 30
                    echo "\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
                    foreach ($context['_seq'] as $context["key1"] => $context["value1"]) {
                        // line 31
                        echo "\t\t\t";
                        echo twig_escape_filter($this->env, $context["key1"], "html", null, true);
                        echo "<br />
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key1'], $context['value1'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "
</td>

<td class=\"text-center\">

";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, $context["group"], "active", [], "any", false, false, false, 40) != false)) {
                // line 41
                echo "\taktywny
";
            } else {
                // line 43
                echo "\tnieaktywny
";
            }
            // line 45
            echo "
</td>


<td class=\"text-center\">

";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, $context["group"], "open", [], "any", false, false, false, 51) != false)) {
                // line 52
                echo "\totwarty
";
            } else {
                // line 54
                echo "\tzamknięty
";
            }
            // line 56
            echo "
</td><td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new RuntimeError('Variable "abouts" does not exist.', 57, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 57), [], "array", false, false, false, 57), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "createdat", [], "any", false, false, false, 57), "Y-m-d H-i-s"), "html", null, true);
            echo "</td><td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_show", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\">pokaż</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\">edycja</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\">usuń</a></td></tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
</table>

<br /><br />


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/groups_mng.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 60,  182 => 57,  179 => 56,  175 => 54,  171 => 52,  169 => 51,  161 => 45,  157 => 43,  153 => 41,  151 => 40,  144 => 35,  137 => 33,  128 => 31,  123 => 30,  120 => 29,  116 => 28,  107 => 24,  104 => 23,  100 => 22,  89 => 14,  82 => 10,  77 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

Dodaj wątek

{{ form_start(groupform) }}
{{ form_widget(groupform) }}
<button type=\"submit\" class=\"btn btnoutline-secondary\">Dodaj wątek</button>
{{ form_end(groupform) }}

<br /><br />

Lista wątków ({{ groupscnt }})

<br /><br />

<table border=1>
\t<tr>
\t\t<td>Właściciel</td><td>Nazwa</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td><td>Akcja</td></tr>

{% for group in groups %}

<tr><td>{{ group.owner }}</td><td>{{ group.name }}</td>

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
\taktywny
{% else %}
\tnieaktywny
{% endif %}

</td>


<td class=\"text-center\">

{% if group.open != false %}
\totwarty
{% else %}
\tzamknięty
{% endif %}

</td><td>{{ abouts[group.id] }}</td><td>{{ group.createdat|date('Y-m-d H-i-s') }}</td><td><a href=\"{{ path('group_show', {'id': group.id}) }}\">pokaż</a> <a href=\"{{ path('group_edit', {'id': group.id}) }}\">edycja</a> <a href=\"{{ path('group_delete', {'id': group.id}) }}\">usuń</a></td></tr>

{% endfor %}

</table>

<br /><br />


{% endblock %}
", "port119/groups_mng.html.twig", "/var/www/port119/templates/port119/groups_mng.html.twig");
    }
}
