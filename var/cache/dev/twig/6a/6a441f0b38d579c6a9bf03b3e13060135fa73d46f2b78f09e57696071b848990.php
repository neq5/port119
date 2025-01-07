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

/* port119/wall_comment.html.twig */
class __TwigTemplate_18f453a316e543fb87bf6f0e6f82b692231de4cd39170c6f4e3420ca18bc005a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/wall_comment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/wall_comment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/wall_comment.html.twig", 1);
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
komentarze: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["ucnt"]) || array_key_exists("ucnt", $context) ? $context["ucnt"] : (function () { throw new RuntimeError('Variable "ucnt" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "

";
        // line 7
        if (((isset($context["ucnt"]) || array_key_exists("ucnt", $context) ? $context["ucnt"] : (function () { throw new RuntimeError('Variable "ucnt" does not exist.', 7, $this->source); })()) > 0)) {
            // line 8
            echo "
<table border=1>
<tr><td>Data</td><td>Autor</td><td>Treść komentarza</td><td>Akcja</td></tr>

";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 13
                echo "

<tr><td>";
                // line 15
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "createdat", [], "any", false, false, false, 15), "Y-m-d H-i-s"), "html", null, true);
                echo "</td><td><img src=\"/avatar/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["v"], "uid", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15), "html", null, true);
                echo ".jpeg\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "uid", [], "any", false, false, false, 15), "html", null, true);
                echo "</td><td>";
                echo twig_get_attribute($this->env, $this->source, (isset($context["cnt"]) || array_key_exists("cnt", $context) ? $context["cnt"] : (function () { throw new RuntimeError('Variable "cnt" does not exist.', 15, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["v"], "filename", [], "any", false, false, false, 15), [], "array", false, false, false, 15);
                echo "</td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wall_comment_delete", ["cid" => twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 15), "wid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["v"], "wid", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15)]), "html", null, true);
                echo "\">usuń</a> ";
                if (twig_get_attribute($this->env, $this->source, ($context["editmark"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["v"], "uid", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15), [], "array", true, true, false, 15)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wall_comment_edit", ["cid" => twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 15), "wid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["v"], "wid", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15)]), "html", null, true);
                    echo "\">edytuj</a>";
                }
                echo "</td></tr>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "
</table>

";
        }
        // line 22
        echo "

Dodaj komentarz

";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cform"]) || array_key_exists("cform", $context) ? $context["cform"] : (function () { throw new RuntimeError('Variable "cform" does not exist.', 26, $this->source); })()), 'form_start');
        echo "
";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["cform"]) || array_key_exists("cform", $context) ? $context["cform"] : (function () { throw new RuntimeError('Variable "cform" does not exist.', 27, $this->source); })()), 'widget');
        echo "
<button type=\"submit\" class=\"btn btnoutline-secondary\">Dodaj</button>
";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cform"]) || array_key_exists("cform", $context) ? $context["cform"] : (function () { throw new RuntimeError('Variable "cform" does not exist.', 29, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/wall_comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 29,  131 => 27,  127 => 26,  121 => 22,  115 => 18,  92 => 15,  88 => 13,  84 => 12,  78 => 8,  76 => 7,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

komentarze: {{ ucnt }}

{% if ucnt > 0 %}

<table border=1>
<tr><td>Data</td><td>Autor</td><td>Treść komentarza</td><td>Akcja</td></tr>

{% for k, v in content %}


<tr><td>{{ v.createdat|date('Y-m-d H-i-s') }}</td><td><img src=\"/avatar/{{ v.uid.id }}.jpeg\"> {{ v.uid }}</td><td>{{ cnt[v.filename]|raw }}</td><td><a href=\"{{ path('wall_comment_delete', {'cid': v.id, 'wid': v.wid.id}) }}\">usuń</a> {% if editmark[v.uid.id] is defined %}<a href=\"{{ path('wall_comment_edit', {'cid': v.id, 'wid': v.wid.id}) }}\">edytuj</a>{% endif %}</td></tr>

{% endfor %}

</table>

{% endif %}


Dodaj komentarz

{{ form_start(cform) }}
{{ form_widget(cform) }}
<button type=\"submit\" class=\"btn btnoutline-secondary\">Dodaj</button>
{{ form_end(cform) }}

{% endblock %}
", "port119/wall_comment.html.twig", "/var/www/port119/templates/port119/wall_comment.html.twig");
    }
}
