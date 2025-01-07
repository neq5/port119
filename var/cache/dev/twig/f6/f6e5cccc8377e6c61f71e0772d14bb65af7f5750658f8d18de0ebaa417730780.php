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

/* port119/friends2.html.twig */
class __TwigTemplate_3643f937b035702f6044d2b9c6187c8ec8f722ccf78ff7beca61e0c0e0b5be6f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/friends2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/friends2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/friends2.html.twig", 1);
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
Friends

";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'widget');
        echo "






<button type=\"submit\" class=\"btn btnoutline-secondary\">Dodaj</button>
";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_end');
        echo "


Lista znajomych:
<br />

<table border=1>
<tr><td>User</td><td>Imię</td><td>Nazwisko</td><td>Akcja</td></tr>
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["frepo"]) || array_key_exists("frepo", $context) ? $context["frepo"] : (function () { throw new RuntimeError('Variable "frepo" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 25
            echo "<tr>
\t<td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepo"]) || array_key_exists("frepo", $context) ? $context["frepo"] : (function () { throw new RuntimeError('Variable "frepo" does not exist.', 26, $this->source); })()), $context["k"], [], "array", false, false, false, 26), "user", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["av"]) || array_key_exists("av", $context) ? $context["av"] : (function () { throw new RuntimeError('Variable "av" does not exist.', 26, $this->source); })()), $context["k"], [], "array", false, false, false, 26) != "BRAK")) {
                echo " <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["av"]) || array_key_exists("av", $context) ? $context["av"] : (function () { throw new RuntimeError('Variable "av" does not exist.', 26, $this->source); })()), $context["k"], [], "array", false, false, false, 26), "html", null, true);
                echo "\">";
            }
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepo"]) || array_key_exists("frepo", $context) ? $context["frepo"] : (function () { throw new RuntimeError('Variable "frepo" does not exist.', 26, $this->source); })()), $context["k"], [], "array", false, false, false, 26), "user", [], "any", false, false, false, 26), "username", [], "any", false, false, false, 26), "html", null, true);
            echo "</a></td>
\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepo"]) || array_key_exists("frepo", $context) ? $context["frepo"] : (function () { throw new RuntimeError('Variable "frepo" does not exist.', 27, $this->source); })()), $context["k"], [], "array", false, false, false, 27), "user", [], "any", false, false, false, 27), "firstname", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepo"]) || array_key_exists("frepo", $context) ? $context["frepo"] : (function () { throw new RuntimeError('Variable "frepo" does not exist.', 28, $this->source); })()), $context["k"], [], "array", false, false, false, 28), "user", [], "any", false, false, false, 28), "lastname", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("removefriend2", ["uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepo"]) || array_key_exists("frepo", $context) ? $context["frepo"] : (function () { throw new RuntimeError('Variable "frepo" does not exist.', 29, $this->source); })()), $context["k"], [], "array", false, false, false, 29), "user", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "pid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepo"]) || array_key_exists("frepo", $context) ? $context["frepo"] : (function () { throw new RuntimeError('Variable "frepo" does not exist.', 29, $this->source); })()), $context["k"], [], "array", false, false, false, 29), "party", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">Usuń</a></td>
</tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</table>


<br />
<br />
<br />
Zostałeś zaproszony przez:
<br />


<br />

<table border=1>
<tr><td>User</td><td>Imię</td><td>Nazwisko</td><td>Akcja</td></tr>
";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["frepotoconfirm"]) || array_key_exists("frepotoconfirm", $context) ? $context["frepotoconfirm"] : (function () { throw new RuntimeError('Variable "frepotoconfirm" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 48
            echo "<tr>
