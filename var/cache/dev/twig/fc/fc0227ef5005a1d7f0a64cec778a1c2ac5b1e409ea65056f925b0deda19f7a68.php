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

/* port119/settings.html.twig */
class __TwigTemplate_af434ce0e79270f0b1f69d1f0479fa555c378f8d247354d4b3bd64f19002984d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/settings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "port119/settings.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "port119/settings.html.twig", 1);
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
        if (((isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 5, $this->source); })()) != "brak")) {
            // line 6
            echo "<img src=\" ";
            echo (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 6, $this->source); })());
            echo " \">
";
        }
        // line 8
        echo "
Wgraj fotkę (plik jpg)
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["avatarform"]) || array_key_exists("avatarform", $context) ? $context["avatarform"] : (function () { throw new RuntimeError('Variable "avatarform" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["avatarform"]) || array_key_exists("avatarform", $context) ? $context["avatarform"] : (function () { throw new RuntimeError('Variable "avatarform" does not exist.', 11, $this->source); })()), 'widget');
        echo "
<button type=submit class=\"btn btnoutline-secondary\">Wrzuć</button>
";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["avatarform"]) || array_key_exists("avatarform", $context) ? $context["avatarform"] : (function () { throw new RuntimeError('Variable "avatarform" does not exist.', 13, $this->source); })()), 'form_end');
        echo "
<br /><br />


Zmiana hasła

";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passform"]) || array_key_exists("passform", $context) ? $context["passform"] : (function () { throw new RuntimeError('Variable "passform" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["passform"]) || array_key_exists("passform", $context) ? $context["passform"] : (function () { throw new RuntimeError('Variable "passform" does not exist.', 20, $this->source); })()), 'widget');
        echo "
<button type=\"submit\" class=\"btn btnoutline-secondary\">Zmień hasło</button>
";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passform"]) || array_key_exists("passform", $context) ? $context["passform"] : (function () { throw new RuntimeError('Variable "passform" does not exist.', 22, $this->source); })()), 'form_end');
        echo "

<br /><br />

Zmiana danych
";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["settingsform"]) || array_key_exists("settingsform", $context) ? $context["settingsform"] : (function () { throw new RuntimeError('Variable "settingsform" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["settingsform"]) || array_key_exists("settingsform", $context) ? $context["settingsform"] : (function () { throw new RuntimeError('Variable "settingsform" does not exist.', 28, $this->source); })()), 'widget');
        echo "
<button type=submit class=\"btn btnoutline-secondary\">Zmień dane</button>
";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["settingsform"]) || array_key_exists("settingsform", $context) ? $context["settingsform"] : (function () { throw new RuntimeError('Variable "settingsform" does not exist.', 30, $this->source); })()), 'form_end');
        echo "

<rbr /><br />


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "port119/settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 30,  122 => 28,  118 => 27,  110 => 22,  105 => 20,  101 => 19,  92 => 13,  87 => 11,  83 => 10,  79 => 8,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

{% if avatar != \"brak\" %}
<img src=\" {{ avatar|raw }} \">
{% endif %}

Wgraj fotkę (plik jpg)
{{ form_start(avatarform) }}
{{ form_widget(avatarform) }}
<button type=submit class=\"btn btnoutline-secondary\">Wrzuć</button>
{{ form_end(avatarform) }}
<br /><br />


Zmiana hasła

{{ form_start(passform) }}
{{ form_widget(passform) }}
<button type=\"submit\" class=\"btn btnoutline-secondary\">Zmień hasło</button>
{{ form_end(passform) }}

<br /><br />

Zmiana danych
{{ form_start(settingsform) }}
{{ form_widget(settingsform) }}
<button type=submit class=\"btn btnoutline-secondary\">Zmień dane</button>
{{ form_end(settingsform) }}

<rbr /><br />


{% endblock %}
", "port119/settings.html.twig", "/var/www/port119/templates/port119/settings.html.twig");
    }
}
