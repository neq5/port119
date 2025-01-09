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

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_413259d46ea990d088b050cae1cc337c4707869c5d4710801c1aca9a78963669 extends \Twig\Template
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
        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? null)) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 4), "security"), "html", null, true);
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
        if (($context["csrf_token"] ?? null)) {
            // line 14
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 50,  103 => 40,  94 => 34,  82 => 25,  76 => 22,  68 => 16,  62 => 14,  60 => 13,  56 => 12,  48 => 6,  42 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSUser/Security/login_content.html.twig", "/var/www/port119/src/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
