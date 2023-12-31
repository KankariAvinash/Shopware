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

/* @Storefront/storefront/layout/scroll-up.html.twig */
class __TwigTemplate_47f6bdd91a944df177d380731d99b2ee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_scroll_up_inner' => [$this, 'block_layout_scroll_up_inner'],
            'layout_scroll_up_button' => [$this, 'block_layout_scroll_up_button'],
            'layout_scroll_up_button_icon' => [$this, 'block_layout_scroll_up_button_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_scroll_up_inner', $context, $blocks);
    }

    public function block_layout_scroll_up_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"scroll-up-container\"
         data-scroll-up=\"true\">
        ";
        // line 4
        $this->displayBlock('layout_scroll_up_button', $context, $blocks);
        // line 14
        echo "    </div>
";
    }

    // line 4
    public function block_layout_scroll_up_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "            <div class=\"scroll-up-button js-scroll-up-button\">
                <button type=\"submit\"
                        class=\"btn btn-primary\">
                    ";
        // line 8
        $this->displayBlock('layout_scroll_up_button_icon', $context, $blocks);
        // line 11
        echo "                </button>
            </div>
        ";
    }

    // line 8
    public function block_layout_scroll_up_button_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/scroll-up.html.twig", 9);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "arrow-up"]));
        // line 10
        echo "                    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/scroll-up.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  88 => 10,  79 => 9,  75 => 8,  69 => 11,  67 => 8,  62 => 5,  58 => 4,  53 => 14,  51 => 4,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/scroll-up.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/scroll-up.html.twig");
    }
}
