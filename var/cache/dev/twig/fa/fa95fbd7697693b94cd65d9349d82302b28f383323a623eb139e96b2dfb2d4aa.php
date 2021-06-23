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

/* ad/annonces.html.twig */
class __TwigTemplate_5002874160a4f11e70fcdb110c6404647fafac37736de9eb30133e57dabe5422 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/annonces.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/annonces.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ad/annonces.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tResultat
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"container mt-5\">
\t\t<h3>Annonces disponibles cette période:
\t\t</h3>
\t\t<div class=\"row\" style=\"margin-bottom:20px;\">
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ads"]) || array_key_exists("ads", $context) ? $context["ads"] : (function () { throw new RuntimeError('Variable "ads" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 13
            echo "\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card\" style=\"border-radius: 20px; margin-top: 30px;\">
\t\t\t\t\t\t<img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ad"], "images", [], "any", false, false, false, 15), 0, [], "array", false, false, false, 15), "name", [], "any", false, false, false, 15))), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"Image principale\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "title", [], "any", false, false, false, 17), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-map-pin\"></i>
\t\t\t\t\t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ad"], "locality", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "price", [], "any", false, false, false, 28), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t\t\t&euro;
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ad_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["ad"], "slug", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Accèder à l'annonce</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
\t\t</div>

\t\t<div class=\"d-flex justify-content-center\" style=\"margin-top:10px;\">
\t\t\t";
        // line 41
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["ads"]) || array_key_exists("ads", $context) ? $context["ads"] : (function () { throw new RuntimeError('Variable "ads" does not exist.', 41, $this->source); })()), "partials/_pagination.html.twig");
        echo "
\t\t</div>

\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ad/annonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 41,  154 => 37,  142 => 31,  136 => 28,  132 => 26,  125 => 24,  121 => 23,  115 => 20,  109 => 17,  104 => 15,  100 => 13,  96 => 12,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}
\tResultat
{% endblock %}

{% block body %}
\t<div class=\"container mt-5\">
\t\t<h3>Annonces disponibles cette période:
\t\t</h3>
\t\t<div class=\"row\" style=\"margin-bottom:20px;\">
\t\t\t{% for ad in ads %}
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card\" style=\"border-radius: 20px; margin-top: 30px;\">
\t\t\t\t\t\t<img src=\"{{ asset('uploads/' ~ ad.images[0].name )}}\" class=\"img-fluid\" alt=\"Image principale\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ ad.title }}</h5>
\t\t\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-map-pin\"></i>
\t\t\t\t\t\t\t\t{{ ad.locality.name }}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t{% for i in 1..5 %}
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"price-ads\">
\t\t\t\t\t\t\t\t<strong>{{ ad.price }}</strong>
\t\t\t\t\t\t\t\t&euro;
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a href=\"{{ path('ad_show', {'slug': ad.slug}) }}\" class=\"btn btn-primary\">Accèder à l'annonce</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t{% endfor %}

\t\t</div>

\t\t<div class=\"d-flex justify-content-center\" style=\"margin-top:10px;\">
\t\t\t{{ knp_pagination_render(ads, 'partials/_pagination.html.twig') }}
\t\t</div>

\t</div>
{% endblock %}
", "ad/annonces.html.twig", "/Applications/MAMP/htdocs/tfe-swapcar/templates/ad/annonces.html.twig");
    }
}
