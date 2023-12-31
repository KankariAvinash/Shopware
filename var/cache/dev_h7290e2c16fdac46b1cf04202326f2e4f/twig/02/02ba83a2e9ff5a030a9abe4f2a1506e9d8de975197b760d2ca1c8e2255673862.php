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

/* @Storefront/storefront/component/product/listing.html.twig */
class __TwigTemplate_b6f0487f76fdb88fd2bae96146bbc362 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_listing' => [$this, 'block_product_listing'],
            'element_product_listing_wrapper_content' => [$this, 'block_element_product_listing_wrapper_content'],
            'element_product_listing_pagination_nav_actions' => [$this, 'block_element_product_listing_pagination_nav_actions'],
            'element_product_listing_pagination_nav_top' => [$this, 'block_element_product_listing_pagination_nav_top'],
            'element_product_listing_sorting' => [$this, 'block_element_product_listing_sorting'],
            'element_product_listing_row' => [$this, 'block_element_product_listing_row'],
            'element_product_listing_col' => [$this, 'block_element_product_listing_col'],
            'element_product_listing_box' => [$this, 'block_element_product_listing_box'],
            'element_product_listing_col_empty' => [$this, 'block_element_product_listing_col_empty'],
            'element_product_listing_col_empty_alert' => [$this, 'block_element_product_listing_col_empty_alert'],
            'element_product_listing_pagination_nav_bottom' => [$this, 'block_element_product_listing_pagination_nav_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/listing.html.twig"));

        // line 1
        $context["currentPage"] = twig_round(((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 1), "offset", [], "any", false, false, false, 1) + 1) / sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 1), "limit", [], "any", false, false, false, 1)), 0, "ceil");
        // line 2
        $context["paginationConfig"] = $this->env->getFilter('json_encode')->getCallable()(["page" => ($context["currentPage"] ?? null)]);
        // line 3
        echo "
