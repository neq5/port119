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

/* port119/group_user_edit.html.twig */
class __TwigTemplate_564f50ea1fd0934ae70878159d5345559b31a93e4653ae11d023096b9db4bbd8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/group_user_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/group_user_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/group_user_edit.html.twig", 1);
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
Awatar:

";
        // line 7
        if (((isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 7, $this->source); })()) != "brak")) {
            // line 8
            echo "<img src=\"";
            echo (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 8, $this->source); })());
            echo "\">
";
        }
        // line 10
        echo "

";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["avatarform"]) || array_key_exists("avatarform", $context) ? $context["avatarform"] : (function () { throw new RuntimeError('Variable "avatarform" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["avatarform"]) || array_key_exists("avatarform", $context) ? $context["avatarform"] : (function () { throw new RuntimeError('Variable "avatarform" does not exist.', 13, $this->source); })()), 'widget');
        echo "
<button type=\"submit\" class=\"btn btnoutline-secondary\">Zapisz</button>
";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["avatarform"]) || array_key_exists("avatarform", $context) ? $context["avatarform"] : (function () { throw new RuntimeError('Variable "avatarform" does not exist.', 15, $this->source); })()), 'form_end');
        echo "

Edytuj wątek

";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["groupform"]) || array_key_exists("groupform", $context) ? $context["groupform"] : (function () { throw new RuntimeError('Variable "groupform" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["groupform"]) || array_key_exists("groupform", $context) ? $context["groupform"] : (function () { throw new RuntimeError('Variable "groupform" does not exist.', 20, $this->source); })()), 'widget');
        echo "
<button type=\"submit\" class=\"btn btnoutline-secondary\">Zapisz</button>
";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["groupform"]) || array_key_exists("groupform", $context) ? $context["groupform"] : (function () { throw new RuntimeError('Variable "groupform" does not exist.', 22, $this->source); })()), 'form_end');
        echo "

Admnistratorzy: <br />

";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 27
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["v"]);
            foreach ($context['_seq'] as $context["k2"] => $context["v2"]) {
                // line 28
                echo "\t\t";
                if (($context["k2"] != (isset($context["groupowner"]) || array_key_exists("groupowner", $context) ? $context["groupowner"] : (function () { throw new RuntimeError('Variable "groupowner" does not exist.', 28, $this->source); })()))) {
                    // line 29
                    echo "\t\t\t";
                    echo twig_escape_filter($this->env, $context["k2"], "html", null, true);
                    echo " <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_user_admin_delete", ["groupid" => (isset($context["group_id"]) || array_key_exists("group_id", $context) ? $context["group_id"] : (function () { throw new RuntimeError('Variable "group_id" does not exist.', 29, $this->source); })()), "userid" => $context["k2"]]), "html", null, true);
                    echo "\"> usuń</a><br />
\t\t";
                } else {
                    // line 31
                    echo "\t\t\t<b>";
                    echo twig_escape_filter($this->env, $context["k2"], "html", null, true);
                    echo "</b><br />
\t\t";
                }
                // line 33
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k2'], $context['v2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
<br /><br />

<!--

";
        // line 40
        $context["a"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminform"]) || array_key_exists("adminform", $context) ? $context["adminform"] : (function () { throw new RuntimeError('Variable "adminform" does not exist.', 40, $this->source); })()), "vars", [], "any", false, false, false, 40), "form", [], "any", false, false, false, 40), "accounts", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "choices", [], "any", false, false, false, 40));
        // line 41
        echo "
";
        // line 42
        if (((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 42, $this->source); })()) > 0)) {
            // line 43
            echo "

";
            // line 45
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["adminform"]) || array_key_exists("adminform", $context) ? $context["adminform"] : (function () { throw new RuntimeError('Variable "adminform" does not exist.', 45, $this->source); })()), 'form_start');
            echo "
";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["adminform"]) || array_key_exists("adminform", $context) ? $context["adminform"] : (function () { throw new RuntimeError('Variable "adminform" does not exist.', 46, $this->source); })()), 'widget');
            echo "
<button type=\"submit\" class=\"btn btnoutline-secondary\">Zapisz</button>
";
            // line 48
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["adminform"]) || array_key_exists("adminform", $context) ? $context["adminform"] : (function () { throw new RuntimeError('Variable "adminform" does not exist.', 48, $this->source); })()), 'form_end');
            echo "


";
        }
        // line 52
        echo "

-->

adminform2 dodaj admina (wpisz 3 znaki)

";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["adminform2"]) || array_key_exists("adminform2", $context) ? $context["adminform2"] : (function () { throw new RuntimeError('Variable "adminform2" does not exist.', 58, $this->source); })()), 'form_start');
        echo "
";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["adminform2"]) || array_key_exists("adminform2", $context) ? $context["adminform2"] : (function () { throw new RuntimeError('Variable "adminform2" does not exist.', 59, $this->source); })()), 'widget');
        echo "
