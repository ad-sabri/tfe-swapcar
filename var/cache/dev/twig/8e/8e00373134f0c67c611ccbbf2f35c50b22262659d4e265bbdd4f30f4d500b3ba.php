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

/* partials/_pagination.html.twig */
class __TwigTemplate_ed51a6f8dae54af11fa57123dd0de776758011792dabac58c0d503d4814e8862 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_pagination.html.twig"));

        // line 12
        if ((1 === twig_compare((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 12, $this->source); })()), 1))) {
            // line 13
            echo "\t<nav>
\t\t";
            // line 14
            $context["classAlign"] = (( !(isset($context["align"]) || array_key_exists("align", $context))) ? ("") : ((((0 === twig_compare((isset($context["align"]) || array_key_exists("align", $context) ? $context["align"] : (function () { throw new RuntimeError('Variable "align" does not exist.', 14, $this->source); })()), "center"))) ? (" justify-content-center") : ((((0 === twig_compare((isset($context["align"]) || array_key_exists("align", $context) ? $context["align"] : (function () { throw new RuntimeError('Variable "align" does not exist.', 14, $this->source); })()), "right"))) ? (" justify-content-end") : (""))))));
            // line 15
            echo "\t\t";
            $context["classSize"] = (( !(isset($context["size"]) || array_key_exists("size", $context))) ? ("") : ((((0 === twig_compare((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 15, $this->source); })()), "large"))) ? (" pagination-lg") : ((((0 === twig_compare((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 15, $this->source); })()), "small"))) ? (" pagination-sm") : (""))))));
            // line 16
            echo "\t\t<ul class=\"pagination";
            echo twig_escape_filter($this->env, (isset($context["classAlign"]) || array_key_exists("classAlign", $context) ? $context["classAlign"] : (function () { throw new RuntimeError('Variable "classAlign" does not exist.', 16, $this->source); })()), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["classSize"]) || array_key_exists("classSize", $context) ? $context["classSize"] : (function () { throw new RuntimeError('Variable "classSize" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\">

\t\t\t";
            // line 18
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 19
                echo "\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" rel=\"prev\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 20, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 20, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 20, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 20, $this->source); })())])), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
\t\t\t\t</li>
\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t<span class=\"page-link\">&laquo;&nbsp;";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</span>
\t\t\t\t</li>
\t\t\t";
            }
            // line 27
            echo "
\t\t\t";
            // line 28
            if ((1 === twig_compare((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 28, $this->source); })()), 1))) {
                // line 29
                echo "\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 30, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 30, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 30, $this->source); })()) => 1])), "html", null, true);
                echo "\">1</a>
\t\t\t\t</li>
\t\t\t\t";
                // line 32
                if ((0 === twig_compare((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 32, $this->source); })()), 3))) {
                    // line 33
                    echo "\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 34, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 34, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 34, $this->source); })()) => 2])), "html", null, true);
                    echo "\">2</a>
\t\t\t\t\t</li>
\t\t\t\t";
                } elseif ((0 !== twig_compare(                // line 36
(isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 36, $this->source); })()), 2))) {
                    // line 37
                    echo "\t\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t\t<span class=\"page-link\">&hellip;</span>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 41
                echo "\t\t\t";
            }
            // line 42
            echo "
\t\t\t";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 44
                echo "\t\t\t\t";
                if ((0 !== twig_compare($context["page"], (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 44, $this->source); })())))) {
                    // line 45
                    echo "\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 46, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 46, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 46, $this->source); })()) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
                } else {
                    // line 49
                    echo "\t\t\t\t\t<li class=\"page-item active\">
\t\t\t\t\t\t<span class=\"page-link\">";
                    // line 50
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 53
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
\t\t\t";
            // line 56
            if ((1 === twig_compare((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 56, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 56, $this->source); })())))) {
                // line 57
                echo "\t\t\t\t";
                if ((1 === twig_compare((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 57, $this->source); })()), ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 57, $this->source); })()) + 1)))) {
                    // line 58
                    echo "\t\t\t\t\t";
                    if ((1 === twig_compare((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 58, $this->source); })()), ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 58, $this->source); })()) + 2)))) {
                        // line 59
                        echo "\t\t\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t\t\t<span class=\"page-link\">&hellip;</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    } else {
                        // line 63
                        echo "\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                        // line 64
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 64, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 64, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 64, $this->source); })()) => ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 64, $this->source); })()) - 1)])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 64, $this->source); })()) - 1), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 67
                    echo "\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 69, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 69, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 69, $this->source); })()) => (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 69, $this->source); })())])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 69, $this->source); })()), "html", null, true);
                echo "</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 72
            echo "
