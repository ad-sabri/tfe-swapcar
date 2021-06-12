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

/* @EasyAdmin/crud/edit.html.twig */
class __TwigTemplate_e66cbef200cf558c4b12f9534cebede907b07de4343d6027ee5d054427c86426 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'edit_form' => [$this, 'block_edit_form'],
            'delete_form' => [$this, 'block_delete_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 3), "@EasyAdmin/crud/edit.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["edit_form"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 4), "formThemes", [], "any", false, false, false, 4), false);
        // line 6
        $context["__internal_642660eec321cb3d91e197c5974eaf8a294416d553b826fdf9b88f230fd9c962"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 6), "translationDomain", [], "any", false, false, false, 6);
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((("ea-edit-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 8)) . "-") . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 8)), "html", null, true);
    }

    // line 9
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("ea-edit ea-edit-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 9)), "html", null, true);
    }

    // line 11
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        $this->displayParentBlock("configured_head_contents", $context, $blocks);
        echo "
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "vars", [], "any", false, false, false, 13), "ea_crud_form", [], "any", false, false, false, 13), "assets", [], "any", false, false, false, 13), "headContents", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 14
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 18
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        $this->displayParentBlock("configured_body_contents", $context, $blocks);
        echo "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "vars", [], "any", false, false, false, 20), "ea_crud_form", [], "any", false, false, false, 20), "assets", [], "any", false, false, false, 20), "bodyContents", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 21
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 25
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    ";
        $this->displayParentBlock("configured_stylesheets", $context, $blocks);
        echo "
    ";
        // line 27
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "vars", [], "any", false, false, false, 27), "ea_crud_form", [], "any", false, false, false, 27), "assets", [], "any", false, false, false, 27), "cssAssets", [], "any", false, false, false, 27)], false);
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "vars", [], "any", false, false, false, 28), "ea_crud_form", [], "any", false, false, false, 28), "assets", [], "any", false, false, false, 28), "webpackEncoreAssets", [], "any", false, false, false, 28)], false);
        echo "
";
    }

    // line 31
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "    ";
        $this->displayParentBlock("configured_javascripts", $context, $blocks);
        echo "
    ";
        // line 33
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "vars", [], "any", false, false, false, 33), "ea_crud_form", [], "any", false, false, false, 33), "assets", [], "any", false, false, false, 33), "jsAssets", [], "any", false, false, false, 33)], false);
        echo "
    ";
        // line 34
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "vars", [], "any", false, false, false, 34), "ea_crud_form", [], "any", false, false, false, 34), "assets", [], "any", false, false, false, 34), "webpackEncoreAssets", [], "any", false, false, false, 34)], false);
        echo "
";
    }

    // line 37
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        ob_start(function () { return ''; });
        // line 39
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 39), "customPageTitle", [], "any", false, false, false, 39))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
($context["ea"] ?? null), "crud", [], "any", false, false, false, 40), "defaultPageTitle", [], "any", false, false, false, 40), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "translationParameters", [], "any", false, false, false, 40), "EasyAdminBundle")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 41
($context["ea"] ?? null), "crud", [], "any", false, false, false, 41), "customPageTitle", [], "any", false, false, false, 41), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 41), "translationParameters", [], "any", false, false, false, 41),         // line 6
($context["__internal_642660eec321cb3d91e197c5974eaf8a294416d553b826fdf9b88f230fd9c962"] ?? null))));
        $___internal_8ec81a707962520daea90a14047bbc907853c4d651a09673694a13f0d96e4e6d_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        echo twig_spaceless($___internal_8ec81a707962520daea90a14047bbc907853c4d651a09673694a13f0d96e4e6d_);
    }

    // line 45
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 47
            echo "        ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 47), ["action" => $context["action"]], false);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 51
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "    ";
        $this->displayBlock('edit_form', $context, $blocks);
        // line 55
        echo "
    ";
        // line 56
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 52
    public function block_edit_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form');
        echo "
    ";
    }

    // line 56
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 57)], false);
        echo "
    ";
    }

    // line 61
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    ";
        // line 64
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_select2_widget.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 64,  237 => 62,  233 => 61,  226 => 57,  222 => 56,  215 => 53,  211 => 52,  207 => 56,  204 => 55,  201 => 52,  197 => 51,  186 => 47,  181 => 46,  177 => 45,  173 => 38,  170 => 6,  169 => 41,  168 => 40,  167 => 39,  165 => 38,  161 => 37,  155 => 34,  151 => 33,  146 => 32,  142 => 31,  136 => 28,  132 => 27,  127 => 26,  123 => 25,  112 => 21,  108 => 20,  103 => 19,  99 => 18,  88 => 14,  84 => 13,  79 => 12,  75 => 11,  68 => 9,  61 => 8,  57 => 3,  55 => 6,  53 => 4,  46 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/edit.html.twig", "/Applications/MAMP/htdocs/tfe-swapcar/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/edit.html.twig");
    }
}