\t<td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepotoconfirm"]) || array_key_exists("frepotoconfirm", $context) ? $context["frepotoconfirm"] : (function () { throw new RuntimeError('Variable "frepotoconfirm" does not exist.', 49, $this->source); })()), $context["k"], [], "array", false, false, false, 49), "user", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["cav"]) || array_key_exists("cav", $context) ? $context["cav"] : (function () { throw new RuntimeError('Variable "cav" does not exist.', 49, $this->source); })()), $context["k"], [], "array", false, false, false, 49) != "BRAK")) {
                echo " <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cav"]) || array_key_exists("cav", $context) ? $context["cav"] : (function () { throw new RuntimeError('Variable "cav" does not exist.', 49, $this->source); })()), $context["k"], [], "array", false, false, false, 49), "html", null, true);
                echo "\">";
            }
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepotoconfirm"]) || array_key_exists("frepotoconfirm", $context) ? $context["frepotoconfirm"] : (function () { throw new RuntimeError('Variable "frepotoconfirm" does not exist.', 49, $this->source); })()), $context["k"], [], "array", false, false, false, 49), "user", [], "any", false, false, false, 49), "username", [], "any", false, false, false, 49), "html", null, true);
            echo "</a></td>
\t<td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepotoconfirm"]) || array_key_exists("frepotoconfirm", $context) ? $context["frepotoconfirm"] : (function () { throw new RuntimeError('Variable "frepotoconfirm" does not exist.', 50, $this->source); })()), $context["k"], [], "array", false, false, false, 50), "user", [], "any", false, false, false, 50), "firstname", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
\t<td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepotoconfirm"]) || array_key_exists("frepotoconfirm", $context) ? $context["frepotoconfirm"] : (function () { throw new RuntimeError('Variable "frepotoconfirm" does not exist.', 51, $this->source); })()), $context["k"], [], "array", false, false, false, 51), "user", [], "any", false, false, false, 51), "lastname", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confirm2", ["fid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepotoconfirm"]) || array_key_exists("frepotoconfirm", $context) ? $context["frepotoconfirm"] : (function () { throw new RuntimeError('Variable "frepotoconfirm" does not exist.', 52, $this->source); })()), $context["k"], [], "array", false, false, false, 52), "id", [], "any", false, false, false, 52), "uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepotoconfirm"]) || array_key_exists("frepotoconfirm", $context) ? $context["frepotoconfirm"] : (function () { throw new RuntimeError('Variable "frepotoconfirm" does not exist.', 52, $this->source); })()), $context["k"], [], "array", false, false, false, 52), "user", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "pid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepotoconfirm"]) || array_key_exists("frepotoconfirm", $context) ? $context["frepotoconfirm"] : (function () { throw new RuntimeError('Variable "frepotoconfirm" does not exist.', 52, $this->source); })()), $context["k"], [], "array", false, false, false, 52), "party", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">potwierdź</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cancel2", ["fid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frepotoconfirm"]) || array_key_exists("frepotoconfirm", $context) ? $context["frepotoconfirm"] : (function () { throw new RuntimeError('Variable "frepotoconfirm" does not exist.', 52, $this->source); })()), $context["k"], [], "array", false, false, false, 52), "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">anuluj</a> </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
</table>

----
<br />

Wysłałeś zaproszenie do:
<br />

<table border=1>
<tr><td>User</td><td>Imię</td><td>Nazwisko</td><td>Akcja</td></tr>

";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["freporequested"]) || array_key_exists("freporequested", $context) ? $context["freporequested"] : (function () { throw new RuntimeError('Variable "freporequested" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 68
            echo "<tr>
\t<td><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["freporequested"]) || array_key_exists("freporequested", $context) ? $context["freporequested"] : (function () { throw new RuntimeError('Variable "freporequested" does not exist.', 69, $this->source); })()), $context["k"], [], "array", false, false, false, 69), "party", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["rav"]) || array_key_exists("rav", $context) ? $context["rav"] : (function () { throw new RuntimeError('Variable "rav" does not exist.', 69, $this->source); })()), $context["k"], [], "array", false, false, false, 69) != "BRAK")) {
                echo " <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rav"]) || array_key_exists("rav", $context) ? $context["rav"] : (function () { throw new RuntimeError('Variable "rav" does not exist.', 69, $this->source); })()), $context["k"], [], "array", false, false, false, 69), "html", null, true);
                echo "\">";
            }
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["freporequested"]) || array_key_exists("freporequested", $context) ? $context["freporequested"] : (function () { throw new RuntimeError('Variable "freporequested" does not exist.', 69, $this->source); })()), $context["k"], [], "array", false, false, false, 69), "party", [], "any", false, false, false, 69), "username", [], "any", false, false, false, 69), "html", null, true);
            echo "</a></td>
