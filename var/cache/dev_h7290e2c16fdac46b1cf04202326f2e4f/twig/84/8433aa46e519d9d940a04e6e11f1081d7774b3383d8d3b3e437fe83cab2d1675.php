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

/* @Storefront/storefront/component/listing/filter-panel.html.twig */
class __TwigTemplate_93d41587d5a9b7a936197c3a77ff954d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_filter_panel' => [$this, 'block_component_filter_panel'],
            'component_filter_panel_header' => [$this, 'block_component_filter_panel_header'],
            'component_filter_panel_element' => [$this, 'block_component_filter_panel_element'],
            'component_filter_panel_items_container' => [$this, 'block_component_filter_panel_items_container'],
            'component_filter_panel_items' => [$this, 'block_component_filter_panel_items'],
            'component_filter_panel_item_manufacturer' => [$this, 'block_component_filter_panel_item_manufacturer'],
            'component_filter_panel_item_properties' => [$this, 'block_component_filter_panel_item_properties'],
            'component_filter_panel_item_price' => [$this, 'block_component_filter_panel_item_price'],
            'component_filter_panel_item_rating_select' => [$this, 'block_component_filter_panel_item_rating_select'],
            'component_filter_panel_item_shipping_free' => [$this, 'block_component_filter_panel_item_shipping_free'],
            'component_filter_panel_active_container' => [$this, 'block_component_filter_panel_active_container'],
            'component_filter_panel_active_container_inner' => [$this, 'block_component_filter_panel_active_container_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter-panel.html.twig"));

        // line 1
        $this->displayBlock('component_filter_panel', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_component_filter_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel"));

        echo " ";
        // line 2
        echo "    ";
        $this->displayBlock('component_filter_panel_header', $context, $blocks);
        // line 11
        echo "
    ";
        // line 13
        echo "    ";
        $this->displayBlock('component_filter_panel_element', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_component_filter_panel_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_header"));

        // line 3
        echo "        <div class=\"filter-panel-offcanvas-header\">
            <div class=\"filter-panel-offcanvas-only filter-panel-offcanvas-title\">";
        // line 4
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterTitleText"), "html", null, true);
        echo "</div>

            <div class=\"filter-panel-offcanvas-only filter-panel-offcanvas-close js-offcanvas-close\">
                ";
        // line 7
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter-panel.html.twig", 7);
        })())->display(twig_array_merge($context, ["size" => "md", "name" => "x"]));
        // line 8
        echo "            </div>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_component_filter_panel_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_element"));

        // line 14
        echo "        <div class=\"filter-panel";
        if (($context["sidebar"] ?? null)) {
            echo " is--sidebar";
        }
        echo "\">
            ";
        // line 15
        $this->displayBlock('component_filter_panel_items_container', $context, $blocks);
        // line 96
        echo "
            ";
        // line 97
        $this->displayBlock('component_filter_panel_active_container', $context, $blocks);
        // line 102
        echo "        </div>
     ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_component_filter_panel_items_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_items_container"));

        // line 16
        echo "                <div class=\"filter-panel-items-container\">
                    ";
        // line 17
        $this->displayBlock('component_filter_panel_items', $context, $blocks);
        // line 94
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_component_filter_panel_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_items"));

        // line 18
        echo "
                        ";
        // line 19
        $this->displayBlock('component_filter_panel_item_manufacturer', $context, $blocks);
        // line 33
        echo "
                        ";
        // line 34
        $this->displayBlock('component_filter_panel_item_properties', $context, $blocks);
        // line 52
        echo "
                        ";
        // line 53
        $this->displayBlock('component_filter_panel_item_price', $context, $blocks);
        // line 69
        echo "
                        ";
        // line 70
        $this->displayBlock('component_filter_panel_item_rating_select', $context, $blocks);
        // line 82
        echo "
                        ";
        // line 83
        $this->displayBlock('component_filter_panel_item_shipping_free', $context, $blocks);
        // line 93
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_component_filter_panel_item_manufacturer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_manufacturer"));

        // line 20
        echo "                            ";
        // line 21
        echo "                            ";
        $context["manufacturers"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 21), "get", ["manufacturer"], "method", false, false, false, 21);
        // line 22
        echo "                            ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["manufacturers"] ?? null), "entities", [], "any", false, false, false, 22))) {
            // line 23
            echo "                                ";
            $context["manufacturersSorted"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\SecurityExtension']->sort(sw_get_attribute($this->env, $this->source, ($context["manufacturers"] ?? null), "entities", [], "any", false, false, false, 23), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_lower_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["a"] ?? null), "translated", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23)) <=> twig_lower_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["b"] ?? null), "translated", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23))); });
            // line 24
            echo "
                                ";
            // line 25
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 25)->display(twig_array_merge($context, ["elements" =>             // line 26
($context["manufacturersSorted"] ?? null), "sidebar" =>             // line 27
($context["sidebar"] ?? null), "name" => "manufacturer", "displayName" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterManufacturerDisplayName"))]));
            // line 31
            echo "                            ";
        }
        // line 32
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 34
    public function block_component_filter_panel_item_properties($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_properties"));

        // line 35
        echo "                            ";
        // line 36
        echo "                            ";
        $context["properties"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 36), "get", ["properties"], "method", false, false, false, 36);
        // line 37
        echo "
                            ";
        // line 38
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "entities", [], "any", false, false, false, 38))) {
            // line 39
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "entities", [], "any", false, false, false, 39));
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
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 40
                echo "                                    ";
                $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 40)->display(twig_array_merge($context, ["elements" => sw_get_attribute($this->env, $this->source,                 // line 41
$context["property"], "options", [], "any", false, false, false, 41), "sidebar" =>                 // line 42
($context["sidebar"] ?? null), "name" => "properties", "displayName" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,                 // line 44
$context["property"], "translated", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "displayType" => sw_get_attribute($this->env, $this->source,                 // line 45
$context["property"], "displayType", [], "any", false, false, false, 45), "pluginSelector" => "filter-property-select", "propertyName" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,                 // line 47
$context["property"], "translated", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47)]));
                // line 49
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                            ";
        }
        // line 51
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 53
    public function block_component_filter_panel_item_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_price"));

        // line 54
        echo "                            ";
        $context["price"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 54), "get", ["price"], "method", false, false, false, 54);
        // line 55
        echo "
                            ";
        // line 56
        if (((sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "min", [], "any", false, false, false, 56) !== null) && (sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "max", [], "any", false, false, false, 56) !== null))) {
            // line 57
            echo "                                ";
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-range.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 57)->display(twig_array_merge($context, ["sidebar" =>             // line 58
($context["sidebar"] ?? null), "name" => "price", "minKey" => "min-price", "maxKey" => "max-price", "lowerBound" => 0, "displayName" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterPriceDisplayName")), "minInputValue" => 0, "maxInputValue" => sw_get_attribute($this->env, $this->source,             // line 65
($context["price"] ?? null), "max", [], "any", false, false, false, 65)]));
            // line 67
            echo "                            ";
        }
        // line 68
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 70
    public function block_component_filter_panel_item_rating_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_rating_select"));

        // line 71
        echo "                            ";
        $context["rating"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 71), "get", ["rating"], "method", false, false, false, 71);
        // line 72
        echo "
                            ";
        // line 73
        if ((sw_get_attribute($this->env, $this->source, ($context["rating"] ?? null), "max", [], "any", false, false, false, 73) > 0)) {
            // line 74
            echo "                                ";
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-rating-select.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 74)->display(twig_array_merge($context, ["sidebar" =>             // line 75
($context["sidebar"] ?? null), "name" => "rating", "pluginSelector" => "filter-rating-select", "displayName" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRatingDisplayName"))]));
            // line 80
            echo "                            ";
        }
        // line 81
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 83
    public function block_component_filter_panel_item_shipping_free($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_shipping_free"));

        // line 84
        echo "                            ";
        $context["shippingFree"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 84), "get", ["shipping-free"], "method", false, false, false, 84);
        // line 85
        echo "
                            ";
        // line 86
        if ((sw_get_attribute($this->env, $this->source, ($context["shippingFree"] ?? null), "max", [], "any", false, false, false, 86) > 0)) {
            // line 87
            echo "                                ";
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-boolean.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 87)->display(twig_array_merge($context, ["name" => "shipping-free", "displayName" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterFreeShippingDisplayName"))]));
            // line 91
            echo "                            ";
        }
        // line 92
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 97
    public function block_component_filter_panel_active_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_active_container"));

        // line 98
        echo "                <div class=\"filter-panel-active-container\">
                    ";
        // line 99
        $this->displayBlock('component_filter_panel_active_container_inner', $context, $blocks);
        // line 100
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 99
    public function block_component_filter_panel_active_container_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_active_container_inner"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter-panel.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  410 => 99,  402 => 100,  400 => 99,  397 => 98,  390 => 97,  383 => 92,  380 => 91,  377 => 87,  375 => 86,  372 => 85,  369 => 84,  362 => 83,  355 => 81,  352 => 80,  350 => 75,  348 => 74,  346 => 73,  343 => 72,  340 => 71,  333 => 70,  326 => 68,  323 => 67,  321 => 65,  320 => 58,  318 => 57,  316 => 56,  313 => 55,  310 => 54,  303 => 53,  296 => 51,  293 => 50,  279 => 49,  277 => 47,  276 => 45,  275 => 44,  274 => 42,  273 => 41,  271 => 40,  253 => 39,  251 => 38,  248 => 37,  245 => 36,  243 => 35,  236 => 34,  229 => 32,  226 => 31,  224 => 27,  223 => 26,  222 => 25,  219 => 24,  216 => 23,  213 => 22,  210 => 21,  208 => 20,  201 => 19,  194 => 93,  192 => 83,  189 => 82,  187 => 70,  184 => 69,  182 => 53,  179 => 52,  177 => 34,  174 => 33,  172 => 19,  169 => 18,  162 => 17,  154 => 94,  152 => 17,  149 => 16,  142 => 15,  134 => 102,  132 => 97,  129 => 96,  127 => 15,  120 => 14,  113 => 13,  104 => 8,  96 => 7,  90 => 4,  87 => 3,  80 => 2,  72 => 13,  69 => 11,  66 => 2,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_filter_panel %} {# merge 16.11.20 #}
    {% block component_filter_panel_header %}
        <div class=\"filter-panel-offcanvas-header\">
            <div class=\"filter-panel-offcanvas-only filter-panel-offcanvas-title\">{{ \"listing.filterTitleText\"|trans }}</div>

            <div class=\"filter-panel-offcanvas-only filter-panel-offcanvas-close js-offcanvas-close\">
                {% sw_icon 'x' style { 'size': 'md' } %}
            </div>
        </div>
    {% endblock %}

    {# @var listing \\Shopware\\Core\\Framework\\DataAbstractionLayer\\Search\\EntitySearchResult #}
    {% block component_filter_panel_element %}
        <div class=\"filter-panel{% if sidebar %} is--sidebar{% endif %}\">
            {% block component_filter_panel_items_container %}
                <div class=\"filter-panel-items-container\">
                    {% block component_filter_panel_items %}

                        {% block component_filter_panel_item_manufacturer %}
                            {# @var manufacturers \\Shopware\\Core\\Framework\\DataAbstractionLayer\\Search\\AggregationResult\\Metric\\EntityResult #}
                            {% set manufacturers = listing.aggregations.get('manufacturer') %}
                            {% if not manufacturers.entities is empty %}
                                {% set manufacturersSorted = manufacturers.entities|sort((a, b) => a.translated.name|lower <=> b.translated.name|lower) %}

                                {% sw_include '@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig' with {
                                    elements: manufacturersSorted,
                                    sidebar: sidebar,
                                    name: 'manufacturer',
                                    displayName: 'listing.filterManufacturerDisplayName'|trans|sw_sanitize
                                } %}
                            {% endif %}
                        {% endblock %}

                        {% block component_filter_panel_item_properties %}
                            {# @var properties \\Shopware\\Core\\Framework\\DataAbstractionLayer\\Search\\AggregationResult\\Metric\\EntityResult #}
                            {% set properties = listing.aggregations.get('properties') %}

                            {% if not properties.entities is empty %}
                                {% for property in properties.entities %}
                                    {% sw_include '@Storefront/storefront/component/listing/filter/filter-property-select.html.twig' with {
                                        elements: property.options,
                                        sidebar: sidebar,
                                        name: 'properties',
                                        displayName: property.translated.name,
                                        displayType: property.displayType,
                                        pluginSelector: 'filter-property-select',
                                        propertyName: property.translated.name
                                    } %}
                                {% endfor %}
                            {% endif %}
                        {% endblock %}

                        {% block component_filter_panel_item_price %}
                            {% set price = listing.aggregations.get('price') %}

                            {% if price.min !== null and price.max !== null %}
                                {% sw_include '@Storefront/storefront/component/listing/filter/filter-range.html.twig' with {
                                    sidebar: sidebar,
                                    name: 'price',
                                    minKey: 'min-price',
                                    maxKey: 'max-price',
                                    lowerBound: 0,
                                    displayName: 'listing.filterPriceDisplayName'|trans|sw_sanitize,
                                    minInputValue: 0,
                                    maxInputValue: price.max,
                                } %}
                            {% endif %}
                        {% endblock %}

                        {% block component_filter_panel_item_rating_select %}
                            {% set rating = listing.aggregations.get('rating') %}

                            {% if rating.max > 0 %}
                                {% sw_include '@Storefront/storefront/component/listing/filter/filter-rating-select.html.twig' with {
                                    sidebar: sidebar,
                                    name: 'rating',
                                    pluginSelector: 'filter-rating-select',
                                    displayName: 'listing.filterRatingDisplayName'|trans|sw_sanitize
                                } %}
                            {% endif %}
                        {% endblock %}

                        {% block component_filter_panel_item_shipping_free %}
                            {% set shippingFree = listing.aggregations.get('shipping-free') %}

                            {% if shippingFree.max > 0 %}
                                {% sw_include '@Storefront/storefront/component/listing/filter/filter-boolean.html.twig' with {
                                    name: 'shipping-free',
                                    displayName: 'listing.filterFreeShippingDisplayName'|trans|sw_sanitize
                                } %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block component_filter_panel_active_container %}
                <div class=\"filter-panel-active-container\">
                    {% block component_filter_panel_active_container_inner %}{% endblock %}
                </div>
            {% endblock %}
        </div>
     {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/listing/filter-panel.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter-panel.html.twig");
    }
}
