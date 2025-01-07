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

/* base.html.twig.ok */
class __TwigTemplate_ac4cc211262aca82bd1a365c83da5074e4f3a526aab3ec7611bccb09ad18f532 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig.ok"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig.ok"));

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
        // line 98
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
\t";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 118, $this->source); })()), "html", null, true);
        echo "
        <!-- <a class=\"nav-link lcolor\" href=\"#\">// Andrzej // <span class=\"sr-only\">(current)</span></a> -->
      </li>

<!--
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"/settings\">Ustawienia</a>
      </li>
-->
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle lcolor\" href=\"#\" id=\"Grupy\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Grupy
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"Grupy\">
          <a class=\"dropdown-item\" href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_own");
        echo "\">Twoje grupy</a>
          <a class=\"dropdown-item\" href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_admin");
        echo "\">Administrujesz</a>
          <a class=\"dropdown-item\" href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_sub");
        echo "\">Subskrybujesz</a>
          <a class=\"dropdown-item\" href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_all");
        echo "\">Wszystkie grupy</a>

          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_add");
        echo "\">Dodaj grupę</a>
        </div>
      </li>
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
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_password");
        echo "\">Hasło</a>
          <a class=\"dropdown-item\" href=\"";
        // line 173
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_avatar");
        echo "\">Awatar</a>
          <a class=\"dropdown-item\" href=\"";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile");
        echo "\">Profil</a>
        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link active lcolor\" href=\"";
        // line 178
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
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 199, $this->source); })()), "flashes", [], "method", false, false, false, 199));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 200
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 201
                echo "<div id=\"overlay\" onclick=\"hide_overlay();\">
  <div id=\"text\">";
                // line 202
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
        // line 207
        echo "



        ";
        // line 211
        $this->displayBlock('body', $context, $blocks);
        // line 213
        echo "
\t";
        // line 214
        $this->displayBlock('javascripts', $context, $blocks);
        // line 232
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
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
#text{
  padding: 10px;
  border: 5px solid teal;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 30px;
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
\t\t</style>
\t\t
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 211
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 212
        echo "\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 214
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 215
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
        return "base.html.twig.ok";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 215,  394 => 214,  384 => 212,  374 => 211,  276 => 9,  266 => 8,  247 => 7,  233 => 232,  231 => 214,  228 => 213,  226 => 211,  220 => 207,  206 => 202,  203 => 201,  198 => 200,  194 => 199,  170 => 178,  163 => 174,  159 => 173,  155 => 172,  118 => 138,  112 => 135,  108 => 134,  104 => 133,  100 => 132,  83 => 118,  61 => 98,  59 => 8,  55 => 7,  47 => 1,);
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
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
#text{
  padding: 10px;
  border: 5px solid teal;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 30px;
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
\t{{ username }}
        <!-- <a class=\"nav-link lcolor\" href=\"#\">// Andrzej // <span class=\"sr-only\">(current)</span></a> -->
      </li>

<!--
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"/settings\">Ustawienia</a>
      </li>
-->
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle lcolor\" href=\"#\" id=\"Grupy\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Grupy
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"Grupy\">
          <a class=\"dropdown-item\" href=\"{{ path('group_own') }}\">Twoje grupy</a>
          <a class=\"dropdown-item\" href=\"{{ path('group_admin') }}\">Administrujesz</a>
          <a class=\"dropdown-item\" href=\"{{ path('group_sub') }}\">Subskrybujesz</a>
          <a class=\"dropdown-item\" href=\"{{ path('group_all') }}\">Wszystkie grupy</a>

          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"{{ path('group_add') }}\">Dodaj grupę</a>
        </div>
      </li>
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
", "base.html.twig.ok", "/var/www/port119/templates/base.html.twig.ok");
    }
}
