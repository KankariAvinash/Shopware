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

/* @Storefront/storefront/layout/header/top-bar.html.twig */
class __TwigTemplate_16d7827a10e0627a9ff3c813e08281b6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_top_bar' => [$this, 'block_layout_header_top_bar'],
            'layout_header_top_bar_language' => [$this, 'block_layout_header_top_bar_language'],
            'layout_header_top_bar_currency' => [$this, 'block_layout_header_top_bar_currency'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_header_top_bar', $context, $blocks);
    }

    public function block_layout_header_top_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"top-bar d-none d-lg-block\">
        <nav class=\"top-bar-nav\">
            ";
        // line 4
        $this->displayBlock('layout_header_top_bar_language', $context, $blocks);
        // line 7
        echo "
            ";
        // line 8
        $this->displayBlock('layout_header_top_bar_currency', $context, $blocks);
        // line 11
        echo "        </nav>
    </div>
";
    }

    // line 4
    public function block_layout_header_top_bar_language($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/language-widget.html.twig", "@Storefront/storefront/layout/header/top-bar.html.twig", 5)->display($context);
        // line 6
        echo "            ";
    }

    // line 8
    public function block_layout_header_top_bar_currency($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/currency-widget.html.twig", "@Storefront/storefront/layout/header/top-bar.html.twig", 9)->display($context);
        // line 10
        echo "            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/top-bar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  82 => 10,  79 => 9,  75 => 8,  71 => 6,  68 => 5,  64 => 4,  58 => 11,  56 => 8,  53 => 7,  51 => 4,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/header/top-bar.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/header/top-bar.html.twig");
    }
}
