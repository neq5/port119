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

/* @FOSUser/layout.html.twig */
class __TwigTemplate_168e76f9d795e5ec0f571057a97beb40569d555dc1b5e1a2332d86d6c30f02dd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'fos_user_content' => [$this, 'block_fos_user_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
\t<link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
\t<title>port119 / login</title>
\t<style>
\t.login {
\t\tmin-height: 100vh;
\t\tdisplay: -ms-flexbox;
\t\tdisplay: flex;
\t\t-webkit-box-align: center;
\t\t-ms-flex-align: center;
\t\talign-items: center;
\t\t-webkit-box-pack: center;
\t\tjustify-content: center;
\t\tpadding-top: 1,2rem;
\t}
\t</style>

    </head>
    <body>
\t<!--
        <div>
            ";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 26
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logged_in_as", ["%username%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26), "username", [], "any", false, false, false, 26)], "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 31
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.login", [], "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 33
        echo "        </div>
\t-->

        ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 36), "hasPreviousSession", [], "any", false, false, false, 36)) {
            // line 37
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 37), "flashbag", [], "any", false, false, false, 37), "all", [], "method", false, false, false, 37));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 38
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 39
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 40
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        ";
        }
        // line 45
        echo "
            ";
        // line 46
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 48
        echo "    </body>
</html>
";
    }

    // line 46
    public function block_fos_user_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 47,  140 => 46,  134 => 48,  132 => 46,  129 => 45,  126 => 44,  120 => 43,  111 => 40,  106 => 39,  101 => 38,  96 => 37,  94 => 36,  89 => 33,  81 => 31,  75 => 28,  71 => 27,  66 => 26,  64 => 25,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSUser/layout.html.twig", "/var/www/port119/src/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
