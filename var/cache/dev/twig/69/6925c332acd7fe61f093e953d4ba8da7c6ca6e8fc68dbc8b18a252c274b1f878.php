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

/* port119/group_edit.html.twig */
class __TwigTemplate_ab74899123c8d7bd1992428b00604d2103044679dfed5bf56117dfae2a2356f8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/group_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/group_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/group_edit.html.twig", 1);
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
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["avatarform"]) || array_key_exists("avatarform", $context) ? $context["avatarform"] : (function () { throw new RuntimeError('Variable "avatarform" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["avatarform"]) || array_key_exists("avatarform", $context) ? $context["avatarform"] : (function () { throw new RuntimeError('Variable "avatarform" does not exist.', 7, $this->source); })()), 'widget');
        echo "
<button type=\"submit\" class=\"btn btnoutline-secondary\">Zapisz</button>
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["avatarform"]) || array_key_exists("avatarform", $context) ? $context["avatarform"] : (function () { throw new RuntimeError('Variable "avatarform" does not exist.', 9, $this->source); })()), 'form_end');
        echo "




Edytuj wątek


";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["groupform"]) || array_key_exists("groupform", $context) ? $context["groupform"] : (function () { throw new RuntimeError('Variable "groupform" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["groupform"]) || array_key_exists("groupform", $context) ? $context["groupform"] : (function () { throw new RuntimeError('Variable "groupform" does not exist.', 18, $this->source); })()), 'widget');
        echo "
<button type=\"submit\" class=\"btn btnoutline-secondary\">Zapisz</button>
";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["groupform"]) || array_key_exists("groupform", $context) ? $context["groupform"] : (function () { throw new RuntimeError('Variable "groupform" does not exist.', 20, $this->source); })()), 'form_end');
        echo "

Administratorzy: <br />

";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gcdn"]) || array_key_exists("gcdn", $context) ? $context["gcdn"] : (function () { throw new RuntimeError('Variable "gcdn" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 25
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["v"]);
            foreach ($context['_seq'] as $context["k2"] => $context["v2"]) {
                // line 26
                echo "\t\t";
                if (($context["k2"] != (isset($context["groupowner"]) || array_key_exists("groupowner", $context) ? $context["groupowner"] : (function () { throw new RuntimeError('Variable "groupowner" does not exist.', 26, $this->source); })()))) {
                    // line 27
                    echo "\t\t\t";
                    echo twig_escape_filter($this->env, $context["k2"], "html", null, true);
                    echo " <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete", ["groupid" => (isset($context["group_id"]) || array_key_exists("group_id", $context) ? $context["group_id"] : (function () { throw new RuntimeError('Variable "group_id" does not exist.', 27, $this->source); })()), "userid" => $context["k2"]]), "html", null, true);
                    echo "\"> usuń</a><br />
\t\t";
                } else {
                    // line 29
                    echo "\t\t\t<b>";
                    echo twig_escape_filter($this->env, $context["k2"], "html", null, true);
                    echo "</b><br />
\t\t";
                }
                // line 31
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k2'], $context['v2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "

<br /><br />


";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["adminform"]) || array_key_exists("adminform", $context) ? $context["adminform"] : (function () { throw new RuntimeError('Variable "adminform" does not exist.', 38, $this->source); })()), 'form_start');
        echo "
";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["adminform"]) || array_key_exists("adminform", $context) ? $context["adminform"] : (function () { throw new RuntimeError('Variable "adminform" does not exist.', 39, $this->source); })()), 'widget');
        echo "
<button type=\"submit\" class=\"btn btnoutline-secondary\">Zapisz</button>
";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["adminform"]) || array_key_exists("adminform", $context) ? $context["adminform"] : (function () { throw new RuntimeError('Variable "adminform" does not exist.', 41, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/group_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 41,  155 => 39,  151 => 38,  144 => 33,  134 => 31,  128 => 29,  120 => 27,  117 => 26,  112 => 25,  108 => 24,  101 => 20,  96 => 18,  92 => 17,  81 => 9,  76 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

Awatar:
{{ form_start(avatarform) }}
{{ form_widget(avatarform) }}
<button type=\"submit\" class=\"btn btnoutline-secondary\">Zapisz</button>
{{ form_end(avatarform) }}




Edytuj wątek


{{ form_start(groupform) }}
{{ form_widget(groupform) }}
<button type=\"submit\" class=\"btn btnoutline-secondary\">Zapisz</button>
{{ form_end(groupform) }}

Administratorzy: <br />

{% for k, v in gcdn %}
\t{% for k2, v2 in v %}
\t\t{% if k2 != groupowner %}
\t\t\t{{ k2 }} <a href=\"{{ path('admin_delete', {'groupid': group_id, 'userid': k2 }) }}\"> usuń</a><br />
\t\t{% else %}
\t\t\t<b>{{ k2 }}</b><br />
\t\t{% endif %}
\t{% endfor %}
{% endfor %}


<br /><br />


{{ form_start(adminform) }}
{{ form_widget(adminform) }}
<button type=\"submit\" class=\"btn btnoutline-secondary\">Zapisz</button>
{{ form_end(adminform) }}

{% endblock %}
", "port119/group_edit.html.twig", "/var/www/port119/templates/port119/group_edit.html.twig");
    }
}
