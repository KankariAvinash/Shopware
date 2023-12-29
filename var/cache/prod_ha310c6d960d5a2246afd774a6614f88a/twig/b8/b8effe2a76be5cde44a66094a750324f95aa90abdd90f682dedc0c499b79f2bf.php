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

/* @Storefront/storefront/layout/cookie/cookie-permission.html.twig */
class __TwigTemplate_6df45a7ce03c4ece01d9032e9348f907 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_cookie_permission_inner' => [$this, 'block_layout_cookie_permission_inner'],
            'layout_cookie_permission_inner_content' => [$this, 'block_layout_cookie_permission_inner_content'],
            'layout_cookie_permission_inner_button' => [$this, 'block_layout_cookie_permission_inner_button'],
            'layout_cookie_permission_inner_button_deny' => [$this, 'block_layout_cookie_permission_inner_button_deny'],
            'layout_cookie_permission_inner_button_configuration' => [$this, 'block_layout_cookie_permission_inner_button_configuration'],
            'layout_cookie_permission_inner_button_accept_all' => [$this, 'block_layout_cookie_permission_inner_button_accept_all'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["useDefaultCookieConsent"] = ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.useDefaultCookieConsent") == true);
        // line 2
        if (($context["useDefaultCookieConsent"] ?? null)) {
            // line 3
            echo "    ";
            $this->displayBlock('layout_cookie_permission_inner', $context, $blocks);
        }
    }

    public function block_layout_cookie_permission_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "        ";
        $context["acceptAllCookies"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.acceptAllCookies");
        // line 5
        echo "        <div
            class=\"cookie-permission-container\"
            data-cookie-permission=\"true\">
            <div class=\"container\">
                <div class=\"row align-items-center\">

                    ";
        // line 11
        $this->displayBlock('layout_cookie_permission_inner_content', $context, $blocks);
        // line 18
        echo "
                    ";
        // line 19
        $this->displayBlock('layout_cookie_permission_inner_button', $context, $blocks);
        // line 54
        echo "                </div>
            </div>
        </div>
    ";
    }

    // line 11
    public function block_layout_cookie_permission_inner_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                        <div class=\"col cookie-permission-content\">
                            ";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.messageText", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.privacyPage")])]);
        // line 15
        echo "
                        </div>
                    ";
    }

    // line 19
    public function block_layout_cookie_permission_inner_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                        <div class=\"col-12 col-md-auto d-flex justify-content-center flex-wrap cookie-permission-actions pe-2\">
                            ";
        // line 21
        $this->displayBlock('layout_cookie_permission_inner_button_deny', $context, $blocks);
        // line 30
        echo "
                            ";
        // line 31
        $this->displayBlock('layout_cookie_permission_inner_button_configuration', $context, $blocks);
        // line 40
        echo "
                            ";
        // line 41
        if (($context["acceptAllCookies"] ?? null)) {
            // line 42
            echo "                                ";
            $this->displayBlock('layout_cookie_permission_inner_button_accept_all', $context, $blocks);
            // line 51
            echo "                            ";
        }
        // line 52
        echo "                        </div>
                    ";
    }

    // line 21
    public function block_layout_cookie_permission_inner_button_deny($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                                <span class=\"cookie-permission-button js-cookie-permission-button\">
                                    <button
                                        type=\"submit\"
                                        class=\"btn btn-primary\">
                                        ";
        // line 26
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.deny"));
        echo "
                                    </button>
                                </span>
                            ";
    }

    // line 31
    public function block_layout_cookie_permission_inner_button_configuration($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "                                <span class=\"js-cookie-configuration-button\">
                                    <button
                                        type=\"submit\"
                                        class=\"btn btn-primary\">
                                        ";
        // line 36
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.configure"));
        echo "
                                    </button>
                                </span>
                            ";
    }

    // line 42
    public function block_layout_cookie_permission_inner_button_accept_all($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "                                    <span class=\"js-cookie-accept-all-button\">
                                        <button
                                            type=\"submit\"
                                            class=\"btn btn-primary\">
                                            ";
        // line 47
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.acceptAll"));
        echo "
                                        </button>
                                    </span>
                                ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/cookie/cookie-permission.html.twig";
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
        return array (  172 => 47,  166 => 43,  162 => 42,  154 => 36,  148 => 32,  144 => 31,  136 => 26,  130 => 22,  126 => 21,  121 => 52,  118 => 51,  115 => 42,  113 => 41,  110 => 40,  108 => 31,  105 => 30,  103 => 21,  100 => 20,  96 => 19,  90 => 15,  88 => 13,  85 => 12,  81 => 11,  74 => 54,  72 => 19,  69 => 18,  67 => 11,  59 => 5,  56 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/cookie/cookie-permission.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/cookie/cookie-permission.html.twig");
    }
}
