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

/* home/mentions.html.twig */
class __TwigTemplate_3201dcd6b1d7834959c5a0d9412bd379c1f0c5a451a3f8e755c2f693abaffb84 extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\">
\t\t<title>Document</title>
\t</head>

\t<body>
\t\t<div class=\"container mt-5\">
\t\t\t<h1>Mentions Légales</h1>

\t\t\t<div class=\"container mt-10\">
\t\t\t\t<h6>
\t\t\t\t\t<strong>PUBLICATION</strong>
\t\t\t\t</h6>
\t\t\t\t<p>Le présent site est édité et géré par :</p>
\t\t\t\t<p>Sabri Abbassi Doukkali</p>
\t\t\t\t<p>88, Boulevard de la Paix</p>
\t\t\t\t<p>1070 Bruxelles</p>
\t\t\t</div>

\t\t\t<div class=\"container mt-10\">
\t\t\t\t<h6>
\t\t\t\t\t<strong>HÉBERGEUR</strong>
\t\t\t\t</h6>
\t\t\t\t<p>Le présent site est édité et géré par :</p>
\t\t\t\t<p>Sabri Abbassi Doukkali</p>
\t\t\t\t<p>88, Boulevard de la Paix</p>
\t\t\t\t<p>1070 Bruxelles</p>
\t\t\t</div>


\t\t</div>

\t</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "home/mentions.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/mentions.html.twig", "/Applications/MAMP/htdocs/tfe-swapcar/templates/home/mentions.html.twig");
    }
}
