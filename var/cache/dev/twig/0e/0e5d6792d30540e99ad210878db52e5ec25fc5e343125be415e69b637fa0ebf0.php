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

/* root2.html.twig */
class __TwigTemplate_9f2f6bd5c25b762f28bcfbcd689d54b270ad853a7df7bd5b3ada58eb7e6c551f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "root2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "root2.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t<meta charset=\"UTF-8\">
\t<meta http-equiv=\"pragma\" content=\"no-cache\">
\t<neta http-equiv=\"expires\" content=\"-1\">
\t<title>port119</title>

        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 135
        echo "    </head>



<div id=\"top_s\">

<div class=\"cont\">
<div class=\"poszial_top row\">

<div class=\"lewa_strona_top col-lg-6\">


<nav class=\"navbar navbar-expand-lg\">
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item active\">
        <b>
\t\t<a class=\"navbar-brand lcolor\" href=\"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hello_world");
        echo "\">zaloguj</a>
        </b>
      </li>


</div>
</nav>
</div>
</div>
</div>
</div>

";
        // line 167
        $this->displayBlock('body', $context, $blocks);
        // line 169
        echo "

";
        // line 171
        $this->displayBlock('javascripts', $context, $blocks);
        // line 177
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css\">
        <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
        <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>

                <style type=\"text/css\">

                #overlay {
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


                .link-container {
                        border: 0px solid;
                        width: 50%
                        height: 20px;
                }
                .link-container a {
                        display: block;
                        background: #black;
                        height: 100%;
                        text-align: left;
                }
                .link-container a:hover {
                        background: #f8f8f8;
                }

                .lcolor {
                        color: white;
                }


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

body 
{
        background-image: linear-gradient(to right top, #f4f4f4, #efefef, #eaeaea, #e5e5e5, #e0e0e0);
}

.box
{
        border-radius: 0px 0px 5px 5px;
        box-shadow: 0px 5px 16px -8px rgba(0,0,0,0.27);
        margin-bottom: 20px;

}

top_color
{
        background: #414141;
        border-radius: 10px 10px 0px 0px;
        margin-top: 20px;
        color: white;
        padding: 10px;
}

.all
{
        margin: 0 auto;
        width: 95%;
}

                </style>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 167
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 171
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 172
        echo "<script>
\tAOS.init();
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "root2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 172,  277 => 171,  259 => 167,  124 => 9,  114 => 8,  102 => 177,  100 => 171,  96 => 169,  94 => 167,  79 => 155,  57 => 135,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
\t<head>
\t<meta charset=\"UTF-8\">
\t<meta http-equiv=\"pragma\" content=\"no-cache\">
\t<neta http-equiv=\"expires\" content=\"-1\">
\t<title>port119</title>

        {% block stylesheets %}

        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css\">
        <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
        <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>

                <style type=\"text/css\">

                #overlay {
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


                .link-container {
                        border: 0px solid;
                        width: 50%
                        height: 20px;
                }
                .link-container a {
                        display: block;
                        background: #black;
                        height: 100%;
                        text-align: left;
                }
                .link-container a:hover {
                        background: #f8f8f8;
                }

                .lcolor {
                        color: white;
                }


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

body 
{
        background-image: linear-gradient(to right top, #f4f4f4, #efefef, #eaeaea, #e5e5e5, #e0e0e0);
}

.box
{
        border-radius: 0px 0px 5px 5px;
        box-shadow: 0px 5px 16px -8px rgba(0,0,0,0.27);
        margin-bottom: 20px;

}

top_color
{
        background: #414141;
        border-radius: 10px 10px 0px 0px;
        margin-top: 20px;
        color: white;
        padding: 10px;
}

.all
{
        margin: 0 auto;
        width: 95%;
}

                </style>

        {% endblock %}
    </head>



<div id=\"top_s\">

<div class=\"cont\">
<div class=\"poszial_top row\">

<div class=\"lewa_strona_top col-lg-6\">


<nav class=\"navbar navbar-expand-lg\">
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item active\">
        <b>
\t\t<a class=\"navbar-brand lcolor\" href=\"{{ path('hello_world') }}\">zaloguj</a>
        </b>
      </li>


</div>
</nav>
</div>
</div>
</div>
</div>

{% block body %}
{% endblock %}


{% block javascripts %}
<script>
\tAOS.init();
</script>

{% endblock %}
</body>
</html>
", "root2.html.twig", "/var/www/port119/templates/root2.html.twig");
    }
}
