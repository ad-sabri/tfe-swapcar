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

/* bundle/EasyAdminBundle/crud/includes/_batch_action_modal.html.twig */
class __TwigTemplate_a78533d89c7d8603d64cdc8e023807c699e9dddef0900c0196f94d9685d909f0 extends Template
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
        echo "<div id=\"modal-batch-action\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4 id=\"batch-action-confirmation-title\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("batch_action_modal.title", array(), "EasyAdminBundle"), "html", null, true);
        echo "</h4>
                <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("batch_action_modal.content", array(), "EasyAdminBundle"), "html", null, true);
        echo "</p>
            </div>

            <div class=\"modal-footer\">
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-secondary\">
                    <span class=\"btn-label\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.cancel", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                </button>
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-danger\" id=\"modal-batch-action-button\">
                    <i class=\"fa fa-fw fa-check\"></i>
                    <span class=\"btn-label\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("batch_action_modal.action", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                </button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "bundle/EasyAdminBundle/crud/includes/_batch_action_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  55 => 11,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bundle/EasyAdminBundle/crud/includes/_batch_action_modal.html.twig", "/Applications/MAMP/htdocs/tfe-swapcar/templates/bundle/EasyAdminBundle/crud/includes/_batch_action_modal.html.twig");
    }
}
