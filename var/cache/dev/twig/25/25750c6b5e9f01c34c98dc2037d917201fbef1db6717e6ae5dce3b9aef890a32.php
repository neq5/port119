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

/* port119/wall.html.twig */
class __TwigTemplate_b424f33318063e074c47064e6d54792065f18031f5aa9606d534118094cfddc5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/wall.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/wall.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/wall.html.twig", 1);
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
Tablica użytkownika ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 5, $this->source); })()), "html", null, true);
        echo " ";
        if (((isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 5, $this->source); })()) != "brak")) {
            echo "<img src=\"";
            echo (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 5, $this->source); })());
            echo "\"> ";
        }
        echo " || Ilość wpisów: ";
        echo twig_escape_filter($this->env, (isset($context["cnt"]) || array_key_exists("cnt", $context) ? $context["cnt"] : (function () { throw new RuntimeError('Variable "cnt" does not exist.', 5, $this->source); })()), "html", null, true);
        echo " || Ilość komentarzy: ";
        echo twig_escape_filter($this->env, (isset($context["ccntvar"]) || array_key_exists("ccntvar", $context) ? $context["ccntvar"] : (function () { throw new RuntimeError('Variable "ccntvar" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "<br /><br />


Nowy wpis.

";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), 'row');
        echo "
";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "content", [], "any", false, false, false, 12), 'row');
        echo "
";
        // line 13
        if ((isset($context["subs"]) || array_key_exists("subs", $context) ? $context["subs"] : (function () { throw new RuntimeError('Variable "subs" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "\tdodaj do wątków <input type=checkbox id=\"foo\">
\t";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "groups", [], "any", false, false, false, 15), 'widget');
            echo "
";
        }
        // line 17
        echo "
<button type=\"submit\" class=\"btn btnoutline-secondary\">Dodaj</button>
";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "

<form name=\"cmd\" method=\"post\" action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wall_mass_delete", ["uid" => (isset($context["uid"]) || array_key_exists("uid", $context) ? $context["uid"] : (function () { throw new RuntimeError('Variable "uid" does not exist.', 21, $this->source); })())]), "html", null, true);
        echo "\">
<input type=\"button\" value=\"zaznacz wszystkie\" onclick=\"checkboxesAll('cmd', true);\"/>
<input type=\"button\" value=\"odznacz wszystkie\" onclick=\"checkboxesAll('cmd',false);\"/>
<button type=\"submit\" class=\"btn btnoutline-secondary\">Usuń</button><br /><br />

";
        // line 26
        if (((isset($context["cnt"]) || array_key_exists("cnt", $context) ? $context["cnt"] : (function () { throw new RuntimeError('Variable "cnt" does not exist.', 26, $this->source); })()) > 0)) {
            // line 27
            echo "<table border=1>
<tr><td>Tytuł</td><td>Data</td><td>Treść</td><td>Akcja</td><td></td></tr>
";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usercontent"]) || array_key_exists("usercontent", $context) ? $context["usercontent"] : (function () { throw new RuntimeError('Variable "usercontent" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 30
                echo "
<tr><td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tcontent"]) || array_key_exists("tcontent", $context) ? $context["tcontent"] : (function () { throw new RuntimeError('Variable "tcontent" does not exist.', 31, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["v"], "filename", [], "any", false, false, false, 31), [], "array", false, false, false, 31), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "createdat", [], "any", false, false, false, 31), "Y-m-d H-i-s"), "html", null, true);
                echo "</td><td>";
                echo twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 31, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["v"], "filename", [], "any", false, false, false, 31), [], "array", false, false, false, 31);
                echo "</td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wall_post_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\">usuń</a> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wall_post_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\">edytuj</a> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wall_comment", ["id" => twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\">komentarze (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ccnt"]) || array_key_exists("ccnt", $context) ? $context["ccnt"] : (function () { throw new RuntimeError('Variable "ccnt" does not exist.', 31, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["v"], "filename", [], "any", false, false, false, 31), [], "array", false, false, false, 31), "html", null, true);
                echo ")</a></td><td><input type=\"checkbox\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 31), "html", null, true);
                echo "\" /></tr>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 35
        echo "
</table>

</form>

<script>
function checkboxesAll(f,b){ 
   var e = document.forms[f].elements;
   for (var i=0;i<e.length;i++) {
      if (e[i].type==\"checkbox\") e[i].checked = b;
   }
}
</script>

<script>
function doAlert() {
    var input = document.querySelector('#foo');

    input.addEventListener('change', function() {
        if (input.checked) {
                document.getElementById('wall_groups').disabled = false;
        } else {
                document.getElementById('wall_groups').disabled = true;
        }
    });
}

doAlert();
</script>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/wall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 35,  141 => 31,  138 => 30,  134 => 29,  130 => 27,  128 => 26,  120 => 21,  115 => 19,  111 => 17,  106 => 15,  103 => 14,  101 => 13,  97 => 12,  93 => 11,  89 => 10,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

Tablica użytkownika {{ username }} {% if avatar != \"brak\" %}<img src=\"{{ avatar|raw }}\"> {% endif %} || Ilość wpisów: {{ cnt }} || Ilość komentarzy: {{ ccntvar }}<br /><br />


Nowy wpis.

{{ form_start(form) }}
{{ form_row(form.title) }}
{{ form_row(form.content) }}
{% if subs %}
\tdodaj do wątków <input type=checkbox id=\"foo\">
\t{{ form_widget(form.groups) }}
{% endif %}

<button type=\"submit\" class=\"btn btnoutline-secondary\">Dodaj</button>
{{ form_end(form, {'render_rest': false}) }}

<form name=\"cmd\" method=\"post\" action=\"{{ path('wall_mass_delete', {'uid': uid}) }}\">
<input type=\"button\" value=\"zaznacz wszystkie\" onclick=\"checkboxesAll('cmd', true);\"/>
<input type=\"button\" value=\"odznacz wszystkie\" onclick=\"checkboxesAll('cmd',false);\"/>
<button type=\"submit\" class=\"btn btnoutline-secondary\">Usuń</button><br /><br />

{% if cnt > 0 %}
<table border=1>
<tr><td>Tytuł</td><td>Data</td><td>Treść</td><td>Akcja</td><td></td></tr>
{% for k, v in usercontent %}

<tr><td>{{ tcontent[v.filename] }}</td><td>{{ v.createdat|date('Y-m-d H-i-s') }}</td><td>{{ content[v.filename]|raw }}</td><td><a href=\"{{ path('wall_post_delete', {'id': v.id}) }}\">usuń</a> <a href=\"{{ path('wall_post_edit', {'id': v.id}) }}\">edytuj</a> <a href=\"{{ path('wall_comment', {'id': v.id}) }}\">komentarze ({{ ccnt[v.filename] }})</a></td><td><input type=\"checkbox\" name=\"{{ v.id }}\" /></tr>

{% endfor %}
{% endif %}

</table>

</form>

<script>
function checkboxesAll(f,b){ 
   var e = document.forms[f].elements;
   for (var i=0;i<e.length;i++) {
      if (e[i].type==\"checkbox\") e[i].checked = b;
   }
}
</script>

<script>
function doAlert() {
    var input = document.querySelector('#foo');

    input.addEventListener('change', function() {
        if (input.checked) {
                document.getElementById('wall_groups').disabled = false;
        } else {
                document.getElementById('wall_groups').disabled = true;
        }
    });
}

doAlert();
</script>



{% endblock %}
", "port119/wall.html.twig", "/var/www/port119/templates/port119/wall.html.twig");
    }
}
