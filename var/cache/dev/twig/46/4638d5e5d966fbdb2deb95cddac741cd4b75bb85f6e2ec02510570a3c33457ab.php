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

/* port119/groups_user_mng.html.twig */
class __TwigTemplate_4d5b14a211d9823c2d8efa738aba78bb8d04e177d41a8f1886ba0428f892016f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/groups_user_mng.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/groups_user_mng.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/groups_user_mng.html.twig", 1);
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
hello world
<br /><br />

Dodaj wątek

";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["groupform"]) || array_key_exists("groupform", $context) ? $context["groupform"] : (function () { throw new RuntimeError('Variable "groupform" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["groupform"]) || array_key_exists("groupform", $context) ? $context["groupform"] : (function () { throw new RuntimeError('Variable "groupform" does not exist.', 11, $this->source); })()), 'widget');
        echo "
<button type=\"submit\" class=\"btn btnoutline-secondary\">Dodaj wątek</button>
";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["groupform"]) || array_key_exists("groupform", $context) ? $context["groupform"] : (function () { throw new RuntimeError('Variable "groupform" does not exist.', 13, $this->source); })()), 'form_end');
        echo "

<hr>

Twoje wątki (";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["groupscnt"]) || array_key_exists("groupscnt", $context) ? $context["groupscnt"] : (function () { throw new RuntimeError('Variable "groupscnt" does not exist.', 17, $this->source); })()), "html", null, true);
        echo ")<br /><br />


<table border=1>
\t\t<tr><td>Awatar</td><td>Nazwa</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td><td>Akcja</td></tr>

";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 24
            echo "
<tr>

<td><img src=\"/groupavatar/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo ".jpeg\"></td>

<td>
<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2", ["name" => twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 30), "page" => 1]), "html", null, true);
            echo "\">

";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</a>
</td>

<td>

";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 38
                echo "\t";
                if (($context["key"] == twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 38))) {
                    // line 39
                    echo "\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
                    foreach ($context['_seq'] as $context["key1"] => $context["value1"]) {
                        // line 40
                        echo "\t\t\t";
                        echo twig_escape_filter($this->env, $context["key1"], "html", null, true);
                        echo "<br />
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key1'], $context['value1'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "

</td>


<td class=\"text-center\">

";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, $context["group"], "active", [], "any", false, false, false, 51) != false)) {
                // line 52
                echo "        aktywny
";
            } else {
                // line 54
                echo "        nieaktywny
";
            }
            // line 56
            echo "
</td>


<td class=\"text-center\">

";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, $context["group"], "open", [], "any", false, false, false, 62) != false)) {
                // line 63
                echo "        otwarty
";
            } else {
                // line 65
                echo "        zamknięty
";
            }
            // line 67
            echo "
</td><td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new RuntimeError('Variable "abouts" does not exist.', 68, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 68), [], "array", false, false, false, 68), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "createdat", [], "any", false, false, false, 68), "Y-m-d H-i-s"), "html", null, true);
            echo "</td><td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\">pokaż</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\">edycja</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\">usuń</a></td></tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "

</table>


</table>

<hr>

- administrujesz 
<br />

<table border=1>
\t\t<tr><td>Właściciel</td><td>Awatar</td><td>Nazwa</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td><td>Akcja</td></tr>

";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["adm"]) {
            // line 87
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, $context["adm"], "accounts", [], "any", false, false, false, 87) == (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 87, $this->source); })()))) {
                // line 88
                echo "\t<tr><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 88), "owner", [], "any", false, false, false, 88), "html", null, true);
                echo "</td><td><img src=\"/groupavatar/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 88), "id", [], "any", false, false, false, 88), "html", null, true);
                echo ".jpeg\"></td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2", ["name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88), "page" => 1]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88), "html", null, true);
                echo "</a></td><td>

\t";
                // line 90
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 90, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 91
                    echo "\t\t";
                    if (($context["k"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 91), "name", [], "any", false, false, false, 91))) {
                        // line 92
                        echo "\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["v"]);
                        foreach ($context['_seq'] as $context["k1"] => $context["v1"]) {
                            // line 93
                            echo "\t\t\t\t";
                            echo twig_escape_filter($this->env, $context["k1"], "html", null, true);
                            echo "<br />
\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k1'], $context['v1'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 95
                        echo "\t\t";
                    }
                    // line 96
                    echo "\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "
</td>

<td>

";
                // line 102
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 102), "active", [], "any", false, false, false, 102) != false)) {
                    // line 103
                    echo "\taktywny
";
                } else {
                    // line 105
                    echo "\tnieaktywny
";
                }
                // line 107
                echo "</td><td>

