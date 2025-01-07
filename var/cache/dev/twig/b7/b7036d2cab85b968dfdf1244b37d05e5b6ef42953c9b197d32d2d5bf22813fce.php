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

/* port119/userspacegallerycontent.html.twig */
class __TwigTemplate_4c99e22920075219580bcb332a5c2fbbc53df9564a0bfd79008c50e17ce3676f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/userspacegallerycontent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/userspacegallerycontent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/userspacegallerycontent.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
Album: ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["gid"]) || array_key_exists("gid", $context) ? $context["gid"] : (function () { throw new RuntimeError('Variable "gid" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "<br />
";
        // line 5
        if (((isset($context["picscnt"]) || array_key_exists("picscnt", $context) ? $context["picscnt"] : (function () { throw new RuntimeError('Variable "picscnt" does not exist.', 5, $this->source); })()) == 0)) {
            // line 6
            echo "brak obrazków
";
        } else {
            // line 8
            echo "zawiera ";
            echo twig_escape_filter($this->env, (isset($context["picscnt"]) || array_key_exists("picscnt", $context) ? $context["picscnt"] : (function () { throw new RuntimeError('Variable "picscnt" does not exist.', 8, $this->source); })()), "html", null, true);
            echo " obrazki
<br />
";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["accnt"]) || array_key_exists("accnt", $context) ? $context["accnt"] : (function () { throw new RuntimeError('Variable "accnt" does not exist.', 10, $this->source); })()), "html", null, true);
            echo " komentarzy

<br />
";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pics"]) || array_key_exists("pics", $context) ? $context["pics"] : (function () { throw new RuntimeError('Variable "pics" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 14
                echo "
<a href=\"/gallery/";
                // line 15
                echo twig_escape_filter($this->env, (isset($context["uid"]) || array_key_exists("uid", $context) ? $context["uid"] : (function () { throw new RuntimeError('Variable "uid" does not exist.', 15, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["gid"]) || array_key_exists("gid", $context) ? $context["gid"] : (function () { throw new RuntimeError('Variable "gid" does not exist.', 15, $this->source); })()), "html", null, true);
                echo "/orig/";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo "\">
<img src=\"/gallery/";
                // line 16
                echo twig_escape_filter($this->env, (isset($context["uid"]) || array_key_exists("uid", $context) ? $context["uid"] : (function () { throw new RuntimeError('Variable "uid" does not exist.', 16, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["gid"]) || array_key_exists("gid", $context) ? $context["gid"] : (function () { throw new RuntimeError('Variable "gid" does not exist.', 16, $this->source); })()), "html", null, true);
                echo "/min/";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo "\">
</a> 
";
                // line 18
                if (twig_get_attribute($this->env, $this->source, ($context["titles2"] ?? null), $context["v"], [], "array", true, true, false, 18)) {
                    // line 19
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["titles2"]) || array_key_exists("titles2", $context) ? $context["titles2"] : (function () { throw new RuntimeError('Variable "titles2" does not exist.', 19, $this->source); })()), $context["v"], [], "array", false, false, false, 19), "html", null, true);
                    echo " ";
                } else {
                    echo "brak tytułu ";
                }
                // line 20
                echo "|| <a href=";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fromuserspacegallerycomment", ["uid" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 20, $this->source); })()), "imgid" => $context["v"]]), "html", null, true);
                echo ">(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ccnt"]) || array_key_exists("ccnt", $context) ? $context["ccnt"] : (function () { throw new RuntimeError('Variable "ccnt" does not exist.', 20, $this->source); })()), $context["k"], [], "array", false, false, false, 20), "html", null, true);
                echo ") komentarze</a>

<br />

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/userspacegallerycontent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 20,  119 => 19,  117 => 18,  108 => 16,  100 => 15,  97 => 14,  93 => 13,  87 => 10,  81 => 8,  77 => 6,  75 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

Album: {{ gid }}<br />
{% if picscnt == 0 %}
brak obrazków
{% else %}
zawiera {{ picscnt }} obrazki
<br />
{{ accnt }} komentarzy

<br />
{% for k, v in pics %}

<a href=\"/gallery/{{ uid }}/{{ gid }}/orig/{{ v }}\">
<img src=\"/gallery/{{ uid }}/{{ gid }}/min/{{ v }}\">
</a> 
{% if titles2[v] is defined %}
{{ titles2[v] }} {% else %}brak tytułu {% endif %}
|| <a href={{ path('fromuserspacegallerycomment', {'uid': userid, 'imgid': v})}}>({{ ccnt[k] }}) komentarze</a>

<br />

{% endfor %}
{% endif %}
{% endblock %}
", "port119/userspacegallerycontent.html.twig", "/var/www/port119/templates/port119/userspacegallerycontent.html.twig");
    }
}
