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

/* @Storefront/storefront/page/account/sidebar.html.twig */
class __TwigTemplate_0ddb14c01640a5208109a0ab769c0717 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_account_sidebar_inner' => [$this, 'block_page_account_sidebar_inner'],
            'page_account_sidebar_header' => [$this, 'block_page_account_sidebar_header'],
            'page_account_sidebar_menu' => [$this, 'block_page_account_sidebar_menu'],
            'page_account_sidebar_menu_inner' => [$this, 'block_page_account_sidebar_menu_inner'],
            'page_account_sidebar_link_home' => [$this, 'block_page_account_sidebar_link_home'],
            'page_account_sidebar_link_profile' => [$this, 'block_page_account_sidebar_link_profile'],
            'page_account_sidebar_link_address' => [$this, 'block_page_account_sidebar_link_address'],
            'page_account_sidebar_link_payment' => [$this, 'block_page_account_sidebar_link_payment'],
            'page_account_sidebar_link_orders' => [$this, 'block_page_account_sidebar_link_orders'],
            'page_account_sidebar_footer' => [$this, 'block_page_account_sidebar_footer'],
            'page_account_sidebar_logout' => [$this, 'block_page_account_sidebar_logout'],
            'page_account_sidebar_guest_abort' => [$this, 'block_page_account_sidebar_guest_abort'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_account_sidebar_inner', $context, $blocks);
    }

    public function block_page_account_sidebar_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"";
        if ( !($context["headerWidget"] ?? null)) {
            echo "account-aside";
        } else {
            echo "header-account-menu";
        }
        echo "\">
        <div class=\"card account-menu-inner\">
            ";
        // line 4
        $this->displayBlock('page_account_sidebar_header', $context, $blocks);
        // line 14
        echo "
            ";
        // line 15
        $this->displayBlock('page_account_sidebar_menu', $context, $blocks);
        // line 62
        echo "
            ";
        // line 63
        $this->displayBlock('page_account_sidebar_footer', $context, $blocks);
        // line 89
        echo "        </div>
    </div>
