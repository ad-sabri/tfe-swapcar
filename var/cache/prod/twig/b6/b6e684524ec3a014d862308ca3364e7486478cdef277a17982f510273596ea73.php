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

/* home/index.html.twig */
class __TwigTemplate_bc5255bc1398cbdccfe46f3a9267e2eaf05c058db4befbf825c6932eaba6d343 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
\t<div>
\t\t<form style=\"position: relative;\" method=\"POST\" action=\"\">
\t\t\t<img src=\"../images/bmw.jpg\" alt=\"Image de fond\" style=\"height: 900px; width:100%; display: block\">
\t\t\t<div style=\"position: absolute; left: 100px; top: 150px; color: white;\">
\t\t\t\t<h1 style=\"font-size: 70px;\">Bienvenue sur SwapCar</h1>
\t\t\t\t<h3>Vous cherchez un véhicule ? Empruntez-le !</h3>
\t\t\t</div>
\t\t</form>
\t</div>


\t<!-- 
\t\t\t\t\t\t\t\t\t\t<header class=\"masthead\" style=\"height: 100vh; min-height: 500px;background-image: url('https://www.bmw.in/content/dam/bmw/marketIN/bmw_in/Images/all-models/BMW%20Series/bmw-2-series/Main%20Banner%20Desktop.jpg');background-size: cover;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t\t\t\t\t\t\t\tbackground-position: center;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t\t\t\t\t\t\t\t\tbackground-repeat: no-repeat;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"container h-100\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row h-100 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"font-weight-light\">Vertically Centered Masthead Content</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"lead\">A great starter layout for a landing page</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t-->
<!-- Page Content -->
\t<!--
\t\t\t\t\t\t\t\t\t\t<section class=\"py-5\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"font-weight-light\">Page Content</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ab nulla dolorum autem nisi officiis blanditiis voluptatem hic, assumenda aspernatur facere ipsam nemo ratione cumque magnam enim fugiat reprehenderit expedita.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t-->

";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/Applications/MAMP/htdocs/tfe-swapcar/templates/home/index.html.twig");
    }
}