<button type=submit\" class=\"btn btnoutline-secondary\">Zapisz</button>
";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["adminform2"]) || array_key_exists("adminform2", $context) ? $context["adminform2"] : (function () { throw new RuntimeError('Variable "adminform2" does not exist.', 61, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "                <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
                <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
                <script src=\"https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js\"></script>

<script>

\$(\"#gcdn_neq_accounts\").on(\"change paste keyup\", zmiana);


function zmiana() {
        var tekst = \$(this).val();

\tconst group_id = \"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["group_id"]) || array_key_exists("group_id", $context) ? $context["group_id"] : (function () { throw new RuntimeError('Variable "group_id" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "\";
\tconst host = \"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 80, $this->source); })()), "html", null, true);
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



                //\$.getJSON(\"https://port119.pl/jq2\" + \"/\" + group_id,
                \$.getJSON(host + \"/top/jq2\" + \"/\" + group_id,
                {
                        \"arg\": tekst,
\t\t\t//\"gid\": group_id,
        //              \"headers\": { Cookie: \"SID=\" + sid },
                }
                ).done(wynik);

        }
}

function wynik(wartosc) {
        //\$('#selekt').children().remove();

        \$('#gcdn_neq_selekt').children().remove();
        for (opcja in wartosc) {

                console.log(wartosc[opcja] + \" \" + opcja);
                \$('#gcdn_neq_selekt').append(\$('<option>', {
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
        return "port119/group_user_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 80,  243 => 79,  228 => 66,  218 => 65,  205 => 61,  200 => 59,  196 => 58,  188 => 52,  181 => 48,  176 => 46,  172 => 45,  168 => 43,  166 => 42,  163 => 41,  161 => 40,  154 => 35,  144 => 33,  138 => 31,  130 => 29,  127 => 28,  122 => 27,  118 => 26,  111 => 22,  106 => 20,  102 => 19,  95 => 15,  90 => 13,  86 => 12,  82 => 10,  76 => 8,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

Awatar:

{% if avatar != \"brak\" %}
<img src=\"{{ avatar|raw }}\">
{% endif %}


{{ form_start(avatarform) }}
{{ form_widget(avatarform) }}
<button type=\"submit\" class=\"btn btnoutline-secondary\">Zapisz</button>
{{ form_end(avatarform) }}

Edytuj wątek

{{ form_start(groupform) }}
{{ form_widget(groupform) }}
<button type=\"submit\" class=\"btn btnoutline-secondary\">Zapisz</button>
{{ form_end(groupform) }}

Admnistratorzy: <br />

{% for k, v in gcdn %}
\t{% for k2, v2 in v %}
\t\t{% if k2 != groupowner %}
\t\t\t{{ k2 }} <a href=\"{{ path('group_user_admin_delete', {'groupid': group_id, 'userid': k2 }) }}\"> usuń</a><br />
\t\t{% else %}
\t\t\t<b>{{ k2 }}</b><br />
\t\t{% endif %}
\t{% endfor %}
{% endfor %}

<br /><br />

<!--

{% set a = adminform.vars.form.accounts.vars.choices|length %}

{% if a > 0 %}


{{ form_start(adminform) }}
{{ form_widget(adminform) }}
<button type=\"submit\" class=\"btn btnoutline-secondary\">Zapisz</button>
{{ form_end(adminform) }}


{% endif %}


-->

adminform2 dodaj admina (wpisz 3 znaki)

{{ form_start(adminform2) }}
{{ form_widget(adminform2) }}
<button type=submit\" class=\"btn btnoutline-secondary\">Zapisz</button>
{{ form_end(adminform2) }}

{% endblock %}

{% block javascripts %}
                <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
                <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
                <script src=\"https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js\"></script>

<script>

\$(\"#gcdn_neq_accounts\").on(\"change paste keyup\", zmiana);


function zmiana() {
        var tekst = \$(this).val();

\tconst group_id = \"{{ group_id }}\";
\tconst host = \"{{ host }}\";



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



                //\$.getJSON(\"https://port119.pl/jq2\" + \"/\" + group_id,
                \$.getJSON(host + \"/top/jq2\" + \"/\" + group_id,
                {
                        \"arg\": tekst,
\t\t\t//\"gid\": group_id,
        //              \"headers\": { Cookie: \"SID=\" + sid },
                }
                ).done(wynik);

        }
}

function wynik(wartosc) {
        //\$('#selekt').children().remove();

        \$('#gcdn_neq_selekt').children().remove();
        for (opcja in wartosc) {

                console.log(wartosc[opcja] + \" \" + opcja);
                \$('#gcdn_neq_selekt').append(\$('<option>', {
                    //value:  wartosc[opcja],
                    //text:   opcja
                        value: opcja,
                        text: wartosc[opcja]
                }));
        }
}

</script>
{% endblock %}

", "port119/group_user_edit.html.twig", "/var/www/port119/templates/port119/group_user_edit.html.twig");
    }
}