";
        // line 4
        if ( !array_key_exists("disableEmptyFilter", $context)) {
            // line 5
            echo "    ";
            $context["disableEmptyFilter"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.listing.disableEmptyFilterOptions");
        }
        // line 7
        echo "
";
        // line 8
        $context["listingPagination"] = ["sidebar" =>         // line 9
($context["sidebar"] ?? null), "params" =>         // line 10
($context["params"] ?? null), "dataUrl" =>         // line 11
($context["dataUrl"] ?? null), "filterUrl" =>         // line 12
($context["filterUrl"] ?? null), "disableEmptyFilter" =>         // line 13
($context["disableEmptyFilter"] ?? null), "snippets" => ["resetAllButtonText" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterPanelResetAll"))]];
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('product_listing', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_product_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_listing"));

        // line 20
        echo "    <div class=\"cms-element-product-listing-wrapper\"
         data-listing-pagination=\"true\"
         data-listing-pagination-options='";
        // line 22
        echo sw_escape_filter($this->env, ($context["paginationConfig"] ?? null), "html", null, true);
        echo "'
         data-listing=\"true\"
         data-listing-options='";
        // line 24
        echo sw_escape_filter($this->env, $this->env->getFilter('json_encode')->getCallable()(($context["listingPagination"] ?? null)), "html", null, true);
        echo "'>

        ";
        // line 26
        $this->displayBlock('element_product_listing_wrapper_content', $context, $blocks);
        // line 93
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 26
    public function block_element_product_listing_wrapper_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_wrapper_content"));

        // line 27
        echo "            <div class=\"cms-element-product-listing\">
                ";
        // line 28
        if ((sw_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 28) > 0)) {
            // line 29
            echo "                    ";
            $this->displayBlock('element_product_listing_pagination_nav_actions', $context, $blocks);
            // line 50
            echo "                ";
        }
        // line 51
        echo "
                ";
        // line 52
        $this->displayBlock('element_product_listing_row', $context, $blocks);
        // line 81
        echo "
                ";
        // line 82
        if ((sw_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 82) > sw_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "limit", [], "any", false, false, false, 82))) {
            // line 83
            echo "                    ";
            $this->displayBlock('element_product_listing_pagination_nav_bottom', $context, $blocks);
            // line 90
            echo "                ";
        }
        // line 91
        echo "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
    public function block_element_product_listing_pagination_nav_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_pagination_nav_actions"));

        // line 30
        echo "                        <div class=\"cms-element-product-listing-actions row justify-content-between\">
                            <div class=\"col-md-auto\">
                                ";
        // line 32
        $this->displayBlock('element_product_listing_pagination_nav_top', $context, $blocks);
        // line 38
        echo "                            </div>

                            <div class=\"col-md-auto\">
                                ";
        // line 41
        $this->displayBlock('element_product_listing_sorting', $context, $blocks);
        // line 47
        echo "                            </div>
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 32
    public function block_element_product_listing_pagination_nav_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_pagination_nav_top"));

        // line 33
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 33)->display(twig_array_merge($context, ["entities" =>         // line 34
($context["searchResult"] ?? null), "criteria" => sw_get_attribute($this->env, $this->source,         // line 35
($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 35)]));
        // line 37
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 41
    public function block_element_product_listing_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_sorting"));

        // line 42
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/sorting.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 42)->display(twig_array_merge($context, ["current" => sw_get_attribute($this->env, $this->source,         // line 43
($context["searchResult"] ?? null), "sorting", [], "any", false, false, false, 43), "sortings" => sw_get_attribute($this->env, $this->source,         // line 44
($context["searchResult"] ?? null), "availableSortings", [], "any", false, false, false, 44)]));
        // line 46
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 52
    public function block_element_product_listing_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_row"));

        // line 53
        echo "                    <div class=\"row cms-listing-row js-listing-wrapper\">
                        ";
        // line 54
        if ((sw_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 54) > 0)) {
            // line 55
            echo "                            ";
            $this->displayBlock('element_product_listing_col', $context, $blocks);
            // line 67
            echo "                        ";
        } else {
            // line 68
            echo "                            ";
            $this->displayBlock('element_product_listing_col_empty', $context, $blocks);
            // line 78
            echo "                        ";
        }
        // line 79
        echo "                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 55
    public function block_element_product_listing_col($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_col"));

        // line 56
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["searchResult"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 57
            echo "                                    <div class=\"cms-listing-col ";
            echo sw_escape_filter($this->env, ($context["listingColumns"] ?? null), "html", null, true);
            echo "\">
                                        ";
            // line 58
            $this->displayBlock('element_product_listing_box', $context, $blocks);
            // line 64
            echo "                                    </div>
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 58
    public function block_element_product_listing_box($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_box"));

        // line 59
        echo "                                            ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/box.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 59)->display(twig_array_merge($context, ["layout" =>         // line 60
($context["boxLayout"] ?? null), "displayMode" =>         // line 61
($context["displayMode"] ?? null)]));
        // line 63
        echo "                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 68
    public function block_element_product_listing_col_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_col_empty"));

        // line 69
        echo "                                <div class=\"cms-listing-col col-12\">
                                    ";
        // line 70
        $this->displayBlock('element_product_listing_col_empty_alert', $context, $blocks);
        // line 76
        echo "                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 70
    public function block_element_product_listing_col_empty_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_col_empty_alert"));

        // line 71
        echo "                                        ";
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 71)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.emptyResultMessage"))]));
        // line 75
        echo "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 83
    public function block_element_product_listing_pagination_nav_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_pagination_nav_bottom"));

        // line 84
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 84)->display(twig_array_merge($context, ["entities" =>         // line 85
($context["searchResult"] ?? null), "criteria" => sw_get_attribute($this->env, $this->source,         // line 86
($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 86), "paginationLocation" => "bottom"]));
        // line 89
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/listing.html.twig";
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
        return array (  377 => 89,  375 => 86,  374 => 85,  372 => 84,  365 => 83,  358 => 75,  355 => 71,  348 => 70,  340 => 76,  338 => 70,  335 => 69,  328 => 68,  321 => 63,  319 => 61,  318 => 60,  316 => 59,  309 => 58,  302 => 66,  287 => 64,  285 => 58,  280 => 57,  262 => 56,  255 => 55,  247 => 79,  244 => 78,  241 => 68,  238 => 67,  235 => 55,  233 => 54,  230 => 53,  223 => 52,  216 => 46,  214 => 44,  213 => 43,  211 => 42,  204 => 41,  197 => 37,  195 => 35,  194 => 34,  192 => 33,  185 => 32,  176 => 47,  174 => 41,  169 => 38,  167 => 32,  163 => 30,  156 => 29,  148 => 91,  145 => 90,  142 => 83,  140 => 82,  137 => 81,  135 => 52,  132 => 51,  129 => 50,  126 => 29,  124 => 28,  121 => 27,  114 => 26,  106 => 93,  104 => 26,  99 => 24,  94 => 22,  90 => 20,  77 => 19,  74 => 18,  72 => 13,  71 => 12,  70 => 11,  69 => 10,  68 => 9,  67 => 8,  64 => 7,  60 => 5,  58 => 4,  55 => 3,  53 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set currentPage = ((searchResult.criteria.offset + 1) / searchResult.criteria.limit )|round(0, 'ceil') %}
{% set paginationConfig = { page: currentPage }|json_encode %}

{% if disableEmptyFilter is not defined %}
    {% set disableEmptyFilter = config('core.listing.disableEmptyFilterOptions') %}
{% endif %}

{% set listingPagination = {
    sidebar: sidebar,
    params: params,
    dataUrl: dataUrl,
    filterUrl: filterUrl,
    disableEmptyFilter: disableEmptyFilter,
    snippets: {
        resetAllButtonText: 'listing.filterPanelResetAll'|trans|sw_sanitize
    }
} %}

{% block product_listing %}
    <div class=\"cms-element-product-listing-wrapper\"
         data-listing-pagination=\"true\"
         data-listing-pagination-options='{{ paginationConfig }}'
         data-listing=\"true\"
         data-listing-options='{{ listingPagination|json_encode }}'>

        {% block element_product_listing_wrapper_content %}
            <div class=\"cms-element-product-listing\">
                {% if searchResult.total > 0 %}
                    {% block element_product_listing_pagination_nav_actions %}
                        <div class=\"cms-element-product-listing-actions row justify-content-between\">
                            <div class=\"col-md-auto\">
                                {% block element_product_listing_pagination_nav_top %}
                                    {% sw_include '@Storefront/storefront/component/pagination.html.twig' with {
                                        entities: searchResult,
                                        criteria: searchResult.criteria
                                    } %}
                                {% endblock %}
                            </div>

                            <div class=\"col-md-auto\">
                                {% block element_product_listing_sorting %}
                                    {% sw_include '@Storefront/storefront/component/sorting.html.twig' with {
                                        current: searchResult.sorting,
                                        sortings: searchResult.availableSortings
                                    } %}
                                {% endblock %}
                            </div>
                        </div>
                    {% endblock %}
                {% endif %}

                {% block element_product_listing_row %}
                    <div class=\"row cms-listing-row js-listing-wrapper\">
                        {% if searchResult.total > 0 %}
                            {% block element_product_listing_col %}
                                {% for product in searchResult %}
                                    <div class=\"cms-listing-col {{ listingColumns }}\">
                                        {% block element_product_listing_box %}
                                            {% sw_include '@Storefront/storefront/component/product/card/box.html.twig' with {
                                                'layout': boxLayout,
                                                'displayMode': displayMode
                                            } %}
                                        {% endblock %}
                                    </div>
                                {% endfor %}
                            {% endblock %}
                        {% else %}
                            {% block element_product_listing_col_empty %}
                                <div class=\"cms-listing-col col-12\">
                                    {% block element_product_listing_col_empty_alert %}
                                        {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                                            type: 'info',
                                            content: 'listing.emptyResultMessage'|trans|sw_sanitize
                                        } %}
                                    {% endblock %}
                                </div>
                            {% endblock %}
                        {% endif %}
                    </div>
                {% endblock %}

                {% if searchResult.total > searchResult.limit %}
                    {% block element_product_listing_pagination_nav_bottom %}
                        {% sw_include '@Storefront/storefront/component/pagination.html.twig' with {
                            entities: searchResult,
                            criteria: searchResult.criteria,
                            paginationLocation: 'bottom',
                        } %}
                    {% endblock %}
                {% endif %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/product/listing.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/component/product/listing.html.twig");
    }
}