";
                // line 109
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 109), "open", [], "any", false, false, false, 109) != false)) {
                    // line 110
                    echo "\totwarty
";
                } else {
                    // line 112
                    echo "\tzamknięty
";
                }
                // line 114
                echo "</td>
<td>";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new RuntimeError('Variable "abouts" does not exist.', 115, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 115), "id", [], "any", false, false, false, 115), [], "array", false, false, false, 115), "html", null, true);
                echo "</td>

<td>";
                // line 117
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 117), "createdat", [], "any", false, false, false, 117), "Y-m-d H-i-s"), "html", null, true);
                echo "</td>


<td>
<a href=\"";
                // line 121
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 121), "id", [], "any", false, false, false, 121)]), "html", null, true);
                echo "\">pokaż</a> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adm"], "groups", [], "any", false, false, false, 121), "id", [], "any", false, false, false, 121)]), "html", null, true);
                echo "\">edycja</a>
</td>
</tr>

";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "

</table>

<br /><br />
Subskrybujesz<br />
<table border=1>
\t\t<tr><td>Właściciel</td><td>Awatar</td><td>Nazwa</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td><td>Akcja</td></tr>



";
        // line 138
        $context["subhash"] = [];
        // line 139
        echo "
";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 140, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
            // line 141
            echo "

<tr><td>";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 143), "owner", [], "any", false, false, false, 143), "html", null, true);
            echo "</td><td><img src=\"/groupavatar/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 143), "id", [], "any", false, false, false, 143), "html", null, true);
            echo ".jpeg\"></td><td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2", ["name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 143), "name", [], "any", false, false, false, 143), "page" => 1]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 143), "name", [], "any", false, false, false, 143), "html", null, true);
            echo "</a></td>
<td>
\t";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 145, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 146
                echo "\t\t";
                if (($context["k"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 146), "name", [], "any", false, false, false, 146))) {
                    // line 147
                    echo "\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["v"]);
                    foreach ($context['_seq'] as $context["k1"] => $context["v1"]) {
                        // line 148
                        echo "\t\t\t\t";
                        echo twig_escape_filter($this->env, $context["k1"], "html", null, true);
                        echo "<br />
\t\t\t\t";
                        // line 149
                        $context["subhash"] = twig_array_merge((isset($context["subhash"]) || array_key_exists("subhash", $context) ? $context["subhash"] : (function () { throw new RuntimeError('Variable "subhash" does not exist.', 149, $this->source); })()), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 149), "name", [], "any", false, false, false, 149) => 1]);
                        // line 150
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k1'], $context['v1'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 151
                    echo "\t\t";
                }
                // line 152
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "</td>
<td>
";
            // line 155
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 155), "active", [], "any", false, false, false, 155) != false)) {
                // line 156
                echo "\taktywny
";
            } else {
                // line 158
                echo "\tnieakwytwny
";
            }
            // line 160
            echo "</td>
<td>
";
            // line 162
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 162), "open", [], "any", false, false, false, 162) != false)) {
                // line 163
                echo "\totwarty
";
            } else {
                // line 165
                echo "\tzamknięty
";
            }
            // line 167
            echo "</td>
<td>
";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new RuntimeError('Variable "abouts" does not exist.', 169, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 169), "id", [], "any", false, false, false, 169), [], "array", false, false, false, 169), "html", null, true);
            echo "</td>

<td>";
            // line 171
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 171), "createdat", [], "any", false, false, false, 171), "Y-m-d H-i-s"), "html", null, true);
            echo "</td>

<td><a href=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_unsubscribe", ["groupid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 173), "id", [], "any", false, false, false, 173)]), "html", null, true);
            echo "\">nie subskrybuj</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub"], "groups", [], "any", false, false, false, 173), "id", [], "any", false, false, false, 173)]), "html", null, true);
            echo "\">pokaż</a></td>


