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

/* bundle/EasyAdminBundle/layout.html.twig */
class __TwigTemplate_db0ecd939ef9f92df08ffafdbcaa0bd58652f2025dbbd70489db7865e496f3ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_metas' => [$this, 'block_head_metas'],
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'javascript_page_layout' => [$this, 'block_javascript_page_layout'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'wrapper' => [$this, 'block_wrapper'],
            'header' => [$this, 'block_header'],
            'header_navbar' => [$this, 'block_header_navbar'],
            'header_logo' => [$this, 'block_header_logo'],
            'user_menu' => [$this, 'block_user_menu'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'sidebar' => [$this, 'block_sidebar'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'content_help' => [$this, 'block_content_help'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["__internal_1db18a119f0e7c80e295d3bb4e674f676bcb8c49888335a9ce285617d5b76fbb"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 3
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5), "html", null, true);
        echo "\" dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "textDirection", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
<head>
    ";
        // line 7
        $this->displayBlock('head_metas', $context, $blocks);
        // line 14
        echo "
    <title>";
        // line 15
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

    ";
        // line 17
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('configured_stylesheets', $context, $blocks);
        // line 25
        echo "
    ";
        // line 26
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 29
        echo "
    ";
        // line 30
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 33
        echo "
    ";
        // line 34
        $this->displayBlock('configured_javascripts', $context, $blocks);
        // line 38
        echo "
    ";
        // line 39
        if ((0 === twig_compare("rtl", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 39), "textDirection", [], "any", false, false, false, 39)))) {
            // line 40
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.rtl.css"), "html", null, true);
            echo "\">
        <link rel=\"stylesheet\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app-custom-rtl.css"), "html", null, true);
            echo "\">
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('configured_head_contents', $context, $blocks);
        // line 49
        echo "</head>

";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 211
        echo "</html>
";
    }

    // line 7
    public function block_head_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    ";
    }

    // line 15
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
    }

    // line 17
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 21
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 22), "cssAssets", [], "any", true, true, false, 22) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 22), "cssAssets", [], "any", false, false, false, 22)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 22), "cssAssets", [], "any", false, false, false, 22)) : ([]))], false);
        echo "
        ";
        // line 23
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "webpackEncoreAssets", [], "any", true, true, false, 23) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "webpackEncoreAssets", [], "any", false, false, false, 23)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "webpackEncoreAssets", [], "any", false, false, false, 23)) : ([]))], false);
        echo "
    ";
    }

    // line 26
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardFaviconPath", [], "any", false, false, false, 27)), "html", null, true);
        echo "\">
    ";
    }

    // line 30
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 34
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 35), "jsAssets", [], "any", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 35), "jsAssets", [], "any", false, false, false, 35)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 35), "jsAssets", [], "any", false, false, false, 35)) : ([]))], false);
        echo "
        ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "webpackEncoreAssets", [], "any", true, true, false, 36) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "webpackEncoreAssets", [], "any", false, false, false, 36)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "webpackEncoreAssets", [], "any", false, false, false, 36)) : ([]))], false);
        echo "
    ";
    }

    // line 44
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 45), "headContents", [], "any", true, true, false, 45) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 45), "headContents", [], "any", false, false, false, 45)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 45), "headContents", [], "any", false, false, false, 45)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 46
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    ";
    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"ea ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
    ";
        // line 53
        $this->displayBlock('javascript_page_layout', $context, $blocks);
        // line 61
        echo "
    ";
        // line 62
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 201
        echo "
    ";
        // line 202
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 203
        echo "
    ";
        // line 204
        $this->displayBlock('configured_body_contents', $context, $blocks);
        // line 209
        echo "    </body>
