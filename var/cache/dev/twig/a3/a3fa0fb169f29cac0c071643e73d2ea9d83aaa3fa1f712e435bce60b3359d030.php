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

/* port119/userspacewall.html.twig */
class __TwigTemplate_d6b773e9751d7c141cbc69741a3852030cb1a71421fe7596d783858354d3ccf2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/userspacewall.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/userspacewall.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/userspacewall.html.twig", 1);
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
        echo twig_escape_filter($this->env, (isset($context["uname"]) || array_key_exists("uname", $context) ? $context["uname"] : (function () { throw new RuntimeError('Variable "uname" does not exist.', 5, $this->source); })()), "html", null, true);
        echo " <img src=\"";
        echo (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 5, $this->source); })());
        echo "\"> Ilość wpisów ";
        echo twig_escape_filter($this->env, (isset($context["cnt"]) || array_key_exists("cnt", $context) ? $context["cnt"] : (function () { throw new RuntimeError('Variable "cnt" does not exist.', 5, $this->source); })()), "html", null, true);
        echo " || Ilość komentarzy ";
        echo twig_escape_filter($this->env, (isset($context["ccntvar"]) || array_key_exists("ccntvar", $context) ? $context["ccntvar"] : (function () { throw new RuntimeError('Variable "ccntvar" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "

";
        // line 7
        if (((isset($context["cnt"]) || array_key_exists("cnt", $context) ? $context["cnt"] : (function () { throw new RuntimeError('Variable "cnt" does not exist.', 7, $this->source); })()) > 0)) {
            // line 8
            echo "<table border=1>
<tr><td>Tytuł</td><td>Data</td><td>Treść</td><td></td></tr>

";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usercontent"]) || array_key_exists("usercontent", $context) ? $context["usercontent"] : (function () { throw new RuntimeError('Variable "usercontent" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 12
                echo "<tr><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tcontent"]) || array_key_exists("tcontent", $context) ? $context["tcontent"] : (function () { throw new RuntimeError('Variable "tcontent" does not exist.', 12, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["v"], "filename", [], "any", false, false, false, 12), [], "array", false, false, false, 12), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "createdat", [], "any", false, false, false, 12), "Y-m-d H-i-s"), "html", null, true);
                echo "</td><td>";
                echo twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 12, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["v"], "filename", [], "any", false, false, false, 12), [], "array", false, false, false, 12);
                echo "</td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspacewall_comment", ["uid" => twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 12)]), "html", null, true);
                echo "\">komentarze (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ccnt"]) || array_key_exists("ccnt", $context) ? $context["ccnt"] : (function () { throw new RuntimeError('Variable "ccnt" does not exist.', 12, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["v"], "filename", [], "any", false, false, false, 12), [], "array", false, false, false, 12), "html", null, true);
                echo ")</a></td></tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "
</table>
";
        }
        // line 17
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/userspacewall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 17,  110 => 14,  93 => 12,  89 => 11,  84 => 8,  82 => 7,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

Tablica użytkownika {{ uname }} <img src=\"{{ avatar|raw}}\"> Ilość wpisów {{ cnt }} || Ilość komentarzy {{ ccntvar }}

{% if cnt > 0 %}
<table border=1>
<tr><td>Tytuł</td><td>Data</td><td>Treść</td><td></td></tr>

{% for k, v in usercontent %}
<tr><td>{{ tcontent[v.filename] }}</td><td>{{ v.createdat|date('Y-m-d H-i-s') }}</td><td>{{ content[v.filename]|raw }}</td><td><a href=\"{{ path('userspacewall_comment', {'uid': v.id }) }}\">komentarze ({{ ccnt[v.filename] }})</a></td></tr>
{% endfor %}

</table>
{% endif %}

{% endblock %}
", "port119/userspacewall.html.twig", "/var/www/port119/templates/port119/userspacewall.html.twig");
    }
}
