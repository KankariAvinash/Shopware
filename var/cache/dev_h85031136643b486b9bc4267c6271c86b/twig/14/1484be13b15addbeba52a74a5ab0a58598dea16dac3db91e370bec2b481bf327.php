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

/* @Storefront/storefront/page/content/index.html.twig */
class __TwigTemplate_bea582671167db480a2671aa54d3190d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_main_inner' => [$this, 'block_base_main_inner'],
            'page_content' => [$this, 'block_page_content'],
            'cms_breadcrumb' => [$this, 'block_cms_breadcrumb'],
            'cms_content' => [$this, 'block_cms_content'],
            'page_content_blocks' => [$this, 'block_page_content_blocks'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/content/index.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/base.html.twig", "@Storefront/storefront/page/content/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_base_main_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_main_inner"));

        // line 5
        echo "    <div class=\"container-main\">
        ";
        // line 6
        $this->displayBlock('page_content', $context, $blocks);
        // line 28
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "            ";
        $this->displayBlock('cms_breadcrumb', $context, $blocks);
        // line 16
        echo "
            ";
        // line 17
        $this->displayBlock('cms_content', $context, $blocks);
        // line 27
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_cms_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_breadcrumb"));

        // line 8
        echo "                <div class=\"breadcrumb cms-breadcrumb container\">
                    ";
        // line 9
        $this->loadTemplate("@Storefront/storefront/layout/breadcrumb.html.twig", "@Storefront/storefront/page/content/index.html.twig", 9)->display(twig_to_array(["context" =>         // line 10
($context["context"] ?? null), "themeIconConfig" =>         // line 11
($context["themeIconConfig"] ?? null), "category" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 12
($context["page"] ?? null), "header", [], "any", false, false, false, 12), "navigation", [], "any", false, false, false, 12), "active", [], "any", false, false, false, 12)]));
        // line 14
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_cms_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_content"));

        // line 18
        echo "                ";
        $context["cmsPage"] = ((sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "landingPage", [], "any", false, false, false, 18)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "landingPage", [], "any", false, false, false, 18), "cmsPage", [], "any", false, false, false, 18)) : (sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 18)));
        // line 19
        echo "                ";
        $context["cmsPageClasses"] = twig_trim_filter(("cms-page " . twig_striptags(sw_get_attribute($this->env, $this->source, ($context["cmsPage"] ?? null), "cssClass", [], "any", false, false, false, 19))));
        // line 20
        echo "                ";
        $context["landingPage"] = ((sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "landingPage", [], "any", false, false, false, 20)) ? (sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "landingPage", [], "any", false, false, false, 20)) : ([]));
        // line 21
        echo "                <div class=\"";
        echo sw_escape_filter($this->env, ($context["cmsPageClasses"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 22
        $this->displayBlock('page_content_blocks', $context, $blocks);
        // line 25
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 22
    public function block_page_content_blocks($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_blocks"));

        // line 23
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/page/content/detail.html.twig", "@Storefront/storefront/page/content/index.html.twig", 23)->display(twig_array_merge($context, ["cmsPage" => ($context["cmsPage"] ?? null), "landingPage" => ($context["landingPage"] ?? null)]));
        // line 24
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/page/content/index.html.twig";
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
        return array (  162 => 24,  159 => 23,  152 => 22,  144 => 25,  142 => 22,  137 => 21,  134 => 20,  131 => 19,  128 => 18,  121 => 17,  113 => 14,  111 => 12,  110 => 11,  109 => 10,  108 => 9,  105 => 8,  98 => 7,  91 => 27,  89 => 17,  86 => 16,  83 => 7,  76 => 6,  68 => 28,  66 => 6,  63 => 5,  56 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/base.html.twig' %}

{# @var page \\Shopware\\Storefront\\Page\\LandingPage\\LandingPage|\\Shopware\\Storefront\\Page\\CategoryPage\\CategoryPage #}
{% block base_main_inner %}
    <div class=\"container-main\">
        {% block page_content %}
            {% block cms_breadcrumb %}
                <div class=\"breadcrumb cms-breadcrumb container\">
                    {% sw_include '@Storefront/storefront/layout/breadcrumb.html.twig' with {
                        context: context,
                        themeIconConfig: themeIconConfig,
                        category: page.header.navigation.active
                    } only %}
                </div>
            {% endblock %}

            {% block cms_content %}
                {% set cmsPage = page.landingPage ? page.landingPage.cmsPage : page.cmsPage %}
                {% set cmsPageClasses = ('cms-page ' ~ cmsPage.cssClass|striptags)|trim %}
                {% set landingPage = page.landingPage ? page.landingPage : {} %}
                <div class=\"{{ cmsPageClasses }}\">
                    {% block page_content_blocks %}
                        {% sw_include \"@Storefront/storefront/page/content/detail.html.twig\" with {'cmsPage': cmsPage, 'landingPage': landingPage} %}
                    {% endblock %}
                </div>
            {% endblock %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/content/index.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/page/content/index.html.twig");
    }
}
