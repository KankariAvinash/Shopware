<?php

use Twig\Environment;
use function Shopware\Core\Framework\Adapter\Twig\sw_get_attribute;
use function Shopware\Core\Framework\Adapter\Twig\sw_escape_filter;
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

/* @Storefront/storefront/layout/header/header.html.twig */
class __TwigTemplate_67d1b27eb531b2767fa214121042a36c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header' => [$this, 'block_layout_header'],
            'layout_top_bar' => [$this, 'block_layout_top_bar'],
            'layout_header_navigation' => [$this, 'block_layout_header_navigation'],
            'layout_header_logo' => [$this, 'block_layout_header_logo'],
            'layout_header_search' => [$this, 'block_layout_header_search'],
            'layout_header_navigation_toggle_tablet' => [$this, 'block_layout_header_navigation_toggle_tablet'],
            'layout_header_navigation_toggle_tablet_button' => [$this, 'block_layout_header_navigation_toggle_tablet_button'],
            'layout_header_navigation_toggle_tablet_button_icon' => [$this, 'block_layout_header_navigation_toggle_tablet_button_icon'],
            'layout_header_actions' => [$this, 'block_layout_header_actions'],
            'layout_header_navigation_toggle' => [$this, 'block_layout_header_navigation_toggle'],
            'layout_header_navigation_toggle_button' => [$this, 'block_layout_header_navigation_toggle_button'],
            'layout_header_navigation_toggle_button_icon' => [$this, 'block_layout_header_navigation_toggle_button_icon'],
            'layout_header_search_toggle' => [$this, 'block_layout_header_search_toggle'],
            'layout_header_actions_wishlist' => [$this, 'block_layout_header_actions_wishlist'],
            'layout_header_actions_account' => [$this, 'block_layout_header_actions_account'],
            'layout_header_actions_cart' => [$this, 'block_layout_header_actions_cart'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_header', $context, $blocks);
    }

    public function block_layout_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $this->displayBlock('layout_top_bar', $context, $blocks);
        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('layout_header_navigation', $context, $blocks);
    }

    // line 2
    public function block_layout_top_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/layout/header/top-bar.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 3)->display($context);
        // line 4
        echo "    ";
    }

    // line 6
    public function block_layout_header_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        <div class=\"row align-items-center header-row\">
            ";
        // line 8
        $this->displayBlock('layout_header_logo', $context, $blocks);
        // line 13
        echo "
            ";
        // line 14
        $this->displayBlock('layout_header_search', $context, $blocks);
        // line 46
        echo "
            ";
        // line 47
        $this->displayBlock('layout_header_actions', $context, $blocks);
        // line 137
        echo "        </div>
    ";
    }

    // line 8
    public function block_layout_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                <div class=\"col-12 col-lg-auto header-logo-col\">
                    ";
        // line 10
        $this->loadTemplate("@Storefront/storefront/layout/header/logo.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 10)->display($context);
        // line 11
        echo "                </div>
            ";
    }

    // line 14
    public function block_layout_header_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                <div class=\"col-12 order-2 col-sm order-sm-1 header-search-col\">
                    <div class=\"row\">
                        <div class=\"col-sm-auto d-none d-sm-block d-lg-none\">
                            ";
        // line 18
        $this->displayBlock('layout_header_navigation_toggle_tablet', $context, $blocks);
        // line 39
        echo "                        </div>
                        <div class=\"col\">
                            ";
        // line 41
        $this->loadTemplate("@Storefront/storefront/layout/header/search.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 41)->display($context);
        // line 42
        echo "                        </div>
                    </div>
                </div>
            ";
    }

    // line 18
    public function block_layout_header_navigation_toggle_tablet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                                <div class=\"nav-main-toggle\">
                                    ";
        // line 20
        $this->displayBlock('layout_header_navigation_toggle_tablet_button', $context, $blocks);
        // line 37
        echo "                                </div>
                            ";
    }

    // line 20
    public function block_layout_header_navigation_toggle_tablet_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                                        <button
                                            class=\"btn nav-main-toggle-btn header-actions-btn\"
                                            type=\"button\"
                                            ";
        // line 25
        echo "                                            ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.6.0.0")) {
            // line 26
            echo "                                                data-off-canvas-menu=\"true\"
                                            ";
        } else {
            // line 28
            echo "                                                data-offcanvas-menu=\"true\"
                                            ";
        }
        // line 30
        echo "                                            aria-label=\"";
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.menuLink")), "html", null, true);
        echo "\"
                                        >
                                            ";
        // line 32
        $this->displayBlock('layout_header_navigation_toggle_tablet_button_icon', $context, $blocks);
        // line 35
        echo "                                        </button>
                                    ";
    }

    // line 32
    public function block_layout_header_navigation_toggle_tablet_button_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "                                                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/header.html.twig", 33);
        })())->display(twig_array_merge($context, ["name" => "stack"]));
        // line 34
        echo "                                            ";
    }

    // line 47
    public function block_layout_header_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                <div class=\"col-12 order-1 col-sm-auto order-sm-2 header-actions-col\">
                    <div class=\"row g-0\">
                        ";
        // line 50
        $this->displayBlock('layout_header_navigation_toggle', $context, $blocks);
        // line 73
        echo "
                        ";
        // line 74
        $this->displayBlock('layout_header_search_toggle', $context, $blocks);
        // line 89
        echo "
                        ";
        // line 90
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled")) {
            // line 91
            echo "                            ";
            $this->displayBlock('layout_header_actions_wishlist', $context, $blocks);
            // line 103
            echo "                        ";
        }
        // line 104
        echo "
                        ";
        // line 105
        $this->displayBlock('layout_header_actions_account', $context, $blocks);
        // line 112
        echo "
                        ";
        // line 113
        $this->displayBlock('layout_header_actions_cart', $context, $blocks);
        // line 134
        echo "                    </div>
                </div>
            ";
    }

    // line 50
    public function block_layout_header_navigation_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                            <div class=\"col d-sm-none\">
                                <div class=\"menu-button\">
                                    ";
        // line 53
        $this->displayBlock('layout_header_navigation_toggle_button', $context, $blocks);
        // line 70
        echo "                                </div>
                            </div>
                        ";
    }

    // line 53
    public function block_layout_header_navigation_toggle_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "                                        <button
                                            class=\"btn nav-main-toggle-btn header-actions-btn\"
                                            type=\"button\"
                                            ";
        // line 58
        echo "                                            ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.6.0.0")) {
            // line 59
            echo "                                                data-off-canvas-menu=\"true\"
                                            ";
        } else {
            // line 61
            echo "                                                data-offcanvas-menu=\"true\"
                                            ";
        }
        // line 63
        echo "                                            aria-label=\"";
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.menuLink")), "html", null, true);
        echo "\"
                                        >
                                            ";
        // line 65
        $this->displayBlock('layout_header_navigation_toggle_button_icon', $context, $blocks);
        // line 68
        echo "                                        </button>
                                    ";
    }

    // line 65
    public function block_layout_header_navigation_toggle_button_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "                                                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/header.html.twig", 66);
        })())->display(twig_array_merge($context, ["name" => "stack"]));
        // line 67
        echo "                                            ";
    }

    // line 74
    public function block_layout_header_search_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "                            <div class=\"col-auto d-sm-none\">
                                <div class=\"search-toggle\">
                                    <button class=\"btn header-actions-btn search-toggle-btn js-search-toggle-btn collapsed\"
                                            type=\"button\"
                                            data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#searchCollapse\"
                                            aria-expanded=\"false\"
                                            aria-controls=\"searchCollapse\"
                                            aria-label=\"";
        // line 83
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchButton")), "html", null, true);
        echo "\">
                                        ";
        // line 84
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/header.html.twig", 84);
        })())->display(twig_array_merge($context, ["name" => "search"]));
        // line 85
        echo "                                    </button>
                                </div>
                            </div>
                        ";
    }

    // line 91
    public function block_layout_header_actions_wishlist($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "                                <div class=\"col-auto\">
                                    <div class=\"header-wishlist\">
                                        <a class=\"btn header-wishlist-btn header-actions-btn\"
                                           href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.wishlist.page");
        echo "\"
                                           title=\"";
        // line 96
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.wishlist")), "html", null, true);
        echo "\"
                                           aria-label=\"";
        // line 97
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.wishlist")), "html", null, true);
        echo "\">
                                            ";
        // line 98
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/wishlist-widget.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 98)->display($context);
        // line 99
        echo "                                        </a>
                                    </div>
                                </div>
                            ";
    }

    // line 105
    public function block_layout_header_actions_account($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "                            <div class=\"col-auto\">
                                <div class=\"account-menu\">
                                    ";
        // line 108
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/account-widget.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 108)->display($context);
        // line 109
        echo "                                </div>
                            </div>
                        ";
    }

    // line 113
    public function block_layout_header_actions_cart($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "                            <div class=\"col-auto\">
                                <div
                                    class=\"header-cart\"
                                    ";
        // line 118
        echo "                                    ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.6.0.0")) {
            // line 119
            echo "                                        data-off-canvas-cart=\"true\"
                                    ";
        } else {
            // line 121
            echo "                                        data-offcanvas-cart=\"true\"
                                    ";
        }
        // line 123
        echo "                                >
                                    <a class=\"btn header-cart-btn header-actions-btn\"
                                       href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.cart.page");
        echo "\"
                                       data-cart-widget=\"true\"
                                       title=\"";
        // line 127
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartTitle")), "html", null, true);
        echo "\"
                                       aria-label=\"";
        // line 128
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartTitle")), "html", null, true);
        echo "\">
                                        ";
        // line 129
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/cart-widget.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 129)->display($context);
        // line 130
        echo "                                    </a>
                                </div>
                            </div>
                        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  433 => 130,  431 => 129,  427 => 128,  423 => 127,  418 => 125,  414 => 123,  410 => 121,  406 => 119,  403 => 118,  398 => 114,  394 => 113,  388 => 109,  386 => 108,  382 => 106,  378 => 105,  371 => 99,  369 => 98,  365 => 97,  361 => 96,  357 => 95,  352 => 92,  348 => 91,  341 => 85,  333 => 84,  329 => 83,  319 => 75,  315 => 74,  311 => 67,  302 => 66,  298 => 65,  293 => 68,  291 => 65,  285 => 63,  281 => 61,  277 => 59,  274 => 58,  269 => 54,  265 => 53,  259 => 70,  257 => 53,  253 => 51,  249 => 50,  243 => 134,  241 => 113,  238 => 112,  236 => 105,  233 => 104,  230 => 103,  227 => 91,  225 => 90,  222 => 89,  220 => 74,  217 => 73,  215 => 50,  211 => 48,  207 => 47,  203 => 34,  194 => 33,  190 => 32,  185 => 35,  183 => 32,  177 => 30,  173 => 28,  169 => 26,  166 => 25,  161 => 21,  157 => 20,  152 => 37,  150 => 20,  147 => 19,  143 => 18,  136 => 42,  134 => 41,  130 => 39,  128 => 18,  123 => 15,  119 => 14,  114 => 11,  112 => 10,  109 => 9,  105 => 8,  100 => 137,  98 => 47,  95 => 46,  93 => 14,  90 => 13,  88 => 8,  85 => 7,  81 => 6,  77 => 4,  74 => 3,  70 => 2,  66 => 6,  63 => 5,  60 => 2,  53 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/header/header.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/header/header.html.twig");
    }
}