</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "</table>

<br /><br />
Wszystkie wątki<br />


<table border=1>
\t\t<tr><td>Właściciel</td><td>Awatar</td><td>Nazwa</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td><td>Akcja</td></tr>
";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allgroups"]) || array_key_exists("allgroups", $context) ? $context["allgroups"] : (function () { throw new RuntimeError('Variable "allgroups" does not exist.', 186, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
            // line 187
            echo "<tr><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "owner", [], "any", false, false, false, 187), "html", null, true);
            echo "</td><td><img src=\"/groupavatar/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 187), "html", null, true);
            echo ".jpeg\"></td><td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discuss2", ["name" => twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 187), "page" => 1]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 187), "html", null, true);
            echo "</a></td>
<td>
";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 189, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 190
                echo "\t";
                if (($context["k"] == twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 190))) {
                    // line 191
                    echo "\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["v"]);
                    foreach ($context['_seq'] as $context["k1"] => $context["v1"]) {
                        // line 192
                        echo "\t\t\t";
                        echo twig_escape_filter($this->env, $context["k1"], "html", null, true);
                        echo "<br />
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k1'], $context['v1'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 194
                    echo "\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "</td>

<td>
";
            // line 199
            if ((twig_get_attribute($this->env, $this->source, $context["ag"], "active", [], "any", false, false, false, 199) != false)) {
                // line 200
                echo "aktywny
";
            } else {
                // line 202
                echo "nieaktywny
";
            }
            // line 204
            echo "</td>
<td>
";
            // line 206
            if ((twig_get_attribute($this->env, $this->source, $context["ag"], "open", [], "any", false, false, false, 206) != false)) {
                // line 207
                echo "otwarty
";
            } else {
                // line 209
                echo "zamknięty
";
            }
            // line 211
            echo "</td>
<td>";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new RuntimeError('Variable "abouts" does not exist.', 212, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 212), [], "array", false, false, false, 212), "html", null, true);
            echo "
</td>
<td>
";
            // line 215
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "createdat", [], "any", false, false, false, 215), "Y-m-d H-i-s"), "html", null, true);
            echo "
</td>

<td>


";
            // line 221
            if (twig_get_attribute($this->env, $this->source, ($context["subhash"] ?? null), twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 221), [], "array", true, true, false, 221)) {
                // line 222
                echo "
<a href=\"";
                // line 223
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_unsubscribe", ["groupid" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 223)]), "html", null, true);
                echo "\">nie subskrybuj</a>

";
            } else {
                // line 226
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_subscribe", ["groupid" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 226)]), "html", null, true);
                echo "\">subskrybuj</a>
";
            }
            // line 228
            echo "
<!--

";
            // line 231
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subhash"]) || array_key_exists("subhash", $context) ? $context["subhash"] : (function () { throw new RuntimeError('Variable "subhash" does not exist.', 231, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 232
                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo " blah
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "-->

<!--
<a href=\"";
            // line 237
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_subscribe", ["groupid" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 237)]), "html", null, true);
            echo "\">subskrybuj</a>
-->\t
<a href=\"";
            // line 239
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 239)]), "html", null, true);
            echo "\">pokaż</a>
