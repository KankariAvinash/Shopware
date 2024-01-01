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
            'base_content' => [$this, 'block_base_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Heptastore/storefront/page/home.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("@Storefront/storefront/base.html.twig", "@Heptastore/storefront/page/home.html.twig", 2)->display($context);
        // line 3
        $this->displayBlock('base_content', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_content"));

        // line 4
        echo "   <p>";
        echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</p>
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
        return array (  59 => 4,  46 => 3,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% sw_include '@Storefront/storefront/base.html.twig' %}
{% block base_content %}
   <p>{{ name }}</p>
{% endblock %}
", "@Heptastore/storefront/page/home.html.twig", "/home/avinash/Desktop/work/Shopware/custom/plugins/Heptastore/src/Resources/views/storefront/page/home.html.twig");
    }
}
