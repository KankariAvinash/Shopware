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

/* @Heptastore/storefront/page/home.html.twig */
class __TwigTemplate_1fae968dc003296732575b0692c771a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'base_header' => [$this, 'block_base_header'],
            'layout_header_navigation' => [$this, 'block_layout_header_navigation'],
            'layout_header_logo' => [$this, 'block_layout_header_logo'],
            'layout_header_logo_inner' => [$this, 'block_layout_header_logo_inner'],
            'layout_header_logo_link' => [$this, 'block_layout_header_logo_link'],
            'layout_header_logo_image' => [$this, 'block_layout_header_logo_image'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Heptastore/storefront/page/home.html.twig"));

        // line 1
        echo "<section class=\"header\">
    <div class=\"container-fluid\" style=\"background-color:#0a4b8c;width: 100%;height:100%\">
        <div class=\"custom_navigation_bar\">
            ";
        // line 4
        $this->loadTemplate("@Storefront/storefront/base.html.twig", "@Heptastore/storefront/page/home.html.twig", 4)->display($context);
        // line 5
        echo "            ";
        $this->displayBlock('base_header', $context, $blocks);
        // line 28
        echo "        </div>
    </div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_base_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_header"));

        // line 6
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/layout/header/header.html.twig", "@Heptastore/storefront/page/home.html.twig", 6)->display($context);
        // line 7
        echo "                ";
        $this->displayBlock('layout_header_navigation', $context, $blocks);
        // line 27
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_layout_header_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation"));

        // line 8
        echo "                    ";
        $this->displayBlock('layout_header_logo', $context, $blocks);
        // line 26
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_layout_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo"));

        // line 9
        echo "                        <div class=\"col-12 col-lg-auto header-logo-col\">
                            ";
        // line 10
        $this->loadTemplate("@Storefront/storefront/layout/header/logo.html.twig", "@Heptastore/storefront/page/home.html.twig", 10)->display($context);
        // line 11
        echo "                            ";
        $this->displayBlock('layout_header_logo_inner', $context, $blocks);
        // line 24
        echo "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_layout_header_logo_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_inner"));

        // line 12
        echo "                                <div class=\"header-logo-main\">
                                ";
        // line 13
        $this->displayBlock('layout_header_logo_link', $context, $blocks);
        // line 23
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_layout_header_logo_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_link"));

        // line 14
        echo "                                    <a class=\"header-logo-main-link\"
                                       href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.home.page");
        echo "\"
                                       title=\"";
        // line 16
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.logoLink")), "html", null, true);
        echo "\">
                                        ";
        // line 17
        $this->displayBlock('layout_header_logo_image', $context, $blocks);
        // line 22
        echo "                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_layout_header_logo_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image"));

        // line 18
        echo "                                            <picture class=\"header-logo-picture\">
                                                <img src=\"../../../Public/logo.jpg\" alt=\"logo\"/>
                                            </picture>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Heptastore/storefront/page/home.html.twig";
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
        return array (  179 => 18,  172 => 17,  165 => 22,  163 => 17,  159 => 16,  155 => 15,  152 => 14,  145 => 13,  138 => 23,  136 => 13,  133 => 12,  126 => 11,  118 => 24,  115 => 11,  113 => 10,  110 => 9,  103 => 8,  96 => 26,  93 => 8,  86 => 7,  79 => 27,  76 => 7,  73 => 6,  66 => 5,  56 => 28,  53 => 5,  51 => 4,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"header\">
    <div class=\"container-fluid\" style=\"background-color:#0a4b8c;width: 100%;height:100%\">
        <div class=\"custom_navigation_bar\">
            {% sw_include '@Storefront/storefront/base.html.twig' %}
            {% block base_header %}
                {% sw_include '@Storefront/storefront/layout/header/header.html.twig' %}
                {% block layout_header_navigation %}
                    {% block layout_header_logo %}
                        <div class=\"col-12 col-lg-auto header-logo-col\">
                            {% sw_include '@Storefront/storefront/layout/header/logo.html.twig' %}
                            {% block layout_header_logo_inner %}
                                <div class=\"header-logo-main\">
                                {% block layout_header_logo_link %}
                                    <a class=\"header-logo-main-link\"
                                       href=\"{{ path('frontend.home.page') }}\"
                                       title=\"{{ \"header.logoLink\"|trans|striptags }}\">
                                        {% block layout_header_logo_image %}
                                            <picture class=\"header-logo-picture\">
                                                <img src=\"../../../Public/logo.jpg\" alt=\"logo\"/>
                                            </picture>
                                        {% endblock %}
                                        {% endblock %}
                            {% endblock %}
                        </div>
                    {% endblock %}
                {% endblock %}
            {% endblock %}
        </div>
    </div>
</section>
", "@Heptastore/storefront/page/home.html.twig", "/home/avinash/Desktop/work/Shopware/custom/plugins/Heptastore/src/Resources/views/storefront/page/home.html.twig");
    }
}
