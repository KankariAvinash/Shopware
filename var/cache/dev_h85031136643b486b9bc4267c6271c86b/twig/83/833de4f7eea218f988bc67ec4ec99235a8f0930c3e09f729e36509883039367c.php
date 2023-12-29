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

/* @Storefront/storefront/layout/header/actions/currency-widget.html.twig */
class __TwigTemplate_a44588266c824b86684678010dff5e4f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_actions_currency_widget' => [$this, 'block_layout_header_actions_currency_widget'],
            'layout_header_actions_currency_widget_form' => [$this, 'block_layout_header_actions_currency_widget_form'],
            'layout_header_actions_currency_widget_content' => [$this, 'block_layout_header_actions_currency_widget_content'],
            'layout_header_actions_currency_widget_dropdown_toggle' => [$this, 'block_layout_header_actions_currency_widget_dropdown_toggle'],
            'layout_header_actions_currency_widget_dropdown_toggle_name' => [$this, 'block_layout_header_actions_currency_widget_dropdown_toggle_name'],
            'layout_header_actions_currency_widget_form_items' => [$this, 'block_layout_header_actions_currency_widget_form_items'],
            'layout_header_actions_currency_widget_form_items_element' => [$this, 'block_layout_header_actions_currency_widget_form_items_element'],
            'layout_header_actions_currency_widget_form_items_element_label' => [$this, 'block_layout_header_actions_currency_widget_form_items_element_label'],
            'layout_header_actions_currency_widget_form_items_element_input' => [$this, 'block_layout_header_actions_currency_widget_form_items_element_input'],
            'layout_header_actions_currency_widget_form_redirect' => [$this, 'block_layout_header_actions_currency_widget_form_redirect'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/actions/currency-widget.html.twig"));

        // line 1
        $this->displayBlock('layout_header_actions_currency_widget', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_header_actions_currency_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget"));

        // line 2
        echo "    ";
        if (twig_test_empty(($context["position"] ?? null))) {
            // line 3
            echo "        ";
            $context["position"] = "top-bar";
            // line 4
            echo "    ";
        }
        // line 5
        echo "
    ";
        // line 6
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 6), "currencies", [], "any", false, false, false, 6), "count", [], "any", false, false, false, 6) > 1)) {
            // line 7
            echo "        <div class=\"top-bar-nav-item top-bar-currency\">
            ";
            // line 8
            $this->displayBlock('layout_header_actions_currency_widget_form', $context, $blocks);
            // line 72
            echo "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_layout_header_actions_currency_widget_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form"));

        // line 9
        echo "                <form method=\"post\"
                      action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.configure");
        echo "\"
                      class=\"currency-form\"
                      data-form-auto-submit=\"true\">

                    ";
        // line 14
        $this->displayBlock('layout_header_actions_currency_widget_content', $context, $blocks);
        // line 70
        echo "                </form>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_layout_header_actions_currency_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_content"));

        // line 15
        echo "                        <div class=\"currencies-menu dropdown\">
                            ";
        // line 16
        $this->displayBlock('layout_header_actions_currency_widget_dropdown_toggle', $context, $blocks);
        // line 29
        echo "
                            ";
        // line 30
        $this->displayBlock('layout_header_actions_currency_widget_form_items', $context, $blocks);
        // line 56
        echo "
                            ";
        // line 57
        $this->displayBlock('layout_header_actions_currency_widget_form_redirect', $context, $blocks);
        // line 68
        echo "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_layout_header_actions_currency_widget_dropdown_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_dropdown_toggle"));

        // line 17
        echo "                                <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                                        type=\"button\"
                                        id=\"currenciesDropdown-";
        // line 19
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\"
                                        data-bs-toggle=\"dropdown\"
                                        aria-haspopup=\"true\"
                                        aria-expanded=\"false\">
                                    ";
        // line 23
        $this->displayBlock('layout_header_actions_currency_widget_dropdown_toggle_name', $context, $blocks);
        // line 27
        echo "                                </button>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 23
    public function block_layout_header_actions_currency_widget_dropdown_toggle_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_dropdown_toggle_name"));

        // line 24
        echo "                                        ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 24), "activeCurrency", [], "any", false, false, false, 24), "symbol", [], "any", false, false, false, 24), "html", null, true);
        echo "
                                        <span class=\"top-bar-nav-text\">";
        // line 25
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 25), "activeCurrency", [], "any", false, false, false, 25), "translated", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "</span>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 30
    public function block_layout_header_actions_currency_widget_form_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_items"));

        // line 31
        echo "                                <div class=\"top-bar-list dropdown-menu dropdown-menu-end\"
                                    aria-labelledby=\"currenciesDropdown-";
        // line 32
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\">
                                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 33), "currencies", [], "any", false, false, false, 33));
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
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 34
            echo "                                        ";
            $this->displayBlock('layout_header_actions_currency_widget_form_items_element', $context, $blocks);
            // line 53
            echo "                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 34
    public function block_layout_header_actions_currency_widget_form_items_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_items_element"));

        // line 35
        echo "                                            <div class=\"top-bar-list-item dropdown-item";
        if ((sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 35) === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 35), "activeCurrency", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35))) {
            echo " item-checked";
        }
        echo "\"
                                                 title=\"";
        // line 36
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "translated", [], "any", false, false, false, 36), "shortName", [], "any", false, false, false, 36), "html", null, true);
        echo "\">
                                                ";
        // line 37
        $this->displayBlock('layout_header_actions_currency_widget_form_items_element_label', $context, $blocks);
        // line 51
        echo "                                            </div>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 37
    public function block_layout_header_actions_currency_widget_form_items_element_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_items_element_label"));

        // line 38
        echo "                                                    <label class=\"top-bar-list-label\"
                                                           for=\"";
        // line 39
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 39), "html", null, true);
        echo "\">
                                                        ";
        // line 40
        $this->displayBlock('layout_header_actions_currency_widget_form_items_element_input', $context, $blocks);
        // line 49
        echo "                                                    </label>
                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 40
    public function block_layout_header_actions_currency_widget_form_items_element_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_items_element_input"));

        // line 41
        echo "                                                            <input class=\"top-bar-list-radio\"
                                                                   id=\"";
        // line 42
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 42), "html", null, true);
        echo "\"
                                                                   value=\"";
        // line 43
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 43), "html", null, true);
        echo "\"
                                                                   name=\"currencyId\"
                                                                   type=\"radio\"
                                                                ";
        // line 46
        if ((sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 46) === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 46), "activeCurrency", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46))) {
            echo " checked";
        }
        echo ">
                                                            ";
        // line 47
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "symbol", [], "any", false, false, false, 47), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "translated", [], "any", false, false, false, 47), "shortName", [], "any", false, false, false, 47), "html", null, true);
        echo "
                                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 57
    public function block_layout_header_actions_currency_widget_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_redirect"));

        // line 58
        echo "                                <input name=\"redirectTo\"
                                       type=\"hidden\"
                                       value=\"";
        // line 60
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 60), "get", ["_route"], "method", false, false, false, 60), "html", null, true);
        echo "\">

                                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 62), "attributes", [], "any", false, false, false, 62), "get", ["_route_params"], "method", false, false, false, 62));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 63
            echo "                                    <input name=\"redirectParameters[";
            echo sw_escape_filter($this->env, $context["key"], "html", null, true);
            echo "]\"
                                           type=\"hidden\"
                                           value=\"";
            // line 65
            echo sw_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/actions/currency-widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  380 => 67,  372 => 65,  366 => 63,  362 => 62,  357 => 60,  353 => 58,  346 => 57,  335 => 47,  329 => 46,  323 => 43,  317 => 42,  314 => 41,  307 => 40,  299 => 49,  297 => 40,  291 => 39,  288 => 38,  281 => 37,  273 => 51,  271 => 37,  267 => 36,  260 => 35,  253 => 34,  245 => 54,  231 => 53,  228 => 34,  211 => 33,  207 => 32,  204 => 31,  197 => 30,  188 => 25,  183 => 24,  176 => 23,  168 => 27,  166 => 23,  159 => 19,  155 => 17,  148 => 16,  140 => 68,  138 => 57,  135 => 56,  133 => 30,  130 => 29,  128 => 16,  125 => 15,  118 => 14,  110 => 70,  108 => 14,  101 => 10,  98 => 9,  91 => 8,  82 => 72,  80 => 8,  77 => 7,  75 => 6,  72 => 5,  69 => 4,  66 => 3,  63 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_header_actions_currency_widget %}
    {% if position is empty %}
        {% set position = 'top-bar' %}
    {% endif %}

    {% if page.header.currencies.count > 1 %}
        <div class=\"top-bar-nav-item top-bar-currency\">
            {% block layout_header_actions_currency_widget_form %}
                <form method=\"post\"
                      action=\"{{ path('frontend.checkout.configure') }}\"
                      class=\"currency-form\"
                      data-form-auto-submit=\"true\">

                    {% block layout_header_actions_currency_widget_content %}
                        <div class=\"currencies-menu dropdown\">
                            {% block layout_header_actions_currency_widget_dropdown_toggle %}
                                <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                                        type=\"button\"
                                        id=\"currenciesDropdown-{{ position }}\"
                                        data-bs-toggle=\"dropdown\"
                                        aria-haspopup=\"true\"
                                        aria-expanded=\"false\">
                                    {% block layout_header_actions_currency_widget_dropdown_toggle_name %}
                                        {{ page.header.activeCurrency.symbol }}
                                        <span class=\"top-bar-nav-text\">{{ page.header.activeCurrency.translated.name }}</span>
                                    {% endblock %}
                                </button>
                            {% endblock %}

                            {% block layout_header_actions_currency_widget_form_items %}
                                <div class=\"top-bar-list dropdown-menu dropdown-menu-end\"
                                    aria-labelledby=\"currenciesDropdown-{{ position }}\">
                                    {% for currency in page.header.currencies %}
                                        {% block layout_header_actions_currency_widget_form_items_element %}
                                            <div class=\"top-bar-list-item dropdown-item{% if currency.id is same as(page.header.activeCurrency.id) %} item-checked{% endif %}\"
                                                 title=\"{{ currency.translated.shortName }}\">
                                                {% block layout_header_actions_currency_widget_form_items_element_label %}
                                                    <label class=\"top-bar-list-label\"
                                                           for=\"{{ position }}-{{ currency.id }}\">
                                                        {% block layout_header_actions_currency_widget_form_items_element_input %}
                                                            <input class=\"top-bar-list-radio\"
                                                                   id=\"{{ position }}-{{ currency.id }}\"
                                                                   value=\"{{ currency.id }}\"
                                                                   name=\"currencyId\"
                                                                   type=\"radio\"
                                                                {% if currency.id is same as(page.header.activeCurrency.id) %} checked{% endif %}>
                                                            {{ currency.symbol }} {{ currency.translated.shortName }}
                                                        {% endblock %}
                                                    </label>
                                                {% endblock %}
                                            </div>
                                        {% endblock %}
                                    {% endfor %}
                                </div>
                            {% endblock %}

                            {% block layout_header_actions_currency_widget_form_redirect %}
                                <input name=\"redirectTo\"
                                       type=\"hidden\"
                                       value=\"{{ app.request.get('_route') }}\">

                                {% for key, value in app.request.attributes.get('_route_params') %}
                                    <input name=\"redirectParameters[{{ key }}]\"
                                           type=\"hidden\"
                                           value=\"{{ value }}\">
                                {% endfor %}
                            {% endblock %}
                        </div>
                    {% endblock %}
                </form>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/layout/header/actions/currency-widget.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/header/actions/currency-widget.html.twig");
    }
}
