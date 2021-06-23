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

/* ad/show.html.twig */
class __TwigTemplate_83ce8aa4387cab593d8490c57ca22e99d638f7dacc134584bb3a13cf43201723 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ad/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "\t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div class=\"container mt-5\">

\t\t<h1 style=\"margin-bottom:50px;\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>


\t\t<div class=\"row\">
\t\t\t<div class=\"col-6\">
\t\t\t\t<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">

\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 19, $this->source); })()), "images", [], "any", false, false, false, 19));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 20
            echo "\t\t\t\t\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 20), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 20)) {
                echo " class=\"active\" ";
            }
            echo "></li>
\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t\t\t</ol>

\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 25, $this->source); })()), "images", [], "any", false, false, false, 25));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 26
            echo "\t\t\t\t\t\t\t<div class=\"carousel-item ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 26)) {
                echo " active ";
            }
            echo "\">
\t\t\t\t\t\t\t\t<img class=\"d-block w-100\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 27))), "html", null, true);
            echo "\" alt=\"First slide\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Précédente</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Suivante</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-6\">
\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\">Marque</th>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 48, $this->source); })()), "brand", [], "any", false, false, false, 48), "title", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\">Catégorie</th>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 54, $this->source); })()), "category", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\">Année</th>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 60, $this->source); })()), "year", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\">Boite de Vitesse</th>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 66, $this->source); })()), "gearbox", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\">Craburant</th>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 72, $this->source); })()), "fuel", [], "any", false, false, false, 72), "name", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\">Note</th>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 80
            echo "\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\">Description</th>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 88, $this->source); })()), "description", [], "any", false, false, false, 88), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div class=\"container mt-5\">
\t\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t<div class=\"tile\">
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t\t<h3>90 &euro;</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dates\">
\t\t\t\t\t\t\t\t<div class=\"start\">
\t\t\t\t\t\t\t\t\t<strong>Début</strong>
\t\t\t\t\t\t\t\t\t1-6-2021
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ends\">
\t\t\t\t\t\t\t\t\t<strong>Fin</strong>
\t\t\t\t\t\t\t\t\t6-6-2021
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\" style=\"display: flex; width:100%; justify-content: center;\">Reserver</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container mt-5\">
\t\t\t\t<p class=\"lead\">Commentaires</p>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<textarea class=\"form-control\" id=\"bio\" rows=\"3\"></textarea>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" style=\"margin-top:5px;\">Commenter</button>
\t\t\t\t</div>
\t\t\t\t";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 126, $this->source); })()), "comments", [], "any", false, false, false, 126));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 127
            echo "\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["comment"], "parent", [], "any", false, false, false, 127), null))) {
                // line 128
                echo "\t\t\t\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"card p-3\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"user d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/hczKIze.jpg\" width=\"30\" class=\"user-img rounded-circle mr-2\">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"font-weight-bold text-primary\">";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 135), "firstname", [], "any", false, false, false, 135), "html", null, true);
                echo "</small>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"font-weight-bold\">";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 136), "html", null, true);
                echo "</small>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<small>le 11 mai 2021</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 145
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ad/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 146,  349 => 145,  337 => 136,  333 => 135,  324 => 128,  321 => 127,  317 => 126,  276 => 88,  268 => 82,  261 => 80,  257 => 79,  247 => 72,  238 => 66,  229 => 60,  220 => 54,  211 => 48,  191 => 30,  174 => 27,  167 => 26,  150 => 25,  145 => 22,  124 => 20,  107 => 19,  96 => 11,  92 => 9,  82 => 8,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}
\t{{ ad.title }}
{% endblock %}

{% block body %}
\t<div class=\"container mt-5\">

\t\t<h1 style=\"margin-bottom:50px;\">{{ ad.title }}</h1>


\t\t<div class=\"row\">
\t\t\t<div class=\"col-6\">
\t\t\t\t<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">

\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t{% for image in ad.images %}
\t\t\t\t\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"{{loop.index0 }}\" {% if loop.first %} class=\"active\" {% endif %}></li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ol>

\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t{% for image in ad.images %}
\t\t\t\t\t\t\t<div class=\"carousel-item {% if loop.first %} active {% endif %}\">
\t\t\t\t\t\t\t\t<img class=\"d-block w-100\" src=\"{{ asset('/uploads/' ~ image.name)}}\" alt=\"First slide\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>

\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Précédente</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Suivante</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-6\">
\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\">Marque</th>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>{{ ad.brand.title }}</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\">Catégorie</th>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>{{ ad.category.name }}</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\">Année</th>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>{{ ad.year }}</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\">Boite de Vitesse</th>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>{{ ad.gearbox.name }}</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\">Craburant</th>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>{{ ad.fuel.name }}</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\">Note</th>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% for i in 1..5 %}
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\">Description</th>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>{{ ad.description }}</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div class=\"container mt-5\">
\t\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t<div class=\"tile\">
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t\t<h3>90 &euro;</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dates\">
\t\t\t\t\t\t\t\t<div class=\"start\">
\t\t\t\t\t\t\t\t\t<strong>Début</strong>
\t\t\t\t\t\t\t\t\t1-6-2021
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ends\">
\t\t\t\t\t\t\t\t\t<strong>Fin</strong>
\t\t\t\t\t\t\t\t\t6-6-2021
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\" style=\"display: flex; width:100%; justify-content: center;\">Reserver</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container mt-5\">
\t\t\t\t<p class=\"lead\">Commentaires</p>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<textarea class=\"form-control\" id=\"bio\" rows=\"3\"></textarea>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" style=\"margin-top:5px;\">Commenter</button>
\t\t\t\t</div>
\t\t\t\t{% for comment in ad.comments %}
\t\t\t\t\t{% if comment.parent == null %}
\t\t\t\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"card p-3\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"user d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/hczKIze.jpg\" width=\"30\" class=\"user-img rounded-circle mr-2\">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"font-weight-bold text-primary\">{{ comment.author.firstname }}</small>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"font-weight-bold\">{{ comment.content }}</small>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<small>le 11 mai 2021</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "ad/show.html.twig", "/Applications/MAMP/htdocs/tfe-swapcar/templates/ad/show.html.twig");
    }
}