";
    }

    // line 4
    public function block_page_account_sidebar_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                ";
        if ( !($context["headerWidget"] ?? null)) {
            // line 6
            echo "                    <div class=\"card-header account-aside-header\">
                        ";
            // line 7
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.greetings"));
            echo "
                        ";
            // line 8
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "html", null, true);
            echo "
                        ";
            // line 9
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 9), "firstName", [], "any", false, false, false, 9), "html", null, true);
            echo "
                        ";
            // line 10
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 10), "lastName", [], "any", false, false, false, 10), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 13
        echo "            ";
    }

    // line 15
    public function block_page_account_sidebar_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                ";
        if ( !sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 16), "guest", [], "any", false, false, false, 16)) {
            // line 17
            echo "                    <div class=\"list-group list-group-flush account-aside-list-group\">
                        ";
            // line 18
            $this->displayBlock('page_account_sidebar_menu_inner', $context, $blocks);
            // line 59
            echo "                    </div>
                ";
        }
        // line 61
        echo "            ";
    }

    // line 18
    public function block_page_account_sidebar_menu_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                            ";
        $this->displayBlock('page_account_sidebar_link_home', $context, $blocks);
        // line 26
        echo "
                            ";
        // line 27
        $this->displayBlock('page_account_sidebar_link_profile', $context, $blocks);
        // line 34
        echo "
                            ";
        // line 35
        $this->displayBlock('page_account_sidebar_link_address', $context, $blocks);
        // line 42
        echo "
                            ";
        // line 43
        $this->displayBlock('page_account_sidebar_link_payment', $context, $blocks);
        // line 50
        echo "
                            ";
        // line 51
        $this->displayBlock('page_account_sidebar_link_orders', $context, $blocks);
        // line 58
        echo "                        ";
    }

    // line 19
    public function block_page_account_sidebar_link_home($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.home.page");
        echo "\"
                                   title=\"";
        // line 21
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewLink")), "html", null, true);
        echo "\"
                                   class=\"list-group-item list-group-item-action account-aside-item";
        // line 22
        if ((($context["activeRoute"] ?? null) === "frontend.account.home.page")) {
            echo " is-active";
        }
        echo "\">
                                    ";
        // line 23
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewLink"));
        echo "
                                </a>
                            ";
    }

    // line 27
    public function block_page_account_sidebar_link_profile($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.profile.page");
        echo "\"
                                   title=\"";
        // line 29
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileLink")), "html", null, true);
        echo "\"
                                   class=\"list-group-item list-group-item-action account-aside-item";
        // line 30
        if ((($context["activeRoute"] ?? null) === "frontend.account.profile.page")) {
            echo " is-active";
        }
        echo "\">
                                    ";
        // line 31
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileLink"));
        echo "
                                </a>
                            ";
    }

    // line 35
    public function block_page_account_sidebar_link_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "                                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.page");
        echo "\"
                                   title=\"";
        // line 37
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressLink")), "html", null, true);
        echo "\"
                                   class=\"list-group-item list-group-item-action account-aside-item";
        // line 38
        if ((($context["activeRoute"] ?? null) === "frontend.account.address.page")) {
            echo " is-active";
        }
        echo "\">
                                    ";
        // line 39
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressLink"));
        echo "
                                </a>
                            ";
    }

    // line 43
    public function block_page_account_sidebar_link_payment($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "                                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.payment.page");
        echo "\"
                                   title=\"";
        // line 45
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.paymentLink")), "html", null, true);
        echo "\"
                                   class=\"list-group-item list-group-item-action account-aside-item";
        // line 46
        if ((($context["activeRoute"] ?? null) === "frontend.account.payment.page")) {
            echo " is-active";
        }
        echo "\">
                                    ";
        // line 47
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.paymentLink"));
        echo "
                                </a>
                            ";
    }

    // line 51
    public function block_page_account_sidebar_link_orders($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.order.page");
        echo "\"
                                   title=\"";
        // line 53
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.ordersLink")), "html", null, true);
        echo "\"
                                   class=\"list-group-item list-group-item-action account-aside-item";
        // line 54
        if ((($context["activeRoute"] ?? null) === "frontend.account.order.page")) {
            echo " is-active";
        }
        echo "\">
                                    ";
        // line 55
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.ordersLink"));
        echo "
                                </a>
                            ";
    }

    // line 63
    public function block_page_account_sidebar_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "                ";
        if (sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 64)) {
            // line 65
            echo "                    ";
            if ( !sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 65), "guest", [], "any", false, false, false, 65)) {
                // line 66
                echo "                        <div class=\"card-footer account-aside-footer\">
                            ";
                // line 67
                $this->displayBlock('page_account_sidebar_logout', $context, $blocks);
                // line 74
                echo "                        </div>
                    ";
            } else {
                // line 76
                echo "                        <div class=\"card-footer account-aside-footer account-guest-abort\">
                            ";
                // line 77
                $this->displayBlock('page_account_sidebar_guest_abort', $context, $blocks);
                // line 85
                echo "                        </div>
                    ";
            }
            // line 87
            echo "                ";
        }
        // line 88
        echo "            ";
    }

    // line 67
    public function block_page_account_sidebar_logout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "                                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.logout.page");
        echo "\"
                                   class=\"btn btn-link account-aside-btn\">
                                    ";
        // line 70
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/account/sidebar.html.twig", 70);
        })())->display(twig_array_merge($context, ["name" => "log-out"]));
        // line 71
        echo "                                    ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.logout"));
        echo "
                                </a>
                            ";
    }

    // line 77
    public function block_page_account_sidebar_guest_abort($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "                                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.logout.page");
        echo "\"
                                   data-account-guest-abort-button=\"true\"
                                   class=\"btn btn-link account-aside-btn\">
                                    ";
        // line 81
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/account/sidebar.html.twig", 81);
        })())->display(twig_array_merge($context, ["name" => "log-out"]));
        // line 82
        echo "                                    ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.guestAbort"));
        echo "
                                </a>
                            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/sidebar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  377 => 82,  369 => 81,  362 => 78,  358 => 77,  350 => 71,  342 => 70,  336 => 68,  332 => 67,  328 => 88,  325 => 87,  321 => 85,  319 => 77,  316 => 76,  312 => 74,  310 => 67,  307 => 66,  304 => 65,  301 => 64,  297 => 63,  290 => 55,  284 => 54,  280 => 53,  275 => 52,  271 => 51,  264 => 47,  258 => 46,  254 => 45,  249 => 44,  245 => 43,  238 => 39,  232 => 38,  228 => 37,  223 => 36,  219 => 35,  212 => 31,  206 => 30,  202 => 29,  197 => 28,  193 => 27,  186 => 23,  180 => 22,  176 => 21,  171 => 20,  167 => 19,  163 => 58,  161 => 51,  158 => 50,  156 => 43,  153 => 42,  151 => 35,  148 => 34,  146 => 27,  143 => 26,  140 => 19,  136 => 18,  132 => 61,  128 => 59,  126 => 18,  123 => 17,  120 => 16,  116 => 15,  112 => 13,  106 => 10,  102 => 9,  98 => 8,  94 => 7,  91 => 6,  88 => 5,  84 => 4,  78 => 89,  76 => 63,  73 => 62,  71 => 15,  68 => 14,  66 => 4,  56 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/account/sidebar.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/page/account/sidebar.html.twig");
    }
}
