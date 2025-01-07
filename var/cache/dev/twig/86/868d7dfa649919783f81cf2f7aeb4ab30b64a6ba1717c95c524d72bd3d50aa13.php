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

/* port119/content3.html.twig */
class __TwigTemplate_fe67a36522bccca6598b85619c317c77523220eea90ef99aca7ae3b6d6058ed6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/content3.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/content3.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/content3.html.twig", 1);
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
<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["avataruri"]) || array_key_exists("avataruri", $context) ? $context["avataruri"] : (function () { throw new RuntimeError('Variable "avataruri" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\"> || Wątek \"";
        echo twig_escape_filter($this->env, (isset($context["groupname"]) || array_key_exists("groupname", $context) ? $context["groupname"] : (function () { throw new RuntimeError('Variable "groupname" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\" | ";
        if (((isset($context["editmarkgroup"]) || array_key_exists("editmarkgroup", $context) ? $context["editmarkgroup"] : (function () { throw new RuntimeError('Variable "editmarkgroup" does not exist.', 5, $this->source); })()) == 1)) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_edit", ["id" => (isset($context["groupid"]) || array_key_exists("groupid", $context) ? $context["groupid"] : (function () { throw new RuntimeError('Variable "groupid" does not exist.', 5, $this->source); })())]), "html", null, true);
            echo "\">Edytuj</a>";
        }
        echo " | Ilość wpisów: ";
        echo twig_escape_filter($this->env, (isset($context["cnt"]) || array_key_exists("cnt", $context) ? $context["cnt"] : (function () { throw new RuntimeError('Variable "cnt" does not exist.', 5, $this->source); })()), "html", null, true);
        echo " | <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2_new", ["id" => (isset($context["groupid"]) || array_key_exists("groupid", $context) ? $context["groupid"] : (function () { throw new RuntimeError('Variable "groupid" does not exist.', 5, $this->source); })()), "page" => 1]), "html", null, true);
        echo "\">Nowy wpis</a>
<br /><br />

Administratorzy<br>

";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 11
            echo "\t";
            if (($context["key"] == (isset($context["groupname"]) || array_key_exists("groupname", $context) ? $context["groupname"] : (function () { throw new RuntimeError('Variable "groupname" does not exist.', 11, $this->source); })()))) {
                // line 12
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key1"] => $context["value1"]) {
                    // line 13
                    echo "\t\t\t <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => $context["value1"]]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["key1"], "html", null, true);
                    echo "</a><br />
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key1'], $context['value1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
<br />
<br />
Opis:

";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new RuntimeError('Variable "abouts" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 23
            echo "\t";
            if (($context["key"] == (isset($context["groupid"]) || array_key_exists("groupid", $context) ? $context["groupid"] : (function () { throw new RuntimeError('Variable "groupid" does not exist.', 23, $this->source); })()))) {
                echo " ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo " ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "

<br /><br />

\t<table border=1>
\t<tr><td>Data</td><td>Awatar</td><td>Autor</td><td>Tytuł</td><td>Akcja</td><td>Treść</td></tr>
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["uids_iterations"]) || array_key_exists("uids_iterations", $context) ? $context["uids_iterations"] : (function () { throw new RuntimeError('Variable "uids_iterations" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 32
            echo "\t<tr><td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 32, $this->source); })()), $context["k"], [], "array", false, false, false, 32), "Y-m-d H-i-s"), "html", null, true);
            echo "</td><td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => $context["v"]]), "html", null, true);
            echo "\"><img src=/avatar/";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo ".jpeg></a></td><td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => $context["v"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 32, $this->source); })()), $context["k"], [], "array", false, false, false, 32), "html", null, true);
            echo "</a></td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new RuntimeError('Variable "titles" does not exist.', 32, $this->source); })()), $context["k"], [], "array", false, false, false, 32), "html", null, true);
            echo "</td><td>";
            echo twig_get_attribute($this->env, $this->source, (isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 32, $this->source); })()), $context["k"], [], "array", false, false, false, 32);
            echo "</td><td>";
            if (twig_get_attribute($this->env, $this->source, ($context["imgz"] ?? null), $context["k"], [], "array", true, true, false, 32)) {
                echo "<img src=\"/content/img/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["imgz"]) || array_key_exists("imgz", $context) ? $context["imgz"] : (function () { throw new RuntimeError('Variable "imgz" does not exist.', 32, $this->source); })()), $context["k"], [], "array", false, false, false, 32), "html", null, true);
                echo "\">";
            }
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cnnt"]) || array_key_exists("cnnt", $context) ? $context["cnnt"] : (function () { throw new RuntimeError('Variable "cnnt" does not exist.', 32, $this->source); })()), $context["k"], [], "array", false, false, false, 32), "html", null, true);
            echo "</td></tr>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
\t</table>

<br />
";
        // line 40
        echo (isset($context["navi"]) || array_key_exists("navi", $context) ? $context["navi"] : (function () { throw new RuntimeError('Variable "navi" does not exist.', 40, $this->source); })());
        echo "

<br />

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/content3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 40,  186 => 36,  155 => 32,  151 => 31,  143 => 25,  132 => 23,  128 => 22,  121 => 17,  114 => 15,  103 => 13,  98 => 12,  95 => 11,  91 => 10,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<img src=\"{{ avataruri }}\"> || Wątek \"{{ groupname }}\" | {% if editmarkgroup == 1 %}<a href=\"{{ path('group_user_edit', {'id': groupid}) }}\">Edytuj</a>{% endif %} | Ilość wpisów: {{ cnt }} | <a href=\"{{ path('discuss2_new', {'id': groupid, 'page': 1}) }}\">Nowy wpis</a>
<br /><br />

Administratorzy<br>

{% for key, value in gcdn %}
\t{% if key == groupname %}
\t\t{% for key1, value1 in value %}
\t\t\t <a href=\"{{ path('userspace', {'uid': value1 }) }}\">{{ key1 }}</a><br />
\t\t{% endfor %}
\t{% endif %}
{% endfor %}

<br />
<br />
Opis:

{% for key, value in abouts %}
\t{% if key == groupid %} {{ value }} {% endif %}
{% endfor %}


<br /><br />

\t<table border=1>
\t<tr><td>Data</td><td>Awatar</td><td>Autor</td><td>Tytuł</td><td>Akcja</td><td>Treść</td></tr>
{% for k, v in uids_iterations %}
\t<tr><td>{{ dates[k]|date('Y-m-d H-i-s') }}</td><td><a href=\"{{ path('userspace', {'uid': v}) }}\"><img src=/avatar/{{ v }}.jpeg></a></td><td><a href=\"{{ path('userspace', {'uid': v }) }}\">{{ authors[k] }}</a></td><td>{{ titles[k] }}</td><td>{{ menus[k]|raw }}</td><td>{% if imgz[k] is defined %}<img src=\"/content/img/{{ imgz[k] }}\">{% endif %} {{ cnnt[k] }}</td></tr>


{% endfor %}

\t</table>

<br />
{{ navi|raw }}

<br />

{% endblock %}
", "port119/content3.html.twig", "/var/www/port119/templates/port119/content3.html.twig");
    }
}
