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
class __TwigTemplate_8c54227f5038245cedcd0f3ae4e6c058 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/search.html.twig"));

        // line 1
        $context["searchWidgetOptions"] = ["searchWidgetMinChars" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 2
($context["page"] ?? null), "header", [], "any", false, false, false, 2), "activeLanguage", [], "any", false, false, false, 2), "productSearchConfig", [], "any", false, false, false, 2), "minSearchLength", [], "any", false, false, false, 2)) ?: (3))];
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('layout_header_search', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_header_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_layout_header_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_form"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 21
    public function block_layout_header_search_input_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_input_group"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 23
    public function block_layout_header_search_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_input"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 35
    public function block_layout_header_search_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_button"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  205 => 41,  197 => 40,  192 => 38,  188 => 36,  181 => 35,  171 => 31,  167 => 30,  163 => 29,  156 => 24,  149 => 23,  141 => 44,  139 => 35,  136 => 34,  134 => 23,  131 => 22,  124 => 21,  116 => 46,  114 => 21,  109 => 19,  104 => 18,  100 => 16,  96 => 14,  93 => 13,  87 => 10,  80 => 9,  71 => 48,  69 => 9,  64 => 6,  51 => 5,  48 => 4,  46 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set searchWidgetOptions = {
    searchWidgetMinChars: page.header.activeLanguage.productSearchConfig.minSearchLength ?: 3
} %}

{% block layout_header_search %}
    <div class=\"collapse\"
         id=\"searchCollapse\">
        <div class=\"header-search\">
            {% block layout_header_search_form %}
                <form action=\"{{ path('frontend.search.page') }}\"
                      method=\"get\"
                      {# @deprecated tag:v6.6.0 - Registering plugin on selector \"data-search-form\" is deprecated. Use \"data-search-widget\" instead #}
                      {% if feature('v6.6.0.0') %}
                          data-search-widget=\"true\"
                      {% else %}
                          data-search-form=\"true\"
                      {% endif %}
                      data-search-widget-options='{{ searchWidgetOptions|json_encode }}'
                      data-url=\"{{ path('frontend.search.suggest') }}?search=\"
                      class=\"header-search-form\">
                    {% block layout_header_search_input_group %}
                        <div class=\"input-group\">
                            {% block layout_header_search_input %}
                                <input type=\"search\"
                                       name=\"search\"
                                       class=\"form-control header-search-input\"
                                       autocomplete=\"off\"
                                       autocapitalize=\"off\"
                                       placeholder=\"{{ \"header.searchPlaceholder\"|trans|striptags }}\"
                                       aria-label=\"{{ \"header.searchPlaceholder\"|trans|striptags }}\"
                                       value=\"{{ page.searchTerm }}\"
                                >
                            {% endblock %}

                            {% block layout_header_search_button %}
                                <button type=\"submit\"
                                        class=\"btn header-search-btn\"
                                        aria-label=\"{{ \"header.searchButton\"|trans|striptags }}\">
                                    <span class=\"header-search-icon\">
                                        {% sw_icon 'search' %}
                                    </span>
                                </button>
                            {% endblock %}
                        </div>
                    {% endblock %}
                </form>
            {% endblock %}
        </div>
    </div>
{% endblock %}
", "@Storefront/storefront/layout/header/search.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/header/search.html.twig");
    }
}
