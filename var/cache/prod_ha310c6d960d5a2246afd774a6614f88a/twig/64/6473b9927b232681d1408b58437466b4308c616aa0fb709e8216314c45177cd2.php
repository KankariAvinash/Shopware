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

/* @Storefront/storefront/layout/navigation/offcanvas/general-headline.html.twig */
class __TwigTemplate_bf7986ba75cfa1b9fe0d1a473746950f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_categories_headline' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_headline'],
            'layout_navigation_offcanvas_navigation_categories_headline_text' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_headline_text'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_navigation_offcanvas_navigation_categories_headline', $context, $blocks);
    }

    public function block_layout_navigation_offcanvas_navigation_categories_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"navigation-offcanvas-headline\">
        ";
        // line 3
        $this->displayBlock('layout_navigation_offcanvas_navigation_categories_headline_text', $context, $blocks);
        // line 6
        echo "    </div>
";
    }

    // line 3
    public function block_layout_navigation_offcanvas_navigation_categories_headline_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.categories"));
        echo "
        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/general-headline.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  60 => 4,  56 => 3,  51 => 6,  49 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/navigation/offcanvas/general-headline.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/general-headline.html.twig");
    }
}
