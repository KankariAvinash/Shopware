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

/* @Storefront/storefront/layout/header/logo.html.twig */
class __TwigTemplate_37099fc49afa778264ba3cf2e6687952 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_logo_inner' => [$this, 'block_layout_header_logo_inner'],
            'layout_header_logo_link' => [$this, 'block_layout_header_logo_link'],
            'layout_header_logo_image' => [$this, 'block_layout_header_logo_image'],
            'layout_header_logo_image_tablet' => [$this, 'block_layout_header_logo_image_tablet'],
            'layout_header_logo_image_mobile' => [$this, 'block_layout_header_logo_image_mobile'],
            'layout_header_logo_image_default' => [$this, 'block_layout_header_logo_image_default'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_header_logo_inner', $context, $blocks);
    }

    public function block_layout_header_logo_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"header-logo-main\">
        ";
        // line 3
        $this->displayBlock('layout_header_logo_link', $context, $blocks);
        // line 34
        echo "    </div>
";
    }

    // line 3
    public function block_layout_header_logo_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            <a class=\"header-logo-main-link\"
               href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.home.page");
        echo "\"
               title=\"";
        // line 6
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.logoLink")), "html", null, true);
        echo "\">
                ";
        // line 7
        $this->displayBlock('layout_header_logo_image', $context, $blocks);
        // line 32
        echo "            </a>
        ";
    }

    // line 7
    public function block_layout_header_logo_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                    <picture class=\"header-logo-picture\">
                            ";
        // line 9
        $this->displayBlock('layout_header_logo_image_tablet', $context, $blocks);
        // line 15
        echo "
                        ";
        // line 16
        $this->displayBlock('layout_header_logo_image_mobile', $context, $blocks);
        // line 22
        echo "
                        ";
        // line 23
        $this->displayBlock('layout_header_logo_image_default', $context, $blocks);
        // line 30
        echo "                    </picture>
                ";
    }

    // line 9
    public function block_layout_header_logo_image_tablet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                            ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-tablet") && ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-tablet") != $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop")))) {
            // line 11
            echo "                                <source srcset=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-tablet")), "html", null, true);
            echo "\"
                                        media=\"(min-width: ";
            // line 12
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md"), "html", null, true);
            echo "px) and (max-width: ";
            echo sw_escape_filter($this->env, ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg") - 1), "html", null, true);
            echo "px)\">
                            ";
        }
        // line 14
        echo "                        ";
    }

    // line 16
    public function block_layout_header_logo_image_mobile($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                            ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-mobile") && ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-mobile") != $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop")))) {
            // line 18
            echo "                                <source srcset=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-mobile")), "html", null, true);
            echo "\"
                                        media=\"(max-width: ";
            // line 19
            echo sw_escape_filter($this->env, ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md") - 1), "html", null, true);
            echo "px)\">
                            ";
        }
        // line 21
        echo "                        ";
    }

    // line 23
    public function block_layout_header_logo_image_default($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                            ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop")) {
            // line 25
            echo "                                <img src=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop")), "html", null, true);
            echo "\"
                                     alt=\"";
            // line 26
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.logoLink")), "html", null, true);
            echo "\"
                                     class=\"img-fluid header-logo-main-img\">
                            ";
        }
        // line 29
        echo "                        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/logo.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  168 => 29,  162 => 26,  157 => 25,  154 => 24,  150 => 23,  146 => 21,  141 => 19,  136 => 18,  133 => 17,  129 => 16,  125 => 14,  118 => 12,  113 => 11,  110 => 10,  106 => 9,  101 => 30,  99 => 23,  96 => 22,  94 => 16,  91 => 15,  89 => 9,  86 => 8,  82 => 7,  77 => 32,  75 => 7,  71 => 6,  67 => 5,  64 => 4,  60 => 3,  55 => 34,  53 => 3,  50 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/header/logo.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/header/logo.html.twig");
    }
}
