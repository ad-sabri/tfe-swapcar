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

/* bundle/EasyAdminBundle/crud/field/id.html.twig */
class __TwigTemplate_5482bce5f6f76fe30a9d9b36bb43fc8a949b5a66c6f68cb782e7de5d5d0fda01 extends Template
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
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 5), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "bundle/EasyAdminBundle/crud/field/id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "bundle/EasyAdminBundle/crud/field/id.html.twig", "/Applications/MAMP/htdocs/tfe-swapcar/templates/bundle/EasyAdminBundle/crud/field/id.html.twig");
    }
}
