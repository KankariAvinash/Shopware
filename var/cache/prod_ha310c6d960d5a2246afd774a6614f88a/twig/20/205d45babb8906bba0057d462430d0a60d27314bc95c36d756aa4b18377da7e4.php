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

/* @Storefront/storefront/layout/header/account-menu.html.twig */
class __TwigTemplate_8cba8d69f96d0dab9b93a78afb7ac666 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
            'layout_header_actions_account_widget_dropdown_header' => [$this, 'block_layout_header_actions_account_widget_dropdown_header'],
            'layout_header_actions_account_widget_dropdown_login' => [$this, 'block_layout_header_actions_account_widget_dropdown_login'],
            'layout_header_actions_account_widget_dropdown_login_login' => [$this, 'block_layout_header_actions_account_widget_dropdown_login_login'],
            'layout_header_actions_account_widget_dropdown_login_register' => [$this, 'block_layout_header_actions_account_widget_dropdown_login_register'],
            'layout_header_actions_account_widget_dropdown_links' => [$this, 'block_layout_header_actions_account_widget_dropdown_links'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/utilities/offcanvas.html.twig", "@Storefront/storefront/layout/header/account-menu.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_utilities_offcanvas_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"account-menu\">
        ";
        // line 5
        $this->displayBlock('layout_header_actions_account_widget_dropdown_header', $context, $blocks);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('layout_header_actions_account_widget_dropdown_login', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('layout_header_actions_account_widget_dropdown_links', $context, $blocks);
        // line 39
        echo "    </div>
";
    }

    // line 5
    public function block_layout_header_actions_account_widget_dropdown_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            ";
        if ( !sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 6), "guest", [], "any", false, false, false, 6)) {
            // line 7
            echo "                <div class=\"dropdown-header account-menu-header\">
                    ";
            // line 8
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.myAccount"));
            echo "
                </div>
            ";
        }
        // line 11
        echo "        ";
    }

    // line 13
    public function block_layout_header_actions_account_widget_dropdown_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        if ( !sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 14)) {
            // line 15
            echo "                <div class=\"account-menu-login\">
                    ";
            // line 16
            $this->displayBlock('layout_header_actions_account_widget_dropdown_login_login', $context, $blocks);
            // line 23
            echo "
                    ";
            // line 24
            $this->displayBlock('layout_header_actions_account_widget_dropdown_login_register', $context, $blocks);
            // line 30
            echo "                </div>
            ";
        }
        // line 32
        echo "        ";
    }

    // line 16
    public function block_layout_header_actions_account_widget_dropdown_login_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.login.page");
        echo "\"
                           title=\"";
        // line 18
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginSubmit")), "html", null, true);
        echo "\"
                           class=\"btn btn-primary account-menu-login-button\">
                            ";
        // line 20
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginSubmit"));
        echo "
                        </a>
                    ";
    }

    // line 24
    public function block_layout_header_actions_account_widget_dropdown_login_register($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                        <div class=\"account-menu-register\">
                            ";
        // line 26
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orRegister"));
        echo " <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.login.page");
        echo "\"
                                                                            title=\"";
        // line 27
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orRegisterLink")), "html", null, true);
        echo "\">";
        echo sw_escape_filter($this->env, twig_lower_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orRegisterLink"))), "html", null, true);
        echo "</a>
                        </div>
                    ";
    }

    // line 34
    public function block_layout_header_actions_account_widget_dropdown_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "            <div class=\"account-menu-links\">
                ";
        // line 36
        $this->loadTemplate("@Storefront/storefront/page/account/sidebar.html.twig", "@Storefront/storefront/layout/header/account-menu.html.twig", 36)->display(twig_array_merge($context, ["headerWidget" => true]));
        // line 37
        echo "            </div>
        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/account-menu.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  172 => 37,  170 => 36,  167 => 35,  163 => 34,  154 => 27,  148 => 26,  145 => 25,  141 => 24,  134 => 20,  129 => 18,  124 => 17,  120 => 16,  116 => 32,  112 => 30,  110 => 24,  107 => 23,  105 => 16,  102 => 15,  99 => 14,  95 => 13,  91 => 11,  85 => 8,  82 => 7,  79 => 6,  75 => 5,  70 => 39,  68 => 34,  65 => 33,  63 => 13,  60 => 12,  58 => 5,  55 => 4,  51 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/header/account-menu.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/header/account-menu.html.twig");
    }
}
