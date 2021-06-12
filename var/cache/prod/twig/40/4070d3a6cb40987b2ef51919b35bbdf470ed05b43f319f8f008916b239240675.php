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

/* ad/results.html.twig */
class __TwigTemplate_4f9f14784b7cfe226eef3c082bfc0fbd1512ab67a76ff787dcba2cd8082656c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "ad/results.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\tResultat
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t<div class=\"container mt-5\">
\t\t<h3>Annonces disponibles cette période:
\t\t</h3>
\t\t<div class=\"row\" style=\"margin-bottom:20px;\">
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["libres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["libre"]) {
            // line 13
            echo "\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card\" style=\"border-radius: 20px; margin-top: 30px;\">
\t\t\t\t\t\t<img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["libre"], "images", [], "any", false, false, false, 15)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "name", [], "any", false, false, false, 15))), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"Image principale\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["libre"], "title", [], "any", false, false, false, 17), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-map-pin\"></i>
\t\t\t\t\t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["libre"], "locality", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 24
                echo "\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"price-ads\">
\t\t\t\t\t\t\t\t<strong>";
            // line 28
            echo twig_escape_filter($this->env, (($context["period"] ?? null) * twig_get_attribute($this->env, $this->source, $context["libre"], "price", [], "any", false, false, false, 28)), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t\t\t&euro;
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ad_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["libre"], "slug", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Accèder à l'annonce</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['libre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
\t\t</div>

\t\t<div class=\"d-flex justify-content-center\" style=\"margin-top:10px;\">
\t\t\t";
        // line 41
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["libres"] ?? null), "partials/_pagination.html.twig");
        echo "
\t\t</div>

\t</div>
";
    }

    public function getTemplateName()
    {
        return "ad/results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 41,  124 => 37,  112 => 31,  106 => 28,  102 => 26,  95 => 24,  91 => 23,  85 => 20,  79 => 17,  74 => 15,  70 => 13,  66 => 12,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ad/results.html.twig", "/Applications/MAMP/htdocs/tfe-swapcar/templates/ad/results.html.twig");
    }
}
