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

/* admin/dashboard.html.twig */
class __TwigTemplate_f0659c21897705c9972d0d0a9becdca7de522e0fc1bc28ee3655f67a95e5c528 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/layout.html.twig", "admin/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
\t<div class=\"jumbotron\">
\t\t<h1 class=\"display-4\">Administration</h1>
\t\t<p class=\"lead\">Back-office</p>
\t</div>

\t<div></div>

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-6 alert-info\">
\t\t\t\t<span class=\"display-3\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["allAds"]) || array_key_exists("allAds", $context) ? $context["allAds"] : (function () { throw new RuntimeError('Variable "allAds" does not exist.', 15, $this->source); })()), "value", [], "array", false, false, false, 15), "html", null, true);
        echo "
\t\t\t\t\tAnnonces</span>
\t\t\t</div>
\t\t\t<div class=\"col-6 alert-light\">
\t\t\t\t<span class=\"display-3\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["allUsers"]) || array_key_exists("allUsers", $context) ? $context["allUsers"] : (function () { throw new RuntimeError('Variable "allUsers" does not exist.', 19, $this->source); })()), "value", [], "array", false, false, false, 19), "html", null, true);
        echo "
\t\t\t\t\tMembres</span>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyAdmin/layout.html.twig' %}

{% block content %}

\t<div class=\"jumbotron\">
\t\t<h1 class=\"display-4\">Administration</h1>
\t\t<p class=\"lead\">Back-office</p>
\t</div>

\t<div></div>

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-6 alert-info\">
\t\t\t\t<span class=\"display-3\">{{allAds['value']}}
\t\t\t\t\tAnnonces</span>
\t\t\t</div>
\t\t\t<div class=\"col-6 alert-light\">
\t\t\t\t<span class=\"display-3\">{{allUsers['value']}}
\t\t\t\t\tMembres</span>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "admin/dashboard.html.twig", "/Applications/MAMP/htdocs/tfe-swapcar/templates/admin/dashboard.html.twig");
    }
}
