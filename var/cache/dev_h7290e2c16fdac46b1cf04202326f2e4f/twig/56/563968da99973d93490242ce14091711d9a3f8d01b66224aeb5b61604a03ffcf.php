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

/* @Storefront/storefront/element/cms-element-sidebar-filter.html.twig */
class __TwigTemplate_ee0036b6febdb3d036bd9c6a99ada82e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_sidebar_filter' => [$this, 'block_element_sidebar_filter'],
            'element_product_listing_filter_button' => [$this, 'block_element_product_listing_filter_button'],
            'element_product_listing_filter_button_icon' => [$this, 'block_element_product_listing_filter_button_icon'],
            'element_sidebar_filter_panel' => [$this, 'block_element_sidebar_filter_panel'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig"));

        // line 1
        $this->displayBlock('element_sidebar_filter', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_element_sidebar_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_sidebar_filter"));

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        if (array_key_exists("cmsPage", $context)) {
            // line 4
            echo "        ";
            $context["config"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", false, false, false, 4), "elements", [], "any", false, false, false, 4);
            // line 5
            echo "        ";
            $context["slot"] = sw_get_attribute($this->env, $this->source, ($context["cmsPage"] ?? null), "getFirstElementOfType", ["product-listing"], "method", false, false, false, 5);
            // line 6
            echo "        ";
            $context["listing"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["slot"] ?? null), "data", [], "any", false, false, false, 6), "listing", [], "any", false, false, false, 6);
            // line 7
            echo "        ";
            $context["sidebar"] = (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "sectionPosition", [], "any", false, false, false, 7) == "sidebar");
            // line 8
            echo "    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 10), "elements", [], "any", false, false, false, 10)) > 0)) {
            // line 11
            echo "        <div class=\"cms-element-sidebar-filter\">
            ";
            // line 12
            $this->displayBlock('element_product_listing_filter_button', $context, $blocks);
            // line 32
            echo "
            ";
            // line 33
            $this->displayBlock('element_sidebar_filter_panel', $context, $blocks);
            // line 50
            echo "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_element_product_listing_filter_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_filter_button"));

        // line 13
        echo "                <button
                    class=\"btn btn-outline-primary filter-panel-wrapper-toggle\"
                    type=\"button\"
                    ";
        // line 17
        echo "                    ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.6.0.0")) {
            // line 18
            echo "                        data-off-canvas-filter=\"true\"
                    ";
        } else {
            // line 20
            echo "                        data-offcanvas-filter=\"true\"
                    ";
        }
        // line 22
        echo "                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    aria-label=\"";
        // line 24
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.menuLink"), "html", null, true);
        echo "\"
                >
                    ";
        // line 26
        $this->displayBlock('element_product_listing_filter_button_icon', $context, $blocks);
        // line 29
        echo "                    ";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterTitleText"), "html", null, true);
        echo "
                </button>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 26
    public function block_element_product_listing_filter_button_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_filter_button_icon"));

        // line 27
        echo "                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig", 27);
        })())->display(twig_array_merge($context, ["name" => "sliders-horizontal"]));
        // line 28
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 33
    public function block_element_sidebar_filter_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_sidebar_filter_panel"));

        // line 34
        echo "                <div
                    id=\"filter-panel-wrapper\"
                    class=\"filter-panel-wrapper\"
                    ";
        // line 38
        echo "                    ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.6.0.0")) {
            // line 39
            echo "                        data-off-canvas-filter-content=\"true\"
                    ";
        } else {
            // line 41
            echo "                        data-offcanvas-filter-content=\"true\"
                    ";
        }
        // line 43
        echo "                >
                    ";
        // line 44
        $this->loadTemplate("@Storefront/storefront/component/listing/filter-panel.html.twig", "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig", 44)->display(twig_array_merge($context, ["listing" =>         // line 45
($context["listing"] ?? null), "sidebar" =>         // line 46
($context["sidebar"] ?? null)]));
        // line 48
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  199 => 48,  197 => 46,  196 => 45,  195 => 44,  192 => 43,  188 => 41,  184 => 39,  181 => 38,  176 => 34,  169 => 33,  162 => 28,  153 => 27,  146 => 26,  135 => 29,  133 => 26,  128 => 24,  124 => 22,  120 => 20,  116 => 18,  113 => 17,  108 => 13,  101 => 12,  92 => 50,  90 => 33,  87 => 32,  85 => 12,  82 => 11,  80 => 10,  77 => 9,  74 => 8,  71 => 7,  68 => 6,  65 => 5,  62 => 4,  59 => 3,  57 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block element_sidebar_filter %}
    {# Use values from cms data if context is a cmsPage, otherwise `listing` and `sidebar` must be set manually #}
    {% if cmsPage is defined %}
        {% set config = element.fieldConfig.elements %}
        {% set slot = cmsPage.getFirstElementOfType('product-listing') %}
        {% set listing = slot.data.listing %}
        {% set sidebar = block.sectionPosition == 'sidebar' %}
    {% endif %}

    {% if listing.aggregations.elements|length > 0 %}
        <div class=\"cms-element-sidebar-filter\">
            {% block element_product_listing_filter_button %}
                <button
                    class=\"btn btn-outline-primary filter-panel-wrapper-toggle\"
                    type=\"button\"
                    {# @deprecated tag:v6.6.0 - Registering plugin on selector \"data-offcanvas-filter\" is deprecated. Use \"data-off-canvas-filter\" instead #}
                    {% if feature('v6.6.0.0') %}
                        data-off-canvas-filter=\"true\"
                    {% else %}
                        data-offcanvas-filter=\"true\"
                    {% endif %}
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    aria-label=\"{{ \"general.menuLink\"|trans }}\"
                >
                    {% block element_product_listing_filter_button_icon %}
                        {% sw_icon 'sliders-horizontal' %}
                    {% endblock %}
                    {{ \"listing.filterTitleText\"|trans }}
                </button>
            {% endblock %}

            {% block element_sidebar_filter_panel %}
                <div
                    id=\"filter-panel-wrapper\"
                    class=\"filter-panel-wrapper\"
                    {# @deprecated tag:v6.6.0 - Selector \"data-off-canvas-filter-content\" is deprecated. Use \"data-offcanvas-filter-content\" instead #}
                    {% if feature('v6.6.0.0') %}
                        data-off-canvas-filter-content=\"true\"
                    {% else %}
                        data-offcanvas-filter-content=\"true\"
                    {% endif %}
                >
                    {% sw_include '@Storefront/storefront/component/listing/filter-panel.html.twig' with {
                        listing: listing,
                        sidebar: sidebar
                    } %}
                </div>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-sidebar-filter.html.twig");
    }
}
