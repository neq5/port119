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

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_a4766cfbce2597c27dd94eea371faa7561b664fe2e7aeee579b8c8c293df930c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })()), "messageKey", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })()), "messageData", [], "any", false, false, false, 4), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "

<div class=\"container\">

<div class=\"login\">

<form action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 13
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "\" />
    ";
        }
        // line 16
        echo "
<div class=\"row\">
\t<div class=\"col-sm-3\">
\t\t<b>Logowanie</b> 
\t</div>
\t<div class=\"col-sm-6\">
\t\t<a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_request");
        echo "\">Zresetuj hasło</a>
\t</div>
\t<div class=\"cols-sm-3\">
\t\t<a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\">Nowe konto</a>
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-sm-6\">
    \t\t<label for=\"username\">Adres e-mail</label>
\t</div>
\t<div class=\"col-sm-6\">
    \t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-sm-6\">
\t    <label for=\"password\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
\t</div>
\t<div class=\"col-sm-6\">
    \t\t<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
\t</div>
</div>


<div class=\"row\">
\t<div class=\"col-sm-4\">
    \t\t<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" /> 

\t</div>

</div>

<div class=\"row\">
\t<div class=\"col-sm-12\">
\t\t<a href=\"/connect/facebook\">Zaloguj przez FB</a> <br>
\t\t<a href=\"/connect/google\">Zaloguj przez Google</a>
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-sm-12\">
\t\t<a href=\"https://port119.pl/prywatnosc.html\">Polityka prywatności</a>
\t</div>

</div>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 50,  109 => 40,  100 => 34,  88 => 25,  82 => 22,  74 => 16,  68 => 14,  66 => 13,  62 => 12,  54 => 6,  48 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}


<div class=\"container\">

<div class=\"login\">

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

<div class=\"row\">
\t<div class=\"col-sm-3\">
\t\t<b>Logowanie</b> 
\t</div>
\t<div class=\"col-sm-6\">
\t\t<a href=\"{{ path('fos_user_resetting_request') }}\">Zresetuj hasło</a>
\t</div>
\t<div class=\"cols-sm-3\">
\t\t<a href=\"{{ path('fos_user_registration_register') }}\">Nowe konto</a>
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-sm-6\">
    \t\t<label for=\"username\">Adres e-mail</label>
\t</div>
\t<div class=\"col-sm-6\">
    \t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-sm-6\">
\t    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
\t</div>
\t<div class=\"col-sm-6\">
    \t\t<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
\t</div>
</div>


<div class=\"row\">
\t<div class=\"col-sm-4\">
    \t\t<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" /> 

\t</div>

</div>

<div class=\"row\">
\t<div class=\"col-sm-12\">
\t\t<a href=\"/connect/facebook\">Zaloguj przez FB</a> <br>
\t\t<a href=\"/connect/google\">Zaloguj przez Google</a>
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-sm-12\">
\t\t<a href=\"https://port119.pl/prywatnosc.html\">Polityka prywatności</a>
\t</div>

</div>
</form>
", "FOSUserBundle:Security:login_content.html.twig", "/var/www/port119/src/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