";
    }

    // line 52
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 53
    public function block_javascript_page_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "        <script>
            document.body.classList.add(
                'ea-content-width-' + (localStorage.getItem('ea/content/width') || '";
        // line 56
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "contentWidth", [], "any", true, true, false, 56) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "contentWidth", [], "any", false, false, false, 56)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "contentWidth", [], "any", false, false, false, 56)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 56) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 56)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 56)) : ("normal")))), "html", null, true);
        echo "'),
                'ea-sidebar-width-' + (localStorage.getItem('ea/sidebar/width') || '";
        // line 57
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 57), "sidebarWidth", [], "any", true, true, false, 57) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 57), "sidebarWidth", [], "any", false, false, false, 57)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 57), "sidebarWidth", [], "any", false, false, false, 57)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 57) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 57)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 57)) : ("normal")))), "html", null, true);
        echo "')
            );
        </script>
    ";
    }

    // line 62
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "        ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 66
        echo "
        <div class=\"wrapper\">
            ";
        // line 68
        $this->displayBlock('wrapper', $context, $blocks);
        // line 199
        echo "        </div>
    ";
    }

    // line 63
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "            ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "flash_messages"], "method", false, false, false, 64));
        echo "
        ";
    }

    // line 68
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "                <header class=\"main-header\">
                    ";
        // line 70
        $this->displayBlock('header', $context, $blocks);
        // line 136
        echo "                </header>

                <aside class=\"main-sidebar\">
                    ";
        // line 139
        $this->displayBlock('sidebar', $context, $blocks);
        // line 147
        echo "                </aside>

                <div class=\"content-wrapper\">
                    <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>

                    ";
        // line 152
        $this->displayBlock('content', $context, $blocks);
        // line 195
        echo "
                    <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                </div>
            ";
    }

    // line 70
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "                        <nav class=\"navbar\" role=\"navigation\">
                            ";
        // line 72
        $this->displayBlock('header_navbar', $context, $blocks);
        // line 85
        echo "                        </nav>

                        ";
        // line 87
        ob_start(function () { return ''; });
        // line 88
        echo "                            <div class=\"popover-content-section user-details ";
        echo (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 88), "items", [], "any", false, false, false, 88)), 0))) ? ("user-has-actions") : (""));
        echo "\">
                                <p class=\"small text-muted mb-0\">";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</p>
                                <p class=\"user-details-name\">
                                    ";
        // line 91
        echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 91))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 91), "name", [], "any", false, false, false, 91))), "html", null, true);
        echo "
                                </p>
                            </div>

                            ";
        // line 95
        $this->displayBlock('user_menu', $context, $blocks);
        // line 111
        echo "                        ";
        $context["_user_menu_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 112
        echo "
                        <div class=\"content-top navbar-custom-menu\">
                            ";
        // line 114
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 134
        echo "                        </div>
                    ";
    }

    // line 72
    public function block_header_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "                                <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                                    <i class=\"fa fa-fw fa-bars\"></i>
                                </button>

                                <div id=\"header-logo\">
                                    ";
        // line 78
        $this->displayBlock('header_logo', $context, $blocks);
        // line 83
        echo "                                </div>
                            ";
    }

    // line 78
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "                                        <a class=\"logo ";
        echo (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 79)), 14))) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 79)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 79));
        echo "\">
                                            ";
        // line 80
        echo twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 80);
        echo "
                                        </a>
                                    ";
    }

    // line 95
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "                                ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 96), "items", [], "any", false, false, false, 96)), 0))) {
            // line 97
            echo "                                    <div class=\"popover-content-section user-menu\">
                                        ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 98), "items", [], "any", false, false, false, 98));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 99
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isMenuSection", [], "any", false, false, false, 99)) {
                    // line 100
                    echo "                                                <hr class=\"m-0\" />
                                            ";
                } else {
                    // line 102
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 102), "html", null, true);
                    echo "\" class=\"user-action ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 102), "html", null, true);
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 102), "html", null, true);
                    echo "\" rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 102), "html", null, true);
                    echo "\" referrerpolicy=\"origin-when-cross-origin\">
                                                    ";
                    // line 103
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 103))) {
                        echo "<i class=\"fa fa-fw ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 103), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 104
                    echo "                                                    <span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 104), "html", null, true);
                    echo "</span>
                                                </a>
                                            ";
                }
                // line 107
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                                    </div>
                                ";
        }
        // line 110
        echo "                            ";
    }

    // line 114
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "                                ";
        if (twig_constant_is_defined("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR")) {
            // line 116
            echo "                                    ";
            $context["impersonator_permission"] = "IS_IMPERSONATOR";
            // line 117
            echo "                                ";
        } else {
            // line 118
            echo "                                    ";
            $context["impersonator_permission"] = "ROLE_PREVIOUS_ADMIN";
            // line 119
            echo "                                ";
        }
        // line 120
        echo "
                                <div class=\"user user-menu-wrapper ";
        // line 121
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        echo "\" data-toggle=\"popover\" data-placement=\"bottom\" data-container=\".user-menu-wrapper\" data-content=\"";
        echo twig_escape_filter($this->env, ($context["_user_menu_content"] ?? null), "html_attr");
        echo "\" data-html=\"true\">
                                    ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 122), "isAvatarDisplayed", [], "any", false, false, false, 122)) {
            // line 123
            echo "                                        ";
            if ((0 === twig_compare(null, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 123), "avatarUrl", [], "any", false, false, false, 123)))) {
                // line 124
                echo "                                            <i class=\"fa fa-fw ";
                echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 124))) ? ("fa-user-circle") : ("fa-user-times"));
                echo " user-avatar\"></i>
                                        ";
            } else {
                // line 126
                echo "                                            <img class=\"user-avatar\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 126), "avatarUrl", [], "any", false, false, false, 126), "html", null, true);
                echo "\" />
                                        ";
            }
            // line 128
            echo "                                    ";
        }
        // line 129
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 129), "isNameDisplayed", [], "any", false, false, false, 129)) {
            // line 130
            echo "                                        <span class=\"user-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 130), "name", [], "any", false, false, false, 130), "html", null, true);
            echo "</span>
                                    ";
        }
        // line 132
        echo "                                </div>
                            ";
    }

    // line 139
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        echo "                        <section class=\"sidebar\">
                            ";
        // line 141
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 144
        echo "                        </section>

                    ";
    }

    // line 141
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        echo "                                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "main_menu"], "method", false, false, false, 142));
        echo "
                            ";
    }

    // line 152
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "                        <div class=\"content\">
                            ";
        // line 154
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 180
        echo "
                            <section id=\"main\" class=\"content-body\">
                                ";
        // line 182
        $this->displayBlock('main', $context, $blocks);
        // line 183
        echo "                            </section>

                            ";
        // line 185
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 193
        echo "                        </div>
                    ";
    }

    // line 154
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        echo "                                ";
        $context["has_help_message"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 155), "helpMessage", [], "any", true, true, false, 155) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 155), "helpMessage", [], "any", false, false, false, 155)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 155), "helpMessage", [], "any", false, false, false, 155)) : ("")));
        // line 156
        echo "                                <section class=\"content-header\">
                                    ";
        // line 157
        $this->displayBlock('content_header', $context, $blocks);
        // line 178
        echo "                                </section>
                            ";
    }

    // line 157
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        echo "                                        <div class=\"d-flex flex-row justify-content-between align-content-center w-100\">
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    ";
        // line 161
        $this->displayBlock('content_title', $context, $blocks);
        // line 162
        echo "
                                                    ";
        // line 163
        $this->displayBlock('content_help', $context, $blocks);
        // line 170
        echo "                                                </h1>
                                            </div>

                                            ";
        // line 173
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 176
        echo "                                        </div>
                                    ";
    }

    // line 161
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 163
    public function block_content_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 164
        echo "                                                        ";
        if (($context["has_help_message"] ?? null)) {
            // line 165
            echo "                                                            <span class=\"content-header-help\">
                                                                <i class=\"far fa-question-circle\" data-toggle=\"tooltip\" title=\"";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 166), "helpMessage", [], "any", false, false, false, 166), "html_attr");
            echo "\"></i>
                                                            </span>
                                                        ";
        }
        // line 169
        echo "                                                    ";
    }

    // line 173
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 174
        echo "                                                <div class=\"page-actions\">";
        $this->displayBlock('page_actions', $context, $blocks);
        echo "</div>
                                            ";
    }

    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 182
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 185
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 186
        echo "                                ";
        $context["content_footer"] = ((        $this->hasBlock("content_footer", $context, $blocks)) ? (        $this->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 187
        echo "                                ";
        if ( !twig_test_empty(($context["content_footer"] ?? null))) {
            // line 188
            echo "                                    <section class=\"content-footer\">
                                        ";
            // line 189
            echo twig_escape_filter($this->env, ($context["content_footer"] ?? null), "html", null, true);
            echo "
                                    </section>
                                ";
        }
        // line 192
        echo "                            ";
    }

    // line 202
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 204
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 205
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 205), "bodyContents", [], "any", true, true, false, 205) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 205), "bodyContents", [], "any", false, false, false, 205)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 205), "bodyContents", [], "any", false, false, false, 205)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 206
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "    ";
    }

    public function getTemplateName()
    {
        return "bundle/EasyAdminBundle/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  775 => 208,  766 => 206,  761 => 205,  757 => 204,  751 => 202,  747 => 192,  741 => 189,  738 => 188,  735 => 187,  732 => 186,  728 => 185,  722 => 182,  710 => 174,  706 => 173,  702 => 169,  696 => 166,  693 => 165,  690 => 164,  686 => 163,  680 => 161,  675 => 176,  673 => 173,  668 => 170,  666 => 163,  663 => 162,  661 => 161,  656 => 158,  652 => 157,  647 => 178,  645 => 157,  642 => 156,  639 => 155,  635 => 154,  630 => 193,  628 => 185,  624 => 183,  622 => 182,  618 => 180,  616 => 154,  613 => 153,  609 => 152,  602 => 142,  598 => 141,  592 => 144,  590 => 141,  587 => 140,  583 => 139,  578 => 132,  572 => 130,  569 => 129,  566 => 128,  560 => 126,  554 => 124,  551 => 123,  549 => 122,  543 => 121,  540 => 120,  537 => 119,  534 => 118,  531 => 117,  528 => 116,  525 => 115,  521 => 114,  517 => 110,  513 => 108,  507 => 107,  500 => 104,  494 => 103,  483 => 102,  479 => 100,  476 => 99,  472 => 98,  469 => 97,  466 => 96,  462 => 95,  455 => 80,  446 => 79,  442 => 78,  437 => 83,  435 => 78,  428 => 73,  424 => 72,  419 => 134,  417 => 114,  413 => 112,  410 => 111,  408 => 95,  401 => 91,  396 => 89,  391 => 88,  389 => 87,  385 => 85,  383 => 72,  380 => 71,  376 => 70,  369 => 195,  367 => 152,  360 => 147,  358 => 139,  353 => 136,  351 => 70,  348 => 69,  344 => 68,  337 => 64,  333 => 63,  328 => 199,  326 => 68,  322 => 66,  319 => 63,  315 => 62,  307 => 57,  303 => 56,  299 => 54,  295 => 53,  284 => 52,  279 => 209,  277 => 204,  274 => 203,  272 => 202,  269 => 201,  267 => 62,  264 => 61,  262 => 53,  255 => 52,  251 => 51,  247 => 48,  238 => 46,  233 => 45,  229 => 44,  223 => 36,  218 => 35,  214 => 34,  207 => 31,  203 => 30,  196 => 27,  192 => 26,  186 => 23,  181 => 22,  177 => 21,  170 => 18,  166 => 17,  159 => 15,  150 => 8,  146 => 7,  141 => 211,  139 => 51,  135 => 49,  133 => 44,  130 => 43,  125 => 41,  120 => 40,  118 => 39,  115 => 38,  113 => 34,  110 => 33,  108 => 30,  105 => 29,  103 => 26,  100 => 25,  98 => 21,  95 => 20,  93 => 17,  88 => 15,  85 => 14,  83 => 7,  76 => 5,  72 => 3,  70 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "bundle/EasyAdminBundle/layout.html.twig", "/Applications/MAMP/htdocs/tfe-swapcar/templates/bundle/EasyAdminBundle/layout.html.twig");
    }
}
