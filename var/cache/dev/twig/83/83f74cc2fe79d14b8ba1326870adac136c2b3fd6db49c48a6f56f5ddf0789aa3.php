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

/* partials/_footer.html.twig */
class __TwigTemplate_04d77f7879b703a6db8628cb9cff04df55809335fa2a695f79145245e69c0ee0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_footer.html.twig"));

        // line 1
        echo "<footer class=\"page-footer bg-dark\" style=\"margin-top: 300px; sposition: absolute; bottom: 0; left: 0; right: 0\">
\t<div class=\"bg-info\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row py-4 d-flex align-items-center\">
\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"fab fa-facebook-f text-white mr-4\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"fab fa-twitter text-white mr-4\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"fab fa-instagram text-white mr-4\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container text-md-left mt-5\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3 mx-auto mb-4\">
\t\t\t\t<h6 class=\"text-uppercase font-weight-bold\" style=\"color:white;\">CONTACTS</h6>
\t\t\t\t<hr class=\"bg-info mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 125px; height: 2px;\">
\t\t\t\t<p class=\"mt-2\" style=\"color:white;\">
\t\t\t\t\t<i class=\"fas fa-home\"></i>
\t\t\t\t\t3, Avenue Louise - Bruxelles</p>
\t\t\t\t<p class=\"mt-2\" style=\"color:white;\">
\t\t\t\t\t<i class=\"fas fa-phone-alt\"></i>
\t\t\t\t\tTel: 02 123 12 12</p>
\t\t\t\t<p class=\"mt-2\" style=\"color:white;\">
\t\t\t\t\t<i class=\"fas fa-fax\"></i>
\t\t\t\t\tFax: 02 123 12 12</p>
\t\t\t\t<p class=\"mt-2\" style=\"color:white;\">
\t\t\t\t\t<i class=\"fas fa-at\"></i>
\t\t\t\t\tMail: info@swapcar.com</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 mx-auto mb-4\">
\t\t\t\t<h6 class=\"text-uppercase font-weight-bold\" style=\"color:white;\">À PROPOS</h6>
\t\t\t\t<hr class=\"bg-info mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 125px; height: 2px\">
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li class=\"my-2\">
\t\t\t\t\t\t<a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions");
        echo "\">Mentions légales</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-copyright text-center py-3\" style=\"color:white;\">
\t\t&copy; Copyright 2021 - Swapcar
\t</div>
</footer>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 42,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"page-footer bg-dark\" style=\"margin-top: 300px; sposition: absolute; bottom: 0; left: 0; right: 0\">
\t<div class=\"bg-info\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row py-4 d-flex align-items-center\">
\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"fab fa-facebook-f text-white mr-4\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"fab fa-twitter text-white mr-4\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"fab fa-instagram text-white mr-4\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container text-md-left mt-5\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3 mx-auto mb-4\">
\t\t\t\t<h6 class=\"text-uppercase font-weight-bold\" style=\"color:white;\">CONTACTS</h6>
\t\t\t\t<hr class=\"bg-info mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 125px; height: 2px;\">
\t\t\t\t<p class=\"mt-2\" style=\"color:white;\">
\t\t\t\t\t<i class=\"fas fa-home\"></i>
\t\t\t\t\t3, Avenue Louise - Bruxelles</p>
\t\t\t\t<p class=\"mt-2\" style=\"color:white;\">
\t\t\t\t\t<i class=\"fas fa-phone-alt\"></i>
\t\t\t\t\tTel: 02 123 12 12</p>
\t\t\t\t<p class=\"mt-2\" style=\"color:white;\">
\t\t\t\t\t<i class=\"fas fa-fax\"></i>
\t\t\t\t\tFax: 02 123 12 12</p>
\t\t\t\t<p class=\"mt-2\" style=\"color:white;\">
\t\t\t\t\t<i class=\"fas fa-at\"></i>
\t\t\t\t\tMail: info@swapcar.com</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 mx-auto mb-4\">
\t\t\t\t<h6 class=\"text-uppercase font-weight-bold\" style=\"color:white;\">À PROPOS</h6>
\t\t\t\t<hr class=\"bg-info mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 125px; height: 2px\">
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li class=\"my-2\">
\t\t\t\t\t\t<a href=\"{{ path('mentions') }}\">Mentions légales</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-copyright text-center py-3\" style=\"color:white;\">
\t\t&copy; Copyright 2021 - Swapcar
\t</div>
</footer>
", "partials/_footer.html.twig", "/Applications/MAMP/htdocs/tfe-swapcar/templates/partials/_footer.html.twig");
    }
}
