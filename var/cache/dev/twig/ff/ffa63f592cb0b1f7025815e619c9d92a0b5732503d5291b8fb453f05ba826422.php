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

/* base.html.twig */
class __TwigTemplate_3f5f32c960546ff86b525c938b2fdfda71398cdb099947f7fc86724200d02f4c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
\t<meta http-equiv=\"pragma\" content=\"no-cache\">
\t<meta http-equid=\"expires\" content=\"-1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 100
        echo "    </head>
    <body>


<div id=\"top_s\">
   
<div class=\"cont\">
<div class=\"poszial_top row\">
   
<div class=\"lewa_strona_top col-lg-6\">


<nav class=\"navbar navbar-expand-lg\">
  <a class=\"navbar-brand lcolor\" href=\"/\">port119</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item active\">
\t<b>
\t";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 121, $this->source); })()), "html", null, true);
        echo "
\t</b>
        <!-- <a class=\"nav-link lcolor\" href=\"#\">// Andrzej // <span class=\"sr-only\">(current)</span></a> -->
      </li>

<!--
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"/settings\">Ustawienia</a>
      </li>
-->
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle lcolor\" href=\"#\" id=\"Wątki\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\tWątki
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"Wątki\">
          <a class=\"dropdown-item\" href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_own");
        echo "\">Twoje wątki</a>
          <a class=\"dropdown-item\" href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_admin");
        echo "\">Administrujesz</a>
          <a class=\"dropdown-item\" href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_sub");
        echo "\">Subskrybujesz</a>
          <a class=\"dropdown-item\" href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_all");
        echo "\">Wszystkie wątki</a>

          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_add");
        echo "\">Dodaj wątek</a>
        </div>
      </li>
\t<li class=\"nav-item\">
       \t<a class=\"nav-link active lcolor\" href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wall");
        echo "\">Blog</a>
\t</li>
\t<li class=\"nav-item\">
\t<a class=\"nav-link active lcolor\" href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("friends2");
        echo "\">Znajomi</a>
\t</li>
\t<li class=\"nav-item\">
\t<a  class=\"nav-link active lcolor\" href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_gallery");
        echo "\">Galeria</a>
\t</li>
    </ul>
  </div>
</nav>






  
</div>
<div class=\"prawa_strona_top col-lg-6\">
   

<div class=\"poszial_prawa row\">

<nav class=\"navbar navbar-expand-lg\">


  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle lcolor\" href=\"#\" id=\"Ustawienia\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\tUstawienia
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"Ustawienia\">
           <a class=\"dropdown-item\" href=\"";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_password");
        echo "\">Hasło</a>
          <a class=\"dropdown-item\" href=\"";
        // line 187
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_avatar");
        echo "\">Awatar</a>
          <a class=\"dropdown-item\" href=\"";
        // line 188
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile");
        echo "\">Profil</a>
\t  <a class=\"dropdown-item\" href=\"";
        // line 189
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete");
        echo "\">Skasuj konto</a>
        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link active lcolor\" href=\"";
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\">logout</a>
    </ul>
  </div>
</nav>


</div>
</div>



</div>



</div>


</div>


";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 214, $this->source); })()), "flashes", [], "method", false, false, false, 214));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 215
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 216
                echo "<div id=\"overlay\" onclick=\"hide_overlay();\">
  <div id=\"text\">";
                // line 217
                echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                echo "</div>
</div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "



        ";
        // line 226
        $this->displayBlock('body', $context, $blocks);
        // line 228
        echo "
\t";
        // line 229
        $this->displayBlock('javascripts', $context, $blocks);
        // line 247
        echo "

\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "port119";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">

\t\t<style type=\"text/css\">

\t\t#overlay {
  position: fixed; /* Sit on top of the page content */
  display: block; /* Hidden by default */
  width: 10%; /* Full width (cover the whole page) */
  height: 10%; /* Full height (cover the whole page) */
  top: 3%;
  left: 50;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
#text{
  padding: 0 12px;
  border: 0px solid teal;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 17px;
  background-color: rgba(0,0,0,0,5);
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
  border-style: none;
  border-color: red;
}


\t\t.link-container {
\t\t\tborder: 0px solid;
\t\t\twidth: 50%
\t\t\theight: 20px;
\t\t}
\t\t.link-container a {
\t\t\tdisplay: block;
\t\t\tbackground: #black;
\t\t\theight: 100%;
\t\t\ttext-align: left;
\t\t}
\t\t.link-container a:hover {
\t\t\tbackground: #f8f8f8;
\t\t}

\t\t.lcolor {
\t\t\tcolor: white;
\t\t}


.lewa_p, .prawa_p
{
   
}
.poszial_prawa
{
   float: right;
   text-align: right;
}
#top_s
{
   background: black;
   position: sticky;
   z-index: 99999;
   padding-top: 3px;
   padding-bottom: 3px;
   color: white;
   top: 0;
}
.cont
{
   width: 99%;
   margin: 0 auto;
}
.navbar
{
   padding: 0!important;
}
.nav-link, .navbar-brand
{
   padding-top: 0!important;
   padding-bottom: 0!important;
}

.lista li { list-style-type: none; }
\t\t</style>
\t\t
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 226
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 227
        echo "\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 229
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 230
        echo "<script>
