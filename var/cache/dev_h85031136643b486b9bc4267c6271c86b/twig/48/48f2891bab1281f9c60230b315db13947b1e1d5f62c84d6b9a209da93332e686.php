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

/* @Storefront/storefront/layout/header/actions/language-widget.html.twig */
class __TwigTemplate_b47dc2b2a965085820bdf9047d5f8244 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_actions_language_widget' => [$this, 'block_layout_header_actions_language_widget'],
            'layout_header_actions_language_widget_form' => [$this, 'block_layout_header_actions_language_widget_form'],
            'layout_header_actions_language_widget_content' => [$this, 'block_layout_header_actions_language_widget_content'],
            'layout_header_actions_languages_widget_form_items' => [$this, 'block_layout_header_actions_languages_widget_form_items'],
            'layout_header_actions_languages_widget_form_items_flag' => [$this, 'block_layout_header_actions_languages_widget_form_items_flag'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/actions/language-widget.html.twig"));

        // line 1
        $this->displayBlock('layout_header_actions_language_widget', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_header_actions_language_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_language_widget"));

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
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 6), "languages", [], "any", false, false, false, 6), "count", [], "any", false, false, false, 6) > 1)) {
            // line 7
            echo "        <div class=\"top-bar-nav-item top-bar-language\">
            ";
            // line 8
            $this->displayBlock('layout_header_actions_language_widget_form', $context, $blocks);
            // line 67
            echo "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_layout_header_actions_language_widget_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_language_widget_form"));

        // line 9
        echo "                <form method=\"post\"
                      action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.switch-language");
        echo "\"
                      class=\"language-form\"
                      data-form-auto-submit=\"true\">

                    ";
        // line 14
        $this->displayBlock('layout_header_actions_language_widget_content', $context, $blocks);
        // line 65
        echo "                </form>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_layout_header_actions_language_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_language_widget_content"));

        // line 15
        echo "                        ";
        $context["isoCode"] = twig_split_filter($this->env, twig_lower_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 15), "activeLanguage", [], "any", false, false, false, 15), "translationCode", [], "any", false, false, false, 15), "code", [], "any", false, false, false, 15)), "-");
        // line 16
        echo "                        ";
        $context["language"] = (($__internal_compile_0 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null);
        // line 17
        echo "                        ";
        $context["country"] = (($__internal_compile_1 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null);
        // line 18
        echo "
                        <div class=\"languages-menu dropdown\">
                            <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                                    type=\"button\"
                                    id=\"languagesDropdown-";
        // line 22
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\">
                                <div class=\"top-bar-list-icon language-flag country-";
        // line 26
        echo sw_escape_filter($this->env, ($context["country"] ?? null), "html", null, true);
        echo " language-";
        echo sw_escape_filter($this->env, ($context["language"] ?? null), "html", null, true);
        echo "\"></div>
                                <span class=\"top-bar-nav-text\">";
        // line 27
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 27), "activeLanguage", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "</span>
                            </button>
                            ";
        // line 29
        $this->displayBlock('layout_header_actions_languages_widget_form_items', $context, $blocks);
        // line 57
        echo "                        </div>

                        <input name=\"redirectTo\" type=\"hidden\" value=\"";
        // line 59
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 59), "get", ["_route"], "method", false, false, false, 59), "html", null, true);
        echo "\">

                        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 61), "attributes", [], "any", false, false, false, 61), "get", ["_route_params"], "method", false, false, false, 61));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 62
            echo "                            <input name=\"redirectParameters[";
            echo sw_escape_filter($this->env, $context["key"], "html", null, true);
            echo "]\" type=\"hidden\" value=\"";
            echo sw_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
    public function block_layout_header_actions_languages_widget_form_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_languages_widget_form_items"));

        // line 30
        echo "                                <div class=\"top-bar-list dropdown-menu dropdown-menu-end\"
                                    aria-labelledby=\"languagesDropdown-";
        // line 31
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\">
                                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 32), "languages", [], "any", false, false, false, 32));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 33
            echo "                                        <div class=\"top-bar-list-item dropdown-item";
            if ((sw_get_attribute($this->env, $this->source, $context["language"], "id", [], "any", false, false, false, 33) === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 33), "activeLanguage", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33))) {
                echo " item-checked";
            }
            echo "\"
                                             title=\"";
            // line 34
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["language"], "translated", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
            echo "\">

                                            ";
            // line 36
            $this->displayBlock('layout_header_actions_languages_widget_form_items_flag', $context, $blocks);
            // line 53
            echo "                                        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 36
    public function block_layout_header_actions_languages_widget_form_items_flag($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_languages_widget_form_items_flag"));

        // line 37
        echo "                                                ";
        $context["isoCode"] = twig_split_filter($this->env, twig_lower_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "translationCode", [], "any", false, false, false, 37), "code", [], "any", false, false, false, 37)), "-");
        // line 38
        echo "                                                ";
        $context["flagLanguage"] = (($__internal_compile_2 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null);
        // line 39
        echo "                                                ";
        $context["flagCountry"] = (($__internal_compile_3 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[1] ?? null) : null);
        // line 40
        echo "
                                                <label class=\"top-bar-list-label\"
                                                       for=\"";
        // line 42
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
                                                    <input id=\"";
        // line 43
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 43), "html", null, true);
        echo "\"
                                                           class=\"top-bar-list-radio\"
                                                           value=\"";
        // line 45
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 45), "html", null, true);
        echo "\"
                                                           name=\"languageId\"
                                                           type=\"radio\"
                                                        ";
        // line 48
        if ((sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 48) === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 48), "activeLanguage", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48))) {
            echo " checked";
        }
        echo ">
                                                    <div class=\"top-bar-list-icon language-flag country-";
        // line 49
        echo sw_escape_filter($this->env, ($context["flagCountry"] ?? null), "html", null, true);
        echo " language-";
        echo sw_escape_filter($this->env, ($context["flagLanguage"] ?? null), "html", null, true);
        echo "\"></div>
                                                    ";
        // line 50
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "name", [], "any", false, false, false, 50), "html", null, true);
        echo "
                                                </label>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/actions/language-widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  305 => 50,  299 => 49,  293 => 48,  287 => 45,  280 => 43,  274 => 42,  270 => 40,  267 => 39,  264 => 38,  261 => 37,  254 => 36,  246 => 55,  231 => 53,  229 => 36,  224 => 34,  217 => 33,  200 => 32,  196 => 31,  193 => 30,  186 => 29,  179 => 64,  168 => 62,  164 => 61,  159 => 59,  155 => 57,  153 => 29,  148 => 27,  142 => 26,  135 => 22,  129 => 18,  126 => 17,  123 => 16,  120 => 15,  113 => 14,  105 => 65,  103 => 14,  96 => 10,  93 => 9,  86 => 8,  77 => 67,  75 => 8,  72 => 7,  70 => 6,  67 => 5,  64 => 4,  61 => 3,  58 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_header_actions_language_widget%}
    {% if position is empty %}
        {% set position = 'top-bar' %}
    {% endif %}

    {% if page.header.languages.count > 1 %}
        <div class=\"top-bar-nav-item top-bar-language\">
            {% block layout_header_actions_language_widget_form %}
                <form method=\"post\"
                      action=\"{{ path('frontend.checkout.switch-language') }}\"
                      class=\"language-form\"
                      data-form-auto-submit=\"true\">

                    {% block layout_header_actions_language_widget_content %}
                        {% set isoCode = page.header.activeLanguage.translationCode.code|lower|split('-') %}
                        {% set language = isoCode[0] %}
                        {% set country = isoCode[1] %}

                        <div class=\"languages-menu dropdown\">
                            <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                                    type=\"button\"
                                    id=\"languagesDropdown-{{ position }}\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\">
                                <div class=\"top-bar-list-icon language-flag country-{{ country }} language-{{ language }}\"></div>
                                <span class=\"top-bar-nav-text\">{{ page.header.activeLanguage.name }}</span>
                            </button>
                            {% block layout_header_actions_languages_widget_form_items %}
                                <div class=\"top-bar-list dropdown-menu dropdown-menu-end\"
                                    aria-labelledby=\"languagesDropdown-{{ position }}\">
                                    {% for language in page.header.languages %}
                                        <div class=\"top-bar-list-item dropdown-item{% if language.id is same as(page.header.activeLanguage.id) %} item-checked{% endif %}\"
                                             title=\"{{ language.translated.name }}\">

                                            {% block layout_header_actions_languages_widget_form_items_flag %}
                                                {% set isoCode = language.translationCode.code|lower|split('-') %}
                                                {% set flagLanguage = isoCode[0] %}
                                                {% set flagCountry = isoCode[1] %}

                                                <label class=\"top-bar-list-label\"
                                                       for=\"{{ position }}-{{ language.id }}\">
                                                    <input id=\"{{ position }}-{{ language.id }}\"
                                                           class=\"top-bar-list-radio\"
                                                           value=\"{{ language.id }}\"
                                                           name=\"languageId\"
                                                           type=\"radio\"
                                                        {% if language.id is same as(page.header.activeLanguage.id) %} checked{% endif %}>
                                                    <div class=\"top-bar-list-icon language-flag country-{{ flagCountry }} language-{{ flagLanguage }}\"></div>
                                                    {{ language.name }}
                                                </label>
                                            {% endblock %}
                                        </div>
                                    {% endfor %}
                                </div>
                            {% endblock %}
                        </div>

                        <input name=\"redirectTo\" type=\"hidden\" value=\"{{ app.request.get('_route') }}\">

                        {% for key, value in app.request.attributes.get('_route_params') %}
                            <input name=\"redirectParameters[{{ key }}]\" type=\"hidden\" value=\"{{ value }}\">
                        {% endfor %}
                    {% endblock %}
                </form>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/layout/header/actions/language-widget.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/header/actions/language-widget.html.twig");
    }
}
