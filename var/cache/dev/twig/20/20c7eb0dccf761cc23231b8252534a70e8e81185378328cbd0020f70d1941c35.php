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

/* port119/usergallery.html.twig */
class __TwigTemplate_7d6e2a2f266991b3b77cacfadbb4bc897fe297373bde965c41e94678bc5cb5d1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/usergallery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/usergallery.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/usergallery.html.twig", 1);
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
        if (((isset($context["albumscnt"]) || array_key_exists("albumscnt", $context) ? $context["albumscnt"] : (function () { throw new RuntimeError('Variable "albumscnt" does not exist.', 5, $this->source); })()) == 0)) {
            // line 6
            echo "0 albumów 
";
        } elseif ((        // line 7
(isset($context["albumscnt"]) || array_key_exists("albumscnt", $context) ? $context["albumscnt"] : (function () { throw new RuntimeError('Variable "albumscnt" does not exist.', 7, $this->source); })()) == 1)) {
            // line 8
            echo "1 album 
";
        } else {
            // line 10
            echo twig_escape_filter($this->env, (isset($context["albumscnt"]) || array_key_exists("albumscnt", $context) ? $context["albumscnt"] : (function () { throw new RuntimeError('Variable "albumscnt" does not exist.', 10, $this->source); })()), "html", null, true);
            echo " albumy 
";
        }
        // line 12
        echo "
 obrazków: ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["allpicscnt"]) || array_key_exists("allpicscnt", $context) ? $context["allpicscnt"] : (function () { throw new RuntimeError('Variable "allpicscnt" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " komentarzy ";
        echo twig_escape_filter($this->env, (isset($context["ccnt"]) || array_key_exists("ccnt", $context) ? $context["ccnt"] : (function () { throw new RuntimeError('Variable "ccnt" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "

<br /><br />
Dodaj album<br>
";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["albumsform"]) || array_key_exists("albumsform", $context) ? $context["albumsform"] : (function () { throw new RuntimeError('Variable "albumsform" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["albumsform"]) || array_key_exists("albumsform", $context) ? $context["albumsform"] : (function () { throw new RuntimeError('Variable "albumsform" does not exist.', 18, $this->source); })()), 'widget');
        echo "
<button type=\"submit\" class=\"btn bntouline-secondary\">Dodaj</button>
";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["albumsform"]) || array_key_exists("albumsform", $context) ? $context["albumsform"] : (function () { throw new RuntimeError('Variable "albumsform" does not exist.', 20, $this->source); })()), 'form_end');
        echo "


<br /><br />


";
        // line 26
        if ((isset($context["albumscnt"]) || array_key_exists("albumscnt", $context) ? $context["albumscnt"] : (function () { throw new RuntimeError('Variable "albumscnt" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "

<form name=\"amd\" method=\"post\" action=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_gallery_album_mass_delete", ["uid" => (isset($context["uid"]) || array_key_exists("uid", $context) ? $context["uid"] : (function () { throw new RuntimeError('Variable "uid" does not exist.', 29, $this->source); })())]), "html", null, true);
            echo "\">
<input type=\"button\" value=\"zaznacz wszystkie\" onclick=\"checkboxesAll('amd',true);\"/>
<input type=\"button\" value=\"odznacz wszystkie\" onclick=\"checkboxesAll('amd',false);\"/><br /><br />

<button type=\"submit\" class=\"btn btnoutline-secondary\">Usuń</button><br /><br />


";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["albums"]) || array_key_exists("albums", $context) ? $context["albums"] : (function () { throw new RuntimeError('Variable "albums" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 37
                echo "
<a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_gallery_content", ["uid" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 38, $this->source); })()), "gid" => $context["v"]]), "html", null, true);
                echo "\">

<img src=\"/gallery/";
                // line 40
                echo twig_escape_filter($this->env, (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 40, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo "/cover.jpeg\">
</a> 


ilość zdjęć: 
";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picscnt"]) || array_key_exists("picscnt", $context) ? $context["picscnt"] : (function () { throw new RuntimeError('Variable "picscnt" does not exist.', 45, $this->source); })()), $context["v"], [], "array", false, false, false, 45), "html", null, true);
                echo " 
| ilość komentarzy: ";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["albccnt"]) || array_key_exists("albccnt", $context) ? $context["albccnt"] : (function () { throw new RuntimeError('Variable "albccnt" does not exist.', 46, $this->source); })()), $context["v"], [], "array", false, false, false, 46), "html", null, true);
                echo " 
| ";
                // line 47
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo " 
| <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_gallery_delete", ["uid" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 48, $this->source); })()), "gid" => $context["v"]]), "html", null, true);
                echo "\">usuń</a> 

<input type=\"checkbox\" name=\"";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fnames"]) || array_key_exists("fnames", $context) ? $context["fnames"] : (function () { throw new RuntimeError('Variable "fnames" does not exist.', 50, $this->source); })()), $context["v"], [], "array", false, false, false, 50), "html", null, true);
                echo "\" /><br /><br />
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "
</form>


<script>
function checkboxesAll(f,b){ 
   var e = document.forms[f].elements;
   for (var i=0;i<e.length;i++) {
      if (e[i].type==\"checkbox\") e[i].checked = b;
   }
}
</script>



";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/usergallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 52,  172 => 50,  167 => 48,  163 => 47,  159 => 46,  155 => 45,  145 => 40,  140 => 38,  137 => 37,  133 => 36,  123 => 29,  119 => 27,  117 => 26,  108 => 20,  103 => 18,  99 => 17,  90 => 13,  87 => 12,  82 => 10,  78 => 8,  76 => 7,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

{% if albumscnt == 0 %}
0 albumów 
{% elseif albumscnt == 1 %}
1 album 
{% else %}
{{ albumscnt }} albumy 
{% endif %}

 obrazków: {{ allpicscnt }} komentarzy {{ ccnt }}

<br /><br />
Dodaj album<br>
{{ form_start(albumsform) }}
{{ form_widget(albumsform) }}
<button type=\"submit\" class=\"btn bntouline-secondary\">Dodaj</button>
{{ form_end(albumsform) }}


<br /><br />


{% if albumscnt %}


<form name=\"amd\" method=\"post\" action=\"{{ path('user_gallery_album_mass_delete', {'uid': uid}) }}\">
<input type=\"button\" value=\"zaznacz wszystkie\" onclick=\"checkboxesAll('amd',true);\"/>
<input type=\"button\" value=\"odznacz wszystkie\" onclick=\"checkboxesAll('amd',false);\"/><br /><br />

<button type=\"submit\" class=\"btn btnoutline-secondary\">Usuń</button><br /><br />


{% for k, v in albums %}

<a href=\"{{ path('user_gallery_content', {'uid': userid, 'gid': v}) }}\">

<img src=\"/gallery/{{ userid }}/{{ v }}/cover.jpeg\">
</a> 


ilość zdjęć: 
{{ picscnt[v] }} 
| ilość komentarzy: {{ albccnt[v] }} 
| {{ v }} 
| <a href=\"{{ path('user_gallery_delete', {'uid': userid, 'gid': v}) }}\">usuń</a> 

<input type=\"checkbox\" name=\"{{ fnames[v] }}\" /><br /><br />
{% endfor %}

</form>


<script>
function checkboxesAll(f,b){ 
   var e = document.forms[f].elements;
   for (var i=0;i<e.length;i++) {
      if (e[i].type==\"checkbox\") e[i].checked = b;
   }
}
</script>



{% endif %}
{% endblock %}
", "port119/usergallery.html.twig", "/var/www/port119/templates/port119/usergallery.html.twig");
    }
}