</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "</table>
<br /><br />
- subskrybujesz [ nie subskrybuj ]<br>
- lista wątków wszystkich - [ subskrybuj ]
<br /><br />
<br /><br />
<br /><br />
<br /><br />



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/groups_user_mng.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  623 => 243,  613 => 239,  608 => 237,  603 => 234,  593 => 232,  589 => 231,  584 => 228,  578 => 226,  572 => 223,  569 => 222,  567 => 221,  558 => 215,  552 => 212,  549 => 211,  545 => 209,  541 => 207,  539 => 206,  535 => 204,  531 => 202,  527 => 200,  525 => 199,  520 => 196,  513 => 194,  504 => 192,  499 => 191,  496 => 190,  492 => 189,  480 => 187,  476 => 186,  466 => 178,  453 => 173,  448 => 171,  443 => 169,  439 => 167,  435 => 165,  431 => 163,  429 => 162,  425 => 160,  421 => 158,  417 => 156,  415 => 155,  411 => 153,  405 => 152,  402 => 151,  396 => 150,  394 => 149,  389 => 148,  384 => 147,  381 => 146,  377 => 145,  366 => 143,  362 => 141,  358 => 140,  355 => 139,  353 => 138,  340 => 127,  326 => 121,  319 => 117,  314 => 115,  311 => 114,  307 => 112,  303 => 110,  301 => 109,  297 => 107,  293 => 105,  289 => 103,  287 => 102,  280 => 97,  274 => 96,  271 => 95,  262 => 93,  257 => 92,  254 => 91,  250 => 90,  238 => 88,  235 => 87,  231 => 86,  214 => 71,  197 => 68,  194 => 67,  190 => 65,  186 => 63,  184 => 62,  176 => 56,  172 => 54,  168 => 52,  166 => 51,  157 => 44,  150 => 42,  141 => 40,  136 => 39,  133 => 38,  129 => 37,  121 => 32,  116 => 30,  110 => 27,  105 => 24,  101 => 23,  92 => 17,  85 => 13,  80 => 11,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

hello world
<br /><br />

Dodaj wątek

{{ form_start(groupform) }}
{{ form_widget(groupform) }}
<button type=\"submit\" class=\"btn btnoutline-secondary\">Dodaj wątek</button>
{{ form_end(groupform) }}

<hr>

Twoje wątki ({{ groupscnt }})<br /><br />


<table border=1>
\t\t<tr><td>Awatar</td><td>Nazwa</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td><td>Akcja</td></tr>

{% for group in groups %}

<tr>

<td><img src=\"/groupavatar/{{ group.id }}.jpeg\"></td>

<td>
<a href=\"{{ path('discuss2', {'name': group.name, 'page': 1}) }}\">

{{ group.name }}</a>
</td>

<td>

{% for key, value in gcdn %}
\t{% if key == group.name %}
\t\t{% for key1, value1 in value %}
\t\t\t{{ key1 }}<br />
\t\t{% endfor %}
\t{% endif %}
{% endfor %}


</td>


<td class=\"text-center\">

{% if group.active != false %}
        aktywny
{% else %}
        nieaktywny
{% endif %}

</td>


<td class=\"text-center\">

{% if group.open != false %}
        otwarty
{% else %}
        zamknięty
{% endif %}

</td><td>{{ abouts[group.id] }}</td><td>{{ group.createdat|date('Y-m-d H-i-s') }}</td><td><a href=\"{{ path('group_user_show', {'id': group.id}) }}\">pokaż</a> <a href=\"{{ path('group_user_edit', {'id': group.id}) }}\">edycja</a> <a href=\"{{ path('group_user_delete', {'id': group.id}) }}\">usuń</a></td></tr>

{% endfor %}


</table>


</table>

<hr>

- administrujesz 
<br />

<table border=1>
\t\t<tr><td>Właściciel</td><td>Awatar</td><td>Nazwa</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td><td>Akcja</td></tr>

{% for adm in admin %}
  {% if adm.accounts == username %}
\t<tr><td>{{ adm.groups.owner }}</td><td><img src=\"/groupavatar/{{ adm.groups.id }}.jpeg\"></td><td><a href=\"{{ path('discuss2', {'name': adm.groups.name, 'page': 1}) }}\">{{ adm.groups.name }}</a></td><td>

\t{% for k, v in gcdn %}
\t\t{% if k == adm.groups.name %}
\t\t\t{% for k1, v1 in v %}
\t\t\t\t{{ k1 }}<br />
\t\t\t{% endfor %}
\t\t{% endif %}
\t{% endfor %}

</td>

<td>

{% if adm.groups.active != false %}
\taktywny
{% else %}
\tnieaktywny
{% endif %}
</td><td>

{% if adm.groups.open != false %}
\totwarty
{% else %}
\tzamknięty
{% endif %}
</td>
<td>{{ abouts[adm.groups.id] }}</td>

<td>{{ adm.groups.createdat|date('Y-m-d H-i-s') }}</td>


