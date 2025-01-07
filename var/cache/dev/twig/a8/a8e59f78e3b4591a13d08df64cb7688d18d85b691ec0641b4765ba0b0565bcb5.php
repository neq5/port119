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

/* port119/userspaceforeign.html.twig */
class __TwigTemplate_e346ad3b0f20a052f95e5ea8b0172aa3a0dbc00c0d397d73ad9a834f97c99d79 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/userspaceforeign.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/userspaceforeign.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/userspaceforeign.html.twig", 1);
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
Profil użytkownika 

<table border=1>
<tr>
<td>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["uname"]) || array_key_exists("uname", $context) ? $context["uname"] : (function () { throw new RuntimeError('Variable "uname" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</td>
<td><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\"></td>
</tr>
<tr>
<td>Imię</td>
<td>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["firstname"]) || array_key_exists("firstname", $context) ? $context["firstname"] : (function () { throw new RuntimeError('Variable "firstname" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</td>
</tr>
<tr>
<td>Nazwisko</td>
<td>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["lastname"]) || array_key_exists("lastname", $context) ? $context["lastname"] : (function () { throw new RuntimeError('Variable "lastname" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</td>
</tr>
<tr>
<td>Opis</td>
<td>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["aboutcontent"]) || array_key_exists("aboutcontent", $context) ? $context["aboutcontent"] : (function () { throw new RuntimeError('Variable "aboutcontent" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "</td>
</tr>
<tr>
<td colspan=2>";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["postcnt"]) || array_key_exists("postcnt", $context) ? $context["postcnt"] : (function () { throw new RuntimeError('Variable "postcnt" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " postów w ";
        echo twig_escape_filter($this->env, (isset($context["groupcnt"]) || array_key_exists("groupcnt", $context) ? $context["groupcnt"] : (function () { throw new RuntimeError('Variable "groupcnt" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " wątkach</td>
</tr>

</table>
<br />
<table border=1>
<tr>
<td>
";
        // line 33
        if ((isset($context["freporequested"]) || array_key_exists("freporequested", $context) ? $context["freporequested"] : (function () { throw new RuntimeError('Variable "freporequested" does not exist.', 33, $this->source); })())) {
            // line 34
            echo "\twysłano zaproszenie do grona znajomych || <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cancelfriendrequest", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["freporequested"]) || array_key_exists("freporequested", $context) ? $context["freporequested"] : (function () { throw new RuntimeError('Variable "freporequested" does not exist.', 34, $this->source); })()), 0, [], "array", false, false, false, 34), "id", [], "any", false, false, false, 34), "pid" => (isset($context["uid"]) || array_key_exists("uid", $context) ? $context["uid"] : (function () { throw new RuntimeError('Variable "uid" does not exist.', 34, $this->source); })())]), "html", null, true);
            echo "\">Anuluj</a>
";
        } elseif (        // line 35
(isset($context["frepotoconfirm"]) || array_key_exists("frepotoconfirm", $context) ? $context["frepotoconfirm"] : (function () { throw new RuntimeError('Variable "frepotoconfirm" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "\tzostałeś zaproszony do grona znajomych przez użytkownika ";
            echo twig_escape_filter($this->env, (isset($context["uname"]) || array_key_exists("uname", $context) ? $context["uname"] : (function () { throw new RuntimeError('Variable "uname" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "<br />
\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cancelfriendrequest", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepotoconfirm"]) || array_key_exists("frepotoconfirm", $context) ? $context["frepotoconfirm"] : (function () { throw new RuntimeError('Variable "frepotoconfirm" does not exist.', 37, $this->source); })()), 0, [], "array", false, false, false, 37), "id", [], "any", false, false, false, 37), "pid" => (isset($context["uid"]) || array_key_exists("uid", $context) ? $context["uid"] : (function () { throw new RuntimeError('Variable "uid" does not exist.', 37, $this->source); })())]), "html", null, true);
            echo "\">Odrzuć zaproszenie</a><br />
\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confirmfriendrequest", ["fid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepotoconfirm"]) || array_key_exists("frepotoconfirm", $context) ? $context["frepotoconfirm"] : (function () { throw new RuntimeError('Variable "frepotoconfirm" does not exist.', 38, $this->source); })()), 0, [], "array", false, false, false, 38), "id", [], "any", false, false, false, 38), "uid" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 38, $this->source); })()), "pid" => (isset($context["uid"]) || array_key_exists("uid", $context) ? $context["uid"] : (function () { throw new RuntimeError('Variable "uid" does not exist.', 38, $this->source); })())]), "html", null, true);
            echo "\">Potwierdź zaproszenie</a>

";
        } else {
            // line 41
            echo "\t";
            if ((isset($context["frepo"]) || array_key_exists("frepo", $context) ? $context["frepo"] : (function () { throw new RuntimeError('Variable "frepo" does not exist.', 41, $this->source); })())) {
                // line 42
                echo "\t\tjesteście znajomymi || <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("removefriendfromuserspace", ["uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepo"]) || array_key_exists("frepo", $context) ? $context["frepo"] : (function () { throw new RuntimeError('Variable "frepo" does not exist.', 42, $this->source); })()), 0, [], "array", false, false, false, 42), "user", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "pid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepo"]) || array_key_exists("frepo", $context) ? $context["frepo"] : (function () { throw new RuntimeError('Variable "frepo" does not exist.', 42, $this->source); })()), 0, [], "array", false, false, false, 42), "party", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\">Usuń</a> 
\t";
            } else {
                // line 44
                echo "\t\tnie jesteście znajomymi || <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fromuserspaceadd", ["uid" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 44, $this->source); })()), "pid" => (isset($context["uid"]) || array_key_exists("uid", $context) ? $context["uid"] : (function () { throw new RuntimeError('Variable "uid" does not exist.', 44, $this->source); })())]), "html", null, true);
                echo "\">Dodaj</a> 
\t";
            }
        }
        // line 47
        echo "</td>
</table>
<br />
<table border=1>
<tr>
<td>
\t<a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fromuserspacegallery", ["uid" => (isset($context["uid"]) || array_key_exists("uid", $context) ? $context["uid"] : (function () { throw new RuntimeError('Variable "uid" does not exist.', 53, $this->source); })())]), "html", null, true);
        echo "\">Galeria</a> ";
        echo twig_escape_filter($this->env, (isset($context["indircnt"]) || array_key_exists("indircnt", $context) ? $context["indircnt"] : (function () { throw new RuntimeError('Variable "indircnt" does not exist.', 53, $this->source); })()), "html", null, true);
        echo " obrazków w ";
        echo twig_escape_filter($this->env, (isset($context["albumscnt"]) || array_key_exists("albumscnt", $context) ? $context["albumscnt"] : (function () { throw new RuntimeError('Variable "albumscnt" does not exist.', 53, $this->source); })()), "html", null, true);
        echo " albumach ";
        echo twig_escape_filter($this->env, (isset($context["vccnt"]) || array_key_exists("vccnt", $context) ? $context["vccnt"] : (function () { throw new RuntimeError('Variable "vccnt" does not exist.', 53, $this->source); })()), "html", null, true);
        echo " komentarzy
</td>
</tr><tr>
<td>
\t<a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fromuserspacewall", ["uid" => (isset($context["uid"]) || array_key_exists("uid", $context) ? $context["uid"] : (function () { throw new RuntimeError('Variable "uid" does not exist.', 57, $this->source); })())]), "html", null, true);
        echo "\">Blog</a> ";
        echo twig_escape_filter($this->env, (isset($context["wallcnt"]) || array_key_exists("wallcnt", $context) ? $context["wallcnt"] : (function () { throw new RuntimeError('Variable "wallcnt" does not exist.', 57, $this->source); })()), "html", null, true);
        echo " wpisów || ";
        echo twig_escape_filter($this->env, (isset($context["ccnt"]) || array_key_exists("ccnt", $context) ? $context["ccnt"] : (function () { throw new RuntimeError('Variable "ccnt" does not exist.', 57, $this->source); })()), "html", null, true);
        echo " komentarzy
</td>
</tr>
</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/userspaceforeign.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 57,  167 => 53,  159 => 47,  152 => 44,  146 => 42,  143 => 41,  137 => 38,  133 => 37,  128 => 36,  126 => 35,  121 => 34,  119 => 33,  106 => 25,  100 => 22,  93 => 18,  86 => 14,  79 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

Profil użytkownika 

<table border=1>
<tr>
<td>{{ uname }}</td>
<td><img src=\"{{ avatar }}\"></td>
</tr>
<tr>
<td>Imię</td>
<td>{{ firstname }}</td>
</tr>
<tr>
<td>Nazwisko</td>
<td>{{ lastname }}</td>
</tr>
<tr>
<td>Opis</td>
<td>{{ aboutcontent }}</td>
</tr>
<tr>
<td colspan=2>{{ postcnt }} postów w {{ groupcnt }} wątkach</td>
</tr>

</table>
<br />
<table border=1>
<tr>
<td>
{% if freporequested %}
\twysłano zaproszenie do grona znajomych || <a href=\"{{ path('cancelfriendrequest', {'id': freporequested[0].id, 'pid': uid}) }}\">Anuluj</a>
{% elseif frepotoconfirm %}
\tzostałeś zaproszony do grona znajomych przez użytkownika {{ uname }}<br />
\t<a href=\"{{ path('cancelfriendrequest', {'id': frepotoconfirm[0].id, 'pid': uid}) }}\">Odrzuć zaproszenie</a><br />
\t<a href=\"{{ path('confirmfriendrequest', {'fid': frepotoconfirm[0].id, 'uid': userid, 'pid': uid}) }}\">Potwierdź zaproszenie</a>

{% else %}
\t{% if frepo %}
\t\tjesteście znajomymi || <a href=\"{{ path('removefriendfromuserspace', {'uid': frepo[0].user.id, 'pid': frepo[0].party.id}) }}\">Usuń</a> 
\t{% else %}
\t\tnie jesteście znajomymi || <a href=\"{{ path('fromuserspaceadd', {'uid': userid, 'pid': uid}) }}\">Dodaj</a> 
\t{% endif %}
{% endif %}
</td>
</table>
<br />
<table border=1>
<tr>
<td>
\t<a href=\"{{ path('fromuserspacegallery', {'uid': uid }) }}\">Galeria</a> {{ indircnt }} obrazków w {{ albumscnt }} albumach {{ vccnt }} komentarzy
</td>
</tr><tr>
<td>
\t<a href=\"{{ path('fromuserspacewall', {'uid': uid }) }}\">Blog</a> {{ wallcnt }} wpisów || {{ ccnt }} komentarzy
</td>
</tr>
</table>

{% endblock %}
", "port119/userspaceforeign.html.twig", "/var/www/port119/templates/port119/userspaceforeign.html.twig");
    }
}
