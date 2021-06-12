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

/* user/index.html.twig */
class __TwigTemplate_8689db22b0ee0657da3bdfc3cebd9b55cd55f1be83ebc32c1c7a4084cc9a73a2 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<div class=\"container\" style=\"margin-bottom: 400px;\">
\t\t<h1 style=\"margin:50px;\">Mon Profil</h1>

\t\t<div class=\"row\">
\t\t\t<div class=\"col md-6\">
\t\t\t\t<div>
\t\t\t\t\t<img class=\"rounded-circle\" alt=\"100x100\" src=\"https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg\" data-holder-rendered=\"true\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col md-6\">
\t\t\t\t<div>
\t\t\t\t\t<p>Prénom:
\t\t\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "firstname", [], "any", false, false, false, 16), "html", null, true);
        echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>Mail:
\t\t\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 20), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "
\t\t\t\t\t</p>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  64 => 16,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/index.html.twig", "/Applications/MAMP/htdocs/tfe-swapcar/templates/user/index.html.twig");
    }
}
