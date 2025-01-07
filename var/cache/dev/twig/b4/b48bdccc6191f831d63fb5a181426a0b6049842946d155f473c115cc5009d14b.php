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

/* port119/fromuserspacegallery.html.twig */
class __TwigTemplate_32742071c74e2b468d545e637f95021c0f4a16a7b8ff28db262d268924044e80 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/fromuserspacegallery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/fromuserspacegallery.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/fromuserspacegallery.html.twig", 1);
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
galeria użytkownika ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["uname"]) || array_key_exists("uname", $context) ? $context["uname"] : (function () { throw new RuntimeError('Variable "uname" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "<br />

";
        // line 7
        if (((isset($context["albumscnt"]) || array_key_exists("albumscnt", $context) ? $context["albumscnt"] : (function () { throw new RuntimeError('Variable "albumscnt" does not exist.', 7, $this->source); })()) == 0)) {
            // line 8
            echo "brak albumów<br />
";
        }
        // line 10
        echo "
";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["accnt"]) || array_key_exists("accnt", $context) ? $context["accnt"] : (function () { throw new RuntimeError('Variable "accnt" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " komentarzy<br />
";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["apicscnt"]) || array_key_exists("apicscnt", $context) ? $context["apicscnt"] : (function () { throw new RuntimeError('Variable "apicscnt" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " obrazków<br />

";
        // line 14
        if ((isset($context["albumscnt"]) || array_key_exists("albumscnt", $context) ? $context["albumscnt"] : (function () { throw new RuntimeError('Variable "albumscnt" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "
Ilość albumów: ";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["albumscnt"]) || array_key_exists("albumscnt", $context) ? $context["albumscnt"] : (function () { throw new RuntimeError('Variable "albumscnt" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "<br /><br />


";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["albums"]) || array_key_exists("albums", $context) ? $context["albums"] : (function () { throw new RuntimeError('Variable "albums" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 20
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspacegallerycontent", ["uid" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 20, $this->source); })()), "gid" => $context["v"]]), "html", null, true);
                echo "\">
<img src=\"/gallery/";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 21, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo "/cover.jpeg\"></a> ilość zdjęć ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picsnt"]) || array_key_exists("picsnt", $context) ? $context["picsnt"] : (function () { throw new RuntimeError('Variable "picsnt" does not exist.', 21, $this->source); })()), $context["v"], [], "array", false, false, false, 21), "html", null, true);
                echo " komentarzy: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vaccnt"]) || array_key_exists("vaccnt", $context) ? $context["vaccnt"] : (function () { throw new RuntimeError('Variable "vaccnt" does not exist.', 21, $this->source); })()), $context["v"], [], "array", false, false, false, 21), "html", null, true);
                echo " nazwa: ";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo "<br />

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
";
        }
        // line 26
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/fromuserspacegallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 26,  131 => 24,  114 => 21,  109 => 20,  105 => 19,  99 => 16,  96 => 15,  94 => 14,  89 => 12,  85 => 11,  82 => 10,  78 => 8,  76 => 7,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

galeria użytkownika {{ uname }}<br />

{% if albumscnt == 0 %}
brak albumów<br />
{% endif %}

{{ accnt }} komentarzy<br />
{{ apicscnt }} obrazków<br />

{% if albumscnt %}

Ilość albumów: {{ albumscnt }}<br /><br />


{% for k, v in albums %}
<a href=\"{{ path('userspacegallerycontent', {'uid': userid, 'gid': v}) }}\">
<img src=\"/gallery/{{ userid}}/{{ v }}/cover.jpeg\"></a> ilość zdjęć {{ picsnt[v] }} komentarzy: {{ vaccnt[v] }} nazwa: {{ v }}<br />

{% endfor %}

{% endif %}

{% endblock %}
", "port119/fromuserspacegallery.html.twig", "/var/www/port119/templates/port119/fromuserspacegallery.html.twig");
    }
}
