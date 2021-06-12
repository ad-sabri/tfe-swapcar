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

/* ad/index.html.twig */
class __TwigTemplate_0cb89192c12ffe727ebe751ac455580e3acd347ddeed7cdb5e1e32582100ca75 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "ad/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Les Annonces
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<h1>Les Annonces</h1>
\t<div class=\"row mt-5\">
\t\t<div class=\"col-md-4\">

\t\t\t<div class=\"card\" style=\"border-radius: 20px;\">
\t\t\t\t<img src=\"https://picsum.photos/200/200\" class=\"img-fluid\" alt=\"Image du produit\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h4 class=\"card-title\">Titre d'une Annonce</h4>
\t\t\t\t\t<p class=\"lead\">

\t\t\t\t\t\t<small>Localité</small>
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 21
            echo "\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t\t</p>
\t\t\t\t\t<p>X &euro;
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">En savoir plus !</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "ad/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  78 => 21,  74 => 20,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ad/index.html.twig", "/Applications/MAMP/htdocs/tfe-swapcar/templates/ad/index.html.twig");
    }
}
