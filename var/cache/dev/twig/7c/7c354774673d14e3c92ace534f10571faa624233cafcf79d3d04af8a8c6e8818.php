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

/* port119/usergallerycontent.html.twig */
class __TwigTemplate_f5efc3cd837884387f42abc1ed8895c0cb15e18db68056fdb9ac723326a2cd10 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/usergallerycontent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/usergallerycontent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/usergallerycontent.html.twig", 1);
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
obrazków: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["picscnt"]) || array_key_exists("picscnt", $context) ? $context["picscnt"] : (function () { throw new RuntimeError('Variable "picscnt" does not exist.', 5, $this->source); })()), "html", null, true);
        echo " komentarzy: ";
        echo twig_escape_filter($this->env, (isset($context["accnt"]) || array_key_exists("accnt", $context) ? $context["accnt"] : (function () { throw new RuntimeError('Variable "accnt" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "

";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'widget');
        echo "
<button type=\"submit\" class=\"btn bntouline-secondary\">Wrzuć obrazki</button>
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_end');
        echo "


";
        // line 13
        if (((isset($context["picscnt"]) || array_key_exists("picscnt", $context) ? $context["picscnt"] : (function () { throw new RuntimeError('Variable "picscnt" does not exist.', 13, $this->source); })()) == 0)) {
            // line 14
            echo "brak obrazków<br>

";
        } else {
            // line 17
            echo "

<form name=\"gmd\" method=\"post\" action=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_gallery_content_mass_delete", ["uid" => (isset($context["uid"]) || array_key_exists("uid", $context) ? $context["uid"] : (function () { throw new RuntimeError('Variable "uid" does not exist.', 19, $this->source); })()), "gid" => (isset($context["gid"]) || array_key_exists("gid", $context) ? $context["gid"] : (function () { throw new RuntimeError('Variable "gid" does not exist.', 19, $this->source); })())]), "html", null, true);
            echo "\">
<input type=\"button\" value=\"zaznacz wszystkie\" onclick=\"checkboxesAll('gmd',true);\"/>
<input type=\"button\" value=\"odznacz wszystkie\" onclick=\"checkboxesAll('gmd',false);\"/><br /><br />

<button type=\"submit\" class=\"btn btnoutline-secondary\">Usuń</button><br /><br />

";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pics"]) || array_key_exists("pics", $context) ? $context["pics"] : (function () { throw new RuntimeError('Variable "pics" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 26
                echo "

<a href=\"/gallery/";
                // line 28
                echo twig_escape_filter($this->env, (isset($context["uid"]) || array_key_exists("uid", $context) ? $context["uid"] : (function () { throw new RuntimeError('Variable "uid" does not exist.', 28, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["gid"]) || array_key_exists("gid", $context) ? $context["gid"] : (function () { throw new RuntimeError('Variable "gid" does not exist.', 28, $this->source); })()), "html", null, true);
                echo "/orig/";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo "\">
<img src=\"/gallery/";
                // line 29
                echo twig_escape_filter($this->env, (isset($context["uid"]) || array_key_exists("uid", $context) ? $context["uid"] : (function () { throw new RuntimeError('Variable "uid" does not exist.', 29, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["gid"]) || array_key_exists("gid", $context) ? $context["gid"] : (function () { throw new RuntimeError('Variable "gid" does not exist.', 29, $this->source); })()), "html", null, true);
                echo "/min/";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo "\">
</a> ";
                // line 30
                if (twig_get_attribute($this->env, $this->source, ($context["titles2"] ?? null), $context["v"], [], "array", true, true, false, 30)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["titles2"]) || array_key_exists("titles2", $context) ? $context["titles2"] : (function () { throw new RuntimeError('Variable "titles2" does not exist.', 30, $this->source); })()), $context["v"], [], "array", false, false, false, 30), "html", null, true);
                    echo " ";
                } else {
                    echo "brak tytułu";
                }
                echo " || <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_gallery_title_set", ["uid" => (isset($context["uid"]) || array_key_exists("uid", $context) ? $context["uid"] : (function () { throw new RuntimeError('Variable "uid" does not exist.', 30, $this->source); })()), "gid" => (isset($context["gid"]) || array_key_exists("gid", $context) ? $context["gid"] : (function () { throw new RuntimeError('Variable "gid" does not exist.', 30, $this->source); })()), "file" => $context["v"]]), "html", null, true);
                echo "\">ustaw tytuł</a> || <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_gallery_comment", ["uid" => (isset($context["uid"]) || array_key_exists("uid", $context) ? $context["uid"] : (function () { throw new RuntimeError('Variable "uid" does not exist.', 30, $this->source); })()), "imgid" => $context["v"]]), "html", null, true);
                echo "\">komentarze (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ccnt"]) || array_key_exists("ccnt", $context) ? $context["ccnt"] : (function () { throw new RuntimeError('Variable "ccnt" does not exist.', 30, $this->source); })()), $context["v"], [], "array", false, false, false, 30), "html", null, true);
                echo ")</a> || <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_gallery_setavatar", ["uid" => (isset($context["uid"]) || array_key_exists("uid", $context) ? $context["uid"] : (function () { throw new RuntimeError('Variable "uid" does not exist.', 30, $this->source); })()), "gid" => (isset($context["gid"]) || array_key_exists("gid", $context) ? $context["gid"] : (function () { throw new RuntimeError('Variable "gid" does not exist.', 30, $this->source); })()), "id" => $context["v"]]), "html", null, true);
                echo "\">użyj jako avatar</a> || <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_gallery_content_delete", ["uid" => (isset($context["uid"]) || array_key_exists("uid", $context) ? $context["uid"] : (function () { throw new RuntimeError('Variable "uid" does not exist.', 30, $this->source); })()), "gid" => (isset($context["gid"]) || array_key_exists("gid", $context) ? $context["gid"] : (function () { throw new RuntimeError('Variable "gid" does not exist.', 30, $this->source); })()), "file" => $context["v"], "uid" => (isset($context["uid"]) || array_key_exists("uid", $context) ? $context["uid"] : (function () { throw new RuntimeError('Variable "uid" does not exist.', 30, $this->source); })()), "gid" => (isset($context["gid"]) || array_key_exists("gid", $context) ? $context["gid"] : (function () { throw new RuntimeError('Variable "gid" does not exist.', 30, $this->source); })())]), "html", null, true);
                echo "\">Usuń obrazek</a> <input type=\"checkbox\" name=\"";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo "\" />
