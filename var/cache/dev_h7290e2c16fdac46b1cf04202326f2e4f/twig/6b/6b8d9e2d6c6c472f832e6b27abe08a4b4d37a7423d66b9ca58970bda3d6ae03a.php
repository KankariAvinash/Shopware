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

/* @Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig */
class __TwigTemplate_bbd8c3c229959b863c477410d342951e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
            'layout_navigation_offcanvas_navigation_actions' => [$this, 'block_layout_navigation_offcanvas_navigation_actions'],
            'layout_navigation_offcanvas_navigation_action_language' => [$this, 'block_layout_navigation_offcanvas_navigation_action_language'],
            'layout_navigation_offcanvas_navigation_action_currency' => [$this, 'block_layout_navigation_offcanvas_navigation_action_currency'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/utilities/offcanvas.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_utilities_offcanvas_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas_content"));

        // line 4
        echo "    ";
        $this->displayBlock('layout_navigation_offcanvas_navigation_actions', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", 16)->display(twig_array_merge($context, ["navigation" => ($context["navigation"] ?? null)]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_layout_navigation_offcanvas_navigation_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_actions"));

        // line 5
        echo "        <nav class=\"nav navigation-offcanvas-actions\">
            ";
        // line 6
        $this->displayBlock('layout_navigation_offcanvas_navigation_action_language', $context, $blocks);
        // line 9
        echo "
            ";
        // line 10
        $this->displayBlock('layout_navigation_offcanvas_navigation_action_currency', $context, $blocks);
        // line 13
        echo "        </nav>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_layout_navigation_offcanvas_navigation_action_language($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_action_language"));

        // line 7
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/language-widget.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", 7)->display(twig_array_merge($context, ["position" => "offcanvas"]));
        // line 8
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_layout_navigation_offcanvas_navigation_action_currency($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_action_currency"));

        // line 11
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/currency-widget.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", 11)->display(twig_array_merge($context, ["position" => "offcanvas"]));
        // line 12
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig";
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
        return array (  127 => 12,  124 => 11,  117 => 10,  110 => 8,  107 => 7,  100 => 6,  92 => 13,  90 => 10,  87 => 9,  85 => 6,  82 => 5,  75 => 4,  68 => 16,  65 => 15,  62 => 4,  55 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/utilities/offcanvas.html.twig' %}

{% block utilities_offcanvas_content %}
    {% block layout_navigation_offcanvas_navigation_actions %}
        <nav class=\"nav navigation-offcanvas-actions\">
            {% block layout_navigation_offcanvas_navigation_action_language %}
                {% sw_include '@Storefront/storefront/layout/header/actions/language-widget.html.twig' with {position: 'offcanvas'} %}
            {% endblock %}

            {% block layout_navigation_offcanvas_navigation_action_currency %}
                {% sw_include '@Storefront/storefront/layout/header/actions/currency-widget.html.twig' with {position: 'offcanvas'} %}
            {% endblock %}
        </nav>
    {% endblock %}

    {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig' with { navigation: navigation } %}
{% endblock %}
", "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/navigation.html.twig");
    }
}
