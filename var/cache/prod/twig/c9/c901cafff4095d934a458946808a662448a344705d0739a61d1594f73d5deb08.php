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
class __TwigTemplate_fc1553ed83b78ca5291af2bb88b112939b2a45524038283a49ee7b7f371998a9 extends Template
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
        // line 12
        if ((1 === twig_compare(($context["pageCount"] ?? null), 1))) {
            // line 13
            echo "\t<nav>
\t\t";
            // line 14
            $context["classAlign"] = (( !(isset($context["align"]) || array_key_exists("align", $context))) ? ("") : ((((0 === twig_compare(($context["align"] ?? null), "center"))) ? (" justify-content-center") : ((((0 === twig_compare(($context["align"] ?? null), "right"))) ? (" justify-content-end") : (""))))));
            // line 15
            echo "\t\t";
            $context["classSize"] = (( !(isset($context["size"]) || array_key_exists("size", $context))) ? ("") : ((((0 === twig_compare(($context["size"] ?? null), "large"))) ? (" pagination-lg") : ((((0 === twig_compare(($context["size"] ?? null), "small"))) ? (" pagination-sm") : (""))))));
            // line 16
            echo "\t\t<ul class=\"pagination";
            echo twig_escape_filter($this->env, ($context["classAlign"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["classSize"] ?? null), "html", null, true);
            echo "\">

\t\t\t";
            // line 18
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 19
                echo "\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" rel=\"prev\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
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
            if ((1 === twig_compare(($context["startPage"] ?? null), 1))) {
                // line 29
                echo "\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                echo "\">1</a>
\t\t\t\t</li>
\t\t\t\t";
                // line 32
                if ((0 === twig_compare(($context["startPage"] ?? null), 3))) {
                    // line 33
                    echo "\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    echo "\">2</a>
\t\t\t\t\t</li>
\t\t\t\t";
                } elseif ((0 !== twig_compare(                // line 36
($context["startPage"] ?? null), 2))) {
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
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 44
                echo "\t\t\t\t";
                if ((0 !== twig_compare($context["page"], ($context["current"] ?? null)))) {
                    // line 45
                    echo "\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
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
            if ((1 === twig_compare(($context["pageCount"] ?? null), ($context["endPage"] ?? null)))) {
                // line 57
                echo "\t\t\t\t";
                if ((1 === twig_compare(($context["pageCount"] ?? null), (($context["endPage"] ?? null) + 1)))) {
                    // line 58
                    echo "\t\t\t\t\t";
                    if ((1 === twig_compare(($context["pageCount"] ?? null), (($context["endPage"] ?? null) + 2)))) {
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
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["pageCount"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
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
        return array (  214 => 82,  208 => 79,  205 => 78,  197 => 75,  194 => 74,  192 => 73,  189 => 72,  181 => 69,  178 => 68,  175 => 67,  167 => 64,  164 => 63,  158 => 59,  155 => 58,  152 => 57,  150 => 56,  147 => 55,  140 => 53,  134 => 50,  131 => 49,  123 => 46,  120 => 45,  117 => 44,  113 => 43,  110 => 42,  107 => 41,  101 => 37,  99 => 36,  94 => 34,  91 => 33,  89 => 32,  84 => 30,  81 => 29,  79 => 28,  76 => 27,  70 => 24,  67 => 23,  59 => 20,  56 => 19,  54 => 18,  47 => 16,  44 => 15,  42 => 14,  39 => 13,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/_pagination.html.twig", "/Applications/MAMP/htdocs/tfe-swapcar/templates/partials/_pagination.html.twig");
    }
}