<br>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "

";
        }
        // line 36
        echo "

</form>




<script>
function checkboxesAll(f,b){ //gdzie f - nazwa lub numer formularza w dokumencie html, b - wartosc typu boolean oznaczajaca true dla zanaczenia wszytkich, false dla odznaczenia
   var e = document.forms[f].elements;
   for (var i=0;i<e.length;i++) {
      if (e[i].type==\"checkbox\") e[i].checked = b;
   }
}
</script>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/usergallerycontent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 36,  164 => 33,  137 => 30,  129 => 29,  121 => 28,  117 => 26,  113 => 25,  104 => 19,  100 => 17,  95 => 14,  93 => 13,  87 => 10,  82 => 8,  78 => 7,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

obrazków: {{ picscnt }} komentarzy: {{ accnt }}

{{ form_start(form) }}
{{ form_widget(form) }}
<button type=\"submit\" class=\"btn bntouline-secondary\">Wrzuć obrazki</button>
{{ form_end(form) }}


{% if picscnt == 0 %}
brak obrazków<br>

{% else %}


<form name=\"gmd\" method=\"post\" action=\"{{ path('user_gallery_content_mass_delete', {'uid': uid, 'gid': gid}) }}\">
<input type=\"button\" value=\"zaznacz wszystkie\" onclick=\"checkboxesAll('gmd',true);\"/>
<input type=\"button\" value=\"odznacz wszystkie\" onclick=\"checkboxesAll('gmd',false);\"/><br /><br />

<button type=\"submit\" class=\"btn btnoutline-secondary\">Usuń</button><br /><br />

{% for k, v in pics %}


<a href=\"/gallery/{{ uid }}/{{ gid }}/orig/{{ v }}\">
<img src=\"/gallery/{{ uid }}/{{ gid }}/min/{{ v }}\">
</a> {% if titles2[v] is defined %} {{ titles2[v] }} {% else %}brak tytułu{% endif %} || <a href=\"{{ path('user_gallery_title_set', {'uid': uid, 'gid': gid, 'file': v}) }}\">ustaw tytuł</a> || <a href=\"{{ path('user_gallery_comment', {'uid': uid, 'imgid': v}) }}\">komentarze ({{ ccnt[v] }})</a> || <a href=\"{{ path('user_gallery_setavatar', {'uid': uid, 'gid': gid, 'id': v }) }}\">użyj jako avatar</a> || <a href=\"{{ path('user_gallery_content_delete', {'uid': uid, 'gid': gid, 'file': v, 'uid': uid, 'gid': gid }) }}\">Usuń obrazek</a> <input type=\"checkbox\" name=\"{{ v }}\" />
<br>
{% endfor %}


{% endif %}


</form>




<script>
function checkboxesAll(f,b){ //gdzie f - nazwa lub numer formularza w dokumencie html, b - wartosc typu boolean oznaczajaca true dla zanaczenia wszytkich, false dla odznaczenia
   var e = document.forms[f].elements;
   for (var i=0;i<e.length;i++) {
      if (e[i].type==\"checkbox\") e[i].checked = b;
   }
}
</script>



{% endblock %}
", "port119/usergallerycontent.html.twig", "/var/www/port119/templates/port119/usergallerycontent.html.twig");
    }
}