\t\t\t";
            // line 73
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 74
                echo "\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" rel=\"next\" href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 75, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 75, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 75, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 75, $this->source); })())])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</a>
\t\t\t\t</li>
\t\t\t";
            } else {
                // line 78
                echo "\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t<span class=\"page-link\">";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</span>
\t\t\t\t</li>
\t\t\t";
            }
            // line 82
            echo "\t\t</ul>
\t</nav>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 82,  214 => 79,  211 => 78,  203 => 75,  200 => 74,  198 => 73,  195 => 72,  187 => 69,  184 => 68,  181 => 67,  173 => 64,  170 => 63,  164 => 59,  161 => 58,  158 => 57,  156 => 56,  153 => 55,  146 => 53,  140 => 50,  137 => 49,  129 => 46,  126 => 45,  123 => 44,  119 => 43,  116 => 42,  113 => 41,  107 => 37,  105 => 36,  100 => 34,  97 => 33,  95 => 32,  90 => 30,  87 => 29,  85 => 28,  82 => 27,  76 => 24,  73 => 23,  65 => 20,  62 => 19,  60 => 18,  53 => 16,  50 => 15,  48 => 14,  45 => 13,  43 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Twitter Bootstrap v4 Sliding pagination control implementation.
 *
 * View that can be used with the pagination module
 * from the Twitter Bootstrap CSS Toolkit
 * https://getbootstrap.com/docs/4.5/components/pagination/
 *
 */
#}
{% if pageCount > 1 %}
\t<nav>
\t\t{% set classAlign = (align is not defined) ? '' : align=='center' ? ' justify-content-center' : (align=='right' ? ' justify-content-end' : '') %}
\t\t{% set classSize = (size is not defined) ? '' : size=='large' ? ' pagination-lg' : (size=='small' ? ' pagination-sm' : '') %}
\t\t<ul class=\"pagination{{ classAlign }}{{ classSize }}\">

\t\t\t{% if previous is defined %}
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" rel=\"prev\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&laquo;&nbsp;{{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}</a>
\t\t\t\t</li>
\t\t\t{% else %}
\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t<span class=\"page-link\">&laquo;&nbsp;{{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}</span>
\t\t\t\t</li>
\t\t\t{% endif %}

\t\t\t{% if startPage > 1 %}
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): 1})) }}\">1</a>
\t\t\t\t</li>
\t\t\t\t{% if startPage == 3 %}
\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): 2})) }}\">2</a>
\t\t\t\t\t</li>
\t\t\t\t{% elseif startPage != 2 %}
\t\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t\t<span class=\"page-link\">&hellip;</span>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t{% endif %}

\t\t\t{% for page in pagesInRange %}
\t\t\t\t{% if page != current %}
\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
\t\t\t\t\t</li>
\t\t\t\t{% else %}
\t\t\t\t\t<li class=\"page-item active\">
\t\t\t\t\t\t<span class=\"page-link\">{{ page }}</span>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}

\t\t\t{% endfor %}

\t\t\t{% if pageCount > endPage %}
\t\t\t\t{% if pageCount > (endPage + 1) %}
\t\t\t\t\t{% if pageCount > (endPage + 2) %}
\t\t\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t\t\t<span class=\"page-link\">&hellip;</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t<a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}\">{{ pageCount -1 }}</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): pageCount})) }}\">{{ pageCount }}</a>
\t\t\t\t</li>
\t\t\t{% endif %}

\t\t\t{% if next is defined %}
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" rel=\"next\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">{{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}&nbsp;&raquo;</a>
\t\t\t\t</li>
\t\t\t{% else %}
\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t<span class=\"page-link\">{{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}&nbsp;&raquo;</span>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t</ul>
\t</nav>
{% endif %}
", "partials/_pagination.html.twig", "/Applications/MAMP/htdocs/tfe-swapcar/templates/partials/_pagination.html.twig");
    }
}
