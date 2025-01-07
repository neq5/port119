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

/* port119/userspace_wall_comment.html.twig */
class __TwigTemplate_2742622902666e3ef2cf505d33c83c9e150a10c7aed63be1908edd099bafcb0b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/userspace_wall_comment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/userspace_wall_comment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/userspace_wall_comment.html.twig", 1);
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
";
        // line 5
        if (((isset($context["ucnt"]) || array_key_exists("ucnt", $context) ? $context["ucnt"] : (function () { throw new RuntimeError('Variable "ucnt" does not exist.', 5, $this->source); })()) > 0)) {
            // line 6
            echo "

<table border=1>
<tr><td>Data</td><td>Autor</td><td>Treś komentarza</td><td>Akcja</td></tr>

";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 12
                echo "
<tr><td>";
                // line 13
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "createdat", [], "any", false, false, false, 13), "Y-m-d H-i-s"), "html", null, true);
                echo "</td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["v"], "uid", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13)]), "html", null, true);
                echo "\"><img src=\"/avatar/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["v"], "uid", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13), "html", null, true);
                echo ".jpeg\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "uid", [], "any", false, false, false, 13), "html", null, true);
                echo "</a></td><td>";
                echo twig_get_attribute($this->env, $this->source, (isset($context["cnt"]) || array_key_exists("cnt", $context) ? $context["cnt"] : (function () { throw new RuntimeError('Variable "cnt" does not exist.', 13, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["v"], "filename", [], "any", false, false, false, 13), [], "array", false, false, false, 13);
                echo "</td>";
                if (((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 13, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["v"], "uid", [], "any", false, false, false, 13))) {
                    echo " <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspacecomment_edit", ["cid" => twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 13), "wid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["v"], "wid", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13)]), "html", null, true);
                    echo "\">edytuj</a> <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspacecomment_delete", ["cid" => twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 13), "wid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["v"], "wid", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13)]), "html", null, true);
                    echo "\">usuń</a> </td>";
                }
                echo "</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "
</table>

";
        }
        // line 19
        echo "
Dodaj komentarz

";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cform"]) || array_key_exists("cform", $context) ? $context["cform"] : (function () { throw new RuntimeError('Variable "cform" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["cform"]) || array_key_exists("cform", $context) ? $context["cform"] : (function () { throw new RuntimeError('Variable "cform" does not exist.', 23, $this->source); })()), 'widget');
        echo "
<button type=\"submit\" class=\"btn btnoutline-secondary\">Dodaj</button>
";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cform"]) || array_key_exists("cform", $context) ? $context["cform"] : (function () { throw new RuntimeError('Variable "cform" does not exist.', 25, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/userspace_wall_comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 25,  126 => 23,  122 => 22,  117 => 19,  111 => 15,  87 => 13,  84 => 12,  80 => 11,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

{% if ucnt > 0 %}


<table border=1>
<tr><td>Data</td><td>Autor</td><td>Treś komentarza</td><td>Akcja</td></tr>

{% for k, v in content %}

<tr><td>{{ v.createdat|date('Y-m-d H-i-s') }}</td><td><a href=\"{{ path('userspace', {'uid': v.uid.id}) }}\"><img src=\"/avatar/{{ v.uid.id }}.jpeg\">{{ v.uid }}</a></td><td>{{ cnt[v.filename]|raw}}</td>{% if username == v.uid %} <td><a href=\"{{ path('userspacecomment_edit', {'cid': v.id, 'wid': v.wid.id}) }}\">edytuj</a> <a href=\"{{ path('userspacecomment_delete', {'cid': v.id, 'wid': v.wid.id}) }}\">usuń</a> </td>{% endif %}</tr>
{% endfor %}

</table>

{% endif %}

Dodaj komentarz

{{ form_start(cform) }}
{{ form_widget(cform) }}
<button type=\"submit\" class=\"btn btnoutline-secondary\">Dodaj</button>
{{ form_end(cform) }}


{% endblock%}
", "port119/userspace_wall_comment.html.twig", "/var/www/port119/templates/port119/userspace_wall_comment.html.twig");
    }
}