var milisekundy = 30 * 1000;
function dokument_wczytany() {
    setTimeout(hide_overlay, milisekundy);
}
function hide_overlay() {
    document.getElementById(\"overlay\").style.display = \"none\";
}
document.onload = dokument_wczytany();
</script>

                <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
                <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>


\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 230,  421 => 229,  411 => 227,  401 => 226,  301 => 9,  291 => 8,  272 => 7,  258 => 247,  256 => 229,  253 => 228,  251 => 226,  245 => 222,  231 => 217,  228 => 216,  223 => 215,  219 => 214,  195 => 193,  188 => 189,  184 => 188,  180 => 187,  176 => 186,  139 => 152,  133 => 149,  127 => 146,  120 => 142,  114 => 139,  110 => 138,  106 => 137,  102 => 136,  84 => 121,  61 => 100,  59 => 8,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
\t<meta http-equiv=\"pragma\" content=\"no-cache\">
\t<meta http-equid=\"expires\" content=\"-1\">
        <title>{% block title %}port119{% endblock %}</title>
        {% block stylesheets %}
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">

\t\t<style type=\"text/css\">

\t\t#overlay {
  position: fixed; /* Sit on top of the page content */
  display: block; /* Hidden by default */
  width: 10%; /* Full width (cover the whole page) */
  height: 10%; /* Full height (cover the whole page) */
  top: 3%;
  left: 50;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
#text{
  padding: 0 12px;
  border: 0px solid teal;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 17px;
  background-color: rgba(0,0,0,0,5);
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
  border-style: none;
  border-color: red;
}


\t\t.link-container {
\t\t\tborder: 0px solid;
\t\t\twidth: 50%
\t\t\theight: 20px;
\t\t}
\t\t.link-container a {
\t\t\tdisplay: block;
\t\t\tbackground: #black;
\t\t\theight: 100%;
\t\t\ttext-align: left;
\t\t}
\t\t.link-container a:hover {
\t\t\tbackground: #f8f8f8;
\t\t}

\t\t.lcolor {
\t\t\tcolor: white;
\t\t}


.lewa_p, .prawa_p
{
   
}
.poszial_prawa
{
   float: right;
   text-align: right;
}
#top_s
{
   background: black;
   position: sticky;
   z-index: 99999;
   padding-top: 3px;
   padding-bottom: 3px;
   color: white;
   top: 0;
}
.cont
{
   width: 99%;
   margin: 0 auto;
}
.navbar
{
   padding: 0!important;
}
.nav-link, .navbar-brand
{
   padding-top: 0!important;
   padding-bottom: 0!important;
}

.lista li { list-style-type: none; }
\t\t</style>
\t\t
\t{% endblock %}
    </head>
    <body>


<div id=\"top_s\">
   
<div class=\"cont\">
<div class=\"poszial_top row\">
   
<div class=\"lewa_strona_top col-lg-6\">


<nav class=\"navbar navbar-expand-lg\">
  <a class=\"navbar-brand lcolor\" href=\"/\">port119</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item active\">
\t<b>
\t{{ username }}
\t</b>
        <!-- <a class=\"nav-link lcolor\" href=\"#\">// Andrzej // <span class=\"sr-only\">(current)</span></a> -->
      </li>

<!--
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"/settings\">Ustawienia</a>
      </li>
-->
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle lcolor\" href=\"#\" id=\"Wątki\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\tWątki
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"Wątki\">
          <a class=\"dropdown-item\" href=\"{{ path('group_own') }}\">Twoje wątki</a>
          <a class=\"dropdown-item\" href=\"{{ path('group_admin') }}\">Administrujesz</a>
          <a class=\"dropdown-item\" href=\"{{ path('group_sub') }}\">Subskrybujesz</a>
          <a class=\"dropdown-item\" href=\"{{ path('group_all') }}\">Wszystkie wątki</a>

          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"{{ path('group_add') }}\">Dodaj wątek</a>
        </div>
      </li>
\t<li class=\"nav-item\">
       \t<a class=\"nav-link active lcolor\" href=\"{{ path('wall') }}\">Blog</a>
\t</li>
\t<li class=\"nav-item\">
\t<a class=\"nav-link active lcolor\" href=\"{{ path('friends2') }}\">Znajomi</a>
\t</li>
\t<li class=\"nav-item\">
\t<a  class=\"nav-link active lcolor\" href=\"{{ path('user_gallery') }}\">Galeria</a>
\t</li>
    </ul>
  </div>
</nav>






  
</div>
<div class=\"prawa_strona_top col-lg-6\">
   

<div class=\"poszial_prawa row\">

<nav class=\"navbar navbar-expand-lg\">


  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle lcolor\" href=\"#\" id=\"Ustawienia\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\tUstawienia
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"Ustawienia\">
           <a class=\"dropdown-item\" href=\"{{ path('user_password') }}\">Hasło</a>
          <a class=\"dropdown-item\" href=\"{{ path('user_avatar') }}\">Awatar</a>
          <a class=\"dropdown-item\" href=\"{{ path('user_profile') }}\">Profil</a>
\t  <a class=\"dropdown-item\" href=\"{{ path('user_delete') }}\">Skasuj konto</a>
        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link active lcolor\" href=\"{{ path('fos_user_security_logout') }}\">logout</a>
    </ul>
  </div>
</nav>


</div>
</div>



</div>



</div>


</div>


{% for type, flashes in app.flashes() %}
        {% for flash in flashes %}
<div id=\"overlay\" onclick=\"hide_overlay();\">
  <div id=\"text\">{{ flash }}</div>
</div>

        {% endfor %}
{% endfor %}




        {% block body %}
\t{% endblock %}

\t{% block javascripts %}
<script>
var milisekundy = 30 * 1000;
function dokument_wczytany() {
    setTimeout(hide_overlay, milisekundy);
}
function hide_overlay() {
    document.getElementById(\"overlay\").style.display = \"none\";
}
document.onload = dokument_wczytany();
</script>

                <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
                <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>


\t{% endblock %}


\t</body>
</html>
", "base.html.twig", "/var/www/port119/templates/base.html.twig");
    }
}
