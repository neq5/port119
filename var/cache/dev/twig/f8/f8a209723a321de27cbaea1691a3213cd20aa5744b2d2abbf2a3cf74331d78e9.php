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

/* port119/fromuserspacegallerycomment.html.twig */
class __TwigTemplate_26bc4ad4ad4800ff6cebd44bee8e2aaa9750313ba1085ec973d595c5e5ef8a36 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/fromuserspacegallerycomment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/fromuserspacegallerycomment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/fromuserspacegallerycomment.html.twig", 1);
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
<table border=1>
<tr><td>Data</td><td>Autor</td><td>Treść komentarza</td><td>Akcja</td></tr>

";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 9
            echo "
<tr><td>";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "createdat", [], "any", false, false, false, 10), "Y-m-d H-i-s"), "html", null, true);
            echo "</td><td><img src=\"/avatar/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["v"], "uid", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10), "html", null, true);
            echo ".jpeg\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "uid", [], "any", false, false, false, 10), "html", null, true);
            echo "</td><td>";
            echo twig_get_attribute($this->env, $this->source, (isset($context["gcnt"]) || array_key_exists("gcnt", $context) ? $context["gcnt"] : (function () { throw new RuntimeError('Variable "gcnt" does not exist.', 10, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["v"], "filename", [], "any", false, false, false, 10), [], "array", false, false, false, 10);
            echo "</td><td>";
            if (twig_get_attribute($this->env, $this->source, ($context["editmark"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["v"], "uid", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10), [], "array", true, true, false, 10)) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fromuserspacegallerycomment_edit", ["gcid" => twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 10), "imgid" => (isset($context["imgid"]) || array_key_exists("imgid", $context) ? $context["imgid"] : (function () { throw new RuntimeError('Variable "imgid" does not exist.', 10, $this->source); })())]), "html", null, true);
                echo "\">edytuj</a> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fromuserspacegallerycomment_delete", ["imgid" => (isset($context["imgid"]) || array_key_exists("imgid", $context) ? $context["imgid"] : (function () { throw new RuntimeError('Variable "imgid" does not exist.', 10, $this->source); })()), "fname" => twig_get_attribute($this->env, $this->source, $context["v"], "filename", [], "any", false, false, false, 10)]), "html", null, true);
                echo "\">usuń</a>";
            }
            echo "</a></td></tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
</table>

<br />
<br />
<br />
<br />

Dodaj komentarz

";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["gcform"]) || array_key_exists("gcform", $context) ? $context["gcform"] : (function () { throw new RuntimeError('Variable "gcform" does not exist.', 23, $this->source); })()), 'form_start');
        echo "
";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["gcform"]) || array_key_exists("gcform", $context) ? $context["gcform"] : (function () { throw new RuntimeError('Variable "gcform" does not exist.', 24, $this->source); })()), 'widget');
        echo "
<button type=\"submit\" class=\"btn btnoutline-secondary\">Dodaj</button>
";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["gcform"]) || array_key_exists("gcform", $context) ? $context["gcform"] : (function () { throw new RuntimeError('Variable "gcform" does not exist.', 26, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/fromuserspacegallerycomment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 26,  120 => 24,  116 => 23,  104 => 13,  81 => 10,  78 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<table border=1>
<tr><td>Data</td><td>Autor</td><td>Treść komentarza</td><td>Akcja</td></tr>

{% for k, v in content %}

<tr><td>{{ v.createdat|date('Y-m-d H-i-s') }}</td><td><img src=\"/avatar/{{ v.uid.id}}.jpeg\"> {{ v.uid }}</td><td>{{ gcnt[v.filename]|raw }}</td><td>{% if editmark[v.uid.id] is defined %} <a href=\"{{ path('fromuserspacegallerycomment_edit', {'gcid': v.id, 'imgid': imgid}) }}\">edytuj</a> <a href=\"{{ path('fromuserspacegallerycomment_delete', {'imgid': imgid,'fname': v.filename}) }}\">usuń</a>{% endif %}</a></td></tr>

{% endfor %}

</table>

<br />
<br />
<br />
<br />

Dodaj komentarz

{{ form_start(gcform) }}
{{ form_widget(gcform) }}
<button type=\"submit\" class=\"btn btnoutline-secondary\">Dodaj</button>
{{ form_end(gcform) }}

{% endblock %}
", "port119/fromuserspacegallerycomment.html.twig", "/var/www/port119/templates/port119/fromuserspacegallerycomment.html.twig");
    }
}
