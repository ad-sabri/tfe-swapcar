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

/* security/login.html.twig */
class __TwigTemplate_d3f5e3ee593cdaaafa97f91b87bf9aa3e25b7ddf8d73f580835a5c1b18f44126 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Se connecter !
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<div class=\"container mt-5\">
\t\t<div class=\"row\" style=\"display: flex; align-items: center; justify-content: center;\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<h1>Connexion</h1>
\t\t\t\t";
        // line 11
        if (($context["error"] ?? null)) {
            // line 12
            echo "\t\t\t\t\t<p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "message", [], "any", false, false, false, 12), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 14
        echo "
\t\t\t\t";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formView"] ?? null), 'form_start');
        echo "
\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formView"] ?? null), 'widget');
        echo "

\t\t\t\t<a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_register");
        echo "\">Pas encore de compte ? Inscrivez-vous !</a>

\t\t\t\t<button type=\"submit\" class=\"btn btn-success\" style=\"display: flex; width:100%; align-items: center; justify-content: center;\">Connexion</button>

\t\t\t\t";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formView"] ?? null), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>


";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 22,  85 => 18,  80 => 16,  76 => 15,  73 => 14,  67 => 12,  65 => 11,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/Applications/MAMP/htdocs/tfe-swapcar/templates/security/login.html.twig");
    }
}