\t<td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["freporequested"]) || array_key_exists("freporequested", $context) ? $context["freporequested"] : (function () { throw new RuntimeError('Variable "freporequested" does not exist.', 70, $this->source); })()), $context["k"], [], "array", false, false, false, 70), "party", [], "any", false, false, false, 70), "firstname", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
\t<td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["freporequested"]) || array_key_exists("freporequested", $context) ? $context["freporequested"] : (function () { throw new RuntimeError('Variable "freporequested" does not exist.', 71, $this->source); })()), $context["k"], [], "array", false, false, false, 71), "party", [], "any", false, false, false, 71), "lastname", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cancel2", ["fid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["freporequested"]) || array_key_exists("freporequested", $context) ? $context["freporequested"] : (function () { throw new RuntimeError('Variable "freporequested" does not exist.', 72, $this->source); })()), $context["k"], [], "array", false, false, false, 72), "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\">anuluj</a> </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "                <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
                <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js\"></script>

<script>

\$(\"#friends2_accounts\").on(\"change paste keyup\", zmiana);


function zmiana() {
        var tekst = \$(this).val();


        const sid = 'ldmduhlbjhic3frqjqktm1uc3i';

//      const sid = '9555i9e0s6qsg331mjdmq8kkhi';
//      const sid = '5127bf16ac39446eb523f8e762f9bcdf';


\tconst host  = \"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 102, $this->source); })()), "html", null, true);
        echo "\";

        const len = tekst.length;
        console.log(\"len: \" + len);

        if(len >= 3) 
        {


                \$.ajaxSetup({
                //      headers: {
                                //\"Cookie\" : sid,
                //      }
                        //withCredentials: true
                        crossDomain: true,
                     xhrFields: {
                        withCredentials: true
                        },

                });


                //\$.getJSON(\"https://port119.pl/jq\",
                \$.getJSON(host + \"/top/jq\",
                {
                        \"arg\": tekst,
        //              \"headers\": { Cookie: \"SID=\" + sid },
                }
                ).done(wynik);
        }
}

function wynik(wartosc) {
        //\$('#selekt').children().remove();
        \$('#friends2_selekt').children().remove();
        for (opcja in wartosc) {
                console.log(wartosc[opcja] + \" \" + opcja);
                \$('#friends2_selekt').append(\$('<option>', {
                    //value:  wartosc[opcja],
                    //text:   opcja
                        value: opcja,
                        text: wartosc[opcja]
                }));
        }
}

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/friends2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 102,  261 => 82,  251 => 81,  238 => 75,  229 => 72,  225 => 71,  221 => 70,  210 => 69,  207 => 68,  203 => 67,  189 => 55,  178 => 52,  174 => 51,  170 => 50,  159 => 49,  156 => 48,  152 => 47,  136 => 33,  126 => 29,  122 => 28,  118 => 27,  107 => 26,  104 => 25,  100 => 24,  89 => 16,  78 => 8,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

Friends

{{ form_start(form) }}
{{ form_widget(form) }}






<button type=\"submit\" class=\"btn btnoutline-secondary\">Dodaj</button>
{{ form_end(form) }}


Lista znajomych:
<br />

<table border=1>
<tr><td>User</td><td>Imię</td><td>Nazwisko</td><td>Akcja</td></tr>
{% for k, v in frepo %}
<tr>
\t<td><a href=\"{{ path('userspace', {'uid': frepo[k].user.id}) }}\">{% if av[k] != \"BRAK\" %} <img src=\"{{ av[k] }}\">{% endif %}{{ frepo[k].user.username }}</a></td>
\t<td>{{ frepo[k].user.firstname }}</td>
\t<td>{{ frepo[k].user.lastname }}</td>
\t<td><a href=\"{{ path('removefriend2', {'uid': frepo[k].user.id, 'pid': frepo[k].party.id}) }}\">Usuń</a></td>
</tr>

{% endfor %}
</table>


<br />
<br />
<br />
Zostałeś zaproszony przez:
<br />


<br />

<table border=1>
<tr><td>User</td><td>Imię</td><td>Nazwisko</td><td>Akcja</td></tr>
{% for k, v in frepotoconfirm %}
<tr>
\t<td><a href=\"{{ path('userspace', {'uid': frepotoconfirm[k].user.id}) }}\">{% if cav[k] != \"BRAK\" %} <img src=\"{{ cav[k] }}\">{% endif %}{{ frepotoconfirm[k].user.username }}</a></td>
\t<td>{{ frepotoconfirm[k].user.firstname }}</td>
\t<td>{{ frepotoconfirm[k].user.lastname }}</td>
\t<td><a href=\"{{ path('confirm2', {'fid': frepotoconfirm[k].id, 'uid': frepotoconfirm[k].user.id, 'pid': frepotoconfirm[k].party.id}) }}\">potwierdź</a> <a href=\"{{ path('cancel2', {'fid': frepotoconfirm[k].id}) }}\">anuluj</a> </td>
</tr>
{% endfor %}

</table>

----
<br />

Wysłałeś zaproszenie do:
<br />

<table border=1>
<tr><td>User</td><td>Imię</td><td>Nazwisko</td><td>Akcja</td></tr>

{% for k, v in freporequested %}
<tr>
\t<td><a href=\"{{ path('userspace', {'uid': freporequested[k].party.id}) }}\">{% if rav[k] != \"BRAK\" %} <img src=\"{{ rav[k] }}\">{% endif %}{{ freporequested[k].party.username }}</a></td>
\t<td>{{ freporequested[k].party.firstname }}</td>
\t<td>{{ freporequested[k].party.lastname }}</td>
\t<td><a href=\"{{ path('cancel2', {'fid': freporequested[k].id}) }}\">anuluj</a> </td>
</tr>
{% endfor %}

</table>

{% endblock %}


{% block javascripts %}
                <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
                <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js\"></script>

<script>

\$(\"#friends2_accounts\").on(\"change paste keyup\", zmiana);


function zmiana() {
        var tekst = \$(this).val();


        const sid = 'ldmduhlbjhic3frqjqktm1uc3i';

//      const sid = '9555i9e0s6qsg331mjdmq8kkhi';
//      const sid = '5127bf16ac39446eb523f8e762f9bcdf';


\tconst host  = \"{{ host }}\";

        const len = tekst.length;
        console.log(\"len: \" + len);

        if(len >= 3) 
        {


                \$.ajaxSetup({
                //      headers: {
                                //\"Cookie\" : sid,
                //      }
                        //withCredentials: true
                        crossDomain: true,
                     xhrFields: {
                        withCredentials: true
                        },

                });


                //\$.getJSON(\"https://port119.pl/jq\",
                \$.getJSON(host + \"/top/jq\",
                {
                        \"arg\": tekst,
        //              \"headers\": { Cookie: \"SID=\" + sid },
                }
                ).done(wynik);
        }
}

function wynik(wartosc) {
        //\$('#selekt').children().remove();
        \$('#friends2_selekt').children().remove();
        for (opcja in wartosc) {
                console.log(wartosc[opcja] + \" \" + opcja);
                \$('#friends2_selekt').append(\$('<option>', {
                    //value:  wartosc[opcja],
                    //text:   opcja
                        value: opcja,
                        text: wartosc[opcja]
                }));
        }
}

</script>
{% endblock %}
", "port119/friends2.html.twig", "/var/www/port119/templates/port119/friends2.html.twig");
    }
}
