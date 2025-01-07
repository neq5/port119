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

/* port119/content2.html.twig */
class __TwigTemplate_ab6e9223e22ce37fd79d72c9aeae8f1996ab4a3359bc4f61960c0e69b2edbcca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/content2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/content2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/content2.html.twig", 1);
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
        echo "\" | Ilość wpisów: ";
        echo twig_escape_filter($this->env, (isset($context["cnt"]) || array_key_exists("cnt", $context) ? $context["cnt"] : (function () { throw new RuntimeError('Variable "cnt" does not exist.', 5, $this->source); })()), "html", null, true);
        echo " | <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2_new", ["id" => (isset($context["groupid"]) || array_key_exists("groupid", $context) ? $context["groupid"] : (function () { throw new RuntimeError('Variable "groupid" does not exist.', 5, $this->source); })()), "page" => 1]), "html", null, true);
        echo "\">Nowy wpis</a>
<br /><br />

Administratorzy:<br>

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
                    echo "\t\t\t<a href=\"";
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
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new RuntimeError('Variable "abouts" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 24
            echo "\t";
            if (($context["key"] == (isset($context["groupid"]) || array_key_exists("groupid", $context) ? $context["groupid"] : (function () { throw new RuntimeError('Variable "groupid" does not exist.', 24, $this->source); })()))) {
                echo " ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo " ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "<br />
Drzewko:

";
        // line 29
        echo (isset($context["tree"]) || array_key_exists("tree", $context) ? $context["tree"] : (function () { throw new RuntimeError('Variable "tree" does not exist.', 29, $this->source); })());
        echo "



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/content2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 29,  138 => 26,  127 => 24,  123 => 23,  115 => 17,  108 => 15,  97 => 13,  92 => 12,  89 => 11,  85 => 10,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<img src=\"{{ avataruri }}\"> || Wątek \"{{ groupname }}\" | Ilość wpisów: {{ cnt }} | <a href=\"{{ path('discuss2_new', {'id': groupid, 'page': 1}) }}\">Nowy wpis</a>
<br /><br />

Administratorzy:<br>

{% for key, value in gcdn %}
\t{% if key == groupname %}
\t\t{% for key1, value1 in value %}
\t\t\t<a href=\"{{ path('userspace', {'uid': value1 }) }}\">{{ key1 }}</a><br />
\t\t{% endfor %}
\t{% endif %}
{% endfor %}


<br />
<br />
Opis:

{% for key, value in abouts %}
\t{% if key == groupid %} {{ value }} {% endif %}
{% endfor %}
<br />
Drzewko:

{{ tree | raw }}



{% endblock %}
", "port119/content2.html.twig", "/var/www/port119/templates/port119/content2.html.twig");
    }
}
