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

/* port119/root3.html.twig */
class __TwigTemplate_38a8e8f7a9e59f9bd8154be9d65dc7ecbfcfd385024415ee0011526e4f79e73c extends \Twig\Template
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
        return "root3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("root3.html.twig", "port119/root3.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<nav class=\"navbar navbar-dark bg-dark\">
</nav>

<div class=\"all row\">
<div class=\"lewa col-lg-8\">
  <div class=\"row \">

    <div class=\"col-md-12\">
      <div class=\"top_color\"><h5>wątki</h5></div>
     <div class=\"p-3 border bg-light box table-responsive\">


<table class=\"table table-striped table-hover table-fixed\">
  <thead>
    <tr>
      <th scope=\"col\">właściciel</th>
      <th scope=\"col\">avatar</th>
      <th scope=\"col\">nazwa</th>
      <th scope=\"col\">posty / ostatni</th>
      <th scope=\"col\">admini</th>


      <th scope=\"col\">opis</th>
      <th scope=\"col\">utworzono</th>

    </tr>
  </thead>
  <tbody>

\t";
        // line 36
        if (($context["allgroups"] ?? null)) {
            // line 37
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["thread_allgroups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                // line 38
                echo "                \t<tr><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "owner", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "owner", [], "any", false, false, false, 38), "html", null, true);
                echo " </a></td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_discuss", ["name" => twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 38), "page" => 1]), "html", null, true);
                echo "\"><img src=\"/groupavatar/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo ".jpeg\"></a></td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_discuss", ["name" => twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 38), "page" => 1]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 38), "html", null, true);
                echo "</a></td><td>";
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["ccnt"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 38)] ?? null) : null), "html", null, true);
                echo " / ";
                if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["ccnt"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 38)] ?? null) : null)) {
                    echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["lastf"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 38)] ?? null) : null), "html", null, true);
                    echo " ";
                }
                echo "</td>
\t\t\t<td>
\t\t\t";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["gcdn"] ?? null));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 41
                    echo "\t\t\t\t";
                    if (($context["k"] == twig_get_attribute($this->env, $this->source, $context["ag"], "name", [], "any", false, false, false, 41))) {
                        // line 42
                        echo "\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["v"]);
                        foreach ($context['_seq'] as $context["k1"] => $context["v1"]) {
                            // line 43
                            echo "                        \t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => $context["v1"]]), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["k1"], "html", null, true);
                            echo "</a><br />
\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k1'], $context['v1'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 45
                        echo "\t\t\t\t";
                    }
                    // line 46
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\t
\t\t\t</td>


<td>";
                // line 50
                echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["abouts"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 50)] ?? null) : null), "html", null, true);
                echo "</td>
<td>";
                // line 51
                echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["luty"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 51)] ?? null) : null), "html", null, true);
                echo "</td>
</tr>

\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t";
        }
        // line 56
        echo "

  </tbody>
</table>


     </div>
   </div>
 </div>

</div>


\t<div class=\"prawa col-lg-4\">
\t\t<div class=\"row gx-5\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"top_color\"><h5>ostatnio komentowane</h5></div>
\t\t\t\t\t<div class=\"p-3 border bg-light box\">
\t\t\t\t\t\t<table class=\"prawa table table-striped\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Wątek</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Autor</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Tytuł</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Treść</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Data</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commcreatedat"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 87
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td><a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_discuss", ["name" => (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["commgids"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[$context["k"]] ?? null) : null), "page" => 1]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["commgids"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[$context["k"]] ?? null) : null), "html", null, true);
            echo "</a></td>\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td><a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userspace", ["uid" => (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["commacounts2"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[$context["k"]] ?? null) : null)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["commaccounts"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[$context["k"]] ?? null) : null), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 90
            echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["commtitles"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[$context["k"]] ?? null) : null), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 91
            echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["commcontent"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[$context["k"]] ?? null) : null), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 92
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["commcreatedat"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[$context["k"]] ?? null) : null), "Y-m-d H-i-s"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t\t\t\t\t\t\t</tbody>



\t\t\t\t\t\t</table>
\t\t\t\t\t</div>








        \t\t\t<div class=\"top_color\"><h5>najczęściej komentowane</h5></div>
\t\t\t\t\t<div class=\"p-3 border bg-light box\">
\t\t\t\t\t\t<table class=\"prawa table table-striped\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Wątek</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\" align=\"right\">Komentarzy</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cntg"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 120
            echo "\t\t\t\t\t\t\t\t\t<tr><td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_discuss", ["name" => $context["k"], "page" => 1]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "</a></td><td align=right>";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "</td></tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "\t\t\t\t\t\t\t</tbody>

\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t</div>
                                <div class=\"top_color\"><h5>najczęściej odwiedzane</h5></div>

\t\t\t\t\t<div class=\"p-3 border bg-light box\">
\t\t\t\t\t\t<table class=\"prawa table table-striped\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Wątek</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Licznik</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ghitsarr"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 141
            echo "<tr><td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_discuss", ["name" => $context["k"], "page" => 1]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "</a></td><td align=right>";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>



     </div>
   </div>
 </div>

augue eget arcu dictum varius duis at consectetur lorem donec massa sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor eu augue ut lectus arcu bibendum at varius vel pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque convallis a cras semper auctor neque vitae tempus quam pellentesque nec nam aliquam sem et tortor consequat id porta nibh venenatis cras sed felis eget velit aliquet sagittis id consectetur purus ut faucibus pulvinar elementum integer enim neque volutpat ac tincidunt vitae semper quis lectus nulla at volutpat diam ut venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt eget nullam non nisi est sit amet facilisis magna etiam tempor orci eu lobortis elementum nibh tellus molestie nunc non blandit massa enim nec dui nunc mattis enim ut tellus elementum sagittis vitae et leo duis ut diam quam nulla porttitor massa id neque aliquam 

<hr>

";
        // line 160
        echo ($context["navi"] ?? null);
        echo "

";
    }

    public function getTemplateName()
    {
        return "port119/root3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 160,  314 => 143,  301 => 141,  297 => 140,  277 => 122,  264 => 120,  260 => 119,  234 => 95,  225 => 92,  221 => 91,  217 => 90,  211 => 89,  205 => 88,  202 => 87,  198 => 86,  166 => 56,  163 => 55,  153 => 51,  149 => 50,  138 => 46,  135 => 45,  124 => 43,  119 => 42,  116 => 41,  112 => 40,  89 => 38,  84 => 37,  82 => 36,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "port119/root3.html.twig", "/var/www/port119/templates/port119/root3.html.twig");
    }
}