<td>
<a href=\"{{ path('group_user_show', {'id': adm.groups.id}) }}\">pokaż</a> <a href=\"{{ path('group_user_edit', {'id': adm.groups.id}) }}\">edycja</a>
</td>
</tr>

{% endif %}
{% endfor %}


</table>

<br /><br />
Subskrybujesz<br />
<table border=1>
\t\t<tr><td>Właściciel</td><td>Awatar</td><td>Nazwa</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td><td>Akcja</td></tr>



{% set subhash = [] %}

{% for sub in subscriptions %}


<tr><td>{{ sub.groups.owner }}</td><td><img src=\"/groupavatar/{{ sub.groups.id }}.jpeg\"></td><td><a href=\"{{ path('discuss2', {'name': sub.groups.name, 'page': 1}) }}\">{{ sub.groups.name }}</a></td>
<td>
\t{% for k, v in gcdn %}
\t\t{% if k == sub.groups.name %}
\t\t\t{% for k1, v1 in v %}
\t\t\t\t{{ k1 }}<br />
\t\t\t\t{% set subhash = subhash|merge({(sub.groups.name): 1}) %}
\t\t\t{% endfor %}
\t\t{% endif %}
\t{% endfor %}
</td>
<td>
{% if sub.groups.active != false %}
\taktywny
{% else %}
\tnieakwytwny
{% endif %}
</td>
<td>
{% if sub.groups.open != false %}
\totwarty
{% else %}
\tzamknięty
{% endif %}
</td>
<td>
{{ abouts[sub.groups.id] }}</td>

<td>{{ sub.groups.createdat|date('Y-m-d H-i-s') }}</td>

<td><a href=\"{{ path('group_user_unsubscribe', {'groupid': sub.groups.id}) }}\">nie subskrybuj</a> <a href=\"{{ path('group_user_show', {'id': sub.groups.id}) }}\">pokaż</a></td>


</tr>
{% endfor %}
</table>

<br /><br />
Wszystkie wątki<br />


<table border=1>
\t\t<tr><td>Właściciel</td><td>Awatar</td><td>Nazwa</td><td>Admini</td><td>Aktywny?</td><td>Otwarty?</td><td>Opis</td><td>Data utworzenia</td><td>Akcja</td></tr>
{% for ag in allgroups %}
<tr><td>{{ ag.owner }}</td><td><img src=\"/groupavatar/{{ ag.id }}.jpeg\"></td><td><a href=\"{{ path('discuss2', {'name': ag.name, 'page': 1}) }}\">{{ ag.name }}</a></td>
<td>
{% for k, v in gcdn %}
\t{% if k == ag.name %}
\t\t{% for k1, v1 in v %}
\t\t\t{{ k1 }}<br />
\t\t{% endfor %}
\t{% endif %}
{% endfor %}
</td>

<td>
{% if ag.active != false %}
aktywny
{% else %}
nieaktywny
{% endif %}
</td>
<td>
{% if ag.open != false %}
otwarty
{% else %}
zamknięty
{% endif %}
</td>
<td>{{ abouts[ag.id] }}
</td>
<td>
{{ ag.createdat|date('Y-m-d H-i-s') }}
</td>

<td>


{% if subhash[ag.name] is defined %}

<a href=\"{{ path('group_user_unsubscribe', {'groupid': ag.id}) }}\">nie subskrybuj</a>

{% else %}
<a href=\"{{ path('group_user_subscribe', {'groupid': ag.id}) }}\">subskrybuj</a>
{% endif %}

<!--

{% for k, v in subhash %}
{{ k }} {{ v }} blah
{% endfor %}
-->

<!--
<a href=\"{{ path('group_user_subscribe', {'groupid': ag.id}) }}\">subskrybuj</a>
-->\t
<a href=\"{{ path('group_user_show', {'id': ag.id })}}\">pokaż</a>
</td>
</tr>
{% endfor %}
</table>
<br /><br />
- subskrybujesz [ nie subskrybuj ]<br>
- lista wątków wszystkich - [ subskrybuj ]
<br /><br />
<br /><br />
<br /><br />
<br /><br />



{% endblock %}
", "port119/groups_user_mng.html.twig", "/var/www/port119/templates/port119/groups_user_mng.html.twig");
    }
}
