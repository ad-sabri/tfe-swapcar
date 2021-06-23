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

/* partials/_navbar.html.twig */
class __TwigTemplate_0e02c4698c3ce31555442233530da4227e79e4cda58448875ce753c1f88a65ed extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_navbar.html.twig"));

        // line 1
        echo "<div class=\"container\">

\t<nav class=\"navbar navbar-expand-lg\" style=\"border-bottom: 4px #35c5d4 solid;\">
\t\t<a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"../images/logo.png\" alt=\"logo\" class=\"logo-navbar\">SwapCar</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor03\" style=\"margin-right: 70px;\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ad_search");
        echo "\">Chercher</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14)) {
            // line 15
            echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<div class=\"dropdown\" style=\"margin-left:20px;\">
\t\t\t\t\t\t\t<button class=\"btn btn-outline-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" alt=\"10x10\" src=\"https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg\" width=\"20px\" data-holder-rendered=\"true\">
\t\t\t\t\t\t\t\t";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "firstname", [], "any", false, false, false, 19), "html", null, true);
            echo "
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ad_create");
            echo "\">Créer une annonce</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Mes réservations</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user");
            echo "\">Mon Profil</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" style=\"color:red;\" href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt\"></i>
\t\t\t\t\t\t\t\t\tDéconnexion</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        } else {
            // line 33
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Connexion</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_register");
            echo "\">Inscription</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 40
        echo "\t\t\t</ul>
\t\t</div>
\t</nav>

</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 40,  107 => 37,  101 => 34,  98 => 33,  88 => 26,  83 => 24,  78 => 22,  72 => 19,  66 => 15,  64 => 14,  59 => 12,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">

\t<nav class=\"navbar navbar-expand-lg\" style=\"border-bottom: 4px #35c5d4 solid;\">
\t\t<a class=\"navbar-brand\" href=\"{{ path('home') }}\"><img src=\"../images/logo.png\" alt=\"logo\" class=\"logo-navbar\">SwapCar</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor03\" style=\"margin-right: 70px;\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('ad_search') }}\">Chercher</a>
\t\t\t\t</li>
\t\t\t\t{% if app.user %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<div class=\"dropdown\" style=\"margin-left:20px;\">
\t\t\t\t\t\t\t<button class=\"btn btn-outline-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" alt=\"10x10\" src=\"https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg\" width=\"20px\" data-holder-rendered=\"true\">
\t\t\t\t\t\t\t\t{{ app.user.firstname }}
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('ad_create') }}\">Créer une annonce</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Mes réservations</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('user') }}\">Mon Profil</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" style=\"color:red;\" href=\"{{ path('security_logout') }}\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt\"></i>
\t\t\t\t\t\t\t\t\tDéconnexion</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t{% else %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('security_login')}}\">Connexion</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('security_register') }}\">Inscription</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t</ul>
\t\t</div>
\t</nav>

</div>
", "partials/_navbar.html.twig", "/Applications/MAMP/htdocs/tfe-swapcar/templates/partials/_navbar.html.twig");
    }
}
