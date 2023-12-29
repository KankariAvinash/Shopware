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

/* @Storefront/storefront/layout/header/search.html.twig */
class __TwigTemplate_fb6973890192d6abd999f31ec0ff6cf7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_search' => [$this, 'block_layout_header_search'],
            'layout_header_search_form' => [$this, 'block_layout_header_search_form'],
            'layout_header_search_input_group' => [$this, 'block_layout_header_search_input_group'],
            'layout_header_search_input' => [$this, 'block_layout_header_search_input'],
            'layout_header_search_button' => [$this, 'block_layout_header_search_button'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["searchWidgetOptions"] = ["searchWidgetMinChars" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 2
($context["page"] ?? null), "header", [], "any", false, false, false, 2), "activeLanguage", [], "any", false, false, false, 2), "productSearchConfig", [], "any", false, false, false, 2), "minSearchLength", [], "any", false, false, false, 2)) ?: (3))];
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('layout_header_search', $context, $blocks);
    }

    public function block_layout_header_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"collapse\"
         id=\"searchCollapse\">
        <div class=\"header-search\">
            ";
        // line 9
        $this->displayBlock('layout_header_search_form', $context, $blocks);
        // line 48
        echo "        </div>
    </div>
";
    }

    // line 9
    public function block_layout_header_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.search.page");
        echo "\"
                      method=\"get\"
                      ";
        // line 13
        echo "                      ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.6.0.0")) {
            // line 14
            echo "                          data-search-widget=\"true\"
                      ";
        } else {
            // line 16
            echo "                          data-search-form=\"true\"
                      ";
        }
        // line 18
        echo "                      data-search-widget-options='";
        echo sw_escape_filter($this->env, $this->env->getFilter('json_encode')->getCallable()(($context["searchWidgetOptions"] ?? null)), "html", null, true);
        echo "'
                      data-url=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.search.suggest");
        echo "?search=\"
                      class=\"header-search-form\">
                    ";
        // line 21
        $this->displayBlock('layout_header_search_input_group', $context, $blocks);
        // line 46
        echo "                </form>
            ";
    }

    // line 21
    public function block_layout_header_search_input_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                        <div class=\"input-group\">
                            ";
        // line 23
        $this->displayBlock('layout_header_search_input', $context, $blocks);
        // line 34
        echo "
                            ";
        // line 35
        $this->displayBlock('layout_header_search_button', $context, $blocks);
        // line 44
        echo "                        </div>
                    ";
    }

    // line 23
    public function block_layout_header_search_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                                <input type=\"search\"
                                       name=\"search\"
                                       class=\"form-control header-search-input\"
                                       autocomplete=\"off\"
                                       autocapitalize=\"off\"
                                       placeholder=\"";
        // line 29
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchPlaceholder")), "html", null, true);
        echo "\"
                                       aria-label=\"";
        // line 30
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchPlaceholder")), "html", null, true);
        echo "\"
                                       value=\"";
        // line 31
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "searchTerm", [], "any", false, false, false, 31), "html", null, true);
        echo "\"
                                >
                            ";
    }

    // line 35
    public function block_layout_header_search_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "                                <button type=\"submit\"
                                        class=\"btn header-search-btn\"
                                        aria-label=\"";
        // line 38
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchButton")), "html", null, true);
        echo "\">
                                    <span class=\"header-search-icon\">
                                        ";
        // line 40
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/search.html.twig", 40);
        })())->display(twig_array_merge($context, ["name" => "search"]));
        // line 41
        echo "                                    </span>
                                </button>
                            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/search.html.twig";
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
        return array (  172 => 41,  164 => 40,  159 => 38,  155 => 36,  151 => 35,  144 => 31,  140 => 30,  136 => 29,  129 => 24,  125 => 23,  120 => 44,  118 => 35,  115 => 34,  113 => 23,  110 => 22,  106 => 21,  101 => 46,  99 => 21,  94 => 19,  89 => 18,  85 => 16,  81 => 14,  78 => 13,  72 => 10,  68 => 9,  62 => 48,  60 => 9,  55 => 6,  48 => 5,  45 => 4,  43 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/header/search.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/header/search.html.twig");
    }
}
