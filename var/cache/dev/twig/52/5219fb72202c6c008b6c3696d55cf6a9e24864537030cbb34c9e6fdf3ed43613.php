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
class __TwigTemplate_1232973440e564ec1534803c74dfcf840df0901af75f1b9f9e3cc2c480756b13 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Accueil
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil
{% endblock %}

{% block body %}

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

{% endblock %}
", "home/index.html.twig", "/Applications/MAMP/htdocs/tfe-swapcar/templates/home/index.html.twig");
    }
}
